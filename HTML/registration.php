<?
function RegisterUser()

{
   if(!isset($_POST['submitted']))
    {
       return false;
    }
$formvars = array();
    if(!$this->ValidateRegistrationSubmission())
    {
    return false;
    )
    $this->CollectRegistrationSubmission($formvars);
    if(!$this->SaveToDatabase($formvars))

    {
        return false;
    }
    if(!$this->SendUserConfirmationEmail($formvars))
    {
        return false;
    }
 
    $this->SendAdminIntimationEmail($formvars);
     
    return true;
}
>