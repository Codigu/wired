<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wired | Beautifully Hand Crafted, Light Weight, Hardware Accelerated UI Framework on top of Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta content="" name="description">
        <meta content="" name="author">
        
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="images/ico/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/ico/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/ico/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/ico/152.png">
        <link rel="icon" type="image/x-icon" href="images/ico/favicon.png">
        
        <!-- Google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">

        <!-- Assets --> 
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap-select2.min.css">
        <link rel="stylesheet" href="../assets/css/highlight.min.css">
        <link rel="stylesheet" href="../assets/css/docs.css">

        <link rel="stylesheet" href="../dist/css/icons.min.css"> 
        <link rel="stylesheet" href="../dist/css/wired.min.css"> 
        
    </head>
    <body data-spy="scroll" data-target="#wd-docs-sidebar">    
 
    <header class="navbar navbar-inverse bg-menu navbar-static-top" id="top" role="banner">
      <div class="container bd-b bd-transparent">
        <div class="navbar-header"> 
          
          <a href="../" class="navbar-brand pd-y-10">
            <img src="../assets/images/logo-light.svg" width="90" alt="">
          </a>
        </div>
        <!--/ .navbar-header -->
    </div></header> 

    <div id="primary" class="content-area"> 
      <main id="main" class="site-main" role="main">

        <div class="container">
            <div class="row"> 
                <div class="col-sm-9">
                    <section id="introduction" class="pd-b-30">
                        <h2 class="text-center">Wired Documentation</h2>
                        <h5 class="text-center">Hand Crafted UI Framework on top of Bootstrap </h5>
                        <hr>

                        <h3>Introductions</h3>
                        <p><span class="font-heading">Wired</span> is an extension to <a href="http://getbootstrap.com/" target="_blank" class="bd-b bd-dashed bold">Bootstrap 3</a>, adding a number of features and components.</p>

                        <p>This documentation guide assumes you know the basic foundation of <span class="font-heading">Bootstrap</span> and its structure.</p>
                        <br> 
                        <h4>Ready to Go</h4>
                        <p>Production level usage using minified and gzipped files</p>
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td style="width:66%; height:30px" class="bg-danger text-white text-center fs-14 pd-t-5 pd-b-5">
                                        CSS
                                        <div class="fs-12">66KB</div>
                                    </td>
                                    <td style="width:10%; height:30px" class="bg-primary text-white text-center fs-14 pd-t-5 pd-b-5">JS
                                        <div class="fs-12">2Kb</div>
                                    </td>
                                    <td style="width:50%; height:30px" class="bg-info text-white text-center fs-14 pd-t-5 pd-b-5">Icons
                                        <div class="fs-12">48KB</div>
                                    </td>
                                </tr>
                            </tbody>
                       </table>
                    </section>
                    <!--/ #introduction -->

                    <section id="grid" class="pd-t-30 pd-b-30">
                        <h3 class="text-uppercase">Grid</h3>
                        <p class="fs-16">Bootstrap grid includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts</p>
                        <hr>
                        <ul class="list">
                            <li><code class="nohighlight">row</code> must be placed within a <code class="nohighlight">.container</code> (fixed-width) or <code class="nohighlight">.container-fluid</code> (full-width) for proper alignment and padding.</li>
                            <li>Use rows to create horizontal groups of columns. You must start with <code class="nohighlight">row</code></li>
                            <li>There are predefined classes of columns starting from 1 to 12, example <code class="nohighlight">col-md-1</code> to <code class="nohighlight">col-md-12</code></li>
                            <li>Each of these value represent a percentage of the screen, 1 being the smallest and 12 being 100%</li>
                            <li>You can create different grid pattern that finally forms 12</li>
                        </ul>

<div class="wd-example"> 
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <div class="pd-x-15">
            <div class="row show-grid">
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
              <div class="col-md-1">.col-md-1</div>
            </div>

            <div class="row show-grid">
              <div class="col-md-8">.col-md-8</div>
              <div class="col-md-4">.col-md-4</div>
            </div>

            <div class="row show-grid"> 
              <div class="col-md-4">.col-md-4</div> 
              <div class="col-md-4">.col-md-4</div>
              <div class="col-md-4">.col-md-4</div>
            </div>

            <div class="row show-grid">
              <div class="col-md-6">.col-md-6</div>
              <div class="col-md-6">.col-md-6</div>
            </div>
        </div>    
    </div>    
<pre>
<code class="html">
    <div class="row">
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
      <div class="col-md-1">.col-md-1</div>
    </div>

    <div class="row">
      <div class="col-md-8">.col-md-8</div>
      <div class="col-md-4">.col-md-4</div>
    </div>

    <div class="row"> 
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4">.col-md-4</div>
    </div>

    <div class="row">
      <div class="col-md-6">.col-md-6</div>
      <div class="col-md-6">.col-md-6</div>
    </div>
</code>
</pre>
</div>
                        
                        <br/>
                    <h4>Options</h4>
                    <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th>
                                Extra small devices
                                <small class="fs-12 hint">Phones (&lt;768px)</small>
                              </th>
                              <th>
                                Small devices
                                <small class="fs-12 hint">Tablets (≥768px)</small>
                              </th>
                              <th>
                                Medium devices
                                <small class="fs-12 hint">Desktops (≥992px)</small>
                              </th>
                              <th>
                                Large devices
                                <small class="fs-12 hint">Desktops (≥1200px)</small>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th class="text-nowrap" scope="row">Grid behavior</th>
                              <td>Horizontal at all times</td>
                              <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Container width</th>
                              <td>None (auto)</td>
                              <td>750px</td>
                              <td>970px</td>
                              <td>1170px</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Class prefix</th>
                              <td><code class="nohighlight">.col-xs-</code></td>
                              <td><code class="nohighlight">.col-sm-</code></td>
                              <td><code class="nohighlight">.col-md-</code></td>
                              <td><code class="nohighlight">.col-lg-</code></td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row"># of columns</th>
                              <td colspan="4">12</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Column width</th>
                              <td class="text-muted">Auto</td>
                              <td>~62px</td>
                              <td>~81px</td>
                              <td>~97px</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Gutter width</th>
                              <td colspan="4">30px (15px on each side of a column)</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Nestable</th>
                              <td colspan="4">Yes</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Offsets</th>
                              <td colspan="4">Yes</td>
                            </tr>
                            <tr> 
                              <th class="text-nowrap" scope="row">Column ordering</th>
                              <td colspan="4">Yes</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </section>
                    <!--/ #grid -->

                    <section id="helpers" class="pd-t-30 pd-b-30">
                        <h3 class="text-uppercase">Helpers</h3>
                        <p class="fs-16">Helper css classes allow you to build your custom layout without touching any CSS code</p>
                        <hr>
                        <p>These classes are generic helper classes predifined in the CSS of pages, here is quick view what they can do</p>
                        <ul class="list">
                            <li>Set margins - Available for all directions from 0 - 80 px stepping value 5px</li>
                            <li>Set padding - Available for all directions from 0 - 80 px stepping value 5px</li>
                            <li>Set border - Available for all sides, default pages border color</li>
                            <li>Border Radius - Option to set border radius, size sm / md / lg</li>
                        </ul>
                        
                        <!--/ Padding -->
                        <h4 id="margins" class="pd-t-30">Margins</h4>
                        <p>You can add this helper class to any element in your HTML code to set Margins</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( mg-*) </th>
                                    <th>Second Prefix(mg-t/b/l/r-*)</th>
                                    <th>Last Prefix(mg-t-$value)</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>mg for margin</td>
                                    <td>t : top, b : bottom, l : left, r : right</td>
                                    <td>5,10,15,20, ... 85</td>
                                </tr> 
                            </tbody>
                        </table>

                        
                        <p><code class="nohighlight">mg-0</code> or <code class="nohighlight">mg-none</code> is equivalent to <code class="nohighlight">margin: 0</code> </p>
                        <p><code class="nohighlight">mg-35</code> is equivalent to <code class="nohighlight">margin: 35px</code> </p>
                        <p><code class="nohighlight">mg-t-0</code> is equivalent to <code class="nohighlight">margin-top: 0</code> </p>
                        <p><code class="nohighlight">mg-t-10</code> is equivalent to <code class="nohighlight">margin-top: 10px</code> </p>
                        <p><code class="nohighlight">mg-b-15</code> is equivalent to <code class="nohighlight">margin-bottom: 15px</code> </p>
                        <p><code class="nohighlight">mg-l-5</code> is equivalent to <code class="nohighlight">margin-left: 5px</code> </p>
                        <p><code class="nohighlight">mg-r-65</code> is equivalent to <code class="nohighlight">margin-right: 65px</code> </p>
                        

                        <!--/ Padding -->
                        <h4 id="padding" class="pd-t-30">Padding</h4>
                        <p>You can add this helper class to any element in your HTML code to set Padding</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( pd-*) </th>
                                    <th>Second Prefix(pd-t/b/l/r-*)</th>
                                    <th>Last Prefix(pd-t-$value)</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>pd for padding</td>
                                    <td>t : top, b : bottom, l : left, r : right</td>
                                    <td>5,10,15,20, ... 85</td>
                                </tr> 
                            </tbody>
                        </table>

                        <p><code class="nohighlight">pd-0</code> or <code class="nohighlight">pd-none</code> is equivalent to <code class="nohighlight">padding: 0</code> </p>
                        <p><code class="nohighlight">pd-35</code> is equivalent to <code class="nohighlight">padding: 35px</code> </p>
                        <p><code class="nohighlight">pd-t-0</code> is equivalent to <code class="nohighlight">padding-top: 0</code> </p>
                        <p><code class="nohighlight">pd-t-10</code> is equivalent to <code class="nohighlight">padding-top: 10px</code> </p>
                        <p><code class="nohighlight">pd-b-15</code> is equivalent to <code class="nohighlight">padding-bottom: 15px</code> </p>
                        <p><code class="nohighlight">pd-l-5</code> is equivalent to <code class="nohighlight">padding-left: 5px</code> </p>
                        <p><code class="nohighlight">pd-r-65</code> is equivalent to <code class="nohighlight">padding-right: 65px</code> </p>
                    
                        <!--/ Border -->
                        <h4 id="border" class="pd-t-30">Border</h4>
                        <p>You can add this helper class to any element in your HTML code to set Border, border currently supports one pixel</p>
                        <div class="table-responsive ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( bd-*)</th>
                                    <th>Second Prefix(bd-t/b/l/r/a-*)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>bd for border</td>
                                    <td>t : top, b : bottom, l : left, r : right, a : all</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <br>

                        <h5>Border Color</h5>
                        <p>Select on variety of pre-defined border colors</p>
                        <p><code class="nohighlight">bd-transparent</code></p>
                        <p><code class="nohighlight">bd-transparent-white</code></p>
                        <p><code class="nohighlight">bd-gray</code></p>
                        <p><code class="nohighlight">bd-white</code></p>
                        <p><code class="nohighlight">bd-primary</code></p>
                        <p><code class="nohighlight">bd-success</code></p>
                        <p><code class="nohighlight">bd-info</code></p> 
                        <p><code class="nohighlight">bd-danger</code></p> 
                        <p><code class="nohighlight">bd-warning</code></p>
                        <br/>  

                        <h5>Border Style</h5>
                        <p><code class="nohighlight">b-dashed</code> -  change the border style to 'dashed'</p>
                        <p><code class="nohighlight">b-dotted</code> -  change the border style to 'dotted'</p>
                        <p><code class="nohighlight">b-thick-(a/t/b/l/r)</code> - change the border width to 2px</p>
                        <br>
<div class="wd-example">  
<div class="example"> 
    <h5 class="mg-b-15">Example</h5>  
    <div class="bd-b bd-primary pd-y-10">This block has a bottom border</div>
    <div class="bd-b bd-danger bd-dotted pd-y-10">This block has a dotted bottom border</div> 
    <div class="bd-b bd-primary bd-dashed pd-y-10">This block has a dashed bottom border</div> 
    <div class="bd-b bd-thick-b bd-primary bd-dashed pd-y-10">This block has a thick bottom border</div> 
</div> 
<pre> 
<code class="html"><div class="bd-b bd-primary">This block has a bottom border</div> 
<div class="bd-b bd-danger bd-dotted">This block has a dotted bottom border</div> 
<div class="bd-b bd-primary bd-dashed">This block has a dashed bottom border</div> 
<div class="bd-b bd-thick-b bd-primary bd-dashed pd-y-10">This block has a thick bottom border</div></code> 
</pre> 
</div>
                        
                       
                        <!--/ Border Radius -->
                        <h4 id="border-radius" class="pd-t-30">Border Radius</h4>
                        <p>Helper class to apply quick border radius</p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( bd-rd-*) </th>
                                    <th>Second Prefix(bd-t/b/l/r-rd-*)</th>
                                    <th>Last Prefix(bd-t-rd-*)</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>bd-rd for border radius</td>
                                    <td>t : top, b : bottom, l : left, r : right</td>
                                    <td>sm: small, md: medium, lg: large</td>
                                </tr> 
                            </tbody>
                        </table>
                        <br>

                        <p><code class="nohighlight">bd-rd-none</code> is equivalent to <code class="nohighlight">border-radius: 0</code></p>
                            <p><code class="nohighlight">bd-rd-sm</code> is equivalent to <code class="nohighlight">border-radius: 2px</code></p>
                            <p><code class="nohighlight">bd-rd-md</code> is equivalent to <code class="nohighlight">border-radius: 4px</code></p>
                            <p><code class="nohighlight">bd-rd-lg</code> is equivalent to <code class="nohighlight">border-radius: 6px</code></p>
                            <br/>
                            <p><code class="nohighlight">bd-t-l-sm</code> is equivalent to <code class="nohighlight">border-top-left-radius: 2px</code></p>
                            <p><code class="nohighlight">bd-t-r-md</code> is equivalent to <code class="nohighlight">border-top-right-radius: 4px</code></p>
                            <p><code class="nohighlight">bd-b-l-lg</code> is equivalent to <code class="nohighlight">border-bottom-left-radius: 6px</code></p>
                            <p><code class="nohighlight">bd-b-r-sm</code> is equivalent to <code class="nohighlight">border-bottom-right-radius: 2px</code></p>
                            <br>

<div class="wd-example">
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <div class="row pd-x-15">
            <div class="col-md-4"><div class="bg-primary bd-rd-sm"  style="height: 200px"></div></div>
            <div class="col-md-4"><div class="bg-primary bd-rd-md"  style="height: 200px"></div></div>
            <div class="col-md-4"><div class="bg-primary bd-rd-lg"  style="height: 200px"></div></div>
        </div>
    </div>
<pre>
<code class="html"><div class="bg-primary bd-rd-sm"></div>
<div class="bg-primary bd-rd-md"></div>
<div class="bg-primary bd-rd-lg"></div></code>
</pre>

</div>

                        <!--/ Box Shadow -->
                        <h4 id="box-shadow" class="pd-t-30">Box Shadow</h4>
                        <p>Helper class to apply quick border radius</p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( bx-sd-*) </th>
                                    <th>Last Prefix(bx-sd-*)</th> 
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>bx-sd for box shadow</td>
                                    <td>sm: small, md: medium, lg: large</td>
                                </tr> 
                            </tbody>
                        </table>
                        <br>

<div class="wd-example">
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <div class="row pd-x-15">
            <div class="col-md-4"><div class="bx-sd-sm bd-a"  style="height: 200px"></div></div>
            <div class="col-md-4"><div class="bx-sd-md bd-a"  style="height: 200px"></div></div>
            <div class="col-md-4"><div class="bx-sd-lg bd-a"  style="height: 200px"></div></div>
        </div>
    </div>
<pre>
<code class="html"><div class="bx-sd-sm bd-a"></div>
<div class="bx-sd-md bd-a"></div>
<div class="bx-sd-lg bd-a"></div></code>
</pre>
</div>

                        <!--/ Contextual Colors -->
                        <h4 id="contextual-colors" class="pd-t-30">Contextual Colors </h4>
                        <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>

<div class="wd-example">
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="text-gray">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-dark">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-darker">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="text-darkest">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-link">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="text-cyan">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-blue">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-darkblue">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="text-navy">Etiam porta sem malesuada magna mollis euismod.</p>
    </div>
<pre>
<code class="html">
<p class="text-primary">...</p>
<p class="text-success">...</p>
<p class="text-info">....</p>
<p class="text-warning">..</p>
<p class="text-danger">....</p>
<p class="text-gray">..</p>
<p class="text-dark">....</p>
<p class="text-darker">......</p>
<p class="text-darkest">....</p>
<p class="text-link">..</p>
<p class="text-cyan">......</p>
<p class="text-blue">..</p>
<p class="text-darkblue">....</p>
<p class="text-navy">....</p>
</code>
</pre>
</div>


                        <!--/ Contextual Backgrounds -->
                        <h4 id="contextual-bg" class="pd-t-30">Contextual Backgrounds </h4>
                        <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>
<div class="wd-example">
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <p class="bg-primary pd-15">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="bg-success pd-15">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="bg-info pd-15">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="bg-warning pd-15">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="bg-danger pd-15">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="bg-gray pd-15">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="bg-dark pd-15">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="bg-darker pd-15">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="bg-darkest pd-15">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="bg-link pd-15">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="bg-cyan pd-15">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="bg-blue pd-15">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="bg-darkblue pd-15">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="bg-navy pd-15">Etiam porta sem malesuada magna mollis euismod.</p>
    </div>
<pre>
<code class="html">
<p class="bg-primary">...</p>
<p class="bg-success">...</p>
<p class="bg-info">....</p>
<p class="bg-warning">..</p>
<p class="bg-danger">....</p>
<p class="bg-gray">..</p>
<p class="bg-dark">....</p>
<p class="bg-darker">......</p>
<p class="bg-darkest">....</p>
<p class="bg-link">..</p>
<p class="bg-cyan">......</p>
<p class="bg-blue">..</p>
<p class="bg-darkblue">....</p>
<p class="bg-navy">....</p>
</code>
</pre>
</div>

                    <!--/ Font Size -->
                        <h4 id="font-size" class="pd-t-30">Font Size </h4>
                        <p>You can variety of predefined font sizes</p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Prefix ( fs-*) </th>
                                    <th>Second Prefix(fs-sm/md/lg-*)</th>
                                    <th>Last Prefix(fs-sm-$value)</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>bd-rd for border radius</td>
                                    <td>sm: small, md: medium, lg: large</td>
                                    <td>10,11,12,...,24,30,36</td>
                                </tr> 
                            </tbody>
                        </table>
                        <br>

                        <h5>Options</h5>
                        <p>See how aspects of the font size work across multiple devices with a handy table.</p>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th>
                                Small devices
                                <small class="fs-12 hint">Tablets (≥768px)</small>
                              </th>
                              <th>
                                Medium devices
                                <small class="fs-12 hint">Desktops (≥992px)</small>
                              </th>
                              <th>
                                Large devices
                                <small class="fs-12 hint">Desktops (≥1200px)</small>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th class="text-nowrap" scope="row">Class prefix</th>
                              <td><code class="nohighlight">.fs-sm-</code></td>
                              <td><code class="nohighlight">.fs-md-</code></td>
                              <td><code class="nohighlight">.fs-lg-</code></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

<div class="wd-example">
    <div class="example">
        <h5 class="mg-b-15">Example</h5>
        <p class="fs-10">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="fs-16">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="fs-18">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="fs-24">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="fs-30">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="fs-36">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <br/>
        <p class="fs-14 fs-md-30">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="fs-30 fs-sm-18">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    </div>

<pre>
<code><p class="fs-10">....</p>
<p class="fs-16">....</p>
<p class="fs-18">....</p>
<p class="fs-24">..</p>
<p class="fs-30">....</p>
<p class="fs-36">..</p>
<p class="fs-14 fs-md-30">....</p>
<p class="fs-30 fs-sm-18">...</p></code>
</pre>
</div>

                    </section>
                    <!--/ #helper -->
 

                </div>  
                <div class="col-sm-3 hidden-xs">
                    <aside id="wd-docs-sidebar" class="wd-docs-sidebar bd-l bd-transparent affix"> 
                        <ul class="nav menu">
                            <li><a class="target fs-13 block" href="#introduction">Introduction</a></li>
                            <li><a class="target fs-13 block" href="#grid">Grid</a></li>
                            <li>
                                <a class="target fs-13 block" href="#helpers">Helpers</a>
                                <ul class="nav menu">
                                    <li><a class="target fs-13 block" href="#margins">Margins</a></li>
                                    <li><a class="target fs-13 block" href="#padding">Paddings</a></li>
                                    <li><a class="target fs-13 block" href="#border">Border</a></li>
                                    <li><a class="target fs-13 block" href="#border-radius">Border Radius</a></li> 
                                    <li><a class="target fs-13 block" href="#box-shadow">Box Shadow</a></li> 
                                    <li><a class="target fs-13 block" href="#contextual-colors">Contextual Colors</a></li> 
                                    <li><a class="target fs-13 block" href="#contextual-bg">Contextual Backgrounds</a></li> 
                                    <li><a class="target fs-13 block" href="#font-size">Font Size</a></li> 
                                </ul> 
                            </li>
                            <li><a class="target fs-13 block" href="#buttons">Buttons</a></li>
                            <li><a class="target fs-13 block" href="#button-group">Button Group</a></li>
                            <li><a class="target fs-13 block" href="#button-dropdown">Button Dropdown</a></li>
                            <li><a class="target fs-13 block" href="#forms">Forms</a></li>
                            <li><a class="target fs-13 block" href="#input-group">Input Group</a></li>
                            <li><a class="target fs-13 block" href="#dropdowns">Dropdowns</a></li>
                            <li><a class="target fs-13 block" href="#breadcrumb">Breadcrumb</a></li>
                            <li><a class="target fs-13 block" href="#pagination">Pagination</a></li>
                            <li><a class="target fs-13 block" href="#progress">Progress</a></li>
                        </ul>   
                    </aside>
                </div>
            </div>
        </div>
        
      </main>
    </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
        <script src="../assets/js/vendor/modernizr.min.js"></script>
        <script src="../assets/js/vendor/pace.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script src="../assets/js/vendor/bootstrap-datepicker.min.js"></script>
        <script src="../assets/js/vendor/bootstrap-select2.min.js"></script>

        <script src="../assets/js/plugins.js"></script>
    </body>
</html>
