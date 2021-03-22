<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="mx-4">Student Information for Matric Marksheet</h1>
    
    <form method="post" action="marksheet.php">
        <div class="form-group p-4">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="fname">Father Name:</label>
            <input type="text" name="fname" id="fname" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="school">School/Institute:</label>
            <input type="text" name="school" id="school" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="year">Annual year:</label>
            <input type="number" name="year" id="year" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="rnum">Roll Number:</label>
            <input type="number" name="rnum" id="rnum" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="group">Group:</label>
            <input type="text" name="group" id="group" class="form-control">
        </div>
        <h4>Subject Marks</h4>
        <div class="form-group p-4">
            <label for="sin">Sindhi:</label>
            <input type="number" name="sin" id="sin" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="urdu">Urdu:</label>
            <input type="number" name="urdu" id="urdu" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="maths">Mathematics:</label>
            <input type="number" name="maths" id="maths" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="eng1">English part I:</label>
            <input type="number" name="eng1" id="eng1" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="eng2">English part II:</label>
            <input type="number" name="eng2" id="eng2" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="pst">Pakistan Studies:</label>
            <input type="number" name="pst" id="pst" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="isl">Islamiat:</label>
            <input type="number" name="isl" id="isl" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="compt">Computer theory:</label>
            <input type="number" name="compt" id="compt" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="compp">Computer practical:</label>
            <input type="number" name="compp" id="compp" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="phyt">Physics theory:</label>
            <input type="number" name="phyt" id="phyt" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="phyp">Physics practical:</label>
            <input type="number" name="phyp" id="phyp" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="chemt">Chemistry theory:</label>
            <input type="number" name="chemt" id="chemt" placeholder="Please enter your marks " class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="chemp">Chemistry practical:</label>
            <input type="number" name="chemp" id="chemp" placeholder="Please enter your marks " class="form-control">
        </div>
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Submit!">
    </form>
</body>
</html>