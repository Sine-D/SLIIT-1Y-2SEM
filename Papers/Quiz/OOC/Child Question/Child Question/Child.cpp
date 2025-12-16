#include "Child.h"
#include <iostream>
#include <cstring>
#include <iomanip>

using namespace std;

void Child::setChildDetails(int cID, const char cName[], const char pName[]) {
	childID = cID;
	strcpy_s(childName, cName);
	strcpy_s(parentName, pName);
};

void Child::displayChilddetails() {
	cout << "\nChild Name = " << childName << endl;
	cout << "ParentName  = " << parentName << endl;
	cout << "Contach Number = " << setiosflags(ios::fixed)<< setprecision(0) << contactNo << endl;
};

void Child::setContactNo(float cNo) {
	contactNo = cNo;
};