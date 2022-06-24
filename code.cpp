#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n, i, j, temp, min;
    float c1 = 0, c2 = 0, avwt, avtrt;

    int *cbt = new int[n];
    int *p = new int[n];
    int *s = new int[n];
    int *wt = new int[n];
    int *trt = new int[n];

    /*
    Here asking for user Enter Number of Process
    */

    cout << "\nEnter The Number of Process: ";
    cin >> n;

    /*
    Storing the Burst time of each process in an array and process ID of the process.
    */

    cout << "\n========================================================";
    cout << "\nEnter The CBT(Burst Time) of Processes";
    cout << "\n========================================================\n";

    for (i = 0; i < n; i++)
    {
        cin >> cbt[i];
        s[i] = i + 1;
    }

    /*
    Storing the Priority of the each process
    */

    cout << "\n========================================================";
    cout << "\nEnter The Priority of Process";
    cout << "\n========================================================\n";
    for (i = 0; i < n; i++)
    {
        cin >> p[i];
    }
    for (i = 0; i < n; i++)
    {
        min = i;
        for (j = i + 1; j < n; j++)
        {
            if (p[j] > p[min])
            {
                min = j;
            }
        }

        temp = p[i];
        p[i] = p[min];
        p[min] = temp;

        temp = cbt[i];
        cbt[i] = cbt[min];
        cbt[min] = temp;

        temp = s[i];
        s[i] = s[min];
        s[min] = temp;
    }

    wt[0] = 0;

    for (i = 1; i < n; i++)
    {
        wt[i] = 0;
        for (j = 0; j < i; j++)
        {
            wt[i] += cbt[j];
        }
        c1 += wt[i];
    }

    avwt = c1 / n;
    for (i = 0; i < n; i++)
    {
        trt[i] = cbt[i] + wt[i]; // calculate turnaround time
        c2 += trt[i];
    }
    avtrt = c2 / n;

    cout << "\n==========================================================\n";
    cout << "Process\t"
         << "CBT(Burst Time)\t"
         << "  Wating Time\t"
         << "Turn Around time";
    cout << "\n==========================================================\n";

    for (i = 0; i < n; i++)
    {
        cout << "\nP[" << s[i] << "]\t\t  " << cbt[i] << "\t\t    " << wt[i] << "\t\t\t" << trt[i];
    }

    cout << "\n==========================================================\n";
    cout << "\n\nAverage Waiting Time: " << avwt;
    cout << "\n\nAverage Turn Around Time: " << avtrt << endl;
}