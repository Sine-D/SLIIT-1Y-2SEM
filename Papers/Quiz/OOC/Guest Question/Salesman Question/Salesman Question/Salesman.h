#pragma once

class Salesman
{
private:
	int salesmanId;
	char salesmanName[20];
	float salary;
	float contactNo;

public:
	void setSalesmanDetails(int sId, const char sName[], float s);
	void displaySalesmanDetails();
	void setSalesmanContactNo(float cNumber);

};

