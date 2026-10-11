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
 * 
 *
 * @method string getWanIP() Obtain 
 * @method void setWanIP(string $WanIP) Set 
 * @method string getPrivateIP() Obtain 
 * @method void setPrivateIP(string $PrivateIP) Set 
 * @method integer getNetworkType() Obtain 
 * @method void setNetworkType(integer $NetworkType) Set 
 * @method string getNetworkName() Obtain 
 * @method void setNetworkName(string $NetworkName) Set 
 * @method string getInstanceID() Obtain 
 * @method void setInstanceID(string $InstanceID) Set 
 * @method string getHostName() Obtain 
 * @method void setHostName(string $HostName) Set 
 */
class MachineExtraInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $WanIP;

    /**
     * @var string 
     */
    public $PrivateIP;

    /**
     * @var integer 
     */
    public $NetworkType;

    /**
     * @var string 
     */
    public $NetworkName;

    /**
     * @var string 
     */
    public $InstanceID;

    /**
     * @var string 
     */
    public $HostName;

    /**
     * @param string $WanIP 
     * @param string $PrivateIP 
     * @param integer $NetworkType 
     * @param string $NetworkName 
     * @param string $InstanceID 
     * @param string $HostName 
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
