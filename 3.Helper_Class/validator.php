<?php
class Validator
{
    public function checkString($check){
        if (filter_var($check, FILTER_SANITIZE_STRING)){
            return;
        }else{
            return "It is not a string.";
        }
    }

    public function checkInteger($check){
        if (filter_var($check, FILTER_VALIDATE_INT)) {
            return;
        }else{
            return "It is not an integer.<br />";
        }
    }

    public function checkFloatNumber($check){
        if (filter_var($check, FILTER_VALIDATE_FLOAT)) {
            return;
        }else{
            return "It is not a float number.<br />";
        }
    }

    public function checkBoolean($check){
        if (filter_var($check, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)!== NULL) {
            return;
        }else{
            return "It is not a boolean.<br />";
        }
    }

    public function checkMail($check){
        if (filter_var($check, FILTER_VALIDATE_EMAIL)) {
            return;
        }else{
            return "It is not an email.<br />";
        }
    }
}
?>