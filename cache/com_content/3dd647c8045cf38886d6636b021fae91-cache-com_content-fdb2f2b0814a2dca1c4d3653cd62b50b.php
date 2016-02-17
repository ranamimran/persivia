<?php die("Access Denied"); ?>#x#a:5:{s:4:"body";s:78581:"<div class="blog" itemscope itemtype="http://schema.org/Blog">
			
		
	
	
		
	
											<div class="items-row cols-2 row-0 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Revenue Calculator			<meta itemprop="url" content="http://52.21.11.8/revenue-calculator" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-11-20T18:41:18+00:00" itemprop="dateCreated">
						Created: 20 November 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<style>.vals input {
    min-width: 110px !important;
}</style>

<h1>Revenue Calculator</h1>
<p>Chronic Care Management can not only improve patient health, but can also impact your revenue.  Take a moment and calculate the impact that implementing a CCM program can have on your practice. </p>




  <form name="table-calculator" class="form-inline">
                <table class="table table-condensed" style="background: none;">
                  <tr>
                    <th>Description</th>
                    <th class="text-center">Value</th>
                  </tr>
                  <tr>
                    <td>Average total patient population per physician<sup>1</sup></td>
                    <td class="vals"><input type="text" id="tablePatients" size="8" onChange="calcTable()" onpaste="this.onchange();" value="3279" /></td>
                  </tr>
                  <tr>
                    <td>Percent of population covered by Medicare<sup>1</sup></td>
                    <td class="vals"><input type="text" id="tablePercentCovered" size="8" onChange="calcTable()" onpaste="this.onchange();" value="21.85%" /></td>
                  </tr>
                  <tr>
                    <td>Average number of Medicare patients per provider</td>
                    <td class="vals"><input type="text" id="tableAnnualMedicare" size="8" readonly="true" disabled /></td>
                  </tr>
                  <tr>
                    <td>Percent of Medicare patients with 2+ chronic conditions<sup>2</sup></td>
                    <td class="vals"><input type="text" id="tablePercentChronic" size="8" onChange="calcTable()" onpaste="this.onchange();" value="68.6%" /></td>
                  </tr>
                  <tr>
                    <td>Total  CCM-eligible patients</td>
                    <td class="vals"><input type="text" id="tableAnnualCCM" size="8" readonly="true" disabled /></td>
                  </tr>
				  <tr>
                    <td>Patient consent rate</td>
                    <td class="vals"><input type="text" id="patientconsentrate" value="100%" size="8" onChange="calcTable()"   /></td>
                  </tr>
				  <tr>
                    <td>Total number of enrolled CCM patients</td>
                    <td class="vals"><input type="text" id="totalenrolledpatients" size="8" readonly="true" disabled /></td>
                  </tr>
                  <tr>
                    <td>Percent of CCM patients billed each month</td>
                    <td class="vals"><input type="text" id="percenteachmonth" value="100%" onChange="calcTable()" size="8"  /></td>
                  </tr>
                  <tr>
                    <td>Average billable patients per month</td>
                    <td class="vals" ><input type="text" id="averagebillablepateint" size="8" readonly="true" disabled  /></td>
                  </tr>
                  <tr>
                    <td>
                      CCM monthly payment (U.S. average: $43.53<sup>3</sup>) or select your locality
                      <select id="ccmLocality" class="form-control" onChange="calcTableLocality()">
                        <option value="43.53" selected>U.S. average</option>
                        <option value="40.01">Alabama</option>
                        <option value="55.36">Alaska</option>
                        <option value="42.69">Arizona</option>
                        <option value="39.50">Arkansas</option>
                        <option value="47.67">California, Anaheim/Santa Ana</option>
                        <option value="46.87">California, Los Angeles</option>
                        <option value="48.81">California, Marin/Napa/Solano</option>
                        <option value="48.29">California, Oakland/Berkeley</option>
                        <option value="51.15">California, San Francisco</option>
                        <option value="50.77">California, San Mateo</option>
                        <option value="50.48">California, Santa Clara</option>
                        <option value="46.74">California, Ventura</option>
                        <option value="44.49">California, Rest of California</option>
                        <option value="43.28">Colorado</option>
                        <option value="46.18">Connecticut</option>
                        <option value="48.48">DC + MD/VA Suburbs</option>
                        <option value="43.91">Delaware</option>
                        <option value="44.76">Florida, Fort Lauderdale</option>
                        <option value="46.21">Florida, Miami</option>
                        <option value="42.70">Florida, Rest of Florida</option>
                        <option value="42.90">Georgia, Atlanta</option>
                        <option value="40.78">Georgia, Rest of Georgia</option>
                        <option value="45.42">Hawaii/Guam</option>
                        <option value="40.06">Idaho</option>
                        <option value="45.79">Illinois, Chicago</option>
                        <option value="43.21">Illinois, East St. Louis</option>
                        <option value="45.40">Illinois, Suburban Chicago</option>
                        <option value="41.60">Illinois, Rest of Illinois</option>
                        <option value="40.70">Indiana</option>
                        <option value="39.99">Iowa</option>
                        <option value="40.43">Kansas</option>
                        <option value="40.07">Kentucky</option>
                        <option value="43.27">Louisiana, New Orleans</option>
                        <option value="41.09">Louisiana, Rest of Louisiana</option>
                        <option value="42.40">Maine, Southern Maine</option>
                        <option value="40.68">Maine, Rest of Maine</option>
                        <option value="45.60">Maryland, Baltimore/Surr. Cntys</option>
                        <option value="43.88">Maryland, Rest of Maryland</option>
                        <option value="45.74">Massachusetts, Metropolitan Boston</option>
                        <option value="43.87">Massachusetts, Rest of Massachusetts</option>
                        <option value="43.38">Michigan, Detroit</option>
                        <option value="41.28">Michigan, Rest of Michigan</option>
                        <option value="42.07">Minnesota</option>
                        <option value="39.59">Mississippi</option>
                        <option value="42.02">Missouri, Metropolitan Kansas City</option>
                        <option value="42.08">Missouri, Metropolitan St Louis</option>
                        <option value="39.87">Missouri, Rest of Missouri</option>
                        <option value="43.31">Montana</option>
                        <option value="39.99">Nebraska</option>
                        <option value="43.97">Nevada</option>
                        <option value="43.80">New Hampshire</option>
                        <option value="47.45">New Jersey, Northern New Jersey</option>
                        <option value="46.03">New Jersey, Rest of New Jersey</option>
                        <option value="41.63">New Mexico</option>
                        <option value="48.65">New York, Manhattan</option>
                        <option value="50.12">New York, NYC Suburbs/Long I.</option>
                        <option value="45.42">New York, Poughkpsie/N NYC Suburbs</option>
                        <option value="49.99">New York, Queens</option>
                        <option value="41.41">New York, Rest of New York</option>
                        <option value="41.14">North Carolina</option>
                        <option value="42.11">North Dakota</option>
                        <option value="41.31">Ohio</option>
                        <option value="40.16">Oklahoma</option>
                        <option value="43.44">Oregon, Portland</option>
                        <option value="41.75">Oregon, Rest of Oregon</option>
                        <option value="45.52">Pennsylvania, Metropolitan Philadelphia</option>
                        <option value="41.51">Pennsylvania, Rest of Pennsylvania</option>
                        <option value="35.95">Puerto Rico</option>
                        <option value="43.98">Rhode Island</option>
                        <option value="40.70">South Carolina</option>
                        <option value="41.83">South Dakota</option>
                        <option value="40.09">Tennessee</option>
                        <option value="42.85">Texas, Austin</option>
                        <option value="40.93">Texas, Beaumont</option>
                        <option value="43.05">Texas, Brazoria</option>
                        <option value="43.06">Texas, Dallas</option>
                        <option value="42.51">Texas, Fort Worth</option>
                        <option value="43.49">Texas, Galveston</option>
                        <option value="43.36">Texas, Houston</option>
                        <option value="41.04">Texas, Rest of Texas</option>
                        <option value="41.70">Utah</option>
                        <option value="42.41">Vermont</option>
                        <option value="42.26">Virginia</option>
                        <option value="42.13">Virgin Islands</option>
                        <option value="45.54">Washington, Seattle (King Cnty)</option>
                        <option value="42.26">Washington, Rest of Washington</option>
                        <option value="40.24">West Virginia</option>
                        <option value="41.26">Wisconsin</option>
                        <option value="43.30">Wyoming</option>
                      </select>
                    </td>
                    <td class="vals" style="
    vertical-align: inherit;
"><input type="text" id="tableCCMPayment" size="8" onChange="calcTable()" onpaste="this.onchange();" value="$43.53" /></td>
                  </tr>
                  <tr>
                    <td>Estimated annual gross revenue for family medicine physician</td>
                    <td class="vals"><input type="text" id="tableRevenue" size="8" readonly="true" disabled /></td>
                  </tr>
                </table>
              </form>
                <p style="font-size: 10px;">*varies by state<br />
1 MGMA Cost Survey for Single Specialty Practices: 2013 Report Based on 2012 data specific to the specialty of family medicine. Includes Medicare A/B and Medicare Advantage.<br />
2 CMS.gov - County Level Multiple Chronic Conditions (MCC) Table: 2012 Prevalence, National Average.<br />
3 Reimbursement amount from the CY 2015 Physician Fee Service Final Rule; assumes 100% of unique patients are covered by Medicare A/B. Medicare Advantage reimbursement may vary.<br />
</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



  <script type="text/javascript">


    Number.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator) {
        var n = this,
        decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
        decSeparator = decSeparator == undefined ? "." : decSeparator,
        thouSeparator = thouSeparator == undefined ? "," : thouSeparator,
        sign = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
        return sign + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
    };

    function calcWin() {
        var patients = document.getElementById("patientsCount").value;
        var profit = document.getElementById("patientsProfit");
        var medicaid = 42;
        var cs = 28;
        var profitV = (medicaid - cs) * patients;
        profit.value = profitV.formatMoney();
    };

    function initCalcs() {
//      calcWinModal();
      calcTable();
    };

      function calcWinModal() {
        var patients = document.getElementById("patientsCountModal").value;
        var revenue = document.getElementById("patientsProfitModal");
        var medicaid = 42;
        var cs = 28;
        var revenueV = medicaid * patients;
        revenue.value = revenueV.formatMoney();
    };

    function calcTableLocality() {
      var ccmPayment = document.getElementById("ccmLocality").value;
      document.getElementById("tableCCMPayment").value = "$" + ccmPayment;
      calcTable();
    };

    function calcTable() {
      var patients = document.getElementById("tablePatients").value;
      if (isNaN(patients)) {
         patients = 3279;
         document.getElementById("tablePatients").value = patients;
      }

      var percentCovered = document.getElementById("tablePercentCovered").value;
      if (percentCovered.charAt(percentCovered.length - 1) == "%")
         percentCovered = percentCovered.substring(0,percentCovered.length - 1);
      if (isNaN(percentCovered)) {
         percentCovered = 21.85;
         document.getElementById("tablePercentCovered").value = percentCovered + "%";
      }

      var annualMedicare = Math.round(patients * percentCovered / 100);
      document.getElementById("tableAnnualMedicare").value = annualMedicare;

      var percentChronic = document.getElementById("tablePercentChronic").value;
      if (percentChronic.charAt(percentChronic.length - 1) == "%")
         percentChronic = percentChronic.substring(0,percentChronic.length - 1);
      if (isNaN(percentChronic)) {
         percentChronic = 68.6;
         document.getElementById("tablePercentChronic").value = percentChronic + "%";
      }

      var annualCCM = Math.round(annualMedicare * percentChronic / 100);
      document.getElementById("tableAnnualCCM").value = annualCCM;  
    
      var patientconsentrate = document.getElementById("patientconsentrate").value;
      if (patientconsentrate.charAt(patientconsentrate.length - 1) == "%")
         patientconsentrate = patientconsentrate.substring(0,patientconsentrate.length - 1);
      if (isNaN(patientconsentrate)) {
         patientconsentrate = 100;
         document.getElementById("patientconsentrate").value = patientconsentrate + "%";
      }

      var totalenrolledpateint = Math.round(annualCCM * patientconsentrate / 100);
      document.getElementById("totalenrolledpatients").value = totalenrolledpateint;    

     var percenteachmonth = document.getElementById("percenteachmonth").value;
      if (percenteachmonth.charAt(percenteachmonth.length - 1) == "%")
         percenteachmonth = percenteachmonth.substring(0,percenteachmonth.length - 1);
      if (isNaN(percenteachmonth)) {
         percenteachmonth = 100;
         document.getElementById("percenteachmonth").value = percenteachmonth + "%";
      }

      var averagebillablepateint = Math.round(totalenrolledpateint * percenteachmonth / 100);
      document.getElementById("averagebillablepateint").value = averagebillablepateint; 

      var ccmPayment = document.getElementById("tableCCMPayment").value;
      if (ccmPayment.charAt(0) == "$")
         ccmPayment = ccmPayment.substring(1);
      if (isNaN(ccmPayment)) {
         ccmPayment = 43.53;
         document.getElementById("tableCCMPayment").value = "$43.53";
      }
      
      //console.log();
      var revenue = (averagebillablepateint * ccmPayment) * 12;
      //alert(revenue);
      document.getElementById("tableRevenue").value = "$" + revenue.formatMoney();
   };
</script>
				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					eSubmission			<meta itemprop="url" content="http://52.21.11.8/news-events/9-uncategorised/268-esubmission" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T01:50:38+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Persivia is able to fully support eligible professionals and hospitals in their electronic submission needs.  We support the latest version of the eCQMs from CMS for calendar year 2016 where many EHR vendors are still using the version of the measures they were certified on.  <br /><br />Starting in calendar 2016, electronic submission of CQMs will become REQUIRED for the Hospital Inpatient Quality Reporting (IQR) program.  This means that every hospital will have to be ready to electronically submit.  Persivia can integrate with any EHR solution and provide the electronic submission you need.</p>
<h4>Our Electronic Submission Solution includes:</h4>
<ul>
<li>Support for the 2014 R3 Clinical Quality Measures (most recent version released: May 2015)</li>
<li>Advice on the right mix of measures to maximize the value received from this requirement</li>
<li>Creation of the necessary QRDA files</li>
<li>Executive dashboard visualizing compliance</li>
<li>Detail case view showing the data and compliance for each record</li>
<li>Fully Drummond Certified Solution</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
													<div class="items-row cols-2 row-1 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Quality Management/ Improved Outcome			<meta itemprop="url" content="http://52.21.11.8/products/quality-management" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T02:31:17+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Persivia's Quality Measures Solutions can be integrated into any clinical workflow, and cover widely-used quality measure sets. Meaningful Use (EH &amp; EP), The Joint Commission National Quality Core Measures TJC/ IQR,  and HEDIS.</p>
<p>Our quality reports calculate actual provider performance at any time in the calendar year, and have the ability to calculate numerators, denominators, exclusions and exceptions specified by each quality measure program. Customers can use our quality reports to identify benchmark performance within a medical group and share best practices throughout the organization.</p>
<p>Persivia provides a robust and comprehensive quality measures solution that is the most provider-friendly platform available on the market today. Our Quality Measures Solution helps hospitals to manage their quality programs across multiple departments from ADT, Laboratory and Out-patient.</p>
<h4>With Persivia, Your Hospital Can:</h4>
<p><strong>Improve Safety &amp; Care Quality</strong></p>
<ul>
<li>Provide meaningful, data-driven, personalized patient alerts</li>
<li>Standardize practice patterns and resource utilization</li>
<li>Develop targeted, analytically-driven quality initiatives</li>
</ul>
<p><strong>Maximize Reimbursement</strong></p>
<ul>
<li>Improve and report on quality measures to capture pay-for-performance and other quality payments</li>
<li>Enable creation of Accountable Care Organizations (ACOs) by focusing resources on patients most in need</li>
<li>Meet Meaningful Use and related requirements</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Real-time CQM Navigator			<meta itemprop="url" content="http://52.21.11.8/products/quality-management/real-time-cqm-navigator" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T01:50:38+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<h4 class="MsoNormal">Real-time CQM Navigator<sup>TM</sup></h4>
<p class="MsoNormal">Persivia’s Real-time CQM Navigator ties clinical decision support with clinical quality measures in order to deliver real-time alerts to providers at the point of care based on a multitude of quality measures.  Persivia’s solution allows for the creation of “Super Semantic Sets” including all the coding standards redundant across medical terminologies and care settings, eliminating concerns about coding standards or any particular Quality Measure Set.  As a result, providers can focus on using the most recent evidence to focus on patient care rather than worrying about sliding on certain metrics.</p>
<h4>Benefits of Persivia's Real-time CQM Navigator<sup>TM</sup> include:</h4>
<ul>
<li>EMR-agnostic based on the latest HL7 standards</li>
<li>Provides specificity at the patient level, eliminating any duplicate alerts to physicians</li>
<li>Usability in both acute and ambulatory patient care settings</li>
<li><span style="color: black; font-family: Calibri, sans-serif; font-size: 10.5pt; line-height: 1.3em;">Covers all major quality measure sets including:</span>
<ul>
<li>NQF (MU I &amp; II) for EP</li>
<li>The Joint Commission (TJC)</li>
<li>PQRS</li>
<li>ACO</li>
<li>HEDIS</li>
</ul>
</li>
<li>Links to references from published medical literature, updated every 6 months</li>
<li>Software-as-a-service environment providing a turnkey solution</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
													<div class="items-row cols-2 row-2 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Big Data Architecture			<meta itemprop="url" content="http://52.21.11.8/products/persivia-platform/big-data-architecture" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T02:27:35+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Persivia’s Big Data platform can integrate Social, Behavior, Consumer, Genomic as well as Clinical and Claims data to provide comprehensive, intelligent and actionable insights. Extracting meaningful information out of this large data set, which can influence positive health outcomes, more precise treatments and controlling cost is beyond the traditional tools and technologies such as relational databases and ETL processes.  Persivia employs a modern big data solution  at the core of its product platforms. Big Data does not only deals with the volume of the data but also the velocity of the data where the need is to extract and analyze the large volumes of data to provide clinical decisions and analytics to the users at point-of-care in near real time.</p>
<p><strong>At the core of Persivia’s Big-Data ecosystem lies following components:</strong></p>
<p>1. Micro Services as core architecture<br />2. Enterprise Integration using Industry standard Integration framework (Apache Camel)<br />3. Message Oriented Middleware using Industry Standard Message Broker (Kafka)<br />4. Real Time Stream processing using Industry Standard stream processing Engine (Spark)<br />5. Hadoop, a highly scalable storage platform that can store and distribute very large data sets across hundreds of inexpensive servers that operate in parallel</p>
<p>Persivia’s Big-Data platform is geared to support NLP (Natural Language Processing), Machine Learning, to enable people and machines to interact more naturally to extend and magnify human expertise and cognition.</p>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Meaningful Use Clinical Quality Measures			<meta itemprop="url" content="http://52.21.11.8/products/quality-management/meaningful-use" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T01:40:09+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Supports all three quality reporting programs (MU EP/EH CQM, IQR, TJC’s ORYX). Persivia has <a href="meaningful-use-certification-language" target="_blank">Drummond-certified</a> Meaningful Use (MU) reporting solutions for both Eligible Professionals (EP) and Eligible Hospitals (EH). In addition, to satisfy Meaningful Use (MU 2 &amp; 3) for upcoming requirements, our best-in-class Clinical Decision Support (CDS) and Analytics Engine helps EP and EH meet MU CQM requirements, as well as improve quality measures performance with help of real-time recommendations.<br /><br />Using extensive data integrity analysis tools, our Meaningful Use Solution delivers hospitals &amp; providers with the most accurate reports available. We offer one of the only solutions in the industry to combine specified retrospective data with daily information while patients are still in the bed. This is critical to helping providers and hospitals go beyond MU attestation to improve care, processes, and outcomes.<br /><br />Our solution continually evaluates the records of each patient, identifying educational resources from which they can most benefit. The system maintains the proprietary educational content, along with its trigger associations, streaming both its delivery and ease of content management.  When combined with our population and patient analytics, we can enable providers to easily identify which interventions and reminders are most effective.</p>
<h4>Persivia is the Solution for Meeting Meaningful Use:</h4>
<p><strong>Executive dashboard containing both summary and detail encounter data</strong></p>
<ul>
<li>Clinical Decision Support (CDS) that incorporates all EP and EH quality measures</li>
<li>Individualized patient education materials and reminders, per patient’s delivery preference, for both preventative and follow-up care</li>
<li>Integration of contextually relevant, patient-specific knowledge resources into clinical information systems, in order to help providers meet their patient care knowledge needs</li>
<li>Click through / drill-down to patient level detail</li>
<li>Data Element Guide which maps and educates the hospital about the fields and values required for compliance</li>
<li>Extensive data auditing system that validates data integrity</li>
</ul>
<h4>Benefits</h4>
<ul>
<li><a href="index.php?option=com_content&amp;view=article&amp;id=281" target="_blank">Drummond-certified</a></li>
<li>Visibility of all MU data in one interface regardless of source</li>
<li>Dashboard view of all Core Menu and Clinical Quality Measures</li>
<li>EHR Independent MU Quality Measures management</li>
<li>Reporting centralized across multiple facilities</li>
<li>Snapshot view of historical data</li>
<li>Low cost of ownership: SaaS based, no hardware or additional software to purchase, no interfaces</li>
</ul>
<p>Persivia has rigorously maintained a comprehensive set of evidence-based rules triggered on hundreds of different clinical, demographic, and utilization parameters.  Each alert is scored, prioritized, and automatically directed to the treating clinician in the manner they most prefer, either as a real-time alert or an on-demand report. Our solution offers patient-specific, not just diagnosis-specific, order sets to enable hospitals to meet their Meaningful Use requirements.</p>
<p> </p>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
													<div class="items-row cols-2 row-3 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Chronic Care Management			<meta itemprop="url" content="http://52.21.11.8/products/care-management-tools/chronic-care-management" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T02:11:30+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<h1>Chronic Care Management</h1>
<p>Under a new rule published by CMS, effective January 1, 2015, clinicians who dedicate at least 20 minutes to care management services during a 30-day period will be paid approximately $42.00 a month per qualifying beneficiary (those with two or more chronic conditions). As part of this program, CMS allows organizations to outsource chronic care management services.</p>
<p><br />The 2015 CMS Payment Rule (CPT 99490) provides new revenue opportunities and will also help transition patients from costly in-patient care to the ambulatory setting. However, many hospitals lack dedicated clinician resources to focus on chronic care management. Persivia offers a turnkey Chronic Care Management solution that includes both software and service to support your chronic disease patients. Our comprehensive dashboard integrates seamlessly into your current clinical and financial workflows, and offers one of the largest Clinical Decision Support (CDS) medical libraries built on comprehensive evidence-based rules.</p>
<h3>Chronic Care Management Benefits:</h3>
<p><img class="pull-left" src="images/CCM Image.png" alt="" width="381" height="211" /></p>
<ul>
<li><b>Enhanced Cash Flow – </b>An annual profit per provider can be generated based on the number of patients consenting to the program</li>
<li><b>Bi-directional EHR Data Flow – </b>Information is exchanged with your EHR for a seamless workflow</li>
<li><b>Real-time Alerts –</b> Provide clinical decision support to improve your patients’ overall outcomes</li>
<li><b>Patient-specific Comprehensive Care Plans – </b>Leverages a unique set of evidence-based rules that are customized to your individual patient’s precise needs</li>
<li><b>Up-to-date Patient Information – </b>Patient details based on interactions with the Care Manager may be sent to your EHR for review by the provider</li>
<li><b>Patient Education Resources – </b>Branded patient information packets to educate your patients on the care value of non-face-to-face interaction with Care Managers</li>
<li><b>Patient Support – </b>24x7 patient support as well as an App specifically for patients to reach out with questions or request help in case of an emergency</li>
<li><b>Quick Identification of Eligible Beneficiaries - </b> A rules-based engine that saves your team time by automating identification of eligible beneficiaries</li>
<li><strong>Implementation Experience</strong> <b style="font-size: 12.16px; line-height: 15.808px;"> – </b>Deep experience with over 200 hospital implementations for various Persivia clinical products</li>
</ul>
<p><b> </b></p>
<h3><b>Key Features Include:</b></h3>
<ul>
<li>Identifying and alerting caregivers within the clinical workflow on eligible beneficiaries for enrollment</li>
<li>Tracking chronic conditions through patient’s clinical history, incorporating real-time, evidence-based alerts to close care gaps</li>
<li>Providing clinician resources for the required monthly care management and patient interactions</li>
<li>Tracking billable time and activities</li>
</ul>
<h3>Learn More About Chronic Care Management</h3>
<ul>
<li>Demystifying Chronic Care Management Webinar - <a title="CCM Webinar" href="https://attendee.gotowebinar.com/register/6399731988497596673" target="_blank">Click here </a>to listen to the recording in conjunction with Lori Foley from PYA Healthcare on Demystifying Chronic Care Management.</li>
<li>Persivia Chronic Care Management Data Sheet - <a title="CCM Brochure" href="http://info.persivia.com/hubfs/Persivia_ChronicCareMgmt.pdf" target="_blank">Click here</a> to get the brochure.</li>
</ul>
<h4>Interested in learning more about how you can enhance your revenue and improve patient care? <a title="Contact Us" href="index.php?option=com_contact&amp;view=contact&amp;id=1&amp;Itemid=499" target="_blank">Contact us</a> today!</h4>
<p> </p>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Meaningful Use Certification Language			<meta itemprop="url" content="http://52.21.11.8/meaningful-use-certification-language" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T01:40:09+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p> </p>
<h4><strong>Certification Statement for EP:</strong></h4>
<p>Compliance and Pricing Transparency Statement:  This EHR Module is 2014 Edition compliant and has been certified by an ONC‐ACB in accordance with the applicable certification criteria adopted by the Secretary of the U.S. Department of Health and Human Services. This certification does not represent an endorsement by the U.S. Department of Health and Human Services. Product Name: CQM Services  From: Persivia   Version: 2.1   Date Certified: 10/08/2015 CHPL Certification ID: 10082015‐2332‐5  Modules Tested: 170.314 (c)(1‐3); (g)(4) Clinical Quality Measures tested: 122v2; 123v2; 124v2; 125v2; 126v2; 127v2; 131v2; 138v2; 146v2; 153v2; 155v2; 156v2; 163v2; 165v2; 182v3 No additional software used  Product Name: CQM Services Version: 2.5 Date Certified: 10/15/2015 CHPL Certification ID: 10152015‐4570‐5<span style="font-size: 12.16px; line-height: 15.808px;"> </span> Module tested: Same as 2.1 Clinical Quality Measures: 22v3; 52v3; 62v3; 68v4; 74v4; 75v3; 77v3; 82v2; 122v2; 123v2; 124v2; 125v2; 126v2; 127v2; 130v3; 131v2; 132v3; 133v3; 137v3; 138v2; 143v3; 146v2; 148v3; 153v2; 154v3; 155v2; 156v2; 157v3; 158v3; 161v3; 163v2; 165v2; 166v4; 167v3; 177v3; 182v3 No additional software used Pricing Transparency Statement: The certified CQM Services products are offered to clients under SaaS service model, for which Persivia charges the clients monthly service fees for CQM – Capture and Export (170.314.c.1), CQM – Import and Calculate (170.314.c.2), CQM – Electronic Submission (170.314.c.3) and Quality Management System (170.314.g.4).</p>
<p>When measures are upgraded, or client signs up for certification of additional measures, there may be additional changes involved.</p>
<p> </p>
<h4><strong>Certification Statement for EH:</strong><b><br /></b></h4>
<p>Compliance and Pricing Transparency Statement:  This EHR Module is 2014 Edition compliant and has been certified by an ONC‐ACB in accordance with the applicable certification criteria adopted by the Secretary of the U.S. Department of Health and Human Services. This certification does not represent an endorsement by the U.S. Department of Health and Human Services. Product Name: Meaningful Use Solution 2.0   From: Persivia Inc.   Version: 2.0   Date Certified: 12/03/2015  CHPL Certification ID: <span style="font-size: 11.0pt; font-family: 'Calibri','sans-serif'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; color: #1f497d; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">12032015-3010-1</span>  Modules Tested: 170.314(c)(1, 2, 3); 170.314(d)(1, 5, 8); 170.314(g)(2)  Clinical Quality Measures tested: CMS009v2; CMS026v1; CMS030v3; CMS031v2; CMS032v3; CMS053v2; CMS055v2; CMS060v2; CMS071v3; CMS072v2; CMS073v2; CMS091v3; CMS100v2; CMS102v2; CMS104v2; CMS105v2; CMS107v2; CMS108v2; CMS109v2; CMS110v2; CMS111v2;CMS113v2; CMS114v2; CMS171v3; CMS172v3; CMS178v3; CMS185v2; CMS188v3; CMS190v2   No additional software used   Pricing Transparency Statement: Meaningful Use Solution 2.0 is an inpatient modular EHR and requires the Eligible Hospital to license and install a compliant implementation of other ONC certified systems, such as one of the MEDITECH EHRs, in order to constitute a complete EHR for attesting to Meaningful Use.  Implementation of Meaningful Use Solution with other ONC certified systems requires one-time costs and ongoing subscription fees.</p>
<p> </p>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
													<div class="items-row cols-2 row-4 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Bundled Payment Manager			<meta itemprop="url" content="http://52.21.11.8/products/care-management-tools/bundled-payment-manager" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T02:11:30+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Beginning on April 1, 2016, the Centers for Medicare and Medicaid Services (CMS) will begin the Comprehensive Care for Joint Replacement (CCJR) model. This model will hold hospitals accountable for the quality of care they deliver to Medicare fee-for-service beneficiaries for hip and knee replacements and/or other major leg procedures from surgery through recovery.</p>
<p>The program is designed to:</p>
<ul>
<li>Provide financial incentives to improve coordination of care for beneficiaries</li>
<li>Avoid post-surgical complications and hospital readmissions</li>
<li>Improve the patient experience through care redesign and coordination</li>
</ul>
<h1> </h1>
<h3><strong>PERSIVIA BUNDLED PAYMENT MANAGER KEEPS YOU INFORMED</strong></h3>
<p>In this first step toward value-based payments, under the CCJR model, participant hospitals would be the episode initiators and bear financial risk. Persivia offers an analytics tool to manage bundled payments throughout the year so there are no surprises during the end-of-year reconciliation with CMS.</p>
<p> </p>
<h3><strong>PERSIVIA BUNDLED PAYMENT MANAGER BENEFITS:</strong></h3>
<ul>
<li>Scalability – Enables your organization to see an overview of the entire health of your population or drill into an individual patient’s charges per service</li>
<li>Immediate Claims Data Capture – Data is continuously being updated and, in turn, you can see your performance progress</li>
<li>Dashboard Reporting – Dashboards allow you to quickly see how your organization is performing compared to internal baseline metrics as well as against regional and national metrics allowing you to make adjustments</li>
<li>Flexibility and Extensibility – Ability to support additional bundled payment provisions without the hassle of additional software integration</li>
</ul>
<p> </p>
<h4>Interested in learning more about how you can manage bundled payments throughout the year? <a title="Contact Us" href="index.php?option=com_contact&amp;view=contact&amp;id=1&amp;Itemid=499" target="_blank">Contact us</a> today!</h4>
<p> </p>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Careers			<meta itemprop="url" content="http://52.21.11.8/about-us/careers" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-08-11T22:13:27+00:00" itemprop="dateCreated">
						Created: 11 August 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>At Persivia, we are always on the lookout for top-notch talent in sales, marketing, clinical, technology, and project management. If you are passionate about positively impacting the quality of healthcare delivery and outcomes, and want to work in a fast-paced, high-technology company, please contact us for more information.  If you are interested in applying to a position, email your resume to:  <strong><span id="cloak29007">This email address is being protected from spambots. You need JavaScript enabled to view it.</span><script type='text/javascript'>
 //<!--
 document.getElementById('cloak29007').innerHTML = '';
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy29007 = 'HR' + '&#64;';
 addy29007 = addy29007 + 'P&#101;rs&#105;v&#105;&#97;' + '&#46;' + 'c&#111;m';
 var addy_text29007 = 'HR' + '&#64;' + 'P&#101;rs&#105;v&#105;&#97;' + '&#46;' + 'c&#111;m';
 document.getElementById('cloak29007').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy29007 + '\'>'+addy_text29007+'<\/a>';
 //-->
 </script>.</strong></p>
<p> </p>
<p><strong>The following openings are currently available:</strong></p>
<h3 style="line-height: 15.808px;"><a href="#CARE COORDINATOR">CARE COORDINATOR</a></h3>
<h3 style="line-height: 15.808px;"><a href="#CARE MANAGER">CARE MANAGER</a></h3>
<h3 style="line-height: 15.808px;"><a href="#VICE PRESIDENT OF CLIENT SERVICES">VICE PRESIDENT OF CLIENT SERVICES</a></h3>
<h3 style="line-height: 15.808px;"><a href="#REGIONAL SALES DIRECTOR">REGIONAL SALES DIRECTOR</a></h3>
<h3 style="line-height: 15.808px;"><a href="#SENIOR SOFTWARE ENGINEER">SENIOR SOFTWARE ENGINEER, Java/J2EE, Mongo DB</a></h3>
<h3 style="line-height: 15.808px;"><a href="#SENIOR BUSINESS ANALYST, QUALITY AND GOVERNMENT PROGRAMS">SENIOR BUSINESS ANALYST,  QUALITY AND GOVERNMENT PROGRAMS</a></h3>
<h3 style="line-height: 15.808px;"><a href="#CLINICAL BUSINESS ANALYST">CLINICAL BUSINESS ANALYST</a></h3>
<p><a name="CARE COORDINATOR"></a></p>
<h3> </h3>
<h3>CARE COORDINATOR</h3>
<p>Persivia is looking for a Part-time, Care Coordinator.  This role reports to the SVP of Client Services and is responsible for overseeing and providing guidance to other clinicians providing non-face to face care to patients with chronic conditions. </p>
<p>Responsibilities</p>
<ul>
<li>Interact with Clients and their staff about implementation and administrative and billing processes</li>
<li>Manage a staff of Care Managers made up of LPN, RN or other clinically trained employees</li>
<li>Understand and provide appropriate guidance to staff surround chronic conditions</li>
<li>Train new Persivia Care Management staff on Persivia Chronic Care Management</li>
<li>Promote a positive image of Persivia to clients and staff members</li>
<li>Identify and win over key staff members to maximize their use of Persivia Chronic Care Management</li>
</ul>
<p>Required Skills &amp; Experience</p>
<ul>
<li>Ability to pass a background check and agree to healthcare privacy policies</li>
<li>Clinical training or experience. LPN or RN license, or other clinical degree</li>
<li>Act as a guardian of medical data and demonstrate concrete knowledge of state and federal guidelines for the Health Insurance Portability and Accountability Act (HIPAA) and other privacy standards</li>
<li>Demonstrate excellent detail-oriented and organizational skills</li>
<li>Act as a team player that works well with others</li>
<li>Effectively multi-task under pressure, meet deadlines and deliver high quality work</li>
<li>Effective oral and written communication skills</li>
<li>Expertise in healthcare business processes and software</li>
<li>Ability to effectively motivate clinical and non-clinical staff at all levels</li>
<li>Ability to lead others in difficult situations</li>
<li>Strong problem solving skills</li>
<li>Ability to manage project tasks and timelines</li>
<li>Strong communication and leadership skills</li>
<li>Excellent computer skills</li>
<li>Ability to effectively train others</li>
</ul>
<p>Preferred Skills &amp; Experience</p>
<ul>
<li>1-2 years of work experience in a healthcare setting, project and implementation management, training, account management and support, customer service department, consulting environment</li>
<li>Working knowledge of physician billing, clinical, operational workflows for both inpatient and outpatient environments</li>
<li>Flexibility with the demands of a startup environment</li>
<li>Self-sufficient and quick to learn</li>
<li>Bilingual, English &amp; Spanish</li>
</ul>
<h3> </h3>
<p><a name="CARE MANAGER"></a></p>
<h3> </h3>
<h3>CARE MANAGER</h3>
<p>Persivia is looking for a Part-time, Care Manager.   The Persivia team is made up of medical professionals and technology enthusiasts with a passion to build technology and deliver services that improve the way people experience healthcare. Our expert team is known for our insightful requirements analysis, award-winning development skills, detail-oriented quality assurance, and robust services support. </p>
<p><strong>Job Summary</strong></p>
<p>The Persivia Care Manager works with a team of similarly trained individuals that are together responsible for ensuring that Persivia patients with chronic care conditions receive exceptional non-face to face care for up to 20 minutes per month.   Care Managers will contact patients via phone, email or other communication methods and will follow a prescribe set of assessments to establish goals and appropriate care for patients between office visits. In addition, follow up care will be provided contacting the patient on a monthly basis to follow up on obtainment of goals and to reassess the patient..  A typical day would involve reviewing patient medical information, past assessments and goals and interacting with patients via phone as well as documenting the patient interaction in the Persivia Chronic Care Management system.</p>
<p> The Persivia Care Manager will primarily be responsible for:</p>
<ul>
<li>Providing outstanding customer service to patients with chronic conditions.</li>
<li>Assisting in assessing chronic care patients and their current status while setting up achievable goals and answering questions</li>
<li>Following up with patients on goal accomplishments and other activities.</li>
<li>Documenting call activities within Persivia Chronic Care Management.</li>
</ul>
<p><strong>Requirements</strong></p>
<p>This position requires:</p>
<ul>
<li>1+ years of Clinical experience to ensure that the Persivia Care Manager can translate the medical information into useful data.</li>
<li>LPN or RN license.  Medical Technician also considered</li>
<li>Ability to pass a background check and agree to healthcare privacy policies</li>
<li>Act as a guardian of high-quality medical data and demonstrate concrete knowledge of state and federal guidelines for the Health Insurance Portability and Accountability Act (HIPAA) and other privacy standards</li>
<li>Demonstrate excellent detail-oriented and organizational skills</li>
<li>Act as a team player to work well with others</li>
<li>Effectively multi-task under pressure, meet deadlines and deliver high quality work </li>
<li>Communicate effectively with members, medical/dental providers, and specialists to collect and verify all required member specific data</li>
<li>Ensure patients’ medical histories are accurate, complete, up to date and properly entered into the personal health record database</li>
<li>Work to be as efficient as possible to collect data for the purpose of maximizing the Persivia patient experience</li>
<li>Be willing to set an example for others and surpass current standards</li>
</ul>
<p> </p>
<p><a name="VICE PRESIDENT OF CLIENT SERVICES"></a></p>
<p> </p>
<h3>VICE PRESIDENT OF CLIENT SERVICES </h3>
<p>Reports to:  Senior Vice President of Client Services</p>
<p>Overview:  </p>
<p>The Vice President of Client Services is a player- coach, managing clients as well as members of the client service team. In managing accounts, s/he is an experienced clinical professional whose mission is to provide the information necessary to improve medical care.  The overriding goal is to see that Persivia's Products are used by participating hospitals to the fullest extent possible. This motivated individual must be flexible in working and solving problems at varying levels (from the senior executives to implementers) across organizations and functional areas.   </p>
<p>The Client Service program involves relationship management including, but not limited to, development, maintenance and monitoring of the Persivia-client relationship within the first year of the product implementation and beyond. This consists of training users, educating executives and engaging clinical users. </p>
<p><strong>Essential Duties and Responsibilities include the following:  </strong></p>
<ul>
<li>Manage on-boarding of new customers using structured processes</li>
<li>Manage ongoing client communications using structured processes</li>
<li>Develop, manage, and execute annual Client Service plans</li>
<li>Train new users on Persivia products</li>
<li>Demonstrate use of Persivia products</li>
<li>Administrate the client business relationship (e.g. receivables, renewals)</li>
<li>Supervise, train, and provide feedback to, direct reports regarding their job responsibilities, including development and execution of Client Service plans</li>
<li>Perform other duties as assigned (e.g. Sales Support)</li>
</ul>
<p><strong>Requirements and Qualifications:  </strong></p>
<ul>
<li>Broad experience in health care delivery systems (clinical, quality or hospital experience greatly preferred) </li>
<li>Strong oral and written communication and presentation skills </li>
<li>Excellent project management skills with strong leadership qualities </li>
<li>Ability to work independently as well as a key team member </li>
<li>Strong customer service understanding and orientation </li>
<li>Ability to multi-task while managing several projects and delivering on time results </li>
<li>Strong outcomes-based work ethic alongside a healthy sense of humor </li>
<li>Ability to travel and maintain long-distance business relationships</li>
<li>Minimum 5-10 years management experience in a clinical, hospital or professional services setting </li>
<li>Bachelor’s degree required (in healthcare related field preferred)</li>
</ul>
<p> </p>
<p><a name="REGIONAL SALES DIRECTOR"></a></p>
<h3> </h3>
<h3><b>REGIONAL SALES DIRECTOR </b></h3>
<p>Persivia is committed to delivering the most innovative and trusted knowledge technology solutions to transform healthcare by empowering clinicians to make the best decisions for each patient, using intelligent and actionable information in order to improve care quality and efficiency while reducing care costs.  We are dedicated to excellence in all of our endeavors, and deeply value the partnerships we build with each of our customers.  We achieve this mission by focusing on hiring and retaining employees who are passionate about high quality, superior technology, and genuinely wish to improve the lives of those patients our services touch.  Join us and put your beliefs into practice. </p>
<p><strong>Position Overview</strong></p>
<p>The Sales Director is responsible for building long-term relationships and growing our footprint and revenue base as he/she develops new business.  New business development will include following:</p>
<ul>
<li>Identifying a pipeline of potential new clients</li>
<li>Developing a solid strategic plan to close new business in a timely manner to exceed personal quota and goals  </li>
<li>Developing a high level of customer satisfaction and retention during the sales process </li>
<li>Driving organic revenue growth within all managed accounts to ensure the organization is meeting and exceeding overall revenue targets</li>
</ul>
<p>Candidates will need to work in a team environment and have the ability to effectively work with cross functional positions within the organization and be adept at directing the appropriate resources as necessary to close and grow business. The individual is an integral member of the client development team and, as such, acts in a collaborative manner to drive the successful attainment of individual, team, and corporate goals. As employee development is essential, responsibilities and job function may expand and evolve proportionate to the employer’s needs. Persivia Employees are expected to operate in a compliant and ethical manner at all times during the course of business. </p>
<p><strong>Job Responsibilities may include, but are not limited to: </strong></p>
<ul>
<li>Understanding of the Sales Process and Consultative selling skills; Management of sales cycle from lead generation to close </li>
<li>Consistent and on plan revenue delivery though lead identification, qualification, and sales pipeline management</li>
<li>Development of new business resulting in positive revenue growth, consistently meeting goals</li>
<li>Ability to operate at the highest level as it pertains customer service to drive client performance, grow revenue base and minimize attrition risk</li>
<li>Thorough understanding of the Hospital and Provider’s buying processes and regulatory issues, particularly around Meaningful Use, Chronic Care, Value-based payment models and Quality initiatives.</li>
<li>Work to resolve time sensitive and client essential issues that arise on a day-to-day basis by coordinating internal and an external resources as necessary</li>
<li>Prepare required reports and documentation including Monthly Pipeline Reports and client updates </li>
<li>Establish and facilitate regularly scheduled meetings with assigned clients to discuss key success metrics </li>
<li>Understand and ensure ongoing adherence to clients' contract terms</li>
<li>Maintain an understanding and ability to discuss healthcare industry changes</li>
<li>Enforce company's policies and procedures as articulated in Corporate Policy Documents and Compliance Plans and any other departmental policy documents</li>
<li>Other duties as assigned including the management of internal projects</li>
</ul>
<p><strong>Experience:</strong></p>
<p>The ideal Sales Representative candidate has the following background and experience:</p>
<ul>
<li>Bachelors Degree Required </li>
<li>3 Years Minimum Professional Sales Experience </li>
<li>Healthcare IT industry experience preferable </li>
<li>Demonstrated history of accomplishment </li>
<li>Proven success in building and maintaining professional business relationships</li>
<li>Strong interpersonal communication and follow up skills </li>
<li>Solid presentation skills (in person and online) required</li>
<li>Proven self-assuredness in a business environment dealing with executive-level prospects/contacts </li>
<li>High energy self-starter capable of driving results </li>
</ul>
<p><strong>Additional Requirements:</strong></p>
<ul>
<li>Strong organizational and communication skills </li>
<li>Some travel (40%) will be required  </li>
</ul>
<h3> </h3>
<p> </p>
<p><a name="SENIOR SOFTWARE ENGINEER"></a></p>
<h3>SENIOR SOFTWARE ENGINEER, Java/J2EE, Mongo DB</h3>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: Symbol;">· </span><span style="color: black;">B.S. or similar degree in Computer Science or related field<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">5+ years of experience delivering commercial software<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Expert-level Java/J2EE<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Experience using Java open source to develop commercial software<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Deep knowledge of Spring Framework, Hibernate ORM, RESTful services, relational databases<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Experience with NoSQL databases (MongoDB preferred) is must<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Effective collaborator and Agile practitioner<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Experience building scalable and sustainable, commercial software<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Commitment to continuous delivery as a member of an Agile team<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Appreciation for code reviews, software unit tests, continuous integration and automation<br /> </span><span style="font-family: Symbol;">· </span><span style="color: black;">Core JavaScript, AngularJS, Groovy, </span>Maven<span style="color: black;">, Healthcare software experience are all pluses</span><span style="font-family: Symbol;"> </span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="color: black;">Experience with UNIX is a must. Exposure to SV, GIT is desirable.</span></p>
<p> </p>
<p> </p>
<p><a name="SENIOR BUSINESS ANALYST, QUALITY AND GOVERNMENT PROGRAMS"></a></p>
<h3>SENIOR BUSINESS ANALYST, QUALITY AND GOVERNMENT PROGRAMS</h3>
<p><strong>Description</strong></p>
<p>Persivia is an innovative company on a very aggressive growth path. Persivia is looking for a senior business analyst (BA) who can bring a standardized and consistent approach to the development, implementation and measurement of government and other quality programs.</p>
<p>This position requires prior experience working with healthcare software.</p>
<p> </p>
<p><strong>Responsibilities</strong></p>
<ul>
<li>Direct the design and implementation of business requirements for reporting and analytics that support Center for Medicare and Medicaid (CMS) and other quality programs </li>
<li>Define requirements by translating Federal program clinical quality measures (CQM) into Persivia's rules engine</li>
<li>Develop and maintain a Requirement Traceability Matrix from requirements and functional specifications to fully decomposed and derived single testable statements</li>
<li>Closely collaborates with business partners to identify requirements for integration, including clinical data mapping and crosswalks</li>
<li>Elicit, analyze, document and validate internal stakeholder and system requirements</li>
<li>Decompose stakeholder and system requirements into functional and non-functional requirements and specifications</li>
<li>Provide input to Management Reports to include: Weekly Status Briefings, Monthly Status Reports, and Project Metric Reporting</li>
<li>In cooperation with the development team and other Product Owners, develop standards, templates, processes and procedures that improve requirements and contribute to team productivity</li>
<li>Provide ongoing support to Quality </li>
</ul>
<p><strong>Qualifications</strong></p>
<p>Required Skills/Knowledge</p>
<ul>
<li>Bachelor's degree with 5 years of Business Analysis/ Product Owner/Product Manager / Systems Engineer / Requirements Analyst experience. (An additional 4 years of experience may be substituted in lieu of degree requirement)</li>
<li>Experience working in Healthcare Information Technology -- in a vendor, hospital or ambulatory environment</li>
<li>4-5 years of experience working with the analysis and implementation of government or quality programs such as Meaningful Use, PQRS, Core Measures, etc.</li>
<li>Detailed working knowledge of ambulatory healthcare operations and clinical informatics preferred</li>
<li>Experience decomposing business and system requirements into technical requirements and specifications preferred</li>
<li>Experience with full Software Development Lifecycle (SDLC) activities and tasks preferred</li>
</ul>
<p><a name="CLINICAL BUSINESS ANALYST"></a></p>
<p> </p>
<h3> </h3>
<h3>CLINICAL BUSINESS ANALYST</h3>
<p><strong>Description</strong></p>
<p>Under the supervision of the Chief Medical Officer, the Clinical Research Analyst will define, review, analyze and evaluate clinical quality workflows.  The Clinical Research Analyst will define user needs and formulate business and clinical requirements.  He/She will apply leading industry practices to help design clinical programs geared to improving clinical quality and disease management programs to meet the needs of the business. </p>
<ul>
<li>Serve as project team (Clinical Application) focal point by providing clinical and functional expertise in clinical projects implementation life cycle (e.g. requirements gathering/validation, workflow definition, clinical best practices, etc.)</li>
<li>Provide input into defining clinical models, understand and clearly communicate their core principles, underlying algorithms and clinical and financial implications</li>
<li>Provide clinical input into the clinical application design and testing process</li>
<li>Collaborate with multidisciplinary teams to ensure solutions reflect best practices and increase patient safety</li>
<li>Function as an expert user with both clinical and application expertise, and serve as a cross-functional, knowledgeable, single point of contact for clinical staff and project management.</li>
</ul>
<p><strong>Requirements</strong></p>
<p><strong>EDUCATION:</strong></p>
<p>Bachelor’s degree in Business or Healthcare Administration fields combined with minimum of 1 year experience working with clinical and financial models in a Healthcare IT environment. Alternatively a health science degree such as MD.</p>
<p><strong>EXPERIENCE:</strong></p>
<ul>
<li>Minimum 1 years’ experience in a clinical research analyst role (2yrs preferred)</li>
<li>Good understanding of Quality sets such as MU, HEDIS, PQRS</li>
<li>Performs exploratory analysis as well as model-oriented and model-based evaluation of data. He/She is also accountable for delivering of ready to use analysis dataset (structured and semi structured dataset, pooled and cleaned ready to use modeling input dataset). </li>
<li>Understands how descriptive, predictive and prescriptive analytics support clinical work flows</li>
<li>Adept at defining relationships among concepts that enable data grouping and comparison </li>
<li>Ability to identify operating problems, performs, and directs the required analysis to assist in creating an effective solution</li>
<li>Creates complex analysis for problems or opportunities requiring considerable research to comprehend all aspects of the issue</li>
<li>Ability to independently analyze information as requested by managers and give cogent, useful advice</li>
<li>Clinical Quality measure and rule building experience is desirable </li>
<li>Manage all the standard and local terminologies required for maintaining existing models  </li>
<li>Exceptional ability to identify and track issues, and drive them to a conclusion </li>
<li>Experience in providing support, guidance and expertise in adopting, implementing and maintaining standard terminologies </li>
<li>Familiarity with  how knowledge systems support Clinical Decision Support (CDS) systems and analytics </li>
<li>Demonstrated ability to understand how clinical semantics work and strong familiarity with SNOMED, CPT®, LOINC®, ICD-9, ICD-10, HCPC, RxNORM, UB Revenue codes, POS</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
													<div class="items-row cols-2 row-5 row">
					<div class="col-sm-6">
				<div class="item column-1"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Quality Measures			<meta itemprop="url" content="http://52.21.11.8/products/quality-management/reporting" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-09-10T01:55:00+00:00" itemprop="dateCreated">
						Created: 10 September 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Healthcare Effectiveness Data and Information Set (HEDIS) is a tool used by more than 90 percent of America's health plans to measure performance on important dimensions of care and service. Altogether, HEDIS consists of numerous measures across different domains of care. Because so many plans collect HEDIS data, and because the measures are so specifically defined, HEDIS makes it possible to compare the performance of health plans on an "apples-to-apples" basis.</p>
<p>HEDIS reporting enables healthcare organizations to track, monitor and improve HEDIS compliance, develop and measure proprietary quality metrics, facilitate NCQA submission and implement year-round clinical compliance reporting that increases health plan ranking.</p>
<h4>Features of the Persivia’s HEDIS Solution:</h4>
<ul>
<li>View, query and measure HEDIS data using customizable filters and drill downs</li>
<li>Report HEDIS administrative and medical record data quickly and easily</li>
<li>Develop custom measures for your own clinical reporting initiatives</li>
<li>Secure SaaS platform that facilitates the communication, planning and project management of HEDIS measure production</li>
<li>Engage members and providers with customizable outreach letters and performance score cards</li>
</ul>
<h4>Benefits of Persivia’s HEDIS Solution:</h4>
<ul>
<li>Improve compliance with HEDIS measures and other quality metrics</li>
<li>Increase health plan ranking and demonstrate value to consumers</li>
<li>Streamline the NCQA data submission process</li>
<li>Develop, implement and measure quality and compliance programs</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
											<div class="col-sm-6">
				<div class="item column-2"
					itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
					

	<!-- Article -->
	<article>
		<div  class="row">
			<div class="col-sm-4 item-image-box">
				
			</div>
			
		  
		    <div class="col-sm-8 item-content-box">
		    						
<header class="article-header clearfix">
	<h2 class="article-title" itemprop="name">
					Quality Improvement			<meta itemprop="url" content="http://52.21.11.8/news-events/9-uncategorised/264-quality-improvement-33" />
			</h2>

			</header>
		    
		    <!-- Aside -->
		    		    <aside class="article-aside">
		      		      	<dl class="article-info  muted">

		
			<dt class="article-info-term">
													Details							</dt>

			
			
			
					
												<dd class="create">
					<i class="fa fa-calendar"></i>
					<time datetime="2015-08-11T20:48:15+00:00" itemprop="dateCreated">
						Created: 11 August 2015					</time>
			</dd>			
			
						</dl>
		      		      
		      		    </aside>  
		    		    <!-- //Aside -->

				<section class="article-intro" itemprop="articleBody">
																					
																					
					<p>Quality Improvement programs are a vital tool for physicians and medical groups seeking success in pay-for-performance programs. Persivia' Quality Measures Solutions can be integrated into any clinical workflow, and cover three of the most widely-used quality measure sets. PQRS, Meaningful Use and HEDIS.<br /><br />Our quality reports calculate actual provider performance at any time in the calendar year, and have the ability to calculate numerators, denominators, exclusions and exceptions specified by each quality measure program. Customers can use our quality reports to identify benchmark performance within a medical group and share best practices throughout the organization.<br /><br />Persivia provides a robust and comprehensive quality measures solution that is the most provider-friendly platform available on the market today. Our Quality Measures Solution helps hospitals to manage their quality programs across multiple departments from ADT, Laboratory and Out-patient.</p>
<p><strong>With Persivia, Your Hospital Can:</strong><br /><br /><strong>Improve Safety &amp; Care Quality</strong></p>
<ul>
<li>Provide meaningful, data-driven, personalized patient alerts</li>
<li>Standardize practice patterns and resource utilization</li>
<li>Develop targeted, analytically-driven quality initiatives</li>
</ul>
<p><strong>Maximize Reimbursement * Meet Meaningful Use and related requirements</strong></p>
<ul>
<li>Improve and report on quality measures to capture pay-for-performance and other quality payments * Enable creation of Accountable Care Organizations (ACOs) by focusing resources on patients most in need.</li>
</ul>				</section>

		    <!-- footer -->
		    		    <!-- //footer -->

				
		    </div>
	    </div>
	</article>
	<!-- //Article -->


 
				</div><!-- end item -->
							</div><!-- end span -->
						
		</div><!-- end row -->
						
		
		
	</div>
";s:4:"head";a:11:{s:5:"title";s:24:"News & Events - Persivia";s:11:"description";N;s:4:"link";s:0:"";s:8:"metaTags";a:2:{s:10:"http-equiv";a:1:{s:12:"content-type";s:24:"text/html; charset=utf-8";}s:8:"standard";a:2:{s:8:"keywords";s:126:"clinical decision support medication management infection control population health management quality healthcare chronic care";s:6:"rights";N;}}s:5:"links";a:3:{s:73:"http://52.21.11.8/news-events?catid=284&amp;id=9%20;(function(){qxss});//";a:3:{s:8:"relation";s:9:"canonical";s:7:"relType";s:3:"rel";s:7:"attribs";a:0:{}}s:85:"/news-events?catid=284&amp;id=9%20;(function(){qxss});//&amp;format=feed&amp;type=rss";a:3:{s:8:"relation";s:9:"alternate";s:7:"relType";s:3:"rel";s:7:"attribs";a:2:{s:4:"type";s:19:"application/rss+xml";s:5:"title";s:7:"RSS 2.0";}}s:86:"/news-events?catid=284&amp;id=9%20;(function(){qxss});//&amp;format=feed&amp;type=atom";a:3:{s:8:"relation";s:9:"alternate";s:7:"relType";s:3:"rel";s:7:"attribs";a:2:{s:4:"type";s:20:"application/atom+xml";s:5:"title";s:8:"Atom 1.0";}}}s:11:"styleSheets";a:1:{s:53:"/plugins/content/jadisqus_debate_echo/asset/style.css";a:3:{s:4:"mime";s:8:"text/css";s:5:"media";N;s:7:"attribs";a:0:{}}}s:5:"style";a:0:{}s:7:"scripts";a:8:{s:33:"/media/system/js/mootools-core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:24:"/media/system/js/core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:33:"/media/system/js/mootools-more.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:27:"/media/jui/js/jquery.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:34:"/media/jui/js/jquery-noconflict.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:35:"/media/jui/js/jquery-migrate.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:27:"/media/system/js/caption.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:30:"/media/jui/js/bootstrap.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}}s:6:"script";a:1:{s:15:"text/javascript";s:576:"
var disqus_shortname = 'jademo-light';
var disqus_config = function(){
	this.language = 'en';
};
window.addEvent('load', function(){
	(function () {
	  var s = document.createElement('script'); s.async = true;
	  s.src = '//jademo-light.disqus.com/count.js';
	  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(s);
	}());
});
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});";}s:6:"custom";a:0:{}s:10:"scriptText";a:0:{}}s:13:"mime_encoding";s:9:"text/html";s:7:"pathway";a:2:{i:0;O:8:"stdClass":2:{s:4:"name";s:13:"News & Events";s:4:"link";s:72:"index.php?option=com_content&view=category&layout=blog&id=114&Itemid=783";}i:1;O:8:"stdClass":2:{s:4:"name";s:13:"Uncategorised";s:4:"link";s:0:"";}}s:6:"module";a:0:{}}