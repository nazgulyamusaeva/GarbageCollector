<?php

namespace GarbageCollector\EntityBundle\Entity;

/**
 * Request
 */
class Request
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \Application\FOS\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     */
    private $photo;

    /**
     * @var \GarbageCollector\EntityBundle\Entity\GarbageCan
     */
    private $garbageCan;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Request
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Request
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param \Application\FOS\UserBundle\Entity\User $user
     *
     * @return Request
     */
    public function setUser(\Application\FOS\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Set photo
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $photo
     *
     * @return Request
     */
    public function setPhoto(\Application\Sonata\MediaBundle\Entity\Media $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Get garbageCan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGarbageCan()
    {
        return $this->garbageCan;
    }

    /**
     * Set garbageCan
     *
     * @param \GarbageCollector\EntityBundle\Entity\GarbageCan $garbageCan
     *
     * @return Request
     */
    public function setGarbageCan(\GarbageCollector\EntityBundle\Entity\GarbageCan $garbageCan = null)
    {
        $this->garbageCan = $garbageCan;

        return $this;
    }

    public function prePersist() {
        $this->setCreatedAt(new \DateTime());
    }
}
