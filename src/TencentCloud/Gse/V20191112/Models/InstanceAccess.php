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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Identity credentials for instance access
 *
 * @method Credentials getCredentials() Obtain Credentials required for instance access
 * @method void setCredentials(Credentials $Credentials) Set Credentials required for instance access
 * @method string getFleetId() Obtain Service deployment ID
 * @method void setFleetId(string $FleetId) Set Service deployment ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIpAddress() Obtain Public IP of instance
 * @method void setIpAddress(string $IpAddress) Set Public IP of instance
 * @method string getOperatingSystem() Obtain OS
 * @method void setOperatingSystem(string $OperatingSystem) Set OS
 */
class InstanceAccess extends AbstractModel
{
    /**
     * @var Credentials Credentials required for instance access
     */
    public $Credentials;

    /**
     * @var string Service deployment ID
     */
    public $FleetId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Public IP of instance
     */
    public $IpAddress;

    /**
     * @var string OS
     */
    public $OperatingSystem;

    /**
     * @param Credentials $Credentials Credentials required for instance access
     * @param string $FleetId Service deployment ID
     * @param string $InstanceId Instance ID
     * @param string $IpAddress Public IP of instance
     * @param string $OperatingSystem OS
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
        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }
    }
}
