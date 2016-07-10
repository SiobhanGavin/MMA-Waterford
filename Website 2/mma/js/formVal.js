function formValidate()
{
   if( document.queryForm.inputFirstName.value == "" ) {
     alert( "Please provide your first name!" );
     document.queryForm.inputFirstName.focus() ;
     return false;
   }
   if( document.queryForm.inputLastName.value == "" ) {
     alert( "Please provide your last name!" );
     document.queryForm.inputLastName.focus() ;
     return false;
   }
   if( document.queryForm.inputEmail.value == "" ) {
     alert( "Please provide your email address!" );
     document.queryForm.inputEmail.focus() ;
     return false;
   }
   else{
     // Put extra check for data format
     var ret = validateEmail();
     if( ret == false )
     {
          return false;
     }
   }
   if( document.queryForm.inputQuery.value == "" ) {
     alert( "Please enter your query!" );
     document.queryForm.inputQuery.focus() ;
     return false;
   }
   return true;
}