public class Patient {

   String first_name,middle_name,last_name;
   String Address,city,state,zip_code;
   String Phone_number;
   String emergency_contact_name,emergency_phno;

   public Patient(String first_name, String middle_name, String last_name, String address, String city, String state,
           String zip_code, String phone_number, String emergency_contact_name, String emergency_phno) {

       this.first_name = first_name;
       this.middle_name = middle_name;
       this.last_name = last_name;
       Address = address;
       this.city = city;
       this.state = state;
       this.zip_code = zip_code;
       Phone_number = phone_number;
       this.emergency_contact_name = emergency_contact_name;
       this.emergency_phno = emergency_phno;
   }
   public String getFirst_name() {
       return first_name;
   }
   public void setFirst_name(String first_name) {
       this.first_name = first_name;
   }
   public String getMiddle_name() {
       return middle_name;
   }
   public void setMiddle_name(String middle_name) {
       this.middle_name = middle_name;
   }
   public String getLast_name() {
       return last_name;
   }
   public void setLast_name(String last_name) {
       this.last_name = last_name;
   }
   public String getAddress() {
       return Address;
   }
   public void setAddress(String address) {
       Address = address;
   }
   public String getCity() {
       return city;
   }
   public void setCity(String city) {
       this.city = city;
   }
   public String getState() {
       return state;
   }
   public void setState(String state) {
       this.state = state;
   }
   public String getZip_code() {
       return zip_code;
   }
   public void setZip_code(String zip_code) {
       this.zip_code = zip_code;
   }
   public String getPhone_number() {
       return Phone_number;
   }
   public void setPhone_number(String phone_number) {
       Phone_number = phone_number;
   }
   public String getEmergency_contact_name() {
       return emergency_contact_name;
   }
   public void setEmergency_contact_name(String emergency_contact_name) {
       this.emergency_contact_name = emergency_contact_name;
   }
   public String getEmergency_phno() {
       return emergency_phno;
   }
   public void setEmergency_phno(String emergency_phno) {
       this.emergency_phno = emergency_phno;
   }


}