<?php
/**
 * Controller for Users page
 */
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/app/models/UserModel.php';

class UserController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $users = $this->model->getAll();
        $this->loadView('users.php', ['users' => $users]);
    }

    public function load()
    {
        $users = $this->model->getAll();
        $this->loadView('user_grid.php', ['users' => $users]);
    }

    public function getDetail()
    {
        $response = array();
        $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

        if (!empty($id)) {
            $response = $this->model->getByID($id);
        }

        echo json_encode($response);
    }

    public function add()
    {
        $response = array('success' => false);
        $data = array(
            'first_name' => filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING),
            'last_name' => filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING),
            'email' => filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL)
        );
        if (!empty($data['first_name']) && !empty($data['last_name']) && !empty($data['email'])) {
            $response['success'] = $this->model->insert($data);
        }

        echo json_encode($response);
    }

    public function edit()
    {
        $response = array('success' => false);
        $data = array(
            'id' => filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING),
            'first_name' => filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING),
            'last_name' => filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING),
            'email' => filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL)
        );
        if (!empty($data['id']) && !empty($data['first_name'])
            && !empty($data['last_name']) && !empty($data['email'])
        ) {
            $response['success'] = $this->model->update($data);
        }

        echo json_encode($response);

    }

    public function delete()
    {
        $response = array('success' => false);
        $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

        if (!empty($id)) {
            $response['success'] = $this->model->delete($id);
        }

        echo json_encode($response);
    }
}
