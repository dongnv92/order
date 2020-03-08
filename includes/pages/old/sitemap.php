<?php
require_once '../core.php';
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

echo '<url>
  <loc>http://buynhanh.com/</loc>
  <lastmod>2019-03-23T03:04:58+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>http://buynhanh.com/new</loc>
  <lastmod>2019-03-23T03:04:58+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>http://buynhanh.com/feature</loc>
  <lastmod>2019-03-23T03:04:58+00:00</lastmod>
  <priority>0.80</priority>
</url>';

// Category
foreach ($db->select()->from(_TABLE_CATEGORY)->where('category_type', 'shop')->fetch() as $category){
    echo '
<url>
  <loc>'. $function->getUrlCategory($category['category_id']) .'</loc>
  <lastmod>'. date('Y-m-d', $category['category_time']).'T'.date('H:i:s+07:00', $category['category_time']).'</lastmod>
  <priority>1.00</priority>
</url>';
}
// Category
// Post
foreach ($db->select()->from(_TABLE_PRODUCT)->fetch() as $product){
    echo '
<url>
  <loc>'. $function->getUrlProduct($product['product_id']) .'</loc>
  <lastmod>'. date('Y-m-d', $product['product_time']).'T'.date('H:i:s+07:00', $product['product_time']).'</lastmod>
  <priority>0.80</priority>
</url>';
}
// Post

echo '</urlset>';