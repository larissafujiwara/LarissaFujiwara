<?php

class Pedido
{
	public function __construct($tipoFrete)
	{
		if ($tipoFrete === 'frete_normal') 
		{
			echo "Frete Normal";
		}
		elseif ($tipoFrete === 'frete_expresso')
		{
			echo "Frete Expresso";
		}
		elseif ($tipoFrete === 'frete_turbo')
		{
			echo "Frete Turbo";
		}
		else
		{
			echo "Nenhum frete encontrado";
		}
	}
}

$pedido = new Pedido('frete_expresso');

/*esse modelo é inadequado para os padrões de projeto.