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
        <link rel="stylesheet" href="../assets/css/wired.docs.min.css"> 

        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="../assets/plugins/chosen/css/chosen.min.css">
        <link rel="stylesheet" href="../assets/plugins/font-awesome/font-awesome.min.css"> 
        <link rel="stylesheet" href="../assets/plugins/highlight/highlight.min.css"> 
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

                    <?php 
                    include "components/grid.html";
                    include "components/helpers.html";
                    include "components/buttons.html"; 
                    ?>

                    <section id="forms" class="pd-t-30 pd-b-30">
                      <h3 class="text-uppercase">Forms</h3>
                      <hr>
                      
                      <h4 id="checkbox-controls" class="pd-t-30">Checkbox controls</h4>
                      <p>Get rid of native look n&apos; feel with our very own custom checkboxes written purely in CSS. These are retina compatible and available in all Bootstrap&apos;s contextual classes (ex: <code class="nohighlight">.checkbox-primary</code>)</p>

<div class="wd-example"> 
    <div class="example">
      <h5 class="mg-b-15">Example</h5>
      <div class="checkbox checkbox-default">
            <input type="checkbox" checked="checked" value="1" id="checkbox1">
            <label for="checkbox1">Keep Me Signed in</label>
        </div>

        <div class="checkbox checkbox-success  ">
            <input type="checkbox" checked="checked" value="1" id="checkbox2">
            <label for="checkbox2">I agree</label>
        </div>

        <div class="checkbox checkbox-primary">
            <input type="checkbox" checked="checked" value="1" id="checkbox3">
            <label for="checkbox3">Mark</label>
        </div>

        <div class="checkbox checkbox-info">
            <input type="checkbox" checked="checked" value="1" id="checkbox4">
            <label for="checkbox4">Steve Jobs</label>
        </div>

        <div class="checkbox checkbox-warning">
            <input type="checkbox" checked="checked" value="1" id="checkbox5">
            <label for="checkbox5">Action</label>
        </div>

        <div class="checkbox checkbox-danger">
            <input type="checkbox" checked="checked" value="1" id="checkbox6">
            <label for="checkbox6">Mark as read</label>
        </div>
  </div>
<pre>
<code class="html">&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-default&quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox1&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox1&quot;</span>&gt;Keep Me Signed <span class="hljs-keyword">in</span>&lt;/label&gt;
&lt;/div&gt;

&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-success  &quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox2&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox2&quot;</span>&gt;I agree&lt;/label&gt;
&lt;/div&gt;

&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-primary&quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox3&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox3&quot;</span>&gt;Mark&lt;/label&gt;
&lt;/div&gt;

&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-info&quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox4&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox4&quot;</span>&gt;Steve Jobs&lt;/label&gt;
&lt;/div&gt;

&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-warning&quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox5&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox5&quot;</span>&gt;Action&lt;/label&gt;
&lt;/div&gt;

&lt;<span class="hljs-tag">div</span> class=<span class="hljs-string">&quot;checkbox check-danger&quot;</span>&gt;
    &lt;<span class="hljs-tag">input</span> type=<span class="hljs-string">&quot;checkbox&quot;</span> checked=<span class="hljs-string">&quot;checked&quot;</span> value=<span class="hljs-string">&quot;1&quot;</span> id=<span class="hljs-string">&quot;checkbox6&quot;</span>&gt;
    &lt;<span class="hljs-tag">label</span> <span class="hljs-keyword">for</span>=<span class="hljs-string">&quot;checkbox6&quot;</span>&gt;Mark as read&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
</div>
<br>  
                    <h4>State options</h4>
                    <p>These act the same way as normal HTML check boxes. Here are some states that</p>   

<div class="wd-example"> 
    <div class="example">
      <h5 class="mg-b-15">Example</h5>
      <div class="checkbox checkbox-success">
          <input type="checkbox" disabled="disabled" value="check1" name="check" id="check1">
          <label for="check1">Checkbox No. 1</label>
      </div>
      <div class="checkbox checkbox-success">
          <input type="checkbox" disabled="disabled" checked="checked" value="check2" name="check" id="check2">
          <label for="check2">Checkbox No. 2</label>
      </div>
  </div>
<pre>
<code class="html">
&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;checkbox checkbox-success&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;checkbox&quot;</span> <span class="hljs-variable">disabled=</span><span class="hljs-string">&quot;disabled&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;check1&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;check&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;check1&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;check1&quot;</span>&gt;Checkbox No. <span class="hljs-number">1</span>&lt;/label&gt;
&lt;/div&gt;
&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;checkbox checkbox-success&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;checkbox&quot;</span> <span class="hljs-variable">disabled=</span><span class="hljs-string">&quot;disabled&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;check2&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;check&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;check2&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;check2&quot;</span>&gt;Checkbox No. <span class="hljs-number">2</span>&lt;/label&gt;
&lt;/div&gt;
</code>
</pre>
</div>
<br>         
                <h4 id="toggle-controls" class="pd-t-15">Toggle controls</h4>
                <p>Get rid of native look n&apos; feel with our very own custom radio buttons written purely in CSS. These are retina compatible and available in all Bootstrap&apos;s contextual classes (ex: <code class="nohighlight">.check-primary</code>)</p>

<div class="wd-example"> 
    <div class="example">
      <h5 class="mg-b-15">Example</h5>
      <div class="radio radio-default">
          <input type="radio" checked="checked" value="yes" name="radio1" id="radio1Yes">
          <label for="radio1Yes">Agree</label>
          <input type="radio" value="no" name="radio1" id="radio1No">
          <label for="radio1No">Disagree</label>
      </div>

      <div class="radio radio-success">
          <input type="radio" checked="checked" value="yes" name="radio2" id="radio2Yes">
          <label for="radio2Yes">Male</label>
          <input type="radio" value="no" name="radio2" id="radio2No">
          <label for="radio2No">Female</label>
      </div>

      <div class="radio radio-primary">
          <input type="radio" checked="checked" value="yes" name="radio3" id="radio3Yes">
          <label for="radio3Yes">High</label>
          <input type="radio" value="no" name="radio3" id="radio3No">
          <label for="radio3No">Low</label>
      </div>

      <div class="radio radio-info">
          <input type="radio" checked="checked" value="yes" name="radio4" id="radio4Yes">
          <label for="radio4Yes">HTML</label>
          <input type="radio" value="no" name="radio4" id="radio4No">
          <label for="radio4No">JS</label>
      </div>

      <div class="radio radio-warning">
          <input type="radio" checked="checked" value="yes" name="radio5" id="radio5Yes">
          <label for="radio5Yes">Chrome</label>
          <input type="radio" value="no" name="radio5" id="radio5No">
          <label for="radio5No">Firefox</label>
      </div>

      <div class="radio radio-danger">
          <input type="radio" checked="checked" value="yes" name="radio6" id="radio6Yes">
          <label for="radio6Yes">iOS</label>
          <input type="radio" value="no" name="radio6" id="radio6No">
          <label for="radio6No">Android</label>
      </div>
  </div>
<pre>
<code class="html">&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-default&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio1&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio1Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio1Yes&quot;</span>&gt;Agree&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio1&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio1No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio1No&quot;</span>&gt;Disagree&lt;/label&gt;
&lt;/div&gt;

&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-success&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio2&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio2Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio2Yes&quot;</span>&gt;Male&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio2&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio2No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio2No&quot;</span>&gt;Female&lt;/label&gt;
&lt;/div&gt;

&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-primary&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio3&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio3Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio3Yes&quot;</span>&gt;High&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio3&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio3No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio3No&quot;</span>&gt;Low&lt;/label&gt;
&lt;/div&gt;

&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-info&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio4&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio4Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio4Yes&quot;</span>&gt;HTML&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio4&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio4No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio4No&quot;</span>&gt;JS&lt;/label&gt;
&lt;/div&gt;

&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-warning&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio5&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio5Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio5Yes&quot;</span>&gt;Chrome&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio5&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio5No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio5No&quot;</span>&gt;Firefox&lt;/label&gt;
&lt;/div&gt;

&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-danger&quot;</span>&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;yes&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio6&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio6Yes&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio6Yes&quot;</span>&gt;iOS&lt;/label&gt;
    &lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;no&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;radio6&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;radio6No&quot;</span>&gt;
    &lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;radio6No&quot;</span>&gt;Android&lt;/label&gt;
&lt;/div&gt;</code>
</pre>
</div>
<br> 

              <h4>State options</h4>
              <p>These act the same way as normal HTML radio boxes. Here are some states that</p>   

                <div class="wd-example"> 
                    <div class="example">
                      <h5 class="mg-b-15">Example</h5>
                      <div class="radio radio-primary">
                        <input type="radio" disabled="disabled" value="Disabled" name="Disabled" id="Disabled">
                        <label for="Disabled">Disabled</label>
                        <input type="radio" disabled="disabled" checked="checked" value="ADisabled" name="ADisabled" id="ADisabled">
                        <label for="ADisabled">Disabled</label>
                    </div>
                  </div>
<pre>
<code class="html">&lt;div <span class="hljs-variable">class=</span><span class="hljs-string">&quot;radio radio-primary&quot;</span>&gt;
&lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">disabled=</span><span class="hljs-string">&quot;disabled&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;Disabled&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;Disabled&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;Disabled&quot;</span>&gt;
&lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;Disabled&quot;</span>&gt;Disabled&lt;/label&gt;
&lt;input <span class="hljs-variable">type=</span><span class="hljs-string">&quot;radio&quot;</span> <span class="hljs-variable">disabled=</span><span class="hljs-string">&quot;disabled&quot;</span> <span class="hljs-variable">checked=</span><span class="hljs-string">&quot;checked&quot;</span> <span class="hljs-variable">value=</span><span class="hljs-string">&quot;ADisabled&quot;</span> <span class="hljs-variable">name=</span><span class="hljs-string">&quot;ADisabled&quot;</span> <span class="hljs-variable">id=</span><span class="hljs-string">&quot;ADisabled&quot;</span>&gt;
&lt;label <span class="hljs-variable">for=</span><span class="hljs-string">&quot;ADisabled&quot;</span>&gt;Disabled&lt;/label&gt;
&lt;/div&gt;</code>
</pre> 
                </div>
                <br>  

                <h4 id="switch-controls" class="pd-t-30">Switch controls</h4>
                <p>Turn your checkboxes into IOS 7 style switches.</p>

<div class="wd-example"> 
  <div class="example"> 
    <h5 class="mg-b-15">Example</h5>
    <div class="switch">
        <input type="checkbox" checked value="switch" name="switch" id="switch1">
        <label for="switch1"></label>
    </div>

    <div class="switch switch-primary">
        <input type="checkbox" checked value="switch" name="switch" id="switch2">
        <label for="switch2"></label>
    </div>
 
     <div class="switch switch-success">
        <input type="checkbox" checked value="switch" name="switch" id="switch3">
        <label for="switch3"></label>
    </div>

     <div class="switch switch-info">
        <input type="checkbox" checked value="switch" name="switch" id="switch4">
        <label for="switch4"></label>
    </div>

     <div class="switch switch-warning">
        <input type="checkbox" checked value="switch" name="switch" id="switch5">
        <label for="switch5"></label>
    </div>
 
     <div class="switch switch-danger">
        <input type="checkbox" checked value="switch" name="switch" id="switch6">
        <label for="switch6"></label>
    </div>
 
    <br><br>

    <div class="switch">
        <input type="checkbox" checked value="switch" name="switch" id="switch7">
        <label for="switch7"></label> This is a default switch 
    </div><br>

    <div class="switch switch-primary">
        <input type="checkbox" checked value="switch" name="switch" id="switch8">
        <label for="switch8"></label> This is a primary switch
    </div><br>
 
     <div class="switch switch-success">
        <input type="checkbox" checked value="switch" name="switch" id="switch9">
        <label for="switch9"></label> This is a success switch 
    </div><br>

     <div class="switch switch-info">
        <input type="checkbox" checked value="switch" name="switch" id="switch10">
        <label for="switch10"></label> This is a info switch
    </div><br>

     <div class="switch switch-warning">
        <input type="checkbox" checked value="switch" name="switch" id="switch11">
        <label for="switch11"></label> This is a warning switch
    </div><br>

     <div class="switch switch-danger">
        <input type="checkbox" checked value="switch" name="switch" id="switch12">
        <label for="switch12"></label> This is a danger switch
    </div>
  </div>
</div>
<pre>
<code class="html">

</code>
</pre>
<br>

                <h4 id="datepicker" class="pd-t-30">Datepicker</h4>
                <p>These are powered by <a href="http://eternicode.github.io/bootstrap-datepicker" target="_blank">Datepicker for Bootstrap jQuery</a> plugin. Follow these steps to initialize a datepicker in your page</p>

                <div class="alert alert-info">
                    <p>Please refer to <a href="http://eternicode.github.io/bootstrap-datepicker" target="_blank">Datepicker Documentation</a> to learn about plugin options</p>
                </div>
<br>
                <h5>Step one</h5>
                <p>Include the stylesheet <code class="nohighlight">bootstrap-datepicker.min.css</code> inside the <code class="nohighlight"><head></head></code>. </p>
<pre>
<code class="html">
  &lt;link <span class="hljs-variable">type=</span><span class="hljs-string">&quot;text/css&quot;</span> <span class="hljs-variable">rel=</span><span class="hljs-string">&quot;stylesheet&quot;</span> <span class="hljs-variable">href=</span><span class="hljs-string">&quot;assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css&quot;</span>&gt;
</code>
</pre>
<br>
                <h5>Step two</h5> 
                <p>Include the required javascript files inside the <code class="nohighlight">body</code> before core template script inclusions..</p>

<pre>
<code class="html">
  &lt;link <span class="hljs-variable">type=</span><span class="hljs-string">&quot;text/css&quot;</span> <span class="hljs-variable">rel=</span><span class="hljs-string">&quot;stylesheet&quot;</span> <span class="hljs-variable">href=</span><span class="hljs-string">&quot;assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js&quot;</span>&gt;
</code>
</pre>                
<br>
              
              <h5>Step three</h5> 
              <p>Add the markup.</p>

<pre>
<code class="html">
  &lt;div id=<span class="hljs-string">&quot;datepicker-component&quot;</span> <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;input-group&quot;</span>&gt;
    &lt;input <span class="hljs-class"><span class="hljs-keyword">type</span>=</span><span class="hljs-string">&quot;text&quot;</span> <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;form-control&quot;</span> placeholder=<span class="hljs-string">&quot;Datepicker&quot;</span> data-plugin=<span class="hljs-string">&quot;datepicker&quot;</span>&gt;
    &lt;span <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;input-group-addon bd-l-0&quot;</span>&gt;&lt;i <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;fa fa-calendar&quot;</span>&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
<br>
            <h5>Step four</h5> 
            <p>Apply the plugin.</p>

<div class="wd-example">  
  <div class="example"> 
    <h5 class="mg-b-15">Example</h5>

      <div id="datepicker-component" class="input-group">
        <input type="text" class="form-control" placeholder="Datepicker" data-plugin="datepicker"><span class="input-group-addon bd-l-0"><i class="fa fa-calendar"></i></span>
      </div>
  </div>
<pre>
<code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">script</span>&gt;</span><span class="javascript">
  $(<span class="hljs-built_in">document</span>).ready(<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">()</span> </span>{
      $(<span class="hljs-string">&apos;[data-plugin=&quot;datepicker&quot;]&apos;</span>).datepicker();
  });
</span><span class="hljs-tag">&lt;/<span class="hljs-title">script</span>&gt;</span></code>
</pre>
</div>

<h4 id="selectbox" class="pd-t-30">Selectbox</h4>
                <p>These are powered by <a href="https://harvesthq.github.io/chosen/" target="_blank">Chosen jQuery</a> plugin. Follow these steps to initialize a datepicker in your page</p>

                <div class="alert alert-info">
                    <p>Please refer to <a href="https://harvesthq.github.io/chosen/" target="_blank">Chosen Documentation</a> to learn about plugin options</p>
                </div>
<br>
                <h5>Step one</h5>
                <p>Include the stylesheet <code class="nohighlight">chosen.min.css</code> inside the <code class="nohighlight"><head></head></code>. </p>
<pre>
<code class="html">
  &lt;link <span class="hljs-variable">type=</span><span class="hljs-string">&quot;text/css&quot;</span> <span class="hljs-variable">rel=</span><span class="hljs-string">&quot;stylesheet&quot;</span> <span class="hljs-variable">href=</span><span class="hljs-string">&quot;assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css&quot;</span>&gt;
</code>
</pre>
<br>
                <h5>Step two</h5> 
                <p>Include the required javascript files inside the <code class="nohighlight">body</code> before core template script inclusions..</p>

<pre>
<code class="html">
  &lt;link <span class="hljs-variable">type=</span><span class="hljs-string">&quot;text/css&quot;</span> <span class="hljs-variable">rel=</span><span class="hljs-string">&quot;stylesheet&quot;</span> <span class="hljs-variable">href=</span><span class="hljs-string">&quot;assets/plugins/chosen/js/chosen.min.js&quot;</span>&gt;
</code>
</pre>                
<br>
              
              <h5>Step three</h5> 
              <p>Add the markup.</p>

<pre>
<code class="html">
  &lt;div id=<span class="hljs-string">&quot;datepicker-component&quot;</span> <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;input-group&quot;</span>&gt;
    &lt;input <span class="hljs-class"><span class="hljs-keyword">type</span>=</span><span class="hljs-string">&quot;text&quot;</span> <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;form-control&quot;</span> placeholder=<span class="hljs-string">&quot;Datepicker&quot;</span> data-plugin=<span class="hljs-string">&quot;datepicker&quot;</span>&gt;
    &lt;span <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;input-group-addon bd-l-0&quot;</span>&gt;&lt;i <span class="hljs-class"><span class="hljs-keyword">class</span>=</span><span class="hljs-string">&quot;fa fa-calendar&quot;</span>&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
<br> 
            <h5>Step four</h5> 
            <p>Apply the plugin.</p>

<div class="wd-example">  
  <div class="example"> 
    <h5 class="mg-b-15">Example</h5>

      <div class="form-group">
        <select class="form-control" data-plugin="selectbox">
          <option value=""></option>
          <option value="United States">United States</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        </select>
      </div>
  </div>
<pre>
<code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">script</span>&gt;</span><span class="javascript">
  $(<span class="hljs-built_in">document</span>).ready(<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">()</span> </span>{
      $(<span class="hljs-string">&apos;[data-plugin=&quot;selectbox&quot;]&apos;</span>).chosen();
  });
</span><span class="hljs-tag">&lt;/<span class="hljs-title">script</span>&gt;</span></code>
</pre>
</div>  
                </section>                  
                <!--/ #forms -->
                </div>  
                <div class="col-sm-3 hidden-xs">
                    <aside id="wd-docs-sidebar" class="wd-docs-sidebar bd-l bd-transparent affix"> 
                        <ul class="nav menu">
                            <li><a class="target fs-13 block" href="#introduction">Introduction</a></li>
                            <li><a class="target fs-13 block" href="#installation">Installation</a></li>
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
                                    <li><a class="target fs-13 block" href="#font-weights">Font Weights</a></li> 
                                    <li><a class="target fs-13 block" href="#font-face">Font Face</a></li> 
                                    <li><a class="target fs-13 block" href="#text-alignment">Text Alignment</a></li> 
                                    <li><a class="target fs-13 block" href="#float-alignment">Float Alignment</a></li> 
                                    <li><a class="target fs-13 block" href="#misc-classes">Misc Classes</a></li> 
                                </ul> 
                            </li>
                            <li><a class="target fs-13 block" href="#buttons">Buttons</a></li>
                            <li><a class="target fs-13 block" href="#forms">Forms</a>
                               <ul class="nav menu"> 
                                    <li><a class="target fs-13 block" href="#checkbox-controls">Checkbox</a></li>
                                    <li><a class="target fs-13 block" href="#toggle-controls">Toggle</a></li>
                                    <li><a class="target fs-13 block" href="#switch-controls">Switch</a></li>
                                    <li><a class="target fs-13 block" href="#datepicker">Datepicker</a></li>
                                    <li><a class="target fs-13 block" href="#selectbox">Selectbox</a></li>
                                </ul> 
                            </li>
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
        <script>window.jQuery || document.write('<script src="../assets/plugins/jquery/jquery.min.js"><\/script>')</script>
        <script src="../assets/plugins/modernizr/modernizr.min.js"></script>
        <script src="../assets/plugins/pace/js/pace.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../assets/plugins/chosen/js/chosen.min.js"></script>

        <script src="../assets/js/plugins.js"></script>
    </body>
</html>
