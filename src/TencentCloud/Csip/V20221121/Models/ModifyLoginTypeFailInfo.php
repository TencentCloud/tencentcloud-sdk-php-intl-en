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
 * Details of failed host login method modifications.
 *
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getInstanceId() Obtain <p>Host instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Host instance ID.</p>
 * @method string getMachineIp() Obtain <p>Host private IP address</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Host private IP address</p>
 * @method string getMachineWanIp() Obtain <p>Public IP of the server</p>
 * @method void setMachineWanIp(string $MachineWanIp) Set <p>Public IP of the server</p>
 * @method string getRegion() Obtain <p>Host availability zone</p>
 * @method void setRegion(string $Region) Set <p>Host availability zone</p>
 * @method string getMachineType() Obtain <p>Specific host types</p>
 * @method void setMachineType(string $MachineType) Set <p>Specific host types</p>
 * @method string getMessage() Obtain <p>The following fixed values require special handling on the frontend. Other failure reasons can be displayed directly:</p><ol><li>UNINSTALLED -- not installed</li><li>NEED_UPGRADE -- requires upgrading</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- password login is not enabled, so QR code login cannot be enabled</li></ol>
 * @method void setMessage(string $Message) Set <p>The following fixed values require special handling on the frontend. Other failure reasons can be displayed directly:</p><ol><li>UNINSTALLED -- not installed</li><li>NEED_UPGRADE -- requires upgrading</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- password login is not enabled, so QR code login cannot be enabled</li></ol>
 * @method string getMessageDesc() Obtain <p>Failure reason</p>
 * @method void setMessageDesc(string $MessageDesc) Set <p>Failure reason</p>
 */
class ModifyLoginTypeFailInfo extends AbstractModel
{
    /**
     * @var string <p>Host name.</p>
     */
    public $MachineName;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Host private IP address</p>
     */
    public $MachineIp;

    /**
     * @var string <p>Public IP of the server</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>Host availability zone</p>
     */
    public $Region;

    /**
     * @var string <p>Specific host types</p>
     */
    public $MachineType;

    /**
     * @var string <p>The following fixed values require special handling on the frontend. Other failure reasons can be displayed directly:</p><ol><li>UNINSTALLED -- not installed</li><li>NEED_UPGRADE -- requires upgrading</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- password login is not enabled, so QR code login cannot be enabled</li></ol>
     */
    public $Message;

    /**
     * @var string <p>Failure reason</p>
     */
    public $MessageDesc;

    /**
     * @param string $MachineName <p>Host name.</p>
     * @param string $InstanceId <p>Host instance ID.</p>
     * @param string $MachineIp <p>Host private IP address</p>
     * @param string $MachineWanIp <p>Public IP of the server</p>
     * @param string $Region <p>Host availability zone</p>
     * @param string $MachineType <p>Specific host types</p>
     * @param string $Message <p>The following fixed values require special handling on the frontend. Other failure reasons can be displayed directly:</p><ol><li>UNINSTALLED -- not installed</li><li>NEED_UPGRADE -- requires upgrading</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- password login is not enabled, so QR code login cannot be enabled</li></ol>
     * @param string $MessageDesc <p>Failure reason</p>
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MessageDesc",$param) and $param["MessageDesc"] !== null) {
            $this->MessageDesc = $param["MessageDesc"];
        }
    }
}
