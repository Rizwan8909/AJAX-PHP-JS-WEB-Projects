<?php
$val = $_GET['select_value'];

$frameworks1 = array('Laravel', 'Codeignitor', 'CakePHP');
$frameworks2 = array('ReactJS', 'Angular', 'Vue.js');
$frameworks3 = array('Django', 'Flask', 'TensorFlow');

switch ($val) {
    case 'PHP':
        foreach ($frameworks1 as $selectValue) {
            echo ' <option>' . $selectValue . '</option>';
        }
        break;

    case 'JavaScript':
        foreach ($frameworks2 as $selectValue) {
            echo ' <option>' . $selectValue . '</option>';
        }
        break;

    case 'Python':
        foreach ($frameworks3 as $selectValue) {
            echo ' <option>' . $selectValue . '</option>';
        }
        break;

    default: echo "No language has selected";
    break;
}
