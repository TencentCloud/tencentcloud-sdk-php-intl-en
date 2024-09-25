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
 * Rule list element returned by DescribeAntiInfoLeakRules
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getStatus() Obtain Rule status
 * @method void setStatus(string $Status) Set Rule status
 * @method string getActionType() Obtain Rule Action Type
 * @method void setActionType(string $ActionType) Set Rule Action Type
 * @method string getCreateTime() Obtain Rule creation time
 * @method void setCreateTime(string $CreateTime) Set Rule creation time
 * @method array getStrategies() Obtain Detailed Rules
 * @method void setStrategies(array $Strategies) Set Detailed Rules
 */
class DescribeAntiInfoLeakRulesRuleItem extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Rule status
     */
    public $Status;

    /**
     * @var string Rule Action Type
     */
    public $ActionType;

    /**
     * @var string Rule creation time
     */
    public $CreateTime;

    /**
     * @var array Detailed Rules
     */
    public $Strategies;

    /**
     * @param string $RuleId Rule ID
     * @param string $Name Rule name
     * @param string $Status Rule status
     * @param string $ActionType Rule Action Type
     * @param string $CreateTime Rule creation time
     * @param array $Strategies Detailed Rules
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new DescribeAntiInfoLeakRulesStrategyItem();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }
    }
}
