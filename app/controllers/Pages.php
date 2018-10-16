<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->people = $this->model('_Pages'); //name your model  ************************************************
      }

      public function index() {

        // variables for data or model functions go here ****************************************************************
  
          
         $people = $this->people->getAllPeople();
          
    // $people = $this->model('_Pages')->getAllPeople(); this line of code cannot work
            $title = $this->people->title();
        // add data or variables to the array using key-value pairs  *****************************************************
        $data = ['title' => $title,
                'people' => $people];

        // call your view   **********************************************************************************************
        $this->view('pages/index', $data);
    }
        public function addperson() {
            $data = [];
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['dob'])) {
                if($this->people->addperson($_POST['fname'], $_POST['lname'], $_POST['dob'])) {
                    $data = [
                        'title' => "Person add successfully"
                    ];
                }
            } else {
                $data = [
                    'title' => "Please add a person"
                ];
            }
            $this->view('pages/addperson', $data);
        }
  }
?>