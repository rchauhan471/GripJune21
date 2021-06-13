<!DOCTYPE html>
<html>

<head>
    <title>Banking System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('navbar.php'); ?>

    <section>
        <div class="container">
        <div class="row">
            <div class="col s6 description">
                <p><h1>Welcome to</h1>
                <h2>Sparks Bank</h2>
                </p>
            </div>
            <div class="col s6">
                <img src="vector.svg" class="vector logo"  width="500px" height="500px"alt="mobile banking vector image">
            </div>
        
        <div class="go-to">
        	<a href="transferHistory.php" class=" button waves-effect waves-light btn-large z-depth-2">Transfer History</a>
        	<a href="selectUser.php" class=" button waves-effect waves-light btn-large z-depth-2">Select User</a>
        </div>
    </div>
    
    </section>

</body>

</html>