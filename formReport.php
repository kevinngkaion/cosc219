<?php


?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Report</title>
        <meta name="description" content="Kevin Ngkaion's personal website">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='styles.css'>
        <script src='scripts.js'></script>
    </head>
    <body>
        <header>
            <h1><a class='title' href="index.html">Kevin Ngkaion</a></h1>
            <nav>
                <ul class='navLinks'>
                    <li><a href="formValidation.html">FORM Validation</a></li>
                    <li><a href="formReport.php">FORM and REPORT</a></li>
                    <li><a href="ajaxGetPost.html">AJAX GET versus POST</a></li>
                    <li><a href="https://www.linkedin.com/in/kevinngkaion/" target="_blank">My LinkedIn Account</a></li>
                    <li><a href="https://kevinngkaion.wordpress.com/" target="_blank">My WordPress Blog</a></li>
                    <li><a href="jQueryDemo.html">My JQuery Demo</a></li>
                    <li><a href="otherProjects.html">My Other Projects</a></li>
                </ul>
            </nav>
            <a class="contact" href="#"><button>Contact</button></a>
        </header>
        <main>
            <div class='formContainer'>
                <form name='regForm' onsubmit="return validateForm()" action='success.php' method='POST'>
                    <h2>Form Report</h2>
                    <div class='input'>
                        <label for='fname'>First Name</label>
                        <input id='fname' name='fname' type='text' placeholder='Obi Wan'>
                    </div>
                    <div class='input'>
                        <label for='lname'>Last Name</label>
                        <input id='lname' name='lname' type='text' placeholder='Kenobi'>
                    </div>
                    <div class='input'>
                        <label for='email'>Email Address</label>
                        <input id='email' name='email' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                    </div>
                    <div class='input'>
                        <label for='phone'>Phone Number</label>
                        <input id='phone' name='phone' type='tel' placeholder="123-45-678">
                    </div>
                    <div class='input'><p style='font-weight: bold' id='alertBox' hidden>Last name cannot be empty</p></div>
                    <div class='input valSubmit'>
                        <input id='valSubmit' name='valSubmit' type='submit' value='Submit'>
                    </div>
                    <div class='input valSubmit'>
                        <button id="generateReport"><a href='reports.php'>Show All Entries</a></button>
                    </div>
                </form>
                
                
            </div>
        </main>
    </body>
</html>
