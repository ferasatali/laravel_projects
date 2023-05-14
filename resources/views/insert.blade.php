<!DOCTYPE html>
<html>
<head>
	<title>Student Records Form</title>
</head>
<body>
	<h1>Student Records Form</h1>
	<div class="col-sm-12">
            <form action=" {{ route('save-awp') }}" method="POST">
                @csrf   
                <div class="mb-1 col-sm-8">  
                    <label for="id" class="form-label">id</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="mb-1 col-sm-8">
                    <label for="CGPA" class="form-label">CGPA</label>
                    <input type="text" class="form-control" id="CGPA" name="CGPA">
                </div>
                <div class="mb-1 col-sm-8 ">
                    <label for="rollNumber" class="form-label">rollNumber</label>
                    <input type="text" class="form-control" id="rollNumber" name="rollNumber">
                </div>
                <div   align=center class=" mr-12 mt-2">
                <button  type="submit" class="btn btn-outline-warning">Add Record</button>
                </div>
            </form>
        </div>
</body>
</html>
