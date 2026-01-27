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
 * BatchSendEmail request structure.
 *
 * @method string getFromEmailAddress() Obtain Sender'S email address. please fill in the sender's email address, such as noreply@mail.qcloud.com. if you need to fill in the sender's description, please follow.
Sender &lt;email address&gt; via fill in, such as:.
Tencent cloud team &lt;noreply@mail.qcloud.com&gt;.
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender'S email address. please fill in the sender's email address, such as noreply@mail.qcloud.com. if you need to fill in the sender's description, please follow.
Sender &lt;email address&gt; via fill in, such as:.
Tencent cloud team &lt;noreply@mail.qcloud.com&gt;.
 * @method integer getReceiverId() Obtain Recipient list ID.
 * @method void setReceiverId(integer $ReceiverId) Set Recipient list ID.
 * @method string getSubject() Obtain Email subject.
 * @method void setSubject(string $Subject) Set Email subject.
 * @method integer getTaskType() Obtain Task type 1: send now 2: scheduled sending 3: cycle (frequency) sending.
 * @method void setTaskType(integer $TaskType) Set Task type 1: send now 2: scheduled sending 3: cycle (frequency) sending.
 * @method string getReplyToAddresses() Obtain The "reply" email address of the mail. can be filled with an email address you can receive mail from, can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set The "reply" email address of the mail. can be filled with an email address you can receive mail from, can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
 * @method Template getTemplate() Obtain When using a template to send, fill in the related parameters of the template.
<Dx-Alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
 * @method void setTemplate(Template $Template) Set When using a template to send, fill in the related parameters of the template.
<Dx-Alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
 * @method Simple getSimple() Obtain Abandoned<Dx-Alert infotype="notice" title="description">only customers who historically applied for special configuration require the use of it. if you have not applied for special configuration, this field does not exist.</dx-alert>.
 * @method void setSimple(Simple $Simple) Set Abandoned<Dx-Alert infotype="notice" title="description">only customers who historically applied for special configuration require the use of it. if you have not applied for special configuration, this field does not exist.</dx-alert>.
 * @method array getAttachments() Obtain Send attachment when required. fill in related parameters (not supported).
 * @method void setAttachments(array $Attachments) Set Send attachment when required. fill in related parameters (not supported).
 * @method CycleEmailParam getCycleParam() Obtain Required parameter for sending tasks periodically.
 * @method void setCycleParam(CycleEmailParam $CycleParam) Set Required parameter for sending tasks periodically.
 * @method TimedEmailParam getTimedParam() Obtain Required parameter for scheduled task assignment.
 * @method void setTimedParam(TimedEmailParam $TimedParam) Set Required parameter for scheduled task assignment.
 * @method string getUnsubscribe() Obtain Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method integer getADLocation() Obtain Whether to add an ad flag. valid values: 0 (do not add), 1 (add to the previous subject), 2 (add to the following subject).
 * @method void setADLocation(integer $ADLocation) Set Whether to add an ad flag. valid values: 0 (do not add), 1 (add to the previous subject), 2 (add to the following subject).
 */
class BatchSendEmailRequest extends AbstractModel
{
    /**
     * @var string Sender'S email address. please fill in the sender's email address, such as noreply@mail.qcloud.com. if you need to fill in the sender's description, please follow.
Sender &lt;email address&gt; via fill in, such as:.
Tencent cloud team &lt;noreply@mail.qcloud.com&gt;.
     */
    public $FromEmailAddress;

    /**
     * @var integer Recipient list ID.
     */
    public $ReceiverId;

    /**
     * @var string Email subject.
     */
    public $Subject;

    /**
     * @var integer Task type 1: send now 2: scheduled sending 3: cycle (frequency) sending.
     */
    public $TaskType;

    /**
     * @var string The "reply" email address of the mail. can be filled with an email address you can receive mail from, can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
     */
    public $ReplyToAddresses;

    /**
     * @var Template When using a template to send, fill in the related parameters of the template.
<Dx-Alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
     */
    public $Template;

    /**
     * @var Simple Abandoned<Dx-Alert infotype="notice" title="description">only customers who historically applied for special configuration require the use of it. if you have not applied for special configuration, this field does not exist.</dx-alert>.
     */
    public $Simple;

    /**
     * @var array Send attachment when required. fill in related parameters (not supported).
     */
    public $Attachments;

    /**
     * @var CycleEmailParam Required parameter for sending tasks periodically.
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam Required parameter for scheduled task assignment.
     */
    public $TimedParam;

    /**
     * @var string Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     */
    public $Unsubscribe;

    /**
     * @var integer Whether to add an ad flag. valid values: 0 (do not add), 1 (add to the previous subject), 2 (add to the following subject).
     */
    public $ADLocation;

    /**
     * @param string $FromEmailAddress Sender'S email address. please fill in the sender's email address, such as noreply@mail.qcloud.com. if you need to fill in the sender's description, please follow.
Sender &lt;email address&gt; via fill in, such as:.
Tencent cloud team &lt;noreply@mail.qcloud.com&gt;.
     * @param integer $ReceiverId Recipient list ID.
     * @param string $Subject Email subject.
     * @param integer $TaskType Task type 1: send now 2: scheduled sending 3: cycle (frequency) sending.
     * @param string $ReplyToAddresses The "reply" email address of the mail. can be filled with an email address you can receive mail from, can be a personal mailbox. if left empty, the recipient's reply mail will fail to send.
     * @param Template $Template When using a template to send, fill in the related parameters of the template.
<Dx-Alert infotype="notice" title="note">this field must be specified if you have not applied for special configuration.</dx-alert>.
     * @param Simple $Simple Abandoned<Dx-Alert infotype="notice" title="description">only customers who historically applied for special configuration require the use of it. if you have not applied for special configuration, this field does not exist.</dx-alert>.
     * @param array $Attachments Send attachment when required. fill in related parameters (not supported).
     * @param CycleEmailParam $CycleParam Required parameter for sending tasks periodically.
     * @param TimedEmailParam $TimedParam Required parameter for scheduled task assignment.
     * @param string $Unsubscribe Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     * @param integer $ADLocation Whether to add an ad flag. valid values: 0 (do not add), 1 (add to the previous subject), 2 (add to the following subject).
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

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
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

        if (array_key_exists("CycleParam",$param) and $param["CycleParam"] !== null) {
            $this->CycleParam = new CycleEmailParam();
            $this->CycleParam->deserialize($param["CycleParam"]);
        }

        if (array_key_exists("TimedParam",$param) and $param["TimedParam"] !== null) {
            $this->TimedParam = new TimedEmailParam();
            $this->TimedParam->deserialize($param["TimedParam"]);
        }

        if (array_key_exists("Unsubscribe",$param) and $param["Unsubscribe"] !== null) {
            $this->Unsubscribe = $param["Unsubscribe"];
        }

        if (array_key_exists("ADLocation",$param) and $param["ADLocation"] !== null) {
            $this->ADLocation = $param["ADLocation"];
        }
    }
}
