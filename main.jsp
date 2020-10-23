<%@ page import="java.io.*,java.util.*" %>
<html>
<head>
<title>Using GET and POST Method to Read Form Data</title>
</head>
 
<body>
<center>
<h1>Using POST Method to Read Form Data</h1>
 
<ul>
<li><p><b>First Name:</b>
<%=request.getParameter("firstname")%>
</p></li>
<li><p><b>Last  Name:</b>
<%=request.getParameter("lastname")%>
</p></li>
<li><p><b>Contact through</b>
    <%=request.getParameter("telnum-checkbox")%>
    </p></li>
    <li><p><b>Physics Flag:</b>
    <%=request.getParameter("email-checkbox")%>
    </p></li>
</ul>

</center>
 
</body>
</html>
