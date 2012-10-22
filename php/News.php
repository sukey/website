<script type="text/javascript">

var cssfeed=new gfeedfetcher("news", "newsclass", "")
cssfeed.addFeed("Sukeyio Blog", "https://sukeyio.blogspot.com/feeds/posts/default/")
cssfeed.displayoptions("date description") //show the specified additional fields
cssfeed.setentrycontainer("div") //Display each entry as a list (li element)
cssfeed.filterfeed(10, "date") //Show 10 entries, sort by date
cssfeed.init() //Always call this last

</script>
