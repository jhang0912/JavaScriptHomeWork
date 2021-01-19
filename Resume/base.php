<?php
date_default_timezone_set('asia/taipei');
session_start();

$Admin=new DB('Resume_admin');
$About=new DB('Resume_about');
$Job=new DB('Resume_job_requirements');
$Introduction=new DB('Resume_introduction');
$Education=new DB('Resume_education');
$Work_experience=new DB('Resume_work_experience');
$Personal_development=new DB('Resume_personal_development');
$Portfolio=new DB('Resume_portfolio');
$Skills=new DB('Resume_skills');

class DB{

  protected $table;
  protected $dsn="mysql:host=localhost;dbname=s1090408;charset=utf8";

  protected $pdo;

  function __construct($table)
  {
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,'s1090408','s1090408');
  }

  function all(...$arg){
    $sql=" select * from $this->table ";

    if(isset($arg[0])){
      if(is_array($arg[0])){
        foreach($arg[0] as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= $arg[0];
      }
    }

    if(isset($arg[1])){
      $sql .= $arg[1];
    }

    // echo $sql;

    return $this->pdo->query($sql)->fetchAll();
  }



  function count(...$arg){
    $sql=" select count(*) from $this->table ";

    if(isset($arg[0])){
      if(is_array($arg[0])){
        foreach($arg[0] as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= $arg[0];
      }
    }

    if(isset($arg[1])){
      $sql .= $arg[1];
    }

    return $this->pdo->query($sql)->fetchColumn();
  }


  function find($id){
    $sql=" select * from $this->table ";

      if(is_array($id)){
        foreach($id as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= " where `id`='$id'";
      }

    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  }
  

  function del($id){
    $sql=" delete from $this->table ";

      if(is_array($id)){
        foreach($id as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= " where `id`='$id'";
      }

    return $this->pdo->exec($sql);
  }


  function save($arr){
    if(isset($arr['id'])){
      foreach($arr as $key=>$value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql="update $this->table set".implode(",",$tmp)." where `id`='{$arr['id']}'";
    }else{
      $sql="insert into $this->table  (`".implode("`,`",array_keys($arr))."`) values('".implode("','",$arr)."')";
    }
    // echo $sql;
    return $this->pdo->exec($sql);
  }


  function q($sql){
    return $this->pdo->query($sql)->fetchAll();
  }

}


function to($url){
  header("location:".$url);
}

?>
