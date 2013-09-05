  <div id="uconn-header-container">
    <div class="container">
      <div class="row-fluid">
        <div id="home-link-container" class="span8">
          <a id="home-link" href="http://uconn.edu/">
            <span id="wordmark" class="smoothing">UCONN</span>
            <span id="university-of-connecticut" class="smoothing">University of Connecticut</span>
          </a>
        </div>
        <div class="span4">
          <div id="button-container">
            <div class="button-row">
              <div class="button-cell">
                <a class="btn btn-primary" href="http://uconn.edu/search.php"><i class="icon-search"></i></a>
                <a class="btn btn-primary" href="http://uconn.edu/azindex.php"><span class="letter">A</span><span class="dash">-</span><span class="letter">Z</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>  
  </div>
  <div class="container" id="site-header">
    <div class="row-fluid">
      <div class="span9">
        <p id="super-title"><a href="http://communications.uconn.edu/"><?php echo variable_get('site_slogan'); ?></a></p>
        <h1 id="site-title"><a href="/"><?php echo variable_get('site_name'); ?></a></h1>        
      </div>
      <div class="span3 search-container">

        <?php echo render( module_invoke('search', 'block_view', 'search') );?>     

      </div>
    </div>
  </div>
