#include "Lab.h"
#include <iostream>

void Lab::setLabDetails( int c) {
	capacity = c;

	if (capacity <= 30 && capacity > 0) {
		labID = 403;
	}
	else if (capacity <= 40) {
		labID = 402;
	}
	else if (capacity <= 60) {
		labID = 401;
	}
};
int Lab::getLab() {
	return labID;
};