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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web attack log
 *
 * @method string getAttackContent() Obtain Attack content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackContent(string $AttackContent) Set Attack content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackIp() Obtain Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackIp(string $AttackIp) Set Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackType() Obtain Attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackType(string $AttackType) Set Attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsuuid() Obtain uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsuuid(string $Msuuid) Set uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestMethod() Obtain Request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestMethod(string $RequestMethod) Set Request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestUri() Obtain Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestUri(string $RequestUri) Set Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSipCountryCode() Obtain IP country/region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSipCountryCode(string $SipCountryCode) Set IP country/region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventId() Obtain Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(string $EventId) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisposalMethod() Obtain Processing method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisposalMethod(string $DisposalMethod) Set Processing method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpLog() Obtain http_log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpLog(string $HttpLog) Set http_log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUa() Obtain user agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUa(string $Ua) Set user agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackTime() Obtain Attack time. For consistency considerations, the original parameter `time` was renamed `AttackTime`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackTime(integer $AttackTime) Set Attack time. For consistency considerations, the original parameter `time` was renamed `AttackTime`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WebLogs extends AbstractModel
{
    /**
     * @var string Attack content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackContent;

    /**
     * @var string Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackIp;

    /**
     * @var string Attack type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackType;

    /**
     * @var string Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string uuid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Msuuid;

    /**
     * @var string Request method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestMethod;

    /**
     * @var string Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestUri;

    /**
     * @var string Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string IP country/region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SipCountryCode;

    /**
     * @var string Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var string Processing method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisposalMethod;

    /**
     * @var string http_log
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpLog;

    /**
     * @var string user agent
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ua;

    /**
     * @var integer Attack time. For consistency considerations, the original parameter `time` was renamed `AttackTime`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackTime;

    /**
     * @param string $AttackContent Attack content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackIp Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackType Attack type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Msuuid uuid
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestMethod Request method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestUri Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SipCountryCode IP country/region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisposalMethod Processing method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpLog http_log
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ua user agent
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackTime Attack time. For consistency considerations, the original parameter `time` was renamed `AttackTime`.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Msuuid",$param) and $param["Msuuid"] !== null) {
            $this->Msuuid = $param["Msuuid"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SipCountryCode",$param) and $param["SipCountryCode"] !== null) {
            $this->SipCountryCode = $param["SipCountryCode"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DisposalMethod",$param) and $param["DisposalMethod"] !== null) {
            $this->DisposalMethod = $param["DisposalMethod"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
