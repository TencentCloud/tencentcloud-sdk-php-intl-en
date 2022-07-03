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
 * Node IP information
 *
 * @method string getIp() Obtain Node IP
 * @method void setIp(string $Ip) Set Node IP
 * @method string getDistrict() Obtain Region of the node
 * @method void setDistrict(string $District) Set Region of the node
 * @method string getIsp() Obtain ISP of the node
 * @method void setIsp(string $Isp) Set ISP of the node
 * @method string getCity() Obtain City of the node
 * @method void setCity(string $City) Set City of the node
 * @method string getStatus() Obtain Status of the node
`online`: The node is active and scheduling normally.
`offline`: The node is inactive.
 * @method void setStatus(string $Status) Set Status of the node
`online`: The node is active and scheduling normally.
`offline`: The node is inactive.
 */
class IpStatus extends AbstractModel
{
    /**
     * @var string Node IP
     */
    public $Ip;

    /**
     * @var string Region of the node
     */
    public $District;

    /**
     * @var string ISP of the node
     */
    public $Isp;

    /**
     * @var string City of the node
     */
    public $City;

    /**
     * @var string Status of the node
`online`: The node is active and scheduling normally.
`offline`: The node is inactive.
     */
    public $Status;

    /**
     * @param string $Ip Node IP
     * @param string $District Region of the node
     * @param string $Isp ISP of the node
     * @param string $City City of the node
     * @param string $Status Status of the node
`online`: The node is active and scheduling normally.
`offline`: The node is inactive.
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

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
