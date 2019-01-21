var mySingleton = (function(){
    
    // Instance stores a reference to the Singleton
    var instance;

    function init(){

        //Private method and variable
        function privateMethod(){
            console.log('I am private method');
        }

        var privateVariable = 'I am private variable';

        return {

            //Public method and variable
            publicMethod: function (){
                console.log('I am public method');
            },

            publicProperty: "I am public property"
        }
    }


    return {

        getInstance: function(){

            if(!instance){
                instance = init();
            }

            return instance;
        }

    };


})();


var singleA = mySingleton.getInstance();
var singleB = mySingleton.getInstance();

console.log(singleA == singleB); 