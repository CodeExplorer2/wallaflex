<?php
if (isset($_GET['mensaje'])) {
    echo "<script>alert('" . htmlspecialchars($_GET['mensaje']) . "');</script>";
}
?>

    <style>
        body {
            background-color: #0d1b61;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .cheems {
            background-color: rgba(234, 100, 51, 0.6);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .cheems h1 {
            color: #fff;
        }

        .cheems form {
            margin: 20px 0;
        }

        .cheems label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
        }

        .cheems input[type="text"],
        .cheems input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .cheems input[type="submit"] {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .cheems input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="cheems">
        <h1>CREA TU USUARIO</h1>
        <form action="<?php echo base_url('usuarios/agregar')?>" method="post">
            <div>
                <label>USUARIO</label>
                <input type="text" name="usuario" required />
            </div>
            <div>
                <label>PASSWORD</label>
                <input type="password" name="password" required />
            </div>
            <div>
                <input type="submit" value="Registrar">
            </div>
        </form>
    </div>
</body>
</html>