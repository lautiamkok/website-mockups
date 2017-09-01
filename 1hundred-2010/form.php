{% if blog.comments_enabled? %}
<div id="comments">
  <h3>Comments</h3>
  <!-- List all comments -->

  <ul>
  {% for comment in article.comments %}
    <li>
      <div class="comment">
        {{ comment.content }}
      </div>
      
  	  <div class="comment-details">
  		  Posted by {{ comment.author }} on {{ comment.created_at | date: "%B %d, %Y" }}
      </div>
  	</li>
  {% endfor %}
  </ul>
  
  <!-- Comment Form -->
  {% form article %}
  
  <!-- Check if a comment has been submitted in the last request, and if yes display an appropriate message -->
  {% if form.posted_successfully? %}
    {% if blog.moderated? %}
      <div class="notice">
        Successfully posted your comment.<br />
        It will have to be approved by the blog owner first before showing up.
      </div>
    {% else %}
      <div class="notice">Successfully posted your comment.</div>
    {% endif %}
  {% endif %}
  
  {% if form.errors %}
    <div class="notice error">Not all the fields have been filled out correctly!</div>
  {% endif %}
  
    <h3>Leave a comment</h3>
    
    <dl>
      <dt class="{% if form.errors contains 'author' %}error{% endif %}"><label for="comment_author">Your name</label></dt>
      <dd><input type="text" id="comment_author" name="comment[author]" size="40" value="{{form.author}}" class="{% if form.errors contains 'author' %}input-error{% endif %}" /></dd>

      <dt class="{% if form.errors contains 'email' %}error{% endif %}"><label for="comment_email">Your email</label></dt>
      <dd><input type="text" id="comment_email" name="comment[email]" size="40" value="{{form.email}}" class="{% if form.errors contains 'email' %}input-error{% endif %}" /></dd>

      <dt class="{% if form.errors contains 'body' %}error{% endif %}"><label for="comment_body">Your comment</label></dt>
      <dd><textarea id="comment_body" name="comment[body]" cols="40" rows="5" class="{% if form.errors contains 'body' %}input-error{% endif %}">{{form.body}}</textarea></dd>
    </dl>
    
    {% if blog.moderated? %}
      <p class="hint">comments have to be approved before showing up</p>
    {% endif %}    

    <input type="submit" value="Post comment" />
  {% endform %}
</div>
{% endif %}