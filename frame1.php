
        <div class="container">

            <div class="row">
            
                <div class="col-lg-12">
                    <div class="intro-message">
            <h1>Notification - Center</h1>
                        <h3>Registration </h3>
                        <hr class="intro-divider">
                        <div class="kri-login">
                        <form role="form" action="mid.php" method="POST">
                        <!-- progress bar
                          <div class="progress progress-striped active"> 
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                           <span class="sr-only">40% Complete</span>
                            </div> 
                            </div>-->
                                            <div class="form-group" >
                                            <input type="text" placeholder="first name" class="form-control" name="fname">
                                             <input type="text" placeholder="last name" class="form-control" name="lname">
                                             <select  class="form-control" id="branch" name="branch"   onchange="populate('branch','branch2')"> 
                                             <option value="no">please select one</option>
                                             <option value="B.Tech">B.Tech</option> 
                                             <option value="BBA">BBA</option>
                                              <option value="PGDM">PGDM</option>
                                              </select>
                                             <select  class="form-control" id="branch2" name="branch2" onchange="placing(this.id)"> 
                                             </select>
                                             <input type="text" placeholder="college roll no." class="form-control" id="roll" disabled name="coroll"> 
                                             <input type="text" placeholder="class roll no." class="form-control" name="clroll">

                                             
                                             <input type="email" placeholder="Email id" class="form-control" name="mail">
                                             <input type="password" placeholder="Password" class="form-control" name="pass">
                                            </div> 
                                             <div class="form-inline  row-fluid">
                                             <input type="submit" class="btn btn-default" value="register me!" name="submit">
                                           </div>
                                           
                                            </form>
                        </div>
                     <!--   <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>

        </div>
       