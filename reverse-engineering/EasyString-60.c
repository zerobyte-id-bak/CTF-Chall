#include <stdio.h>
#include <string.h>

/*
# EasyString-60.c (Reverse Engineering)
#
# Terdapat variable "flag1", "flag2", "flag3", dan "flag4" dengan tipe data char
# variable flag tersebut bisa kalian isi sesuai format flag kalian dan pecah flag sesuai urutannya.
# Untuk sedikit mengecoh saat menggunakan command string
#
# Terdapat variable "stringkey" itu adalah key yang harus input saat program dijalankan
# 
# Compile:
# $ gcc EasyString-60.c -o easystring
*/

int main()
{
	char *passwd;
	char stringkey[20] = "donttellanyone";
	char flag1[20] = "FLAG{";
	char kecoh1[20] = "1n1_Fl4gnYa_";
	char kecoh2[20] = "Muhehehe";
	char flag4[20] = "}";
	int result;

	printf("Enter a Key : ");
	scanf("%s",passwd);

	char flag3[20] = "Str1ngS";

	result = strcmp(passwd, stringkey);
	
	char flag2[20] = "R4nd0m_";
	
	if (result == 0) {
		printf("YOU GOT! %s%s%s%s\n", flag1, flag2, flag3, flag4);
	}
	else {
		printf("TRY AGAIN!\n");
	}
	return 0;
}
