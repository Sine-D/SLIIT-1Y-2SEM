#pragma once

class Doctor
{
private:
	int doctorID;
	char doctorName[50];
	char specialization[50];
	char hospital[50];
public:
	void setDoctorDetails(int dID, const char dName[], const char spec[], const char h[]);
	void displayDoctorDetails();
	char* getSpecialization();
};

