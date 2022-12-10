
<?php

function add_cat(){
    include("inc/db.php");
    if(isset($_POST['add_cat'])){
        $c_name=$_POST['c_name'];
        $c_des=$_POST['c_des'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $creator=$_POST['creator'];
        $check=$con->prepare("select * from courses where c_name='$c_name', c_des='$c_des', email='$email', phone='$phone', creator='$creator'");
        $check->setFetchMode(PDO:: FETCH_ASSOC);
        $check->execute();
        $count=$check->rowCount();

        if($count==1){
            echo"<script>Alert('Category Already Added')</script>";
            echo"<script>window.open('c.php','_self')</script>";
        }else{
            $add_cat=$con->prepare("insert into courses(c_name,c_des,email,phone,creator)values('$c_name','$c_des','$email','$phone','$creator')");
            if($add_cat->execute()){
                echo"<script>Alert('Category Added Succesfully')</script>";
                echo"<script>window.open('c.php','_self')</script>";
            }else{
                echo"<script>Alert('Category Not Added Succesfully Succesfully')</script>";
                echo"<script>window.open('c.php','_self')</script>";
            }
        }
    }
}

function edit_cat(){
    include("inc/db.php");
   
    if(isset($_GET['edit_cat'])){
        $id=$_GET['edit_cat'];

        $get_cat=$con->prepare("select * from courses where id='$id'");
        $get_cat->setFetchMode(PDO::FETCH_ASSOC);
        $get_cat->execute();
        $row=$get_cat->fetch();

        echo"          <h3>Edit Category</h3>
        <form id='edit_form' method='post' enctype='multipart/form-data'><br/>
        <input type='text' class='form-control' name='c_name' value='".$row['c_name']."' placeholder='Enter Category Name Here'/>
        <br/>
        <input type='text' class='form-control' name='c_des' value='".$row['c_des']."' placeholder='Enter Category Name Here'/>
        <br/><input type='text' class='form-control' name='email' value='".$row['email']."' placeholder='Enter Category Name Here'/>
        <br/><input type='text' class='form-control' name='phone' value='".$row['phone']."' placeholder='Enter Category Name Here'/>
        <br/><input type='text' class='form-control' name='creator' value='".$row['creator']."' placeholder='Enter Category Name Here'/>
        <br/><button name='edit_cat' class='btn btn-primary'>Edit Category</button>
        </form>";
       if(isset($_POST['edit_cat'])){
           $c_name=$_POST['c_name'];

            $check=$con->prepare("select * from courses where c_name='$c_name', c_des='$c_des', email='$email', phone='$phone', creator='$creator'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count=$check->rowCount();

            if($count==1){
                echo"<script>Alert('Category Already Added Succesfully')</script>";
                echo"<script>window.open('c.php','_self')</script>";
            }else{

            $up=$con->prepare("update select * from courses where c_name='$c_name', c_des='$c_des', email='$email', phone='$phone', creator='$creator' where id='$id'");
            if($up->execute()){
                echo"<script>Alert('Category Updated Succesfully Succesfully')</script>";
                echo"<script>window.open('c.php','_self')</script>";
            }else{
                echo"<script>Alert('Category Not Updated Succesfully')</script>";
                echo"<script>window.open('c.php','_self')</script>";
            }
        }
    }
    }
}
function view_cat() {
    include("inc/db.php");
    $get_cat=$con->prepare("select * from courses");
    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
    $get_cat->execute();
    $i=1;
    while($row=$get_cat->fetch()):
        echo"<tr>
            <td>".$i++."</td>
            <td>".$row['c_name']."</td>
            <td>".$row['c_des']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['creator']."</td>
            <td><a href='c.php?edit_cat=".$row['id']."' title='Edit'><i class='fa fa-edit'></i></a>
            <a style='color:#f00;' href='c.php?del_cat=".$row['id']."' title='Delete'><i class='fa fa-trash'></i></a></td>
        <tr>";
    endwhile;

    if(isset($_GET['del_cat'])){
        $id=$_GET['del_cat'];

        $del=$con->prepare("delete from courses where id='$id'");
        if($del->execute()){
            echo"<script>Alert('Category Deleted Succesfully')</script>";
            echo"<script>windows.open('c.php','_self')</script>";
        }else{
            echo"<script>alert('Category Not Deleted Successfully')</script>";
            echo"<script>windows.open('c.php','_self')</script>";
        }
    }
}