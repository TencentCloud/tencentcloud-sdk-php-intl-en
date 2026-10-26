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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * to the get device list request
 *
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getCode() Obtain Device code
 * @method void setCode(string $Code) Set Device code
 * @method integer getStatus() Obtain Device status. 0: unregistered; 1: online; 2: offline; 3: disabled
 * @method void setStatus(integer $Status) Set Device status. 0: unregistered; 1: online; 2: offline; 3: disabled
 * @method integer getTransportProtocol() Obtain Device streaming protocol. 1: UDP, 2: TCP
 * @method void setTransportProtocol(integer $TransportProtocol) Set Device streaming protocol. 1: UDP, 2: TCP
 * @method string getName() Obtain Device name.
 * @method void setName(string $Name) Set Device name.
 * @method integer getType() Obtain Device type. 1: IPC. 2: NVR
 * @method void setType(integer $Type) Set Device type. 1: IPC. 2: NVR
 * @method string getPassword() Obtain Device password
 * @method void setPassword(string $Password) Set Device password
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getClusterId() Obtain Node ID of the device access service
 * @method void setClusterId(string $ClusterId) Set Node ID of the device access service
 * @method string getClusterName() Obtain Service node name
 * @method void setClusterName(string $ClusterName) Set Service node name
 * @method integer getAccessProtocol() Obtain Access protocol. 1: RTMP, 2: GB, 3: GW
 * @method void setAccessProtocol(integer $AccessProtocol) Set Access protocol. 1: RTMP, 2: GB, 3: GW
 * @method string getOrganizationId() Obtain Organization ID of the device
 * @method void setOrganizationId(string $OrganizationId) Set Organization ID of the device
 * @method integer getChannelNum() Obtain Number of channels
 * @method void setChannelNum(integer $ChannelNum) Set Number of channels
 */
class ListDeviceInfo extends AbstractModel
{
    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string Device code
     */
    public $Code;

    /**
     * @var integer Device status. 0: unregistered; 1: online; 2: offline; 3: disabled
     */
    public $Status;

    /**
     * @var integer Device streaming protocol. 1: UDP, 2: TCP
     */
    public $TransportProtocol;

    /**
     * @var string Device name.
     */
    public $Name;

    /**
     * @var integer Device type. 1: IPC. 2: NVR
     */
    public $Type;

    /**
     * @var string Device password
     */
    public $Password;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Node ID of the device access service
     */
    public $ClusterId;

    /**
     * @var string Service node name
     */
    public $ClusterName;

    /**
     * @var integer Access protocol. 1: RTMP, 2: GB, 3: GW
     */
    public $AccessProtocol;

    /**
     * @var string Organization ID of the device
     */
    public $OrganizationId;

    /**
     * @var integer Number of channels
     */
    public $ChannelNum;

    /**
     * @param string $DeviceId Device ID
     * @param string $Code Device code
     * @param integer $Status Device status. 0: unregistered; 1: online; 2: offline; 3: disabled
     * @param integer $TransportProtocol Device streaming protocol. 1: UDP, 2: TCP
     * @param string $Name Device name.
     * @param integer $Type Device type. 1: IPC. 2: NVR
     * @param string $Password Device password
     * @param string $Description Description
     * @param string $ClusterId Node ID of the device access service
     * @param string $ClusterName Service node name
     * @param integer $AccessProtocol Access protocol. 1: RTMP, 2: GB, 3: GW
     * @param string $OrganizationId Organization ID of the device
     * @param integer $ChannelNum Number of channels
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransportProtocol",$param) and $param["TransportProtocol"] !== null) {
            $this->TransportProtocol = $param["TransportProtocol"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }
    }
}
