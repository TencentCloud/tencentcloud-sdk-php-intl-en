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
 * Host structure for client-side settings.
 *
 * @method integer getId() Obtain <p>Database record ID corresponding to the host.</p>
 * @method void setId(integer $Id) Set <p>Database record ID corresponding to the host.</p>
 * @method string getName() Obtain <p>Host name.</p>
 * @method void setName(string $Name) Set <p>Host name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getPublicIp() Obtain <p>Public IP address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP address</p>
 * @method string getPrivateIp() Obtain <p>Private IP address.</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IP address.</p>
 * @method string getQuuid() Obtain <p>Host Quuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Host Quuid</p>
 * @method string getStatus() Obtain <p>Host status<br>OFFLINE: offline<br>ONLINE: online<br>SHUTDOWN: is shut down<br>UNINSTALLED: no protection</p>
 * @method void setStatus(string $Status) Set <p>Host status<br>OFFLINE: offline<br>ONLINE: online<br>SHUTDOWN: is shut down<br>UNINSTALLED: no protection</p>
 * @method string getVpcId() Obtain <p>ins-sad143</p>
 * @method void setVpcId(string $VpcId) Set <p>ins-sad143</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information.</p>
 * @method MachineExtraInfo getMachineExtraInfo() Obtain <p>Additional information.</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set <p>Additional information.</p>
 * @method integer getFunctionStatus() Obtain <p>0: Disabled<br>1: Enabled<br>2: Enabling<br>3: Disabling<br>9: Not set</p>
 * @method void setFunctionStatus(integer $FunctionStatus) Set <p>0: Disabled<br>1: Enabled<br>2: Enabling<br>3: Disabling<br>9: Not set</p>
 * @method string getMessage() Obtain <p>The following fixed values require special handling on the frontend, while other failure reasons can be shown directly:</p><ol><li>UNINSTALLED   -- not installed</li><li>NEED_UPGRADE -- Upgrade required</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- Password login is not enabled, so QR code login cannot be enabled</li></ol>
 * @method void setMessage(string $Message) Set <p>The following fixed values require special handling on the frontend, while other failure reasons can be shown directly:</p><ol><li>UNINSTALLED   -- not installed</li><li>NEED_UPGRADE -- Upgrade required</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- Password login is not enabled, so QR code login cannot be enabled</li></ol>
 * @method string getMessageDesc() Obtain <p>Failure reason</p>
 * @method void setMessageDesc(string $MessageDesc) Set <p>Failure reason</p>
 * @method string getInstanceStatus() Obtain <p>Instance status<br>RUNNING: Running<br>STOPED: Shut down<br>EXPIRED: To be recycled</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status<br>RUNNING: Running<br>STOPED: Shut down<br>EXPIRED: To be recycled</p>
 */
class ClientSettingHost extends AbstractModel
{
    /**
     * @var integer <p>Database record ID corresponding to the host.</p>
     */
    public $Id;

    /**
     * @var string <p>Host name.</p>
     */
    public $Name;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Public IP address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>Host Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Host status<br>OFFLINE: offline<br>ONLINE: online<br>SHUTDOWN: is shut down<br>UNINSTALLED: no protection</p>
     */
    public $Status;

    /**
     * @var string <p>ins-sad143</p>
     */
    public $VpcId;

    /**
     * @var RegionInfo <p>Region information.</p>
     */
    public $RegionInfo;

    /**
     * @var MachineExtraInfo <p>Additional information.</p>
     */
    public $MachineExtraInfo;

    /**
     * @var integer <p>0: Disabled<br>1: Enabled<br>2: Enabling<br>3: Disabling<br>9: Not set</p>
     */
    public $FunctionStatus;

    /**
     * @var string <p>The following fixed values require special handling on the frontend, while other failure reasons can be shown directly:</p><ol><li>UNINSTALLED   -- not installed</li><li>NEED_UPGRADE -- Upgrade required</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- Password login is not enabled, so QR code login cannot be enabled</li></ol>
     */
    public $Message;

    /**
     * @var string <p>Failure reason</p>
     */
    public $MessageDesc;

    /**
     * @var string <p>Instance status<br>RUNNING: Running<br>STOPED: Shut down<br>EXPIRED: To be recycled</p>
     */
    public $InstanceStatus;

    /**
     * @param integer $Id <p>Database record ID corresponding to the host.</p>
     * @param string $Name <p>Host name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $PublicIp <p>Public IP address</p>
     * @param string $PrivateIp <p>Private IP address.</p>
     * @param string $Quuid <p>Host Quuid</p>
     * @param string $Status <p>Host status<br>OFFLINE: offline<br>ONLINE: online<br>SHUTDOWN: is shut down<br>UNINSTALLED: no protection</p>
     * @param string $VpcId <p>ins-sad143</p>
     * @param RegionInfo $RegionInfo <p>Region information.</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>Additional information.</p>
     * @param integer $FunctionStatus <p>0: Disabled<br>1: Enabled<br>2: Enabling<br>3: Disabling<br>9: Not set</p>
     * @param string $Message <p>The following fixed values require special handling on the frontend, while other failure reasons can be shown directly:</p><ol><li>UNINSTALLED   -- not installed</li><li>NEED_UPGRADE -- Upgrade required</li><li>NOT_RUNNING -- is shut down</li><li>NO_PASSWORD -- Password login is not enabled, so QR code login cannot be enabled</li></ol>
     * @param string $MessageDesc <p>Failure reason</p>
     * @param string $InstanceStatus <p>Instance status<br>RUNNING: Running<br>STOPED: Shut down<br>EXPIRED: To be recycled</p>
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
