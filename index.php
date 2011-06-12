<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Young Quach Enterprises LTD</title>
    <!--START CSS-->
    <link href="/css/global.css" rel="stylesheet" type="text/css" />
    <link href="/css/scrollable.css" rel="stylesheet" type="text/css" />
    <link href="/css/custom-theme/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <!--END CSS-->
    <!--START JS-->
    <script type="text/javascript" src="/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.12.custom.min.js"></script>
    <script type="text/javascript" src="/js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
    <script type="text/javascript">
      $(window).load(function(){
        $("#tabs").tabs({
          fx: {opacity: 'toggle'}
        });

        $("#slider").scrollable({speed:700,keyboard:false,circular:true}).autoscroll({
          interval: 5000
        });

        $("#inv_table").tablesorter({widgets: ['zebra']});
      });
    </script>
    <!--END JS-->
  </head>
  <body>
    <div id="wrapper">
		<div id="header"><img id="banner" src="/images/banner_white.png" alt="Young Quach Enterprises LTD" /></div>
      <div id="container">
        <div class="ui-tabs" id="tabs">
          <ul id="tabnav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="tabcontent ui-tabs-hide" id="home">
            <h2>Young Quach Enterprise LTD</h2>
            <h1>Asian Foods Importer.</h1>
            <!-- root element for scrollable -->
            <div class="scrollable shadow" id="slider">   
              <!-- root element for the items -->
              <div class="items">
                <div>
                  <img src="/images/photos/kiet2 005.jpg" alt="Young Quach Enterprises" />
                </div>
                <div>
                  <img src="/images/photos/kiet2 001.jpg" alt="Young Quach Enterprises" />
                </div>
                <div>
                  <img src="/images/photos/kiet2 140.jpg" alt="Young Quach Enterprises" />
                </div>
                <div>
                  <img src="/images/photos/kiet 008.jpg" alt="Young Quach Enterprises" />
                </div>
              </div>
            </div><!--slider-->
          </div>
          <div class="tabcontent ui-tabs-hide" id="about">
            <p>To</p>
            <img src="/images/about.jpg" class="shadow" alt="Young Quach" />
          </div>
          <div class="tabcontent ui-tabs-hide" id="product">
            <h3>Products</h3>
            <?php include("inventory.php"); ?>
            <table class="tablesorter" id="inv_table">
              <thead>
                <tr id="inv_head">
                  <th>Name</th>
                  <th>Brand</th>
                  <th>Size</th>
                  <th>Price</th>
                </tr>
              </thead>
              <?php
                for($i=0; $i<sizeof($inventory); $i++){
                  $json = json_decode($inventory[$i]);
                  echo ($i%2 == 0) ? '<tr class="even">' : '<tr class="odd">';
                  echo '<td class="inv_name">'.$json->{'name'}.'</td>';
                  echo '<td class="inv_brand">'.$json->{'brand'}.'</td>';
                  echo '<td class="inv_size">'.$json->{'size'}.'</td>';
                  echo '<td class="inv_price">$'.$json->{'price'}.'</td></tr>';
                }
              ?>
            </table>
          </div>
          <div class="tabcontent ui-tabs-hide" id="contact">
            <p>
              1259 Frances Street, Vancouver, B.C. Canada V6A 1Z4<br />
              Phone: (604) 255-6574 Fax: (604) 255-5239<br />
              Email: young@planeteer.com
            </p>
            <p>
              44 E69th Ave, Vancouver, B.C. Canada<br />
              Phone: (604) 255-6574 (604) 255-5239<br />
              Email: young@planeteer.com
            </p>
            <p>
              <img src="/images/contact.jpg" class="shadow" alt="Young Quach Enterprises" />
            </p>
          </div>
        </div><!--tabs-->
      </div><!--container-->
    </div><!--wrapper-->
  </body>
</html>