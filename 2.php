<script>
function is_name_valid(name){
    var uppercaser = /[A-Z\g]/;
    console.log(uppercaser);
    if(name.length >= 3 && uppercaser.test(name) == true ){
        return true;
    }
        return false;
};
function is_age_valid(age){
    var numberser = /[0-9\g]/;

        if(age.length == 2 && numberser.test(age) == true){
            return true;
        }
            return false;
};
function is_username_valid(username){
    var Uname = /[a-z]{4}(_|.)[0-9]{3}/;

    if(username.length == 8 && Uname.test(username)){
        return true;
    }
        return false;
};

console.log(is_name_valid("REZA")); // benar
console.log(is_age_valid("13")); // benar
console.log(is_username_valid("rudi_124")); // benar
</script>