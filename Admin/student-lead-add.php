<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Leads</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
html, body {
    height: 100%;
    background-color: #3e425d;
    overflow: auto;
}

.navbar-brand img {
        height: 80px;
    }

.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}

.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

</style>
<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="/img/KodingNext.png" alt="Bootstrap">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
              
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/admin/dashboard-students.html">Dashboard</a></li>
                    <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </section>
    <section>
        <div class="form-body" style="margin-top: 10px;">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content" style="width: 900px;">
                        <div class="form-items">
                            <h3>Add New Lead</h3>
                            <form class="requires-validation" novalidate>    
                                <div class="col-md-12">
                                    <select class="form-select mt-3" required>
                                          <option selected disabled value="">Day</option>
                                          <option value="">Monday</option>
                                          <option value="">Tuesday</option>
                                          <option value="">Wednesday</option>
                                          <option value="">Thursday</option>
                                          <option value="">Friday</option>
                                          <option value="">Saturday</option>
                                          <option value="">Sunday</option>
                                   </select>
                               </div>

                               <div class="row">
                                   <div class="col-md-6">
                                       <label for="appt-start" class="form-label mt-3" style="color: #fff;">Start</label>
                                       <input type="time" id="appt-start" name="appt-start" class="form-control" required>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="appt-end" class="form-label mt-3" style="color: #fff;">End</label>
                                       <input type="time" id="appt-end" name="appt-end" class="form-control" required>
                                   </div>
                               </div>
    
                                <div class="col-md-12">
                                   <input class="form-control" type="text" name="name" placeholder="Student Name" required>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="tlp" placeholder="Phone Number" required>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="age" placeholder="Student Age" required>
                                </div>
    
                               <div class="col-md-12">
                                    <select class="form-select mt-3" required>
                                          <option selected disabled value="">Age Group</option>
                                          <option value="">LK 4-6</option>
                                          <option value="">LK 6-8</option>
                                          <option value="">JK 6-12</option>
                                          <option value="">JK 12-16</option>
                                   </select>
                               </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">Module</option>
                                      <option value="">Active Coding</option>
                                      <option value="">Coding Stories</option>
                                      <option value="">Games</option>
                                      <option value="">Mobile Apps</option>
                                      <option value="">Python</option>
                                      <option value="">Website</option>
                                      <option value="">Roblox</option>
                                      <option value="">Games (offline)</option>
                                      <option value="">Apps (offline)</option>
                                      <option value="">Python (offline)</option>
                                      <option value="">Website (offline)</option>
                                      <option value="">Roblox (offline)</option>
                                      <option value="">AI Chatbot</option>
                                      <option value="">Coding Stories (Offline)</option>
                                      <option value="">Games and Apps (Online)</option>
                                      <option value="">Games and Apps (Offline)</option>
                                      <option value="">Future Engineers (Offline)</option>
                               </select>
                           </div>

                           <div class="col-md-12">
                            <select class="form-select mt-3" required>
                                  <option selected disabled value="">Teacher</option>
                                  <option value="">Rusma</option>
                                  <option value="">Ara</option>
                                  <option value="">Nurmaya</option>
                                  <option value="">Hani</option>
                                  <option value="">Iil</option>
                                  <option value="">Fina</option>
                                  <option value="">Lutfi</option>
                                  <option value="">Sulis</option>
                                  <option value="">Rahma</option>
                                  <option value="">Nurma</option>
                                  <option value="">Wendi</option>
                                  <option value="">Nurul</option>
                                  <option value="">Friska</option>
                                  <option value="">Yuri</option>
                                  <option value="">Ibrahim</option>
                                  <option value="">Kiky</option>
                                  <option value="">Reza</option>
                                  <option value="">Yuan</option>
                                  <option value="">Rahmi</option>
                                  <option value="">Norma</option>
                                  <option value="">Annisa</option>
                                  <option value="">Steven</option>
                                  <option value="">Nadia</option>
                                  <option value="">Alvin</option>
                                  <option value="">Rani</option>
                                  <option value="">Nensi</option>
                                  <option value="">Rachmawati</option>
                                  <option value="">Yolanda</option>
                                  <option value="">Michael</option>
                                  <option value="">Bagus</option>
                                  <option value="">Abraham</option>
                                  <option value="">Viscal</option>
                                  <option value="">Fika</option>
                                  <option value="">Husna</option>
                                  <option value="">Alvi</option>
                                  <option value="">Risky</option>
                           </select>
                       </div>

                    <div class="col-md-12">
                        <select class="form-select mt-3" required>
                              <option selected disabled value="">Assigned by</option>
                              <option value="">Friska</option>
                              <option value="">Julia</option>
                       </select>
                   </div>
                   
                   <div class="col-md-12">
                    <select class="form-select mt-3" required>
                          <option selected disabled value="">SA</option>
                          <option value="">Syafi'i</option>
                          <option value="">Ergha</option>
                          <option value="">Farhan</option>
                          <option value="">Benny</option>
                          <option value="">Lia</option>
                          <option value="">Deby</option>
                          <option value="">Eva</option>
                   </select>
               </div>

               <div class="col-md-12">
                <select class="form-select mt-3" required>
                      <option selected disabled value="">Branch</option>
                      <option value="">Kemayoran</option>
                      <option value="">Gading Serpong</option>
                      <option value="">Menteng</option>
                      <option value="">PIK</option>
                      <option value="">Bintaro</option>
               </select>
           </div>
               
               <div class="col-md-12">
                <select class="form-select mt-3" required>
                      <option selected disabled value="">Source Lead</option>
                      <option value="">IG msg</option>
                      <option value="">Referral</option>
                      <option value="">Website</option>
                      <option value="">FB msg</option>
                      <option value="">FB trial</option>
                      <option value="">Walk-in</option>
                      <option value="">Call-in</option>
               </select>
           </div>

                   <div class="col-md-12">
                        <input class="form-control" type="text" name="idts" placeholder="Room G-meet/Zoom" required>
                    </div>
                          
                                <div class="form-button mt-3">
                                    <a href="/admin/dashboard-leads.html" class="btn btn-danger">Cancel</a>
                                    <button id="save" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
      <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
