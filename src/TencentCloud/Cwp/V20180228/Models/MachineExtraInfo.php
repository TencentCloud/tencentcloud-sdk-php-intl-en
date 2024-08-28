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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server Basic Information
 *
 * @method string getWanIP() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanIP(string $WanIP) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateIP() Obtain Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIP(string $PrivateIP) Set Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetworkType() Obtain Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkType(integer $NetworkType) Set Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetworkName() Obtain Network Name, returns vpc_id in the case of a VPC network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkName(string $NetworkName) Set Network Name, returns vpc_id in the case of a VPC network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceID() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MachineExtraInfo extends AbstractModel
{
    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanIP;

    /**
     * @var string Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIP;

    /**
     * @var integer Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkType;

    /**
     * @var string Network Name, returns vpc_id in the case of a VPC network
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkName;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @param string $WanIP Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateIP Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetworkType Network Type. 1: VPC network; 2: Basic Network; 3: Non-Tencent Cloud Network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetworkName Network Name, returns vpc_id in the case of a VPC network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceID Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostName Host name
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
