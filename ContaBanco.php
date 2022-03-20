<?php  
class ContaBanco{
//atributos
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;
//constructor
public function __costruct(){
		$this->saldo=0;
		$this->status=false;

}

//metodos
		public function abrirConta($tipo){
			
			$this->setTipo($tipo);
			$this->setStatus('verdadeiro');

			if($tipo=='cc'){//conta corrente
				$this->setSaldo(50);
			}else if($tipo=='cp'){//conta poupança
				$this->setSaldo(150);
			}
		}


		public function fecharConta(){

			if($this->getSaldo()>0){
				echo "a conta possui saldo ainda é necessario sacar antes de incerrar";
			}else if($this->getSaldo()<0){
				echo "a conta está com saldo devedor";
			}else{
				$this->setStatus('falso');
			}

		}

		public function depositar($deposito){

			if($this->getStatus()=='verdadeiro'){
				$this->setSaldo($this->getSaldo()+$deposito);
			}else{
				echo "inpossivel depositar conta cancelada";
			}

		}


		public function Sacar($sacar){

				if($this->getStatus()){
					if($this->getSaldo()>=$sacar){
						$this->setSaldo($this->getSaldo()-$sacar);
					}else{
						echo "Saldo negativo";
					}
				}else{
					echo "Conta Inativa";
				}
		}

		public function pagarConta(){

			$valor;

			if($this->getTipo()=="cc"){
				$valor= 12;
			}else if ($this->getTipo()=="cp"){
				$valor=20;
			}

			if($this->getStatus()){
				if($this->getSaldo()>$valor){
					$this->setSaldo($this->getSaldo()-$valor);
				}else{
					echo "saldo insufucuente";
				}
			}else{
				echo "Conta inativa";
			}
		}


		//gets in sets
	function getnumConta(){
		return $this->numConta;
	}

	function setnumConta($num){
		$this->numConta= $num;	
	}

	function getTipo(){
		return $this->tipo;
	}

	function setTipo($tipo){
		$this->tipo=$tipo;
	}

	function getDono(){
		return $this->dono;
	}

	function setDono($name){
		$this->dono=$name;
	}

	function getSaldo(){
		return $this->saldo;
	}	

	function setSaldo($saldo){
		$this->saldo=$saldo;
	}

	function getStatus(){
		return $this->status;	
	}

	function setStatus($status){
		$this->status=$status;
	}

}
?>