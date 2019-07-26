<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//verifica nome vazio
if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}
//validar quantidade minima de caracteres
if(strlen($nome) < 3)
{
	echo 'O nome deve conter mais de 3 caracteres';
	return;
}
//verificar se o nome é muito extenso
if(strlen($nome) > 40)
{
	echo 'O nome é muito extenso';
	return;
}
//validar idade
if(!is_numeric($idade))
{
	echo 'Informe um número para idade ';
}


if($idade >= 6 && $idade <=12)
{
	for($i = 0;$i <= count($categorias);$i++)
	{
		if($categorias[$i] == 'infantil')
		    echo "O nadador " .$nome. " Compete na categoria " .$categorias[$i];		
			
	}
}
else if($idade >= 13 && $idade <=18)
{
	for($i = 0;$i <= count($categorias);$i++)
	{
		if($categorias[$i] == 'adolescente')
		    echo "O nadador ".$nome. " Compete na categoria adolescente" ;		
			
	}
}
else
{
	for($i = 0;$i <= count($categorias);$i++)
	{
		if($categorias[$i] == 'adulto')
		    echo "O nadador ".$nome. " Compete na categoria adulto " ;		
			
	}
}


