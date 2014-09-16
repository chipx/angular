function OrderFormController($scope){

    // Определение параметров модели. Вид отображения будет зависеть от
    // обработки циклом массива перечня услуг, для которых автоматически будет	// сгенерирован формат вывода списком через тэг li.

    $scope.services = [
        {
            name: 'Web Development',
            price: 300,
            active:true
        },{
            name: 'Design',
            price: 400,
            active:false
        },{
            name: 'Integration',
            price: 250,
            active:false
        },{
            name: 'Training',
            price: 220,
            active:false
        }
    ];

    $scope.toggleActive = function(s){
        s.active = !s.active;
    };

    // Вспомогательный метод подсчета общей суммы по всем выбранным
    // позициям.

    $scope.total = function(){

        var total = 0;

        // Use the angular forEach helper method to
        // loop through the services array:

        angular.forEach($scope.services, function(s){
            if (s.active){
                total+= s.price;
            }
        });

        return total;
    };
}