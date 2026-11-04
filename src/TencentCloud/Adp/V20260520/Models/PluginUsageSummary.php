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
 * Aggregated details of plug-in resource usage (exclusive to the PLUGIN domain)
 *
 * @method float getCallCount() Obtain <p>Number of calls (top-level count of API calls)</p>
 * @method void setCallCount(float $CallCount) Set <p>Number of calls (top-level count of API calls)</p>
 * @method array getResourceConsumptionList() Obtain <p>Consumption measurement list for the PLUGIN domain (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) Set <p>Consumption measurement list for the PLUGIN domain (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
 */
class PluginUsageSummary extends AbstractModel
{
    /**
     * @var float <p>Number of calls (top-level count of API calls)</p>
     */
    public $CallCount;

    /**
     * @var array <p>Consumption measurement list for the PLUGIN domain (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
     */
    public $ResourceConsumptionList;

    /**
     * @param float $CallCount <p>Number of calls (top-level count of API calls)</p>
     * @param array $ResourceConsumptionList <p>Consumption measurement list for the PLUGIN domain (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
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

        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }
    }
}
