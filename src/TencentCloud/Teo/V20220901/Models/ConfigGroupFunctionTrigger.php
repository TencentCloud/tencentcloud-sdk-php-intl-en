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
 * @method string getCondition() Obtain <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition.</a></p>
 * @method void setCondition(string $Condition) Set <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition.</a></p>
 * @method string getTriggerType() Obtain <p>Function selection configuration type:</p><p>Enumeration values:</p><ul><li>direct: directly specify the execution function</li><li>weight: select a function based on weight ratio</li><li>region: select a function based on the client IP country/region</li></ul>
 * @method void setTriggerType(string $TriggerType) Set <p>Function selection configuration type:</p><p>Enumeration values:</p><ul><li>direct: directly specify the execution function</li><li>weight: select a function based on weight ratio</li><li>region: select a function based on the client IP country/region</li></ul>
 * @method string getFunction() Obtain <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
 * @method void setFunction(string $Function) Set <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
 * @method array getRegionMappingSelections() Obtain <p>Function selection configuration based on client IP country/region.</p>
 * @method void setRegionMappingSelections(array $RegionMappingSelections) Set <p>Function selection configuration based on client IP country/region.</p>
 * @method array getWeightedSelections() Obtain <p>Weight-based function selection configuration.</p>
 * @method void setWeightedSelections(array $WeightedSelections) Set <p>Weight-based function selection configuration.</p>
 * @method string getRemark() Obtain <p>Rule description.</p>
 * @method void setRemark(string $Remark) Set <p>Rule description.</p>
 */
class ConfigGroupFunctionTrigger extends AbstractModel
{
    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition.</a></p>
     */
    public $Condition;

    /**
     * @var string <p>Function selection configuration type:</p><p>Enumeration values:</p><ul><li>direct: directly specify the execution function</li><li>weight: select a function based on weight ratio</li><li>region: select a function based on the client IP country/region</li></ul>
     */
    public $TriggerType;

    /**
     * @var string <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
     */
    public $Function;

    /**
     * @var array <p>Function selection configuration based on client IP country/region.</p>
     */
    public $RegionMappingSelections;

    /**
     * @var array <p>Weight-based function selection configuration.</p>
     */
    public $WeightedSelections;

    /**
     * @var string <p>Rule description.</p>
     */
    public $Remark;

    /**
     * @param string $Condition <p><a href="https://www.tencentcloud.com/document/product/1552/90438?from_cn_redirect=1#33f65828-c6c6-4b66-a011-25a20b548d5d">Match condition.</a></p>
     * @param string $TriggerType <p>Function selection configuration type:</p><p>Enumeration values:</p><ul><li>direct: directly specify the execution function</li><li>weight: select a function based on weight ratio</li><li>region: select a function based on the client IP country/region</li></ul>
     * @param string $Function <p>Specify the function executed. The value is the unique identifier of the function in the site. This parameter is valid only when TriggerType is direct.</p>
     * @param array $RegionMappingSelections <p>Function selection configuration based on client IP country/region.</p>
     * @param array $WeightedSelections <p>Weight-based function selection configuration.</p>
     * @param string $Remark <p>Rule description.</p>
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

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("RegionMappingSelections",$param) and $param["RegionMappingSelections"] !== null) {
            $this->RegionMappingSelections = [];
            foreach ($param["RegionMappingSelections"] as $key => $value){
                $obj = new ConfigGroupFunctionRegionSelection();
                $obj->deserialize($value);
                array_push($this->RegionMappingSelections, $obj);
            }
        }

        if (array_key_exists("WeightedSelections",$param) and $param["WeightedSelections"] !== null) {
            $this->WeightedSelections = [];
            foreach ($param["WeightedSelections"] as $key => $value){
                $obj = new ConfigGroupFunctionWeightedSelection();
                $obj->deserialize($value);
                array_push($this->WeightedSelections, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
