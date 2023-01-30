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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchImageAutoAuthorizedRule request structure.
 *
 * @method integer getIsEnabled() Obtain Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 */
class SwitchImageAutoAuthorizedRuleRequest extends AbstractModel
{
    /**
     * @var integer Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     */
    public $IsEnabled;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @param integer $IsEnabled Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     * @param integer $RuleId Rule ID
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
