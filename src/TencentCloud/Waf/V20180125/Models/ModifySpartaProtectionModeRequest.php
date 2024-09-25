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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySpartaProtectionMode request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getMode() Obtain Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
 * @method void setMode(integer $Mode) Set Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
 * @method string getEdition() Obtain Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method void setEdition(string $Edition) Set Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method integer getType() Obtain 0 is for modifying the Rule Engine Status; 1 is for modifying the AI Status
 * @method void setType(integer $Type) Set 0 is for modifying the Rule Engine Status; 1 is for modifying the AI Status
 */
class ModifySpartaProtectionModeRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
     */
    public $Mode;

    /**
     * @var string Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     */
    public $Edition;

    /**
     * @var integer 0 is for modifying the Rule Engine Status; 1 is for modifying the AI Status
     */
    public $Type;

    /**
     * @param string $Domain Domain name
     * @param integer $Mode Protection status:
10: rule-based observation and AI disabling; 11: rule- and AI-based observation; 12: rule-based observation and AI-based interception
20: rule-based interception and AI disabling; 21: rule-based interception and AI-based observation; 22: rule- and AI-based interception
     * @param string $Edition Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     * @param integer $Type 0 is for modifying the Rule Engine Status; 1 is for modifying the AI Status
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
