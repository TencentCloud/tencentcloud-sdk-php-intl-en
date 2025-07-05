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
 * ModifyFunctionRule request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method array getFunctionRuleConditions() Obtain Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If this parameter is not input, the original configuration is maintained.
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) Set Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If this parameter is not input, the original configuration is maintained.
 * @method string getFunctionId() Obtain Function ID, specifying a function executed when a trigger rule condition is met. If this parameter is not input, the original configuration is maintained.
 * @method void setFunctionId(string $FunctionId) Set Function ID, specifying a function executed when a trigger rule condition is met. If this parameter is not input, the original configuration is maintained.
 * @method string getRemark() Obtain Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.
 * @method void setRemark(string $Remark) Set Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.
 */
class ModifyFunctionRuleRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var array Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If this parameter is not input, the original configuration is maintained.
     */
    public $FunctionRuleConditions;

    /**
     * @var string Function ID, specifying a function executed when a trigger rule condition is met. If this parameter is not input, the original configuration is maintained.
     */
    public $FunctionId;

    /**
     * @var string Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.
     */
    public $Remark;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $RuleId Rule ID.
     * @param array $FunctionRuleConditions Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If this parameter is not input, the original configuration is maintained.
     * @param string $FunctionId Function ID, specifying a function executed when a trigger rule condition is met. If this parameter is not input, the original configuration is maintained.
     * @param string $Remark Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("FunctionRuleConditions",$param) and $param["FunctionRuleConditions"] !== null) {
            $this->FunctionRuleConditions = [];
            foreach ($param["FunctionRuleConditions"] as $key => $value){
                $obj = new FunctionRuleCondition();
                $obj->deserialize($value);
                array_push($this->FunctionRuleConditions, $obj);
            }
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
