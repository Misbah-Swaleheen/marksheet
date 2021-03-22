<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link rel="stylesheet" href="mark.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $total = $_POST['sin']+$_POST['urdu']+$_POST['maths']+$_POST['eng1']+$_POST['eng2']+$_POST['pst']+$_POST['isl']+$_POST['compt']+$_POST['compp']+$_POST['phyt']+$_POST['phyp']+$_POST['chemt']+$_POST['chemp'];
        $p = $total/850 *100;
        if($p >= 80){
            $grade = 'A+';
        }
        elseif($p >= 70){
            $grade = 'A';
        }
        elseif($p >= 60){
            $grade = 'B';
        }
        elseif($p >= 50){
            $grade = 'C';
        }
        else{
            $grade = 'F';
        }
    ?>
    <div class="container">
       <h1 class="fhead text-center">
            BOARD OF SECONDARY EDUCATION
       </h1>
       <h1 class="shead text-center">
           KARACHI
       </h1>
        <span class="text-center para">STATEMENT OF MARKS</span>
       <span class="text-center para">S.S.C. EXAMINATION</span>
       <span class="text-center para">(FOR SUCCESSFUL CANDIDATES ONLY</span>
       <div class="row frst">
          <div class="col">
                <div>
                    <span class="first">EXAMINATION</span>
                    <span class="second"> ANNUAL <?php echo $_POST['year']?></span>
                </div>
            </div>
            <div class="col">
                <div>
                    <span class="first">ROLL NUMBER</span>
                    <span class="mx-3 end"><?php echo $_POST['rnum']?></span>
                </div>
                <div>
                    <span class="first">GROUP</span>
                    <span class="mx-3 end"> <?php echo $_POST['group']?></span>
                </div>
            </div>
       </div>
       <div class="row">
            <div class="col">
                <span class="first">NAME</span>
               
                <span class="second"> <?php echo $_POST['name']?></span>

            </div>
       </div>
       <div class="row">
            <div class="col">
                <span class="first">FATHER'S NAME</span>
                <span class="second"><?php echo $_POST['fname']?> </span>

            </div>
       </div>
       <div class="row">
            <div class="col">
                <span class="first">SCHOOL/PRIVATE</span>
                <span class="second"><?php echo $_POST['school']?> </span>

            </div>
       </div>
    </div>
       <div class="container-fluid mt-3 table">
            <div class="row text-center">
                <div class="col-lg-12 tcol  heading">
                    <span class=" fw-bold">SUBJECTS</span>
                </div>
            </div>
           <div class="row text-center firstrow">
                <div class="col-5 fcol comp"><span> COMPONENT-I</span></div>
                <div class="col-1 tcol mrk "><span> MARKS </span></div>
                <div class="col-5 tcol comp"><span> COMPONENT-II </span></div>
                <div class="col-1 tcol mrk"><span> MARKS </span></div>
            </div>
            <div class="row firstrow">
                <div class="col-5 fcol">
                   <p>SINDHI SALEES <span class="text-end mx-1 end " ><?php echo $_POST['sin']?></span></p>
                   <p>URDU NORMAL <span class="text-end mx-1 end" ><?php echo $_POST['urdu']?></span></p>
                </div>
                <div class="col-1 text-center tcol">
                    <p class="ps-0 le8"><?php echo $_POST['sin']+$_POST['urdu']?></p>
                    <p  class="pe-0 ri8">/150</p>
                </div>
                <div class="col-5 tcol"><p>MATHEMATICS</p></div>
                <div class="col-1 text-center tcol">
                    <p  class="ps-0 le8"><?php echo $_POST['maths']?></p>
                    <p  class="pe-0 ri8">/100</p>
                </div>
            </div>
            <div class="row firstrow">
                <div class="col-5 fcol">
                   <p>ENGLISH (COMP) PAPER I <span class="text-end mx-1 end" ><?php echo $_POST['eng1']?></span></p>
                   <p>ENGLISH (COMP) PAPER II <span class="text-end mx-1 end" ><?php echo $_POST['eng2']?></span></p>
                </div>
                <div class="col-1 text-center tcol">
                    <p  class="ps-0 le8"><?php echo $_POST['eng1']+$_POST['eng2']?></p>
                    <p  class="pe-0 ri8">/150</p>
                </div>
                <div class="col-5 tcol">
                    <p>COMPUTER THEORY</p>
                    <P>COMPUTER PRACTICAL</P>    
                </div>
                <div class="col-1  tcol">
                    <p><?php echo $_POST['compt']?>/75</p>
                    <p><?php echo $_POST['compp']?>/25</p>
                </div>
            </div>

            <div class="row firstrow ">
                <div class="col-5 fcol">
                   <p>PAKISTAN STUDIES </span></p>
                   
                </div>
                <div class="col-1 text-center tcol">
                    <p class="ps-0 le8"><?php echo $_POST['pst']?></p>
                    <p class="pe-0 ri8">/75</p>
                </div>
                <div class="col-5 tcol">
                    <p>PHYSICS THEORY</p>
                    <P>PHYSICS PRACTICAL</P>    
                </div>
                <div class="col-1 tcol">
                    <p><?php echo $_POST['phyt']?>/75</p>
                    <p><?php echo $_POST['phyp']?>/25</p>
                </div>
            </div>
            <div class="row firstrow">
                <div class="col-5 fcol">
                   <p>ISLAMIAT<span class="text-right" ></span></p>
                  
                </div>
                <div class="col-1 text-center tcol">
                    <p class="ps-0 le8"><?php echo $_POST['isl']?></p>
                    <p class="pe-0 ri8">/75</p>
                </div>
                <div class="col-5 tcol">
                    <p>CHEMISTRY THEORY</p>
                    <P>CHEMISTRY PRACTICAL</P>    
                </div>
                <div class="col-1 tcol">
                    <p><?php echo $_POST['chemt']?>/75</p>
                    <p><?php echo $_POST['chemp']?>/25</p>
                </div>
            </div>
           <div class="row my-3">
                <div class="col-lg-12 text-end ">
                    <p class="mx-5 ">GRAND TOTAL: <SPAN class="mx-3"><?php echo $total?></SPAN> OUT OF 850</p>
                </div>
            </div>
           <div class="row text-end mx-5">
                <div class="col-lg-12 ">
                    <p>GRADE <SPAN class="px-5 mx-3 py-2 border border-secondary"><?php echo $grade?></SPAN> </p>
                </div>
            </div>
            
    </div>
</body>
</html>