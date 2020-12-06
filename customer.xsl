<?xml version = "1.0" encoding = "UTF-8"?> 
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match = "/"> 
<html> <body> <h2><center>Customer Details</center></h2> 
<table border = "1" align="center"> 
<tr bgcolor = "#D1C4E9"> <th>Customer ID</th> <th>First Name</th> <th>Last Name</th> <th>Place of Residence</th><th>Order ID</th><th>Bill</th></tr>
<xsl:for-each select = "cust_list/customer"> 
<xsl:sort select = "orderid"/> 
<tr> 
<td><xsl:value-of select = "@id"/></td> 
<td><xsl:value-of select = "firstname"/></td> 
<td><xsl:value-of select = "lastname"/></td>  
<td><xsl:value-of select = "residence"/></td> 
<td><xsl:value-of select = "orderid"/></td> 
<td><xsl:value-of select = "bill"/></td> 
</tr> 
</xsl:for-each> 
</table> </body> </html> 
</xsl:template> 
</xsl:stylesheet>
