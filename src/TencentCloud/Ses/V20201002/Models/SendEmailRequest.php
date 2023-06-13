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
 * @method array getCc() Obtain 
 * @method void setCc(array $Cc) Set 
 * @method array getBcc() Obtain 
 * @method void setBcc(array $Bcc) Set 
 * @method Template getTemplate() Obtain Template parameters for template-based sending. As `Simple` has been disused, `Template` is required.
 * @method void setTemplate(Template $Template) Set Template parameters for template-based sending. As `Simple` has been disused, `Template` is required.
 * @method Simple getSimple() Obtain Disused
 * @method void setSimple(Simple $Simple) Set Disused
 * @method array getAttachments() Obtain Parameters for the attachments to be sent. The TencentCloud API supports a request packet of up to 8 MB in size, and the size of the attachment content will increase by 1.5 times after Base64 encoding. Therefore, you need to keep the total size of all attachments below 4 MB. If the entire request exceeds 8 MB, the API will return an error.
 * @method void setAttachments(array $Attachments) Set Parameters for the attachments to be sent. The TencentCloud API supports a request packet of up to 8 MB in size, and the size of the attachment content will increase by 1.5 times after Base64 encoding. Therefore, you need to keep the total size of all attachments below 4 MB. If the entire request exceeds 8 MB, the API will return an error.
 * @method string getUnsubscribe() Obtain Unsubscribe link option. `0`: Do not add unsubscribe link; `1`: English `2`: Simplified Chinese; `3`: Traditional Chinese; `4`: Spanish; `5`: French; `6`: German; `7`: Japanese; `8`: Korean; `9`: Arabic; `10`: Thai
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscribe link option. `0`: Do not add unsubscribe link; `1`: English `2`: Simplified Chinese; `3`: Traditional Chinese; `4`: Spanish; `5`: French; `6`: German; `7`: Japanese; `8`: Korean; `9`: Arabic; `10`: Thai
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
     * @var array 
     */
    public $Cc;

    /**
     * @var array 
     */
    public $Bcc;

    /**
     * @var Template Template parameters for template-based sending. As `Simple` has been disused, `Template` is required.
     */
    public $Template;

    /**
     * @var Simple Disused
     */
    public $Simple;

    /**
     * @var array Parameters for the attachments to be sent. The TencentCloud API supports a request packet of up to 8 MB in size, and the size of the attachment content will increase by 1.5 times after Base64 encoding. Therefore, you need to keep the total size of all attachments below 4 MB. If the entire request exceeds 8 MB, the API will return an error.
     */
    public $Attachments;

    /**
     * @var string Unsubscribe link option. `0`: Do not add unsubscribe link; `1`: English `2`: Simplified Chinese; `3`: Traditional Chinese; `4`: Spanish; `5`: French; `6`: German; `7`: Japanese; `8`: Korean; `9`: Arabic; `10`: Thai
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
     * @param array $Cc 
     * @param array $Bcc 
     * @param Template $Template Template parameters for template-based sending. As `Simple` has been disused, `Template` is required.
     * @param Simple $Simple Disused
     * @param array $Attachments Parameters for the attachments to be sent. The TencentCloud API supports a request packet of up to 8 MB in size, and the size of the attachment content will increase by 1.5 times after Base64 encoding. Therefore, you need to keep the total size of all attachments below 4 MB. If the entire request exceeds 8 MB, the API will return an error.
     * @param string $Unsubscribe Unsubscribe link option. `0`: Do not add unsubscribe link; `1`: English `2`: Simplified Chinese; `3`: Traditional Chinese; `4`: Spanish; `5`: French; `6`: German; `7`: Japanese; `8`: Korean; `9`: Arabic; `10`: Thai
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
    }
}
