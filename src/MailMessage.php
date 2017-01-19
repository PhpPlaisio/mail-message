<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Mail;

//----------------------------------------------------------------------------------------------------------------------
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
  public function addBcc($usrId, $address, $name = null);

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
  public function addCc($usrId, $address, $name = null);

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
  public function addCustomHeader($name, $value);

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
  public function addFrom($usrId, $address, $name = null);

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
  public function addReadReceiptTo($usrId, $address, $name = null);

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
  public function addReplyTo($usrId, $address, $name = null);

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
  public function addTo($usrId, $address, $name = null);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Attaches a BLOB as a attachment to this message.
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function attach($blbId);

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
  public function embed($blbId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sends the message and returns the ID of this sent message
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function send();

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
  public function setBody($blbId);

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
  public function setMessageId($id);

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
  public function setSender($usrId, $address, $name = null);

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
  public function setSubject($subject);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
