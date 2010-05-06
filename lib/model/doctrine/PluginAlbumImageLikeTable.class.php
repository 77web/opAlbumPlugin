<?php

/**
 * PluginAlbumImageLikeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginAlbumImageLikeTable extends Doctrine_Table
{
    public function getAlbumImageLike($albumImageId, $memberId)
    {
      $q = $this->createQuery()
        ->where('album_image_id = ?', $albumImageId)
        ->andWhere('member_id = ?', $memberId);
        
      return $q->fetchOne();
    }
}