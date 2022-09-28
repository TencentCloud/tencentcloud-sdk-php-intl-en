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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot attack log
 *
 * @method integer getAttackTime() Obtain The attack time recorded in seconds using UNIX timestamp.
 * @method void setAttackTime(integer $AttackTime) Set The attack time recorded in seconds using UNIX timestamp.
 * @method string getAttackIp() Obtain The attacker IP.
 * @method void setAttackIp(string $AttackIp) Set The attacker IP.
 * @method string getDomain() Obtain The attacked domain name.
 * @method void setDomain(string $Domain) Set The attacked domain name.
 * @method string getRequestUri() Obtain The URI.
 * @method void setRequestUri(string $RequestUri) Set The URI.
 * @method string getAttackType() Obtain Attack type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackType(string $AttackType) Set Attack type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestMethod() Obtain Request method.
 * @method void setRequestMethod(string $RequestMethod) Set Request method.
 * @method string getAttackContent() Obtain The attack content.
 * @method void setAttackContent(string $AttackContent) Set The attack content.
 * @method string getRiskLevel() Obtain The attack level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set The attack level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSipCountryCode() Obtain The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
 * @method void setSipCountryCode(string $SipCountryCode) Set The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
 * @method string getEventId() Obtain The attack event ID.
 * @method void setEventId(string $EventId) Set The attack event ID.
 * @method string getDisposalMethod() Obtain The processing method.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisposalMethod(string $DisposalMethod) Set The processing method.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpLog() Obtain The HTTP log.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpLog(string $HttpLog) Set The HTTP log.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUa() Obtain The user agent.
 * @method void setUa(string $Ua) Set The user agent.
 * @method string getDetectionMethod() Obtain The detection method.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectionMethod(string $DetectionMethod) Set The detection method.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfidence() Obtain The credibility level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(string $Confidence) Set The credibility level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaliciousness() Obtain Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaliciousness(string $Maliciousness) Set Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRuleDetailList() Obtain The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleDetailList(array $RuleDetailList) Set The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain The bot tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set The bot tag.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotLog extends AbstractModel
{
    /**
     * @var integer The attack time recorded in seconds using UNIX timestamp.
     */
    public $AttackTime;

    /**
     * @var string The attacker IP.
     */
    public $AttackIp;

    /**
     * @var string The attacked domain name.
     */
    public $Domain;

    /**
     * @var string The URI.
     */
    public $RequestUri;

    /**
     * @var string Attack type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackType;

    /**
     * @var string Request method.
     */
    public $RequestMethod;

    /**
     * @var string The attack content.
     */
    public $AttackContent;

    /**
     * @var string The attack level.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var integer The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
     */
    public $SipCountryCode;

    /**
     * @var string The attack event ID.
     */
    public $EventId;

    /**
     * @var string The processing method.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisposalMethod;

    /**
     * @var string The HTTP log.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpLog;

    /**
     * @var string The user agent.
     */
    public $Ua;

    /**
     * @var string The detection method.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectionMethod;

    /**
     * @var string The credibility level.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @var string Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Maliciousness;

    /**
     * @var array The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleDetailList;

    /**
     * @var string The bot tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @param integer $AttackTime The attack time recorded in seconds using UNIX timestamp.
     * @param string $AttackIp The attacker IP.
     * @param string $Domain The attacked domain name.
     * @param string $RequestUri The URI.
     * @param string $AttackType Attack type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestMethod Request method.
     * @param string $AttackContent The attack content.
     * @param string $RiskLevel The attack level.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SipCountryCode The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
     * @param string $EventId The attack event ID.
     * @param string $DisposalMethod The processing method.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpLog The HTTP log.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ua The user agent.
     * @param string $DetectionMethod The detection method.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Confidence The credibility level.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Maliciousness Maliciousness
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RuleDetailList The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Label The bot tag.
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

        if (array_key_exists("RuleDetailList",$param) and $param["RuleDetailList"] !== null) {
            $this->RuleDetailList = [];
            foreach ($param["RuleDetailList"] as $key => $value){
                $obj = new SecRuleRelatedInfo();
                $obj->deserialize($value);
                array_push($this->RuleDetailList, $obj);
            }
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
