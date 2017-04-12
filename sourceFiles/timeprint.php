<?php
class TimePrint {
    public function printTimeSomewhere(){
        date_default_timezone_set("Europe/Riga");
        echo date("h:i:sa");
    }
}

?>