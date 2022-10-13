<?php

class ClientController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllClients()
    {
        $clients = $this->model->get();
        if (isset($clients)) {
            $this->view->data = $clients;
            $this->view->render("clients/clientDashboard");
        }
    }

     function getClient($request)
     {
       $client = null;
        if (isset($request["id"])) {
             $client = $this->model->getById($request["id"]);
         }

         $this->view->action = $request["action"];
         $this->view->data = $client;
         $this->view->render("client/client");
     }

     function createClient($request)
     {
         if (sizeof($_POST) > 0) {
             $client = $this->model->create($_POST);

             if ($client[0]) {
                 header("Location: index.php?controller=Client&action=getAllClients");
             } else {
                 echo $client[1];
             }
         } else {
             $this->view->action = $request["action"];
             $this->view->render("client/client");
         }
     }

     function updateClient($request)
     {
         if (sizeof($_POST) > 0) {
             $client = $this->model->update($_POST);

             if ($client[0]) {
                 header("Location: index.php?controller=Client&action=getAllClients");
             } else {
                 $this->action = $request["action"];
                 $this->error = "The data entered is incorrect, check that there is no other client with that email.";
                 $this->view->render("client/client");
             }
         } else {
             $this->view->render("client/client");
         }
     }

     function deleteClient($request)
     {
         $action = $request["action"];
         $client = null;
         if (isset($request["id"])) {
             $client = $this->model->delete($request["id"]);
             header("Location: index.php?controller=Client&action=getAllClients");
         }
     }
}
