# DezrezOne PHP Dependency
This PHP class is designed to be injected into PSR namespace projects and autoloaded using composer.

<h2>Installation</h2>

<pre>composer install lanos/drone</pre>

<h2>Usage</h2>

Initiate the class via:

<pre>$dezrez = new Dezrez($apikey, $agencyID);</pre>

Authentication is done via the API key. No need to exchange tokens.

The following functions can be called.

<pre>
// Carry out a property search
$dezrez->propertySearch($arrayOfCriteria)</pre>
<pre>
// Get a single property
$dezrez->propertyDetails($propertyID)</pre>
<pre>
// Change count as necesssary
$dezrez->featuredProperties(4, $rentalperiod, $branchlist)</pre>
<pre>
// Change count as necesssary
$dezrez->propertySearch(4, $rentalperiod, $branchlist)</pre>

The results are returned as XML and are loaded using simpleXML. Please ensure you have simpleXML enabled on your hosting.
<h3>If you want more functionality, why not upgrade to Rezi?</h3>

Have Fun!
