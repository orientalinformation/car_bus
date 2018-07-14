  @foreach ($comments as $comment)
  <div class="commentp">
  <hr/>
  <div class="comment">
    <a href="#">
      <img src="/images/userpic.gif" width="40" height="40" alt="" class="userpic" />
    </a> 
    <p>Ngày: {{$comment->cm_date}}</p>
    <p><a href="#">{{$comment->cm_name}}</a> : {{$comment->cm_content}}.<br /></p>
  </div>
  </div>
  @endforeach
  <?php echo $comments->links(); ?>