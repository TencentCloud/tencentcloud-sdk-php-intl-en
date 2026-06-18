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
 * @method string getMachineType() Obtain <p>Machine zone type<br>CVM: Cloud Virtual Machine<br>BM: Blackstone<br>ECM: Edge Computing Machine<br>LH: Lighthouse<br>Other: Hybrid cloud zone</p>
 * @method void setMachineType(string $MachineType) Set <p>Machine zone type<br>CVM: Cloud Virtual Machine<br>BM: Blackstone<br>ECM: Edge Computing Machine<br>LH: Lighthouse<br>Other: Hybrid cloud zone</p>
 * @method string getMachineRegion() Obtain <p>Machine region, for example, ap-guangzhou or ap-shanghai. For non-Tencent Cloud hosts, use ap-others.</p>
 * @method void setMachineRegion(string $MachineRegion) Set <p>Machine region, for example, ap-guangzhou or ap-shanghai. For non-Tencent Cloud hosts, use ap-others.</p>
 * @method integer getLimit() Obtain <p>Number of returned results. The default number is 10, and the maximum value is 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. The default number is 10, and the maximum value is 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method array getFilters() Obtain <p>Filter criteria.</p><li>Ips - String - Required: No - Query by IP</li><li>Names - String - Required: No - Query by instance name</li><li>InstanceIds - String - Required: No - Query by instance id</li><li>Version - String - Required: No - Current protection edition (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Version | Flagship: Ultimate Edition | ProtectedMachines: Pro Edition + Ultimate Edition)</li><li>Risk - String - Required: No - Risk host (yes)</li><li>Os - String - Required: No - Operating system (DescribeMachineOsList API value). Each filter criterion only supports one value and does not support multiple values or relationship query.</li><li>Quuid - String - Required: No - Cloud server UUID. Maximum 100 entries.</li><li>AddedOnTheFifteen - String - Required: No - Query only hosts added within the last 15 days (1: yes)</li><li>TagId - String - Required: No - Query host list associated with the specified tag</li><li>AgentStatus - String - Required: No - ALL: All; ONLINE: Under protection; OFFLINE: Offline; UNINSTALLED: Not installed</li><li>MachineStatus - String - Required: No - ALL: All; RUNNING: Running; STOPPED: Shut down; EXPIRED: Pending recycling</li>
 * @method void setFilters(array $Filters) Set <p>Filter criteria.</p><li>Ips - String - Required: No - Query by IP</li><li>Names - String - Required: No - Query by instance name</li><li>InstanceIds - String - Required: No - Query by instance id</li><li>Version - String - Required: No - Current protection edition (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Version | Flagship: Ultimate Edition | ProtectedMachines: Pro Edition + Ultimate Edition)</li><li>Risk - String - Required: No - Risk host (yes)</li><li>Os - String - Required: No - Operating system (DescribeMachineOsList API value). Each filter criterion only supports one value and does not support multiple values or relationship query.</li><li>Quuid - String - Required: No - Cloud server UUID. Maximum 100 entries.</li><li>AddedOnTheFifteen - String - Required: No - Query only hosts added within the last 15 days (1: yes)</li><li>TagId - String - Required: No - Query host list associated with the specified tag</li><li>AgentStatus - String - Required: No - ALL: All; ONLINE: Under protection; OFFLINE: Offline; UNINSTALLED: Not installed</li><li>MachineStatus - String - Required: No - ALL: All; RUNNING: Running; STOPPED: Shut down; EXPIRED: Pending recycling</li>
 * @method array getProjectIds() Obtain <p>List of business IDs to which the machines belong</p>
 * @method void setProjectIds(array $ProjectIds) Set <p>List of business IDs to which the machines belong</p>
 * @method integer getMachineAppId() Obtain <p>APPID of the machine</p>
 * @method void setMachineAppId(integer $MachineAppId) Set <p>APPID of the machine</p>
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string <p>Machine zone type<br>CVM: Cloud Virtual Machine<br>BM: Blackstone<br>ECM: Edge Computing Machine<br>LH: Lighthouse<br>Other: Hybrid cloud zone</p>
     */
    public $MachineType;

    /**
     * @var string <p>Machine region, for example, ap-guangzhou or ap-shanghai. For non-Tencent Cloud hosts, use ap-others.</p>
     */
    public $MachineRegion;

    /**
     * @var integer <p>Number of returned results. The default number is 10, and the maximum value is 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>Filter criteria.</p><li>Ips - String - Required: No - Query by IP</li><li>Names - String - Required: No - Query by instance name</li><li>InstanceIds - String - Required: No - Query by instance id</li><li>Version - String - Required: No - Current protection edition (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Version | Flagship: Ultimate Edition | ProtectedMachines: Pro Edition + Ultimate Edition)</li><li>Risk - String - Required: No - Risk host (yes)</li><li>Os - String - Required: No - Operating system (DescribeMachineOsList API value). Each filter criterion only supports one value and does not support multiple values or relationship query.</li><li>Quuid - String - Required: No - Cloud server UUID. Maximum 100 entries.</li><li>AddedOnTheFifteen - String - Required: No - Query only hosts added within the last 15 days (1: yes)</li><li>TagId - String - Required: No - Query host list associated with the specified tag</li><li>AgentStatus - String - Required: No - ALL: All; ONLINE: Under protection; OFFLINE: Offline; UNINSTALLED: Not installed</li><li>MachineStatus - String - Required: No - ALL: All; RUNNING: Running; STOPPED: Shut down; EXPIRED: Pending recycling</li>
     */
    public $Filters;

    /**
     * @var array <p>List of business IDs to which the machines belong</p>
     */
    public $ProjectIds;

    /**
     * @var integer <p>APPID of the machine</p>
     */
    public $MachineAppId;

    /**
     * @param string $MachineType <p>Machine zone type<br>CVM: Cloud Virtual Machine<br>BM: Blackstone<br>ECM: Edge Computing Machine<br>LH: Lighthouse<br>Other: Hybrid cloud zone</p>
     * @param string $MachineRegion <p>Machine region, for example, ap-guangzhou or ap-shanghai. For non-Tencent Cloud hosts, use ap-others.</p>
     * @param integer $Limit <p>Number of returned results. The default number is 10, and the maximum value is 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param array $Filters <p>Filter criteria.</p><li>Ips - String - Required: No - Query by IP</li><li>Names - String - Required: No - Query by instance name</li><li>InstanceIds - String - Required: No - Query by instance id</li><li>Version - String - Required: No - Current protection edition (PRO_VERSION: Pro Edition | BASIC_VERSION: Basic Version | Flagship: Ultimate Edition | ProtectedMachines: Pro Edition + Ultimate Edition)</li><li>Risk - String - Required: No - Risk host (yes)</li><li>Os - String - Required: No - Operating system (DescribeMachineOsList API value). Each filter criterion only supports one value and does not support multiple values or relationship query.</li><li>Quuid - String - Required: No - Cloud server UUID. Maximum 100 entries.</li><li>AddedOnTheFifteen - String - Required: No - Query only hosts added within the last 15 days (1: yes)</li><li>TagId - String - Required: No - Query host list associated with the specified tag</li><li>AgentStatus - String - Required: No - ALL: All; ONLINE: Under protection; OFFLINE: Offline; UNINSTALLED: Not installed</li><li>MachineStatus - String - Required: No - ALL: All; RUNNING: Running; STOPPED: Shut down; EXPIRED: Pending recycling</li>
     * @param array $ProjectIds <p>List of business IDs to which the machines belong</p>
     * @param integer $MachineAppId <p>APPID of the machine</p>
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
