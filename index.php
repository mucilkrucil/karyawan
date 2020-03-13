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
	private $salary = "2";


	public function setEmployeename($name){
		$this->name = $name;
	}

	public function getEmployeename(){
		return $this->name;

	}

	public function getEmployeeTitle(){
		return "S.Kom";

	}

	public function getMonthlysalary(){
		return "2000k";
	}

	public function getEmployeeProfile(){
		$company = new company();
		$company->setCompanyName("Harum Corporation");
		$companyName = $company->getCompanyName();

		$department = new Department();
		$department->setDepartmentName("marketing department");
		$departmentName = $department->getDepartmentName();

		$employee = new Employee();
		$employee->setEmployeename("Dana Putri Harum");
		$employeesName = $employee->getEmployeename();
		$employeesTitle = $employee->getEmployeeTitle();
		$employeesSalary = $employee->getMonthlysalary();

		 $this->profil = "nama : ".$employeesName.",".$employeesTitle."<br>"."Gaji Bulanan : ".$employeesSalary."<br>"."Nama Perusahaan :".$companyName."<br>"."Divisi / Departemen : ".$departmentName;

		return $this->profil;
	}

}

$employee = new Employee();
$employeeProfile = $employee->getEmployeeProfile();

echo "Profil Pegawai : "."<br>".$employeeProfile;


 ?>