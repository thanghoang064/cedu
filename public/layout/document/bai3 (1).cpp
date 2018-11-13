#include<stdio.h>
int main()
{
	int counter=0;
	int number ;
	int largest=0;
	while(counter<10)
	{
			printf("Nhap so: \n");
		    scanf("%d",&number);
		    if(number>largest)
		    {
		    	largest = number;
		    
			}
		    //	printf("%d",number);
		    	counter++;
	}
		printf("%d",largest);
}
