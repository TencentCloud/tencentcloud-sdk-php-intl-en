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
 * DescribeMachines request structure.
 *
 * @method string getMachineType() Obtain Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BMECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BMECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
 * @method string getMachineRegion() Obtain Machine region. For example, ap-guangzhou and ap-shanghai.
 * @method void setMachineRegion(string $MachineRegion) Set Machine region. For example, ap-guangzhou and ap-shanghai.
 * @method integer getLimit() Obtain Number of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>Ips - String - required: no - query by IP</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - required: no - instance ID for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline/shut down | ONLINE: online | UNINSTALLED: not installed | AGENT_OFFLINE: agent offline | AGENT_SHUTDOWN: agent shut down)</li>
<li>Version - String required: no - current edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (value of DescribeMachineOsList)</li>
Each filter criterion supports only one value.
<li>Quuid - String - required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Ips - String - required: no - query by IP</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - required: no - instance ID for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline/shut down | ONLINE: online | UNINSTALLED: not installed | AGENT_OFFLINE: agent offline | AGENT_SHUTDOWN: agent shut down)</li>
<li>Version - String required: no - current edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (value of DescribeMachineOsList)</li>
Each filter criterion supports only one value.
<li>Quuid - String - required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
 * @method array getProjectIds() Obtain ID List of Businesses to which machines belong
 * @method void setProjectIds(array $ProjectIds) Set ID List of Businesses to which machines belong
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BMECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @var string Machine region. For example, ap-guangzhou and ap-shanghai.
     */
    public $MachineRegion;

    /**
     * @var integer Number of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria
<li>Ips - String - required: no - query by IP</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - required: no - instance ID for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline/shut down | ONLINE: online | UNINSTALLED: not installed | AGENT_OFFLINE: agent offline | AGENT_SHUTDOWN: agent shut down)</li>
<li>Version - String required: no - current edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (value of DescribeMachineOsList)</li>
Each filter criterion supports only one value.
<li>Quuid - String - required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
     */
    public $Filters;

    /**
     * @var array ID List of Businesses to which machines belong
     */
    public $ProjectIds;

    /**
     * @param string $MachineType Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BMECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
     * @param string $MachineRegion Machine region. For example, ap-guangzhou and ap-shanghai.
     * @param integer $Limit Number of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>Ips - String - required: no - query by IP</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - required: no - instance ID for query </li>
<li>Status - String - required: no - client online status (OFFLINE: offline/shut down | ONLINE: online | UNINSTALLED: not installed | AGENT_OFFLINE: agent offline | AGENT_SHUTDOWN: agent shut down)</li>
<li>Version - String required: no - current edition ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (value of DescribeMachineOsList)</li>
Each filter criterion supports only one value.
<li>Quuid - String - required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
     * @param array $ProjectIds ID List of Businesses to which machines belong
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
