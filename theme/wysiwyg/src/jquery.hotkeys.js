



<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled is-u2f-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>jquery.hotkeys/jquery.hotkeys.js at master · jeresig/jquery.hotkeys · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="jeresig/jquery.hotkeys" name="twitter:title" /><meta content="jquery.hotkeys - jQuery Hotkeys lets you watch for keyboard events anywhere in your code supporting almost any key combination." name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/1615?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/1615?v=3&amp;s=400" property="og:image" /><meta content="jeresig/jquery.hotkeys" property="og:title" /><meta content="https://github.com/jeresig/jquery.hotkeys" property="og:url" /><meta content="jquery.hotkeys - jQuery Hotkeys lets you watch for keyboard events anywhere in your code supporting almost any key combination." property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="7711D420:448B:2392A562:56790E6A" name="octolytics-dimension-request_id" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />
<meta content="Rails, view, blob#show" data-pjax-transient="true" name="analytics-event" />


  <meta class="js-ga-set" name="dimension1" content="Logged Out">



        <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

        <meta name="expected-hostname" content="github.com">

      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta content="ddfa3d2aafe741bef19140d9a3d867b9ba212cf8" name="form-nonce" />

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-2037283749006a7ebc37dc5a63a365e8cde9e5d0099e83d4a77bba85b03a6623.css" integrity="sha256-IDcoN0kAan68N9xaY6Nl6M3p5dAJnoPUp3u6hbA6ZiM=" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2-87b394aa7bb776e9e05abfb54eaa1193404e767a3720d64ff2c8f64c7cfb432b.css" integrity="sha256-h7OUqnu3dungWr+1TqoRk0BOdno3INZP8sj2THz7Qys=" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="696c3d92b2b36833513e39f2a164890b">

      
  <meta name="description" content="jquery.hotkeys - jQuery Hotkeys lets you watch for keyboard events anywhere in your code supporting almost any key combination.">
  <meta name="go-import" content="github.com/jeresig/jquery.hotkeys git https://github.com/jeresig/jquery.hotkeys.git">

  <meta content="1615" name="octolytics-dimension-user_id" /><meta content="jeresig" name="octolytics-dimension-user_login" /><meta content="531036" name="octolytics-dimension-repository_id" /><meta content="jeresig/jquery.hotkeys" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="true" name="octolytics-dimension-repository_is_fork" /><meta content="51260" name="octolytics-dimension-repository_parent_id" /><meta content="tzuryby/jquery.hotkeys" name="octolytics-dimension-repository_parent_nwo" /><meta content="51260" name="octolytics-dimension-repository_network_root_id" /><meta content="tzuryby/jquery.hotkeys" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/jeresig/jquery.hotkeys/commits/master.atom" rel="alternate" title="Recent Commits to jquery.hotkeys:master" type="application/atom+xml">

  </head>


  <body class="logged_out   env-production windows vis-public fork page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2Fjeresig%2Fjquery.hotkeys%2Fblob%2Fmaster%2Fjquery.hotkeys.js" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/jeresig/jquery.hotkeys/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/jeresig/jquery.hotkeys/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      aria-label="Search this repository"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/pricing" data-ga-click="(Logged out) Header, go to pricing, text:pricing">Pricing</a>
          </li>
      </ul>

  </div>
</div>



    <div id="start-of-content" class="accessibility-aid"></div>

      <div id="js-flash-container">
</div>


    <div role="main" class="main-content">
        <div itemscope itemtype="http://schema.org/WebPage">
    <div id="js-repo-pjax-container" class="context-loader-container js-repo-nav-next" data-pjax-container>
      
<div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
  <div class="container repohead-details-container">

    

<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Fjeresig%2Fjquery.hotkeys"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/jeresig/jquery.hotkeys/watchers">
    77
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fjeresig%2Fjquery.hotkeys"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star "></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/jeresig/jquery.hotkeys/stargazers">
      2,161
    </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fjeresig%2Fjquery.hotkeys"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked "></span>
        Fork
      </a>

    <a href="/jeresig/jquery.hotkeys/network" class="social-count">
      577
    </a>
  </li>
</ul>

    <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public ">
  <span class="octicon octicon-repo-forked "></span>
  <span class="author"><a href="/jeresig" class="url fn" itemprop="url" rel="author"><span itemprop="title">jeresig</span></a></span><!--
--><span class="path-divider">/</span><!--
--><strong><a href="/jeresig/jquery.hotkeys" data-pjax="#js-repo-pjax-container">jquery.hotkeys</a></strong>

  <span class="page-context-loader">
    <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
  </span>

    <span class="fork-flag">
      <span class="text">forked from <a href="/tzuryby/jquery.hotkeys">tzuryby/jquery.hotkeys</a></span>
    </span>
</h1>

  </div>
  <div class="container">
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <a href="/jeresig/jquery.hotkeys" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /jeresig/jquery.hotkeys">
    <span class="octicon octicon-code "></span>
    Code
</a>

  <a href="/jeresig/jquery.hotkeys/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /jeresig/jquery.hotkeys/pulls">
    <span class="octicon octicon-git-pull-request "></span>
    Pull requests
    <span class="counter">2</span>
</a>
    <a href="/jeresig/jquery.hotkeys/wiki" class="js-selected-navigation-item reponav-item" data-hotkey="g w" data-selected-links="repo_wiki /jeresig/jquery.hotkeys/wiki">
      <span class="octicon octicon-book "></span>
      Wiki
</a>
  <a href="/jeresig/jquery.hotkeys/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="pulse /jeresig/jquery.hotkeys/pulse">
    <span class="octicon octicon-pulse "></span>
    Pulse
</a>
  <a href="/jeresig/jquery.hotkeys/graphs" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors /jeresig/jquery.hotkeys/graphs">
    <span class="octicon octicon-graph "></span>
    Graphs
</a>

</nav>

  </div>
</div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    

<a href="/jeresig/jquery.hotkeys/blob/1ec07a6a1900104ba56d049551acaaa83e8417d6/jquery.hotkeys.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:95a1ad392b96c0e49efcb4620b328c6d -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    title="master"
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span aria-label="Close" class="octicon octicon-x js-menu-close" role="button"></span>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/jeresig/jquery.hotkeys/blob/master/jquery.hotkeys.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/jeresig/jquery.hotkeys/tree/list/jquery.hotkeys.js"
                 data-name="list"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="list">list</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/jeresig/jquery.hotkeys/tree/0.2.0/jquery.hotkeys.js"
                 data-name="0.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2.0">0.2.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/jeresig/jquery.hotkeys/tree/0.1.0/jquery.hotkeys.js"
                 data-name="0.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.1.0">0.1.0</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/jeresig/jquery.hotkeys/find/master"
          class="js-show-file-finder btn btn-sm"
          data-pjax
          data-hotkey="t">
      Find file
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
  </div>
  <div class="breadcrumb js-zeroclipboard-target">
    <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/jeresig/jquery.hotkeys" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">jquery.hotkeys</span></a></span></span><span class="separator">/</span><strong class="final-path">jquery.hotkeys.js</strong>
  </div>
</div>


  <div class="commit-tease">
      <span class="right">
        <a class="commit-tease-sha" href="/jeresig/jquery.hotkeys/commit/58038e6b47bb067619ac6448ce697990e4d9f52c" data-pjax>
          58038e6
        </a>
        <time datetime="2015-11-08T15:53:14Z" is="relative-time">Nov 8, 2015</time>
      </span>
      <div>
        <img alt="@RandomlyKnighted" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/2483249?v=3&amp;s=40" width="20" />
        <a href="/RandomlyKnighted" class="user-mention" rel="contributor">RandomlyKnighted</a>
          <a href="/jeresig/jquery.hotkeys/commit/58038e6b47bb067619ac6448ce697990e4d9f52c" class="message" data-pjax="true" title="Fixed version number">Fixed version number</a>
      </div>

    <div class="commit-tease-contributors">
      <a class="muted-link contributors-toggle" href="#blob_contributors_box" rel="facebox">
        <strong>10</strong>
         contributors
      </a>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="rpocklin" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=rpocklin"><img alt="@rpocklin" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/876651?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="tbranyen" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=tbranyen"><img alt="@tbranyen" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/181635?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="YuppY" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=YuppY"><img alt="@YuppY" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/448231?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="morgante" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=morgante"><img alt="@morgante" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/1627801?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jeresig" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=jeresig"><img alt="@jeresig" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/1615?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="RandomlyKnighted" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=RandomlyKnighted"><img alt="@RandomlyKnighted" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/2483249?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="kevingorski" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=kevingorski"><img alt="@kevingorski" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/212205?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="gabrielflorit" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=gabrielflorit"><img alt="@gabrielflorit" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/370976?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="CalvinChen" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=CalvinChen"><img alt="@CalvinChen" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/1669392?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="abolishme" href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js?author=abolishme"><img alt="@abolishme" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/3347534?v=3&amp;s=40" width="20" /> </a>


    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@rpocklin" height="24" src="https://avatars0.githubusercontent.com/u/876651?v=3&amp;s=48" width="24" />
            <a href="/rpocklin">rpocklin</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@tbranyen" height="24" src="https://avatars0.githubusercontent.com/u/181635?v=3&amp;s=48" width="24" />
            <a href="/tbranyen">tbranyen</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@YuppY" height="24" src="https://avatars3.githubusercontent.com/u/448231?v=3&amp;s=48" width="24" />
            <a href="/YuppY">YuppY</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@morgante" height="24" src="https://avatars3.githubusercontent.com/u/1627801?v=3&amp;s=48" width="24" />
            <a href="/morgante">morgante</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@jeresig" height="24" src="https://avatars0.githubusercontent.com/u/1615?v=3&amp;s=48" width="24" />
            <a href="/jeresig">jeresig</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@RandomlyKnighted" height="24" src="https://avatars2.githubusercontent.com/u/2483249?v=3&amp;s=48" width="24" />
            <a href="/RandomlyKnighted">RandomlyKnighted</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@kevingorski" height="24" src="https://avatars1.githubusercontent.com/u/212205?v=3&amp;s=48" width="24" />
            <a href="/kevingorski">kevingorski</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@gabrielflorit" height="24" src="https://avatars2.githubusercontent.com/u/370976?v=3&amp;s=48" width="24" />
            <a href="/gabrielflorit">gabrielflorit</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@CalvinChen" height="24" src="https://avatars0.githubusercontent.com/u/1669392?v=3&amp;s=48" width="24" />
            <a href="/CalvinChen">CalvinChen</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@abolishme" height="24" src="https://avatars2.githubusercontent.com/u/3347534?v=3&amp;s=48" width="24" />
            <a href="/abolishme">abolishme</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/jeresig/jquery.hotkeys/raw/master/jquery.hotkeys.js" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/jeresig/jquery.hotkeys/blame/master/jquery.hotkeys.js" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/jeresig/jquery.hotkeys/commits/master/jquery.hotkeys.js" class="btn btn-sm " rel="nofollow">History</a>
    </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:windows">
            <span class="octicon octicon-device-desktop "></span>
        </a>

        <button type="button" class="octicon-btn disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-pencil "></span>
        </button>
        <button type="button" class="octicon-btn octicon-btn-danger disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan "></span>
        </button>
  </div>

  <div class="file-info">
      205 lines (181 sloc)
      <span class="file-info-divider"></span>
    4.9 KB
  </div>
</div>

  

  <div class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/*jslint browser: true*/</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/*jslint jquery: true*/</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/*</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * jQuery Hotkeys Plugin</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Copyright 2010, John Resig</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Dual licensed under the MIT or GPL Version 2 licenses.</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> *</span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Based upon the plugin by Tzury Bar Yochay:</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * https://github.com/tzuryby/jquery.hotkeys</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> *</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Original idea by:</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Binny V A, http://www.openjs.com/scripts/events/keyboard_shortcuts/</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> */</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/*</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * One small change is: now keys are passed by object { keys: &#39;...&#39; }</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> * Might be useful, when you want to pass some other data to your handler</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-c"> */</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span>(<span class="pl-smi">jQuery</span>) {</td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span> <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">    version<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>0.2.0<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">    specialKeys<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">8</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>backspace<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">9</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>tab<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">10</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>return<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">13</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>return<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">16</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>shift<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">17</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>ctrl<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">18</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>alt<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">19</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>pause<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">20</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>capslock<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">27</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>esc<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">32</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>space<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">33</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>pageup<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">34</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>pagedown<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">35</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>end<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">36</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>home<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">37</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>left<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">38</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>up<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">39</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>right<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">40</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>down<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">45</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>insert<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">46</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>del<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">59</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>;<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">61</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>=<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">96</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>0<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">97</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>1<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">98</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>2<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">99</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>3<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">100</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>4<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">101</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>5<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">102</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>6<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">103</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>7<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">104</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>8<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">105</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>9<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">106</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>*<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">107</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>+<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">109</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">110</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>.<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">111</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">112</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f1<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">113</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f2<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">114</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f3<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">115</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f4<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">116</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f5<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">117</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f6<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">118</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f7<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">119</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f8<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">120</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f9<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">121</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f10<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">122</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f11<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">123</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>f12<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">144</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>numlock<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">145</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>scroll<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">173</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">186</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>;<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">187</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>=<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">188</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>,<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">189</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">190</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>.<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">191</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">192</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">219</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>[<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">220</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\\</span><span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">221</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>]<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line">      <span class="pl-c1">222</span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-pds">&quot;</span></span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line">    shiftNums<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>~<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>1<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>!<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>2<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>3<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>#<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>4<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>$<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>5<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>%<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>6<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>^<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>7<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&amp;<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>8<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>*<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>9<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>(<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>0<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>)<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>_<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>=<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>+<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>;<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>: <span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\&quot;</span><span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>,<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&lt;<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>.<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&gt;<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>?<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\\</span><span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>|<span class="pl-pds">&quot;</span></span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line">    <span class="pl-c">// excludes: button, checkbox, file, hidden, image, password, radio, reset, search, submit, url</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line">    textAcceptingInputTypes<span class="pl-k">:</span> [</td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>text<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>password<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>email<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>url<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>range<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>date<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>month<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>week<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>time<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>datetime<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>datetime-local<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>search<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>color<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>tel<span class="pl-pds">&quot;</span></span>],</td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line">    <span class="pl-c">// default input types not to bind to unless bound directly</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line">    textInputTypes<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span>textarea<span class="pl-k">|</span>input<span class="pl-k">|</span>select<span class="pl-pds">/</span>i</span>,</td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line">    options<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line">      filterInputAcceptingElements<span class="pl-k">:</span> <span class="pl-c1">true</span>,</td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line">      filterTextInputs<span class="pl-k">:</span> <span class="pl-c1">true</span>,</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line">      filterContentEditable<span class="pl-k">:</span> <span class="pl-c1">true</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line">  };</td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">keyHandler</span>(<span class="pl-smi">handleObj</span>) {</td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">typeof</span> <span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span> <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span> <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line">        keys<span class="pl-k">:</span> <span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line">      };</td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line">    <span class="pl-c">// Only care when a possible input has been specified</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span> <span class="pl-k">||</span> <span class="pl-k">!</span><span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span>.<span class="pl-smi">keys</span> <span class="pl-k">||</span> <span class="pl-k">typeof</span> <span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span>.<span class="pl-smi">keys</span> <span class="pl-k">!==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span>;</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> origHandler <span class="pl-k">=</span> <span class="pl-smi">handleObj</span>.<span class="pl-smi">handler</span>,</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line">      keys <span class="pl-k">=</span> <span class="pl-smi">handleObj</span>.<span class="pl-c1">data</span>.<span class="pl-smi">keys</span>.<span class="pl-c1">toLowerCase</span>().<span class="pl-c1">split</span>(<span class="pl-s"><span class="pl-pds">&quot;</span> <span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line">    <span class="pl-c1">handleObj</span>.<span class="pl-en">handler</span> <span class="pl-k">=</span> <span class="pl-k">function</span>(<span class="pl-smi">event</span>) {</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line">      <span class="pl-c">//      Don&#39;t fire in text-accepting inputs that we didn&#39;t directly bind to</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-v">this</span> <span class="pl-k">!==</span> <span class="pl-smi">event</span>.<span class="pl-c1">target</span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line">        (<span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-c1">options</span>.<span class="pl-smi">filterInputAcceptingElements</span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line">          <span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-smi">textInputTypes</span>.<span class="pl-c1">test</span>(<span class="pl-smi">event</span>.<span class="pl-c1">target</span>.<span class="pl-c1">nodeName</span>) <span class="pl-k">||</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line">          (<span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-c1">options</span>.<span class="pl-smi">filterContentEditable</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-en">jQuery</span>(<span class="pl-smi">event</span>.<span class="pl-c1">target</span>).<span class="pl-en">attr</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>contenteditable<span class="pl-pds">&#39;</span></span>)) <span class="pl-k">||</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line">          (<span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-c1">options</span>.<span class="pl-smi">filterTextInputs</span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line">            <span class="pl-smi">jQuery</span>.<span class="pl-en">inArray</span>(<span class="pl-smi">event</span>.<span class="pl-c1">target</span>.<span class="pl-c1">type</span>, <span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-smi">textAcceptingInputTypes</span>) <span class="pl-k">&gt;</span> <span class="pl-k">-</span><span class="pl-c1">1</span>))) {</td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span>;</td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> special <span class="pl-k">=</span> <span class="pl-smi">event</span>.<span class="pl-c1">type</span> <span class="pl-k">!==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>keypress<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-smi">specialKeys</span>[<span class="pl-smi">event</span>.<span class="pl-smi">which</span>],</td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line">        character <span class="pl-k">=</span> <span class="pl-smi">String</span>.<span class="pl-c1">fromCharCode</span>(<span class="pl-smi">event</span>.<span class="pl-smi">which</span>).<span class="pl-c1">toLowerCase</span>(),</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line">        modif <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line">        possible <span class="pl-k">=</span> {};</td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">jQuery</span>.<span class="pl-en">each</span>([<span class="pl-s"><span class="pl-pds">&quot;</span>alt<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>ctrl<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>shift<span class="pl-pds">&quot;</span></span>], <span class="pl-k">function</span>(<span class="pl-smi">index</span>, <span class="pl-smi">specialKey</span>) {</td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> (<span class="pl-c1">event</span>[specialKey <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Key<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> special <span class="pl-k">!==</span> specialKey) {</td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line">          modif <span class="pl-k">+=</span> specialKey <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>+<span class="pl-pds">&#39;</span></span>;</td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line">      });</td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line">      <span class="pl-c">// metaKey is triggered off ctrlKey erronously</span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">event</span>.<span class="pl-smi">metaKey</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-smi">event</span>.<span class="pl-smi">ctrlKey</span> <span class="pl-k">&amp;&amp;</span> special <span class="pl-k">!==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>meta<span class="pl-pds">&quot;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line">        modif <span class="pl-k">+=</span> <span class="pl-s"><span class="pl-pds">&quot;</span>meta+<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">event</span>.<span class="pl-smi">metaKey</span> <span class="pl-k">&amp;&amp;</span> special <span class="pl-k">!==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>meta<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">modif</span>.<span class="pl-c1">indexOf</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>alt+ctrl+shift+<span class="pl-pds">&quot;</span></span>) <span class="pl-k">&gt;</span> <span class="pl-k">-</span><span class="pl-c1">1</span>) {</td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line">        modif <span class="pl-k">=</span> <span class="pl-smi">modif</span>.<span class="pl-c1">replace</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>alt+ctrl+shift+<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>hyper+<span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (special) {</td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line">        possible[modif <span class="pl-k">+</span> special] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line">        possible[modif <span class="pl-k">+</span> character] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line">        possible[modif <span class="pl-k">+</span> <span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-smi">shiftNums</span>[character]] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// &quot;$&quot; can be triggered as &quot;Shift+4&quot; or &quot;Shift+$&quot; or just &quot;$&quot;</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> (modif <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&quot;</span>shift+<span class="pl-pds">&quot;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line">          possible[<span class="pl-smi">jQuery</span>.<span class="pl-smi">hotkeys</span>.<span class="pl-smi">shiftNums</span>[character]] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">for</span> (<span class="pl-k">var</span> i <span class="pl-k">=</span> <span class="pl-c1">0</span>, l <span class="pl-k">=</span> <span class="pl-smi">keys</span>.<span class="pl-c1">length</span>; i <span class="pl-k">&lt;</span> l; i<span class="pl-k">++</span>) {</td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> (possible[keys[i]]) {</td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line">          <span class="pl-k">return</span> <span class="pl-smi">origHandler</span>.<span class="pl-c1">apply</span>(<span class="pl-v">this</span>, arguments);</td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line">    };</td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">jQuery</span>.<span class="pl-en">each</span>([<span class="pl-s"><span class="pl-pds">&quot;</span>keydown<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>keyup<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>keypress<span class="pl-pds">&quot;</span></span>], <span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">jQuery</span>.<span class="pl-c1">event</span>.<span class="pl-smi">special</span>[<span class="pl-v">this</span>] <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line">      add<span class="pl-k">:</span> keyHandler</td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line">    };</td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line">})(jQuery <span class="pl-k">||</span> <span class="pl-v">this</span>.<span class="pl-smi">jQuery</span> <span class="pl-k">||</span> <span class="pl-smi">window</span>.<span class="pl-smi">jQuery</span>);</td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

  </div>
  <div class="modal-backdrop"></div>
</div>

    </div>
  </div>

    </div>

        <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li><a href="https://github.com/pricing" data-ga-click="Footer, go to pricing, text:pricing">Pricing</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github " title="GitHub "></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.05035s from github-fe144-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    
    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <span class="octicon octicon-x"></span>
      </button>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" integrity="sha256-7460qJ7p88i3YTMH/liaj1cFgX987ie+xRzl6WMjSr8=" src="https://assets-cdn.github.com/assets/frameworks-ef8eb4a89ee9f3c8b7613307fe589a8f5705817f7cee27bec51ce5e963234abf.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-S2uOfRHrt7zoUSbTtBMMgAQfKubV1u+JAajAw/fLgNI=" src="https://assets-cdn.github.com/assets/github-4b6b8e7d11ebb7bce85126d3b4130c80041f2ae6d5d6ef8901a8c0c3f7cb80d2.js"></script>
      
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <span class="octicon octicon-alert"></span>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
  </body>
</html>

