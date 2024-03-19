<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <style>
        /* Basic styling for the chat */
        .chat-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .messages {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .message {
            margin-bottom: 10px;
        }
        .message .sender {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .message .content {
            margin-left: 20px;
        }
        .input-group {
            margin-top: 10px;
        }
        .input-group input[type="text"] {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .input-group button {
            width: 28%;
            padding: 8px;
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="messages">
            <!-- Example messages -->
            <div class="message">
                <div class="sender">John</div>
                <div class="content">Hello there!</div>
            </div>
            <div class="message">
                <div class="sender">Jane</div>
                <div class="content">Hi John!</div>
            </div>
            <!-- Add more messages dynamically using JavaScript -->
        </div>
        <div class="input-group">
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        // Function to send a message
        function sendMessage() {
            var messageInput = document.getElementById('messageInput');
            var message = messageInput.value;
            if (message.trim() !== '') {
                // Create a new message element
                var messageElement = document.createElement('div');
                messageElement.classList.add('message');

                // Create sender and content elements
                var senderElement = document.createElement('div');
                senderElement.classList.add('sender');
                senderElement.textContent = 'You'; // Assuming sender is the current user

                var contentElement = document.createElement('div');
                contentElement.classList.add('content');
                contentElement.textContent = message;

                // Append sender and content to message element
                messageElement.appendChild(senderElement);
                messageElement.appendChild(contentElement);

                // Append message element to messages container
                var messagesContainer = document.querySelector('.messages');
                messagesContainer.appendChild(messageElement);

                // Clear input field
                messageInput.value = '';
            }
        }
    </script>
</body>
</html>
