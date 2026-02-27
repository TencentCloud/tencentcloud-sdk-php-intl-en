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
 * Reported spam data.
 *
 * @method string getDeliverTime() Obtain Send time.
 * @method void setDeliverTime(string $DeliverTime) Set Send time.
 * @method string getOriginalMailFrom() Obtain Sender address.
 * @method void setOriginalMailFrom(string $OriginalMailFrom) Set Sender address.
 * @method string getOriginalRcptTo() Obtain Receive email.
 * @method void setOriginalRcptTo(string $OriginalRcptTo) Set Receive email.
 * @method string getFromDomain() Obtain Sender domain name.
 * @method void setFromDomain(string $FromDomain) Set Sender domain name.
 * @method string getComplainTime() Obtain Complaint time.
 * @method void setComplainTime(string $ComplainTime) Set Complaint time.
 * @method string getMta() Obtain Recipient domain name.
 * @method void setMta(string $Mta) Set Recipient domain name.
 * @method string getSourceIp() Obtain Source IP
 * @method void setSourceIp(string $SourceIp) Set Source IP
 * @method string getInsertTime() Obtain Data time.
 * @method void setInsertTime(string $InsertTime) Set Data time.
 * @method string getTemplateId() Obtain Template ID
 * @method void setTemplateId(string $TemplateId) Set Template ID
 * @method string getBulkId() Obtain bulkId
 * @method void setBulkId(string $BulkId) Set bulkId
 * @method string getMessageId() Obtain Message-Id in mail.
 * @method void setMessageId(string $MessageId) Set Message-Id in mail.
 * @method string getAbuseTime() Obtain Complaint time.
 * @method void setAbuseTime(string $AbuseTime) Set Complaint time.
 * @method string getSubject() Obtain Email subject.
 * @method void setSubject(string $Subject) Set Email subject.
 */
class AbuseReport extends AbstractModel
{
    /**
     * @var string Send time.
     */
    public $DeliverTime;

    /**
     * @var string Sender address.
     */
    public $OriginalMailFrom;

    /**
     * @var string Receive email.
     */
    public $OriginalRcptTo;

    /**
     * @var string Sender domain name.
     */
    public $FromDomain;

    /**
     * @var string Complaint time.
     */
    public $ComplainTime;

    /**
     * @var string Recipient domain name.
     */
    public $Mta;

    /**
     * @var string Source IP
     */
    public $SourceIp;

    /**
     * @var string Data time.
     */
    public $InsertTime;

    /**
     * @var string Template ID
     */
    public $TemplateId;

    /**
     * @var string bulkId
     */
    public $BulkId;

    /**
     * @var string Message-Id in mail.
     */
    public $MessageId;

    /**
     * @var string Complaint time.
     */
    public $AbuseTime;

    /**
     * @var string Email subject.
     */
    public $Subject;

    /**
     * @param string $DeliverTime Send time.
     * @param string $OriginalMailFrom Sender address.
     * @param string $OriginalRcptTo Receive email.
     * @param string $FromDomain Sender domain name.
     * @param string $ComplainTime Complaint time.
     * @param string $Mta Recipient domain name.
     * @param string $SourceIp Source IP
     * @param string $InsertTime Data time.
     * @param string $TemplateId Template ID
     * @param string $BulkId bulkId
     * @param string $MessageId Message-Id in mail.
     * @param string $AbuseTime Complaint time.
     * @param string $Subject Email subject.
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
        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("OriginalMailFrom",$param) and $param["OriginalMailFrom"] !== null) {
            $this->OriginalMailFrom = $param["OriginalMailFrom"];
        }

        if (array_key_exists("OriginalRcptTo",$param) and $param["OriginalRcptTo"] !== null) {
            $this->OriginalRcptTo = $param["OriginalRcptTo"];
        }

        if (array_key_exists("FromDomain",$param) and $param["FromDomain"] !== null) {
            $this->FromDomain = $param["FromDomain"];
        }

        if (array_key_exists("ComplainTime",$param) and $param["ComplainTime"] !== null) {
            $this->ComplainTime = $param["ComplainTime"];
        }

        if (array_key_exists("Mta",$param) and $param["Mta"] !== null) {
            $this->Mta = $param["Mta"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("BulkId",$param) and $param["BulkId"] !== null) {
            $this->BulkId = $param["BulkId"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("AbuseTime",$param) and $param["AbuseTime"] !== null) {
            $this->AbuseTime = $param["AbuseTime"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }
    }
}
