<html>
    <head>
        <title>{Title}</title>
        <link rel="alternate" type="application/rss+xml" href="{RSS}">
        {block:Description}
            <meta name="description" content="{MetaDescription}" />
        {/block:Description}
    </head>
    <body>
        <div id="content">
       
        <h1>{:title}</h1>
		<div id="main_image">{:visual:}</div>
		<h2>{:abstract:} </h2>
		<p>{:description:}</p>
		<p>{:url:}</p>
		<p>{:venue:}</p>	<p>{:class:}</p>
       </div>
     
    </body>
</html>

