<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--  Για να δουλευει σον chrome? -->
    <meta http-equiv="pragma" content="no-cache" />
 
    <title><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- custom css for users -->
    <!-- <link href="libs/css/user.css" rel="stylesheet" media="screen"> -->    
    <link href="libs/css/index.css" rel="stylesheet" media="screen"> 
    <link href="libs/css/modal.css" rel="stylesheet" media="screen"> 

    
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
        
</head>

<body>
 
    <?php include 'navigation.php'; ?>
 
    <!-- container -->
    <div class="container">
        <div class="row">
 
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
            </div>
        </div>