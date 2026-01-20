<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 5px; max-width: 400px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px 15px; cursor: pointer; width: 100%; }
        button:hover { background: #218838; }
        #response { margin-top: 20px; padding: 10px; border-radius: 4px; display: none; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>

<div class="container">
    <h2>Send Us a Message</h2>
    <form id="ajaxForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
        
        <button type="submit">Submit</button>
    </form>

    <div id="response"></div>
</div>

<script>
    document.getElementById('ajaxForm').addEventListener('submit', function(e) {
        // 1. Prevent default form submission (page reload)
        e.preventDefault();

        const responseDiv = document.getElementById('response');
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;

        // 2. Create XMLHttpRequest object
        const xhr = new XMLHttpRequest();

        // 3. Send data using POST method
        xhr.open('POST', 'process_form.php', true);

        // 4. Set request header for POST data
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // 5. Handle response
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) { // Request finished
                responseDiv.style.display = 'block';
                
                if (xhr.status === 200) {
                    // Success handling
                    responseDiv.innerHTML = xhr.responseText;
                    
                    // Style based on server message content
                    if (xhr.responseText.includes("Success")) {
                        responseDiv.className = 'success';
                        document.getElementById('ajaxForm').reset();
                    } else {
                        responseDiv.className = 'error';
                    }
                } else {
                    // Error handling
                    responseDiv.className = 'error';
                    responseDiv.innerHTML = "An error occurred: " + xhr.status;
                }
            }
        };

        // Prepare and send the data
        const params = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);
        xhr.send(params);
    });
</script>

</body>
</html>