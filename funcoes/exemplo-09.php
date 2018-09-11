<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino Gerente de vendas
				)
			),
			//termino Diretor Comercial
			//Inicio: diretor Financeiro	
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio Gerente de Contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//inicio Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)

							//termino Supervisor de Pagamentos
						)
					),
					//termino Gerente de Contas a Pagar
					//Inicio Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Comprador'
									)
								)
							)
						)
						//termino supervisor de suprimentos
					)
					//termino gerente de compras
				)
			)
			//termino diretor financeiro
		)

	)

);

function exibe($cargos){

	$html = "<ul>";

	foreach ($cargos as $cargo) {
		

		$html .= "<li>"; //abre a tag html

		$html .= $cargo['nome_cargo']; //exibe o nome do cargo

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) { //testa se o campo 'subordinado' tem valor e se é maior que zero 

			$html .= exibe($cargo['subordinados']); //exibe todos os subordinados
		}

		$html .= "</li>"; //fecha a tag html

	}

	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

 ?>