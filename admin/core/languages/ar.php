<?php

function translate($word)
{
    static $words = array(
/*##############----- global-------############ */
       "centerSinan" =>"مركز سنان",
       
 /*##############----- forms-------############ */
    "logIn" => "تسجيل الدخول",
    "sinup" => "انشاء حساب ",
    "email" => " البريد الإلكتروني",
    "password" => "كلمة المرور",
    "phoneNumber" => "رقم الهاتف",
    "creditor"=>"الدائن",
    "last"=>" أخر ",
 "debtor"=>"المدين",
 "palance"=>"الرصيد",
"address"=>"العنوان",
    "shop" => "تسوق",
    "date"=>"التاريخ",
    "local"=>"محلي",
    "name"=>"الاسم",
    "entryDate"=>"تاريخ الاضافة",
 /*##############----- users-------############ */
    "users" => "المستخدمين",
    "userName" => "أسم المستخدم",
    "addUser"=>"اضافة مستخدم",
    "updateUser"=>" تعديل مستخدم",
 
  /*##############----- admins-------############ */
  "admins" => "المسؤلين",
  "admin" => "مسؤل",
  "supAdmin" => "مسؤل فرعي",

  "adminName" => "أسم المسؤل",
  "addAdmin"=>"اضافة مسؤل",
  "updateAdmin"=>"تعديل مسؤل",
   /*##############----- Patients-------############ */
   "patients" => "المرضى",
   "patient"=>"مريض",
   "PatientName" => "أسم المريض",
   "addPatient"=>"إضافة مريض ",
   "updatePatient"=>"تعديل مريض",
  
   "services" => "الخدمات",
   "service"=>"خدمة",
   "serviceName" => "أسم الخدمة",
   "addService"=>"إنشاء خدمة",
   "updateService"=>"تعديل خدمة",
   "serviceImage" => "صورة الخدمة",
   /*##############----- Employees-------############ */
   "employees" => "الموظفين",
   "employee"=>"موظف",
   "employeeName" => "أسم الموظف",
   "addEmployee"=>"إنشاء موظف",
   "updateEmployee"=>"تعديل موظف",
   "employeeImage" => "صورة الموظف",
  "department"=>"قسم",
  "saivi" => "السيره الذاتية",
   /*##############----- employmentDepartment-------############ */
   
  /*##############----- Reservation-------############ */
  "reservations" => "مواعيد الأستشارة ",
  "reservation" => "موعد إستشارة",

"doctor"=>"الدكتور",
  "doctorName" => "أسم الدكتور",
  "addReservation"=>"اضافة موعد إستشارة",
  "updateReservation"=>"تعديل موعد إستشارة",
  "status"=>"حالة المريض",
  
   "employmentsDepartments" => "الاقسام الوظيفية",
   "employmentDepartment"=>"قسم وظيفي " ,
   "employmentDepartmentName" => "أسم القسم الوظيفي",
   "addEmploymentDepartment"=>"إنشاء قسم وظيفي ",
   "updateEmploymentDepartment"=>"تعديل قسم وظيفي ",
   "employmentDepartmentImage" => "صورة القسم الوظيفي ",
    "dashboard" => "لوحة التحكم ",
    
 "categories" => "الأقسام",
 "CategoryName" => "أسم القسم",
  
 "addCategory"=>"اضافة قسم",
"updateCategory"=>"تعديل قسم",
"visibility"=>"مرئي",
"discription"=>"الوصف",
"allowAds"=>"  الاعلانات" ,
"allowComments"=>" التعليقات",
"ordering"=>"الترتيب",

    "edit"=>"تعديل",
   
    "errorMessage"=>"حدث خطأ غير متوقع",
"enabled"=>"متاح",
"disabled"=>"غير متاح",

    "back"=>"رجوع",
    "fullName" => "الاسم كامل",
    "confairmPassword" => "تأكيد كلمة المرور",
    "errorEmpty"=>"الحقل فارغ",
    
    "errorEmailAlreadyExists"=>" البريد الالكتروني موجود سابقا",
    "errorPhonelAlreadyExists"=>"  رقم الهاتف موجود سابقا",

    "errorCategoryAlreadyExists"=>" موجود سابقا القسم",
    "errorExtention"=>"إمتداد الملف خاطئ",
    "errorServiceAlreadyExists"=>"هذه الخدمة موجودة سابقا",
    "errorEmploymentDepartmentAlreadyExists"=>"هذ القسم الوظيفي موجود سابقا",
    "errorSizeImage"=>"حجم الصورة كبير ",
    "errorNotFound"=>"غير موجود",
   "titelAlertDelet"=>"تحذير!",
   
   "contentAlertDelet"=>"هل انت متأكد من عملية الحذف",
"successMessage"=> "تم العملية بنجاح",
   
   "permission"=>"Permission",
   "register"=>"Register",

   "trust"=>"Trust",
   
"errorPasswordDoesNotMatch"=> "كلمة المرور غير متطابقه",    
    "logout"=>"تسجيل خروج",
    );
    return $words[$word];
}
?>