<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <div>
      <h1><xsl:value-of select="/rss/channel/title"/></h1>
      <p>Time Updated: <xsl:value-of select="/rss/channel/pubDate"/>For: </p>
      <p>The weather today: <xsl:value-of select="/rss/channel/item[1]/description"/></p>
      <p>The weather tomorrow: <xsl:value-of select="/rss/channel/item[2]/description"/></p>

    </div>

  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
