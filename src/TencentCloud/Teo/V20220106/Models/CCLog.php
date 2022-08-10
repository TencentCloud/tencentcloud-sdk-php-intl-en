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
 * Block log in rate-limiting policy
 *
 * @method integer getAttackTime() Obtain Attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackTime(integer $AttackTime) Set Attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackSip() Obtain Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackSip(string $AttackSip) Set Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackDomain() Obtain Attack domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackDomain(string $AttackDomain) Set Attack domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestUri() Obtain Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestUri(string $RequestUri) Set Request URI
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHitCount() Obtain Number of hits
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHitCount(integer $HitCount) Set Number of hits
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
 * @method integer getRuleId() Obtain Rule number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CCLog extends AbstractModel
{
    /**
     * @var integer Attack time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackTime;

    /**
     * @var string Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackSip;

    /**
     * @var string Attack domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackDomain;

    /**
     * @var string Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestUri;

    /**
     * @var integer Number of hits
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HitCount;

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
     * @var integer Rule number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Risk grade
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @param integer $AttackTime Attack time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackSip Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackDomain Attack domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestUri Request URI
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HitCount Number of hits
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SipCountryCode IP country/region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisposalMethod Processing method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpLog http_log
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk grade
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

        if (array_key_exists("AttackSip",$param) and $param["AttackSip"] !== null) {
            $this->AttackSip = $param["AttackSip"];
        }

        if (array_key_exists("AttackDomain",$param) and $param["AttackDomain"] !== null) {
            $this->AttackDomain = $param["AttackDomain"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
