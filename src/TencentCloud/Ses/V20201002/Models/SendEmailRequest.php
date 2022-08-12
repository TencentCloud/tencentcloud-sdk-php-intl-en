<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getFromEmailAddress() Obtain Sender address. Enter a sender address, for example, noreply@mail.qcloud.com.
To display the sender name, enter the address in the following format: 
Sender <email address>
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender address. Enter a sender address, for example, noreply@mail.qcloud.com.
To display the sender name, enter the address in the following format: 
Sender <email address>
 * @method array getDestination() Obtain Recipient email addresses. You can send an email to up to 50 recipients at a time. Note: the email content will display all recipient addresses. To send one-to-one emails to several recipients, please call the API multiple times to send the emails.
 * @method void setDestination(array $Destination) Set Recipient email addresses. You can send an email to up to 50 recipients at a time. Note: the email content will display all recipient addresses. To send one-to-one emails to several recipients, please call the API multiple times to send the emails.
 * @method string getSubject() Obtain Email subject.
 * @method void setSubject(string $Subject) Set Email subject.
 * @method string getReplyToAddresses() Obtain Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
 * @method Template getTemplate() Obtain Template when sending emails using a template.
 * @method void setTemplate(Template $Template) Set Template when sending emails using a template.
 * @method Simple getSimple() Obtain Disused
 * @method void setSimple(Simple $Simple) Set Disused
 * @method array getAttachments() Obtain Email attachments
 * @method void setAttachments(array $Attachments) Set Email attachments
 * @method string getUnsubscribe() Obtain Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
 * @method integer getTriggerType() Obtain Email triggering type. `0` (default): non-trigger-based, suitable for marketing emails and non-immediate emails; `1`: trigger-based, suitable for immediate emails such as emails containing verification codes. If the size of an email exceeds a specified value, the system will automatically choose the non-trigger-based type.
 * @method void setTriggerType(integer $TriggerType) Set Email triggering type. `0` (default): non-trigger-based, suitable for marketing emails and non-immediate emails; `1`: trigger-based, suitable for immediate emails such as emails containing verification codes. If the size of an email exceeds a specified value, the system will automatically choose the non-trigger-based type.
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string Sender address. Enter a sender address, for example, noreply@mail.qcloud.com.
To display the sender name, enter the address in the following format: 
Sender <email address>
     */
    public $FromEmailAddress;

    /**
     * @var array Recipient email addresses. You can send an email to up to 50 recipients at a time. Note: the email content will display all recipient addresses. To send one-to-one emails to several recipients, please call the API multiple times to send the emails.
     */
    public $Destination;

    /**
     * @var string Email subject.
     */
    public $Subject;

    /**
     * @var string Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
     */
    public $ReplyToAddresses;

    /**
     * @var Template Template when sending emails using a template.
     */
    public $Template;

    /**
     * @var Simple Disused
     */
    public $Simple;

    /**
     * @var array Email attachments
     */
    public $Attachments;

    /**
     * @var string Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
     */
    public $Unsubscribe;

    /**
     * @var integer Email triggering type. `0` (default): non-trigger-based, suitable for marketing emails and non-immediate emails; `1`: trigger-based, suitable for immediate emails such as emails containing verification codes. If the size of an email exceeds a specified value, the system will automatically choose the non-trigger-based type.
     */
    public $TriggerType;

    /**
     * @param string $FromEmailAddress Sender address. Enter a sender address, for example, noreply@mail.qcloud.com.
To display the sender name, enter the address in the following format: 
Sender <email address>
     * @param array $Destination Recipient email addresses. You can send an email to up to 50 recipients at a time. Note: the email content will display all recipient addresses. To send one-to-one emails to several recipients, please call the API multiple times to send the emails.
     * @param string $Subject Email subject.
     * @param string $ReplyToAddresses Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
     * @param Template $Template Template when sending emails using a template.
     * @param Simple $Simple Disused
     * @param array $Attachments Email attachments
     * @param string $Unsubscribe Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
     * @param integer $TriggerType Email triggering type. `0` (default): non-trigger-based, suitable for marketing emails and non-immediate emails; `1`: trigger-based, suitable for immediate emails such as emails containing verification codes. If the size of an email exceeds a specified value, the system will automatically choose the non-trigger-based type.
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
    }
}
