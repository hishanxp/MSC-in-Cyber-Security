###A)What is the purpose of:
-----
####a) the /etc/passwd file?
This is the linux file wich keeps the user login information in a linux system,the file contains information like user ID ,gorup ID shell type loaded and the location of the users home directory.but the acctual user password is not stored in this file.


#### b) the /etc/shadow file?

the shadow file Stores the actual  password information of the user in passwd file in an encrypted format also some additional information related to the user.

####c) the setuid bit?
This is an UNIX file/Directory  access attribute ,the SUID bit allows a normal users to run an application with raised privileges,but he speciality is the application run with the same permission as the executing user. 

####d) chroot?
The chroot command  changes the root directory to a given path,this is for the currently running process and the sub process (Children) .by using chroot we can isolate applications from the rest of our computer like a sandbox .

###B)Explain the differences between the commands “ls -l” and “lsattr”.
---

#####ls -l
The ls -l command list all file/directorys in a given location ,this show addition information like user ,group ,owner and the rwx rights given to them ,also the file creation date

#####lsattr
The lsattr command list the file attributes

###C. Android is a linux based operating system.
---
When Android apps are using the Principle of  least privileged principle (POLP),this specify when the application is installed,the problem is once the  rights are give the user has no way of modifying them again.

###A. Compare access control lists to the standard unix permissions model
The ACL file Protection provides security by defining file permission and file owner method ,UNIX dose the file protection using attribute line read write and execute permissions, for the following user types owner,group ,and others(Global) ,acl provide better security comapre to Unix permission model 

###B. Compare ruid and euid. Explain an example how they may not be equal.

The ruid(real user ID) is use to identify who the user actualy is by the system ,the euid is used to determine what level of access the Current process has on the system 

###C. List two entirely different ways that an attacker might clean his/her tracks whenattacking a unix based system. State the required level of access for each approach. Explain your answers.

####methoted 01 (need root access)
Clear log files

clear log files like 
messageslog,xferlog,utmp,wtmp ect...most off the following files can be only accssed by a root,for clearing them root access is needed

###methoted 02 (normal user)
Clear bash history on the give account 
once we attack in with a comrimised user account  we need to make sure we clear all our command history before leaving ,since this wold contain all are tracks on what the attacker didi





