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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node IP information
 *
 * @method string getIp() Obtain Node IP
 * @method void setIp(string $Ip) Set Node IP
 * @method string getDistrict() Obtain Node region
 * @method void setDistrict(string $District) Set Node region
 * @method string getIsp() Obtain Node ISP
 * @method void setIsp(string $Isp) Set Node ISP
 * @method string getCity() Obtain Node city
 * @method void setCity(string $City) Set Node city
 * @method string getStatus() Obtain Node status
online: the node is online and scheduling normally
offline: the node is offline
 * @method void setStatus(string $Status) Set Node status
online: the node is online and scheduling normally
offline: the node is offline
 * @method string getCreateTime() Obtain Node IP creation time
 * @method void setCreateTime(string $CreateTime) Set Node IP creation time
 */
class IpStatus extends AbstractModel
{
    /**
     * @var string Node IP
     */
    public $Ip;

    /**
     * @var string Node region
     */
    public $District;

    /**
     * @var string Node ISP
     */
    public $Isp;

    /**
     * @var string Node city
     */
    public $City;

    /**
     * @var string Node status
online: the node is online and scheduling normally
offline: the node is offline
     */
    public $Status;

    /**
     * @var string Node IP creation time
     */
    public $CreateTime;

    /**
     * @param string $Ip Node IP
     * @param string $District Node region
     * @param string $Isp Node ISP
     * @param string $City Node city
     * @param string $Status Node status
online: the node is online and scheduling normally
offline: the node is offline
     * @param string $CreateTime Node IP creation time
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
