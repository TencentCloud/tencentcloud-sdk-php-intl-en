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
 * AddUserDevice request structure.
 *
 * @method string getName() Obtain <p>Device name, only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters; (device name no need to be globally unique and can be duplicated)</p>
 * @method void setName(string $Name) Set <p>Device name, only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters; (device name no need to be globally unique and can be duplicated)</p>
 * @method integer getAccessProtocol() Obtain <p>Device access protocol (1: RTMP, 2: GB, 6: ISUP)</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul><p>Default value: 2</p>
 * @method void setAccessProtocol(integer $AccessProtocol) Set <p>Device access protocol (1: RTMP, 2: GB, 6: ISUP)</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul><p>Default value: 2</p>
 * @method integer getType() Obtain <p>Device type. 1: IPC; 2: NVR. (If the device access protocol is RTMP, only select IPC as the device type.)</p><p>Enumeration values:</p><ul><li>1: IPC</li><li>2: NVR</li></ul>
 * @method void setType(integer $Type) Set <p>Device type. 1: IPC; 2: NVR. (If the device access protocol is RTMP, only select IPC as the device type.)</p><p>Enumeration values:</p><ul><li>1: IPC</li><li>2: NVR</li></ul>
 * @method string getOrganizationId() Obtain <p>ID of the organization to which the device belongs. Obtain from the organization query api DescribeOrganization.</p>
 * @method void setOrganizationId(string $OrganizationId) Set <p>ID of the organization to which the device belongs. Obtain from the organization query api DescribeOrganization.</p>
 * @method string getClusterId() Obtain <p>Device access service node ID (Value field obtained from the DescribeRegionDomain API for querying available service nodes of a device)</p>
 * @method void setClusterId(string $ClusterId) Set <p>Device access service node ID (Value field obtained from the DescribeRegionDomain API for querying available service nodes of a device)</p>
 * @method integer getTransportProtocol() Obtain <p>Device streaming protocol. 1: UDP, 2: TCP. (Valid for national standard devices. UDP by default if not specified)</p>
 * @method void setTransportProtocol(integer $TransportProtocol) Set <p>Device streaming protocol. 1: UDP, 2: TCP. (Valid for national standard devices. UDP by default if not specified)</p>
 * @method string getPassword() Obtain <p>Device password (required for national standard devices, length of 1-64 characters)</p>
 * @method void setPassword(string $Password) Set <p>Device password (required for national standard devices, length of 1-64 characters)</p>
 * @method string getDescription() Obtain <p>Device description, length not exceeding 128 characters</p>
 * @method void setDescription(string $Description) Set <p>Device description, length not exceeding 128 characters</p>
 * @method string getGatewayId() Obtain <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setGatewayId(string $GatewayId) Set <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getProtocolType() Obtain <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setProtocolType(integer $ProtocolType) Set <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getIp() Obtain <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setIp(string $Ip) Set <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getPort() Obtain <p>Device port (deprecated, reserved for compatibility, can be ignored)</p><p>Value range: [1, 65535]</p><p>Unit: port</p>
 * @method void setPort(integer $Port) Set <p>Device port (deprecated, reserved for compatibility, can be ignored)</p><p>Value range: [1, 65535]</p><p>Unit: port</p>
 * @method string getUsername() Obtain <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setUsername(string $Username) Set <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getSNCode() Obtain <p>Device SN (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setSNCode(string $SNCode) Set <p>Device SN (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getAppName() Obtain <p>Custom AppName for RTMP publishing address (required for RTMP only, support English, digits, _, -, ., length not exceeding 64 characters)</p>
 * @method void setAppName(string $AppName) Set <p>Custom AppName for RTMP publishing address (required for RTMP only, support English, digits, _, -, ., length not exceeding 64 characters)</p>
 * @method string getStreamName() Obtain <p>Custom StreamName for RTMP publishing address (required for RTMP only, supports English, digits, _, -, ., length not exceeding 64 characters)</p>
 * @method void setStreamName(string $StreamName) Set <p>Custom StreamName for RTMP publishing address (required for RTMP only, supports English, digits, _, -, ., length not exceeding 64 characters)</p>
 */
class AddUserDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>Device name, only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters; (device name no need to be globally unique and can be duplicated)</p>
     */
    public $Name;

    /**
     * @var integer <p>Device access protocol (1: RTMP, 2: GB, 6: ISUP)</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul><p>Default value: 2</p>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>Device type. 1: IPC; 2: NVR. (If the device access protocol is RTMP, only select IPC as the device type.)</p><p>Enumeration values:</p><ul><li>1: IPC</li><li>2: NVR</li></ul>
     */
    public $Type;

    /**
     * @var string <p>ID of the organization to which the device belongs. Obtain from the organization query api DescribeOrganization.</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>Device access service node ID (Value field obtained from the DescribeRegionDomain API for querying available service nodes of a device)</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Device streaming protocol. 1: UDP, 2: TCP. (Valid for national standard devices. UDP by default if not specified)</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>Device password (required for national standard devices, length of 1-64 characters)</p>
     */
    public $Password;

    /**
     * @var string <p>Device description, length not exceeding 128 characters</p>
     */
    public $Description;

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
     * @var integer <p>Device port (deprecated, reserved for compatibility, can be ignored)</p><p>Value range: [1, 65535]</p><p>Unit: port</p>
     */
    public $Port;

    /**
     * @var string <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $Username;

    /**
     * @var string <p>Device SN (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $SNCode;

    /**
     * @var string <p>Custom AppName for RTMP publishing address (required for RTMP only, support English, digits, _, -, ., length not exceeding 64 characters)</p>
     */
    public $AppName;

    /**
     * @var string <p>Custom StreamName for RTMP publishing address (required for RTMP only, supports English, digits, _, -, ., length not exceeding 64 characters)</p>
     */
    public $StreamName;

    /**
     * @param string $Name <p>Device name, only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters; (device name no need to be globally unique and can be duplicated)</p>
     * @param integer $AccessProtocol <p>Device access protocol (1: RTMP, 2: GB, 6: ISUP)</p><p>Enumeration values:</p><ul><li>1: RTMP</li><li>2: GB</li><li>6: ISUP</li></ul><p>Default value: 2</p>
     * @param integer $Type <p>Device type. 1: IPC; 2: NVR. (If the device access protocol is RTMP, only select IPC as the device type.)</p><p>Enumeration values:</p><ul><li>1: IPC</li><li>2: NVR</li></ul>
     * @param string $OrganizationId <p>ID of the organization to which the device belongs. Obtain from the organization query api DescribeOrganization.</p>
     * @param string $ClusterId <p>Device access service node ID (Value field obtained from the DescribeRegionDomain API for querying available service nodes of a device)</p>
     * @param integer $TransportProtocol <p>Device streaming protocol. 1: UDP, 2: TCP. (Valid for national standard devices. UDP by default if not specified)</p>
     * @param string $Password <p>Device password (required for national standard devices, length of 1-64 characters)</p>
     * @param string $Description <p>Device description, length not exceeding 128 characters</p>
     * @param string $GatewayId <p>Device access gateway ID (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $ProtocolType <p>Gateway access protocol type (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $Ip <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $Port <p>Device port (deprecated, reserved for compatibility, can be ignored)</p><p>Value range: [1, 65535]</p><p>Unit: port</p>
     * @param string $Username <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $SNCode <p>Device SN (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $AppName <p>Custom AppName for RTMP publishing address (required for RTMP only, support English, digits, _, -, ., length not exceeding 64 characters)</p>
     * @param string $StreamName <p>Custom StreamName for RTMP publishing address (required for RTMP only, supports English, digits, _, -, ., length not exceeding 64 characters)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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

        if (array_key_exists("SNCode",$param) and $param["SNCode"] !== null) {
            $this->SNCode = $param["SNCode"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
