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
 * Aggregated details of model resource usage (exclusive to MODEL domain)
 *
 * @method float getCallCount() Obtain <p>Number of calls (top-level count of API calls)</p>
 * @method void setCallCount(float $CallCount) Set <p>Number of calls (top-level count of API calls)</p>
 * @method boolean getIsDefaultKB() Obtain <p>Whether it is the default knowledge base</p>
 * @method void setIsDefaultKB(boolean $IsDefaultKB) Set <p>Whether it is the default knowledge base</p>
 * @method string getModelName() Obtain <p>Model name, flag indicating the AI model used</p>
 * @method void setModelName(string $ModelName) Set <p>Model name, flag indicating the AI model used</p>
 * @method array getResourceConsumptionList() Obtain <p>MODEL domain consumption measurement list (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), with an empty label indicating total_tokens; unit=PAGE_COUNT refers to the model's consumed page count</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) Set <p>MODEL domain consumption measurement list (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), with an empty label indicating total_tokens; unit=PAGE_COUNT refers to the model's consumed page count</p>
 * @method float getConsumptionPU() Obtain <p>Total model PU consumption (sum of PU consumption within the aggregate dimension)</p>
 * @method void setConsumptionPU(float $ConsumptionPU) Set <p>Total model PU consumption (sum of PU consumption within the aggregate dimension)</p>
 */
class ModelUsageSummary extends AbstractModel
{
    /**
     * @var float <p>Number of calls (top-level count of API calls)</p>
     */
    public $CallCount;

    /**
     * @var boolean <p>Whether it is the default knowledge base</p>
     */
    public $IsDefaultKB;

    /**
     * @var string <p>Model name, flag indicating the AI model used</p>
     */
    public $ModelName;

    /**
     * @var array <p>MODEL domain consumption measurement list (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), with an empty label indicating total_tokens; unit=PAGE_COUNT refers to the model's consumed page count</p>
     */
    public $ResourceConsumptionList;

    /**
     * @var float <p>Total model PU consumption (sum of PU consumption within the aggregate dimension)</p>
     */
    public $ConsumptionPU;

    /**
     * @param float $CallCount <p>Number of calls (top-level count of API calls)</p>
     * @param boolean $IsDefaultKB <p>Whether it is the default knowledge base</p>
     * @param string $ModelName <p>Model name, flag indicating the AI model used</p>
     * @param array $ResourceConsumptionList <p>MODEL domain consumption measurement list (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*/cache_*), with an empty label indicating total_tokens; unit=PAGE_COUNT refers to the model's consumed page count</p>
     * @param float $ConsumptionPU <p>Total model PU consumption (sum of PU consumption within the aggregate dimension)</p>
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
        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
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
