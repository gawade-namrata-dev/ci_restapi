<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Testing REST Client</title>

    <style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #FFF;
        margin: 40px;
        font: 16px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
        word-wrap: break-word;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 24px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 16px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 16px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>
<body>

<div id="container">
    <h1>Testing REST Client</h1>
    <div id="body">
        <ul>
            <li>
                <h2>All Users</h2>
                <ul>
                <?php
                foreach ($get_all as $user) {
                    echo "<li>".$user->id."  ".$user->name."  ".$user->email."</li>";
                }
                ?>
                </ul>
            </li>
            <li>
                <h2>User 5</h2>
                <ul>
                <?php
                echo "<li>".$get_user->name."  ".$get_user->email."</li>";
                ?>
                </ul>
            </li>
            <li>
                <h2>Update name for User 5</h2>
                <ul>
                <?php
                echo "<li>".$post_user->status."</li>";
                ?>
                </ul>
            </li>
            <li>
                <h2>Add User</h2>
                <ul>
                <?php
                echo "<li>".$put_user->status."</li>";
                ?>
                </ul>
            </li>
            <li>
                <h2>Delete User</h2>
                <ul>
                <?php
                echo "<li>".$delete_user->status."</li>";
                ?>
                </ul>
            </li>
        </ul>
    </div>
</div>

</body>
</html>
