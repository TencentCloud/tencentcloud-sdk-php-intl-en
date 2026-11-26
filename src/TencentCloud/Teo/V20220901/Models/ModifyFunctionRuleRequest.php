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
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getRuleId() Obtain <p>Rule ID. You can first use the DescribeFunctionRules API to get the RuleId of the rule that needs to be modified, then import the modified rule content. The original rule content will be overwritten.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID. You can first use the DescribeFunctionRules API to get the RuleId of the rule that needs to be modified, then import the modified rule content. The original rule content will be overwritten.</p>
 * @method array getFunctionRuleConditions() Obtain <p>Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If not specified, the original configuration is maintained.</p>
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) Set <p>Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If not specified, the original configuration is maintained.</p>
 * @method string getTriggerType() Obtain <p>Function selection configuration type:</p><li> direct: directly specify the execution function;</li><li> weight: select a function based on weight ratio;</li><li> region: select a function based on the client IP country/region.</li>Defaults to direct if not specified.
 * @method void setTriggerType(string $TriggerType) Set <p>Function selection configuration type:</p><li> direct: directly specify the execution function;</li><li> weight: select a function based on weight ratio;</li><li> region: select a function based on the client IP country/region.</li>Defaults to direct if not specified.
 * @method string getFunctionId() Obtain <p>Specify the function ID to be executed. This parameter is valid only when TriggerType is direct or left empty.</p>
 * @method void setFunctionId(string $FunctionId) Set <p>Specify the function ID to be executed. This parameter is valid only when TriggerType is direct or left empty.</p>
 * @method array getRegionMappingSelections() Obtain <p>Function selection configuration based on client IP country/region. This parameter is valid only when TriggerType is region, and RegionMappingSelections is required. RegionMappingSelections must contain one configuration with Regions as Default, and requires at least one other specific Region.</p>
 * @method void setRegionMappingSelections(array $RegionMappingSelections) Set <p>Function selection configuration based on client IP country/region. This parameter is valid only when TriggerType is region, and RegionMappingSelections is required. RegionMappingSelections must contain one configuration with Regions as Default, and requires at least one other specific Region.</p>
 * @method array getWeightedSelections() Obtain <p>Weight-based function selection configuration. This parameter is valid only when TriggerType is weight and WeightedSelections is required. The sum of all weights in WeightedSelections need to be 100.</p>
 * @method void setWeightedSelections(array $WeightedSelections) Set <p>Weight-based function selection configuration. This parameter is valid only when TriggerType is weight and WeightedSelections is required. The sum of all weights in WeightedSelections need to be 100.</p>
 * @method string getRemark() Obtain <p>Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.</p>
 * @method void setRemark(string $Remark) Set <p>Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.</p>
 */
class ModifyFunctionRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Rule ID. You can first use the DescribeFunctionRules API to get the RuleId of the rule that needs to be modified, then import the modified rule content. The original rule content will be overwritten.</p>
     */
    public $RuleId;

    /**
     * @var array <p>Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If not specified, the original configuration is maintained.</p>
     */
    public $FunctionRuleConditions;

    /**
     * @var string <p>Function selection configuration type:</p><li> direct: directly specify the execution function;</li><li> weight: select a function based on weight ratio;</li><li> region: select a function based on the client IP country/region.</li>Defaults to direct if not specified.
     */
    public $TriggerType;

    /**
     * @var string <p>Specify the function ID to be executed. This parameter is valid only when TriggerType is direct or left empty.</p>
     */
    public $FunctionId;

    /**
     * @var array <p>Function selection configuration based on client IP country/region. This parameter is valid only when TriggerType is region, and RegionMappingSelections is required. RegionMappingSelections must contain one configuration with Regions as Default, and requires at least one other specific Region.</p>
     */
    public $RegionMappingSelections;

    /**
     * @var array <p>Weight-based function selection configuration. This parameter is valid only when TriggerType is weight and WeightedSelections is required. The sum of all weights in WeightedSelections need to be 100.</p>
     */
    public $WeightedSelections;

    /**
     * @var string <p>Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.</p>
     */
    public $Remark;

    /**
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $RuleId <p>Rule ID. You can first use the DescribeFunctionRules API to get the RuleId of the rule that needs to be modified, then import the modified rule content. The original rule content will be overwritten.</p>
     * @param array $FunctionRuleConditions <p>Rule condition list. There is an OR relationship between different conditions of the same trigger rule. If not specified, the original configuration is maintained.</p>
     * @param string $TriggerType <p>Function selection configuration type:</p><li> direct: directly specify the execution function;</li><li> weight: select a function based on weight ratio;</li><li> region: select a function based on the client IP country/region.</li>Defaults to direct if not specified.
     * @param string $FunctionId <p>Specify the function ID to be executed. This parameter is valid only when TriggerType is direct or left empty.</p>
     * @param array $RegionMappingSelections <p>Function selection configuration based on client IP country/region. This parameter is valid only when TriggerType is region, and RegionMappingSelections is required. RegionMappingSelections must contain one configuration with Regions as Default, and requires at least one other specific Region.</p>
     * @param array $WeightedSelections <p>Weight-based function selection configuration. This parameter is valid only when TriggerType is weight and WeightedSelections is required. The sum of all weights in WeightedSelections need to be 100.</p>
     * @param string $Remark <p>Rule description, which can contain up to 60 characters. If this parameter is not input, the original configuration is maintained.</p>
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

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("RegionMappingSelections",$param) and $param["RegionMappingSelections"] !== null) {
            $this->RegionMappingSelections = [];
            foreach ($param["RegionMappingSelections"] as $key => $value){
                $obj = new FunctionRegionSelection();
                $obj->deserialize($value);
                array_push($this->RegionMappingSelections, $obj);
            }
        }

        if (array_key_exists("WeightedSelections",$param) and $param["WeightedSelections"] !== null) {
            $this->WeightedSelections = [];
            foreach ($param["WeightedSelections"] as $key => $value){
                $obj = new FunctionWeightedSelection();
                $obj->deserialize($value);
                array_push($this->WeightedSelections, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
