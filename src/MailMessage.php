<?php
declare(strict_types=1);

namespace SetBased\Abc\Mail;

/**
 * Interface for creating and sending emails.
 */
interface MailMessage
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a Bcc addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addBcc(?int $usrId, string $address, string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a Cc addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addCc(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a custom header to this message. If either of $name or $value is null no header will be added.
   *
   * @param string|null $name  The name of the header.
   * @param string|null $value The value of the header.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addCustomHeader(?string $name, ?string $value): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a From addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addFrom(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a Disposition-Notification-To  addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addReadReceiptTo(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   *  Adds a Reply-To addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addReplyTo(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a To addressee to this message.
   *
   * @param int|null    $usrId   The ID of the user.
   * @param string      $address The address.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function addTo(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Attaches a BLOB as an attachment to this message.
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function attach(int $blbId): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Embeds a BLOB in this message and returns the CID source.
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function embed(int $blbId): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sends the message and returns the ID of this sent message.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function send(): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the body of the body this message.
   *
   * @param int $blbId The ID of the BLOB that is the body of this message.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function setBody(int $blbId): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the Message-ID of this message.
   *
   * @param string $id The of the message.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function setMessageId(string $id): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Set the Sender of this message.
   *
   * @param int|null    $usrId   The ID of the user that is the sender.
   * @param string      $address The address of the sender.
   * @param string|null $name    The name associated with the address.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function setSender(?int $usrId, string $address, ?string $name = null): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets the subject of this message.
   *
   * @param $subject
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function setSubject(string $subject): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
