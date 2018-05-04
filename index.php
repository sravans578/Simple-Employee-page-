<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee info page </title>
  <script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["e_name"].value;
    var b=document.forms["reg"]["e_id"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["p_address"].value;
    var e=document.forms["reg"]["t_address"].value;
    var f=document.forms["reg"]["age"].value;
    var g=document.forms["reg"]["m_contact"].value;
    var h=document.forms["reg"]["l_contact"].value;
    var i=document.forms["reg"]["designation"].value;


    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (f==null || f=="") && (i==null || i==""))
    {
      alert("All * Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("Employee name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Employee ID  must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
  }
</script>
</head>
<body>
 
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Employee Name*:</div></td>
        <td width="171"><input type="text" name="e_name" /></td>
      </tr>
      <tr>
        <td><div align="right">ID*:</div></td>
        <td><input type="text" name="e_id" /></td>
      </tr>
       <tr>
        <td><div align="right">Age*:</div></td>
        <td><input type="text" name="age" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender*:</div></td>
        <td><input type="text" name="gender" /></td>
      </tr>
      <tr>
        <td><div align="right">Designation*</div></td>
        <td><input type="text" name="designation" /></td>
      </tr>
      <tr>
        <td><div align="right">Address ( temporary ) :</div></td>
        <td><input type="text" name="t_address" /></td>
      </tr>
       <tr>
        <td><div align="right">Address ( Permanent ) :</div></td>
        <td><input type="text" name="p_address" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No. (mobile):</div></td>
        <td><input type="text" name="m_contact" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No. (landline):</div></td>
        <td><input type="text" name="l_contact" /></td>
      </tr>
      
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</body>
</html>