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
 * DescribeTags request structure.
 *
 * @method string getMachineType() Obtain CVM type
<li>CVM: indicates Cloud Virtual Machine</li>
<li>BM: indicates Blackstone Physical Machine</li>
<li>ECM: indicates Edge Computing Server</li>
<li>LH: indicates Tencent Cloud Lighthouse</li>
<li>Other: indicates hybrid CVMs</li>
 * @method void setMachineType(string $MachineType) Set CVM type
<li>CVM: indicates Cloud Virtual Machine</li>
<li>BM: indicates Blackstone Physical Machine</li>
<li>ECM: indicates Edge Computing Server</li>
<li>LH: indicates Tencent Cloud Lighthouse</li>
<li>Other: indicates hybrid CVMs</li>
 * @method string getMachineRegion() Obtain Region where the machine is located, such as ap-guangzhou.
 * @method void setMachineRegion(string $MachineRegion) Set Region where the machine is located, such as ap-guangzhou.
 * @method array getFilters() Obtain Filter criteria
<li>Keywords - String - required: no - query by keywords (machine name/machine IP)</li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: uninstalled | SHUTDOWN: shut down)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Professional edition | BASIC_VERSION: Basic edition)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Keywords - String - required: no - query by keywords (machine name/machine IP)</li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: uninstalled | SHUTDOWN: shut down)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Professional edition | BASIC_VERSION: Basic edition)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
 */
class DescribeTagsRequest extends AbstractModel
{
    /**
     * @var string CVM type
<li>CVM: indicates Cloud Virtual Machine</li>
<li>BM: indicates Blackstone Physical Machine</li>
<li>ECM: indicates Edge Computing Server</li>
<li>LH: indicates Tencent Cloud Lighthouse</li>
<li>Other: indicates hybrid CVMs</li>
     */
    public $MachineType;

    /**
     * @var string Region where the machine is located, such as ap-guangzhou.
     */
    public $MachineRegion;

    /**
     * @var array Filter criteria
<li>Keywords - String - required: no - query by keywords (machine name/machine IP)</li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: uninstalled | SHUTDOWN: shut down)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Professional edition | BASIC_VERSION: Basic edition)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
     */
    public $Filters;

    /**
     * @param string $MachineType CVM type
<li>CVM: indicates Cloud Virtual Machine</li>
<li>BM: indicates Blackstone Physical Machine</li>
<li>ECM: indicates Edge Computing Server</li>
<li>LH: indicates Tencent Cloud Lighthouse</li>
<li>Other: indicates hybrid CVMs</li>
     * @param string $MachineRegion Region where the machine is located, such as ap-guangzhou.
     * @param array $Filters Filter criteria
<li>Keywords - String - required: no - query by keywords (machine name/machine IP)</li>
<li>Status - String - required: no - client online status (OFFLINE: offline | ONLINE: online | UNINSTALLED: uninstalled | SHUTDOWN: shut down)</li>
<li>Version - String - required: no - current protection version (PRO_VERSION: Professional edition | BASIC_VERSION: Basic edition)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
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
