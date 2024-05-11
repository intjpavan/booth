<?php
private function showPageLoginForm()
    {
        if ($this->feedback) {
            echo $this->feedback . "<br/><br/>";
        }

        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '  <title>Login</title>';
        echo '  <style>';
        echo '    body {';
        echo '      font-family: Arial, sans-serif;';
        echo '      background-color: #f2f2f2;';
        echo '    }';
        echo '    ';
        echo '    .container {';
        echo '      max-width: 400px;';
        echo '      margin: 0 auto;';
        echo '      padding: 20px;';
        echo '      background-color: #fff;';
        echo '      border-radius: 5px;';
        echo '      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);';
        echo '    }';
        echo '    ';
        echo '    h2 {';
        echo '      text-align: center;';
        echo '      color: #333;';
        echo '    }';
        echo '    ';
        echo '    .form-group {';
        echo '      margin-bottom: 20px;';
        echo '    }';
        echo '    ';
        echo '    .form-group label {';
        echo '      display: block;';
        echo '      font-weight: bold;';
        echo '      margin-bottom: 5px;';
        echo '      color: #555;';
        echo '    }';
        echo '    ';
        echo '    .form-group input {';
        echo '      width: 100%;';
        echo '      padding: 10px;';
        echo '      border: 1px solid #ccc;';
        echo '      border-radius: 4px;';
        echo '      box-sizing: border-box;';
        echo '    }';
        echo '    ';
        echo '    .form-group input[type="submit"] {';
        echo '      background-color: #4CAF50;';
        echo '      color: white;';
        echo '      cursor: pointer;';
        echo '    }';
        echo '    ';
        echo '    .form-group input[type="submit"]:hover {';
        echo '      background-color: #45a049;';
        echo '    }';
        echo '    ';
        echo '    .register-link {';
        echo '      text-align: center;';
        echo '      margin-top: 10px;';
        echo '    }';
        echo '    ';
        echo '    .register-link a {';
        echo '      color: #4CAF50;';
        echo '      text-decoration: none;';
        echo '    }';
        echo '    ';
        echo '    .register-link a:hover {';
        echo '      text-decoration: underline;';
        echo '    }';
        echo '  </style>';
        echo '</head>';
        echo '<body>';
        echo '  <div class="container">';
        echo '    <h2>Login</h2>';
        echo '    <form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '" name="loginform">';
        echo '      <div class="form-group">';
        echo '        <label for="login_input_username">Username (or email)</label>';
        echo '        <input id="login_input_username" type="text" name="user_name" required />';
        echo '      </div>';
        echo '      <div class="form-group">';
        echo '        <label for="login_input_password">Password</label>';
        echo '        <input id="login_input_password" type="password" name="user_password" required />';
        echo '      </div>';
        echo '      <div class="form-group">';
        echo '        <input type="submit" name="login" value="Log in" />';
        echo '      </div>';
        echo '    </form>';
        echo '  </div>';
        echo '</body>';
        echo '</html>';
        
    }
?>