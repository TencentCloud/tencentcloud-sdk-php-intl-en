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
 * @method string getAccessPointId() Obtain Unique access point ID.
 * @method void setAccessPointId(string $AccessPointId) Set Unique access point ID.
 * @method string getState() Obtain Access point status. Valid values: available, unavailable.
 * @method void setState(string $State) Set Access point status. Valid values: available, unavailable.
 * @method string getLocation() Obtain Access point location.
 * @method void setLocation(string $Location) Set Access point location.
 * @method array getLineOperator() Obtain List of ISPs supported by access point.
 * @method void setLineOperator(array $LineOperator) Set List of ISPs supported by access point.
 * @method string getRegionId() Obtain ID of the region that manages the access point.
 * @method void setRegionId(string $RegionId) Set ID of the region that manages the access point.
 */
class AccessPoint extends AbstractModel
{
    /**
     * @var string Access point name.
     */
    public $AccessPointName;

    /**
     * @var string Unique access point ID.
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
     * @var array List of ISPs supported by access point.
     */
    public $LineOperator;

    /**
     * @var string ID of the region that manages the access point.
     */
    public $RegionId;

    /**
     * @param string $AccessPointName Access point name.
     * @param string $AccessPointId Unique access point ID.
     * @param string $State Access point status. Valid values: available, unavailable.
     * @param string $Location Access point location.
     * @param array $LineOperator List of ISPs supported by access point.
     * @param string $RegionId ID of the region that manages the access point.
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
    }
}
