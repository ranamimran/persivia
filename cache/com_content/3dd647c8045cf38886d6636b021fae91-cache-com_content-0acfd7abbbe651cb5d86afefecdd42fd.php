<?php die("Access Denied"); ?>#x#a:5:{s:4:"body";s:16292:"

<div class="item-page clearfix">


<!-- Article -->
<article itemscope itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />


<!-- Aside -->
<!-- //Aside -->




	

	

	
	
	<section class="article-content clearfix" itemprop="articleBody">
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

	
	
	
</article>
<!-- //Article -->


</div>";s:4:"head";a:11:{s:5:"title";s:29:"Revenue Calculator - Persivia";s:11:"description";N;s:4:"link";s:0:"";s:8:"metaTags";a:2:{s:10:"http-equiv";a:1:{s:12:"content-type";s:24:"text/html; charset=utf-8";}s:8:"standard";a:2:{s:8:"keywords";s:126:"clinical decision support medication management infection control population health management quality healthcare chronic care";s:6:"rights";N;}}s:5:"links";a:0:{}s:11:"styleSheets";a:1:{s:53:"/plugins/content/jadisqus_debate_echo/asset/style.css";a:3:{s:4:"mime";s:8:"text/css";s:5:"media";N;s:7:"attribs";a:0:{}}}s:5:"style";a:0:{}s:7:"scripts";a:8:{s:33:"/media/system/js/mootools-core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:24:"/media/system/js/core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:33:"/media/system/js/mootools-more.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:27:"/media/jui/js/jquery.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:34:"/media/jui/js/jquery-noconflict.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:35:"/media/jui/js/jquery-migrate.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:27:"/media/system/js/caption.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:30:"/media/jui/js/bootstrap.min.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}}s:6:"script";a:1:{s:15:"text/javascript";s:576:"
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
});";}s:6:"custom";a:0:{}s:10:"scriptText";a:0:{}}s:13:"mime_encoding";s:9:"text/html";s:7:"pathway";a:1:{i:0;O:8:"stdClass":2:{s:4:"name";s:18:"Revenue Calculator";s:4:"link";s:59:"index.php?option=com_content&view=article&id=282&Itemid=860";}}s:6:"module";a:0:{}}