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
 * Domain name, which corresponds to the rule ID structure.
 *
 * @method string getDomain() Obtain Domain name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleId() Obtain Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(string $RuleId) Set Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
 */
class DomainRuleId extends AbstractModel
{
    /**
     * @var string Domain name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @param string $Domain Domain name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleId Rule ID

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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
