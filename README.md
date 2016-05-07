# ci-wp-dates-helpers

dates helper for codeigniter 3x

copy to <code>application/helpers/</code>

call on <code>application/<b>autoload.php</b></code>

<code>$autoload['helper'] = array('wp_dates');</code>

or in controller

<code>$this->load->helper('wp_dates');</code>

<h3>Use</h3>

  $date = date('2016-04-01');
  
  echo wp_dates($date);
  
  // output
  April 01, 2016
