<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPJS_CRUD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    
    <!-- PHP LINK FOR process.php -->
    <?php include_once 'process.php'; ?>

    <!-- Navigation bar -->
    <div class="header">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
            <div class="container">
                <a class="navbar-brand" href="#">PHP and JS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav  me-auto">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li> -->
                        
                    </ul>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Action
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Home</a></li>
                            <li><a class="dropdown-item" href="addedit.php">Add New</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    
    <div class="container">


        <!-- Success or Error msg -->
        <?php if(isset($_SESSION['message']) && $_SESSION['msg_type'] == "success") { ?>
    
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['message']; ?>
            </div>


    
        <?php } elseif(isset($_SESSION['message']) && $_SESSION['msg_type'] == "error") { ?>

            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['message']; ?>
            </div>

        <?php } ?>

        <?php unset($_SESSION["message"]); unset($_SESSION["msg_type"]); ?>