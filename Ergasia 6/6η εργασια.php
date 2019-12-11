<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>6H ERGASIA</title>
</head>
<body>
<form method="post" action="New Text Document.php" onsubmit="return valcity()"><table name="ta">
<tr><td><strong>ONOMA</strong></td><td><strong>EΠΩΝΥΜΟ</strong></td></tr>
<tr><td><input type="text" id="name" name="nam" required><input type="hidden" id="us2" value="0"></td><td><input type="text"id="last" name="last"required ></td></tr>
<tr><td>USERNAME</td><td>PASSWORD</td></tr>
<tr><td><input type="text" id="us" name="username"required></td><td><input type="password" id="pass" name="password"required></td></tr>
 <tr><td>EMAIL</td></tr></table><table name="ta"> 
<tr><td><input type="email" id="email" placeholder="example@mail.com" name="email"  size="47"required></td></tr>
</table>
<table name="ta"><tr><td>ΗΛΙΚΙΑ</td><td>ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ</td></tr>
<tr><td><select name="se" required><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option></select>
</td><td><input type="date" name="birth" required></td></tr>
<tr><td>ΔΙΕΥΘΥΝΣΗ</td></tr>
<tr><td><input type="text" name="ad" required></td></tr></table><table name="ta">
<tr><td>ΤΡΟΠΟΣ ΠΛΗΡΩΜΗΣ : Αντικαταβολή μετρητών<input type="radio" name="pay" value="Αντικαταβολή μετρητών" >Πιστωτική / Χρεωστική κάρτα<input type="radio" name="pay" value="Πιστωτική / Χρεωστική κάρτα" required>Πληρωμή μέσω του PayPal λογαριασμού σας<input type="radio" name="pay" value="PayPal"></td></tr>
<tr><td>ΣΧΟΛΙΑ: <textarea name="addr2"> </textarea></td></tr> 
</table><input id="submit" type="submit" value="Καταχώρηση κράτησης"style="color:black"><input type="reset" value="Καθαρισμος"></form>
<script type="text/javascript">
function valcity() 
{
var x=document.getElementById("us").value;
var y=document.getElementById("pass").value;
 if (/^[a-zA-Z1-9]*$/.test(x) && /^[a-zA-Z1-9]*$/.test(y)) {
document.getElementById("us2").value="1";
alert("Επιτυχης καταχωρηση!");
return true;
} else {
alert("Μόνο λατινικους χαρακτηρες στα πεδια username και password παρακαλώ!!!");
document.getElementById("us2").value="0";
return false;
}
}
//document.getElementById("submit").onclick= return function () {valcity();}
</script>
<h1>ΑΝΑΖΗΤΗΣΗ ΧΡΗΣΤΩΝ</h1>
<form method="post" action="new 3.php"><table>
<tr><td>Email:</td><td><input type="text" name="em2" id="em2"></td></tr><tr><td>Username:</td><td><input type="text" name="us3" id="us3"></td></tr><tr><td><input type="submit" value="ΑΝΑΖΗΤΗΣΗ"></td></tr></table></form>
</body>
</html>
