<?php
    class Sinhvien {
        private $ho_ten;
        private $gioi_tinh;
        private $ngay_sinh;
        private $que_quan;
        function setName($name) {
            $this->ho_ten = $name;
        }
        function getName() {
            return $this->ho_ten;
        }
        function setSex($sex) {
            $this->gioi_tinh = $sex;
        }
        function getSex() {
            return $this->gioi_tinh;
        }
        function setBirthday($Birthday) {
            $this->ngay_sinh = $Birthday;
        }
        function getBirthday() {
            return $this->ngay_sinh;
        }
        function setVillage($Village) {
            $this->que_quan = $Village;
        }
        function getVillage() {
            return $this->que_quan;
        }
    }
    $test = new Sinhvien();
     $test->setName('minh');
     $test->setSex('nam');
     $test->setBirthday('20/01/2002');
     $test->setVillage('Hà Nam');
     echo $test->getName()."<br/>";
     echo $test->getSex()."<br/>";
     echo $test->getBirthday()."<br/>";
     echo $test->getVillage()."<br/>";
?>