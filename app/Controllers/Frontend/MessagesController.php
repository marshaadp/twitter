<?php

namespace App\Controllers\Frontend;

use App\Controllers\Frontend\BaseController;
use App\Models\Messages;

class MessagesController extends BaseController
{
    protected $messagesModel;

    public function __construct()
    {
        $this->messagesModel = new Messages();
    }

    public function index()
    {
        $user_id = session()->get('user_id'); // Assuming you are using session to store user_id
        $messages = $this->messagesModel->recentMessages($user_id);

        return view('messages/index', [
            'messages' => $messages
        ]);
    }

    public function delete($messageID)
    {
        $user_id = session()->get('user_id');
        $this->messagesModel->deleteMsg($messageID, $user_id);

        return redirect()->to('/messages')->with('status', 'Message deleted successfully');
    }

    public function markAsViewed()
    {
        $user_id = session()->get('user_id');
        $this->messagesModel->messagesViewed($user_id);

        return redirect()->to('/messages')->with('status', 'Messages marked as viewed');
    }

    public function send()
{
    $user_id = session()->get('user_id');
    
    if ($this->request->getMethod() === 'post') {
        $messageTo = $this->request->getPost('messageTo');
        $message = $this->request->getPost('message');
        
        // Add validation or other logic if needed
        if ($messageTo && $message) {
            $data = [
                'message' => $message,
                'messageTo' => $messageTo,
                'messageFrom' => $user_id,
                'status' => '0',
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            // Insert message into database
            $this->messagesModel->insert($data);
            
            return redirect()->to('/messages')->with('status', 'Message sent successfully');
        }
    }
    
    return view('messages/send');
}
}
    

