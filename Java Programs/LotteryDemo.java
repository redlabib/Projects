import java.util.Scanner;

public class LotteryDemo
{
    public static void main(String[]args)
    {
        String input;                   // Holds keyboard input
        int[] userPicks = new int[5];   // User's chosen lottery numbers
        int match;                      // Number of matching numbers

        Scanner keyboard = new Scanner(System.in);

        // Creates a lottery object.
        Lottery lot = new Lottery();

        // Gets the user's chosen numbers
        for (int n = 1; n <= 5; n++)
        {
           System.out.print("Enter digit " + n + ": ");
           userPicks[n-1] = keyboard.nextInt();
           while (userPicks[n-1] < 0 || userPicks[n-1] > 9)
           {
              System.out.print("Please enter a single digit from 0 - 9: ");
              userPicks[n-1] = keyboard.nextInt();
           }
        }

        // Compares the digits
        match = lot.numMatching(userPicks);

        // Displays the results.
        int[] lotNum = lot.copy();
        System.out.print("Lottery numbers: ");

        for (int i = 0; i < lotNum.length; i++)
            System.out.print(lotNum[i] + "  ");
            System.out.println();

        System.out.println("Number of matching digits are: " +
                            match);
        System.out.println("Thank you for playing. Please try again.");
        if (match == 5)
            System.out.println("VICTORY ROYALE!!");

     }
  }
