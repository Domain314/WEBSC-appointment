<?php
class Option {
  private $aid;
  private $oid;
  private $titel;
  private $date;
  private $timeB;
  private $timeE;

  function __construct() {}

  public function newOption($aid, $titel, $date, $timeB, $timeE) {
    $this->aid = $aid;
    $this->titel = $titel;
    $this->date = date('Y-m-d', strtotime($date));
    $this->timeB = $timeB;
    $this->timeE = $timeE;
  }

  public function setOption($aid, $oid, $titel, $date, $timeB, $timeE) {
    $this->aid = $aid;
    $this->oid = $oid;
    $this->titel = $titel;
    $this->date = date('Y-m-d H:i:s', strtotime($date));
    $this->timeB = $timeB;
    $this->timeE = $timeE;
  }

  public function getAid() {
    return $this->aid;
  }

  public function getOid() {
    return $this->oid;
  }

  public function getTitel() {
    return $this->titel;
  }

  public function getDate() {
    return $this->date;
  }

  public function getTimeB() {
    return $this->timeB;
  }

  public function getTimeE() {
    return $this->timeE;
  }

}

 ?>
