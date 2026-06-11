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
 * Server Basic Information
 *
 * @method string getWanIP() Obtain Public IP address
 * @method void setWanIP(string $WanIP) Set Public IP address
 * @method string getPrivateIP() Obtain Private IP address
 * @method void setPrivateIP(string $PrivateIP) Set Private IP address
 * @method integer getNetworkType() Obtain Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
 * @method void setNetworkType(integer $NetworkType) Set Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
 * @method string getNetworkName() Obtain Network Name, returns vpc_id in the case of a VPC network
 * @method void setNetworkName(string $NetworkName) Set Network Name, returns vpc_id in the case of a VPC network
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getHostName() Obtain host name
 * @method void setHostName(string $HostName) Set host name
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
     * @var integer Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
     */
    public $NetworkType;

    /**
     * @var string Network Name, returns vpc_id in the case of a VPC network
     */
    public $NetworkName;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string host name
     */
    public $HostName;

    /**
     * @param string $WanIP Public IP address
     * @param string $PrivateIP Private IP address
     * @param integer $NetworkType Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
     * @param string $NetworkName Network Name, returns vpc_id in the case of a VPC network
     * @param string $InstanceID Instance ID
     * @param string $HostName host name
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
