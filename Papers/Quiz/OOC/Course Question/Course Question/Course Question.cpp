#include <iostream>
#include "Course.h"

using namespace std;

int main()
{
    Course c1, c2, c3, c4;

    int p1, p2, p3, p4;

    c1.setCourseDetails(1050, "OOC");
    c1.setCreaditPoints(2);

    c2.setCourseDetails(1060, "SPM");
    c2.setCreaditPoints(3);

    c3.setCourseDetails(1100, "IWT");
    c3.setCreaditPoints(4);

    c4.setCourseDetails(1090, "ISDM");
    c4.setCreaditPoints(4);

    cout << "Input new OOC credit point : ";
    cin >> p1;

    cout << "Input new SPM credit point : ";
    cin >> p2;

    cout << "Input new IWT credit point : ";
    cin >> p3;

    cout << "Input new ISDM credit point : ";
    cin >> p4;

    c1.setCreaditPoints(p1);
    c2.setCreaditPoints(p2);
    c3.setCreaditPoints(p3);
    c4.setCreaditPoints(p4);

    c1.displayCourseDetails();
    c2.displayCourseDetails();
    c3.displayCourseDetails();
    c4.displayCourseDetails();


    return 0;
}
