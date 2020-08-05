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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCCFrequencyRules request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method string getCCFrequencyRuleId() Obtain CC access frequency control rule ID
 * @method void setCCFrequencyRuleId(string $CCFrequencyRuleId) Set CC access frequency control rule ID
 * @method string getMode() Obtain Matching rule. Valid values: ["include" (prefix match), "equal" (exact match)]
 * @method void setMode(string $Mode) Set Matching rule. Valid values: ["include" (prefix match), "equal" (exact match)]
 * @method integer getPeriod() Obtain Reference period in seconds. Valid values: [10, 30, 60]
 * @method void setPeriod(integer $Period) Set Reference period in seconds. Valid values: [10, 30, 60]
 * @method integer getReqNumber() Obtain Number of access requests. Value range: [1-10000]
 * @method void setReqNumber(integer $ReqNumber) Set Number of access requests. Value range: [1-10000]
 * @method string getAct() Obtain Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
 * @method void setAct(string $Act) Set Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
 * @method integer getExeDuration() Obtain Execution duration in seconds. Valid range: [1-900]
 * @method void setExeDuration(integer $ExeDuration) Set Execution duration in seconds. Valid range: [1-900]
 * @method string getUri() Obtain URI string, which must start with `/`, such as `/abc/a.php`. Length limit: 31. If URI is `/`, only prefix match can be selected as the matching mode;
 * @method void setUri(string $Uri) Set URI string, which must start with `/`, such as `/abc/a.php`. Length limit: 31. If URI is `/`, only prefix match can be selected as the matching mode;
 * @method string getUserAgent() Obtain `User-Agent` string. Length limit: 80
 * @method void setUserAgent(string $UserAgent) Set `User-Agent` string. Length limit: 80
 * @method string getCookie() Obtain Cookie string. Length limit: 40
 * @method void setCookie(string $Cookie) Set Cookie string. Length limit: 40
 */
class ModifyCCFrequencyRulesRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string CC access frequency control rule ID
     */
    public $CCFrequencyRuleId;

    /**
     * @var string Matching rule. Valid values: ["include" (prefix match), "equal" (exact match)]
     */
    public $Mode;

    /**
     * @var integer Reference period in seconds. Valid values: [10, 30, 60]
     */
    public $Period;

    /**
     * @var integer Number of access requests. Value range: [1-10000]
     */
    public $ReqNumber;

    /**
     * @var string Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
     */
    public $Act;

    /**
     * @var integer Execution duration in seconds. Valid range: [1-900]
     */
    public $ExeDuration;

    /**
     * @var string URI string, which must start with `/`, such as `/abc/a.php`. Length limit: 31. If URI is `/`, only prefix match can be selected as the matching mode;
     */
    public $Uri;

    /**
     * @var string `User-Agent` string. Length limit: 80
     */
    public $UserAgent;

    /**
     * @var string Cookie string. Length limit: 40
     */
    public $Cookie;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     * @param string $CCFrequencyRuleId CC access frequency control rule ID
     * @param string $Mode Matching rule. Valid values: ["include" (prefix match), "equal" (exact match)]
     * @param integer $Period Reference period in seconds. Valid values: [10, 30, 60]
     * @param integer $ReqNumber Number of access requests. Value range: [1-10000]
     * @param string $Act Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
     * @param integer $ExeDuration Execution duration in seconds. Valid range: [1-900]
     * @param string $Uri URI string, which must start with `/`, such as `/abc/a.php`. Length limit: 31. If URI is `/`, only prefix match can be selected as the matching mode;
     * @param string $UserAgent `User-Agent` string. Length limit: 80
     * @param string $Cookie Cookie string. Length limit: 40
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("CCFrequencyRuleId",$param) and $param["CCFrequencyRuleId"] !== null) {
            $this->CCFrequencyRuleId = $param["CCFrequencyRuleId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ReqNumber",$param) and $param["ReqNumber"] !== null) {
            $this->ReqNumber = $param["ReqNumber"];
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("ExeDuration",$param) and $param["ExeDuration"] !== null) {
            $this->ExeDuration = $param["ExeDuration"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }
    }
}
