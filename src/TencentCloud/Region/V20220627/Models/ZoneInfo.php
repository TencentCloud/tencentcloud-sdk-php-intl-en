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
namespace TencentCloud\Region\V20220627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Availability zone information
 *
 * @method string getZone() Obtain Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:.
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<Li> ap-guangzhou-1 (sold-out)</li>.
<Li> ap-guangzhou-2 (resource out of stock)</li>.
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<Li> ap-shanghai-1 (resource out of stock) </li>.
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
 * @method void setZone(string $Zone) Set Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:.
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<Li> ap-guangzhou-1 (sold-out)</li>.
<Li> ap-guangzhou-2 (resource out of stock)</li>.
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<Li> ap-shanghai-1 (resource out of stock) </li>.
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
 * @method string getZoneName() Obtain Availability zone description, such as Guangzhou Zone 3.
 * @method void setZoneName(string $ZoneName) Set Availability zone description, such as Guangzhou Zone 3.
 * @method string getZoneId() Obtain AZ ID
 * @method void setZoneId(string $ZoneId) Set AZ ID
 * @method string getZoneState() Obtain Availability zone status, including AVAILABLE and UNAVAILABLE. AVAILABLE indicates available, and UNAVAILABLE indicates unavailable.
 * @method void setZoneState(string $ZoneState) Set Availability zone status, including AVAILABLE and UNAVAILABLE. AVAILABLE indicates available, and UNAVAILABLE indicates unavailable.
 * @method string getParentZone() Obtain Parent zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentZone(string $ParentZone) Set Parent zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParentZoneId() Obtain Parent availability zone ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentZoneId(string $ParentZoneId) Set Parent availability zone ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParentZoneName() Obtain Describes the parent availability zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentZoneName(string $ParentZoneName) Set Describes the parent availability zone.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneType() Obtain zone type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneType(string $ZoneType) Set zone type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineRoomTypeMC() Obtain Console type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineRoomTypeMC(string $MachineRoomTypeMC) Set Console type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneIdMC() Obtain Same as ZoneId. suitable for console invocation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIdMC(string $ZoneIdMC) Set Same as ZoneId. suitable for console invocation.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:.
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<Li> ap-guangzhou-1 (sold-out)</li>.
<Li> ap-guangzhou-2 (resource out of stock)</li>.
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<Li> ap-shanghai-1 (resource out of stock) </li>.
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
     */
    public $Zone;

    /**
     * @var string Availability zone description, such as Guangzhou Zone 3.
     */
    public $ZoneName;

    /**
     * @var string AZ ID
     */
    public $ZoneId;

    /**
     * @var string Availability zone status, including AVAILABLE and UNAVAILABLE. AVAILABLE indicates available, and UNAVAILABLE indicates unavailable.
     */
    public $ZoneState;

    /**
     * @var string Parent zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentZone;

    /**
     * @var string Parent availability zone ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentZoneId;

    /**
     * @var string Describes the parent availability zone.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentZoneName;

    /**
     * @var string zone type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneType;

    /**
     * @var string Console type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineRoomTypeMC;

    /**
     * @var string Same as ZoneId. suitable for console invocation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIdMC;

    /**
     * @param string $Zone Availability zone name, for example, ap-guangzhou-3.

The names of availability zones across the network are as follows:.
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<Li> ap-guangzhou-1 (sold-out)</li>.
<Li> ap-guangzhou-2 (resource out of stock)</li>.
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<Li> ap-shanghai-1 (resource out of stock) </li>.
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
     * @param string $ZoneName Availability zone description, such as Guangzhou Zone 3.
     * @param string $ZoneId AZ ID
     * @param string $ZoneState Availability zone status, including AVAILABLE and UNAVAILABLE. AVAILABLE indicates available, and UNAVAILABLE indicates unavailable.
     * @param string $ParentZone Parent zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParentZoneId Parent availability zone ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParentZoneName Describes the parent availability zone.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneType zone type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineRoomTypeMC Console type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneIdMC Same as ZoneId. suitable for console invocation.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("ParentZone",$param) and $param["ParentZone"] !== null) {
            $this->ParentZone = $param["ParentZone"];
        }

        if (array_key_exists("ParentZoneId",$param) and $param["ParentZoneId"] !== null) {
            $this->ParentZoneId = $param["ParentZoneId"];
        }

        if (array_key_exists("ParentZoneName",$param) and $param["ParentZoneName"] !== null) {
            $this->ParentZoneName = $param["ParentZoneName"];
        }

        if (array_key_exists("ZoneType",$param) and $param["ZoneType"] !== null) {
            $this->ZoneType = $param["ZoneType"];
        }

        if (array_key_exists("MachineRoomTypeMC",$param) and $param["MachineRoomTypeMC"] !== null) {
            $this->MachineRoomTypeMC = $param["MachineRoomTypeMC"];
        }

        if (array_key_exists("ZoneIdMC",$param) and $param["ZoneIdMC"] !== null) {
            $this->ZoneIdMC = $param["ZoneIdMC"];
        }
    }
}
