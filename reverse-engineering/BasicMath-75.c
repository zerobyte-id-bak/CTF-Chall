#include <stdio.h>

/*
* BasicMath-75.c
* - pa = 18992
* - ss = 12345
* => pa + ss = 31337
* 
* Compile:
* # gcc BasicMath-75.c -o basicmath
*/

int main()
{
	int pa = 18992;
	int ss = 12345;
	int pwd;
	printf("Enter the Key : ");
	scanf("%d",&pwd);
	if (pa + ss == pwd)
	{
		int i;
		// FLAGNYA DISINI
		char str[100] = "iodjwhutxdfnmhurelwfwi";
		// iodjwhutxdfnmhurelwfwi = flagterquackjerobitctf (Encrypted with Caesar Cipher +3)

			for(i = 0; (i < 100 && str[i] != '\0'); i++)
			{
				str[i] = str[i] - 3;
			}
			printf("FLAG: %s\n", str);
	}
	else {
		printf("FALSE!");
	}
	return 0;
}
