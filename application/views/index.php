<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starter Codeigniter & Angularjs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/app.css">
</head>
<body ng-cloak>
<div id="loader" class="page_load selectDisable">
    <img class="selectDisable" src="https://demo.dynamicdelivery.net/buy-pages/delivery/images/loader.gif">
</div>
<div id="wrapper" ng-cloak="">
    <div class="view page page-fade-in" ng-view ng-cloak=""></div>
</div>

<!-- Angular Init Here -->
<script>
    function showLoader() {
        $('body').find('#loader').show();
    }

    function hideLoader() {
        $('body').find('#loader').hide();
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<script src="<?php echo base_url(); ?>build/js/components.js"></script>

<!-- App JS Files
<script src="<?php echo base_url(); ?>bower_components/angular/angular.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/angular-route/angular-route.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/angular-animate/angular-animate.min.js"></script>

<script src="<?php echo base_url(); ?>angular/js/application.js"></script>
<script src="<?php echo base_url(); ?>angular/js/controller.js"></script>
<script src="<?php echo base_url(); ?>angular/js/directive.js"></script>
<script src="<?php echo base_url(); ?>angular/js/services.js"></script>
<script src="<?php echo base_url(); ?>angular/js/filters.js"></script>-->
</body>
</html>
