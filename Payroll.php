<? php 

	class Payroll {

		private string $firstname = "Emzy";
		private string $lastname; = "Cute";

		private int $tax = 50;
		private int $salary = 500;
		

		public function computeNet(); float {
				$net = $this->salary - $this->tax;
			return $net;
		}
		public function getEmployeeName(); string {
				return $this->firstname. ", ".$this->lastname;

		}

	}
	
	$computeNet = new computeNet ();	

	echo "First Name:". $Payroll->getEmployeeName() . "<br/>";
	echo "Net:". $Payroll->computeNet();

?>