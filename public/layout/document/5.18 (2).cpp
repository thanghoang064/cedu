#include<stdio.h>
int even(int n)
{
	if(n%2==0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
int main()
{
	int a[100];
	int n;
	printf("Nhap vao so phan tu cua day so :");
	scanf("%d",&n);
	for(int i = 1;i<=n;i++)
	{
		printf("Nhap a[%d] = ", i);
        scanf("%d", &a[i]);
	}
		for(int i = 1;i<=n;i++)
	{
		if(even(a[i])==1)
		{
				printf("phan tu %d là so chan\n ",a[i]);
		}
		else
		{
				printf("phan tu %d khong là so chan\n ",a[i]);
		}
	}
}
