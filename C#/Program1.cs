using System;
using System.Data;

class Program1
{
    public static void Main(String[] args)
    {
        /*
        int age;
        Console.Write("Enter your age :");
        age = Convert.ToInt16( Console.ReadLine());

        if (age <= 18)
        {
            Console.WriteLine("You are not adult!");
        }
        else{
            Console.WriteLine("You are a Adult!");
        }*/

        /*string str1 = "I am using VsCode !";
        string str2 = "I am using VsCode !";
        //string a[] = new string[5];
        
       Console.WriteLine(str1.ToUpper());
       Console.WriteLine(str1.ToLower());
       Console.WriteLine(str1.CompareTo(str2));
       Console.WriteLine(str1.Contains(str2));
       Console.WriteLine(str1.Replace("a","v"));
       Console.WriteLine(str1.IndexOf("V"));
       Console.WriteLine(str1.Remove(5,5));
       Console.WriteLine(str1.LastIndexOf("am"));
       Console.WriteLine(str1.ToCharArray());
       Console.WriteLine(str1.Trim());
       Console.WriteLine(str1.PadLeft(5));*/
        int choice;
        double[] allsgpa = new double[8];
        int totalsem;

        Console.WriteLine("Enter the no of semesters : ");
        totalsem = Convert.ToInt32(Console.ReadLine());

        int sem = totalsem;
        for (int k = 1; k <= sem; k++)
        {

            Console.WriteLine("Enter the choice[1.SGPA ,2.CGPA]:");
            choice = Convert.ToInt32(Console.ReadLine());

            if(choice == 1){
                    double points = 0, TotalGP = 0, Totalcredits = 0;
                    int num = 0;
                    string c = "";

                    Console.WriteLine("Enter the total number of subjects :");
                    num = Convert.ToInt32(Console.ReadLine());

                    double[] Grades = new double[num];
                    double[] creadits = new double[num];


                    for (int i = 0; i <= (num - 1); i++)
                    {
                        Console.WriteLine("Enter the subject creadits : ");
                        creadits[i] = Convert.ToInt32(Console.ReadLine());

                        Console.WriteLine("Enter the Grades :");
                        c = Console.ReadLine();

                        if (c == "EX")
                        {
                            points = 10;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "AA")
                        {
                            points = 9;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "AB")
                        {
                            points = 8.5;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "BB")
                        {
                            points = 8;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "BC")
                        {
                            points = 7.5;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "CC")
                        {
                            points = 7;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "CD")
                        {
                            points = 6.5;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "DD")
                        {
                            points = 6;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "DE")
                        {
                            points = 5.5;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "EE")
                        {
                            points = 5;
                            Grades[i] = creadits[i] * points;

                        }
                        else if (c == "FF")
                        {
                            points = 0;
                            Grades[i] = creadits[i] * points;

                        }
                        else
                        {
                            Console.WriteLine("You entered the wrong grades !");
                        }
                    }
                    for (int i = 0; i <= (num - 1); i++)
                    {
                        Totalcredits = Totalcredits + creadits[i];
                        TotalGP = TotalGP + Grades[i];
                    }
                    double SGPA = TotalGP / Totalcredits;
                    Console.WriteLine("SGPA : " + SGPA);
                    for(int m = 0 ; m<=sem ; m++){
                        allsgpa[m] = SGPA ;
                    }
            }
            else if(choice == 2){
                    
                    double CGPA = 0, Totalsgpa = 0;
                    int noofsem;

                    Console.WriteLine("Enter the no of semesters : ");
                    noofsem = Convert.ToInt32(Console.ReadLine());

                    for (int i = 0; i <= noofsem; i++)
                    {
                        Totalsgpa = Totalsgpa + allsgpa[i];
                    }
                    CGPA = Totalsgpa / noofsem;
                    Console.WriteLine("CGPA :" + CGPA);
            }
            else{
                Console.WriteLine("Enter the correct choice !");
            }
        }
    }
}
