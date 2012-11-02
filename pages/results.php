<section id="results">

	<?php
	require 'libraries/Polls.php';

	$address = $_GET['address'];
	$polls = new Polls();


	$result = $polls->locate($address);

	if ($result['status'] != 'success') :
		$errors = array(
			'noStreetSegmentFound' => 'The API currently has no information about what electoral precinct and/or district this address belongs to. It may be that we are still sourcing/processing new data, or that there are no voters who have registered to vote at this address.',
			'addressUnparseable' => 'The requested address is not formatted correctly or cannot be geocoded (i.e. the Google Maps API does not know anything about this address).',
			'noAddressParameter' => 'No address was provided.',
			'multipleStreetSegmentsFound' => 'The API cannot find information for the specified address, but it has information about nearby addresses. The user should contact their election official for more information.',
			'electionOver' => 'The requested election is over. API results for the election are no longer available. Make an electionQuery to find an id for an upcoming election.',
			'electionUnknown' => 'The requested election id is invalid. Make an electionQuery to find a valid id.',
			'internalLookupFailure' => 'An unspecified error occurred processing the request.'
		);
	?>


	<div class="error"><?php echo $errors[$result['status']]; ?></div>

<?php else : ?>

	<h1>U.S. 2012 General Election on November 6</h1>

	<?php if (isset($result['pollingLocations'])) : foreach ($result['pollingLocations'] as $pollLocation) : ?>
		<div class="polling-location">
			<h2><?php echo $pollLocation['address']['locationName']; ?></h2>
			<address>
				<?php echo $pollLocation['address']['line1']; ?><br>
				<?php echo $pollLocation['address']['city']; ?><br>
				<?php echo $pollLocation['address']['state']; ?><br>
				<?php echo $pollLocation['address']['zip']; ?><br>
			</address>

			<div class="poll-hours" id="main-location">
				<h4><?php echo $pollLocation['pollingHours']; ?></h4>
			</div>
		</div>
	<?php endforeach; endif; ?>

<?php endif; ?>

</section>