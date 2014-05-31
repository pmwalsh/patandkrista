<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--!DOCTYPE html--><html xmlns="http://www.w3.org/1999/xhtml"    xml:lang="en-gb" lang="en-gb" ><head>  <meta http-equiv="x-ua-compatible" content="IE=8" />	<title>Making this thing official...</title>	<!-- Stylesheets-->  <link type="text/css" rel="stylesheet" media="all" href="css/reset.css" />  <link type="text/css" rel="stylesheet" media="all" href="css/default.css" /></head><body><div id="globa-wrap">  <div id="header">    <div class="wrap">      <div id="rsvp">        <div class="inside">          <h2><img src="img/hdr-rsvp.png" alt="rsvp" /></h2>          <form id="rsvp-form1" action="/php/rsvp-process1.php" method="post">            <div class="another-wrap" id="code_section">              <div class="input-wrap">                Enter Your RSVP Code:                <input type="text" onkeyup="codecheck()" onchange="codecheck()" style="text-transform: uppercase" class="text" name="code" id="code" />              </div>                        <input type="submit" class="submit" name="code_submit" id="code_submit" value="Submit" />                          </div>          </form>          <br/>          <form id="rsvp-form2" action="rsvp-process2.php" method="post">            <div class="another-wrap">                        	<div class="primary">              		<div class="input-wrap" id="guest_name1">                		Name:                		<input type="text" class="text" name="primary_guest" id="primary_guest" />              		</div>                        		<div class="input-wrap" id="attending1">                		Attending Wedding?:<br/>                		<input type="radio" name="primary_attending" id="primary_attending" value="Yes"/>Yes                		<input type="radio" name="primary_attending" id="primary_attending" value="No"/>No              		</div>                            		<div class="input-wrap" id="rehearsal1">                		Attending Friday Welcome Reception?:<br/>                		<input type="radio" name="primary_rehearsal" id="primary_rehearsal" value="Yes"/>Yes                		<input type="radio" name="primary_rehearsal" id="primary_rehearsal" value="No"/>No              		</div>                        		<div class="input-wrap" id="entree1">                		Preferred Entree:<br/>                		<input type="radio" name="primary_entree" id="primary_entree" value="Shrimp"/>Shrimp                		<input type="radio" name="primary_entree" id="primary_entree" value="Short Ribs"/>Short Ribs              		</div>              		              		<div class="input-wrap" id="lodging">                		Where are you staying:<br/>                		<input type="radio" name="housing" id="housing" value="Oasis Suites"/>Oasis Suites<br/>                		<input type="radio" name="housing" id="housing" value="First Colony Inn"/>First Colony Inn<br/>                		<input type="radio" name="housing" id="housing" value="Holiday Inn Express"/>Holiday Inn Express<br/>                		<input type="radio" name="housing" id="housing" value="Hilton Garden Inn"/>Hilton Garden Inn<br/>                		<input type="radio" name="housing" id="housing" value="Private Home/Other"/>Private Home / Other              		</div>                            </div>              <div class="secondary">                            		<div class="input-wrap" id="guest_name2">                		+1 Name:                		<input type="text" class="text" name="secondary_guest" id="secondary_guest" />              		</div>                        		<div class="input-wrap" id="attending2">                		Attending Wedding?:<br/>                		<input type="radio" name="secondary_attending" id="secondary_attending" value="Yes"/>Yes                		<input type="radio" name="secondary_attending" id="secondary_attending" value="No"/>No              		</div>                            		<div class="input-wrap" id="rehearsal2">                		Attending Friday Welcome Reception?:<br/>                		<input type="radio" name="secondary_rehearsal" id="secondary_rehearsal" value="Yes"/>Yes                		<input type="radio" name="secondary_rehearsal" id="secondary_rehearsal" value="No"/>No              		</div>                        		<div class="input-wrap" id="entree2">                		Preferred Entree:<br/>                		<input type="radio" name="secondary_entree" id="secondary_entree" value="Shrimp"/>Shrimp                		<input type="radio" name="secondary_entree" id="secondary_entree" value="Short ribs"/>Short Ribs              		</div>              		              	</div>                            <input type="submit" class="submit" name="guest_submit" id="guest_submit" value="Submit" />            </div>            <p><span style="color:#000000;">For any questions please Email: </span> <a href="mailto:admin@patandkrista.com">admin@patandkrista.com</a>          </form>          <a href="#rsvp" class="rsvp-link">Close</a>        </div>      </div><!--END OF id="rsvp"-->      <div id="menu">        <ul class="nav">          <li id="nav-logo" class="first"><a href="#section-1"><h3>Logo</h3></a></li>          <li id="nav-our-story"><a href="#section-2">Our Story</a></li>          <li id="nav-photos"><a href="#section-3">Photos</a></li>          <li id="nav-info"><a href="#section-4">When/Where/How</a></li>          <li id="nav-whyOBX"><a href="#section-5">Why Here</a></li>          <li id="nav-gifts"><a href="#section-6">Gifts</a></li>          <li id="nav-rsvp" class="last"><a href="#rsvp">RSVP</a></li>        </ul>      </div>    </div>  </div><!--END OF id="header"-->  <div id="section-1" class="section">    <div class="wrap"><a href="#rsvp" class="rsvp-link">RSVP</a></div>  </div>    <div id="section-2" class="section">    <div class="wrap2">    	<div id="img1"><img src="img/section-2blank.png" alt="section 2" height="1368" width="955" style="border:solid #000000 2px;" /></div>    	<div id="img2"><img src="img/section-2c-default.png" /></div>    	<div id="button1" onClick="divPic1()"><img src="img/button1.png" alt="button 1" height="32" width="32" /></div>    	<div id="button2" onClick="divPic2()"><img src="img/button2.png" alt="button 2" height="32" width="30" /></div>    	<div id="button3" onClick="divPic3()"><img src="img/button3.png" alt="button 3" height="31" width="31" /></div>    	<div id="button4" onClick="divPic4()"><img src="img/button4.png" alt="button 4" height="32" width="34" /></div>    	<div id="button5" onClick="divPic5()"><img src="img/button5.png" alt="button 5" height="35" width="34" /></div>    	<div id="button6" onClick="divPic6()"><img src="img/button6.png" alt="button 6" height="33" width="33" /></div>    	<div id="button7" onClick="divPic7()"><img src="img/button7.png" alt="button 7" height="34" width="31" /></div>    	<div id="button8" onClick="divPic8()"><img src="img/button8.png" alt="button 8" height="33" width="32" /></div>    </div>  </div>    <!--PHOTOS-->  <div id="section-3" class="section">    <div class="wrap">      <h2><img src="img/hdr-photos.png" alt="Photos" /></h2>      <div class="slideshow">        <ul>          <li><img src="img/slideshow/1.jpg" alt="slideshow 1" /></li>          <li><img src="img/slideshow/2.jpg" alt="slideshow 2" /></li>          <li><img src="img/slideshow/3.jpg" alt="slideshow 3" /></li>          <li><img src="img/slideshow/4.jpg" alt="slideshow 4" /></li>          <li><img src="img/slideshow/5.jpg" alt="slideshow 5" /></li>          <li><img src="img/slideshow/6.jpg" alt="slideshow 6" /></li>          <li><img src="img/slideshow/7.jpg" alt="slideshow 7" /></li>          <li><img src="img/slideshow/8.jpg" alt="slideshow 8" /></li>          <li><img src="img/slideshow/9.jpg" alt="slideshow 9" /></li>          <li><img src="img/slideshow/10.jpg" alt="slideshow 10" /></li>          <li><img src="img/slideshow/11.jpg" alt="slideshow 11" /></li>          <li><img src="img/slideshow/12.jpg" alt="slideshow 12" /></li>          <li><img src="img/slideshow/13.jpg" alt="slideshow 13" /></li>          <li><img src="img/slideshow/14.jpg" alt="slideshow 13" /></li>          <li><img src="img/slideshow/15.jpg" alt="slideshow 13" /></li>          <li><img src="img/slideshow/16.jpg" alt="slideshow 13" /></li>          <li><img src="img/slideshow/17.jpg" alt="slideshow 13" /></li>        </ul>      </div><!--END OF class="slideshow"-->      <ul class="slideshow-control">        <li>1</li>        <li>2</li>        <li>3</li>        <li>4</li>        <li>5</li>        <li>6</li>        <li>7</li>        <li>8</li>        <li>9</li>        <li>10</li>        <li>11</li>        <li>12</li>        <li>13</li>        <li>14</li>        <li>15</li>        <li>16</li>        <li>17</li>      </ul>    </div>    <p align="center" style="font-size:12px"><span style="color:#000000;">Photos were taken by: </span> <a href="http://www.danielpullenphotography.com/" target="_blank">Daniel Pullen Photography</a></p>  </div><!--PHOTOS-->      <!--INFO-->  <div id="section-4" class="section">    <div class="wrap">      <h2><img src="img/hdr-info.png" alt="Info" /></h2>      <div id="when" class="box1-top">        <div class="box1-bottom">          <div class="box1-middle">            <h3>When</h3>            <p><strong>Friday, September 26, 2014</strong><br/>Welcome cocktails at 8:00 PM | Avenue Grille.<br/>Please join us for casual drinks and appetizers.</p>            <p><strong>Saturday, September 27, 2014</strong><br/>Wedding ceremony at 5:00 PM | Jennette's Pier.<br/>Cocktails, dinner, and dancing to follow.</p>          </div>        </div>      </div><!--END OF box-->      <div id="where" class="box1-top">        <div class="box1-bottom">          <div class="box1-middle">            <h3>Where</h3>            <p><strong>Welcome Cocktail Reception - Friday 9/26/14:</strong><br/>If you plan on being in town Friday evening, join us for drinks and light fare at 8 PM at <a href="http://www.avenueeventsobx.com/OBXRestaurantCatering_and_E.html" target="_blank">Avenue Grille</a>. The address is <a href="https://www.google.com/maps/place/207+Queen+Elizabeth+Ave/@35.9119371,-75.6506122,14z/data=!4m2!3m1!1s0x89a4fd29b52886fb:0xe2a91923f1fd0c4" target="_blank">207 Queen Elizabeth Ave | Manteo, NC 27954</a>.</p>            <p><strong>Wedding Ceremony and Reception - Saturday 9/27/14:</strong><br/>Our wedding will take place at <a href="http://www.jennettespier.net/" target="_blank">Jennette's Pier</a> at 5 PM. The address is <a href="https://maps.google.com/maps?q=Jennette's+Pier&hl=en&cid=2268770438527937092&gl=US&t=m&z=16&iwloc=A" target="_blank">7223 So. Virginia Dare Trail | Oceanfront, Milepost 16.5, Beach Road | Nags Head, NC 27959</a>. There is plenty of parking and it is free.</p>            <p>Weather permitting, the ceremony will occur on the beach to the left of the pier, followed by cocktails, dinner, and dancing inside. In the event of inclement weather, the ceremony will be moved indoors.</p>          </div>        </div>      </div><!--END OF box-->      <div id="how" class="box1-top">        <div class="box1-bottom">          <div class="box1-middle">            <h3>How</h3>            <h4>The Closest Airports to the Outer Banks:</h4><br/>            <p><strong>ORF</strong> - Norfolk International Airport<br/>90 miles - estimated 1hr 40min driving</p>            <p><strong>RIC</strong> - Richmond International Airport<br/>170 miles - estimated 3hr driving</p>            <p><strong>RDU</strong> - Raleigh Durham International Airport</br/>190 miles - estimated 3hr 20min driving</p>            <h4>Washington DC Airports:</h4><br/>            <p><strong>IAD</strong> - Washington Dulles<br/><strong>DCA</strong> - Washington Reagan<br/>            275 miles - estimated 4hr 30 min driving<br/>(*DC traffic is some of the worst, especially on Fridays- <br/>Rush hour traffic can begin as early as 2pm)</p>            <br/><h4>Lodging:</h4>            <p>Most establishments list their location on the Outer Banks based on Mile Marker. Jennette's Pier is located at Mile Post 16.5 on the Beach Road in Nags Head. The following is a list of recommended lodging listed in order of closest location to the pier:</p>            <p><strong><a href="http://www.oasissuites.com/index.htm" target="_blank">Oasis Suites</a> - Nags Head, NC</strong>			<br/>1.5 miles from Jennette's Pier on Causeway towards Manteo<br/>Oasis Suites feature full kitchens and accommodations for four to six persons, mention Poppe/Walsh wedding when making reservation for blocked suites</p>			<p><strong><a href="http://www.firstcolonyinn.com/" target="_blank">First Colony Inn</a> - Nags Head, NC</strong>			<br/>MP 15.5 - (1 mile from Jennette's Pier)<br/>Mention Poppe/Walsh wedding to receive 10% discount</p>			<p><strong><a href="http://www.ihg.com/holidayinnexpress/hotels/us/en/kittyhawk/kitnc/hoteldetail" target="_blank">Holiday Inn Express</a> - Kitty Hawk, NC</strong>			<br/>MP 4 (12 miles from Jennette's Pier)<br/>Make reservation by 9/5/2014 and mention group code EG3 - Poppe/Walsh wedding to receive $125.55 rate per night</p>			<p><strong><a href="http://hiltongardeninn3.hilton.com/en/hotels/north-carolina/hilton-garden-innouter-banks-kitty-hawk-ORFKHGI/index.html" target="_blank">Hilton Garden Inn</a> - Kitty Hawk, NC</strong>			</br>MP 1.5 (15 miles from Jennette's Pier)<br/>Make reservation by 8/12/2014 and mention Poppe/Walsh wedding to receive $159 rate per night</p>			<br/><h4>Rental Properties:</h4>			<p>The Outer Banks is littered with vacation rental homes and condos. If your looking to stay in town a little longer to enjoy the area, or just looking for an alternative to a hotel room for the weekend, a rental property may be a great option. The following realty companies can help with vacation rentals:</p>			<p><strong><a href="http://www.villagerealtyobx.com/" target="_blank">Village Realty</a></strong>			<br/><strong><a href="http://www.sunrealtync.com/" target="_blank">Sun Realty</a></strong>			<br/><strong><a href="http://www.joelambjr.com/index.htm" target="_blank">Joe Lamb Realty</a></strong>			<br/><strong><a href="http://www.outerbanksrentals.com/" target="_blank">Stan White Realty</a></strong></p>            <br/><h4>Wedding Party Location:</h4>            <p>The majority of the wedding party will be staying at three rented properties part of The 4 Capes complex (Cape Cod, Cape Coral, and Cape May):<br/><a href="https://maps.google.com/maps?q=5004-5010+S.+Virginia+Dare+Trail+Nags+Head.+NC+27959&hl=en&ll=35.938353,-75.612051&spn=0.012926,0.020514&sll=42.31435,-70.970284&sspn=0.377765,0.656433&hnear=5010+S+Virginia+Dare+Trail,+Nags+Head,+North+Carolina+27959&t=m&z=16" target="_blank">5004-5010 S. Virginia Dare Trail | MP 14, Beach Road | Nags Head, NC 27959</a><br/><br/>            The closest "private" beach access point to our location is at approximately:<br/><a href="https://maps.google.com/maps?q=4910+South+Virginia+Dare+Trail,+Nags+Head,+North+Carolina,+United+States&hl=en&ll=35.939204,-75.613816&spn=0.001616,0.002564&sll=35.938831,-75.613736&sspn=0.006463,0.010257&t=h&hnear=4910+S+Virginia+Dare+Trail,+Nags+Head,+North+Carolina+27959&z=19" target="_blank">4910 South Virginia Dare Trail | MP 14.5, Beach Road</a><br/>(Lot/walkway associated with The 4 Capes and guests)<br/><br/>            The closest public beach access point to our location is at:<br/><a href="https://maps.google.com/maps?q=Loggerhead+St.,+Nags+Head,+NC&hl=en&sll=36.102132,-75.713814&sspn=0.001612,0.002564&hnear=E+Loggerhead+St,+Nags+Head,+Dare,+North+Carolina+27959&t=m&z=17" target="_blank">East Loggerhead St. | MP 14.5, Beach Road</a></p>            <br/><h4>Transportation to/from Venue:</h4>            <p>A shuttle bus will be running between Jennette's Pier and the following locations the day of the event: The 4 Capes, First Colony Inn, and Oasis Suites.<br/>(*Exact schedule of pick-up and drop-off times TBD)</p>            <br/><h4>Weather:</h4>            <p>Late September weather on the Outer Banks is mild, with warm days and cool nights (60s - high 70s). The ceremony will be outside on the beach, (weather permitting) and the reception will be inside. A sweater or light jacket may be a good idea.</p>            <br/><h4>Other Resources:</h4>            <p><strong><a href="http://www.outerbanks.org/" target="_blank">www.outerbanks.org</a></strong></p>            <br/><p>If you have any questions about any of the above, feel free to email us at <a href="mailto:admin@patandkrista.com">admin@patandkrista.com</a>.</p>          </div>        </div>      </div><!--END OF box-->    </div>  </div>      <!--WHY THE OBX-->  <div id="section-5" class="section">    <div class="wrap">      <h2><img src="img/hdr-why.png" alt="Why Here" /></h2>            <div class="slideshow">        <ul>          <li class="item-1">            <img class="photo" src="img/whyOBX/01-logo.png" alt="Why the OBX?" />            <div class="person">              <div class="name">Why get married on the OBX?</div>              <div class="title">Why Not?! :)</div>              <div class="bio">Growing up, both of our families would spend our summer vacation on the Outer Banks. When we first met, we discovered we both shared a love for this place. We have been enjoying time there together ever since, and when Pat popped the question, we both knew exactly where we wanted to get married. We couldn't be more excited to share this special place with our family and friends.</div>            </div>          </li>          <li class="item-2">            <img class="photo" src="img/whyOBX/02-obxmap.png" alt="OBX Background/History" />            <div class="person">              <div class="name">Why get married on the OBX?</div>              <div class="title">OBX Background/History</div>              <div class="bio">Formed by the elements over thousands of years, the Outer Banks sweeps way out into the Atlantic Ocean; the trademark geography of Cape Hatteras is evident on any map of the East Coast. The OBX is a convergence of two massive ocean currents, the warm Gulf Stream and the cooler Labrador Current. Here, the whimsy of the winds and waves provide a spectacular natural stage for outdoor recreation. Learn more at: <a href="http://www.outerbanks.org/" target="_blank">www.outerbanks.org</a>.</div>            </div>          </li>          <li class="item-3">            <img class="photo" src="img/whyOBX/03-beach.png" alt="The Beach" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title">The Beach</div>              <div class="bio">The reason we love the Outer Banks so much is the miles and miles of beautiful public beaches.<br/><br/>It wouldn't be the Outer Banks without the beach. On the east side of these islands lay the white sandy variety and the clear blue Atlantic Ocean. On the west side, Sounds stretch as far as the eye can see. Both serve as a worthy spot to spend a day frolicking in the surf.</div>            </div>          </li>          <li class="item-4">            <img class="photo" src="img/whyOBX/04-jockeysridge.png" alt="Jockey's Ridge" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title"><a href="http://www.jockeysridgestatepark.com/" target="_blank">Jockey's Ridge</a></div>              <div class="bio">This 426-acre park has the largest natural living sand dune on the East Coast. We climb the dunes every year with Pat's family, and race up the largest dune for a spectacular view of sunset over the sound.</div>            </div>          </li>          <li class="item-5">            <img class="photo" src="img/whyOBX/05-wright.png" alt="Wright Brother's Memorial" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title"><a href="http://www.nps.gov/wrbr/index.htm" target="_blank">Wright Brother's Memorial</a></div>              <div class="bio">Even if you don't like airplanes as much as we do, this visit is a must.<br/><br/>Site of the world's first controlled powered flight on December 17, 1903. The Visitor Center features full-scale reproductions of the Wright 1903 Powered Flyer and special exhibits, including a replica of the 1902 Wright Glider and a multipurpose auditorium. The grounds include historical markers and a 60-foot granite monument honoring the Wright brothers.</div>            </div>          </li>          <li class="item-6">            <img class="photo" src="img/whyOBX/06-icecream.png" alt="Fat Boyz / Surfin' Spoon" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title"><a href="http://www.fatboyzobx.com/" target="_blank">Fat Boyz</a> / <a href="http://www.surfinspoon.com/" target="_blank">Surfin' Spoon</a></div>              <div class="bio">No Walsh beach trip is complete without a visit to Fat Boyz for some ice cream&mdash;located across from Jennette's Pier on the beach road near MP 16.5. The PB Jammer is one of our favorites! A new frozen yogurt place opened up recently in Kill Devil Hills called Surfin' Spoon, owned by a local professional surfer and his family. With tons of  yummy flavors and toppings, and a great atmosphere, it's a new Walsh favorite. Across from the beach at MP 10.5.</div>            </div>          </li>          <li class="item-7">            <img class="photo" src="img/whyOBX/07-hatteras.png" alt="Hatteras National Seashore and Lighthouse" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title"><a href="http://www.nps.gov/caha/index.htm" target="_blank">Hatteras National Seashore and Lighthouse</a></div>              <div class="bio">Drive down NC 12 past Nags Head and through beach towns that make up the Cape Hatteras National Seashore. The Dunes are something to see, although recent stormshave all but washed away the beach that used to be here. Climb the tallest brick lighthouse in America at Cape Hatteras. The iconic black and white spiral landmark has served as a warning to generations of mariners navigating the Diamond Shoals. The view is worth the climb.</div>            </div>          </li>          <li class="item-8">            <img class="photo" src="img/whyOBX/08-aquarium.png" alt="Manteo Aquarium" />            <div class="person">              <div class="name">Our favorite OBX places:</div>              <div class="title"><a href="http://www.ncaquariums.com/roanoke-island" target="_blank">Manteo Aquarium</a></div>              <div class="bio">Part of the the same organization that owns and operates Jennette's Pier, this aquarium is a great excuse to spend a rainy afternoon over in the town of Manteo on Roanoke Island.<br/><br/>Marvel at the largest collection of sharks in the state. Interact with scuba divers, touch an alligator, and feed the stingrays as you explore the "Waters of the Outer Banks."</div>            </div>          </li>        </ul>      </div><!--END OF class="slideshow"-->      <ul class="slideshow-control">        <li>1</li>        <li>2</li>        <li>3</li>        <li>4</li>        <li>5</li>        <li>6</li>        <li>7</li>        <li>8</li>      </ul>    </div>  </div>      <!--GIFTS-->  <div id="section-6" class="section">    <div class="wrap">      <h2><img src="img/hdr-gifts.png" alt="Gifts" /></h2>      <div class="box2-top">        <div class="box2-bottom">          <div class="box2-middle">            <h4>Gift Registry:</h4>            <p>We love all of you and are blessed that you would want to honor us with gifts, but we are kindly asking that you choose to bless us only via the following:</p>            <p><strong>1. Use the money you would spend on a gift to get to North Carolina.</strong><br/>            Having you on the OBX to celebrate means the most to us :)</p>            <p><strong>2. Visit our gift registries:</strong><br/><a href="http://www.crateandbarrel.com/Gift-Registry/Patrick-Walsh-and-Krista-Poppe/r5151958" target="_blank">Crate&Barrel</a>            <br/><a href="http://www.potterybarn.com/registry/3491970/registry-list.html" target="_blank">Pottery Barn</a></p>          </div>        </div>      </div><!--END OF box-->    </div>  </div></div><!--END OF id="global-wrap"--><!-- Scripts--><script type="text/javascript" src="js/jquery.min.js"></script><script type="text/javascript" src="js/jquery.easing.1.3.js"></script><script type="text/javascript" src="js/jquery.jcarousel.min.js"></script><script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script><script type="text/javascript" src="js/default.js"></script></body></html>