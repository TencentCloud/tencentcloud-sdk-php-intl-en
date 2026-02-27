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
 * GetAbuseReport request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Limit quantity (default: 1000).
 * @method void setLimit(integer $Limit) Set Limit quantity (default: 1000).
 * @method string getFromDomain() Obtain Sender domain name.
 * @method void setFromDomain(string $FromDomain) Set Sender domain name.
 * @method string getFromAddress() Obtain Sender address.
 * @method void setFromAddress(string $FromAddress) Set Sender address.
 * @method string getMta() Obtain Recipient domain name.
 * @method void setMta(string $Mta) Set Recipient domain name.
 * @method string getToAddress() Obtain Receive email.
 * @method void setToAddress(string $ToAddress) Set Receive email.
 * @method string getTemplateId() Obtain Template ID
 * @method void setTemplateId(string $TemplateId) Set Template ID
 */
class GetAbuseReportRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Limit quantity (default: 1000).
     */
    public $Limit;

    /**
     * @var string Sender domain name.
     */
    public $FromDomain;

    /**
     * @var string Sender address.
     */
    public $FromAddress;

    /**
     * @var string Recipient domain name.
     */
    public $Mta;

    /**
     * @var string Receive email.
     */
    public $ToAddress;

    /**
     * @var string Template ID
     */
    public $TemplateId;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param integer $Offset Offset.
     * @param integer $Limit Limit quantity (default: 1000).
     * @param string $FromDomain Sender domain name.
     * @param string $FromAddress Sender address.
     * @param string $Mta Recipient domain name.
     * @param string $ToAddress Receive email.
     * @param string $TemplateId Template ID
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FromDomain",$param) and $param["FromDomain"] !== null) {
            $this->FromDomain = $param["FromDomain"];
        }

        if (array_key_exists("FromAddress",$param) and $param["FromAddress"] !== null) {
            $this->FromAddress = $param["FromAddress"];
        }

        if (array_key_exists("Mta",$param) and $param["Mta"] !== null) {
            $this->Mta = $param["Mta"];
        }

        if (array_key_exists("ToAddress",$param) and $param["ToAddress"] !== null) {
            $this->ToAddress = $param["ToAddress"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
