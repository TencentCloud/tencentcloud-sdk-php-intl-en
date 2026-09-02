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
 * Additional asset information of the host in the CSIP scan task
 *
 * @method string getWanIP() Obtain <p>Public IP address</p>
 * @method void setWanIP(string $WanIP) Set <p>Public IP address</p>
 * @method string getPrivateIP() Obtain <p>Private IP address.</p>
 * @method void setPrivateIP(string $PrivateIP) Set <p>Private IP address.</p>
 * @method string getInstanceID() Obtain <p>Instance ID (unique ID of CVM/BM/ECM)</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID (unique ID of CVM/BM/ECM)</p>
 */
class CSIPMachineExtraInfo extends AbstractModel
{
    /**
     * @var string <p>Public IP address</p>
     */
    public $WanIP;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>Instance ID (unique ID of CVM/BM/ECM)</p>
     */
    public $InstanceID;

    /**
     * @param string $WanIP <p>Public IP address</p>
     * @param string $PrivateIP <p>Private IP address.</p>
     * @param string $InstanceID <p>Instance ID (unique ID of CVM/BM/ECM)</p>
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
