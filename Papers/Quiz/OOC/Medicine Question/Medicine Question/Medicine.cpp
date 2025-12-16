#include "Medicine.h"
#include <iostream>
#include <cstring>
#include <iomanip>

using namespace std;

void Medicine::setMedicineDetails(int mID, const char mName[], const char s[]) {
	medicineID = mID;
	strcpy_s(medicineName, mName);
	strcpy_s(sickness, s);
};
void Medicine::displayMedicineDetails() {
	cout << "\nMedicineID = " << medicineID << endl;
	cout << "MedicineName = " << medicineName << endl;
	cout << "Sickness = " << sickness << endl;
	cout << "Dose = " << setiosflags(ios::fixed)<< setprecision(1) << dose << endl;

};
void Medicine::setDose(float d) {
	dose = d;
};