<?php
use App\Models\Accounts;

function isActive($email)
{
$Accounts= Accounts::where('email', $email)->where('is_active',1)->count();
if($Accounts>0)
{
return true;
}
return false;
}
