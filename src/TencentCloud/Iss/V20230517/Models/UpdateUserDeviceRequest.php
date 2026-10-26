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
 * UpdateUserDevice request structure.
 *
 * @method string getDeviceId() Obtain <p>Device ID (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
 * @method void setDeviceId(string $DeviceId) Set <p>Device ID (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
 * @method string getName() Obtain <p>Device name (only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters)</p>
 * @method void setName(string $Name) Set <p>Device name (only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters)</p>
 * @method integer getTransportProtocol() Obtain <p>Device streaming protocol. Only valid for national standard devices. Fill in 0 to make no change (1: UDP, 2: TCP)</p>
 * @method void setTransportProtocol(integer $TransportProtocol) Set <p>Device streaming protocol. Only valid for national standard devices. Fill in 0 to make no change (1: UDP, 2: TCP)</p>
 * @method string getPassword() Obtain <p>Device password (only supported for national standard devices, length not exceeding 64 characters)</p>
 * @method void setPassword(string $Password) Set <p>Device password (only supported for national standard devices, length not exceeding 64 characters)</p>
 * @method string getDescription() Obtain <p>Device description (length not exceeding 128 characters)</p>
 * @method void setDescription(string $Description) Set <p>Device description (length not exceeding 128 characters)</p>
 * @method string getIp() Obtain <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setIp(string $Ip) Set <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getPort() Obtain <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setPort(integer $Port) Set <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
 * @method string getUsername() Obtain <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setUsername(string $Username) Set <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getProtocolType() Obtain <p>Gateway device access protocol (deprecated, reserved for compatibility, can be ignored)</p>
 * @method void setProtocolType(integer $ProtocolType) Set <p>Gateway device access protocol (deprecated, reserved for compatibility, can be ignored)</p>
 * @method integer getAudioSwitch() Obtain <p>Audio on/off (0: off; 1: on), enabled by default. Audio is dropped when turned off.</p>
 * @method void setAudioSwitch(integer $AudioSwitch) Set <p>Audio on/off (0: off; 1: on), enabled by default. Audio is dropped when turned off.</p>
 * @method integer getSubscribeSwitch() Obtain <p>Subscription switch (0: off; 1: on). Default On. When enabled, it subscribes to device channel transitions. Valid only for national standard NVR devices.</p>
 * @method void setSubscribeSwitch(integer $SubscribeSwitch) Set <p>Subscription switch (0: off; 1: on). Default On. When enabled, it subscribes to device channel transitions. Valid only for national standard NVR devices.</p>
 * @method integer getSilentFrameSwitch() Obtain <p>Whether to enable silent frame (0: disabled; 1: enabled)</p>
 * @method void setSilentFrameSwitch(integer $SilentFrameSwitch) Set <p>Whether to enable silent frame (0: disabled; 1: enabled)</p>
 * @method integer getTimeSyncSwitch() Obtain <p>Clock sync switch (only effective for national standard devices)</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Default value: 1</p>
 * @method void setTimeSyncSwitch(integer $TimeSyncSwitch) Set <p>Clock sync switch (only effective for national standard devices)</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Default value: 1</p>
 */
class UpdateUserDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>Device ID (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
     */
    public $DeviceId;

    /**
     * @var string <p>Device name (only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters)</p>
     */
    public $Name;

    /**
     * @var integer <p>Device streaming protocol. Only valid for national standard devices. Fill in 0 to make no change (1: UDP, 2: TCP)</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>Device password (only supported for national standard devices, length not exceeding 64 characters)</p>
     */
    public $Password;

    /**
     * @var string <p>Device description (length not exceeding 128 characters)</p>
     */
    public $Description;

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
     * @var integer <p>Gateway device access protocol (deprecated, reserved for compatibility, can be ignored)</p>
     */
    public $ProtocolType;

    /**
     * @var integer <p>Audio on/off (0: off; 1: on), enabled by default. Audio is dropped when turned off.</p>
     */
    public $AudioSwitch;

    /**
     * @var integer <p>Subscription switch (0: off; 1: on). Default On. When enabled, it subscribes to device channel transitions. Valid only for national standard NVR devices.</p>
     */
    public $SubscribeSwitch;

    /**
     * @var integer <p>Whether to enable silent frame (0: disabled; 1: enabled)</p>
     */
    public $SilentFrameSwitch;

    /**
     * @var integer <p>Clock sync switch (only effective for national standard devices)</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Default value: 1</p>
     */
    public $TimeSyncSwitch;

    /**
     * @param string $DeviceId <p>Device ID (obtain from the device list API ListDevices)</p><p>For parameter values, see <a href="https://www.tencentcloud.com/document/api/1344/95871?from_cn_redirect=1">ListDevices</a></p>
     * @param string $Name <p>Device name (only supports Chinese, English, numbers, spaces, Chinese and English parentheses, _, -, length not exceeding 128 characters)</p>
     * @param integer $TransportProtocol <p>Device streaming protocol. Only valid for national standard devices. Fill in 0 to make no change (1: UDP, 2: TCP)</p>
     * @param string $Password <p>Device password (only supported for national standard devices, length not exceeding 64 characters)</p>
     * @param string $Description <p>Device description (length not exceeding 128 characters)</p>
     * @param string $Ip <p>Device access IP (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $Port <p>Device Port (deprecated, reserved for compatibility, can be ignored)</p>
     * @param string $Username <p>Device username (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $ProtocolType <p>Gateway device access protocol (deprecated, reserved for compatibility, can be ignored)</p>
     * @param integer $AudioSwitch <p>Audio on/off (0: off; 1: on), enabled by default. Audio is dropped when turned off.</p>
     * @param integer $SubscribeSwitch <p>Subscription switch (0: off; 1: on). Default On. When enabled, it subscribes to device channel transitions. Valid only for national standard NVR devices.</p>
     * @param integer $SilentFrameSwitch <p>Whether to enable silent frame (0: disabled; 1: enabled)</p>
     * @param integer $TimeSyncSwitch <p>Clock sync switch (only effective for national standard devices)</p><p>Enumeration values:</p><ul><li>0: Off</li><li>1: On</li></ul><p>Default value: 1</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AudioSwitch",$param) and $param["AudioSwitch"] !== null) {
            $this->AudioSwitch = $param["AudioSwitch"];
        }

        if (array_key_exists("SubscribeSwitch",$param) and $param["SubscribeSwitch"] !== null) {
            $this->SubscribeSwitch = $param["SubscribeSwitch"];
        }

        if (array_key_exists("SilentFrameSwitch",$param) and $param["SilentFrameSwitch"] !== null) {
            $this->SilentFrameSwitch = $param["SilentFrameSwitch"];
        }

        if (array_key_exists("TimeSyncSwitch",$param) and $param["TimeSyncSwitch"] !== null) {
            $this->TimeSyncSwitch = $param["TimeSyncSwitch"];
        }
    }
}
