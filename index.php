<?php

class Form {
    private $action;
    private $method;
    private $fields;

    public function __construct($action = "", $method = "POST") {
        $this->action = $action;
        $this->method = $method;
        $this->fields = [];
    }

    public function addField($name, $type = "text", $placeholder = "", $value = "") {
        $this->fields[$name] = [
            'type' => $type,
            'placeholder' => $placeholder,
            'value' => $value
        ];
    }

    public function generateForm() {
        $form = "<form action='{$this->action}' method='{$this->method}'>";
        
        foreach ($this->fields as $name => $attributes) {
            $form .= "<input type='{$attributes['type']}' name='{$name}' placeholder='{$attributes['placeholder']}' value='{$attributes['value']}' />";
        }

        $form .= "<button type='submit'>Submit</button></form>";

        return $form;
    }
}

// Esempio di utilizzo:
$formCreator = new Form ("process.php", "POST");
$formCreator->addField("username", "text", "Enter your username");
$formCreator->addField("password", "password", "Enter your password");
$formCreator->addField("submit", "submit", "", "Login");

echo $formCreator->generateForm();
?>
