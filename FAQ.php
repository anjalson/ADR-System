<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}
p{
  color: blue;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Frequently Asked Questions on ADR </h2>

<p style="text-align:center">ADVERSE DRUG REACTION PROFILE FREQUENTLY ASKED QUESTIONS:</p>
<button type="button" class="collapsible">What are the advantages of using the ADRe Profile?</button>
<div class="content">
  <p>The ADRe Profile ensures that patients’ health is reviewed against their medication plan to ensure there are no unnoticed  adverse reactions or preventable adverse events. Research has shown that by using this instrument benefits all patients  and enhances care is several different ways. For example, improved oral care to counter the dry mouth caused by mental health medicines, vision checks to detect any blurring of vision caused by some medicines, etc..</p>
</div>
<button type="button" class="collapsible">Are adverse drug reactions a serious problem?</button>
<div class="content">
  <p>Yes, preventable adverse drug reactions occur in approximately 8% of patients in the community, and can include potentially life-threatening problems, such as irregular heart rhythm. Adverse drug reactions are responsible for 5-8% of UK unplanned hospital admissions and cost the NHS £1 to 2.5 billion each year..</p>
</div>
<button type="button" class="collapsible">Nurses have a lot of paperwork, and some teams are resistant to extra paperwork. Isn’t this just another form to fill in?</button>
<div class="content">
  <p>ADRe brings together relevant information from several forms, such as records of vital signs, pain, eating and drinking, activities of daily living. The accompanying guidelines help to relate these to prescribed medicines. If the ADRe Profile is completed, several other forms may not be needed.</p>
</div>
<button type="button" class="collapsible">  How long does it take to complete the Profile with the patient?</button>
<div class="content">
  <p>10-25 minutes, including measuring vital signs..</p>
</div>
<button type="button" class="collapsible"> Isn’t all the information in other documents?</button>
<div class="content">
  <p>Some information is in other documents, but it isn’t always easy to find. It can take over an hour to locate the necessary information in patients’ notes, and prescribers do not always have this time.</p>
</div><button type="button" class="collapsible"> All mental health medicines are included in one profile. Why?</button>
<div class="content">
  <p>As there is considerable overlap of the adverse effects of these medicines it is essential all the information is recorded in one form.  The accompanying guidelines then indicate which medicines are likely to cause each problem. In practice, many of these medicines are co-prescribed, or one is substituted for another. </p>
</div><button type="button" class="collapsible">  Does ADRe provide a score?</button>
<div class="content">
  <p>No, each problem should be reviewed and considered on its own merit. There would be no reason to assume that multiple problems would be related.</p>
</div><button type="button" class="collapsible"> Checking patients for any adverse effects of prescribed medicines sounds an obvious thing to do</button>
<div class="content">
  <p>In practice, our research shows that taking time to use the ADRe Profiles demonstrates a considerable improvement to the quality of care that a patient will receive. We hope this will become routine practice.</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
