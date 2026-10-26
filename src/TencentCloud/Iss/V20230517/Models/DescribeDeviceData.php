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
 * Data returned by the device query API
 *
 * @method string getDeviceId() Obtain <p>Device ID</p>
 * @method void setDeviceId(string $DeviceId) Set <p>Device ID</p>
 * @method string getCode() Obtain <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
 * @method void setCode(string $Code) Set <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
 * @method string getName() Obtain <p>Device name</p>
 * @method void setName(string $Name) Set <p>Device name</p>
 * @method integer getAccessProtocol() Obtain <p>Device access protocol. 1: RTMP, 2: GB, 3: GW</p>
 * @method void setAccessProtocol(integer $AccessProtocol) Set <p>Device access protocol. 1: RTMP, 2: GB, 3: GW</p>
 * @method integer getType() Obtain <p>Device type. 1: IPC. 2: NVR.</p>
 * @method void setType(integer $Type) Set <p>Device type. 1: IPC. 2: NVR.</p>
 * @method string getClusterId() Obtain <p>Device access service node id</p>
 * @method void setClusterId(string $ClusterId) Set <p>Device access service node id</p>
 * @method string getClusterName() Obtain <p>Device access service node name</p>
 * @method void setClusterName(string $ClusterName) Set <p>Device access service node name</p>
 * @method integer getTransportProtocol() Obtain <p>Device streaming protocol. 1: UDP; 2: TCP</p>
 * @method void setTransportProtocol(integer $TransportProtocol) Set <p>Device streaming protocol. 1: UDP; 2: TCP</p>
 * @method string getPassword() Obtain <p>Device password</p>
 * @method void setPassword(string $Password) Set <p>Device password</p>
 * @method string getDescription() Obtain <p>Device description</p>
 * @method void setDescription(string $Description) Set <p>Device description</p>
 * @method string getSipId() Obtain <p>sip service ID</p>
 * @method void setSipId(string $SipId) Set <p>sip service ID</p>
 * @method string getSipDomain() Obtain <p>sip Service Domain</p>
 * @method void setSipDomain(string $SipDomain) Set <p>sip Service Domain</p>
 * @method string getSipIp() Obtain <p>sip service IP address</p>
 * @method void setSipIp(string $SipIp) Set <p>sip service IP address</p>
 * @method integer getSipPort() Obtain <p>sip server port</p>
 * @method void setSipPort(integer $SipPort) Set <p>sip server port</p>
 * @method string getPushStreamUrl() Obtain <p>Rtmp device streaming address (valid only for Rtmp devices)</p>
 * @method void setPushStreamUrl(string $PushStreamUrl) Set <p>Rtmp device streaming address (valid only for Rtmp devices)</p>
 * @method integer getStatus() Obtain <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
 * @method void setStatus(integer $Status) Set <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
 * @method string getOrganizationId() Obtain <p>Organization ID of the device</p>
 * @method void setOrganizationId(string $OrganizationId) Set <p>Organization ID of the device</p>
 * @method string getGatewayId() Obtain <p>Device gateway ID, obtained from the query gateway list API (required for gateway access only)</p>
 * @method void setGatewayId(string $GatewayId) Set <p>Device gateway ID, obtained from the query gateway list API (required for gateway access only)</p>
 * @method string getGatewayName() Obtain <p>Gateway name of the device ownership</p>
 * @method void setGatewayName(string $GatewayName) Set <p>Gateway name of the device ownership</p>
 * @method string getProtocolTypeName() Obtain <p>Device gateway protocol name</p>
 * @method void setProtocolTypeName(string $ProtocolTypeName) Set <p>Device gateway protocol name</p>
 * @method integer getProtocolType() Obtain <p>Gateway access protocol type. 1. Hikvision SDK, 2. Dahua SDK, 3. Uniview SDK, 4. Onvif (required for gateway access only)</p>
 * @method void setProtocolType(integer $ProtocolType) Set <p>Gateway access protocol type. 1. Hikvision SDK, 2. Dahua SDK, 3. Uniview SDK, 4. Onvif (required for gateway access only)</p>
 * @method string getIp() Obtain <p>Device connectivity IP</p>
 * @method void setIp(string $Ip) Set <p>Device connectivity IP</p>
 * @method integer getPort() Obtain <p>Device Port</p>
 * @method void setPort(integer $Port) Set <p>Device Port</p>
 * @method string getUsername() Obtain <p>Device username</p>
 * @method void setUsername(string $Username) Set <p>Device username</p>
 * @method string getRegion() Obtain <p>Device region</p>
 * @method void setRegion(string $Region) Set <p>Device region</p>
 * @method string getManufacturer() Obtain <p>Device vendor</p>
 * @method void setManufacturer(string $Manufacturer) Set <p>Device vendor</p>
 * @method integer getAudioSwitch() Obtain <p>Audio on/off (0: off; 1: on). Audio is dropped when turned off.</p>
 * @method void setAudioSwitch(integer $AudioSwitch) Set <p>Audio on/off (0: off; 1: on). Audio is dropped when turned off.</p>
 * @method integer getSubscribeSwitch() Obtain <p>Subscription switch (0: off; 1: on), enabled by default. When enabled, it subscribes to device channel adjustments. Valid only for national standard NVR devices</p>
 * @method void setSubscribeSwitch(integer $SubscribeSwitch) Set <p>Subscription switch (0: off; 1: on), enabled by default. When enabled, it subscribes to device channel adjustments. Valid only for national standard NVR devices</p>
 * @method string getAppName() Obtain <p>Custom appName for RTMP publishing address</p>
 * @method void setAppName(string $AppName) Set <p>Custom appName for RTMP publishing address</p>
 * @method string getStreamName() Obtain <p>Custom streamName for RTMP publishing address</p>
 * @method void setStreamName(string $StreamName) Set <p>Custom streamName for RTMP publishing address</p>
 * @method integer getSilentFrameSwitch() Obtain <p>Whether to enable silent frames (0: disabled; 1: enabled)</p>
 * @method void setSilentFrameSwitch(integer $SilentFrameSwitch) Set <p>Whether to enable silent frames (0: disabled; 1: enabled)</p>
 * @method string getPushStreamSecureUrl() Obtain <p>Rtmp device secure authentication streaming address (valid only for Rtmp devices)</p>
 * @method void setPushStreamSecureUrl(string $PushStreamSecureUrl) Set <p>Rtmp device secure authentication streaming address (valid only for Rtmp devices)</p>
 */
class DescribeDeviceData extends AbstractModel
{
    /**
     * @var string <p>Device ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
     */
    public $Code;

    /**
     * @var string <p>Device name</p>
     */
    public $Name;

    /**
     * @var integer <p>Device access protocol. 1: RTMP, 2: GB, 3: GW</p>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>Device type. 1: IPC. 2: NVR.</p>
     */
    public $Type;

    /**
     * @var string <p>Device access service node id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Device access service node name</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>Device streaming protocol. 1: UDP; 2: TCP</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>Device password</p>
     */
    public $Password;

    /**
     * @var string <p>Device description</p>
     */
    public $Description;

    /**
     * @var string <p>sip service ID</p>
     */
    public $SipId;

    /**
     * @var string <p>sip Service Domain</p>
     */
    public $SipDomain;

    /**
     * @var string <p>sip service IP address</p>
     */
    public $SipIp;

    /**
     * @var integer <p>sip server port</p>
     */
    public $SipPort;

    /**
     * @var string <p>Rtmp device streaming address (valid only for Rtmp devices)</p>
     */
    public $PushStreamUrl;

    /**
     * @var integer <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
     */
    public $Status;

    /**
     * @var string <p>Organization ID of the device</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>Device gateway ID, obtained from the query gateway list API (required for gateway access only)</p>
     */
    public $GatewayId;

    /**
     * @var string <p>Gateway name of the device ownership</p>
     */
    public $GatewayName;

    /**
     * @var string <p>Device gateway protocol name</p>
     */
    public $ProtocolTypeName;

    /**
     * @var integer <p>Gateway access protocol type. 1. Hikvision SDK, 2. Dahua SDK, 3. Uniview SDK, 4. Onvif (required for gateway access only)</p>
     */
    public $ProtocolType;

    /**
     * @var string <p>Device connectivity IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>Device Port</p>
     */
    public $Port;

    /**
     * @var string <p>Device username</p>
     */
    public $Username;

    /**
     * @var string <p>Device region</p>
     */
    public $Region;

    /**
     * @var string <p>Device vendor</p>
     */
    public $Manufacturer;

    /**
     * @var integer <p>Audio on/off (0: off; 1: on). Audio is dropped when turned off.</p>
     */
    public $AudioSwitch;

    /**
     * @var integer <p>Subscription switch (0: off; 1: on), enabled by default. When enabled, it subscribes to device channel adjustments. Valid only for national standard NVR devices</p>
     */
    public $SubscribeSwitch;

    /**
     * @var string <p>Custom appName for RTMP publishing address</p>
     */
    public $AppName;

    /**
     * @var string <p>Custom streamName for RTMP publishing address</p>
     */
    public $StreamName;

    /**
     * @var integer <p>Whether to enable silent frames (0: disabled; 1: enabled)</p>
     */
    public $SilentFrameSwitch;

    /**
     * @var string <p>Rtmp device secure authentication streaming address (valid only for Rtmp devices)</p>
     */
    public $PushStreamSecureUrl;

    /**
     * @param string $DeviceId <p>Device ID</p>
     * @param string $Code <p>Device code (for national standard devices, it is the 20-digit National Standard Encoding we generated for the device; for rtmp devices, it is the 10-digit device code)</p>
     * @param string $Name <p>Device name</p>
     * @param integer $AccessProtocol <p>Device access protocol. 1: RTMP, 2: GB, 3: GW</p>
     * @param integer $Type <p>Device type. 1: IPC. 2: NVR.</p>
     * @param string $ClusterId <p>Device access service node id</p>
     * @param string $ClusterName <p>Device access service node name</p>
     * @param integer $TransportProtocol <p>Device streaming protocol. 1: UDP; 2: TCP</p>
     * @param string $Password <p>Device password</p>
     * @param string $Description <p>Device description</p>
     * @param string $SipId <p>sip service ID</p>
     * @param string $SipDomain <p>sip Service Domain</p>
     * @param string $SipIp <p>sip service IP address</p>
     * @param integer $SipPort <p>sip server port</p>
     * @param string $PushStreamUrl <p>Rtmp device streaming address (valid only for Rtmp devices)</p>
     * @param integer $Status <p>Device status. 0: unregistered, 1: online, 2: offline, 3: disabled</p>
     * @param string $OrganizationId <p>Organization ID of the device</p>
     * @param string $GatewayId <p>Device gateway ID, obtained from the query gateway list API (required for gateway access only)</p>
     * @param string $GatewayName <p>Gateway name of the device ownership</p>
     * @param string $ProtocolTypeName <p>Device gateway protocol name</p>
     * @param integer $ProtocolType <p>Gateway access protocol type. 1. Hikvision SDK, 2. Dahua SDK, 3. Uniview SDK, 4. Onvif (required for gateway access only)</p>
     * @param string $Ip <p>Device connectivity IP</p>
     * @param integer $Port <p>Device Port</p>
     * @param string $Username <p>Device username</p>
     * @param string $Region <p>Device region</p>
     * @param string $Manufacturer <p>Device vendor</p>
     * @param integer $AudioSwitch <p>Audio on/off (0: off; 1: on). Audio is dropped when turned off.</p>
     * @param integer $SubscribeSwitch <p>Subscription switch (0: off; 1: on), enabled by default. When enabled, it subscribes to device channel adjustments. Valid only for national standard NVR devices</p>
     * @param string $AppName <p>Custom appName for RTMP publishing address</p>
     * @param string $StreamName <p>Custom streamName for RTMP publishing address</p>
     * @param integer $SilentFrameSwitch <p>Whether to enable silent frames (0: disabled; 1: enabled)</p>
     * @param string $PushStreamSecureUrl <p>Rtmp device secure authentication streaming address (valid only for Rtmp devices)</p>
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

        if (array_key_exists("SipId",$param) and $param["SipId"] !== null) {
            $this->SipId = $param["SipId"];
        }

        if (array_key_exists("SipDomain",$param) and $param["SipDomain"] !== null) {
            $this->SipDomain = $param["SipDomain"];
        }

        if (array_key_exists("SipIp",$param) and $param["SipIp"] !== null) {
            $this->SipIp = $param["SipIp"];
        }

        if (array_key_exists("SipPort",$param) and $param["SipPort"] !== null) {
            $this->SipPort = $param["SipPort"];
        }

        if (array_key_exists("PushStreamUrl",$param) and $param["PushStreamUrl"] !== null) {
            $this->PushStreamUrl = $param["PushStreamUrl"];
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

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("ProtocolTypeName",$param) and $param["ProtocolTypeName"] !== null) {
            $this->ProtocolTypeName = $param["ProtocolTypeName"];
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("AudioSwitch",$param) and $param["AudioSwitch"] !== null) {
            $this->AudioSwitch = $param["AudioSwitch"];
        }

        if (array_key_exists("SubscribeSwitch",$param) and $param["SubscribeSwitch"] !== null) {
            $this->SubscribeSwitch = $param["SubscribeSwitch"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("SilentFrameSwitch",$param) and $param["SilentFrameSwitch"] !== null) {
            $this->SilentFrameSwitch = $param["SilentFrameSwitch"];
        }

        if (array_key_exists("PushStreamSecureUrl",$param) and $param["PushStreamSecureUrl"] !== null) {
            $this->PushStreamSecureUrl = $param["PushStreamSecureUrl"];
        }
    }
}
