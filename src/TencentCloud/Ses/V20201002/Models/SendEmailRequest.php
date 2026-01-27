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
 * @method string getFromEmailAddress() Obtain Sender'S email address. when not using an alias, enter the sender's email address directly, for example: noreply@mail.qcloud.com. to enter a sender alias, follow this format (note that a space must separate the alias and email address): alias+space+<email address>. the alias cannot contain a colon (:).
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender'S email address. when not using an alias, enter the sender's email address directly, for example: noreply@mail.qcloud.com. to enter a sender alias, follow this format (note that a space must separate the alias and email address): alias+space+<email address>. the alias cannot contain a colon (:).
 * @method array getDestination() Obtain Recipient email address, supports up to 50 recipients in mass sending. note: the email content displays all recipient addresses. for non-mass sending, call the API multiple times to send.
 * @method void setDestination(array $Destination) Set Recipient email address, supports up to 50 recipients in mass sending. note: the email content displays all recipient addresses. for non-mass sending, call the API multiple times to send.
 * @method string getSubject() Obtain Email subject.
 * @method void setSubject(string $Subject) Set Email subject.
 * @method string getReplyToAddresses() Obtain The "reply" email address of the mail. can be filled with an email address where you can receive mail, which can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set The "reply" email address of the mail. can be filled with an email address where you can receive mail, which can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
 * @method array getCc() Obtain Cc recipient email address, supports up to 20 carbon copies.
 * @method void setCc(array $Cc) Set Cc recipient email address, supports up to 20 carbon copies.
 * @method array getBcc() Obtain Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.
 * @method void setBcc(array $Bcc) Set Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.
 * @method Template getTemplate() Obtain Use template for sending and fill in related parameters.
<dx-alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
 * @method void setTemplate(Template $Template) Set Use template for sending and fill in related parameters.
<dx-alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
 * @method Simple getSimple() Obtain This parameter has been deprecated.
<dx-alert infotype="notice" title="description"> only customers who have applied for special configuration in the past need to use this. if you have not applied for special configuration, this field does not exist.</dx-alert>.
 * @method void setSimple(Simple $Simple) Set This parameter has been deprecated.
<dx-alert infotype="notice" title="description"> only customers who have applied for special configuration in the past need to use this. if you have not applied for special configuration, this field does not exist.</dx-alert>.
 * @method array getAttachments() Obtain When sending an attachment, fill in the related parameters. the tencent cloud API request supports a maximum of 8M request packet. the attachment content transits Base64 and is expected to expand by 1.5 times. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
 * @method void setAttachments(array $Attachments) Set When sending an attachment, fill in the related parameters. the tencent cloud API request supports a maximum of 8M request packet. the attachment content transits Base64 and is expected to expand by 1.5 times. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
 * @method string getUnsubscribe() Obtain Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method integer getTriggerType() Obtain Mail trigger type. 0: non-trigger class, default type, select this type for marketing emails and non-instant emails. 1: trigger class, instant delivery emails such as captcha-intl. if the mail exceeds a certain size, the system will automatically select the non-trigger class channel.
 * @method void setTriggerType(integer $TriggerType) Set Mail trigger type. 0: non-trigger class, default type, select this type for marketing emails and non-instant emails. 1: trigger class, instant delivery emails such as captcha-intl. if the mail exceeds a certain size, the system will automatically select the non-trigger class channel.
 * @method string getSmtpMessageId() Obtain Message-Id field in the smtp header.
 * @method void setSmtpMessageId(string $SmtpMessageId) Set Message-Id field in the smtp header.
 * @method string getSmtpHeaders() Obtain Other fields that can be set in the smtp header.
 * @method void setSmtpHeaders(string $SmtpHeaders) Set Other fields that can be set in the smtp header.
 * @method string getHeaderFrom() Obtain from field in the smtp header. the domain name should be consistent with FromEmailAddress.
 * @method void setHeaderFrom(string $HeaderFrom) Set from field in the smtp header. the domain name should be consistent with FromEmailAddress.
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string Sender'S email address. when not using an alias, enter the sender's email address directly, for example: noreply@mail.qcloud.com. to enter a sender alias, follow this format (note that a space must separate the alias and email address): alias+space+<email address>. the alias cannot contain a colon (:).
     */
    public $FromEmailAddress;

    /**
     * @var array Recipient email address, supports up to 50 recipients in mass sending. note: the email content displays all recipient addresses. for non-mass sending, call the API multiple times to send.
     */
    public $Destination;

    /**
     * @var string Email subject.
     */
    public $Subject;

    /**
     * @var string The "reply" email address of the mail. can be filled with an email address where you can receive mail, which can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
     */
    public $ReplyToAddresses;

    /**
     * @var array Cc recipient email address, supports up to 20 carbon copies.
     */
    public $Cc;

    /**
     * @var array Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.
     */
    public $Bcc;

    /**
     * @var Template Use template for sending and fill in related parameters.
<dx-alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
     */
    public $Template;

    /**
     * @var Simple This parameter has been deprecated.
<dx-alert infotype="notice" title="description"> only customers who have applied for special configuration in the past need to use this. if you have not applied for special configuration, this field does not exist.</dx-alert>.
     */
    public $Simple;

    /**
     * @var array When sending an attachment, fill in the related parameters. the tencent cloud API request supports a maximum of 8M request packet. the attachment content transits Base64 and is expected to expand by 1.5 times. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
     */
    public $Attachments;

    /**
     * @var string Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     */
    public $Unsubscribe;

    /**
     * @var integer Mail trigger type. 0: non-trigger class, default type, select this type for marketing emails and non-instant emails. 1: trigger class, instant delivery emails such as captcha-intl. if the mail exceeds a certain size, the system will automatically select the non-trigger class channel.
     */
    public $TriggerType;

    /**
     * @var string Message-Id field in the smtp header.
     */
    public $SmtpMessageId;

    /**
     * @var string Other fields that can be set in the smtp header.
     */
    public $SmtpHeaders;

    /**
     * @var string from field in the smtp header. the domain name should be consistent with FromEmailAddress.
     */
    public $HeaderFrom;

    /**
     * @param string $FromEmailAddress Sender'S email address. when not using an alias, enter the sender's email address directly, for example: noreply@mail.qcloud.com. to enter a sender alias, follow this format (note that a space must separate the alias and email address): alias+space+<email address>. the alias cannot contain a colon (:).
     * @param array $Destination Recipient email address, supports up to 50 recipients in mass sending. note: the email content displays all recipient addresses. for non-mass sending, call the API multiple times to send.
     * @param string $Subject Email subject.
     * @param string $ReplyToAddresses The "reply" email address of the mail. can be filled with an email address where you can receive mail, which can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
     * @param array $Cc Cc recipient email address, supports up to 20 carbon copies.
     * @param array $Bcc Bcc email address, supports up to 20 carbon copies. Bcc and Destination must be unique.
     * @param Template $Template Use template for sending and fill in related parameters.
<dx-alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
     * @param Simple $Simple This parameter has been deprecated.
<dx-alert infotype="notice" title="description"> only customers who have applied for special configuration in the past need to use this. if you have not applied for special configuration, this field does not exist.</dx-alert>.
     * @param array $Attachments When sending an attachment, fill in the related parameters. the tencent cloud API request supports a maximum of 8M request packet. the attachment content transits Base64 and is expected to expand by 1.5 times. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
     * @param string $Unsubscribe Unsubscription link options 0: do not add unsubscription link 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     * @param integer $TriggerType Mail trigger type. 0: non-trigger class, default type, select this type for marketing emails and non-instant emails. 1: trigger class, instant delivery emails such as captcha-intl. if the mail exceeds a certain size, the system will automatically select the non-trigger class channel.
     * @param string $SmtpMessageId Message-Id field in the smtp header.
     * @param string $SmtpHeaders Other fields that can be set in the smtp header.
     * @param string $HeaderFrom from field in the smtp header. the domain name should be consistent with FromEmailAddress.
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

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
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
