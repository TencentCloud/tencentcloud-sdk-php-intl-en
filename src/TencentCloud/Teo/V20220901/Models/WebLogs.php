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
 * Web attack log
 *
 * @method string getEventId() Obtain The attack event ID.
 * @method void setEventId(string $EventId) Set The attack event ID.
 * @method string getAttackIp() Obtain The attacker IP.
 * @method void setAttackIp(string $AttackIp) Set The attacker IP.
 * @method string getDomain() Obtain The attacked subdomain name.
 * @method void setDomain(string $Domain) Set The attacked subdomain name.
 * @method string getHttpLog() Obtain The HTTP log content.
 * @method void setHttpLog(string $HttpLog) Set The HTTP log content.
 * @method string getSipCountryCode() Obtain The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
 * @method void setSipCountryCode(string $SipCountryCode) Set The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
 * @method integer getAttackTime() Obtain The attack time recorded in seconds using UNIX timestamp.
 * @method void setAttackTime(integer $AttackTime) Set The attack time recorded in seconds using UNIX timestamp.
 * @method string getRequestUri() Obtain The request address.
 * @method void setRequestUri(string $RequestUri) Set The request address.
 * @method string getAttackContent() Obtain The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackContent(string $AttackContent) Set The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRuleDetailList() Obtain The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleDetailList(array $RuleDetailList) Set The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReqMethod() Obtain The request type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReqMethod(string $ReqMethod) Set The request type.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WebLogs extends AbstractModel
{
    /**
     * @var string The attack event ID.
     */
    public $EventId;

    /**
     * @var string The attacker IP.
     */
    public $AttackIp;

    /**
     * @var string The attacked subdomain name.
     */
    public $Domain;

    /**
     * @var string The HTTP log content.
     */
    public $HttpLog;

    /**
     * @var string The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
     */
    public $SipCountryCode;

    /**
     * @var integer The attack time recorded in seconds using UNIX timestamp.
     */
    public $AttackTime;

    /**
     * @var string The request address.
     */
    public $RequestUri;

    /**
     * @var string The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackContent;

    /**
     * @var array The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleDetailList;

    /**
     * @var string The request type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReqMethod;

    /**
     * @param string $EventId The attack event ID.
     * @param string $AttackIp The attacker IP.
     * @param string $Domain The attacked subdomain name.
     * @param string $HttpLog The HTTP log content.
     * @param string $SipCountryCode The country code of the attacker IP, which is defined in ISO-3166 alpha-2. For the list of country codes, see [ISO-3166](https://git.woa.com/edgeone/iso-3166/blob/master/all/all.json).
     * @param integer $AttackTime The attack time recorded in seconds using UNIX timestamp.
     * @param string $RequestUri The request address.
     * @param string $AttackContent The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RuleDetailList The security rule information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReqMethod The request type.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("SipCountryCode",$param) and $param["SipCountryCode"] !== null) {
            $this->SipCountryCode = $param["SipCountryCode"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }

        if (array_key_exists("RequestUri",$param) and $param["RequestUri"] !== null) {
            $this->RequestUri = $param["RequestUri"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("RuleDetailList",$param) and $param["RuleDetailList"] !== null) {
            $this->RuleDetailList = [];
            foreach ($param["RuleDetailList"] as $key => $value){
                $obj = new SecRuleRelatedInfo();
                $obj->deserialize($value);
                array_push($this->RuleDetailList, $obj);
            }
        }

        if (array_key_exists("ReqMethod",$param) and $param["ReqMethod"] !== null) {
            $this->ReqMethod = $param["ReqMethod"];
        }
    }
}
