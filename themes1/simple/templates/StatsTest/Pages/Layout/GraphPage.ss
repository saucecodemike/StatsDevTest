<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
        <h1>Graph Page!</h1>
        <div class="content">$Content</div>
    </article>

    $getGraphData
    <div id="container" style="width:100%; height:400px;"></div>
</div>
<% require themedJavascript('graph') %>
