  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>deathdeath/libs/csv-to-json.php at master · hoylemd/deathdeath</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="NM+PORUOL4yqkjxG+idiu4O18RfvO3I40tWSu0P0FfU=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-2ce7b3fab9fbd9a0d67ce5e4f38373b7c1abbc19.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-f612489af1e1ee6e1cfb55a515bda8e19e3b510b.css" media="screen" rel="stylesheet" type="text/css" />
    
    


    <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-cda884a5a58f7a231c16c075e16bc5c1509f192b.js" type="text/javascript"></script>
    
    <script defer="defer" src="https://a248.e.akamai.net/assets.github.com/assets/github-24e061385eeaff0ed974ca8bcf1dfc4fd96ab293.js" type="text/javascript"></script>
    
    

      <link rel='permalink' href='/hoylemd/deathdeath/blob/34b31d00a359912d20c16470ebd0e868d003cca3/libs/csv-to-json.php'>
    <meta property="og:title" content="deathdeath"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/hoylemd/deathdeath"/>
    <meta property="og:image" content="https://a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-140.png?1329921026"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="death death and more death. death? death! Contribute to deathdeath development by creating an account on GitHub."/>

    <meta name="description" content="death death and more death. death? death! Contribute to deathdeath development by creating an account on GitHub." />

  <link href="https://github.com/hoylemd/deathdeath/commits/master.atom" rel="alternate" title="Recent Commits to deathdeath:master" type="application/atom+xml" />

  </head>


  <body class="logged_in page-blob windows vis-public env-production ">
    <div id="wrapper">

    
    
    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo" href="https://github.com/">
            <!--[if IE]>
            <img alt="GitHub" class="github-logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7.png?1329921026" />
            <img alt="GitHub" class="github-logo-hover" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7-hover.png?1329921026" />
            <![endif]-->
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1337118071" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1337118071" />
          </a>



              
    <div class="topsearch  ">
        <form accept-charset="UTF-8" action="/search" id="top_search_form" method="get">
  <a href="/search" class="advanced-search tooltipped downwards" title="Advanced Search"><span class="mini-icon mini-icon-advanced-search"></span></a>
  <div class="search placeholder-field js-placeholder-field">
    <input type="text" class="search my_repos_autocompleter" id="global-search-field" name="q" results="5" spellcheck="false" autocomplete="off" data-autocomplete="my-repos-autocomplete" placeholder="Search&hellip;" data-hotkey="s" />
    <div id="my-repos-autocomplete" class="autocomplete-results">
      <ul class="js-navigation-container"></ul>
    </div>
    <input type="submit" value="Search" class="button">
    <span class="mini-icon mini-icon-search-input"></span>
  </div>
  <input type="hidden" name="type" value="Everything" />
  <input type="hidden" name="repo" value="" />
  <input type="hidden" name="langOverride" value="" />
  <input type="hidden" name="start_value" value="1" />
</form>

      <ul class="top-nav">
          <li class="explore"><a href="https://github.com/explore">Explore</a></li>
          <li><a href="https://gist.github.com">Gist</a></li>
          <li><a href="/blog">Blog</a></li>
        <li><a href="http://help.github.com">Help</a></li>
      </ul>
    </div>


            


  <div id="userbox">
    <div id="user">
      <a href="https://github.com/rocky1138"><img height="20" src="https://secure.gravatar.com/avatar/ec385f3b0680c677aa6a611c90fdfa69?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="20" /></a>
      <a href="https://github.com/rocky1138" class="name">rocky1138</a>
    </div>
    <ul id="user-links">
      <li>
        <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a New Repo"><span class="mini-icon mini-icon-create"></span></a>
      </li>
      <li>
        <a href="/inbox/notifications" id="notifications" class="tooltipped downwards" title="Notifications">
          <span class="mini-icon mini-icon-notifications"></span>
          <span class="unread_count">22</span>
        </a>
      </li>
      <li>
        <a href="/settings/profile" id="account_settings"
          class="tooltipped downwards"
          title="Account Settings ">
          <span class="mini-icon mini-icon-account-settings"></span>
        </a>
      </li>
      <li>
          <a href="/logout" data-method="post" id="logout" class="tooltipped downwards" title="Sign Out">
            <span class="mini-icon mini-icon-logout"></span>
          </a>
      </li>
    </ul>
  </div>



          
        </div>
      </div>

      

            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="container hentry">
        <div class="pagehead repohead instapaper_ignore readability-menu">
        <div class="title-actions-bar">
          



              <ul class="pagehead-actions">

          <li class="nspr">
            <a href="/hoylemd/deathdeath/pull/new/master" class="minibutton btn-pull-request ">Pull Request</a>
          </li>


          <li class="js-toggler-container js-social-container watch-button-container ">
            <span class="watch-button"><a href="/hoylemd/deathdeath/toggle_watch" class="minibutton btn-watch js-toggler-target lighter" data-remote="true" data-method="post" rel="nofollow">Watch</a><a class="social-count js-social-count" href="/hoylemd/deathdeath/watchers">1</a></span>
            <span class="unwatch-button"><a href="/hoylemd/deathdeath/toggle_watch" class="minibutton btn-unwatch js-toggler-target lighter" data-remote="true" data-method="post" rel="nofollow">Unwatch</a><a class="social-count js-social-count" href="/hoylemd/deathdeath/watchers">1</a></span>
          </li>

              <li><a href="/hoylemd/deathdeath/fork" class="minibutton btn-fork js-toggler-target fork-button lighter" rel="nofollow" data-method="post">Fork</a><a href="/hoylemd/deathdeath/network" class="social-count">1</a>
              </li>

    </ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
            <span class="repo-label"><span>public</span></span>
            <span class="mega-icon mega-icon-public-repo"></span>
            <span class="author vcard">
<a href="/hoylemd" class="url fn" itemprop="url" rel="author">              <span itemprop="title">hoylemd</span>
              </a></span> /
            <strong><a href="/hoylemd/deathdeath" class="js-current-repository">deathdeath</a></strong>
          </h1>
        </div>

          

  <ul class="tabs">
    <li><a href="/hoylemd/deathdeath" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/hoylemd/deathdeath/network" highlight="repo_network">Network</a>
    <li><a href="/hoylemd/deathdeath/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/hoylemd/deathdeath/issues" highlight="repo_issues">Issues <span class='counter'>10</span></a></li>

      <li><a href="/hoylemd/deathdeath/wiki" highlight="repo_wiki">Wiki</a></li>

    <li><a href="/hoylemd/deathdeath/graphs" highlight="repo_graphsrepo_contributors">Graphs</a></li>

  </ul>
  
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/hoylemd/deathdeath/tree-list/34b31d00a359912d20c16470ebd0e868d003cca3"
      data-blob-url-prefix="/hoylemd/deathdeath/blob/34b31d00a359912d20c16470ebd0e868d003cca3"
    >

  <div class="breadcrumb">
    <span class="bold"><a href="/hoylemd/deathdeath">deathdeath</a></span> /
    <input class="tree-finder-input js-navigation-enable" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>


  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list js-navigation-container">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form accept-charset="UTF-8">
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        Go
      </button>
    </div>
  </form>
</div>


<div class="subnav-bar">

  <ul class="actions subnav">
    <li><a href="/hoylemd/deathdeath/tags" class="blank" highlight="repo_tags">Tags <span class="counter">0</span></a></li>
    <li><a href="/hoylemd/deathdeath/downloads" class="blank downloads-blank" highlight="repo_downloads">Downloads <span class="counter">0</span></a></li>
    
  </ul>

  <ul class="scope">
    <li class="switcher">

      <div class="context-menu-container js-menu-container js-context-menu">
        <a href="#"
           class="minibutton bigger switcher js-menu-target js-commitish-button btn-branch repo-tree"
           data-hotkey="w"
           data-master-branch="master"
           data-ref="master">
           <span><i>branch:</i> master</span>
        </a>

        <div class="context-pane commitish-context js-menu-content">
          <a href="javascript:;" class="close js-menu-close"><span class="mini-icon mini-icon-remove-close"></span></a>
          <div class="context-title">Switch branches/tags</div>
          <div class="context-body pane-selector commitish-selector js-navigation-container">
            <div class="filterbar">
              <input type="text" id="context-commitish-filter-field" class="js-navigation-enable" placeholder="Filter branches/tags" data-filterable />

              <ul class="tabs">
                <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                <li><a href="#" data-filter="tags">Tags</a></li>
              </ul>
            </div>

            <div class="js-filter-tab js-filter-branches" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
              <div class="no-results js-not-filterable">Nothing to show</div>
                <div class="commitish-item branch-commitish selector-item js-navigation-item js-navigation-target selected">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/hoylemd/deathdeath/blob/master/libs/csv-to-json.php" class="js-navigation-open" data-name="master" rel="nofollow">master</a>
                  </h4>
                </div>
            </div>

            <div class="js-filter-tab js-filter-tags" style="display:none" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
              <div class="no-results js-not-filterable">Nothing to show</div>
            </div>
          </div>
        </div><!-- /.commitish-context-context -->
      </div>

    </li>
  </ul>

  <ul class="subnav with-scope">

    <li><a href="/hoylemd/deathdeath" class="selected" highlight="repo_source">Files</a></li>
    <li><a href="/hoylemd/deathdeath/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/hoylemd/deathdeath/branches" class="" highlight="repo_branches" rel="nofollow">Branches <span class="counter">1</span></a></li>
  </ul>

</div>

  
  
  


          

        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" data-pjax-container>
          




<!-- blob contrib key: blob_contributors:v21:3caa3cf8d5f078200076ddc9327a87c9 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:3caa3cf8d5f078200076ddc9327a87c9 -->

<!-- block_view_fragment_key: views10/v8/blob:v21:093d6a2740539328411f1b32e444b354 -->
  <div id="slider">

    <div class="breadcrumb" data-path="libs/csv-to-json.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/hoylemd/deathdeath/tree/34b31d00a359912d20c16470ebd0e868d003cca3" class="js-rewrite-sha" itemprop="url"><span itemprop="title">deathdeath</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/hoylemd/deathdeath/tree/34b31d00a359912d20c16470ebd0e868d003cca3/libs" class="js-rewrite-sha" itemscope="url"><span itemprop="title">libs</span></a></span> / <strong class="final-path">csv-to-json.php</strong> <span class="js-clippy mini-icon mini-icon-clippy " data-clipboard-text="libs/csv-to-json.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>

      <div class="commit file-history-tease js-blob-contributors-loader" data-request-url="/hoylemd/deathdeath/contributors/master/libs/csv-to-json.php" data-path="libs/csv-to-json.php/">
        Fetching contributors…

        <div class="participation">
          <p class="quickstat js-loading-status-text"><img alt="Octocat-spinner-16px" height="16" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-16px.gif?1329921026" width="16" /></p>
        </div>
      </div>

    <div class="frames">
      <div class="frame frame-center" data-path="libs/csv-to-json.php/" data-permalink-url="/hoylemd/deathdeath/blob/34b31d00a359912d20c16470ebd0e868d003cca3/libs/csv-to-json.php" data-title="deathdeath/libs/csv-to-json.php at master · hoylemd/deathdeath · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>63 lines (50 sloc)</span>
                <span>1.485 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter js-rewrite-sha" href="/hoylemd/deathdeath/edit/34b31d00a359912d20c16470ebd0e868d003cca3/libs/csv-to-json.php" data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
                  </li>

                <li>
                  <a href="/hoylemd/deathdeath/raw/master/libs/csv-to-json.php" class="minibutton btn-raw grouped-button bigger lighter" id="raw-url">Raw</a>
                </li>
                  <li>
                    <a href="/hoylemd/deathdeath/blame/master/libs/csv-to-json.php" class="minibutton btn-blame grouped-button bigger lighter">Blame</a>
                  </li>
                <li>
                  <a href="/hoylemd/deathdeath/commits/master/libs/csv-to-json.php" class="minibutton btn-history grouped-button bigger lighter" rel="nofollow">History</a>
                </li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="cm">/*</span></div><div class='line' id='LC3'><span class="cm"> * Converts CSV to JSON</span></div><div class='line' id='LC4'><span class="cm"> * Example uses Google Spreadsheet CSV feed</span></div><div class='line' id='LC5'><span class="cm"> * csvToArray function I think I found on php.net</span></div><div class='line' id='LC6'><span class="cm"> * http://www.ravelrumba.com/blog/json-google-spreadsheets/</span></div><div class='line' id='LC7'><span class="cm"> * Note: ensure that openssl module is installed in php</span></div><div class='line' id='LC8'><span class="cm"> */</span></div><div class='line' id='LC9'><br/></div><div class='line' id='LC10'><span class="nx">header</span><span class="p">(</span><span class="s1">&#39;Content-type: application/json&#39;</span><span class="p">);</span></div><div class='line' id='LC11'><br/></div><div class='line' id='LC12'><span class="c1">// Set your CSV feed</span></div><div class='line' id='LC13'><span class="nv">$feed</span> <span class="o">=</span> <span class="s1">&#39;https://docs.google.com/spreadsheet/pub?hl=en_US&amp;hl=en_US&amp;key=0Akse3y5kCOR8dEh6cWRYWDVlWmN0TEdfRkZ3dkkzdGc&amp;single=true&amp;gid=0&amp;output=csv&#39;</span><span class="p">;</span></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'><span class="c1">// Arrays we&#39;ll use later</span></div><div class='line' id='LC16'><span class="nv">$keys</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC17'><span class="nv">$newArray</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC18'><br/></div><div class='line' id='LC19'><span class="c1">// Function to convert CSV into associative array</span></div><div class='line' id='LC20'><span class="k">function</span> <span class="nf">csvToArray</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="nv">$delimiter</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC21'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nv">$handle</span> <span class="o">=</span> <span class="nb">fopen</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="s1">&#39;r&#39;</span><span class="p">))</span> <span class="o">!==</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC22'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> </div><div class='line' id='LC23'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">((</span><span class="nv">$lineArray</span> <span class="o">=</span> <span class="nb">fgetcsv</span><span class="p">(</span><span class="nv">$handle</span><span class="p">,</span> <span class="mi">4000</span><span class="p">,</span> <span class="nv">$delimiter</span><span class="p">,</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">))</span> <span class="o">!==</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC24'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$j</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$j</span> <span class="o">&lt;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$lineArray</span><span class="p">);</span> <span class="nv">$j</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC25'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$arr</span><span class="p">[</span><span class="nv">$i</span><span class="p">][</span><span class="nv">$j</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$lineArray</span><span class="p">[</span><span class="nv">$j</span><span class="p">];</span> </div><div class='line' id='LC26'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC27'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$i</span><span class="o">++</span><span class="p">;</span> </div><div class='line' id='LC28'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC29'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$handle</span><span class="p">);</span> </div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC31'>&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$arr</span><span class="p">;</span> </div><div class='line' id='LC32'><span class="p">}</span> </div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'><span class="c1">// Do it</span></div><div class='line' id='LC35'><span class="nv">$data</span> <span class="o">=</span> <span class="nx">csvToArray</span><span class="p">(</span><span class="nv">$feed</span><span class="p">,</span> <span class="s1">&#39;,&#39;</span><span class="p">);</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'><span class="c1">// Set number of elements (minus 1 because we shift off the first row)</span></div><div class='line' id='LC38'><span class="nv">$count</span> <span class="o">=</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC39'>&nbsp;&nbsp;</div><div class='line' id='LC40'><span class="c1">//Use first row for names  </span></div><div class='line' id='LC41'><span class="nv">$labels</span> <span class="o">=</span> <span class="nb">array_shift</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>  </div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'><span class="k">foreach</span> <span class="p">(</span><span class="nv">$labels</span> <span class="k">as</span> <span class="nv">$label</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC44'>&nbsp;&nbsp;<span class="nv">$keys</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$label</span><span class="p">;</span></div><div class='line' id='LC45'><span class="p">}</span></div><div class='line' id='LC46'><br/></div><div class='line' id='LC47'><span class="c1">// Add Ids, just in case we want them later</span></div><div class='line' id='LC48'><span class="nv">$keys</span><span class="p">[]</span> <span class="o">=</span> <span class="s1">&#39;id&#39;</span><span class="p">;</span></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'><span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nv">$count</span><span class="p">;</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC51'>&nbsp;&nbsp;<span class="nv">$data</span><span class="p">[</span><span class="nv">$i</span><span class="p">][]</span> <span class="o">=</span> <span class="nv">$i</span><span class="p">;</span></div><div class='line' id='LC52'><span class="p">}</span></div><div class='line' id='LC53'>&nbsp;&nbsp;</div><div class='line' id='LC54'><span class="c1">// Bring it all together</span></div><div class='line' id='LC55'><span class="k">for</span> <span class="p">(</span><span class="nv">$j</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$j</span> <span class="o">&lt;</span> <span class="nv">$count</span><span class="p">;</span> <span class="nv">$j</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC56'>&nbsp;&nbsp;<span class="nv">$d</span> <span class="o">=</span> <span class="nb">array_combine</span><span class="p">(</span><span class="nv">$keys</span><span class="p">,</span> <span class="nv">$data</span><span class="p">[</span><span class="nv">$j</span><span class="p">]);</span></div><div class='line' id='LC57'>&nbsp;&nbsp;<span class="nv">$newArray</span><span class="p">[</span><span class="nv">$j</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$d</span><span class="p">;</span></div><div class='line' id='LC58'><span class="p">}</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'><span class="c1">// Print it out as JSON</span></div><div class='line' id='LC61'><span class="k">echo</span> <span class="nb">json_encode</span><span class="p">(</span><span class="nv">$newArray</span><span class="p">);</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading large-loading-area" style="display:none;" data-tree-list-url="/hoylemd/deathdeath/tree-list/34b31d00a359912d20c16470ebd0e868d003cca3" data-blob-url-prefix="/hoylemd/deathdeath/blob/34b31d00a359912d20c16470ebd0e868d003cca3">
  <img src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-64.gif?1329921026" height="64" width="64">
</div>

        </div>
      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Clients</h4>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://windows.github.com/">GitHub for Windows</a></li>
         <li><a href="http://eclipse.github.com/">GitHub for Eclipse</a></li>
         <li><a href="http://mobile.github.com/">GitHub Mobile Apps</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Web analytics</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>

         <h4 class="second">Extras</h4>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.11957s from fe14.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspaces_logo.png?1329921026" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last js-hidden-pane" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
        <dd>Submit comment</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div class="js-hidden-pane" >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first js-hidden-pane" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first">
        <h3>Browsing Commits</h3>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>escape</dt>
          <dd>Close form</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>p</dt>
          <dd>Parent commit</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o</dt>
          <dd>Other parent commit</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <h3>Notifications</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open notification</dd>
        </dl>
      </div><!-- /.column.first -->

      <div class="column second">
        <dl class="keyboard-mappings">
          <dt>e <em>or</em> shift i <em>or</em> y</dt>
          <dd>Mark as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift m</dt>
          <dd>Mute thread</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div id="ajax-error-message">
      <span class="mini-icon mini-icon-exclamation"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="ajax-error-dismiss">Dismiss</a>
    </div>

    <div id="logo-popup">
      <h2>Looking for the GitHub logo?</h2>
      <ul>
        <li>
          <h4>GitHub Logo</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip"><img alt="Github_logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/github_logo.png?1329921026" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip" class="minibutton btn-download download">Download</a>
        </li>
        <li>
          <h4>The Octocat</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip"><img alt="Octocat" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/octocat.png?1329921026" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip" class="minibutton btn-download download">Download</a>
        </li>
      </ul>
    </div>

    
    <span id='server_response_time' data-time='0.12230' data-host='fe14'></span>
  </body>
</html>

