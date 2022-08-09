<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <h1 style="padding-left:10px;font-size:25px;!importance">About Us</h1>
    </div>
    <style>
        .card{
            margin-right:5px;
        }
        img{
            cursor:pointer;
            
        }
        img:hover{
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }
        .extra-details{
            padding-left:20px;
            padding-bottom:50px;
        }
        .extra-details a{
            color:blue;
        }
    </style>
    <div class="company-details" style="padding:5px;margin-bottom:20px;">
      <div class="ourteam">  
      <h2 style="text-align:center;font-weight:bold;font-size:20px;!importance">Our Team</h2>
<div class="row" style="display:flex; justify-content:space-between;">
  <div class="column">
    <div class="card">
      <img src="/img/avatars/person2.jpg" alt="Jane">
      <div class="container">
        <h2 style="font-weight:bold">Lim Hooi Ern</h2>
        <p class="title">Web Developer</p>
        <p>lhe@example.com</p>
        <p><button class="button">Contact Number:+56782534091</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/img/avatars/person1.jpg" alt="Mike">
      <div class="container">
        <h2 style="font-weight:bold">Lai Jin Fatt</h2>
        <p class="title">Web Developer</p>
        <p>ljfe@example.com</p>
        <p><button class="button">Contact Number:+09856891234</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/img/avatars/person4.jpg" alt="John">
      <div class="container">
        <h2 style="font-weight:bold">Lee Jia Xuan</h2>
        <p class="title">Web Developer</p>
        <p>ljx@example.com</p>
        <p><button class="button">Contact Number: +21245678901</button></p>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
<hr>
<div class="extra-details">
    <h2 style="font-weight:bold;padding-top:20px;font-size:20px;!importance">About SUC</h2>
    <p>Get More Details about Southern University College(SUC):</p>
    <a href="https://southern.edu.my/">https://southern.edu.my/</a>
    <p>Southern University Campus Network:</p>
    <a href="https://www.sc.edu.my/sccn_dev/login.php">https://www.sc.edu.my/sccn_dev/login.php</a>
    <p>Southern University College(SUC) E-learning website:</p>
    <a href="https://succms.sc.edu.my/login/index.php">https://succms.sc.edu.my/login/index.php</a>
</div>
<hr>

</x-app-layout>


