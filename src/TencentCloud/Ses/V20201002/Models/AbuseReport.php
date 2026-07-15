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
 * @method string getDeliverTime() Obtain <p>Send time</p>
 * @method void setDeliverTime(string $DeliverTime) Set <p>Send time</p>
 * @method string getOriginalMailFrom() Obtain <p>Sender address</p>
 * @method void setOriginalMailFrom(string $OriginalMailFrom) Set <p>Sender address</p>
 * @method string getOriginalRcptTo() Obtain <p>Receive email address</p>
 * @method void setOriginalRcptTo(string $OriginalRcptTo) Set <p>Receive email address</p>
 * @method string getFromDomain() Obtain <p>Sender domain name</p>
 * @method void setFromDomain(string $FromDomain) Set <p>Sender domain name</p>
 * @method string getComplainTime() Obtain <p>Complaint time</p>
 * @method void setComplainTime(string $ComplainTime) Set <p>Complaint time</p>
 * @method string getMta() Obtain <p>Recipient domain name</p>
 * @method void setMta(string $Mta) Set <p>Recipient domain name</p>
 * @method string getSourceIp() Obtain <p>Source ip</p>
 * @method void setSourceIp(string $SourceIp) Set <p>Source ip</p>
 * @method string getInsertTime() Obtain <p>Data time</p>
 * @method void setInsertTime(string $InsertTime) Set <p>Data time</p>
 * @method string getTemplateId() Obtain <p>Template ID</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Template ID</p>
 * @method string getBulkId() Obtain <p>bulkId</p>
 * @method void setBulkId(string $BulkId) Set <p>bulkId</p>
 * @method string getMessageId() Obtain <p>Message-Id of the mail</p>
 * @method void setMessageId(string $MessageId) Set <p>Message-Id of the mail</p>
 * @method string getAbuseTime() Obtain <p>Complaint time</p>
 * @method void setAbuseTime(string $AbuseTime) Set <p>Complaint time</p>
 * @method string getSubject() Obtain <p>Email Subject</p>
 * @method void setSubject(string $Subject) Set <p>Email Subject</p>
 */
class AbuseReport extends AbstractModel
{
    /**
     * @var string <p>Send time</p>
     */
    public $DeliverTime;

    /**
     * @var string <p>Sender address</p>
     */
    public $OriginalMailFrom;

    /**
     * @var string <p>Receive email address</p>
     */
    public $OriginalRcptTo;

    /**
     * @var string <p>Sender domain name</p>
     */
    public $FromDomain;

    /**
     * @var string <p>Complaint time</p>
     */
    public $ComplainTime;

    /**
     * @var string <p>Recipient domain name</p>
     */
    public $Mta;

    /**
     * @var string <p>Source ip</p>
     */
    public $SourceIp;

    /**
     * @var string <p>Data time</p>
     */
    public $InsertTime;

    /**
     * @var string <p>Template ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>bulkId</p>
     */
    public $BulkId;

    /**
     * @var string <p>Message-Id of the mail</p>
     */
    public $MessageId;

    /**
     * @var string <p>Complaint time</p>
     */
    public $AbuseTime;

    /**
     * @var string <p>Email Subject</p>
     */
    public $Subject;

    /**
     * @param string $DeliverTime <p>Send time</p>
     * @param string $OriginalMailFrom <p>Sender address</p>
     * @param string $OriginalRcptTo <p>Receive email address</p>
     * @param string $FromDomain <p>Sender domain name</p>
     * @param string $ComplainTime <p>Complaint time</p>
     * @param string $Mta <p>Recipient domain name</p>
     * @param string $SourceIp <p>Source ip</p>
     * @param string $InsertTime <p>Data time</p>
     * @param string $TemplateId <p>Template ID</p>
     * @param string $BulkId <p>bulkId</p>
     * @param string $MessageId <p>Message-Id of the mail</p>
     * @param string $AbuseTime <p>Complaint time</p>
     * @param string $Subject <p>Email Subject</p>
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
