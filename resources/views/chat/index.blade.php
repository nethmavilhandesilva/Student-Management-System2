@extends('layouts.app')

@section('content')
<div class="container">
    <div class="chat-container">
        <div id="chat-box">
            <!-- Chat messages will be displayed here -->
        </div>
        <div class="chat-input">
            <input type="text" id="chat-message" placeholder="Type a message...">
            <button id="send-message">Send</button>
        </div>
    </div>
</div>
<style>.chat-container {
    width: 300px;
    height: 400px;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
}

#chat-box {
    flex-grow: 1;
    overflow-y: scroll;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.chat-input {
    display: flex;
    padding: 10px;
}

.chat-input input {
    flex-grow: 1;
    padding: 10px;
}

.chat-input button {
    padding: 10px;
}
</style>

<script>
    document.getElementById('send-message').addEventListener('click', function() {
        var message = document.getElementById('chat-message').value;
        
        // Send the message to the backend using AJAX or Axios
        axios.post('/send-message', { message: message })
            .then(response => {
                // Display the message in the chat box
                var chatBox = document.getElementById('chat-box');
                chatBox.innerHTML += `<p>${response.data.message}</p>`;
            });
    });
</script>
@endsection
