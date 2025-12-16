#include <iostream>
#include "Lecturer.h"

using namespace std;

int main()
{
    Lecturer l1, l2, l3;

    char a1[20], a2[20], a3[20];

    l1.setLecturerDetails("Ms. Shalini", "OOC");
    l1.setAvailableDay("TuesDay");

    l2.setLecturerDetails("Ms. Losini", "IWT");
    l2.setAvailableDay("WednesDay");

    l3.setLecturerDetails("Ms.Lokesha", "OOC");
    l3.setAvailableDay("Thursday");

    cout << "Input available day of Ms.Shalini : ";
    cin >> a1;
    cout << "Input available day of Ms.Losini : ";
    cin >> a2;
    cout << "Input available day of Ms.Lokesha : ";
    cin >> a3;

    l1.setAvailableDay(a1);
    l2.setAvailableDay(a2);
    l3.setAvailableDay(a3);

    l1.displayLecturerDetails();
    l2.displayLecturerDetails();
    l3.displayLecturerDetails();


    return 0;
}
