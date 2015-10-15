<?php 
/*

1. Set Cookie to HttpOnly 
   Set-Cookie: COOKIE=VAL; path=/; domain=.domain.com; secure; HttpOnly

2. Disable Directory Listing in .htaccess file 
   Options -Indexes

3. Disable Server Banners in the Apache httpd.conf file. 
   ServerSignature Off
   ServerTokens Prod

4. Set Security Headers - X-Content-Type: nosniff
   Set X-Content-Type-Options: nosniff Header 
   or you can put below content in the .htaccess file 
  <IfModule mod_headers.c>
     Header set X-Content-Type-Options nosniff
  </IfModule>

5. Set Security Headers - X-Frame-Options 
   In order to improve the security of your site against ClickJacking, it is recommended that you add the following     header to your site:
   Set X-Frame-Options: SAMEORIGIN Header
   Or you can put below content in the .htaccess file 
   <IfModule mod_headers.c>
        Header always append X-Frame-Options SAMEORIGIN 
   </IfModule>

6. Security Headers - X-XSS-Protection
   In order to improve the security of your site against some types of XSS (cross-site scripting) attacks, it is recommended that you add the following header to your site.
   X-XSS-Protection: 1; mode=block
  Or you can put below content in the .htaccess file 
  <IfModule mod_headers.c>
      Header set X-XSS-Protection "1; mode=block"
  </IfModule>

7. HTTP Trace Method
   In order to improve the security of your site (and your users), you should disable the TRACE method from your web server. This method has no real-life usage and can be misused for XST (cross-site tracing) attacks.
That is how you can disable it on Apache (via .htaccess):
  <IfModule mod_rewrite.c>
      RewriteEngine On 
      RewriteCond %{REQUEST_METHOD} ^TRACE 
      RewriteRule .* - [F]
  </IfModule>
  
  */
  ?>
