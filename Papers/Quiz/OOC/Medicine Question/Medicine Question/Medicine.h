#pragma once
class Medicine
{
private:
	int medicineID;
	char medicineName[50];
	char sickness[50];
	float dose;

public:
	void setMedicineDetails(int mID, const char mName[], const char s[]);
	void displayMedicineDetails();
	void setDose(float d);

};

