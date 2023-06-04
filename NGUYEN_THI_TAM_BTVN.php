
<?php

//1. Viết chương trình kiểm tra xem có phải số chẵn hay không?

function checkEvenNumber($number)
{
    if($number%2==0){
        echo "Đây là số chẵn";
    }
    else echo "Đây không phải số chẵn";
}
// áp dụng hàm:
echo checkEvenNumber(3);
echo "\n";


// 2. Viết chương trình để tính tổng các số từ 1 đến n:

function sumNumber( $number){
    $sum=0;
    for($i=1;$i<=$number;$i++)
    {
       $sum+=$i; 
    }
    echo "Tổng các số hạng từ 1 đến".$number."là:";
    return $sum;
}

// áp dụng hàm:
echo sumNumber(3);
echo "\n";

// 3. Viết các số in ra bảng cửu chương từ 1 đến 10:
function printMuntiplicationTable()
{
    $Product=1;
    for($i=1;$i<=10;$i++){
        echo "bảng".$i. "\n";
        
        for($j=1;$j<=10;$j++){
            echo $i."x".$j. '=' .$i*$j. "\n";
                }
    }
}

// áp dụng hàm:
echo printMuntiplicationTable();
echo "\n";

// 4. Viết chương trình kiểm tra xem 1 chuỗi có chứa một từ cụ thể hay không?
function checkWordInString($str,$word)
{
    $isInString =true;
    $stringLength = strlen($str);
    $wordLength = strlen($word);

    for ($i = 0; $i <= $stringLength - $wordLength; $i++) {
        $j = 0;
        while ($j < $wordLength && $str[$i + $j] === $word[$j]) {
            $j++;
        }
        if ($j === $wordLength) {
            $isInString = true;
        }
        else    $isInString = false;
    }

    if($isInString == true)
    {
        echo"CHuối có chứa từ";
    }
    else echo "Chuỗi không chứa từ";
}
checkWordInString("My name is Tam",'1Tam');
echo "\n ";
// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
Function searchMinMax($array){
    $Min=0;
    $Max=0;
    for($i=1;$i<count($array);$i++)
    {
        if($array[$i]<$Min){
            $Min=$array[$i];
        }
        else if($array[$i]>$Max)
        {
            $Max=$array[$i];
        }

    }
    echo "Giá trị lớn nhất của mảng là:".$Max."\n";
    echo "Giá trị nhỏ nhất của mảng là:" .$Min;

}
$array=[0,3,4,1,5,6,9];
echo searchMinMax($array);
echo "\n";

// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.

function arrayDesc($array){

    for($i=0;$i<count($array)-1;$i++){
        for($j=$i+1;$j<count($array);$j++){
            if($array[$j]<$array[$i])
            {
                $temp = $array[$i];
                $array[$i]=$array[$j];
                $array[$j]=$temp;
            } 
            
        }
    }
    echo "Mảng sao khi sắp xếp là:";
    print_r($array) ;
    
   
}
$array=[1,5,6,2,3,9];

echo arrayDesc($array);
echo "\n";
// 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculatefactor($n){
    $result=1;
    for($i=1;$i<=$n;$i++){
        $result*=$i;
    }
    echo "Giai thừa của số nguyên dương " .$n. " là:".$result;

}
calculatefactor(5); echo "\n";


// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function FindPrime($number1,$number2)
{
    for($i=$number1;$i<=$number2;$i++)
    { $isPrime=true;
        if($number2 <2)
        {
            $isPrime= false;
        }
        else{
        for($j=2;$j<=sqrt($i);$j++)
        {
            if($i%$j==0)
            {
                $isPrime=false;
                break;
            }
        }

        }
    
    if($isPrime){
        echo $i; 
        echo " ";
    }
}
 
    }
echo "Các số nguyên tố trong mảng là:";
echo FindPrime(10,20);

echo "\n";



// 9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumArray($n1,$n2){
    $sum=0;
    for($i=$n1;$i<=$n2;$i++){
        $sum+=$i;
    }
    echo "Tổng giá trị các phần tử trong mảng là:";
    return $sum;
}
echo sumArray(10,20);
echo "\n";

// .10 Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacciNumber($N1,$N2)
{
    $Fibonacci=[];
    $f0=0;
    $f1=1;
    $fn=1;
    
    {
        while($f0<$N2)
        {
            if($f0>=$N1){ $Fibonacci[]=$f0;}
        
        $fn=$f0+$f1;
        $f0=$f1;
         $f1=$fn;
    }
    echo "Dãy số Fibonacci trong khoảng cho trước là:";
    print_r($Fibonacci);
}
}

printFibonacciNumber(0,10);
echo "\n";

// 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkIsArmstrong($number)
{
    $sum = 0;
    $firstNumber = $number;

   
   //Đếm số lượng chữ số của số 
   $numDigits = strlen((string)$number);
    // Tính tổng lũy thừa các chữ số
    while ($number > 0) {

        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    // Kiểm tra nếu tổng lũy thừa các chữ số bằng số ban đầu
    if ($sum === $firstNumber) {
        echo "Đây là số armstrong";
    } else {
        echo "Đây không phải số Armstrong";
    }
}
echo checkIsArmstrong(153);
echo "\n";

// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElementIntoArray($arr, $element, $position)
{
    // Kiểm tra vị trí hợp lệ
    if ($position < 0 || $position> count($arr)) {
        echo "Vị trí chèn không hợp lệ.";
        return $arr;
    }

    // Tạo mảng mới để chứa phần tử chèn
    $arrayAfterInsert[] = array();

    // Chèn các phần tử vào mảng mới
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === $position) {
            $arrayAfterInsert[] = $element;
        }
        $arrayAfterInsert[] = $arr[$i];
    }

    // Nếu vị trí chèn là vị trí cuối cùng, thêm phần tử vào cuối mảng
    if ($position === count($arr)) {
        $arrayAfterInsert[] = $element;
    }
    echo "mảng sau khi chèn là:";
    print_r($arrayAfterInsert) ;
}
echo insertElementIntoArray([1,2,3,4,9], 5, 2);
// echo "\n";


// 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicateElement($arr){
    $uniArr = [];
    foreach ($arr as $element) {
        $isDuplicate = false;
        foreach ($uniArr as $uniEle) {
            if ($element == $uniEle) {
                $isDuplicate = true;
                break;
            }
        }
        if (!$isDuplicate) {
            $uniArr[] = $element;
        }
    }
    echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
    print_r($uniArr) ;
}
$arr = [1, 2, 3, 4, 5, 2, 4, 6, 3];
echo removeDuplicateElement($arr);
// echo "\n";



// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.


function findLocationElement($arr,$element){
    $locationElement=0;
    for($i=0;$i<count($arr);$i++)
    {
        if( $arr[$i] === $element )
        {
            $locationElement=$i+1;
        }
    }
    if($locationElement==0)
    {
        echo "không tìm thấy phần tử trong mảng";
    }
    else 
    echo "Vị trí cần tìm của phần tử là:".$locationElement;
}
echo findLocationElement([1,4,6,8,2],12);
echo "\n";



// 15.Viết chương trình PHP để đảo ngược một chuỗi.
function ReverString($str){
    $newStr='';
    for($i=strlen($str)-1;$i>=0;$i--){
        $newStr .= $str[$i];
    }
    echo "Chuỗi sau khi đảo ngược là:".$newStr;
}

echo ReverString("Nguyen Thi Tam");
echo "\n";

// 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
 function CalculateNumberOfElement($array){
    $count=0;
    foreach($array as $element){
        $count++;
    }
    echo "Số lượng các phần tử trong mảng là:".$count;
 }
echo CalculateNumberOfElement(['nguyen', 'thi','tam']);
echo "\n";


// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function CheckIsPalindrome($str)
{
   $isPalindrome = 2;
    //chuẩn hoá về chữ thường:
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    $length = strlen($str);

    for ($i = 0, $j = $length - 1; $i < $j; $i++, $j--) {
        if ($str[$i] !== $str[$j])
        {
            $isPalindrome =  1;
        }
}
// echo $isPalindrome;
if($isPalindrome == 2){
    echo "đây là chuỗi Palindrome";
}
else  echo "Đây không là chuỗi Palindrome";
}
echo CheckIsPalindrome('radar');
echo "\n";


// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
Function countOccurElement($arr,$element)
{
    $count=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]===$element)
        {
            $count++;
        }
    }
    echo "Số lần xuất hiện của phần tử ".$element. " trong mảng là:".$count;
}

echo countOccurElement([1,2,4,4,4,6,7,2],4);
echo "\n";

// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.

function sortArrayAsc($arr){
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1; $j<count($arr);$j++)
        {
            if($arr[$i]>$arr[$j]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$temp;
            }
        }
    }
    echo "Mảng sau khi sắp xếp là:";
    print_r($arr);

}
echo sortArrayAsc([1,2,4,5,7,2,0]);
echo "\n";

// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementIntoArray($arr,$element)
{
    
    echo "thêm phần tử vào đầu mảng:";
    for($i=count($arr);$i>0;$i--)
    {
        $arr[$i]=$arr[$i-1];
        }
    
    $arr[0]=$element;
    print_r($arr);

    echo "\n";
    echo "thêm phần tử vào cuối mảng:";
    
        $arr[count($arr)]=$element;
    
    print_r($arr);
}

echo addElementIntoArray([0,1,2,3,4],7);
echo "\n";

// 21. Tìm số lớn thứ 2 trong mảng:
function findSecondLargest($arr)
{
    $max=$arr[0];
    $secondlargest = $arr[0];
    for($i=1;$i< count($arr);$i++)
    {
        if($arr[$i]>$max){
            $secondlargest=$max;
            $max=$arr[$i];
        }
    }
    echo "số lớn thứ 2 trong mảng là :";
    echo $secondlargest;
}

$arr=[0,1,2,3,4,5,8];
 echo findSecondLargest($arr);
echo "\n";

// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
Function UCBC($n1,$n2){
   $tich=$n1*$n2;
    $bcln=0;
        if ($n2 == 0) {
            echo "UCLN là:".$n1;
            echo "Không có BCLN";}
        else {
            while ($n2 != 0) {
                $temp = $n2;
                $n2 = $n1 % $n2;
                $n1 = $temp;
            }
            echo "UCLN là:".$n1;   
            echo "\n";
            echo "BCLN là:" .$bcln= $tich/$n1;

        }
}
echo UCBC(4,6);
echo "\n";
// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function CheckPerfecyNumber($n){

            $sum = 0;
        
            for ($i = 1; $i <= $n / 2; $i++) {
        
                if ($n % $i == 0) {
        
                    $sum += $i;
                }
            }
        
            if ($sum == $n) {
        
                echo "Đây là số hoàn hảo";
            } else {
        
                echo "Đây không phải số hoàn hảo";
            }
        }

    echo    CheckPerfecyNumber(10);
    echo "\n";
    
// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($arr)
{
    $largestOdd=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]%2!=0 && $largestOdd<=$arr[$i])
        {
            $largestOdd=$arr[$i];
        }
    }

    echo "số lẻ lớn nhất trong mảng là:".$largestOdd;
}
echo  findLargestOdd([0,1,2,4,5,6,8,9]);
echo "\n";

//  25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
 function checkIsPrime($number){
   $isPrime=true;
     if($number<=1)
    {
        echo "đây không phải số nguyên tố";
    }
    else {

        for($i=2;$i<=sqrt($number);$i++){

            if($number%$i==0)
            {$isPrime=false;}
        }
        if($isPrime==true){
            echo "Đây là số nguyên tố";
        }
        else{
            echo "Đây không phải số nguyên tố";
        }
    }
 }

 echo checkIsPrime(10);
echo "\n";


// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.

function FindLargestPositiveNumber($arr)
{
    $largestNumber=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]>=$largestNumber){
            $largestNumber=$arr[$i];
        }
    }
    echo "Số dương lớn nhất trong mảng là:".$largestNumber;
}
FindLargestPositiveNumber([1,2,5,-3,6,9,10]);
echo "\n";
// 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($arr)
{
    $LargestNumber1=null;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]<0 && $arr[$i]>$LargestNumber1 ){
            $LargestNumber1=$arr[$i];
        }
    }
    echo "Số âm lớn nhất trong mảng là:".$LargestNumber1;
}
echo FindLargestNegativeNumber([1,-2,5,-3,-6,-9,10]); 
echo "\n";

// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function SumOldNumber($n){
    $sum=0;
    for($i=1;$i<=$n;$i++){
        if($i%2!=0){
            $sum+=$i;
        }
    }
    echo "Tổng của các số lẻ từ 1 đến ".$n. " là: ".$sum;
}
echo SumOldNumber(5);
echo "\n";

//  29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
 function FindPerfectSquares($n1,$n2){
    echo "Các số chính phương trong khoảng cho trước là:";
   
    function isPerfectSquare($number)
    {
        $sqrt=1;
        while ($sqrt * $sqrt <= $number) {
            if ($sqrt * $sqrt == $number) {
                return true;
            }
            $sqrt++;
        }
        return false;
    }
    for($i=$n1;$i<=$n2;$i++){
        if(isPerfectSquare($i)){
            echo $i." ";
        }
    }
}
echo FindPerfectSquares(10,200);
echo "\n";


// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function CheckSubstring($str1,$str2){
    $isSubString =true;
    $str1Length= strlen($str1);
    $str2Length =strlen($str2);
    if($str2Length>$str1Length){
        $isSubString=false;
    }
   
    for($i=0;$i<=$str1Length-$str2Length;$i++){
        $j=0;
        while($j<$str2Length && $str1[$i+$j]==$str2[$j]){
            $j++;
        }
        if($j==$str2Length){
            $isSubString=true;
        }
        else $isSubString=false;
    }
    if($isSubString==true)
    {
        echo " Chuỗi 2  nằm trong chuỗi 1";
    }
    else{
        echo " Chuỗi 2 k nằm trong chuỗi 1";
    }
}

 echo checkSubstring("this is a lamp","lamp");


 ?>



