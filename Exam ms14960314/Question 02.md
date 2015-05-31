##Leviathan

###Level 0
This is the initial log-in 
**username and password already given**


logge in to leviathan.labs.overthewire.org

>Username: leviathan0
>
>password: leviathan0

    Ubuntu comes with ABSOLUTELY NO WARRANTY, to the extent permitted by
    applicable law.
    
    leviathan0@melinda:~$ 


###Leviathan Level 0 → Level 1
at the start there was no directory to be found so i used a ls -al to see what is hidden

    
    leviathan0@melinda:~$ ls -al
    total 24
    drwxr-xr-x   3 root   root   4096 Nov 14  2014 .
    drwxr-xr-x 167 root   root   4096 May  3 12:32 ..
    drwxr-x---   2 leviathan1 leviathan0 4096 Feb 10 18:08 .backup
    -rw-r--r--   1 root   root220 Apr  9  2014 .bash_logout
    -rw-r--r--   1 root   root   3637 Apr  9  2014 .bashrc
    -rw-r--r--   1 root   root675 Apr  9  2014 .profile

there is s hidden directory names ./backup insde that a file named bokmmark HTML

    leviathan0@melinda:~/.backup$ ls
    bookmarks.html
    leviathan0@melinda:~/.backup$

Since this file had many data i greped for the word password 
    
    leviathan0@melinda:~/.backup$ cat bookmarks.html |grep password
    <DT><A HREF="http://leviathan.labs.overthewire.org/passwordus.html | This will be fixed later,** the password for leviathan1 is rioGegei8m**" ADD_DATE="1155384634" LAST_CHARSET="ISO-8859-1" ID="rdf:#$2wIU71">password to leviathan1</A>
    leviathan0@melinda:~/.backup$

>the password for leviathan1 is rioGegei8m
>
level 0 Complete

###Leviathan Level 1→ Level 2

again no data is given for this level ,again i uses ls-al 

    leviathan1@melinda:~$ ls -al
    total 28
    drwxr-xr-x   2 root   root   4096 Nov 14  2014 .
    drwxr-xr-x 167 root   root   4096 May  3 12:32 ..
    -rw-r--r--   1 root   root220 Apr  9  2014 .bash_logout
    -rw-r--r--   1 root   root   3637 Apr  9  2014 .bashrc
    -rw-r--r--   1 root   root675 Apr  9  2014 .profile
    -r-sr-x---   1 leviathan2 leviathan1 7493 Nov 14  2014 check

these is and executable named "check" when executed asks for a password
     
    -r-sr-x---   1 leviathan2 leviathan1 7493 Nov 14  2014 check
    leviathan1@melinda:~$ ./check
    password: test
    Wrong password, Good Bye ...

if the password word is embedded with in the code we can use ltrace to seee the interpreted the code of the executable
    
    lttrace ./check
    -bash: lttrace: command not found
    leviathan1@melinda:~$ ltrace ./check
    __libc_start_main(0x804852d, 1, 0xffffd7b4, 0x80485f0 <unfinished ...>
    printf("password: ")= 10
    getchar(0x8048680, 47, 0x804a000, 0x8048642password: test
    )= 116
    getchar(0x8048680, 47, 0x804a000, 0x8048642)= 101
    getchar(0x8048680, 47, 0x804a000, 0x8048642)= 115
    strcmp("tes", "sex")= 1
    puts("Wrong password, Good Bye ..."Wrong password, Good Bye ...
    )= 29
    +++ exited (status 0) +++


so in the string comapre fuction wee see the pasword ads sex
when executed we get a shell running as Leviathan 2 as from previous experience in bandit the password should be in a common folder this tile /etc/leviathan_pass/leviathan2

        leviathan1@melinda:~$ ./check
    password: sex
    $ whoami
    leviathan2
    $ cat /etc/leviathan_pass/leviathan2
    ougahZi8Ta
    $


###Leviathan Level 2 → Level 3

The home directory contains a file named printfile executable

    leviathan2@melinda:~$ ls
    printfile
    leviathan2@melinda:~$ ./printfile
    *** File Printer ***
    Usage: ./printfile filename
    leviathan2@melinda:~$ ls -l
    total 8
    -r-sr-x--- 1 leviathan3 leviathan2 7498 Nov 14  2014 printfile

this require a file i create on in the temporary directory and executed the print file executable since there is no out put i ran a ltrace

    leviathan2@melinda:~$ touch /tmp/tmpmyfile.txt
    leviathan2@melinda:~$ ./printfile /tmp/tmpmyfile.txt
    leviathan2@melinda:~$ ltrace ./printfile /tmp/tmpmyfile.txt
    __libc_start_main(0x804852d, 2, 0xffffd784, 0x8048600 <unfinished ...>
    access("/tmp/tmpmyfile.txt", 4)  = 0
    snprintf("/bin/cat /tmp/tmpmyfile.txt", 511, "/bin/cat %s", "/tmp/tmpmyfile.txt") = 27
    system("/bin/cat /tmp/tmpmyfile.txt" <no return ...>
    --- SIGCHLD (Child exited) ---
    <... system resumed> )   = 0
    +++ exited (status 0) +++

from here we can the code first checks for the file existence
So i create a dummy file to foll the checking 

cd /tmp/lchack-qrohlf
    ln -s /etc/leviathan_pass/leviathan3
    touch "somefile leviathan3"
    ~/printfile "somefile leviathan3"

This outputs the password as 
ougahZi8Ta


###Leviathan Level 3 → Level 4


in this level we have a file named level 13 and it is executable 

    ls -a
    ./level3
    strings level3
    for i in `strings level3`; do echo $i && echo $i | ./level3; done

    ./level3
    snlprintf

    [You've got shell]!
    /bin/sh
    bzzzzzzzzap. WRONG
    Enter the password> 
    ;*2$",
    secret
    cat /etc/leviathan_pass/leviathan4

>password is `Ahdiemoo1j

###Leviathan Level 4 → Level 5



    ls -a
    cd .trash
    ./bin

got a binary output 

    01010100 01101001 01110100 01101000 00110100 01100011 01101111 01101011 01100101 01101001 00001010

used an o http://crypo.in.ua  ASII converter to get `Tith4cokei` from the output
    
password is is `vuH0coox6m`

###Leviathan Level 5 → Level 6

    ls
    ./leviathan5

when executed 

    leviathan5@melinda:~$ ./leviathan5 
    Cannot find /tmp/file.log

 Created link between the files using the LN Command 

    leviathan5@melinda:~$ ln -s /etc/leviathan_pass/leviathan6 /tmp/file.log
    leviathan5@melinda:~$ ./leviathan5 
    UgaoFee4li

password is  UgaoFee4li

###Leviathan Level 6 → Level 7

when a ls is performed an file named leviathan6 is found when a trace is done 
i found that this ask for an 4 digit code 
