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
 * Trigger rules for an edge function
 *
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method array getFunctionRuleConditions() Obtain Rule condition list. There is an OR relationship between items in the list.
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) Set Rule condition list. There is an OR relationship between items in the list.
 * @method string getTriggerType() Obtain Function selection configuration type.
<Li>Direct: specifies the execution function directly.</li>.
<Li>Weight: selects the function based on weight ratio.</li>.
<li> region: specifies the country/region selection function based on client IP.</li>.

 * @method void setTriggerType(string $TriggerType) Set Function selection configuration type.
<Li>Direct: specifies the execution function directly.</li>.
<Li>Weight: selects the function based on weight ratio.</li>.
<li> region: specifies the country/region selection function based on client IP.</li>.

 * @method string getFunctionId() Obtain Specifies the function ID to be executed. valid only when TriggerType is direct.
 * @method void setFunctionId(string $FunctionId) Set Specifies the function ID to be executed. valid only when TriggerType is direct.
 * @method string getFunctionName() Obtain Specifies the name of the function executed.
 * @method void setFunctionName(string $FunctionName) Set Specifies the name of the function executed.
 * @method array getRegionMappingSelections() Obtain Function selection configuration based on client IP country/region.
 * @method void setRegionMappingSelections(array $RegionMappingSelections) Set Function selection configuration based on client IP country/region.
 * @method array getWeightedSelections() Obtain Describes the function selection configuration based on weight.
 * @method void setWeightedSelections(array $WeightedSelections) Set Describes the function selection configuration based on weight.
 * @method integer getPriority() Obtain Priority of a trigger rule for a function. The larger the value, the higher the priority.
 * @method void setPriority(integer $Priority) Set Priority of a trigger rule for a function. The larger the value, the higher the priority.
 * @method string getRemark() Obtain Rule description.
 * @method void setRemark(string $Remark) Set Rule description.
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
     * @var string Function selection configuration type.
<Li>Direct: specifies the execution function directly.</li>.
<Li>Weight: selects the function based on weight ratio.</li>.
<li> region: specifies the country/region selection function based on client IP.</li>.

     */
    public $TriggerType;

    /**
     * @var string Specifies the function ID to be executed. valid only when TriggerType is direct.
     */
    public $FunctionId;

    /**
     * @var string Specifies the name of the function executed.
     */
    public $FunctionName;

    /**
     * @var array Function selection configuration based on client IP country/region.
     */
    public $RegionMappingSelections;

    /**
     * @var array Describes the function selection configuration based on weight.
     */
    public $WeightedSelections;

    /**
     * @var integer Priority of a trigger rule for a function. The larger the value, the higher the priority.
     */
    public $Priority;

    /**
     * @var string Rule description.
     */
    public $Remark;

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
     * @param string $TriggerType Function selection configuration type.
<Li>Direct: specifies the execution function directly.</li>.
<Li>Weight: selects the function based on weight ratio.</li>.
<li> region: specifies the country/region selection function based on client IP.</li>.

     * @param string $FunctionId Specifies the function ID to be executed. valid only when TriggerType is direct.
     * @param string $FunctionName Specifies the name of the function executed.
     * @param array $RegionMappingSelections Function selection configuration based on client IP country/region.
     * @param array $WeightedSelections Describes the function selection configuration based on weight.
     * @param integer $Priority Priority of a trigger rule for a function. The larger the value, the higher the priority.
     * @param string $Remark Rule description.
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

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
