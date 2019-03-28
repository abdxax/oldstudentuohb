<?php
require "cont.php";
class opreter extends DB{
    private $pdo;
    public function __construct(){
     parent::__construct("root","","old");
     $this->pdo=$this->db;
    }
//Login Methos 
    public function login($user,$pass){
        $sql=$this->pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $sql->execute(array($user,$pass));
        if ($sql->rowCount()==1){
            foreach ($sql as $key ) {
                if ($key['role']==1){
                    $_SESSION['email']=$user;
                    $_SESSION['pass']=$pass;
                    $_SESSION['roles']=$key['role'];
                    header("location:page/admin/index.php");
                }
                else if($key['role']==2){
                    $_SESSION['email']=$user;
                    $_SESSION['pass']=$pass;
                    $_SESSION['roles']=$key['role'];
                    header("location:page/user/index.php");
                }
                 else if($key['role']==3){
                    $_SESSION['email']=$user;
                    $_SESSION['pass']=$pass;
                    $_SESSION['roles']=$key['role'];
                    header("location:page/user2/index.php");
                }
                 else if($key['role']==4){
                    $_SESSION['email']=$user;
                    $_SESSION['pass']=$pass;
                    $_SESSION['roles']=$key['role'];
                    header("location:page/query/index.php");
                }
                else if($key['role']==5){
                    $_SESSION['email']=$user;
                    $_SESSION['pass']=$pass;
                    $_SESSION['roles']=$key['role'];
                    header("location:page/review/colloge.php");
                }
                else{
                    header("location:login.php?msg=err");
                }
            }
        }
        else{
            echo "string";
        }
    }

    //get employee info 
    public function getInfoEmployee($email){
        $sql=$this->pdo->prepare("SELECT * FROM info WHERE email=?");
        $sql->execute(array($email));
        return $sql;
    }

    //getColloge name 

    public function getIColloge($id){
        $sql=$this->pdo->prepare("SELECT * FROM college WHERE id_col=?");
        $sql->execute(array($id));
        foreach ($sql as $key ) {
            return $key['name_col'];
        }
    }

    //add new majer 
    public function addMajer($mname,$id_col){
        $sql=$this->pdo->prepare("INSERT INTO majer(id_col,majer_name)VALUES (?,?)");
        if($sql->execute(array($mname,$id_col)))
            echo " ";
        else
          echo " ";

    }

    //get all college

public function getmajer($id){
        $sql=$this->pdo->prepare("SELECT * FROM majer WHERE id_col=?");
        $sql->execute(array($id));
        return $sql;
    }


    //getAll majer in the college 

    public function getMajerstu($id){
        $sql=$this->pdo->prepare("SELECT * FROM majer WHERE id_col=?");
        $sql->execute(array($id));
        return $sql;
    }

    //add student 
    public function addStudent($id,$name,$mj,$id_col){
        $sql=$this->pdo->prepare("INSERT INTO student(id_gov,name,id_col,id_maj)VALUES(?,?,?,?)");
        if ($sql->execute(array($id,$name,$id_col,$mj))) {
            # code...
        }
    }

    //getAllStudent 
     public function getallstudentsame($id){
        $sql=$this->pdo->prepare("SELECT * FROM student LEFT JOIN majer on student.id_maj=majer.id_m WHERE student.id_col=?");
        $sql->execute(array($id));
        return $sql;
    }

    //getAllTearm
     public function getallsTeram(){
        $sql=$this->pdo->prepare("SELECT * FROM term ");
        $sql->execute();
        return $sql;
    }

    //insert subject 
     public function addSubject($id_tr,$name,$mj,$hour){
        $sql=$this->pdo->prepare("INSERT INTO subject(id_maj,id_trm,hours,sub_name)VALUES(?,?,?,?)");
        if ($sql->execute(array($mj,$id_tr,$hour,$name))) {
            # code...
        }
        else
            echo "string";
    }

    //get subject in the majer selected 
    public function getSubject($id){
        $sql=$this->pdo->prepare("SELECT * FROM subject LEFT JOIN term ON subject.id_trm=term.id_trm WHERE subject.id_maj=?");
        $sql->execute(array($id));
        return $sql;
    }

    //getAllColloege
     public function getallscollege(){
        $sql=$this->pdo->prepare("SELECT * FROM college ");
        $sql->execute();
        return $sql;
    }

    //get count majer
    public function getcountMajer($id){
        $sql=$this->pdo->prepare("SELECT * FROM majer where id_col=? ");
        $sql->execute(array($id));
        return $sql->rowCount();
    }

    //get count student in majer 
    public function getcountstudent($id){
        $sql=$this->pdo->prepare("SELECT * FROM student where id_maj=? ");
        $sql->execute(array($id));
        return $sql->rowCount();
    }

    //get all student in the majer 
    public function getallstudentMajer($id){
        $sql=$this->pdo->prepare("SELECT * FROM student WHERE id_maj=?");
        $sql->execute(array($id));
        return $sql;
    }

    //get subject in majer
    public function getSubjectm($id_mj,$trm){
        $sql=$this->pdo->prepare("SELECT * FROM subject LEFT JOIN term ON subject.id_trm=term.id_trm WHERE subject.id_maj=? AND term.id_trm=?");
        $sql->execute(array($id_mj,$trm));
        return $sql;
    }

// add term 
    public function addnewStudentTerm($id_tr,$id_stu,$date,$email){
        $sqlcount=$this->pdo->prepare("SELECT * FROM  date_term");
        $sqlcount->execute();
        $countTerm=0;
        $sql=$this->pdo->prepare("INSERT INTO date_term(id_stu,id_ter,datesum,email_emp)VALUES(?,?,?,?)");
        if ($sql->execute(array($id_stu,$id_tr,$date,$email))) {
             $countTerm=$this->pdo->lastInsertId();
        }
        else
            echo "string";

        return $countTerm;
    }

    // add markes 
    public function addMarkes($id_da,$id_gov,$id_sub,$mak){
        $sql=$this->pdo->prepare("INSERT INTO mark(id_da,id_gov,id_sub,mak)VALUES(?,?,?,?)");
        if ($sql->execute(array($id_da,$id_gov,$id_sub,$mak))) {
            # code...
        }
    }

    //getdata transcript 
    public function getTranscript($id_gov,$id_trm){
        $sql=$this->pdo->prepare("SELECT * FROM student JOIN mark ON student.id_gov=mark.id_gov
                JOIN college ON student.id_col=college.id_col
                JOIN majer ON college.id_col=majer.id_col
                 JOIN subject ON mark.id_sub=subject.id_sub
                 JOIN date_term ON mark.id_da =date_term.id_det 
                 JOIN term ON date_term.id_ter=term.id_trm
                 WHERE student.id_gov=? AND majer.id_m=student.id_maj AND subject.id_trm=?;
            ");
        $sql->execute(array($id_gov,$id_trm));
        return $sql;
    }

    //getdata inforamation  
    public function getInfo($id_gov){
        $sql=$this->pdo->prepare("SELECT * FROM student 
                JOIN college ON student.id_col=college.id_col
                JOIN majer ON college.id_col=majer.id_col
                 WHERE student.id_gov=? AND majer.id_m=student.id_maj
            ");
        $sql->execute(array($id_gov));
        return $sql;
    }
    //check forstatus trans 
    public function statusTrans($id_gov){
        $sql=$this->pdo->prepare("SELECT * FROM date_term WHERE id_stu=?");
        $sql->execute(array($id_gov));
        if ($sql->rowCount()==8) {
            return true;

        }
        else{
            return false ; 
        }
    }

    //check the student save 
    public function checkSaveterm($id_stu,$id_trm){
        $sql=$this->pdo->prepare("SELECT * FROM date_term WHERE id_stu=? AND id_ter=?");
        $sql->execute(array($id_stu,$id_trm));
        if ($sql->rowCount()==1) {
            return true;

        }
        else if ($sql->rowCount()>1){
            return false ; 
        }
        else{
            return false;
        }

    }

    //getSubject mark 
    public function getMark ($id_m,$id_stu){
        $sql=$this->pdo->prepare("SELECT * FROM mark WHERE id_sub=? AND id_gov=?");
        $sql->execute(array($id_m,$id_stu));
       foreach ($sql as $ke) {
           return $ke['mak'];
       }
    }

    //get date term 
    public function getDateTerm($id_stu,$id_tr){
         $sql=$this->pdo->prepare("SELECT * FROM date_term WHERE id_stu=? AND id_ter=?");
        $sql->execute(array($id_stu,$id_tr));
        foreach ($sql as $ke) {
           return $ke['datesum'];
       }


    }

    //add college
    public function addCollege($name){
        $sql=$this->pdo->prepare("INSERT INTO college (name_col) VALUES(?)");
        if ($sql->execute(array($name))) {
            
        }
    }

    //get college
     public function getColloges(){
        $sql=$this->pdo->prepare("SELECT * FROM college ");
        $sql->execute();
        return $sql;
    }

    //add new user 
    public function addUser($name,$email,$pass,$role,$id_col){
        $sql=$this->pdo->prepare("INSERT INTO user(email,password,role) VALUES(?,?,?)");
        if ($sql->execute(array($email,$pass,$role))) {
            $sql2=$this->pdo->prepare("INSERT INTO info (email,name,id_col) VALUES(?,?,?)");
            if ($sql2->execute(array($email,$name,$id_col))) {
                # code...
            }
        }
    }

    //get user 
    public function getUsers(){
        $sql=$this->pdo->prepare("SELECT * FROM user LEFT JOIN info on user.email=info.email");
        $sql->execute();
        return $sql;
    }

    //search by name 
    public function searchByName($name){
        $sql=$this->pdo->prepare("SELECT * FROM student LEFT JOIN college ON student.id_col=college.id_col 
                                                        LEFT JOIN majer ON student.id_maj=majer.id_m
                                            Where student.name like ?
                                                        ");

        $sql->execute(array("%".$name."%"));
        return $sql;
    }

    //search by ID 
     public function searchByID($id){
        $sql=$this->pdo->prepare("SELECT * FROM student LEFT JOIN college ON student.id_col=college.id_col 
                                                        LEFT JOIN majer ON student.id_maj=majer.id_m
                                            Where student.id_gov = ?
                                                        ");

        $sql->execute(array($id));
        return $sql;
    }


    //get all the collog with majer 
    public function getDataColloge($id){
       $sql=$this->pdo->prepare("SELECT * FROM student JOIN date_term ON student.id_gov=date_term.id_stu
JOIN college ON college.id_col=student.id_col
JOIN majer ON student.id_maj=majer.id_m
JOIN mark ON date_term.id_det=mark.id_da AND mark.id_gov=student.id_gov
JOIN subject ON mark.id_sub=subject.id_sub
JOIN term ON term.id_trm=date_term.id_ter
WHERE college.id_col=?");
        $sql->execute(array($id));
        return $sql;
    }

    //Check the role 
    public function checkRole($email,$pass,$role){
        $sql=$this->pdo->prepare("SELECT * FROM user WHERE email=? AND password=? AND role=?");
        $sql->execute(array($email,$pass,$role));
        $role_db="";
        foreach ($sql as $key) {
            # code...
            $role_db=$key['role'];
        }
        if ($sql->rowCount()==1 AND $role_db==$role) {
            # code...
        }
        else{
            header("location:../../login.php");
        }

    }

    // get hourse for majer 
    public function getHours($id_m){
        $sql=$this->pdo->prepare("SELECT * FROM majer LEFT JOIN subject ON majer.id_m=subject.id_maj WHERE majer.id_m=?");
        $sql->execute(array($id_m));
        $hor=0;
        foreach ($sql as $key) {
            # code...
            $hor+=$key['hours'];

        }
        return $hor;
    }


}