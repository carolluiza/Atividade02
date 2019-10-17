<?php
require ("Funcionario.php");
require ("Gerente.php");
require ("Programador.php");
require ("Faxineira.php");
require ("Vendedor.php");


$gerente = new Gerente ("Fernanda", "673.561.502-63", 2500, " Gerente");
$gerente->getNome();
$gerente->getCpf();
    
    echo "Salario Bruto: ".$gerente->getSalario()."<br>";

$gerente->getCargo();
$gerente->setDescontar1(20);
$gerente->getDescontar1();
$gerente->descontar();

echo "<br>"."<br>";

$vendedor = new Vendedor ("Carine", "123.456.789-00", 1500, " Vendedora");
$vendedor->getNome();
$vendedor->getCpf();

    echo "Salario Bruto: ".$vendedor->getSalario()."<br>";

$vendedor->getCargo();
$vendedor->setDescontar2(10);
$vendedor->getDescontar2();
$vendedor->descontar();

echo "<br>"."<br>";

$programador = new Programador ("Helena", "110.228.412-38", 3500, " Programador");
$programador->getNome();
$programador->getCpf();

    echo "Salario Bruto: ".$programador->getSalario()."<br>";

$programador->getCargo();
$programador->setDescontar4(5);
$programador->getDescontar4();
$programador->descontar();


echo "<br>"."<br>";

$faxineira = new Faxineira ("Luiza", "029.307.252-30", 1050, " Faxineira");
$faxineira->getNome();
$faxineira->getCpf();

    echo "Salario Bruto: ".$faxineira->getSalario()."<br>";

$faxineira->getCargo();
$faxineira->setDescontar3(3);
$faxineira->getDescontar3();
$faxineira->descontar()."<br>";

?>