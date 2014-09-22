function MainController($scope){
    $scope.contact = {
        'firstName': '',
        'lastName': ''
    };

    $scope.contacts = [
        {
            'firstName': 'Ivanov',
            'lastName': 'Ivan'
        },
        {
            'firstName': 'Petrov',
            'lastName': 'Petr'
        }
    ]
}