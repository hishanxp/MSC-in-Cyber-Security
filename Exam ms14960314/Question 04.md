##Assembly Language (Code is in ASM format) 

####a) mov DWORD PTR [ebp-0x4], 0x8

Moves the memory address 0x8 into the location pointed to by EBP
DWORD line a denotes this as being a DWORD or double word, which is 4 bytes (32 bits).


####b) mov eax, DWORD PTR [ebp+0x8]
Moves the memory address epb+0x8 into the location pointed to by EAX 
  


####c) lea eax, [ecx + eax*1]

Here the the quantity ecx+eax*1 is placed in EAX

####d) call _htons
this line calles a Function named 
htons function

 this call sends the address of the next instruction on the stack so the program can return back to i

####e) cmp [ebp+0x8], 0
 this final line compare the values of the two operands ebp+0x8 and 0