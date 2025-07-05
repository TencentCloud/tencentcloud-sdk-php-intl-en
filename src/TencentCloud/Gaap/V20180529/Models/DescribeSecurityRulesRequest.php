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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityRules request structure.
 *
 * @method array getSecurityRuleIds() Obtain List of security rule IDs. Up to 20 security rules are supported.
 * @method void setSecurityRuleIds(array $SecurityRuleIds) Set List of security rule IDs. Up to 20 security rules are supported.
 */
class DescribeSecurityRulesRequest extends AbstractModel
{
    /**
     * @var array List of security rule IDs. Up to 20 security rules are supported.
     */
    public $SecurityRuleIds;

    /**
     * @param array $SecurityRuleIds List of security rule IDs. Up to 20 security rules are supported.
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
        if (array_key_exists("SecurityRuleIds",$param) and $param["SecurityRuleIds"] !== null) {
            $this->SecurityRuleIds = $param["SecurityRuleIds"];
        }
    }
}
