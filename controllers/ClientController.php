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
        if (isset($request["id_client"])) {
            $client = $this->model->getById($request["id_client"]);
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
                $this->error = "The data entered is incorrect, check that there is no other client with that email.";
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
        if (isset($request["id_client"])) {
            $client = $this->model->delete($request["id_client"]);
            header("Location: index.php?controller=Client&action=getAllClients");
        }
    }
}
