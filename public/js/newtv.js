 console.log('newtv');

function onYouTubeIframeAPIReady() {
  console.log('iframe api ready');
  window.player;
  player = new YT.Player('youtube-player', {
    width: '100%',
    // videoId: $('.tv-video').first().attr('data-vid'),
    playerVars: { 'autoplay': 1, 'controls': 1,listType:'playlist', list: $('.currplaylist').attr("data-list") },
    events: {
      'onReady': onPlayerReady
    }
  });
}
function onPlayerReady(event) {
  console.log('player is ready');
  //event.target.playVideo();
    $(document).ready(function(){
      $('.playlist-tag').click(function(){
      console.log('playlist clicked!');
      var requrl="http://localhost/bunt4/public/videos/"+$(this).attr("data-plid");
      $.ajax({
          url: requrl
      }).success(function(data){
        $('.tv-playlist').first().html(data);
        
        loadNewPlaylist();
        console.log('success!bideos loaded');
      });
    });
  //play all videos in playlist
  $('#tv-play-all').click(function(){
      console.log('category thumb clicked');
      var playlistId=$('.currplaylist').attr("data-list");
      console.log(playlistId);
      playPlaylist(playlistId);
  });
  //play random video in playlist
   $('#tv-play-random').click(function(){
      console.log('random clicked');
      var playlistId=$('.currplaylist').attr("data-list");
      console.log(playlistId);
      playRandomVid(playlistId);
  });
   //play next
     $('#tv-play-next').click(function(){
      console.log('next clicked');
      playNext();
  });
   //play previous
     $('#tv-play-prev').click(function(){
      console.log('previous clicked');
      playPrevious();
  });
  //play a vid
  loadNewPlaylist();
  });
}
function playPlaylist(plid){
  console.log('loading playlist '+plid);
  //player.loadPlaylist(plid);
  var videos = new Array();
  $('.tv-video[data-list="'+plid+'"]').each(function(){
      videos.push($(this).attr("data-vid"));
  });
  player.loadPlaylist(videos,'playlist');
}
function playRandomVid(plid){
  console.log('getting random vid from playlist with id '+plid);
  //player.loadPlaylist(plid);
  var videos = new Array();
  $('.tv-video[data-list="'+plid+'"]').each(function(){
      videos.push($(this).attr("data-vid"));
  });
  var random = Math.round(Math.random()*$('.tv-video[data-list="'+plid+'"]').size());
  //$('.tv-video[data-list="'+plid+'"]').eq(random).click();
  player.loadPlaylist(videos,'playlist',random);
}
function playVid(vid){
  console.log('playing vid');
  $('.tv-video').removeClass('currvid');
  
  var vindex=$.inArray(vid,player.getPlaylist());
  console.log(vindex);
  if(vindex>=0){
    player.playVideoAt(vindex);
    $(".tv-video:eq("+vindex+")").addClass('currvid');
  }else{
    player.loadVideoById(vid);
  }
}

function playNext(){
  player.nextVideo();
}
function playPrevious(){
  player.previousVideo();
}
function loadNewPlaylist(){
  // window.tvvideos= [];
  $(".tv-video").each(function(){
    //add vid-id to array
    // window.tvvideos.push(Array($(this).attr("data-vid")));
    //assign listeners
    $(this).click(function(){
      playVid($(this).attr("data-vid"));
    });
  });
  // console.log(window.tvvideos);
  // player.loadPlaylist(window.tvvideos,'playlist');
  
      //$(this).toggleClass("currvid");
      
      // var title= $(this).children('.desc-panel').first().children('h3').first().text();
      //  document.title = title+" - Bunt TV";
      //  console.log(title);
      //  title=encodeURIComponent(title).replace(/%20/g,'+');
      //  var currurl=window.location.href;
      // var urlparts = currurl.split('/');
      // console.log(urlparts);
      // var thepart=urlparts[urlparts.length-1];
       // currurl = currurl.split('calhost');
       // currurl = currurl[1];
       // window.history.replaceState("state","tv", thepart+"?v="+title);

}


