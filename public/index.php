<?php
require_once __DIR__ . "/../vendor/autoload.php";

use RMA\Form;
use RMA\Request;
use RMA\Validator;

$form1 = new Form(new Validator(new Request()));

$nome = $form1->createField("input","text",array(
    "id" => "inputNome",
    "name" => "nome",
    "class" => "form-control",
    "placeholder" => "Nome",
    "required" => true
));

$labelNome = $form1->createField("label", null, array(
    "for" => $nome->getId(),
    "value" => "Nome"
));

$email = $form1->createField("input","email",array(
    "id" => "inputEmail",
    "name" => "email",
    "class" => "form-control",
    "placeholder" => "Email",
    "required" => true
));

$labelEmail = $form1->createField("label", null, array(
    "for" => $email->getId(),
    "value" => "Email"
));


$mensagem = $form1->createField("textarea", null, array(
    "id" => "textareaMensagem",
    "name" => "mensagem",
    "class" => "form-control",
    "placeholder" => "Mensagem",
    "required" => true
));

$labelMensagem = $form1->createField("label", null, array(
    "for" => $mensagem->getId(),
    "value" => "Mensagem"
));


$submitButton = $form1->createField("button", "submit", array("value" => "Enviar"));
$cancelButton = $form1->createField("button", "reset", array("value" => "Limpar"));

$divider = $form1->createField("divider");

$fieldset = $form1->createField("fieldset");
$fieldset->adicionaCampo($labelNome)->adicionaCampo($nome)->adicionaCampo($divider)
     ->adicionaCampo($labelEmail)->adicionaCampo($email)->adicionaCampo($divider)
     ->adicionaCampo($labelMensagem)->adicionaCampo($mensagem)->adicionaCampo($divider)
     ->adicionaCampo($submitButton)->adicionaCampo($cancelButton);

$form1->adicionaCampo($fieldset);

$form1->render();

echo "<hr />";

$form2 = new Form(new Validator(new Request()));

$produto = $form2->createField("input", "text", array(
    "name" => "produto",
    "placeholder" => "Nome do Produto",
    "class" => "form-control"
));

$descricao = $form2->createField("textarea", null, array(
    "id" => "textDescricao",
    "name" => "descricao",
    "class" => "form-control",
    "placeholder" => "Descrição do Produto",
    "required" => true
));

$labelDescricao = $form2->createField("label", null, array(
    "for" => $descricao->getId(),
    "value" => "Descrição"
));

$form2->adicionaCampo($produto)->adicionaCampo($divider)
        ->adicionaCampo($labelDescricao)->adicionaCampo($divider)
        ->adicionaCampo($descricao)->adicionaCampo($divider)
        ->adicionaCampo($submitButton);
$form2->render();
echo "<hr />";

