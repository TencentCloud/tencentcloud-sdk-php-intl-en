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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMWafProtectRules request structure.
 *
 * @method string getServiceId() Obtain <p>In SDK mode, pass ServiceId (choose either this or Domain).</p>
 * @method void setServiceId(string $ServiceId) Set <p>In SDK mode, pass ServiceId (choose either this or Domain).</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getRuleType() Obtain <p>Rule type.</p>
 * @method void setRuleType(string $RuleType) Set <p>Rule type.</p>
 * @method string getDomain() Obtain <p>In domain mode, pass Domain (choose either this or ServiceId).</p>
 * @method void setDomain(string $Domain) Set <p>In domain mode, pass Domain (choose either this or ServiceId).</p>
 */
class DescribeLLMWafProtectRulesRequest extends AbstractModel
{
    /**
     * @var string <p>In SDK mode, pass ServiceId (choose either this or Domain).</p>
     */
    public $ServiceId;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Rule type.</p>
     */
    public $RuleType;

    /**
     * @var string <p>In domain mode, pass Domain (choose either this or ServiceId).</p>
     */
    public $Domain;

    /**
     * @param string $ServiceId <p>In SDK mode, pass ServiceId (choose either this or Domain).</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $RuleType <p>Rule type.</p>
     * @param string $Domain <p>In domain mode, pass Domain (choose either this or ServiceId).</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
