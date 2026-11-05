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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model invocation details
 *
 * @method string getCallType() Obtain <p>Invocation type, originating from billing scene_billing (corresponding to filter.call_type)</p>
 * @method void setCallType(string $CallType) Set <p>Invocation type, originating from billing scene_billing (corresponding to filter.call_type)</p>
 * @method boolean getIsDefaultKB() Obtain <p>Whether it is the default knowledge base. It is only meaningful for the business where ResourceType=5 (knowledge base capacity)</p>
 * @method void setIsDefaultKB(boolean $IsDefaultKB) Set <p>Whether it is the default knowledge base. It is only meaningful for the business where ResourceType=5 (knowledge base capacity)</p>
 * @method string getModelName() Obtain <p>Model name</p>
 * @method void setModelName(string $ModelName) Set <p>Model name</p>
 * @method array getResourceConsumptionList() Obtain <p>List of consumption measurements for a single call in the MODEL field (authoritative field): lists each measurement type by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), and being empty indicates total_tokens; unit=PAGE_COUNT refers to the number of pages consumed by the model</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) Set <p>List of consumption measurements for a single call in the MODEL field (authoritative field): lists each measurement type by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), and being empty indicates total_tokens; unit=PAGE_COUNT refers to the number of pages consumed by the model</p>
 * @method float getConsumptionPU() Obtain <p>PU consumption of this call</p>
 * @method void setConsumptionPU(float $ConsumptionPU) Set <p>PU consumption of this call</p>
 */
class ModelUsageDetail extends AbstractModel
{
    /**
     * @var string <p>Invocation type, originating from billing scene_billing (corresponding to filter.call_type)</p>
     */
    public $CallType;

    /**
     * @var boolean <p>Whether it is the default knowledge base. It is only meaningful for the business where ResourceType=5 (knowledge base capacity)</p>
     */
    public $IsDefaultKB;

    /**
     * @var string <p>Model name</p>
     */
    public $ModelName;

    /**
     * @var array <p>List of consumption measurements for a single call in the MODEL field (authoritative field): lists each measurement type by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), and being empty indicates total_tokens; unit=PAGE_COUNT refers to the number of pages consumed by the model</p>
     */
    public $ResourceConsumptionList;

    /**
     * @var float <p>PU consumption of this call</p>
     */
    public $ConsumptionPU;

    /**
     * @param string $CallType <p>Invocation type, originating from billing scene_billing (corresponding to filter.call_type)</p>
     * @param boolean $IsDefaultKB <p>Whether it is the default knowledge base. It is only meaningful for the business where ResourceType=5 (knowledge base capacity)</p>
     * @param string $ModelName <p>Model name</p>
     * @param array $ResourceConsumptionList <p>List of consumption measurements for a single call in the MODEL field (authoritative field): lists each measurement type by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), and being empty indicates total_tokens; unit=PAGE_COUNT refers to the number of pages consumed by the model</p>
     * @param float $ConsumptionPU <p>PU consumption of this call</p>
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
        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("IsDefaultKB",$param) and $param["IsDefaultKB"] !== null) {
            $this->IsDefaultKB = $param["IsDefaultKB"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }

        if (array_key_exists("ConsumptionPU",$param) and $param["ConsumptionPU"] !== null) {
            $this->ConsumptionPU = $param["ConsumptionPU"];
        }
    }
}
