using System;  
public class ExerciseThree  
{  
  public static void Main(string[] args)  
  {  
    int  n, reverse=0, rem;           
    Console.Write("Enter a number: ");      
    n= int.Parse(Console.ReadLine());     
		if (n > 999 || n < 100) {
      throw new InvalidOperationException("Number must be 3 DIGIT only");
    } 
    while(n!=0)      
    {      
      rem=n%10;        
      reverse=reverse*10+rem;      
      n/=10;      
    }      
    Console.Write("Reversed Number: "+reverse);       
  }  
} 
