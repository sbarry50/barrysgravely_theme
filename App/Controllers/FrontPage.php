<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function manufacturers()
    {
        $manufacturers = new \WP_Query(array(
            'post_type' => 'manufacturers',
            'post_status' => 'publish',
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ));

        $manufacturers_list = array_map(function ($post) {            
            return [
                'content' => apply_filters('the_content', $post->post_content),
                'image' => get_the_post_thumbnail($post->ID, 'full'),
                'id' => get_field('manufacturer_id', $post->ID),
                'url' => get_field('manufacturers_url', $post->ID),
            ];
        }, $manufacturers->posts);

        $manufacturers_list = $this->assignParity($manufacturers_list);

        return $manufacturers_list;
    }

    protected function assignParity(array $collection)
    {
        $updated = [];
        $counter = 0;
        foreach ($collection as $item) {
            $item['parity'] = ($counter % 2) ? 'even' : 'odd';
            $counter++;
            array_push($updated, $item);
        }
        return $updated;
    }
}
