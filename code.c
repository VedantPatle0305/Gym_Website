#include <stdio.h>
typedef struct time
{
    char pr[2];
    int bt;
} time;
int main()
{
    int n;
    printf("\nEnter the number of processes: ");
    scanf("%d", &n);
    time ar[n];
    for (int i = 0; i < n; i++)
    {
        printf("p%d : ", i + 1);
        scanf("%d", &ar[i].bt);
        ar[i].pr[0] = 'p';
        ar[i].pr[1] = i + 1 + 48;
    }
    printf("\n\nThe data you entered is:\n\nprocess | BT\n");
    for (int i = 0; i < n; i++)
    {
        printf("%c%c\t| %d\n", ar[i].pr[0], ar[i].pr[1], ar[i].bt);
    }
    /* sorting in order to get processes sorted according to bursttime */
    for (int i = 0; i < n; i++)
    {
        for (int j = i + 1; j < n; j++)
        {
            if (ar[i].bt > ar[j].bt)
            {
                time temp = ar[i];
                ar[i] = ar[j];
                ar[j] = temp;
            }
        }
    }
    int wt[n];
    float avg_waiting_time = 0;
    /* intially the waiting time will be 0 */
    wt[0] = 0;
    for (int i = 1; i < n; i++)
    {
        wt[i] = wt[i - 1] + ar[i - 1].bt;
    }
    /* waiting time printing */
    printf("Waiting Time :\n\nprocess | WT\n");
    for (int i = 0; i < n; i++)
    {
        avg_waiting_time += wt[i];
        printf("%c%c\t| %d\n", ar[i].pr[0], ar[i].pr[1], wt[i]);
    }
    avg_waiting_time /= n;
    printf("\n\naverage waiting time: %.3f", avg_waiting_time);
}