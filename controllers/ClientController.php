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
<<<<<<< HEAD
        if (isset($request["id_admin"])) {
            $client = $this->model->getById($request["id_admin"]);
=======
        if (isset($request["id_client"])) {
            $client = $this->model->getById($request["id_client"]);
>>>>>>> main
        }

        $this->view->action = $request["action"];
        $this->view->data = $client;
        $this->view->render("clients/client");
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
            $this->view->render("clients/client");
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
<<<<<<< HEAD
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
=======
                $this->error = "The data entered is incorrect, check that there is no other client with that email.";
>>>>>>> main
                $this->view->render("clients/client");
            }
        } else {
            $this->view->render("clients/client");
        }
    }

    function deleteClient($request)
    {
        $action = $request["action"];
        $client = null;
<<<<<<< HEAD
        if (isset($request["id_admin"])) {
            $client = $this->model->delete($request["id_admin"]);
            header("Location: index.php?controller=Client&action=getAllClients");
        }
    }
}
=======
        if (isset($request["id_client"])) {
            $client = $this->model->delete($request["id_client"]);
            header("Location: index.php?controller=Client&action=getAllClients");
        }
    }
}
>>>>>>> main
