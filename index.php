<!doctype html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <title>{{active}} {{location.href}}</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<form ng-controller="OrderFormController">
    <h1>Services</h1>
    <ul>
        <!-- Запуск цикла обработки массива с перечнем услуг, назначается при нажатии элемента. При этом если нужно устанавливается активный css-класс. -->
        <li ng-repeat="service in services" ng-click="toggleActive(service)" ng-class="{active:service.active}">
            <!-- Обратите внимание на использование фильтра валюты, он задает формат вывода цены. -->
            {{service.name}} <span>{{service.price | currency}}</span>
        </li>
    </ul>
    <div class="total">
        <!-- Подсчет общей стоимости всех выбранных услуг. Выводится по заданному формату валюты. -->
        Total: <span>{{total() | currency}}</span>
    </div>
</form>
    <script type="application/javascript" src="angular.js"></script>
    <script type="application/javascript" src="controller.js"></script>
</body>
</html>