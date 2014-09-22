<!doctype html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <title>{{active}} {{location.href}}</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div ng-controller="MainController">
    <div ng-repeat="contact in contacts">
        <p>
            <input type="text" ng-model="{{contact.firstName}}"/>
        </p>
        <p>
            {{contact.lastName}}
        </p>

    </div>
</div>
    <script type="application/javascript" src="angular.js"></script>
    <script type="application/javascript" src="controller.js"></script>
</body>
</html>