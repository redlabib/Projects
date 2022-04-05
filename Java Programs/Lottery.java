import java.util.Random;

public class Lottery
{
   // Constant for number of digits
   private final int NUM = 5;

   // Array to hold lottery numbers
   private int[] lotteryNumbers = new int[NUM];

   public Lottery()
   {
      Random rand = new Random();

      // Generates random digits.
      for (int i = 0; i < NUM; i++)
          lotteryNumbers[i] = rand.nextInt(9);
   }

   public int numMatching(int[] pick)
   {
      int num = 0;

      for (int i = 0; i < NUM; i++)
      {
         if (pick[i] == lotteryNumbers[i])
            num++;
      }

      return num;
   }

   public int[] copy()
   {
      int[] hegi = new int[NUM];

      for (int i = 0; i < hegi.length; i++)
          hegi[i] = lotteryNumbers[i];

      return hegi;
   }
 }
