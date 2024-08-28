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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanState request structure.
 *
 * @method string getModuleType() Obtain Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
 * @method void setModuleType(string $ModuleType) Set Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
 * @method array getFilters() Obtain Filter parameters
<li>StrategyId: Baseline policy ID, which is required only if ModuleType is set to Baseline</li>
 * @method void setFilters(array $Filters) Set Filter parameters
<li>StrategyId: Baseline policy ID, which is required only if ModuleType is set to Baseline</li>
 */
class DescribeScanStateRequest extends AbstractModel
{
    /**
     * @var string Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
     */
    public $ModuleType;

    /**
     * @var array Filter parameters
<li>StrategyId: Baseline policy ID, which is required only if ModuleType is set to Baseline</li>
     */
    public $Filters;

    /**
     * @param string $ModuleType Module type. Malware (Trojan), Vul (vulnerability), and Baseline are currently available.
     * @param array $Filters Filter parameters
<li>StrategyId: Baseline policy ID, which is required only if ModuleType is set to Baseline</li>
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
        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
