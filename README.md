# ci-wp-dates-helpers

dates helper for codeigniter 3x

copy to <code>application/helpers/</code>

call on <code>application/<b>autoload.php</b></code>

<code>$autoload['helper'] = array('wp_dates');</code>

or in controller

<code>$this->load->helper('wp_dates');</code>

<h3>Use</h3>

  <code>$date = "2016-04-01";</code>
  
  <code>echo wp_dates($date);</code>
  
  or
  
  <code>echo wp_dates(date('Y-m-d'));</code>
  
  // output
  April 01, 2016
