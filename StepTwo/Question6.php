<?php
/**
 * La interface de usuarios contiene dos tipos de controles de entrada.
 * TestInput, acepta todos los tipos
 * NumericInput que solo acepta dígitos.
 * Implemente la clase TextInput que contenga:
 * - Un método addText($text) que agrega el texto dado al actual valor
 * - Un método getValue() que devuelva el actual valor
 *
 * Implemente la clase NumericInput que contenga:
 * - Hereda de TextInput
 * - El método add ignorará todo valor no numérico
 */

class TextInput
{

}

class NumericInput
{

}

//$input = new NumericInput();
//$input->add('1');
//$input->add('a');
//$input->add('0');
//echo $input->getValue();