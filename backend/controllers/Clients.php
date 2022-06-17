<?php

class clients extends Controller
{
    public function createClient()
    {
         $this->loadModel('Client');
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data)) return json_encode(['message' => 'No data']);
        $client = $this->Client->createClient($data);
        if ($client)  echo json_encode([true, $client]);
        else echo json_encode([false, 'Invalid credentials']);
    }
    public function shippingDetails($id)
    {
        $this->loadModel('Client');
        $client = $this->Client->shippingDetails($id);
        if ($client) echo json_encode([true, $client]);
        else echo json_encode([false, 'Invalid credentials']);
    }
    public function sendMail()
    {
        $this->loadModel('Client');
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data))
            return json_encode([ 'message' => 'No data']);
        $client = $this->Client->sendMail($data);
        if ($client) echo json_encode([true, $client]);
        else echo json_encode([false, 'Invalid credentials']);
    }
    public function create()
    {
        $this->loadModel('User');
        $data = json_decode(file_get_contents('php://input'), true);
        if (empty($data))
            return json_encode(['message' => 'No data']);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $user = $this->User->create($data);
        if ($user)
            echo json_encode([true, $user]);
        else echo json_encode([false, 'Invalid credentials']);
    }
}   
  