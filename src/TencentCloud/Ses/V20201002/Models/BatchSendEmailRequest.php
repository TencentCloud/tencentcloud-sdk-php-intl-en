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
 * @method string getFromEmailAddress() Obtain <p>Sender's email address. Please fill in the sender's email address, for example: noreply@mail.qcloud.com. If you need to fill in the sender description, please enter it via<br>sender &lt;email address&gt;, for example:<br>Tencent Cloud team &lt;noreply@mail.qcloud.com&gt;</p>
 * @method void setFromEmailAddress(string $FromEmailAddress) Set <p>Sender's email address. Please fill in the sender's email address, for example: noreply@mail.qcloud.com. If you need to fill in the sender description, please enter it via<br>sender &lt;email address&gt;, for example:<br>Tencent Cloud team &lt;noreply@mail.qcloud.com&gt;</p>
 * @method integer getReceiverId() Obtain <p>Recipient list ID</p>
 * @method void setReceiverId(integer $ReceiverId) Set <p>Recipient list ID</p>
 * @method string getSubject() Obtain <p>Email Subject</p>
 * @method void setSubject(string $Subject) Set <p>Email Subject</p>
 * @method integer getTaskType() Obtain <p>Task type 1: Send now 2: Scheduled sending 3: Cycle (frequency) sending</p>
 * @method void setTaskType(integer $TaskType) Set <p>Task type 1: Send now 2: Scheduled sending 3: Cycle (frequency) sending</p>
 * @method string getReplyToAddresses() Obtain <p>The "reply" email address of the mail. Can be filled with an email address you can receive mail, can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set <p>The "reply" email address of the mail. Can be filled with an email address you can receive mail, can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
 * @method Template getTemplate() Obtain <p>Template-related parameters to fill in when sending with a template</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
 * @method void setTemplate(Template $Template) Set <p>Template-related parameters to fill in when sending with a template</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
 * @method Simple getSimple() Obtain <p>Abandoned<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration need to use this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote></p>
 * @method void setSimple(Simple $Simple) Set <p>Abandoned<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration need to use this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote></p>
 * @method array getAttachments() Obtain <p>When you need to send an attachment, fill in the related parameters (not supported).</p>
 * @method void setAttachments(array $Attachments) Set <p>When you need to send an attachment, fill in the related parameters (not supported).</p>
 * @method CycleEmailParam getCycleParam() Obtain <p>Required parameter for sending tasks periodically</p>
 * @method void setCycleParam(CycleEmailParam $CycleParam) Set <p>Required parameter for sending tasks periodically</p>
 * @method TimedEmailParam getTimedParam() Obtain <p>Required parameter of scheduled task assignment</p>
 * @method void setTimedParam(TimedEmailParam $TimedParam) Set <p>Required parameter of scheduled task assignment</p>
 * @method string getUnsubscribe() Obtain Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai. 11: indonesian.
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai. 11: indonesian.
 * @method integer getADLocation() Obtain <p>Whether to add an ad flag 0: do not add 1: add to the previous subject 2: add to the following subject</p>
 * @method void setADLocation(integer $ADLocation) Set <p>Whether to add an ad flag 0: do not add 1: add to the previous subject 2: add to the following subject</p>
 */
class BatchSendEmailRequest extends AbstractModel
{
    /**
     * @var string <p>Sender's email address. Please fill in the sender's email address, for example: noreply@mail.qcloud.com. If you need to fill in the sender description, please enter it via<br>sender &lt;email address&gt;, for example:<br>Tencent Cloud team &lt;noreply@mail.qcloud.com&gt;</p>
     */
    public $FromEmailAddress;

    /**
     * @var integer <p>Recipient list ID</p>
     */
    public $ReceiverId;

    /**
     * @var string <p>Email Subject</p>
     */
    public $Subject;

    /**
     * @var integer <p>Task type 1: Send now 2: Scheduled sending 3: Cycle (frequency) sending</p>
     */
    public $TaskType;

    /**
     * @var string <p>The "reply" email address of the mail. Can be filled with an email address you can receive mail, can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
     */
    public $ReplyToAddresses;

    /**
     * @var Template <p>Template-related parameters to fill in when sending with a template</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
     */
    public $Template;

    /**
     * @var Simple <p>Abandoned<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration need to use this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote></p>
     */
    public $Simple;

    /**
     * @var array <p>When you need to send an attachment, fill in the related parameters (not supported).</p>
     */
    public $Attachments;

    /**
     * @var CycleEmailParam <p>Required parameter for sending tasks periodically</p>
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam <p>Required parameter of scheduled task assignment</p>
     */
    public $TimedParam;

    /**
     * @var string Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai. 11: indonesian.
     */
    public $Unsubscribe;

    /**
     * @var integer <p>Whether to add an ad flag 0: do not add 1: add to the previous subject 2: add to the following subject</p>
     */
    public $ADLocation;

    /**
     * @param string $FromEmailAddress <p>Sender's email address. Please fill in the sender's email address, for example: noreply@mail.qcloud.com. If you need to fill in the sender description, please enter it via<br>sender &lt;email address&gt;, for example:<br>Tencent Cloud team &lt;noreply@mail.qcloud.com&gt;</p>
     * @param integer $ReceiverId <p>Recipient list ID</p>
     * @param string $Subject <p>Email Subject</p>
     * @param integer $TaskType <p>Task type 1: Send now 2: Scheduled sending 3: Cycle (frequency) sending</p>
     * @param string $ReplyToAddresses <p>The "reply" email address of the mail. Can be filled with an email address you can receive mail, can be a personal mailbox. If left empty, the recipient's reply mail will fail to send.</p>
     * @param Template $Template <p>Template-related parameters to fill in when sending with a template</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Note</div>        <div class="rno-document-tip-desc"><p>This field must be specified if you have not applied for special configuration</p></div>    </div></blockquote>
     * @param Simple $Simple <p>Abandoned<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">Description</div>        <div class="rno-document-tip-desc"><p>Only customers who historically applied for special configuration need to use this. If you have not applied for special configuration, this field does not exist.</p></div>    </div></blockquote></p>
     * @param array $Attachments <p>When you need to send an attachment, fill in the related parameters (not supported).</p>
     * @param CycleEmailParam $CycleParam <p>Required parameter for sending tasks periodically</p>
     * @param TimedEmailParam $TimedParam <p>Required parameter of scheduled task assignment</p>
     * @param string $Unsubscribe Unsubscription link options 0: do not add 1: english 2: simplified chinese 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai. 11: indonesian.
     * @param integer $ADLocation <p>Whether to add an ad flag 0: do not add 1: add to the previous subject 2: add to the following subject</p>
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
