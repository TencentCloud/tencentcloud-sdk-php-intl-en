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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access point information.
 *
 * @method string getAccessPointName() Obtain Access point name.
 * @method void setAccessPointName(string $AccessPointName) Set Access point name.
 * @method string getAccessPointId() Obtain Unique ID of access point.
 * @method void setAccessPointId(string $AccessPointId) Set Unique ID of access point.
 * @method string getState() Obtain Access point status. Valid values: available, unavailable.
 * @method void setState(string $State) Set Access point status. Valid values: available, unavailable.
 * @method string getLocation() Obtain Access point location.
 * @method void setLocation(string $Location) Set Access point location.
 * @method array getLineOperator() Obtain Supported ISP list of access pint.
 * @method void setLineOperator(array $LineOperator) Set Supported ISP list of access pint.
 * @method string getRegionId() Obtain Region ID where the access point resides.
 * @method void setRegionId(string $RegionId) Set Region ID where the access point resides.
 * @method array getAvailablePortType() Obtain Available port type at the access point. Valid values: 1000BASE-T: gigabit electrical port; 1000BASE-LX: 10 km gigabit single-mode optical port; 1000BASE-ZX: 80 km gigabit single-mode optical port; 10GBASE-LR: 10 km 10-gigabit single-mode optical port; 10GBASE-ZR: 80 km 10-gigabit single-mode optical port; 10GBASE-LH: 40 km 10-gigabit single-mode optical port; 100GBASE-LR4: 10 km 100-gigabit single-mode optical portfiber optic port.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAvailablePortType(array $AvailablePortType) Set Available port type at the access point. Valid values: 1000BASE-T: gigabit electrical port; 1000BASE-LX: 10 km gigabit single-mode optical port; 1000BASE-ZX: 80 km gigabit single-mode optical port; 10GBASE-LR: 10 km 10-gigabit single-mode optical port; 10GBASE-ZR: 80 km 10-gigabit single-mode optical port; 10GBASE-LH: 40 km 10-gigabit single-mode optical port; 100GBASE-LR4: 10 km 100-gigabit single-mode optical portfiber optic port.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class AccessPoint extends AbstractModel
{
    /**
     * @var string Access point name.
     */
    public $AccessPointName;

    /**
     * @var string Unique ID of access point.
     */
    public $AccessPointId;

    /**
     * @var string Access point status. Valid values: available, unavailable.
     */
    public $State;

    /**
     * @var string Access point location.
     */
    public $Location;

    /**
     * @var array Supported ISP list of access pint.
     */
    public $LineOperator;

    /**
     * @var string Region ID where the access point resides.
     */
    public $RegionId;

    /**
     * @var array Available port type at the access point. Valid values: 1000BASE-T: gigabit electrical port; 1000BASE-LX: 10 km gigabit single-mode optical port; 1000BASE-ZX: 80 km gigabit single-mode optical port; 10GBASE-LR: 10 km 10-gigabit single-mode optical port; 10GBASE-ZR: 80 km 10-gigabit single-mode optical port; 10GBASE-LH: 40 km 10-gigabit single-mode optical port; 100GBASE-LR4: 10 km 100-gigabit single-mode optical portfiber optic port.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AvailablePortType;

    /**
     * @param string $AccessPointName Access point name.
     * @param string $AccessPointId Unique ID of access point.
     * @param string $State Access point status. Valid values: available, unavailable.
     * @param string $Location Access point location.
     * @param array $LineOperator Supported ISP list of access pint.
     * @param string $RegionId Region ID where the access point resides.
     * @param array $AvailablePortType Available port type at the access point. Valid values: 1000BASE-T: gigabit electrical port; 1000BASE-LX: 10 km gigabit single-mode optical port; 1000BASE-ZX: 80 km gigabit single-mode optical port; 10GBASE-LR: 10 km 10-gigabit single-mode optical port; 10GBASE-ZR: 80 km 10-gigabit single-mode optical port; 10GBASE-LH: 40 km 10-gigabit single-mode optical port; 100GBASE-LR4: 10 km 100-gigabit single-mode optical portfiber optic port.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("AccessPointName",$param) and $param["AccessPointName"] !== null) {
            $this->AccessPointName = $param["AccessPointName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("AvailablePortType",$param) and $param["AvailablePortType"] !== null) {
            $this->AvailablePortType = $param["AvailablePortType"];
        }
    }
}
