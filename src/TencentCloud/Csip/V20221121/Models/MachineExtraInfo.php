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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional Information on Machine
 *
 * @method string getWanIP() Obtain Public IP address
 * @method void setWanIP(string $WanIP) Set Public IP address
 * @method string getPrivateIP() Obtain Private IP address
 * @method void setPrivateIP(string $PrivateIP) Set Private IP address
 * @method integer getNetworkType() Obtain Network type: 1-vpc network 2-basic network 3-Non-Tencent Cloud Network
 * @method void setNetworkType(integer $NetworkType) Set Network type: 1-vpc network 2-basic network 3-Non-Tencent Cloud Network
 * @method string getNetworkName() Obtain VPC ID
 * @method void setNetworkName(string $NetworkName) Set VPC ID
 * @method string getInstanceID() Obtain CVM instance ID
 * @method void setInstanceID(string $InstanceID) Set CVM instance ID
 * @method string getHostName() Obtain Host name.
 * @method void setHostName(string $HostName) Set Host name.
 */
class MachineExtraInfo extends AbstractModel
{
    /**
     * @var string Public IP address
     */
    public $WanIP;

    /**
     * @var string Private IP address
     */
    public $PrivateIP;

    /**
     * @var integer Network type: 1-vpc network 2-basic network 3-Non-Tencent Cloud Network
     */
    public $NetworkType;

    /**
     * @var string VPC ID
     */
    public $NetworkName;

    /**
     * @var string CVM instance ID
     */
    public $InstanceID;

    /**
     * @var string Host name.
     */
    public $HostName;

    /**
     * @param string $WanIP Public IP address
     * @param string $PrivateIP Private IP address
     * @param integer $NetworkType Network type: 1-vpc network 2-basic network 3-Non-Tencent Cloud Network
     * @param string $NetworkName VPC ID
     * @param string $InstanceID CVM instance ID
     * @param string $HostName Host name.
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
        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkName",$param) and $param["NetworkName"] !== null) {
            $this->NetworkName = $param["NetworkName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
