<?php
interface Product{
public function Info();
}
class Video implements Product{
public $video, $price, $rating;
function __construct($video, $price, $rating){
$this->video=$video;
$this->price=$price;
$this->rating=$rating;
}
function Info(){
echo "Видео: ".$this->video." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
}
}
class Photo implements Product{
public $photo, $price, $rating;
function __construct($photo, $price, $rating){
$this->photo=$photo;
$this->price=$price;
$this->rating=$rating;
}
function Info(){
echo "Фото: ".$this->photo." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
}
}
class Screenshot implements Product{
public $screen, $price, $rating;
function __construct($screen, $price, $rating){
$this->screen=$screen;
$this->price=$price;
$this->rating=$rating;
}
function Info(){
echo "Скрин: ".$this->screen." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
}
}
interface User{
public function userInfo();
}
class Us1 implements User{
public $name, $login, $password;
function __construct($name, $login, $password){
$this->name=$name;
$this->login=$login;
$this->password=$password;
}
function userInfo(){
echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
}
}
class Us2 implements User{
public $name, $login, $password;
function __construct($name, $login, $password){
$this->name=$name;
$this->login=$login;
$this->password=$password;
}
function userInfo(){
echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
}
}
class Us3 implements User{
public $name, $login, $password;
function __construct($name, $login, $password){
$this->name=$name;
$this->login=$login;
$this->password=$password;
}
function userInfo(){
echo "Пользователь: ".$this->name." Логин: ".$this->login." Пароль: ".$this->password."<br>";
}
}
class Result implements Product, User{
public $name, $video, $photo, $screen;
function __construct($name, $video, $photo, $screen){
$this->name=$name;
$this->video=$video;
$this->photo=$photo;
$this->screen=$screen;
}
function Info(){
echo  "Пользователь: ".$this->name." купил: ".$this->video."<br>"; 
}
function userInfo(){
echo "da";
}
}
$result2 = new Video("Cat", "230", "1.8");
$result2->Info();
$result3 = new Photo("Man","300","3");
$result3->Info();
$result4 = new Screenshot("Screen_1", "400", "6");
$result4->Info();

$res1 = new User1("Tom", "Thomas", "BooksAmongUs");
$res1->userInfo();
$res2 = new User2("Bob","Robert","RacerBob");
$res2->userInfo();
$res3 = new User3("Joe","Joseph","CookBook");
$res3->userInfo();

$resInfo = new Result("Joe", "Man", "","");
$resInfo->Info();
?>