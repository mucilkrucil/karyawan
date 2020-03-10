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
	private $title = "S.Kom";
	private $salary;


	public function setEmployeename($name){
		$this->name = $name;
	}

	public function getEmployeename(){
		return $this->name;

	}

	public function getEmployeeTitle(){
		return "S.Kom";

	}

	public function getEmployeeProfile(){
		return "work as a marketing staff";

	}

}

$company = new company();
$company->setCompanyName("Harum Corporation");
$companyName = $company->getCompanyName();

$department = new Department();
$department->setDepartmentName("marketing department");
$departmentName = $department->getDepartmentName();

$employee = new Employee();
$employee->setEmployeename("Dana Putri Harum");
$employeeName = $employee->getEmployeename();
$employeeTitle = $employee->getEmployeeTitle();
$employeeProfile = $employee->getEmployeeProfile();

echo $companyName."<br>".$departmentName."<br>".$employeeName."<br>".$employeeTitle."<br>".$employeeProfile;


 ?>