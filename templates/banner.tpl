<div class="jumbotron">
  <h1>weboot</h1>
  <p>We specialize in clothes</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe to get free clothes!</button>
  </form>
    {if $showLogin}
      {include file="/templates/login.tpl"}
    {/if}
</div>
<!-- class="form-inline" -->
