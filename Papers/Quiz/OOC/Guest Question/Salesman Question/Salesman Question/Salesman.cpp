#include "Salesman.h"
#include <iostream>
#include <cstring>
#include <iomanip>

using namespace std;

void Salesman::setSalesmanDetails(int sId, const char sName[], float s) {
	salesmanId = sId;
	strcpy_s(salesmanName, sName);
	salary = s;
};

void Salesman::displaySalesmanDetails() {
	cout << "\nSalesmanId = " << salesmanId << endl;
	cout << "SalesmanName = " << salesmanName << endl;
	cout << "Salary = " << salary << endl;
	cout << "ContactNo = " << setiosflags(ios::fixed)<< setprecision(0) << contactNo << endl;

};
void Salesman::setSalesmanContactNo(float cNumber) {
	contactNo = cNumber;
};