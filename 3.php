<?php


?>
<script>
    function sortnumber(numbersr){
        var INT = /[0-9\g]/;
        // return numbersr;
            if (INT.test(numbersr)){
                return numbersr.sort;
            }
                return false;
    }
    console.log(sortnumber(5956560159466056));
</script>