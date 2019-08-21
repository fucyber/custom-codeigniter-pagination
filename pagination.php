<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['custom'] = array(
            'base_url'             => $uri,
            'per_page'             => $per_page,
            'uri_segment'          => $segment,
            'total_rows'           => $total_rows,
            'num_links'            => 2,
            'enable_query_strings' => TRUE,
            'page_query_string'    => TRUE,
            'query_string_segment' => 'page',
            'full_tag_open'        => '<ul class="kt-datatable__pager-nav">',
            'full_tag_close'       => '</ul>',
            'num_tag_open'         => '<li>',
            'num_tag_close'        => '</li>',
            'cur_tag_open'         => '<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active">',
            'cur_tag_close'        => '</a></li>',
            'next_tag_open'        => '<li>',
            'next_tagl_close'      => '</li>',
            'prev_tag_open'        => '<li>',
            'prev_tagl_close'      => '</li>',
            'first_tag_open'       => '<li>',
            'first_tagl_close'     => '</li>',
            'last_tag_open'        => '<li>',
            'last_tagl_close'      => '</li>',
            'first_link'           => '<i title="First" class="flaticon2-fast-back"></i>',
            'last_link'            => '<i title="Last" class="flaticon2-fast-next"></i>',
            'attributes'   => [
                    'class' => 'kt-datatable__pager-link kt-datatable__pager-link-number',
                    'rel' => TRUE
                ]
        );
        
        
/* With BootStrap4 */

$config['bootstrap4'] = array(
            'base_url'             => $uri,
            'per_page'             => $per_page,
            'uri_segment'          => $segment,
            'total_rows'           => $total_rows,
            'enable_query_strings' => TRUE,
            'page_query_string'    => TRUE,
            'query_string_segment' => 'page',
            'full_tag_open'        => '<nav><ul class="pagination">',
            'full_tag_close'       => '</ul></nav>',
            'num_tag_open'         => '<li class="page-item">',
            'num_tag_close'        => '</li>',
            'cur_tag_open'         => '<li class="page-item active"><span class="page-link">',
            'cur_tag_close'        => '<span class="sr-only">(current)</span></span></li>',
            'next_tag_open'        => '<li class="page-item">',
            'next_tagl_close'      => '</li>',
            'prev_tag_open'        => '<li class="page-item">',
            'prev_tagl_close'      => '</li>',
            'first_tag_open'       => '<li class="page-item">',
            'first_tagl_close'     => '</li>',
            'last_tag_open'        => '<li class="page-item">',
            'last_tagl_close'      => '</li>',
            'first_link'           => '<i title="First" class="flaticon2-fast-back"></i>',
            'last_link'            => '<i title="Last" class="flaticon2-fast-next"></i>',
            'attributes'   => [
                    'class' => 'page-link'
                ]
        );
        
  
// end of file Pagination.php 
// Location config/pagination.php 
// @fucyber
