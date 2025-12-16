#include "Doctor.h"
#include <iostream>
#include <cstring>

using namespace std;

void Doctor::setDoctorDetails(int dID, const char dName[], const char spec[], const char h[]) {
	doctorID = dID;
	strcpy_s(doctorName, dName);
	strcpy_s(specialization, spec);
	strcpy_s(hospital, h);
};
void Doctor::displayDoctorDetails() {
	cout << "\nDoctorID = " << doctorID << endl;
	cout << "Doctore Name = " << doctorName << endl;
	cout << "Specialization = " << getSpecialization() << endl;
	cout << "Hospital = " << hospital << endl;

};
char* Doctor::getSpecialization() {
	return specialization;
};