<section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="video-player">
              <iframe id="video_player" src="https://www.youtube.com/embed/IsBK8W99BWI" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="video-list-container">
            <ul class="video-list">
              <?php 
                  $args = array(
                    'post_type'  => 'video'
                  );
                  $videos = get_posts( $args );
                  foreach($videos as $video){
                    $videoTitle = $video->post_title;
                    $youtubeVideoId = get_post_meta($video->ID, "youtube_video_id", true);
                    ?>
                    <li class='_video' data-video='<?php echo $youtubeVideoId ?>'>
                    <?php echo $videoTitle ?>
                  </li>
                    <?php
                  }
                ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>