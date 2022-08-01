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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP attribute information
 *
 * @method string getIp() Obtain IP to be queried
 * @method void setIp(string $Ip) Set IP to be queried
 * @method string getPlatform() Obtain IP ownership:
yes: Tencent Cloud CDN node
no: non-Tencent Cloud CDN node
 * @method void setPlatform(string $Platform) Set IP ownership:
yes: Tencent Cloud CDN node
no: non-Tencent Cloud CDN node
 * @method string getLocation() Obtain Node district/country
unknown: unknown node location
 * @method void setLocation(string $Location) Set Node district/country
unknown: unknown node location
 * @method array getHistory() Obtain Activation and deactivation history of the node.
 * @method void setHistory(array $History) Set Activation and deactivation history of the node.
 * @method string getArea() Obtain Node region
`mainland`: Acceleration nodes inside the Chinese mainland
`overseas`: Acceleration nodes outside the Chinese mainland
`unknown`: Service region unknown
 * @method void setArea(string $Area) Set Node region
`mainland`: Acceleration nodes inside the Chinese mainland
`overseas`: Acceleration nodes outside the Chinese mainland
`unknown`: Service region unknown
 * @method string getCity() Obtain City where the nodes reside
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCity(string $City) Set City where the nodes reside
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CdnIp extends AbstractModel
{
    /**
     * @var string IP to be queried
     */
    public $Ip;

    /**
     * @var string IP ownership:
yes: Tencent Cloud CDN node
no: non-Tencent Cloud CDN node
     */
    public $Platform;

    /**
     * @var string Node district/country
unknown: unknown node location
     */
    public $Location;

    /**
     * @var array Activation and deactivation history of the node.
     */
    public $History;

    /**
     * @var string Node region
`mainland`: Acceleration nodes inside the Chinese mainland
`overseas`: Acceleration nodes outside the Chinese mainland
`unknown`: Service region unknown
     */
    public $Area;

    /**
     * @var string City where the nodes reside
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $City;

    /**
     * @param string $Ip IP to be queried
     * @param string $Platform IP ownership:
yes: Tencent Cloud CDN node
no: non-Tencent Cloud CDN node
     * @param string $Location Node district/country
unknown: unknown node location
     * @param array $History Activation and deactivation history of the node.
     * @param string $Area Node region
`mainland`: Acceleration nodes inside the Chinese mainland
`overseas`: Acceleration nodes outside the Chinese mainland
`unknown`: Service region unknown
     * @param string $City City where the nodes reside
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = [];
            foreach ($param["History"] as $key => $value){
                $obj = new CdnIpHistory();
                $obj->deserialize($value);
                array_push($this->History, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
