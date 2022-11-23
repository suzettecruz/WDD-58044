<html>
    <head>
        <title>My login form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
        background-color: #666;
        padding: 20px;
        text-align: center;
        font-size: 35px;
        color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
        float: left;
        width: 25%;
        height: 300px; /* only for demonstration, should be removed */
        background: #1e81b0;
        padding: 20px;
        color: white;
        }

        /* Style the list inside the menu */
        nav ul {
        list-style-type: none;
        padding: 0;
        }

        article {
        float: left;
        padding: 20px;
        width: 50%;
        background-color: #f1f1f1;
        height: 300px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section::after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
        nav, article {
            width: 100%;
            height: auto;
        }
        }
        </style>
    </head>
    <body>

        <section>
            <header>
                <p>Website Design and Development</p>
            </header>
            <nav>
                <h2>PHP with MySQL Database</h2>   
                <h4>Laboratory 1</h4>
               
            </nav>
            <nav>
                <p>Group Names</p>
                <p>Aquino, Rafael
                <p>Coching, Micolo</p>
                <p>Cruz, Suzette</p>    
                <p>Del Rosario, Lance</p>     
                <p>Gonzalez, Allan</p>   
               
            </nav>
        
            <article>
                <form action = "connection.php" method = "post">
                    <p>
                        <label>Username:</label>
                        <input type = "text" id = "text" name = "user">
                    </p>
                    <p>
                        <label>Password:</label>
                        <input type = "password" id = "myInput" name = "pass">
                        <input type="checkbox" onclick="myFunction()">Show Password

                    </p>
                    <p>
                        <input type = "submit" id = "btn" name = "Login"/>
                    </p>
                 </form>
            </article>
        </section>

        <script>
            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
        </script>
    </body>
</html>


