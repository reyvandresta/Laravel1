<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #001eff;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
            margin-left: 23%;
            border: none;
            border-radius: 4px;
        }

        .form-wrapper {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        label {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <form id="loginform" method="post">
                <div>
                    <label for="username">Username:</label>
                    <div class="form-group">
                        <input type="text" name="username" id="username">
                    </div>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <div class="form-group">
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div>

    <script>
        // Example JavaScript (optional functionality)
        document.getElementById('loginform').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent actual form submission
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username && password) {
                alert('Login Successful');
            } else {
                alert('Please enter both username and password.');
            }
        });
    </script>
</body>
</html>
