###Task 01

Finding the IP og the host

For this used kali and put them in the same virtual subnet (host only)assuming the host is using DHCP i ran netDiscover on the kali and rebooted the victim ubuntu box.

i got the Following output 

     Currently scanning: 192.168.239.0/16   |   Screen View: Unique Hosts  
       
     8 Captured ARP Req/Rep packets, from 3 hosts.   Total size: 480   
     _____________________________________________________________________________
       IPAt MAC Address  Count  Len   MAC Vendor   
     ----------------------------------------------------------------------------- 
     192.168.52.100:50:56:c0:00:0105300   VMWare, Inc. 
     192.168.52.254  00:50:56:f7:0a:7601060   VMWare, Inc. 
     192.168.52.130  00:0c:29:71:77:9502120   VMware, Inc.


the 52.1 and 52.254 are know gate way address so to see what is running in 52.3 i ran an nmap Coommand
    
    root@Kali:/home/student# nmap 192.168.52.130
    
    Starting Nmap 6.47 ( http://nmap.org ) at 2015-05-31 11:43 IST
    Nmap scan report for 192.168.52.130
    Host is up (0.00014s latency).
    Not shown: 988 closed ports
    PORT STATE SERVICE
    22/tcp   open  ssh
    25/tcp   open  smtp
    79/tcp   open  finger
    110/tcp  open  pop3
    111/tcp  open  rpcbind
    143/tcp  open  imap
    512/tcp  open  exec
    513/tcp  open  login
    514/tcp  open  shell
    993/tcp  open  imaps
    995/tcp  open  pop3s
    2049/tcp open  nfs
    MAC Address: 00:0C:29:71:77:95 (VMware)
    
    Nmap done: 1 IP address (1 host up) scanned in 13.44 seconds


initially this look like a mail server
and ssh is found 

i am using  hydra to see if i can brute for the ssh login 
 but i need some user name s



