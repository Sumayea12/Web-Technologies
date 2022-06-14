<?php
$name = $_POST['name'];
function Empty ($name)
{
  if($name == null)
  {
		echo "Name cant be empty";
    return false;
  }
    else
    {
      return true;
    }
  }
function Two_Word
{
  for ($i=0; $i <strlen($name); $i++)
  {
if ($name[$i]==" ")
{
return true;
}
  }
  echo "You must be contain at least two words";
  return false;
}
