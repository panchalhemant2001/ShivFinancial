<style>
tr {height:40px;}
</style>

<form>
<h1>Get a Quote</h1>

<table width="500px" style="margin-left:35px;">

<tr>
<th style="text-align:left;">Date of Birth</th>
<td><input type="date" name="dob"></td>
</tr>


<tr>
<th  style="text-align:left;">Gender</th>
<td>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
</td>
</tr>

<tr>
<th style="text-align:left;">Health Condition</th>
<td>
<input type="radio" name="healthcondition" value="good">Good
<input type="radio" name="healthcondition" value="excellent">Excellent
</td>
</tr>


<tr>
<th style="text-align:left;">Have you ever used or smoked tobacco, nicotine or related products in the past 12 months?</th>
<td>
<input type="radio" name="smoke" value="yes">Yes
<input type="radio" name="smoke" value="no">No
</td>
</tr>


<tr>
<th style="text-align:left;">Select Coverage Amount</th>
<td>
<select name="coverageamt">
<option value="25000" selected>$25000</option>
<option value="50000">$50000</option>
<option value="100000">$100000</option>
<option value="100000">$200000</option>
<option value="100000">$300000</option>
<option value="100000">$400000</option>
<option value="100000">$500000</option>
<option value="100000">$750000</option>
<option value="100000">$1000000</option>
<option value="100000">$2000000</option>
</select>
</td>
</tr>


<tr>
<th style="text-align:left;">Select a coverage type</th>
<td>
<select name="coveragetype">
<option value="wholelife" selected>Whole Life Insurance</option>
<option value="termlife">Term Life Insurance</option>
<option value="disability">Disability Insurance</option>
<option value="critical">Critical Illness</option>
<option value="supervisa">Super Visa</option>
</select>
</td>
</tr>


<tr>
<th style="text-align:left;">Select Payment Schedule</th>
<td>
<select name="paymentsch">
<option value="wholelife" selected>Annual</option>
<option value="termlife">Semi-annual</option>
<option value="disability">Monthly</option>
</select>
</td>
</tr>


<tr>
<th style="text-align:left;">First Name</th>
<td></td>
</tr>


<tr>
<th style="text-align:left;">Last Name</th>
<td></td>
</tr>


<tr>
<th style="text-align:left;">Email</th>
<td></td>
</tr>

<tr>
<th style="text-align:left;">Phone</th>
<td></td>
</tr>
</table>
</form>