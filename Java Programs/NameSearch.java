import java.util.Scanner;
import java.io.*;
import java.util.StringTokenizer;

public class NameSearch
{
   public static void main(String[]args) throws IOException
   {
      // Create arrays to hold the names.
      final int SIZE = 200;
      String[] boyNames = new String[SIZE];
      String[] girlNames = new String[SIZE];

      getNamesFromFile(boyNames, "BoyNames.txt");
      getNamesFromFile(girlNames, "GirlNames.txt");

      // Get names to search from the user.
      String searchNames = getNamesFromUser();

      // Search and displays results.
      displaySearchResults(searchNames, boyNames, girlNames);
   }

   public static String getNamesFromUser()
   {
      Scanner keyboard = new Scanner(System.in);

      // Get names from user
      System.out.print("Enter a name or names: ");

      return keyboard.nextLine();
   }

   public static void getNamesFromFile(String[] array,
                       String filename) throws IOException
   {
      int index = 0;

      // Opens the file
      File file = new File(filename);
      Scanner inputFile = new Scanner(file);

      while (inputFile.hasNext() && index < array.length)
      {
        array[index] = inputFile.nextLine();
        index++;
      }

      inputFile.close();
   }

   public static int sequentialSearch(String[] array, String value)
   {
      int index,
          element;
      boolean found;

      index = 0;

      element = -1;
      found = false;

      while (!found && index < array.length)
      {
         if (array[index].equalsIgnoreCase(value))
         {
           found = true;
           element = index;
         }
         index++;
      }

      return element;
   }

   public static void displaySearchResults(String input,
                        String[] array1, String[] array2) throws IOException
   {
      StringTokenizer namesTokenizer = new StringTokenizer(input);

      String searchName;
      int boyResult;
      int girlResult;

      System.out.println("\nSearch results:\n");

      while(namesTokenizer.hasMoreTokens())
      {
        searchName = namesTokenizer.nextToken();

        boyResult = sequentialSearch(array1, searchName);
        girlResult = sequentialSearch(array2, searchName);

        if (boyResult != -1)
           System.out.println(searchName + " is a popular boy's name.");
        else if(girlResult != -1)
           System.out.println(searchName + " is a popular girl's name.");
        else
           System.out.println(searchName + " is not a popular name.");
       }
     }
  }

