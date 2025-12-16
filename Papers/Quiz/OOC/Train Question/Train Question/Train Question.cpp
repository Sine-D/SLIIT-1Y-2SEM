#include <iostream>
#include "Train.h"

using namespace std;

int main()
{
    Train t1, t2, t3;

    char m1[20], m2[20], m3[20];

    t1.setTrainDetails(1, 200,  "Kandy");
    t1.setStartTime("6:00AM");

    t2.setTrainDetails(2, 150, "Galle");
    t2.setStartTime("7:30AM");

    t3.setTrainDetails(3, 300, "Jaffna");
    t3.setStartTime("4:00AM");

    cout << "Input new start time of train 1 : ";
    cin >> m1;
    cout << "Input new start time of train 2 : ";
    cin >> m2;
    cout << "Input new start time of train 3 : ";
    cin >> m3;

    t1.setStartTime(m1);
    t2.setStartTime(m2);
    t3.setStartTime(m3);

    t1.displayTrainDetails();
    t2.displayTrainDetails();
    t3.displayTrainDetails();


    return 0;
}