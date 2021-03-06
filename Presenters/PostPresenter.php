<?php namespace Modules\Blog\Presenters;

use Laracasts\Presenter\Presenter;

class PostPresenter extends Presenter
{
    /**
     * @var \Modules\Blog\Repositories\PostRepository
     */
    private $post;

    public function __construct($entity)
    {
        parent::__construct($entity);
        $this->post = app('Modules\Blog\Repositories\PostRepository');
    }

    /**
     * Get the previous post of the current post
     * @return object
     */
    public function previous()
    {
        return $this->post->getPreviousOf($this->entity);
    }

    /**
     * Get the next post of the current post
     * @return object
     */
    public function next()
    {
        return $this->post->getNextOf($this->entity);
    }
}
