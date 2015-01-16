<?php
require_once __DIR__ . "/../vendor/autoload.php";

use BVW\Form;
use BVW\Input;
use BVW\Textarea;
use BVW\Label;
use BVW\Divider;
use BVW\Button;

$nome = new Input("text",array(
    "id" => "inputNome",
    "name" => "nome",
    "class" => "form-control",
    "placeholder" => "Nome",
    "required" => true
));
$labelNome = new Label(array(
    "for" => $nome->getId(),
    "value" => "Nome"
));
$email = new Input("email",array(
    "id" => "inputEmail",
    "name" => "email",
    "class" => "form-control",
    "placeholder" => "Email",
    "required" => true
));
$labelEmail = new Label(array(
    "for" => $email->getId(),
    "value" => "Email"
));
$mensagem = new Textarea(array(
    "id" => "textareaMensagem",
    "name" => "mensagem",
    "class" => "form-control",
    "placeholder" => "Mensagem",
    "required" => true
));
$labelMensagem = new Label(array(
    "for" => $mensagem->getId(),
    "value" => "Mensagem"
));

$submitButton = new Button("", "Enviar", "submit");
$cancelButton = new Button("", "Cancelar");

$divider = new Divider();

$form = new Form();

$form->adicionaCampo($labelNome)->adicionaCampo($nome)->adicionaCampo($divider)
     ->adicionaCampo($labelEmail)->adicionaCampo($email)->adicionaCampo($divider)
     ->adicionaCampo($labelMensagem)->adicionaCampo($mensagem)->adicionaCampo($divider)
     ->adicionaCampo($submitButton)->adicionaCampo($cancelButton);

$form->render();