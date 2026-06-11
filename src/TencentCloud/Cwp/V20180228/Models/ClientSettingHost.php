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
 * Client settings related features host struct
 *
 * @method integer getId() Obtain Record ID of the corresponding database host
 * @method void setId(integer $Id) Set Record ID of the corresponding database host
 * @method string getName() Obtain Host name.
 * @method void setName(string $Name) Set Host name.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getStatus() Obtain Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
 * @method void setStatus(string $Status) Set Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
 * @method string getVpcId() Obtain ins-sad143
 * @method void setVpcId(string $VpcId) Set ins-sad143
 * @method RegionInfo getRegionInfo() Obtain Region information
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Region information
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
 * @method integer getFunctionStatus() Obtain <li>0: disabled</li>
<li>1:  Enable</li>
<li>2: Enabled </li>
<li>3: Turning off</li>
<li>9: not set</li>
 * @method void setFunctionStatus(integer $FunctionStatus) Set <li>0: disabled</li>
<li>1:  Enable</li>
<li>2: Enabled </li>
<li>3: Turning off</li>
<li>9: not set</li>
 * @method string getMessage() Obtain The following fixed values require special handling by the frontend, other failures can be shown directly.
1. UNINSTALLED -- Not installed
2. NEED_UPGRADE -- Upgrade required
3. NOT_RUNNING -- Shutdown
4. NO_PASSWORD -- Password login is not enabled and cannot be enabled.
 * @method void setMessage(string $Message) Set The following fixed values require special handling by the frontend, other failures can be shown directly.
1. UNINSTALLED -- Not installed
2. NEED_UPGRADE -- Upgrade required
3. NOT_RUNNING -- Shutdown
4. NO_PASSWORD -- Password login is not enabled and cannot be enabled.
 * @method string getMessageDesc() Obtain Reason for failure
 * @method void setMessageDesc(string $MessageDesc) Set Reason for failure
 * @method string getInstanceStatus() Obtain Instance status
<li>RUNNING: running</li>
<li>STOPPED: Shut down</li>
<li>EXPIRED: To be recycled</li>
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
<li>RUNNING: running</li>
<li>STOPPED: Shut down</li>
<li>EXPIRED: To be recycled</li>
 */
class ClientSettingHost extends AbstractModel
{
    /**
     * @var integer Record ID of the corresponding database host
     */
    public $Id;

    /**
     * @var string Host name.
     */
    public $Name;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
     */
    public $Status;

    /**
     * @var string ins-sad143
     */
    public $VpcId;

    /**
     * @var RegionInfo Region information
     */
    public $RegionInfo;

    /**
     * @var MachineExtraInfo Additional information
     */
    public $MachineExtraInfo;

    /**
     * @var integer <li>0: disabled</li>
<li>1:  Enable</li>
<li>2: Enabled </li>
<li>3: Turning off</li>
<li>9: not set</li>
     */
    public $FunctionStatus;

    /**
     * @var string The following fixed values require special handling by the frontend, other failures can be shown directly.
1. UNINSTALLED -- Not installed
2. NEED_UPGRADE -- Upgrade required
3. NOT_RUNNING -- Shutdown
4. NO_PASSWORD -- Password login is not enabled and cannot be enabled.
     */
    public $Message;

    /**
     * @var string Reason for failure
     */
    public $MessageDesc;

    /**
     * @var string Instance status
<li>RUNNING: running</li>
<li>STOPPED: Shut down</li>
<li>EXPIRED: To be recycled</li>
     */
    public $InstanceStatus;

    /**
     * @param integer $Id Record ID of the corresponding database host
     * @param string $Name Host name.
     * @param string $InstanceId Instance ID
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP address
     * @param string $Quuid Host QUUID
     * @param string $Status Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
     * @param string $VpcId ins-sad143
     * @param RegionInfo $RegionInfo Region information
     * @param MachineExtraInfo $MachineExtraInfo Additional information
     * @param integer $FunctionStatus <li>0: disabled</li>
<li>1:  Enable</li>
<li>2: Enabled </li>
<li>3: Turning off</li>
<li>9: not set</li>
     * @param string $Message The following fixed values require special handling by the frontend, other failures can be shown directly.
1. UNINSTALLED -- Not installed
2. NEED_UPGRADE -- Upgrade required
3. NOT_RUNNING -- Shutdown
4. NO_PASSWORD -- Password login is not enabled and cannot be enabled.
     * @param string $MessageDesc Reason for failure
     * @param string $InstanceStatus Instance status
<li>RUNNING: running</li>
<li>STOPPED: Shut down</li>
<li>EXPIRED: To be recycled</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("FunctionStatus",$param) and $param["FunctionStatus"] !== null) {
            $this->FunctionStatus = $param["FunctionStatus"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MessageDesc",$param) and $param["MessageDesc"] !== null) {
            $this->MessageDesc = $param["MessageDesc"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
