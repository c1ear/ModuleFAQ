<?php
namespace Storenameaslkd\ModuleCrud\Api\Data;
interface GridInterface
{
    const POST_ID = 'post_id';
    const TAGS = 'tags';
    const POST_CONTENT = 'post_content';
    const NAME = 'name';
    const IS_ACTIVE = 'is_active';
    const CREATED_AT = 'created_at';
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getPostId();
    public function setPostId($postId);

    public function getTags();
    public function setTags($tags);

    public function getPostContent();
    public function setPostContent($postContent);

    public function getName();
    public function setName($name);


    public function getIsActive();
    public function setIsActive($isActive);

    public function getCreatedAt();
    public function setCreatedAt($createdAt);
}