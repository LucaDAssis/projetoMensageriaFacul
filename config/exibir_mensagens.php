<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Mensagens</title>
</head>
<body>
    <div id="messages-container">

    </div>

    <script>
        function fetchMessages(){
            fetch('get_messages.php')
                .then(response => response.json)
                .then(data => {
                    const messagesContainer = document.getElementById('messages-container');
                    messagesContainer.innerHTML = '';

                    data.forEach(message => {
                        const messageElement = document.createElement('div');
                        messageElement.textContent = message.message;
                        messagesContainer.appendChild(messageElement);
                    });

                .
                    cath(error => console.error('Error ao buscar mensagens: ', error))
            }

            fetchMessages();

    </script>
</body>

</html>
