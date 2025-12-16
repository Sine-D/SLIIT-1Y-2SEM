#include <iostream>
#include "Event.h"

using namespace std;

int main()
{
    char l1[50], l2[50], l3[50];

    Event *e1, *e2, *e3;

    e1 = new Event();
    e2 = new Event();
    e3 = new Event();

    e1->setEventDetails(1, "Party", "red");
    e1->setEventLocation("Nugegoda");

    e2->setEventDetails(2, "wedding", "purple");
    e2->setEventLocation("Maharagama");

    e3->setEventDetails(3, "party", "Malabe");
    e3->setEventLocation("Malabe");

    cout << "Input event 1 location = ";
    cin >> l1;

    cout << "Input event 2 location = ";
    cin >> l2;

    cout << "Input event 1 location = ";
    cin >> l3;

    e1->setEventLocation(l1);
    e2->setEventLocation(l2);
    e3->setEventLocation(l3);

    e1->displayEventDetails();
    e2->displayEventDetails();
    e3->displayEventDetails();

    delete e1, e2, e3;

    return 0;
}
