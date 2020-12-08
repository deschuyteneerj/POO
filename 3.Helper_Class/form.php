<?php
class Form{
    private $data;

    public function __construct($data = array()){
        $this->data = $data;
    }

    private function putKeyValue($keyValue){
        if (isset($this->data[$keyValue])){
            return $this->data[$keyValue];
        }else{
            return null;
        }
    }

    public function beginFormMethod($formMethod){
        return '<form method="'.$formMethod.'">';
    }

    public function createEntitled($entitled){
        return '<p>'.$entitled.'</p>';
    }

    public function createInput($inputType, $inputName){
        return '<label for="'.$inputName.'">'.$inputName.'</label><input type="'.$inputType.'" name="'.$inputName.'"value="'.$this->putKeyValue($inputName).'"><br />';
    }

    public function createSelect($selectName, $optionsValues){
        foreach ($optionsValues as $optionValue) {
            $eachOption.='<option value="'.$optionValue.'">'.$optionValue.'</option>';
        }
        return '<select name="'.$selectName.'">'.$eachOption.'</select><br />';
    }

    public function createTextarea($displayRows, $textAreaName){
        return '<label for="'.$textAreaName.'">'.$textAreaName.'</label><textarea rows="'.$displayRows.'" name="'.$textAreaName.'"value="'.$this->putKeyValue($textAreaName).'"></textarea><br />';
    }

    public function createInputCheckboxRadio($inputType, $inputName, $inputValues){
        foreach ($inputValues as $inputValue) {
            $input.= '<input type="'.$inputType.'" value="'.$inputValue.'" name="'.$inputName.'"><label for="'.$inputName.'">'.$inputValue.'</label><br />';
        }
        return $input;
    }

    public function createSubmit(){
        return '<br /><button type="submit" name="submit">Submit</button>';
    }

    public function endingForm(){
        return '</form><br />';
    }

    function addUser(){
        $connect = Connection::connect("localhost", "testoop", "root", "Password_1");
        $temp = $connect->prepare("INSERT INTO user VALUES (NULL, :userName, :userComment)");
        $temp->bindParam(':userName', $this->data["userName"]);
        $temp->bindParam(':userComment', $this->data["userComment"]);
        echo $temp->execute();
    }
}
?>