
<?php

    function add_cat(){
        include("inc/db.php");
        if(isset($_POST['add_cat'])){
            $cat_name=$_POST['cat_name'];
            $check=$con->prepare("select * from cat where cat_name='$cat_name'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count=$check->rowCount();

            if($count==1){
                echo"<script>Alert('Category Already Added')</script>";
                echo"<script>window.open('cat.php','_self')</script>";
            }else{
                $add_cat=$con->prepare("insert into cat(cat_name)values('$cat_name')");
                if($add_cat->execute()){
                    echo"<script>Alert('Category Added Succesfully')</script>";
                    echo"<script>window.open('cat.php','_self')</script>";
                }else{
                    echo"<script>Alert('Category Not Added Succesfully Succesfully')</script>";
                    echo"<script>window.open('cat.php','_self')</script>";
                }
            }
        }
    }

    function edit_cat(){
        include("inc/db.php");
       
        if(isset($_GET['edit_cat'])){
            $id=$_GET['edit_cat'];

            $get_cat=$con->prepare("select * from cat where cat_id='$id'");
            $get_cat->setFetchMode(PDO::FETCH_ASSOC);
            $get_cat->execute();
            $row=$get_cat->fetch();

            echo"          <h3>Edit Category</h3>
            <form id='edit_form' method='post' enctype='multipart/form-data'><br/>
              <input type='text' class='form-control' name='cat_name' value='".$row['cat_name']."' placeholder='Enter Category Name Here'/>
              <br/><button name='edit_cat' class='btn btn-primary'>Edit Category</button>
            </form>";
           if(isset($_POST['edit_cat'])){
               $cat_name=$_POST['cat_name'];

                $check=$con->prepare("select * from cat where cat_name='$cat_name'");
                $check->setFetchMode(PDO:: FETCH_ASSOC);
                $check->execute();
                $count=$check->rowCount();

                if($count==1){
                    echo"<script>Alert('Category Already Added Succesfully')</script>";
                    echo"<script>window.open('cat.php','_self')</script>";
                }else{

                $up=$con->prepare("update cat set cat_name='$cat_name' where cat_id='$id'");
                if($up->execute()){
                    echo"<script>Alert('Category Updated Succesfully Succesfully')</script>";
                    echo"<script>window.open('cat.php','_self')</script>";
                }else{
                    echo"<script>Alert('Category Not Updated Succesfully')</script>";
                    echo"<script>window.open('cat.php','_self')</script>";
                }
            }
        }
        }
    }
    function view_cat() {
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        $i=1;
        while($row=$get_cat->fetch()):
            echo"<tr>
                <td>".$i++."</td>
                <td>".$row['cat_name']."</td>
                <td><a href='cat.php?edit_cat=".$row['cat_id']."' title='Edit'><i class='fa fa-edit'></i></a>
                <a style='color:#f00;' href='cat.php?del_cat=".$row['cat_id']."' title='Delete'><i class='fa fa-trash'></i></a></td>
            <tr>";
        endwhile;

        if(isset($_GET['del_cat'])){
            $id=$_GET['del_cat'];

            $del=$con->prepare("delete from cat where cat_id='$id'");
            if($del->execute()){
                echo"<script>Alert('Category Deleted Succesfully')</script>";
                echo"<script>windows.open('cat.php','_self')</script>";
            }else{
                echo"<script>alert('Category Not Deleted Successfully')</script>";
                echo"<script>windows.open('cat.php','_self')</script>";
            }
        }
    }
    function select_cat(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
        endwhile;
    }


        function contact(){
            include("inc/db.php");

            $get_con=$con->prepare("select * from contact");
            $get_con->setFetchMode(PDO:: FETCH_ASSOC);
            $get_con->execute();
            $row=$get_con->fetch();

            echo"<form method='post' enctype='multipart/form-data'>
            <table>
                <tr>
                <div class='input-field'>
                <label for='phn'>Phone Number</label>
                    <input type='tel' value='".$row['phn']."' name='phn' minlength='11' maxlength='15'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='email'>Email</label>
                    <input type='email' value='".$row['email']."' name='email'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='add1'>Office Address</label>
                    <input type='text' value='".$row['add1']."' name='add1'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='add2'>Office Address 2</label>
                    <input type='text' value='".$row['add2']."' name='add2'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='yt'>Youtube</label>
                        <input type='text'  value='".$row['yt']."' name='yt'>
                    
                    </div>
                    </tr>
                <tr>
                <div class='input-field'>
                <label for='fb'>Facebook</label>
                    <input type='text'  value='".$row['fb']."' name='fb'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='git'>Github</label>
                    <input type='text'  value='".$row['git']."' name='git'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                <label for='tw'>Twitter</label>
                    <input type='text'  value='".$row['tw']."' name='tw'>
                    </div>
                </tr>
                <tr>
                    <div class='input-field'>
                    <label for='ln'>Linkedin</label>
                    <input type='text'  value='".$row['ln']."' name='ln'>
                    </div>
                </tr>
                <tr>
                    <div class='input-field'>
                    <label for='ig'>Instagram</label>
                    <input type='text'  value='".$row['ig']."' name='ig'>
                    </div>
                </tr>
                <tr>
                <div class='input-field'>
                    <label for='text_footer'>Text_Footer</label>
                <input type='Text' value='".$row['Text_footer']."' name='Text_footer'>
                </div>
            </tr>
            </table>
           <button class='btn waves-effect waves-teal' name='pc_con'>Save</button>
         </form>";
         
         if(isset($_POST['pc_con'])){
             $phn=$_POST['phn'];
             $email=$_POST['email'];
             $add1=$_POST['add1'];
             $add2=$_POST['add2'];
             $yt=$_POST['yt'];
             $fb=$_POST['fb'];
             $git=$_POST['git'];
             $tw=$_POST['tw'];
             $ig=$_POST['ig'];
             $ln=$_POST['ln'];
             $Text_footer=$_POST['Text_footer'];

             $pc=$con->prepare("update contact set phn='$phn',email='$email',add1='$add1',add2='$add2',yt='$yt',fb='$fb',git='$git',tw='$tw',ln='$ln',ig='$ig',Text_footer='$Text_footer'");
             if($pc->execute()){
                 echo"<script>window.open('contact.php','_self')</script>";
             }
         }
        }



            function homepg(){
                include("inc/db.php");
    
                $homepg=$con->prepare("select * from mainpage");
                $homepg->setFetchMode(PDO:: FETCH_ASSOC);
                $homepg->execute();
                $row=$homepg->fetch();
    
                echo"
                    <form method='post' enctype='multipart/form-data'>
                        <div class='input-field'>
                        <input name='Text_large' type='text' value='".$row['Text_large']."'>
                        <label for='Text_large'>Into Text</label>
                    </div>
                        <div class='input-field'>
                        <input name='Text_color' type='text' value='".$row['Text_color']."'>
                        <label for='Text_color'>Rating</label>
                    </div>
                        <div class='input-field'>
                        <textarea name='Text_info' class='materialize-textarea'> ".$row['Text_info']."</textarea>
                        <label for='Text_info'>Slogan</label>
                    </div>
                    <button name='u_con' class='btn waves-effect waves-teal'>Save</button>
                    </form>
                ";
             
             if(isset($_POST['u_con'])){
                 $Text_large=$_POST['Text_large'];
                 $Text_color=$_POST['Text_color'];
                 $Text_info=$_POST['Text_info'];
    
                 $u=$con->prepare("update mainpage set Text_large='$Text_large',Text_color='$Text_color',Text_info='$Text_info'");
                 if($u->execute()){
                     echo"<script>window.open('homepg.php','_self')</script>";
                 }
             }
            }
            function todo(){
                include("inc/db.php");
    
                $todo=$con->prepare("select * from todo");
                $todo->setFetchMode(PDO:: FETCH_ASSOC);
                $todo->execute();
                $row=$todo->fetch();
    
                echo"
                <br />
                <h3>Edition Of The Features Better</h3>
                    <form method='post' enctype='multipart/form-data'>
                    <div class='input-field'>
                        <input name='about_header' type='text' value='".$row['about_header']."'>
                        <label for='about_header'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='title' type='text' value='".$row['title']."'>
                        <label for='title'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='text' type='text' value='".$row['text']."'>
                        <label for='text'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='title2' type='text' value='".$row['title2']."'>
                        <label for='title2'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='text2' type='text' value='".$row['text2']."'>
                        <label for='text2'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='title3' type='text' value='".$row['title3']."'>
                        <label for='title3'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='cst_txt_name' type='text' value='".$row['cst_txt_name']."'>
                        <label for='cst_txt_name'>Name</label>
                    </div>
                    <div class='input-field'>
                        <input name='cst_txt' type='text' value='".$row['cst_txt']."'>
                        <label for='cst_txt'>Name</label>
                    </div>
                    <button name='a_con' class='btn waves-effect waves-teal'>Save</button>
                    </form>
                ";
             
             if(isset($_POST['a_con'])){
                 $about_header=$_POST['about_header'];
                 $title=$_POST['title'];
                 $text=$_POST['text'];
                 $titlw2=$_POST['title2'];
                 $text2=$_POST['text2'];
                 $title3=$_POST['title3'];
                 $cst_txt_name=$_POST['cst_txt_name'];
                 $cst_txt=$_POST['cst_txt'];
    
                 $a=$con->prepare("update todo set about_header='$about_header',title='$title',text='$text',title2='$title2',text2='$text2',title3='$title3',cst_txt_name='$cst_txt_name',cst_txt='$cst_txt'");
                 if($a->execute()){
                     echo"<script>window.open('homepg.php','_self')</script>";
                 }
             }
            }
            function features(){
                include("inc/db.php");
    
                $features=$con->prepare("select * from features");
                $features->setFetchMode(PDO:: FETCH_ASSOC);
                $features->execute();
                $row=$features->fetch();
    
                echo"
                <br />
                <h3>Feature Section</h3>
                    <form method='post' enctype='multipart/form-data'>
                    <div class='input-field'>
                        <input name='card_main_title' type='text' value='".$row['card_main_title']."'>
                        <label for='card_main_title'>features_title</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text' type='text' value='".$row['card_main_text']."'>
                        <label for='card_main_text'>features_text</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_title1' type='text' value='".$row['card_main_title1']."'>
                        <label for='card_main_title1'>features_title1</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text1' type='text' value='".$row['card_main_text1']."'>
                        <label for='card_main_text1'>features_text1</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_title2' type='text' value='".$row['card_main_title2']."'>
                        <label for='card_main_title2'>features_title2</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text2' type='text' value='".$row['card_main_text2']."'>
                        <label for='card_main_text2'>features_text2</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_title3' type='text' value='".$row['card_main_title3']."'>
                        <label for='card_main_title3'>features_title3</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text3' type='text' value='".$row['card_main_text3']."'>
                        <label for='card_main_text3'>features_text3</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_title4' type='text' value='".$row['card_main_title4']."'>
                        <label for='card_main_title4'>features_title4</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text4' type='text' value='".$row['card_main_text4']."'>
                        <label for='card_main_text4'>features_text4</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_title5' type='text' value='".$row['card_main_title5']."'>
                        <label for='card_main_title5'>features_title5</label>
                    </div>
                    <div class='input-field'>
                        <input name='card_main_text5' type='text' value='".$row['card_main_text5']."'>
                        <label for='card_main_text5'>features_text5</label>
                    </div>
                    <button name='f_con' class='btn waves-effect waves-teal'>Save</button>
                    </form>
                ";
             
             if(isset($_POST['f_con'])){
                 $card_main_title=$_POST['card_main_title'];
                 $card_main_text=$_POST['card_main_text'];
                 $card_main_title1=$_POST['card_main_title1'];
                 $card_main_text1=$_POST['card_main_text1'];
                 $card_main_title2=$_POST['card_main_title2'];
                 $card_main_text2=$_POST['card_main_text2'];
                 $card_main_title3=$_POST['card_main_title3'];
                 $card_main_text3=$_POST['card_main_text3'];
                 $card_main_title4=$_POST['card_main_title4'];
                 $card_main_text4=$_POST['card_main_text4'];
                 $card_main_title5=$_POST['card_main_title5'];
                 $card_main_text5=$_POST['card_main_text5'];
    
                 $f=$con->prepare("update features set card_main_title='$card_main_title',card_main_text='$card_main_text',card_main_title1='$card_main_title1',card_main_text1='$card_main_text1',card_main_title2='$card_main_title2',card_main_text2='$card_main_text2',card_main_title3='$card_main_title3',card_main_text3='$card_main_text3',card_main_title4='$card_main_title4',card_main_text4='$card_main_text4',card_main_title5='$card_main_title5',card_main_text5='$card_main_text5'");
                 if($f->execute()){
                    echo"<script>alert('Something Happen')</script>";
                      echo"<script>window.open('homepg.php','_self')</script>";
                    }else{
                        echo"<script>alert('Something Happen')</script>";
                    }
             }
            }
            function footer_txt(){
                include("inc/db.php");
    
                $todo=$con->prepare("select * from footer_links");
                $todo->setFetchMode(PDO:: FETCH_ASSOC);
                $todo->execute();
                $row=$todo->fetch();
    
                echo"
                <br />
                <h3>Editing Of The Footer Better</h3>
                    <form method='post' enctype='multipart/form-data'>
                    <div class='input-field'>
                        <input name='footer_links' type='text' value='".$row['footer_links']."'>
                        <label for='footer_links'>First Footer</label>
                    </div>
                    <div class='input-field'>
                        <input name='footer_href' type='text' value='".$row['footer_href']."'>
                        <label for='footer_href'>First Footer_link</label>
                    </div>
                    <div class='input-field'>
                        <input name='footer_links1' type='text' value='".$row['footer_links1']."'>
                        <label for='footer_links1'>Second Footer</label>
                    </div>
                    <div class='input-field'>
                        <input name='footer_href1' type='text' value='".$row['footer_href1']."'>
                        <label for='footer_href1'>Second Footer-link</label>
                    </div>
                    <div class='input-field'>
                        <input name='footer_links2' type='text' value='".$row['footer_links2']."'>
                        <label for='footer_links2'>Third Footer</label>
                    </div>
                    <div class='input-field'>
                        <input name='footer_href2' type='text' value='".$row['footer_href2']."'>
                        <label for='footer_href2'>Third Footer-link</label>
                    </div>
                    <button name='t_con' class='btn waves-effect waves-teal'>Save</button>
                    </form>
                ";
             
             if(isset($_POST['t_con'])){
                 $footer_links=$_POST['footer_links'];
                 $footer_href=$_POST['footer_href'];
                 $footer_links=$_POST['footer_links'];
                 $footer_href1=$_POST['footer_href1'];
                 $footer_links1=$_POST['footer_links1'];
                 $footer_href2=$_POST['footer_href2'];
                 $footer_links2=$_POST['footer_links2'];
    
                 $t=$con->prepare("update todo set footer_links='$footer_links',footer_href='$footer_href',footer_link1='$footer_link1',footer_href1='$footer_href1',footer_link2='$footer_link2',footer_href2='$footer_href2'");
                 if($t->execute()){
                     echo"<script>window.open('homepg.php','_self')</script>";
                 }
             }
            }
            function about(){
                include("inc/db.php");
    
                $about=$con->prepare("select * from About");
                $about->setFetchMode(PDO:: FETCH_ASSOC);
                $about->execute();
                $row=$about->fetch();
    
                echo"
                <h3>About Us</h3>
                    <form method='post' enctype='multipart/form-data'>
                    <div class='input-field'>
                        <input name='about_text' type='text' value='".$row['about_text']."'>
                        <label for='about_text'>Name</label>
                    </div>
                    <button name='c_con' class='btn waves-effect waves-teal'>Save</button>
                    </form>
                ";
             
             if(isset($_POST['c_con'])){
                 $about_text=$_POST['about_text'];
    
                 $c=$con->prepare("update about set about_text='$about_text'");
                 if($c->execute()){
                     echo"<script>window.open('aboutpg.php','_self')</script>";
                 }
             }
            }

            function profileadmin(){
                include("inc/db.php");
    
                $admin=$con->prepare("select * from users");
                $admin->setFetchMode(PDO:: FETCH_ASSOC);
                $admin->execute();
                $row=$admin->fetch();
    
                echo"
                <div class='container-fluid'>
                <div id='settings' class='col s12'>
                                        <div class='card-content'>
                                            <form method='post'>
                                                <div class='row'>
                                                    <div class='input-field col s12'>
                                                        <input id='name' name='role' type='text' value='".$row['role']."'>
                                                        <label for='name'>Role</label>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                <div class='input-field col s12'>
                                                    <input id='username' name='uname' type='text' value='".$row['uname']."'>
                                                    <label for='username'>Name</label>
                                                </div>
                                            </div>
                                                <div class='row'>
                                                <div class='input-field col s12'>
                                                    <input id='password' name='pass' type='password' value='".$row['pass']."'>
                                                    <label for='password'>Password</label>
                                                </div>
                                            </div>
                                        </div>
                                                </div> 
                                                <div class='row'>
                                                    <div class='input-field col s12'>
                                                        <button class='btn teal waves-effect waves-light' type='submit' name='p_con'>Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    
            </div>
                ";
             
             if(isset($_POST['p_con'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=$_POST['password'];
    
                 $p=$con->prepare("update userz set fname='$firstname',pass='$pass'");
                 if($p->execute()){
                    echo"<script>alert('Done')</script>";
                      echo"<script>window.open('profile.php','_self')</script>";
                    }else{
                        echo"<script>alert('Something Happen')</script>";
                    }
             }
            }

?>