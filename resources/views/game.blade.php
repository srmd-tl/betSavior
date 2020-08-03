

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('betSavior/css/bootstrap.min.css')}}" >
      <link rel="stylesheet" href="{{asset('betSavior/css/animate.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/aos.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/all.min.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/fontawesome.min.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/flaticon.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/icomoon.cs')}}s">
      <link rel="stylesheet" href="{{asset('betSavior/css/styles.css')}}" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{asset('betSavior/js/javascript.js')}}" ></script>
      <title>Bet Savior | Game Detail</title>
   </head>
   <body>
      <div >
      <!-- Topbar -->
      <div class="top">
         <div class="container">
            <div class="row">
               <button type="button" class="btn btn-white" >Games</button>
               <button type="button" class="btn btn-white">Futures</button>
               <button type="button" class="btn btn-white" >Leaders</button>
               <button type="button" class="btn btn-void" >NBA View All</button>
               <!-- scrolling content topbar -->
               <div class="marquee-div-head"  align="right" style="">
                  <marquee  direction="left" >
                     <table>
                        <tr>
                           <td><img src="img/team1.png"></td>
                           <td><strong>CLE &nbsp;</strong></td>
                           <td>19-46</td>
                           <td>&nbsp;&nbsp;&nbsp;<img src="img/team2.png"></td>
                           <td><strong>ATL &nbsp;</strong></td>
                           <td>20-47</td>
                           <td>&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">Thurs, 4:30am PT   FS-SE</span></td>
                           <td>&nbsp;<button type="button" class="btn btn-void">Go to Game >></button></td>
                           <td><img src="img/team1.png"></td>
                           <td><strong>CLE &nbsp;</strong></td>
                           <td>19-46</td>
                           <td>&nbsp;&nbsp;&nbsp;<img src="img/team2.png"></td>
                           <td><strong>ATL &nbsp;</strong></td>
                           <td>20-47</td>
                           <td>&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">Thurs, 4:30am PT   FS-SE</span></td>
                           <td>&nbsp;<button type="button" class="btn btn-void">Go to Game >></button></td>
                        </tr>
                     </table>
                  </marquee>
               </div>
               <div style="padding-top:5px;">
                  <form class="form-inline my-2 my-lg-0">
                     <input class="form-control input-sm mr-sm-1" type="search" placeholder="Search" aria-label="Search" style="font-size: 0.8rem;">
                     <button class="btn btn-sm btn-outline-primary my-2 my-sm-0 mr-sm-3" type="submit">Search</button>
                     <button type="button" class="btn btn-primary">Join Bet Savior!</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Navigation -->
      <div>
         <div class="header" id="myHeader">
            <div class="container py-0">
               <div class="row no-gutters d-flex align-items-center align-items-stretch">
                  <div class="col-md-3 d-flex align-items-center">
                     <a href="index.html" class="logo"><img src="img/logo.png"></a>
                     <select class="form-control sports" id="exampleFormControlSelect1" style="font-size: 0.7rem;width: 40%;">
                        <option>All Sports</option>
                        @forelse($sports as $sport)
                        <option value="{{ $sport->sport_key}}" >{{ $sport->sport_nice}}</option>
                        @empty
                        @endforelse
                     </select>
                  </div>
                  <div class="col-lg-9 d-block">
                     <div class="row d-flex">
                        <!-- games -->
                        <div class="MultiCarousel" data-items="1,4,5,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                           <div class="MultiCarousel-inner">
                              @forelse($matches as $key=> $match)
                              <div class="item" style="width:170px !important;">
                                 <div class="pad15">
                                    <table>
                                       <tr>
                                          <td><img src="{{$teamApi->team($match['teams'][0])['teams'][0]['strTeamLogo']}}" align="left" style="width:30px;"></td>
                                          <td style="font-size:11px;"><strong>{{$match["teams"][0]}} &nbsp;</strong></td>
                                          <td style="font-size:11px;">19-46</td>
                                       </tr>
                                       <tr>
                                          <td>&nbsp;&nbsp;&nbsp; <img src="{{$teamApi->team($match['teams'][1])['teams'][0]['strTeamLogo']}}" align="left" style="width:30px;"></td>
                                          <td style="font-size:11px;"><strong>{{$match["teams"][1]}}  &nbsp;</strong></td>
                                          <td style="font-size:11px;">20-47</td>
                                       </tr>
                                       <tr>
                                          <td colspan="3">&nbsp;&nbsp;&nbsp;<span style="font-size:10px;">{{
                                             \Carbon\Carbon::parse(\Carbon\Carbon::createFromTimestamp($match["commence_time"])->toDateTimeString(), 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ss a')
                                             }}</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td colspan="3">&nbsp;<a href="{{route('game.show',[$key,'sport'=>$match['sport_key'] ])}}" class="btn btn-void" style="color:#004bd1;font-size:11px;">Go to Game >></a></td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                              @empty
                              @endforelse
                           </div>
                           <button class="btn btn-primary leftLst"><</button>
                           <button class="btn btn-primary rightLst">></button>
                        </div>
                        <!-- end games -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-dark  nav-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu </button>
               <div class="collapse navbar-collapse" id="ftco-nav">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item "><a href="index.html" class="nav-link">Home</a></li>
                     <li class="nav-item active"><a href="#" class="nav-link">NFL</a></li>
                     <li class="nav-item"><a href="#" class="nav-link">NBA</a></li>
                     <li class="nav-item"><a href="#" class="nav-link">MLB</a></li>
                     <li class="nav-item"><a href="services.html" class="nav-link">NHL</a></li>
                     <li class="nav-item"><a href="more.html" class="nav-link">MORE</a></li>
                     <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">Current Performance &#9662;</a>
                        <ul class="dropdown">
                           <li><a href="#">Grafenwoehr</a></li>
                           <li><a href="#">Hohenfels</a></li>
                           <li><a href="#">Katterbach</a></li>
                           <li><a href="#">Stuttgart</a></li>
                           <li><a href="#">Vilseck</a></li>
                        </ul>
                     </li>
                     <li class="nav-item" style="color:#f8f8f8;padding-top:15px;font-weight:200;padding-left:20px;padding-right:20px;">|</li>
                     <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
         <!-- End Navigation -->	 	 
      </div>
      <section class="score-sec">
         <div class="container" >
            <div class="main-score">
               <div class="score-heading">
                  <p class="text-center"> 2019-20 Italian Series A</p>
               </div>
               <div class="score-board">
                  <div class="row">
                     <div class="col-md-2 team-A p-0">
                        <img src="img/team_1.png" class="img-responsive"  alt="ac-milan" >
                     </div>
                     <div class="col-md-8 p-0">
                        <div class="score-list">
                           <ul>
                              <li class="active">
                                 <span>AC Milan</span>
                                 <img src="img/team_1.png" class="img-responsive"  alt="ac-milan" >
                                 <span class="score"> 4 <i class="fa fa-caret-left" aria-hidden="true"></i></span>
                              </li>
                              <li class="ft"> FT</li>
                              <li>
                                 <span class="score"><i class="fa fa-caret-right" aria-hidden="true"></i> 2</span>
                                 <img src="img/team_2.png" class="img-responsive" alt="juventus-logo" >
                                 <span>Juventus</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 team-B p-0 ">
                        <img src="img/team_2.png" class="img-responsive float-right" alt="juventus-logo" >
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="compare-table">
         <div class="container">
         <div class="comare-main">
            <ul class="nav nav-tabs">
               <li class="active"><a data-toggle="tab" href="#money">Moneyline</a></li>
               <li><a data-toggle="tab" href="#Spread">Spread</a></li>
               <li><a data-toggle="tab" href="#Over">Over/Under</a></li>
               <li><a data-toggle="tab" href="#Props">Player Props</a></li>
            </ul>
            <div class="tab-content">
               <div id="money" class="tab-pane fade in active">
                  <div class="row filter-rw">
                     <div class="col-md-3" >
                        <p>	&lt; LALIGA</p>
                     </div>
                     <div class="col-md-9" >
                        <select class="form-control" id="exampleFormControlSelect1" style="font-size: 0.7rem;width: 40%;float:left;">
                           <option>Choose a different game</option>
                           <option>NFL</option>
                           <option>NBA</option>
                           <option>MLB</option>
                           <option>NHL</option>
                        </select>
                        <button type="button" class="btn btn-primary" style="float:right;">FILTER BY: ALL STATES <i class="fas fa-angle-double-right"></i></button>
                     </div>
                  </div>
                  <div class="row">
                     <ul class="compare-ods">
                        <li>
                           Compare odds
                           <div class="checkbox">
                              <label>
                              <input type="checkbox"  value="">&nbsp; Best Odds</label>
                           </div>
                        </li>
                        @forelse($match["sites"] as $league)
                        @if($loop->iteration<=8)
                        <li><img src="{{$casinos[$league['site_nice']]??null}}" alt="{{$league['site_nice']}}" ></li>
                        @endif
                        	@empty
						@endforelse
         
                     </ul>
                     <div class="clearfix"></div>
                     <br>
                     <ul class="compare-head">
                        <li>Winner</li>
                        <li>Open Line</li>
                     </ul>
                     <ul class="compare-value">
                        <li> <span class="win-hd">{{$match["teams"][0]}}</span>	<a>-334</a>
                           <span class="trand-img">
                           <img src="{{asset('betSavior/img/trading.png')}}" alt="trading"></span> 
                        </li>

                        	@forelse($match["sites"] as $league)
							@php
								$teamAOdd=0;
								$oldValue=0;

								$teamBOdd=0;
								if($league["odds"]["h2h"][0]>$league["odds"]["h2h"][1])
								{
									$teamAOdd=($league["odds"]["h2h"][0]-1)*100;

									
										$teamBOdd=100/(1-$league["odds"]["h2h"][1]);

									
								}	
								else
								{
									$teamBOdd=($league["odds"]["h2h"][1]-1)*100;
									
										$teamAOdd=100/(1-$league["odds"]["h2h"][0]);

									
								}
								
									$teamAOdd= round($teamAOdd);
									$teamBOdd= round($teamBOdd);
								

							@endphp
					 	@if($loop->iteration<=8)
                        <li> <a href="#"><span class="com-img"><img src="img/betmgm.png" alt="betmgm"></span>{{$teamAOdd>0?"+".$teamAOdd:$teamAOdd}}</a></li>
                 		@endif
                        @empty
                        @endforelse
                     </ul>
                     <ul class="compare-value">
                        <li> <span class="win-hd">{{$match["teams"][1]}}	</span>	<a>+474</a>
                           <span class="trand-img">
                           <img src="{{asset('betSavior/img/trading.png')}}" alt="trading"></span> 
                        </li>
                        	@forelse($match["sites"] as $league)
							@php
								$teamAOdd=0;
								$oldValue=0;

								$teamBOdd=0;
								if($league["odds"]["h2h"][0]>$league["odds"]["h2h"][1])
								{
									$teamAOdd=($league["odds"]["h2h"][0]-1)*100;

									
										$teamBOdd=100/(1-$league["odds"]["h2h"][1]);

									
								}	
								else
								{
									$teamBOdd=($league["odds"]["h2h"][1]-1)*100;
									
										$teamAOdd=100/(1-$league["odds"]["h2h"][0]);

									
								}
								
									$teamAOdd= round($teamAOdd);
									$teamBOdd= round($teamBOdd);
								

							@endphp
						@if($loop->iteration<=8)
                        <li> <a href="#"><span class="com-img"><img src="img/betmgm.png" alt="betmgm"></span>{{$teamBOdd>0?"+".$teamBOdd:$teamBOdd}}</a></li>
                 	   	@endif
                 	   	@empty
                        @endforelse
                     </ul>
                   
                  </div>
               </div>
               <div id="Spread" class="tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Some content in menu 1.</p>
               </div>
               <div id="Over" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Some content in menu 2.</p>
               </div>
               <div id="Props" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Some content in menu3</p>
               </div>
            </div>
         </div>
      </section>
      <section class="logo-marquee">
         <div class="container-fluid">
            <marquee  direction="left">
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$25</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/pointsbet.png" alt="pointsbet">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$25</h3>
                     <img src="img/green-tick.png">
                  </div>
                  <div class="box-right">
                     <img src="img/888sport-logo.png" alt="880">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$63</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/draftkings.png" alt="draftkings">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$89</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/betmgm.png" alt="betmgm">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$250</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/caesars.png" alt="caesars">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$89</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/draftkings.png" alt="draftkings">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$89</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/draftkings.png" alt="draftkings">
                  </div>
               </div>
               <div class="marquee-bx">
                  <div class="box-left">
                     <h3>$250</h3>
                     <img src="img/green-tick.png" alt="greent">
                  </div>
                  <div class="box-right">
                     <img src="img/caesars.png" alt="caesars">
                  </div>
               </div>
            </marquee>
         </div>
      </section>
      <section class="join-us">
         <div class="container">
            <div class="sports-betting">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="join-text">
                        <h2>Join With Us<br>
                           Lorem ipsum dolor sit amet
                           consecteur adipisicing elit
                        </h2>
                        <h3>Trusted by everyone, big and small</h3>
                        <p>we’re trusted by the biggest naments in the sports world and by over
                           800,000 registered users around the world,
                        </p>
                        <a href="#"> Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="clearfix"></div>
      <!-- footer -->
      <a href="index.html" style="margin-top:50px; display:block;"><img src="img/logo.png" style="margin-left:auto;margin-right:auto;display:block;"></a>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background:#9c9c9c !important;">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#">About</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Advertise With Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Terms of Service</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            <div class="col-md-6" >
               <span style="font-size:12px;">© 2009-2020 Bet Savior | All rights reserved.</span>
            </div>
            <div class="col-md-6">
               <div class="social-part">
                  <span style="font-size:14px; float:right;">Follow Us: 
                  <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                  </span>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <script>
         // When the user scrolls the page, execute myFunction
         window.onscroll = function() {myFunction()};
         
         // Get the header
         var header = document.getElementById("myHeader");
         
         // Get the offset position of the navbar
         var sticky = header.offsetTop;
         
         // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
         function myFunction() {
         if (window.pageYOffset > sticky) {
           header.classList.add("sticky");
         
         } else {
           header.classList.remove("sticky");
         }
         }
      </script>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>
</body>
</html>

