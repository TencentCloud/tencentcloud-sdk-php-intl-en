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
 * ModifyAntiInfoLeakRules request structure.
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getActionType() Obtain Action value
 * @method void setActionType(integer $ActionType) Set Action value
 * @method array getStrategies() Obtain Policy array
 * @method void setStrategies(array $Strategies) Set Policy array
 */
class ModifyAntiInfoLeakRulesRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Action value
     */
    public $ActionType;

    /**
     * @var array Policy array
     */
    public $Strategies;

    /**
     * @param integer $RuleId Rule ID
     * @param string $Name Rule name
     * @param string $Domain Domain name
     * @param integer $ActionType Action value
     * @param array $Strategies Policy array
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new StrategyForAntiInfoLeak();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }
    }
}
