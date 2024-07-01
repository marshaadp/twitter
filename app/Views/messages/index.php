<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Messages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f2f2f2;
        }
       .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }
       .messages {
            list-style-type: none;
            padding: 0;
        }
       .message-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
       .message-content {
            margin-left: 10px;
            font-size: 16px;
        }
       .message-actions {
            flex-shrink: 0; /* Fix to prevent stretching */
        }
       .btn {
            background-color: #1da1f2;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }
       .btn-danger {
            background-color: #e0245e;
        }
       .form-container {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
       .form-group {
            margin-bottom: 15px;
        }
       .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
       .form-group input[type="text"],
       .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical; /* Allow vertical resizing of textarea */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Messages</h1>
        <?php if (session()->getFlashdata('status')):?>
            <p><?= session()->getFlashdata('status')?></p>
        <?php endif;?>

        <?php if (!empty($messages)):?>
            <ul class="messages">
                <?php foreach ($messages as $message):?>
                    <li class="message-item">
                        <div class="message-content">
                            <strong><?= $message->username?></strong>: <?= $message->message?>
                        </div>
                        <div class="message-actions">
                            <form action="<?= site_url('messages/delete/'.$message->messageID)?>" method="post">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        <?php else:?>
            <p>No messages found.</p>
        <?php endif;?>

        <div class="form-container">
            <h2>Send Message</h2>
            <form action="<?= site_url('messages/send')?>" method="post">
                <div class="form-group">
                    <label for="recipient">Recipient Username:</label>
                    <input type="text" id="recipient" name="recipient" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn">Tweet</button>
            </form>
        </div>

        <form action="<?= site_url('messages/viewed')?>" method="post">
            <button type="submit" class="btn">Mark all as viewed</button>
        </form>
    </div>
</body>
</html>