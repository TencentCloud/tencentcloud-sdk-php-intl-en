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
 * Bot attack log
 *
 * @method integer getAttackTime() Obtain Attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackTime(integer $AttackTime) Set Attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackIp() Obtain Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackIp(string $AttackIp) Set Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestUri() Obtain Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestUri(string $RequestUri) Set Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackType() Obtain Attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackType(string $AttackType) Set Attack type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestMethod() Obtain Request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestMethod(string $RequestMethod) Set Request method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackContent() Obtain Attack content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackContent(string $AttackContent) Set Attack content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule number
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
 * @method string getDetectionMethod() Obtain Detection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectionMethod(string $DetectionMethod) Set Detection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfidence() Obtain Confidence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(string $Confidence) Set Confidence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaliciousness() Obtain Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaliciousness(string $Maliciousness) Set Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotLog extends AbstractModel
{
    /**
     * @var integer Attack time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackTime;

    /**
     * @var string Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackIp;

    /**
     * @var string Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestUri;

    /**
     * @var string Attack type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackType;

    /**
     * @var string Request method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestMethod;

    /**
     * @var string Attack content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackContent;

    /**
     * @var string Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var integer Rule number
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
     * @var string Detection method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectionMethod;

    /**
     * @var string Confidence
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @var string Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Maliciousness;

    /**
     * @param integer $AttackTime Attack time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackIp Attack IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestUri Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackType Attack type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestMethod Request method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackContent Attack content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule number
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
     * @param string $DetectionMethod Detection method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Confidence Confidence
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Maliciousness Maliciousness
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
        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
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

        if (array_key_exists("DetectionMethod",$param) and $param["DetectionMethod"] !== null) {
            $this->DetectionMethod = $param["DetectionMethod"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Maliciousness",$param) and $param["Maliciousness"] !== null) {
            $this->Maliciousness = $param["Maliciousness"];
        }
    }
}
