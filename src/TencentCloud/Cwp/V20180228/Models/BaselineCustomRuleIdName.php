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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline Custom Rule ID and Name
 *
 * @method integer getRuleId() Obtain Custom rule ID　
 * @method void setRuleId(integer $RuleId) Set Custom rule ID　
 * @method string getRuleName() Obtain Custom Rule Name
 * @method void setRuleName(string $RuleName) Set Custom Rule Name
 */
class BaselineCustomRuleIdName extends AbstractModel
{
    /**
     * @var integer Custom rule ID　
     */
    public $RuleId;

    /**
     * @var string Custom Rule Name
     */
    public $RuleName;

    /**
     * @param integer $RuleId Custom rule ID　
     * @param string $RuleName Custom Rule Name
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
