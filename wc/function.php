<?php 

  include('auth.php');

  function search_id($id, $arr){

    $get_entries_parameters = array(

         //session id
         'session' => $arr['session_id'],

         //The name of the module from which to retrieve records
         'module_name' => 'REF_Referral',

         //An array of SugarBean IDs
         'ids' => array(
             $id
         ),

         //Optional. The list of fields to be returned in the results
         'select_fields' => array(
            'name',
         ),

         //A list of link names and the fields to be returned for each link name
         'link_name_to_fields_array' => array(
         ),
    );

    $get_entries_result = call("get_entries", $get_entries_parameters, $arr['url']);

    echo "<pre>";
    print_r($get_entries_result->entry_list[0]->name_value_list->name->value);
    echo "</pre>";
  }
  $val = search_id('ADEY7969', ['url' => $url, 'session_id' => $search_id]);
?>