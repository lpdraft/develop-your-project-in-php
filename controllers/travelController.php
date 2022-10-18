<?php

class TravelController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllTravels()
    {
        $travels = $this->model->get();
        if (isset($travels)) {
            $this->view->data = $travels;
            $this->view->render("travel/travelDashboard");
        }
    }

    function getTravel($request)
    {
        $travel = null;
        if (isset($request["id_dest"])) {
            $travel = $this->model->getById($request["id_dest"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $travel;
        $this->view->render("travel/travel");
    }

    function createTravel($request)
    {
        if (sizeof($_POST) > 0) {
            $travel = $this->model->create($_POST);

            if ($travel[0]) {
                header("Location: index.php?controller=Travel&action=getAllTravels");
            } else {
                echo $travel[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("travel/travel");
        }
    }

    function updateTravel($request)
    {
        if (sizeof($_POST) > 0) {
            $travel = $this->model->update($_POST);

            if ($travel[0]) {
                header("Location: index.php?controller=Travel&action=getAllTravels");
            } else {
                $this->action = $request["action"];
<<<<<<< HEAD
                $this->error = "The data entered is incorrect, check that there is no other hobbie with that name.";
=======
                $this->error = "The data entered is incorrect, check that there is no other travel with that name.";
>>>>>>> main
                $this->view->render("travel/travel");
            }
        } else {
            $this->view->render("travel/travel");
        }
    }

    function deleteTravel($request)
    {
        $action = $request["action"];
        $travel = null;
        if (isset($request["id_dest"])) {
            $travel = $this->model->delete($request["id_dest"]);
            header("Location: index.php?controller=Travel&action=getAllTravels");
        }
    }
}