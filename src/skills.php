<?php 
require_once("connect.php");
require_once("head.php");?>
<body >
<?php require_once("header.php");?>
<div id="certs">
<h3 class="mt-5 "><img src="icons/website-icon1.png" alt="certificates icon">ICT Certifications</h3>
<?php  
 function getdata(){
  $query="SELECT * FROM certificate";
  $sql=mysqli_query($con,$query);
  if(mysqli_num_rows($sql)){
  return mysqli_fetch_assoc($sql);
  }else{
      echo"No data".mysqli_connect_error();
  }
  }
$query="SELECT * FROM certificate";
$sql=mysqli_query($con,$query);
$result=$sql->getdata();
if(isset($_SESSION['certificate'])){
  $sql=mysqli_query($con,$query);
  while (mysqli_fetch_assoc($result)) {
      print"$result";
  }
}else {
  print'ERROR'.mysqli_connect_error();
}
?>
  <select value="ICT Certifications" class="mb-5 certs btn btn-large">
      <option value="Click-on Kaduna Digital skills Programme"><a class="text-white" href="">Click-on Kaduna Digital skills Program</a></option>
      <option value="IBM design thinking"><a class="text-white" href="">IBM design thinking</a></option>
      <optgroup value="Online Courses" class="text-dark">Online Courses </optgroup>
        <option value="Identify and Investigate"><a class="text-white" href="">Identify and Investigate</a></option>
        <option value="Protect Your Sensitive Data"><a class="text-white" href="">Protect Your Sensitive Data</a></option>
        <option value="API"><a class="text-white" href="https://www.youracclaim.com/earner/earned/badge/12b4e2fb-517f-4639-af8c-fc513bd6ba8d">API</a></option>
        <option value="Web Security"><a class="text-white" href="">Web Security</a></option>
        <option value="Git"><a class="text-white" href="">Git</a></p></option>
        <option value="Web Service"><a class="text-white" href="">Web Service</a></option>
        <option value="HTML and CSS"><a class="text-white" href="">HTML and CSS</a></option>
        <option value="JavaScript"><a class="text-white" href="">JavaScript</a></option>
        <option value="Artificial Intelligence"><a class="text-white" href="">Artificial Intelligence</a></option>
        <option value="Cloud Intro"><a class="text-white" href="">Cloud Intro</a></option>
        <option value="Deploy your first Apps using DevOps"><a class="text-white" href="">Deploy your first Apps using DevOps</a></option>
        <option value="create the frontend of an app"><a class="text-white" href="">Create the frontend of an app</a></option>
        <option value="cybersecurity"><a class="text-white" href="">Cybersecurity Intro</a></option>
        <option value="quantum computing"><a class="text-white" href="">Quantum Computing</a></option>
        <option value="datascience and analytics"><a class="text-white" href="">Datascience & Analytics Intro</a></option>
        <option value="internet of things"><a class="text-white" href="">Internet of things</a></option>
        <option value="coding Intro"><a class="text-white" href="">Coding Intro</a></option>
        <option value="blockchain Intro"><a class="text-white" href="">Blockchain Intro</a></option>
    </select>
  </div>
  <div class="container">
    <h2 class="text-center"><img src="icons/Smoove-Move-Snail-icon.png" alt="skills icon">Tools</h2>
    <div class="row">
    <div class="tool">
      <b>
<h4>Web Development</h4>
      <p>JavaScript <progress value="60" max="100" ></progress>60%</p>
      <p>PHP<progress value="76" max="100" ></progress>76%</p>
      <p>MySQL<progress value="90" max="100" ></progress>90%</p>
      <p>Access Database<progress value="80" max="100" ></progress>80%</p>
      <p>Famous<progress value="90" max="100" ></progress>90%</p>
      <p>CSS 3<progress value="80" max="100" >80%</progress></p>
      <p>HTML 5<progress value="98" max="100" ></progress>98%</p>
      <p>WordPress<progress value="100" max="100" ></progress>100%</p>
      <p>Wix <progress value="95" max="100" ></progress>95%</p>
      <p>Site 123 <progress value="100" max="100" ></progress>100%</p>
      <p>Ionic Framework<progress value="70" max="100" ></progress>70%</p>
      <p>Accelerated Mobile Page<progress value="50%" max="100" ></progress>50%</p>
      <p>Angular Js<progress value="50" max="100" ></progress>50%</p>
    </div>
    <div class="tools">
      <h4>Graphic/Web Design</h4>
      <p>Canva <progress value="98" max="100" ></progress>98%</p>
      <p>Adobe Photoshop<progress value="60" max="100" ></progress>60%</p>
      <p>Draw.io(UML Diagrams)<progress value="70" max="100" ></progress>70%</p>
      <p>Corel Draw<progress value="60" max="100" >60%</progress></p>
      <p>Figma<progress value="80" max="100" ></progress>80%</p>
      <p>Adobe Firework<progress value="50" max="100" >50%</progress></p>
    </b>
    <div class="write">
      <h4><a  href="#">Technical Writing</a></h4>
  </div>
</div>
</div>
</div>
<b>
<div class="container">
  <h2 class="text-center mb-5">Skills</h2>
  <div class="row">
    <div class="skill">
      <p>UML Diagrams<progress value="90" max="100" ></progress>90%</p>
      <p>Static Graphic<progress value="70" max="100" >70%</progress></p>
      <p>UI/UX design<progress value="75" max="100" ></progress>75%</p>
      <p>Presentation<progress value="97" max="100" ></progress>97%</p>
      <p>Style Animation<progress value="80" max="100" ></progress>80%</p>
    </div>
    <div class="skills">
      <p>Database Creation and Management <progress value="85" max="100" ></progress>85%</p>
      <p>CMS website/mobile app design<progress value="100" max="100" ></progress>100%</p>
      <p>Website Development and Maintenance <progress value="95" max="100" ></progress>95%</p>
      <p>PWA<progress value="75" max="100" ></progress>75%</p>
      <p>Web widget <progress value="85" max="100" ></progress>85%</p>
      <p>Game Application<progress value="80" max="100" ></progress>80%</p>
      <p>And lots more</p>
    </div>
  </div>
</div>
</b>
<?php require_once("footer.php");?>