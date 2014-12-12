<?php

class Retirantes extends Produtos   {
	
	
	public $tabela;
	public $id;
	public $conexaoDB;
	
	#Construtor - Conecta e seleciona a tabela
	function __construct() {
		
		$this->conexaoDB=new DB();
		$this->tabela="professor";
	
	}

#Lista professores
	function Listar(){
		
		//"de para" com nomes das tabelas
		switch($this->tabela) {
			case produto:
				$newtable = 'srs_product';
				break;
			case categoria:
				$newtable = 'srs_category';
				break;
			case entrada:
				$newtable = 'srs_input';
				break;
			case saida:
				$newtable = 'srs_output';
				break;
			case aluno:
				$newtable = 'aluno';
				break;
			case professor:
				$newtable = 'srs_requester';
				break;
			case fornecedor:
				$newtable = 'srs_supplier';
				break;
		}
		
		$produtos=$this->conexaoDB->PesquisaCampos("id,nome,materia",$this->tabela);
		
		echo '<h1>Listando Professores</h1><br><br>';
		echo '<table align="center">';
		//echo '<tr><td class="header">ID</td><td class="header">Nome</td><td></td><td></td></tr>';
		echo '<tr><td class="header">ID</td><td class="header">Nome</td><td class="header">Matéria</td><td></td></tr>';
		while($produto=mysql_fetch_array($produtos)){
			
			echo '<tr>';
			echo '<td>'.$produto['id'].'</td>';
			echo '<td>'.$produto['nome'].'</td>';
                        echo '<td>'.$produto['materia'].'</td>';
			//echo '<td><a href="main.php?url='.$this->tabela.'&acao=formeditar&id='.$produto['id'].'">Editar</a></td>';
			//echo '<td><a href="main.php?url='.$this->tabela.'&acao=deletar&id='.$produto['id'].'">Excluir</a></td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	
	
	
	
}

?>