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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRuleId() 获取Rule ID
 * @method void setRuleId(string $RuleId) 设置Rule ID
 * @method string getAliasName() 获取Rule name: up to 30 characters. The extra characters will be truncated.
 * @method void setAliasName(string $AliasName) 设置Rule name: up to 30 characters. The extra characters will be truncated.
 * @method string getPolicyId() 获取Security policy ID
 * @method void setPolicyId(string $PolicyId) 设置Security policy ID
 */

/**
 *ModifySecurityRule request structure.
 */
class ModifySecurityRuleRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name: up to 30 characters. The extra characters will be truncated.
     */
    public $AliasName;

    /**
     * @var string Security policy ID
     */
    public $PolicyId;
    /**
     * @param string $RuleId Rule ID
     * @param string $AliasName Rule name: up to 30 characters. The extra characters will be truncated.
     * @param string $PolicyId Security policy ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
