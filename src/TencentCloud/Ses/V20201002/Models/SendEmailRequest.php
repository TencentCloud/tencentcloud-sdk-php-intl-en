<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendEmail request structure.
 *
 * @method string getFromEmailAddress() Obtain <p>Sender's email address. If no alias is used, enter the sender's email address directly, for example: noreply@mail.qcloud.com. To use a sender alias, follow this format (note that a space must be used between the alias and the email address): alias+space+&lt;email address&gt;. The alias cannot contain a colon (:).</p>
 * @method void setFromEmailAddress(string $FromEmailAddress) Set <p>Sender's email address. If no alias is used, enter the sender's email address directly, for example: noreply@mail.qcloud.com. To use a sender alias, follow this format (note that a space must be used between the alias and the email address): alias+space+&lt;email address&gt;. The alias cannot contain a colon (:).</p>
 * @method string getSubject() Obtain <p>Email Subject</p>
 * @method void setSubject(string $Subject) Set <p>Email Subject</p>
 * @method array getDestination() Obtain <p>Recipient email address, supports up to 50 recipients in mass sending. Note: The email content displays all recipient addresses. For non-mass sending, call the API multiple times to send.<br>At least one of the three parameters Destination/Cc/Bcc must exist.</p>
 * @method void setDestination(array $Destination) Set <p>Recipient email address, supports up to 50 recipients in mass sending. Note: The email content displays all recipient addresses. For non-mass sending, call the API multiple times to send.<br>At least one of the three parameters Destination/Cc/Bcc must exist.</p>
 * @method string getReplyToAddresses() Obtain <p>The "reply" email address of the mail. Can be filled with a mailbox address where you can receive emails, which can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set <p>The "reply" email address of the mail. Can be filled with a mailbox address where you can receive emails, which can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
 * @method array getCc() Obtain <p>Email address of CC recipients, supports up to 20 carbon copies.</p>
 * @method void setCc(array $Cc) Set <p>Email address of CC recipients, supports up to 20 carbon copies.</p>
 * @method array getBcc() Obtain <p>Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.</p>
 * @method void setBcc(array $Bcc) Set <p>Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.</p>
 * @method Template getTemplate() Obtain <p>Fill in the template parameters when sending with a template.</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
 * @method void setTemplate(Template $Template) Set <p>Fill in the template parameters when sending with a template.</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
 * @method Simple getSimple() Obtain <p>Abandoned</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration require the use of this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote>
 * @method void setSimple(Simple $Simple) Set <p>Abandoned</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration require the use of this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote>
 * @method array getAttachments() Obtain <p>To send an attachment, fill in the relevant parameters. The Tencent Cloud API request supports a maximum of 8M request packet. The attachment content is expected to expand by 1.5 times after Base64 encoding. The total size of all attachments should not exceed 4M. The API will return an error if the overall request exceeds 8M.</p>
 * @method void setAttachments(array $Attachments) Set <p>To send an attachment, fill in the relevant parameters. The Tencent Cloud API request supports a maximum of 8M request packet. The attachment content is expected to expand by 1.5 times after Base64 encoding. The total size of all attachments should not exceed 4M. The API will return an error if the overall request exceeds 8M.</p>
 * @method string getUnsubscribe() Obtain Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai 11: indonesian.
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai 11: indonesian.
 * @method integer getTriggerType() Obtain <p>Mail trigger type 0: Non-trigger class, default type, select this type for marketing email, non-instant mail. 1: Trigger class, instant delivery mail such as verification code. If the mail exceeds a certain size, the system will automatically select a non-trigger type channel.</p>
 * @method void setTriggerType(integer $TriggerType) Set <p>Mail trigger type 0: Non-trigger class, default type, select this type for marketing email, non-instant mail. 1: Trigger class, instant delivery mail such as verification code. If the mail exceeds a certain size, the system will automatically select a non-trigger type channel.</p>
 * @method string getSmtpMessageId() Obtain <p>Message-Id field in the smtp header</p>
 * @method void setSmtpMessageId(string $SmtpMessageId) Set <p>Message-Id field in the smtp header</p>
 * @method string getSmtpHeaders() Obtain <p>Other fields that can be set in the smtp header</p>
 * @method void setSmtpHeaders(string $SmtpHeaders) Set <p>Other fields that can be set in the smtp header</p>
 * @method string getHeaderFrom() Obtain <p>The from field in the smtp header. The domain name should be consistent with the FromEmailAddress.</p>
 * @method void setHeaderFrom(string $HeaderFrom) Set <p>The from field in the smtp header. The domain name should be consistent with the FromEmailAddress.</p>
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string <p>Sender's email address. If no alias is used, enter the sender's email address directly, for example: noreply@mail.qcloud.com. To use a sender alias, follow this format (note that a space must be used between the alias and the email address): alias+space+&lt;email address&gt;. The alias cannot contain a colon (:).</p>
     */
    public $FromEmailAddress;

    /**
     * @var string <p>Email Subject</p>
     */
    public $Subject;

    /**
     * @var array <p>Recipient email address, supports up to 50 recipients in mass sending. Note: The email content displays all recipient addresses. For non-mass sending, call the API multiple times to send.<br>At least one of the three parameters Destination/Cc/Bcc must exist.</p>
     */
    public $Destination;

    /**
     * @var string <p>The "reply" email address of the mail. Can be filled with a mailbox address where you can receive emails, which can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
     */
    public $ReplyToAddresses;

    /**
     * @var array <p>Email address of CC recipients, supports up to 20 carbon copies.</p>
     */
    public $Cc;

    /**
     * @var array <p>Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.</p>
     */
    public $Bcc;

    /**
     * @var Template <p>Fill in the template parameters when sending with a template.</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
     */
    public $Template;

    /**
     * @var Simple <p>Abandoned</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration require the use of this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote>
     */
    public $Simple;

    /**
     * @var array <p>To send an attachment, fill in the relevant parameters. The Tencent Cloud API request supports a maximum of 8M request packet. The attachment content is expected to expand by 1.5 times after Base64 encoding. The total size of all attachments should not exceed 4M. The API will return an error if the overall request exceeds 8M.</p>
     */
    public $Attachments;

    /**
     * @var string Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai 11: indonesian.
     */
    public $Unsubscribe;

    /**
     * @var integer <p>Mail trigger type 0: Non-trigger class, default type, select this type for marketing email, non-instant mail. 1: Trigger class, instant delivery mail such as verification code. If the mail exceeds a certain size, the system will automatically select a non-trigger type channel.</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Message-Id field in the smtp header</p>
     */
    public $SmtpMessageId;

    /**
     * @var string <p>Other fields that can be set in the smtp header</p>
     */
    public $SmtpHeaders;

    /**
     * @var string <p>The from field in the smtp header. The domain name should be consistent with the FromEmailAddress.</p>
     */
    public $HeaderFrom;

    /**
     * @param string $FromEmailAddress <p>Sender's email address. If no alias is used, enter the sender's email address directly, for example: noreply@mail.qcloud.com. To use a sender alias, follow this format (note that a space must be used between the alias and the email address): alias+space+&lt;email address&gt;. The alias cannot contain a colon (:).</p>
     * @param string $Subject <p>Email Subject</p>
     * @param array $Destination <p>Recipient email address, supports up to 50 recipients in mass sending. Note: The email content displays all recipient addresses. For non-mass sending, call the API multiple times to send.<br>At least one of the three parameters Destination/Cc/Bcc must exist.</p>
     * @param string $ReplyToAddresses <p>The "reply" email address of the mail. Can be filled with a mailbox address where you can receive emails, which can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
     * @param array $Cc <p>Email address of CC recipients, supports up to 20 carbon copies.</p>
     * @param array $Bcc <p>Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.</p>
     * @param Template $Template <p>Fill in the template parameters when sending with a template.</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
     * @param Simple $Simple <p>Abandoned</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration require the use of this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote>
     * @param array $Attachments <p>To send an attachment, fill in the relevant parameters. The Tencent Cloud API request supports a maximum of 8M request packet. The attachment content is expected to expand by 1.5 times after Base64 encoding. The total size of all attachments should not exceed 4M. The API will return an error if the overall request exceeds 8M.</p>
     * @param string $Unsubscribe Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai 11: indonesian.
     * @param integer $TriggerType <p>Mail trigger type 0: Non-trigger class, default type, select this type for marketing email, non-instant mail. 1: Trigger class, instant delivery mail such as verification code. If the mail exceeds a certain size, the system will automatically select a non-trigger type channel.</p>
     * @param string $SmtpMessageId <p>Message-Id field in the smtp header</p>
     * @param string $SmtpHeaders <p>Other fields that can be set in the smtp header</p>
     * @param string $HeaderFrom <p>The from field in the smtp header. The domain name should be consistent with the FromEmailAddress.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("ReplyToAddresses",$param) and $param["ReplyToAddresses"] !== null) {
            $this->ReplyToAddresses = $param["ReplyToAddresses"];
        }

        if (array_key_exists("Cc",$param) and $param["Cc"] !== null) {
            $this->Cc = $param["Cc"];
        }

        if (array_key_exists("Bcc",$param) and $param["Bcc"] !== null) {
            $this->Bcc = $param["Bcc"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("Simple",$param) and $param["Simple"] !== null) {
            $this->Simple = new Simple();
            $this->Simple->deserialize($param["Simple"]);
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new Attachment();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }

        if (array_key_exists("Unsubscribe",$param) and $param["Unsubscribe"] !== null) {
            $this->Unsubscribe = $param["Unsubscribe"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("SmtpMessageId",$param) and $param["SmtpMessageId"] !== null) {
            $this->SmtpMessageId = $param["SmtpMessageId"];
        }

        if (array_key_exists("SmtpHeaders",$param) and $param["SmtpHeaders"] !== null) {
            $this->SmtpHeaders = $param["SmtpHeaders"];
        }

        if (array_key_exists("HeaderFrom",$param) and $param["HeaderFrom"] !== null) {
            $this->HeaderFrom = $param["HeaderFrom"];
        }
    }
}
