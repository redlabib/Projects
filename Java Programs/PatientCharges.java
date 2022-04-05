public class PatientCharges {
public static void main(String[] args) {
   Patient p1=new Patient("Harry", "James", "Potter", "4 Privet Drive", "London", "England",
           "R7A 6A9", "(204)666-6666", "Harmoine Granger", "(204)109-2923");
   Procedure pro1=new Procedure("Physical Exam","07/20/2020","Dr.Dumbledore",250.0);
   Procedure pro2=new Procedure("X-ray","07/20/2020","Dr.McGonagall",500.0);
   Procedure pro3=new Procedure("Blood test","07/20/2020","Dr.Lupin",200.0);

   System.out.println("Patient Details\n------------------");
   System.out.println("Name:" +p1.getFirst_name()+" "+p1.getMiddle_name()+" "+p1.getLast_name());
   System.out.println("Addresss:"+p1.getAddress());
   System.out.println("City:"+p1.getCity());
   System.out.println("State:"+p1.getState());
   System.out.println("Zip-code:"+p1.getZip_code());
   System.out.println("Emergency Contact name:"+p1.getEmergency_contact_name());
   System.out.println("Emergency Phone no:"+p1.getEmergency_phno());

   System.out.println("Procedures Undergone\n------------------");
   System.out.println("Procedure name:"+pro1.getName());
   System.out.println("Date:"+pro1.getDate());
   System.out.println("Practioners name:"+pro1.getPractitioner());
   System.out.println("Charge:"+pro1.getCharge());
   System.out.println("Procedure name:"+pro2.getName());
   System.out.println("Date:"+pro2.getDate());
   System.out.println("Practioners name:"+pro2.getPractitioner());
   System.out.println("Charge:"+pro2.getCharge());
   System.out.println("Procedure name:"+pro3.getName());
   System.out.println("Date:"+pro3.getDate());
   System.out.println("Practioners name:"+pro3.getPractitioner());
   System.out.println("Charge:"+pro3.getCharge());

   System.out.println("--------------\n Total cost:$"+(pro1.getCharge()+pro2.getCharge()+pro3.getCharge()));
}
}