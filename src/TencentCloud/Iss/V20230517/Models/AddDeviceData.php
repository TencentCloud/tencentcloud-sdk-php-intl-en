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
 * Data returned by the add device API
 *
 * @method string getDeviceId() Obtain <p>Device iD</p>
 * @method void setDeviceId(string $DeviceId) Set <p>Device iD</p>
 * @method string getCode() Obtain <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
 * @method void setCode(string $Code) Set <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
 * @method string getName() Obtain <p>Device name.</p>
 * @method void setName(string $Name) Set <p>Device name.</p>
 * @method integer getAccessProtocol() Obtain <p>Device access protocol. 1: RTMP; 2: GB.</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul>
 * @method void setAccessProtocol(integer $AccessProtocol) Set <p>Device access protocol. 1: RTMP; 2: GB.</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul>
 * @method integer getType() Obtain <p>Device type. 1: IPC. 2: NVR</p>
 * @method void setType(integer $Type) Set <p>Device type. 1: IPC. 2: NVR</p>
 * @method string getClusterId() Obtain <p>Device access service node ID</p>
 * @method void setClusterId(string $ClusterId) Set <p>Device access service node ID</p>
 * @method string getClusterName() Obtain <p>Device access service node name</p>
 * @method void setClusterName(string $ClusterName) Set <p>Device access service node name</p>
 * @method integer getTransportProtocol() Obtain <p>Device streaming protocol. 1: UDP, 2: TCP</p>
 * @method void setTransportProtocol(integer $TransportProtocol) Set <p>Device streaming protocol. 1: UDP, 2: TCP</p>
 * @method string getPassword() Obtain <p>Device password.</p>
 * @method void setPassword(string $Password) Set <p>Device password.</p>
 * @method string getDescription() Obtain <p>Device description</p>
 * @method void setDescription(string $Description) Set <p>Device description</p>
 * @method integer getStatus() Obtain <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
 * @method void setStatus(integer $Status) Set <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
 * @method integer getOrganizationId() Obtain <p>Affiliated organization ID of the device</p>
 * @method void setOrganizationId(integer $OrganizationId) Set <p>Affiliated organization ID of the device</p>
 * @method string getGatewayId() Obtain <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setGatewayId(string $GatewayId) Set <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getProtocolType() Obtain <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setProtocolType(integer $ProtocolType) Set <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getIp() Obtain <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setIp(string $Ip) Set <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getPort() Obtain <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setPort(integer $Port) Set <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getUsername() Obtain <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setUsername(string $Username) Set <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getAppId() Obtain <p>User ID</p>
 * @method void setAppId(integer $AppId) Set <p>User ID</p>
 */
class AddDeviceData extends AbstractModel
{
    /**
     * @var string <p>Device iD</p>
     */
    public $DeviceId;

    /**
     * @var string <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
     */
    public $Code;

    /**
     * @var string <p>Device name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Device access protocol. 1: RTMP; 2: GB.</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>Device type. 1: IPC. 2: NVR</p>
     */
    public $Type;

    /**
     * @var string <p>Device access service node ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Device access service node name</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>Device streaming protocol. 1: UDP, 2: TCP</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>Device password.</p>
     */
    public $Password;

    /**
     * @var string <p>Device description</p>
     */
    public $Description;

    /**
     * @var integer <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
     */
    public $Status;

    /**
     * @var integer <p>Affiliated organization ID of the device</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $ProtocolType;

    /**
     * @var string <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $Ip;

    /**
     * @var integer <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $Port;

    /**
     * @var string <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $Username;

    /**
     * @var integer <p>User ID</p>
     */
    public $AppId;

    /**
     * @param string $DeviceId <p>Device iD</p>
     * @param string $Code <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
     * @param string $Name <p>Device name.</p>
     * @param integer $AccessProtocol <p>Device access protocol. 1: RTMP; 2: GB.</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul>
     * @param integer $Type <p>Device type. 1: IPC. 2: NVR</p>
     * @param string $ClusterId <p>Device access service node ID</p>
     * @param string $ClusterName <p>Device access service node name</p>
     * @param integer $TransportProtocol <p>Device streaming protocol. 1: UDP, 2: TCP</p>
     * @param string $Password <p>Device password.</p>
     * @param string $Description <p>Device description</p>
     * @param integer $Status <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
     * @param integer $OrganizationId <p>Affiliated organization ID of the device</p>
     * @param string $GatewayId <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $ProtocolType <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $Ip <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $Port <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $Username <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $AppId <p>User ID</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TransportProtocol",$param) and $param["TransportProtocol"] !== null) {
            $this->TransportProtocol = $param["TransportProtocol"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
