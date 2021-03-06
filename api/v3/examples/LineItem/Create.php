<?php
/**
 * Test Generated example of using line_item create API.
 *
 * @return array
 *   API result array
 */
function line_item_create_example() {
  $params = array(
    'price_field_value_id' => 1,
    'price_field_id' => 1,
    'entity_table' => 'civicrm_contribution',
    'entity_id' => 1,
    'qty' => 1,
    'unit_price' => 50,
    'line_total' => 50,
    'debug' => 1,
  );

  try{
    $result = civicrm_api3('line_item', 'create', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'error' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function line_item_create_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 2,
    'values' => array(
      '2' => array(
        'id' => '2',
        'entity_table' => 'civicrm_contribution',
        'entity_id' => '1',
        'contribution_id' => '',
        'price_field_id' => '1',
        'label' => 'line item',
        'qty' => '1',
        'unit_price' => '50',
        'line_total' => '50',
        'participant_count' => '',
        'price_field_value_id' => '1',
        'financial_type_id' => '',
        'deductible_amount' => '',
        'tax_amount' => '',
      ),
    ),
  );

  return $expectedResult;
}

/**
* This example has been generated from the API test suite.
* The test that created it is called
* testCreateLineItem
* and can be found in
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/LineItemTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
