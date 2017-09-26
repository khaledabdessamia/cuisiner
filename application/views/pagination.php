<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
?>
<nav 
<?php
//if ($count <8) echo 'hidden';
?> aria-label="">
  
  <ul class="pagination justify-content-center p-5">
    <li class="page-item
    <?php
      if ($current_page == 0) echo ' disabled';
    ?>
    ">
      <a class="page-link" href="#">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item active">
      <span class="page-link">3</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>