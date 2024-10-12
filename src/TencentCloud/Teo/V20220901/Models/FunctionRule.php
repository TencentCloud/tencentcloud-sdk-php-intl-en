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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trigger rules for an edge function
 *
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method array getFunctionRuleConditions() Obtain Rule condition list. There is an OR relationship between items in the list.
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) Set Rule condition list. There is an OR relationship between items in the list.
 * @method string getFunctionId() Obtain Function ID, specifying a function executed when a trigger rule condition is met.
 * @method void setFunctionId(string $FunctionId) Set Function ID, specifying a function executed when a trigger rule condition is met.
 * @method string getRemark() Obtain Rule description.
 * @method void setRemark(string $Remark) Set Rule description.
 * @method string getFunctionName() Obtain Function name.
 * @method void setFunctionName(string $FunctionName) Set Function name.
 * @method integer getPriority() Obtain Priority of a trigger rule for a function. The larger the value, the higher the priority.
 * @method void setPriority(integer $Priority) Set Priority of a trigger rule for a function. The larger the value, the higher the priority.
 * @method string getCreateTime() Obtain Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setCreateTime(string $CreateTime) Set Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getUpdateTime() Obtain Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setUpdateTime(string $UpdateTime) Set Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 */
class FunctionRule extends AbstractModel
{
    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var array Rule condition list. There is an OR relationship between items in the list.
     */
    public $FunctionRuleConditions;

    /**
     * @var string Function ID, specifying a function executed when a trigger rule condition is met.
     */
    public $FunctionId;

    /**
     * @var string Rule description.
     */
    public $Remark;

    /**
     * @var string Function name.
     */
    public $FunctionName;

    /**
     * @var integer Priority of a trigger rule for a function. The larger the value, the higher the priority.
     */
    public $Priority;

    /**
     * @var string Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $CreateTime;

    /**
     * @var string Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $UpdateTime;

    /**
     * @param string $RuleId Rule ID.
     * @param array $FunctionRuleConditions Rule condition list. There is an OR relationship between items in the list.
     * @param string $FunctionId Function ID, specifying a function executed when a trigger rule condition is met.
     * @param string $Remark Rule description.
     * @param string $FunctionName Function name.
     * @param integer $Priority Priority of a trigger rule for a function. The larger the value, the higher the priority.
     * @param string $CreateTime Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $UpdateTime Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
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

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
