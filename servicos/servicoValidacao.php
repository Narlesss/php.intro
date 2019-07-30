<?php
/**
Create: Narles Silva dos Santos

**/


function validaNome(string $nome): bool
{
	if(empty($nome))
	{
	    setarMensagemErro ('O nome não pode ser vazio. por favor preencha o novamente') ;
	    return false;
	}

	//validar quantidade minima de caracteres
	else if(strlen($nome) < 3)
	{
		setarMensagemErro('O nome deve conter mais de 3 caracteres') ;
		return false;

	}

	//verificar se o nome é muito extenso
	else if(strlen($nome) > 40)
	{
		setarMensagemErro('O nome é muito extenso') ;
		return false;
	}
	return true;
}

function validaIdade(string $idade) : bool
{
	//validar idade 
	{
		setarMensagemErro('Informe um número para idade ') ;
		return false;
	}
	return true;
}



