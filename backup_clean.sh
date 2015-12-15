#!/bin/bash

n=$1 # input how much files you want to leave
#echo $n
cd ~
cd Desktop/db_backup_clenup

#echo "Number of files : $( ls |wc -l )"  
total=$( ls -v -d */|wc -l ); # get total number of files 

#echo $total

#echo $n
#delete_files = 'expr $total - $n'   
delete_files="$((total - n))"

if [ $n -gt $total ]
then
	exit
fi

if [ $n -eq $total ]
then
	exit
fi

#echo $delete_files;
#exit

for i in `ls -v`; 
do 
	if [ $delete_files -eq 0 ]
	then
		break

	else
		delete_files=$((delete_files-1))
		echo $i 
		rm -rf $i
		#n = n-1;
		n=$((n-1))
		echo $n
	fi	

done;

