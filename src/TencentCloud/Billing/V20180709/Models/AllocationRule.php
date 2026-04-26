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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on allocation rules hit by the current resource
 *
 * @method integer getRuleId() Obtain Allocation rule ID
 * @method void setRuleId(integer $RuleId) Set Allocation rule ID
 * @method string getRuleName() Obtain Allocation rule name
 * @method void setRuleName(string $RuleName) Set Allocation rule name
 */
class AllocationRule extends AbstractModel
{
    /**
     * @var integer Allocation rule ID
     */
    public $RuleId;

    /**
     * @var string Allocation rule name
     */
    public $RuleName;

    /**
     * @param integer $RuleId Allocation rule ID
     * @param string $RuleName Allocation rule name
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
