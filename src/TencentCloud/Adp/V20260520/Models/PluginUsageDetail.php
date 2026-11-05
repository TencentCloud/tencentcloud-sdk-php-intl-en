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
 * Plug-in call detail
 *
 * @method string getPluginName() Obtain <p>Plugin name.</p>
 * @method void setPluginName(string $PluginName) Set <p>Plugin name.</p>
 * @method array getResourceConsumptionList() Obtain <p>Consumption measurement list for a single PLUGIN domain call (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) Set <p>Consumption measurement list for a single PLUGIN domain call (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
 * @method string getToolName() Obtain <p>Plug-in Tool Name (tool_name)</p>
 * @method void setToolName(string $ToolName) Set <p>Plug-in Tool Name (tool_name)</p>
 */
class PluginUsageDetail extends AbstractModel
{
    /**
     * @var string <p>Plugin name.</p>
     */
    public $PluginName;

    /**
     * @var array <p>Consumption measurement list for a single PLUGIN domain call (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
     */
    public $ResourceConsumptionList;

    /**
     * @var string <p>Plug-in Tool Name (tool_name)</p>
     */
    public $ToolName;

    /**
     * @param string $PluginName <p>Plugin name.</p>
     * @param array $ResourceConsumptionList <p>Consumption measurement list for a single PLUGIN domain call (authoritative field): lists each measurement category by unit + label. When unit=TOKEN, label is case-sensitive for Token subcategories (input/output/avg_*). Being empty indicates total_tokens</p>
     * @param string $ToolName <p>Plug-in Tool Name (tool_name)</p>
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
        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }
    }
}
