<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Bootstrap demo</title>
    <style>
      h3{
        font-weight: bold;
        color: black;
      }
      p{
        margin-left: 1rem;
      }
     
      #colored{
        background-color: #cecece;
        font-weight: bold;
        font: size 15px;;
      }
      .table{
        width: 100%;
      }
  
      .center{
    text-align:center !important;
  }
  .title{
    height:18 px;
    background-color:#355E3B;
    border:2px solid #000000;
    color:#ffffff;
    position:relative;
    top:-10px;
  }
  .title2{
    height:1px;
    background-color:#000000;
    border:2px solid #000000;
    color:#ffffff;
    position:relative;
    top:-10px;
  }
  .header, .body{
    border:2px solid #000000;
  }
  .tbl{
    width:150px;
  }
  .list{
    width:200px;
  }
  .table{
    position:relative;
    top:-20px;
    margin-bottom:-20px;
  }
  table,th,td
  {
    border:1px solid #000000;
    font-size:12px;
  }
  .continue{
    background-color:#e0e0e0;
  }
  .question{
    background-color:#e0e0e0;
    width:500px;
  }
  .answer{
    width:100px;
  }
  .passportPic{
    height:180px;
  }
  .auth{
    background-color:#e0e0e0;
  }
  
  </style>
  
  </head>
  <div class="container-fluid">
    <div class="row-fluid header">
      <h3 class="center maintitle">PERSONAL DATA SHEET</h3>
      <p class="pull-right">CS Form 212 (Revised 2017)</p>
      <p class="pull - right">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned</p>
    </div>
  <!--ROW1-->
  <div class="row-fluid body">
    <h5 class="title"><i>PERSONAL INFORMATION</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl" id="colored">SURNAME</td>
          <td colspan="3"><input type="text" name="surname" id="surname" class="form-control"></td>
          <style>
            .form-control{
              width: 100%;
            }
          </style>
        </tr>
        <tr>
          <td class="tbl" id="colored">FIRSTNAME</td>
          <td colspan="3"><input type="text" name="surname" id="surname" class="form-control"></td>
        <tr>
          <td class="tbl" id="colored">MIDDLENAME</td>
          <td colspan="3"><input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
          <td class="tbl" id="colored">NAME EXTENSION</td>
          <td>
            <select name="NAME-EXTENTION" id="name-extention">
              <option value="SELECT">--SELECT--</option>
              <option value="JR.">JR.</option>
              <option value="SR.">SR.</option>
              <option value="II">II</option>
              <option value="III">III</option>
            </select>
            <style>
              #name-extention{
                width: 100%;
                font-size:large;
                font-weight: bold;
              }
            </style>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">DATE OF BIRTH</td>
          <td colspan="3"><input type="date" name="surname" id="surname" class="form-control"></td>
        <tr>
          <td class="tbl" rowspan="2" id="colored"  id="colored">RESIDENTIAL ADDRESS</td>
          <td rowspan="2"> <input type="text" name="surname" id="surname" class="form-control"></td>
            
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">PLACE OF BIRTH</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">SEX</td>
          <td>
            <select name="SEX" id="name-extention">
              <option value="SELECT">--SELECT--</option>
              <option value="MALE">MALE</option>
              <option value="FEMALE">FEMALE</option>
            </select>
          </td>
          <td class="tbl" id="colored">ZIPCODE</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored"></td>>CIVIL STATUS</td>
          <td></td>
          <td class="tbl" id="colored">TELEPHONE NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">CITIZENSHIP</td>
          <td>
            <select name="CITIZENSHIP" id="citizenship">
              <option value="filipino">--SELECT--</option>
              <option value="filipino">FILIPINO</option>
              <option value="filipino">DUAL CITIZENSHIP</option>
              <option value="filipino">TEMP</option>
              <option value="filipino">TEMP</option>
            </select>
            <style>
              #citizenship{
                width: 100%;
                font-size:large;
                font-weight: bold;
              }
          </style>
          </td>
          <td class="tbl" rowspan="2" id="colored">PERMANENT ADDRESS</td>
          <td rowspan="2"><input type="text" name="surname" id="surname" class="form-control"></td></td>
        </tr>
        
        <tr>
          <td class="tbl" id="colored">HEIGHT(m)</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">WEIGHT(kg)</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
          <td class="tbl" id="colored">ZIPCODE</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">BLOOD TYPE</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
          <td class="tbl" id="colored">TELEPHONE NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">GSIS NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
          <td class="tbl" id="colored">E-MAIL ADDRESS</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl" id="colored">PAG-IBIG ID NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
          <td class="tbl" id="colored">CELLPHONE NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">PHILHEALTH NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
          <td class="tbl" id="colored">AGENCY EMPLOYEE NO.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">SSS NO.</td>
          <td><input type="text" name="surname" id="surname" class="form-control"></td>
        </td>
          <td class="tbl" id="colored">T.I.N.</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control"></td>s
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW2-->
  <div class="row-fluid body">
    <h5 class="title"><i>FAMILY BACKGROUND</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl" id="colored">SPOUSE'S SURNAME</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td class="list" id="colored">NAME OF CHILD</td>
          <td class="list" id="colored">DATE OF BIRTH</td>
        </tr>
        <tr>
          <td class="tbl" id="colored">FIRST SURNAME</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">MIDDLE SURNAME</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">OCCUPATION</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">EMPLOYER NAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">BUSINESS ADDRESS</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl" id="colored">TELEPHONE NO.</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">FATHER'S SURNAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">FIRST NAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">MIDDLE NAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">MOTHER'S MAIDEN SURNAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">FIRST NAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
        </tr>
        <tr>
          <td class="tbl"id="colored">MIDDLE NAME</td>
          <td> <input type="text" name="surname" id="surname" class="form-control"></td>
          <td class="tbl center continue" colspan="2"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW3-->
  <div class="row-fluid body">
    <h5 class="title"><i>EDUCATIONAL BACKGROUND</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl center" rowspan="2" id="colored">LEVEL</td>
          <td class="list center" rowspan="2" id="colored">NAME OF SCHOOL</td>
          <td class="tbl center" rowspan="2" id="colored">DECREE COURSE</td>
          <td class="tbl center" rowspan="2"id="colored">YEAR GRADUATED</td>
          <td class="tbl center" rowspan="2"id="colored">HIGHEST GRADE/LEVEL EARNED</td>
          <td class="tbl center" colspan="2"id="colored">INCLUSIVE DATES OF ATTENDANCE</td>
          <td class="tbl center" rowspan="2"id="colored">SCHOLARSHIP/HONORS RECEIVED</td>
        </TR>
        <tr>
          <td class="tbl center" id="colored">FROM</td>
          <td class="tbl center"id="colored">TO</td>
        </tr>
        <tr>
          <td class="tbl"id="colored">ELEMENTARY</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">SECONDARY</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">VOCATIONAL</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">COLLEGE</td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="tbl"id="colored">GRADUATE STUDIES</td>
          <td><input type="text" name="surname" id="surname" class="form-control"></td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW4-->
  <div class="row-fluid body">
    <h5 class="title"><i>CIVIL SERVICE ELIGIBILITY</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2" id="colored">CAREER SERVICE</td>
          

          <td class="tbl center" rowspan="2" id="colored">RATING</td>
          <td class="tbl center" rowspan="2" id="colored">DATE OF EXAMINATION</td>
          <td class="list center" rowspan="2"id="colored">PLACE OF EXAMINATION</td>
          <td class="tbl center" colspan="2"id="colored">LICENSE</td>
        </tr>
        <tr>
          <td class="tbl center"id="colored">NUMBER</td>
          <td class="tbl center"id="colored">DATE OF RELEASE</td>
        </tr>
        <tr>

          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          </tr>
        <tr>

          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            
          </td>
        </tr>
         
      </tbody>
    </table>
  </div>
  <!--ROW5-->
  <div class="row-fluid body">
    <h5 class="title"><i>WORK EXPERIENCE</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl center" colspan="2" id="colored">INCLUSIVE DATES</td>
          <td class="list center" rowspan="2" id="colored">POSITION TITLE</td>
          <td class="tbl center" rowspan="2" id="colored">COMPANY</td>
          <td class="tbl center" rowspan="2" id="colored">MONTHLY SALARY</td>
          <td class="tbl center" rowspan="2" id="colored">SAL.GRADE & STEPS INCREMENT</td>
          <td class="tbl center" rowspan="2" id="colored">STATUS OF APPOINTMENT</td>
          <td class="tbl center" rowspan="2" id="colored">>GOVERNMENT SERVICE</td>
        </tr>
        <tr>
          <td class="tbl center" id="colored">FROM</td>
          <td class="tbl center" id="colored">TO</td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW6-->
  <div class="row-fluid body">
    <h5 class="title"><i>VOLUNTARY WORK</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2"id="colored">NAME & ADDRESS OF ORGANIZATION</td>
          <td class="tbl center" colspan="2" id="colored" >INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2" id="colored">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2"  id="colored">NATURE OF WORK</td>
        </tr>
        <tr>
          <td class="tbl center" id="colored">FROM</tD>
          <td class="tbl center" id="colored">TO</tD>
        </tr> 
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr> 
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW7-->
  <div class="row-fluid body">
    <h5 class="title"><i>TRAINING PROGRAMS</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2" id="colored">TITLE OF SEMINAR</td>
          <td class="tbl center" colspan="2" id="colored">INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2"id="colored">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2"id="colored">CONDUCTED BY</td>
        </tr>
        <tr>
          <td class="tbl center" id="colored">FROM</tD>
          <td class="tbl center" id="colored">TO</tD>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        
      </tbody>
    </table>
  </div>
  <!--ROW8-->
  <div class="row-fluid body">
    <h5 class="title"><i>OTHER INFORMATION</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="center tbl"  id="colored">SPECIAL SKILLS/HOBBIES</td>
          <td class="center tbl"  id="colored">NON-ACADEMIC RECOGNITION</td>
          <td class="center tbl"  id="colored">MEMBERSHIP IN ASSOCIATION OR ORGANIZATION</td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW9-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="question"id="colored">
            <p>36. Are you related by consanguinity or affinity to any of the following: </p><br>
            <p>a. Within the third degree (for National Government Employees):
              appointing authority, recommending authority, chief of office/bureau/department
              or person who has immediate supervision over you in the Office, Bureau or Department
              where you will be appointed?</p><br>
            <p>b. Within fourth degree (for Local Government Employees):
              appointing authority or recommending authority where you will be appointed? </p>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a36"/> YES
            <input type="radio" value="" name="a36"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b36"/> YES
            <input type="radio" value="" name="b36"/> NO
            <br><br>
            <p>If YES, give details: <br>
            ___________________________<br>
            ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question"id="colored">
            <p>37.</p><br>
            <p>a. Have you ever been formally charged?</p><br><br><br>
            <p>b. Have you ever been guilty of any administrative offense? </p>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a37"/> YES
            <input type="radio" value="" name="a37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b37"/> YES
            <input type="radio" value="" name="b37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question"id="colored">
            <p>38.</p><br>
            <p>a. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</p><br>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a38"/> YES
            <input type="radio" value="" name="a38"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question"id="colored">
            <p>39.</p><br>
            <p>a. Have you ever been separated from the service in any of the following modes:<br>
              resignation, retirement, dropped from the rolls, dismissal, termination, and of term, finished contract, AWOL, in the public or private sector?</p>  
              <br>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a39"/> YES
            <input type="radio" value="" name="a39"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question"id="colored">
            <p>40.</p><br>
            <p>a. Have you ever been a candidate in a national or local election (except Barangay Election)?</p><br>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a40"/> YES
            <input type="radio" value="" name="a40"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question"id="colored">
            <p>41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000   (RA 8972), please answer the following items?</p><br>
            <p>a. Are you a member of any Indegenous group?</p><br>
            <p>b. Are you a differently-abled?</p><br>
            <p>c. Are you a solo parent?</p><br>
          </td>
          <td class="answer"id="colored">
            <input type="radio" value="" name="a41"/> YES
            <input type="radio" value="" name="a41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b41"/> YES
            <input type="radio" value="" name="b41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p> <br>
            <input type="radio" value="" name="c41"/> YES
            <input type="radio" value="" name="c41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question" colspan="2"id="colored">
            <p>42. REFERENCES (Person not related by consanguinity of affinity to applicant/appointee)</p>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW10-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" id="colored">Name</td>
          <td class="list center" id="colored">Address</tD>
          <td class="tbl center"id="colored">Tel. No.</td>
          <td rowspan="5" class="tbl center passportPic">
            <p>ID picture taken within the last 6 months (3.5cm x 4.5cm)</p>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
       
       <input type="text" name="surname" id="surname" class="form-control"> <tr>

         
        <input type="text" name="surname" id="surname" class="form-control"><tr>
            <td id="emptytable"></td>
           
           <input type="text" name="surname" id="surname" class="form-control"> <td>
              <input type="text" name="surname" id="surname" class="form-control">
            </td>
            <td>
              <input type="text" name="surname" id="surname" class="form-control">
            </td>
          </tr>
          <tr>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
          <td>
            <input type="text" name="surname" id="surname" class="form-control">
          </td>
        </tr>
        <tr>
          <td class="question" colspan="3" id="colored">
            <p>43. I declare under oath that the Personal Data Sheet has been accomplished by me, and is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines<br><br>
              I also authorize the agency head / authorize representative to verify / validate the contents stated herein. I trust that this information shall remain confidential</p>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW11-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td><!--COMMUNITY TAX CERTIFICATE NO HERE--></td>
          <td rowspan="3"><!--Signature--></td>
          <td rowspan="6" class="tbl center">RIGHT THUMBMARK</td>
        </tr>
        <tr>
          <td class="auth list center"id="colored">COMMUNITY TAX CERTIFICATE NO.</td>
        </tr>
        <tr>
          <td><!--ISSUED AT--></td>
        </tr>
        <tr>
          <td class="auth list center"id="colored">ISSUED AT</td>
          <td class="auth list center"id="colored">SIGNATURE</td>
        </tr>
        <tr>
          <td><!--ISSUED ON--></td>
          <td><!--DATE ACCOMPLISHED--></td>
        </tr>
        <tr>
          <td class="auth list center"id="colored">ISSUED ON</td>
          <td class="auth list center"id="colored">DATE ACCOMPLISHED</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</body>
<html>
