<?php 

class company{
		private $name;

		public function setCompanyName($name){
			$this->name = $name;
		}

		public function getCompanyName(){
			return $this->name;

		}
	}


class Department{
	private $name;

	public function setDepartmentName($name){
		$this->name = $name;
	}

	public function getDepartmentName(){
		return $this->name;
	}
}


class Employee{
	private $name;
	private $title;
	private $salary;


	public function setEmployeename($name){
		$this->name = $name;
	}

	public function getEmployeeTitle(){

	}

	public function getEmployeeProfile(){

	}

	public function getEmployeeMonthlySalary($day){
		

	}
}

$company = new company();
$company->setCompanyName("Harum Corporation");
$companyName = $company->getCompanyName();

$department = new Department();
$department->setDepartmentName("marketing department");
$departmentName = $department->getDepartmentName();


echo $companyName;
echo "<br>";
echo $departmentName;


 ?>