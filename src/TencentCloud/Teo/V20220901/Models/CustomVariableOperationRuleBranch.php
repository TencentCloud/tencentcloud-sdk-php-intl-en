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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom Variable operation sub-rule branch.
 *
 * @method string getCondition() Obtain <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition</a>.</p>
 * @method void setCondition(string $Condition) Set <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition</a>.</p>
 * @method array getActions() Obtain <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#c7bd7e02-9247-4a72-b0e4-11c27cadb198">Operate</a>.<br>Note: Actions and SubRules cannot be empty at the same time.</p>
 * @method void setActions(array $Actions) Set <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#c7bd7e02-9247-4a72-b0e4-11c27cadb198">Operate</a>.<br>Note: Actions and SubRules cannot be empty at the same time.</p>
 * @method array getSubRules() Obtain <p>Sub-rule list. If there are multiple rules in the list, they are executed in order from top to bottom.<br>Note: SubRules and Actions cannot be empty at the same time. Currently only support filling one level of SubRules.</p>
 * @method void setSubRules(array $SubRules) Set <p>Sub-rule list. If there are multiple rules in the list, they are executed in order from top to bottom.<br>Note: SubRules and Actions cannot be empty at the same time. Currently only support filling one level of SubRules.</p>
 */
class CustomVariableOperationRuleBranch extends AbstractModel
{
    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition</a>.</p>
     */
    public $Condition;

    /**
     * @var array <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#c7bd7e02-9247-4a72-b0e4-11c27cadb198">Operate</a>.<br>Note: Actions and SubRules cannot be empty at the same time.</p>
     */
    public $Actions;

    /**
     * @var array <p>Sub-rule list. If there are multiple rules in the list, they are executed in order from top to bottom.<br>Note: SubRules and Actions cannot be empty at the same time. Currently only support filling one level of SubRules.</p>
     */
    public $SubRules;

    /**
     * @param string $Condition <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition</a>.</p>
     * @param array $Actions <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#c7bd7e02-9247-4a72-b0e4-11c27cadb198">Operate</a>.<br>Note: Actions and SubRules cannot be empty at the same time.</p>
     * @param array $SubRules <p>Sub-rule list. If there are multiple rules in the list, they are executed in order from top to bottom.<br>Note: SubRules and Actions cannot be empty at the same time. Currently only support filling one level of SubRules.</p>
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new CustomVariableOperationRuleAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("SubRules",$param) and $param["SubRules"] !== null) {
            $this->SubRules = [];
            foreach ($param["SubRules"] as $key => $value){
                $obj = new CustomVariableOperationSubRule();
                $obj->deserialize($value);
                array_push($this->SubRules, $obj);
            }
        }
    }
}
