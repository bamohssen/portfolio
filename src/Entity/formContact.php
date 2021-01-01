<?php


namespace App\Entity;
use Symfony\Component\Validator\Constraints as  Assert;


class formContact
{
    /**
     * @var string |null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private  $name;


    /**
     * @var string |null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private  $email ;
    /**
     * @var string |null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private  $subject;

    /**
     * @var string |null
     * @Assert\NotBlank()
     * @Assert\Length(min=2)
     */
    private  $message;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return formContact
     */
    public function setName(?string $name): formContact
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return formContact
     */
    public function setEmail(?string $email): formContact
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return formContact
     */
    public function setSubject(?string $subject): formContact
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return formContact
     */
    public function setMessage(?string $message): formContact
    {
        $this->message = $message;
        return $this;
    }


}