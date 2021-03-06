@extends('app3')
@section('header')
<title>
  {{ $artikel->judul }} - 69CUK For Adult Only
</title>
<style type="text/css">
  .blur{
    color: #aaa;}        
    html {
      position: relative;
      min-height: 100%;
    }
    body {
      /* Margin bottom by footer height */
      margin-bottom: 60px;
    }
    table {
      table-layout: fixed;
      white-space: normal!important;
    }

    td {
      word-wrap: break-word;
    }    
  </style>    
  @endsection
  @section('content')
  <div style="border-bottom:1px solid #eee;padding-bottom:10px;padding-top:10px">
   <table width="100%" border="0">
     <tbody>
       <tr>
         <td width="100%" align="center">
           <img src="{{ url('images/'.$artikel->sampul) }}" title="" style="width: 472px;">
           <div style="background:#fff;height:23px;position:absolute;margin-top:-23px;z-index:88;width:652px"></div>
           <div style="text-align:left;padding-left:20px;padding-top:10px;font-family: FontAwesome;">
            <h3 style="width: 700px;">{{ $artikel->judul }}</h3>
            <div class="blur">
             <a href="" style="display: inline; background: none; color:#aaa;"><b>{{$artikel->user->name}}</b></a>
             <abbr title="{{date('r',strtotime($artikel->created_at))}}">{{ $artikel->created_at->diffForHumans() }}</abbr>                          
           </div>
           <div class="blur">
             <small>from&nbsp;&nbsp;{{$artikel->isi}}</small>
           </div>
           <div style="margin-top:5px;" class="blur">
             <div id="fb-root"></div>
             <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/#{{$artikel->id}}" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
          </div>          
          <div class="pull-right" style="margin-top: 5px;" id="share-buttons">          
            <div><h4 class="pull-left">Bagikan&nbsp;</h4></div>
            <div class="pull-right">            
              <!-- Facebook -->
              <a href="http://www.facebook.com/sharer.php?u=http://www.hi-fiez.cf" target="_blank facebook">
                <img src="/images/facebook.png" alt="Facebook" />
              </a>
              <!-- Twitter -->
              <a href="https://twitter.com/share?url={{url('/kocak-'.$artikel->id)}}&amp;text=Coba lihat!!, ini lucu sekali&amp;hashtags=kocak,69CUK" target="_blank">
                <img src="/images/twitter.png" alt="Twitter" />
              </a>              
              <!-- Google+ -->
              <a href="https://plus.google.com/share?url=http://www.hi-fiez.cf" target="_blank">
                <img src="/images/gplus.png" alt="Google" />
              </a>

              <!-- LinkedIn -->
              <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.hi-fiez.cf" target="_blank">
                <img src="/images/linkedin.png" alt="LinkedIn" />
              </a>

              <!-- Pinterest -->
              <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                <img src="/images/pinterest.png" alt="Pinterest" />
              </a>              
            </div>          
          </div>          
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div style="" id="komentar">
  <div style="text-align:left;border-top:1px solid #ddd;font-size:13px;word-wrap:break-word;font-family: FontAwesome;">
    <div style="margin:5px">
      <h3>Komentar</h3>      
      <div style="margin-bottom:4px;">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-width="720" data-href="https://developers.facebook.com/docs/plugins/comments#{{ $artikel->id }}" data-numartikels="4"></div>
      </div>
    </div>
  </div><br>
</div>
<footer class="navbar-fixed-bottom">
  <div class="container-fluid">
    <small class="blur">
      <span class="text-muted pull-left" style="cursor: default;">Created by <a href="https://github.com/Hi-Fiez" target="_blank">Hi-Fiez</a> & <a href="https://github.com/andynl" target="_blank">andynl</a></span>
      <span class="text-muted pull-right">Designed by <a href="https://facebook.com/abdlahafizh">Abdullah Hafizh</a></span>    </small>
    </div>
  </footer>
  @endsection