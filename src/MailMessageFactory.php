<?php
declare(strict_types=1);

namespace Plaisio\Mail;

/**
 * Interface for factories for creating mail messages.
 */
interface MailMessageFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a mail message.
   *
   * @return MailMessage
   */
  public function createMailMessage(): MailMessage;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
