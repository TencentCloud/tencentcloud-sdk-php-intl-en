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
 * @method string getMachineRegion() Obtain Machine region. For example, ap-guangzhou, ap-shanghai. For non-Tencent Cloud hosts, use ap-others.
 * @method void setMachineRegion(string $MachineRegion) Set Machine region. For example, ap-guangzhou, ap-shanghai. For non-Tencent Cloud hosts, use ap-others.
 * @method integer getLimit() Obtain Number of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria
<li>Ips - String - Required: No - Query by ip</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - Required: No - Query by instance id</li>
<li>Version - String required: no - current protection version ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
<li>Quuid - String - Required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
<li>AgentStatus - String - required: no - ALL total; ONLINE under protection; OFFLINE offline; UNINSTALLED not installed</li>
<li>MachineStatus - String required: no - ALL all; RUNNING running; STOPPED is shut down; EXPIRED to be recycled</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>Ips - String - Required: No - Query by ip</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - Required: No - Query by instance id</li>
<li>Version - String required: no - current protection version ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
<li>Quuid - String - Required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
<li>AgentStatus - String - required: no - ALL total; ONLINE under protection; OFFLINE offline; UNINSTALLED not installed</li>
<li>MachineStatus - String required: no - ALL all; RUNNING running; STOPPED is shut down; EXPIRED to be recycled</li>
 * @method array getProjectIds() Obtain ID List of Businesses to which machines belong
 * @method void setProjectIds(array $ProjectIds) Set ID List of Businesses to which machines belong
 * @method integer getMachineAppId() Obtain 
 * @method void setMachineAppId(integer $MachineAppId) Set 
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
     * @var string Machine region. For example, ap-guangzhou, ap-shanghai. For non-Tencent Cloud hosts, use ap-others.
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
<li>Ips - String - Required: No - Query by ip</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - Required: No - Query by instance id</li>
<li>Version - String required: no - current protection version ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
<li>Quuid - String - Required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
<li>AgentStatus - String - required: no - ALL total; ONLINE under protection; OFFLINE offline; UNINSTALLED not installed</li>
<li>MachineStatus - String required: no - ALL all; RUNNING running; STOPPED is shut down; EXPIRED to be recycled</li>
     */
    public $Filters;

    /**
     * @var array ID List of Businesses to which machines belong
     */
    public $ProjectIds;

    /**
     * @var integer 
     */
    public $MachineAppId;

    /**
     * @param string $MachineType Type of the machine's zone
CVM: Cloud Virtual Machine
BM: BMECM: Edge Computing Machine
LH: Lighthouse
Other: Hybrid Cloud Zone
     * @param string $MachineRegion Machine region. For example, ap-guangzhou, ap-shanghai. For non-Tencent Cloud hosts, use ap-others.
     * @param integer $Limit Number of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria
<li>Ips - String - Required: No - Query by ip</li>
<li>Names - String - required: no - query by instance name</li>
<li>InstanceIds - String - Required: No - Query by instance id</li>
<li>Version - String required: no - current protection version ( PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Edition | Flagship: Ultimate Edition | ProtectedMachines: Pro + Ultimate Editions)</li>
<li>Risk - String - required: no - risky host (yes)</li>
<li>Os - String - required: no - operating system (DescribeMachineOsList API value)</li>
Each filtering criterion supports only one value; queries of multiple values with OR relationship are not supported.</li>
<li>Quuid - String - Required: no - CVM instance UUID. Maximum value: 100.</li>
<li>AddedOnTheFifteen - String required: no - whether to query only hosts added within the last 15 days (1: yes) </li>
<li> TagId - String required: no - query the list of hosts associated with the specified tag </li>
<li>AgentStatus - String - required: no - ALL total; ONLINE under protection; OFFLINE offline; UNINSTALLED not installed</li>
<li>MachineStatus - String required: no - ALL all; RUNNING running; STOPPED is shut down; EXPIRED to be recycled</li>
     * @param array $ProjectIds ID List of Businesses to which machines belong
     * @param integer $MachineAppId 
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

        if (array_key_exists("MachineAppId",$param) and $param["MachineAppId"] !== null) {
            $this->MachineAppId = $param["MachineAppId"];
        }
    }
}
