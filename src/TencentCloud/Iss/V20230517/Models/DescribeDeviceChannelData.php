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
 * Returned results of querying device channel information
 *
 * @method string getDeviceId() Obtain Device ID
 * @method void setDeviceId(string $DeviceId) Set Device ID
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getChannelCode() Obtain Channel encoding
 * @method void setChannelCode(string $ChannelCode) Set Channel encoding
 * @method string getName() Obtain Channel name
 * @method void setName(string $Name) Set Channel name
 * @method integer getStatus() Obtain Stream status (0: not transmitted, 1: in transit)
 * @method void setStatus(integer $Status) Set Stream status (0: not transmitted, 1: in transit)
 * @method integer getPTZType() Obtain Whether Ptz is controllable (0: no, 1: yes)
 * @method void setPTZType(integer $PTZType) Set Whether Ptz is controllable (0: no, 1: yes)
 * @method string getManufacturer() Obtain Channel manufacturer
 * @method void setManufacturer(string $Manufacturer) Set Channel manufacturer
 * @method string getResolution() Obtain Channel supports resolution (resolution list separated by '/', National Standard Protocol example (6/3), custom example (12800960/640480))
 * @method void setResolution(string $Resolution) Set Channel supports resolution (resolution list separated by '/', National Standard Protocol example (6/3), custom example (12800960/640480))
 * @method integer getState() Obtain Channel offline status (0: offline, 1: online)
 * @method void setState(integer $State) Set Channel offline status (0: offline, 1: online)
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 */
class DescribeDeviceChannelData extends AbstractModel
{
    /**
     * @var string Device ID
     */
    public $DeviceId;

    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Channel encoding
     */
    public $ChannelCode;

    /**
     * @var string Channel name
     */
    public $Name;

    /**
     * @var integer Stream status (0: not transmitted, 1: in transit)
     */
    public $Status;

    /**
     * @var integer Whether Ptz is controllable (0: no, 1: yes)
     */
    public $PTZType;

    /**
     * @var string Channel manufacturer
     */
    public $Manufacturer;

    /**
     * @var string Channel supports resolution (resolution list separated by '/', National Standard Protocol example (6/3), custom example (12800960/640480))
     */
    public $Resolution;

    /**
     * @var integer Channel offline status (0: offline, 1: online)
     */
    public $State;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @param string $DeviceId Device ID
     * @param string $ChannelId Channel ID
     * @param string $ChannelCode Channel encoding
     * @param string $Name Channel name
     * @param integer $Status Stream status (0: not transmitted, 1: in transit)
     * @param integer $PTZType Whether Ptz is controllable (0: no, 1: yes)
     * @param string $Manufacturer Channel manufacturer
     * @param string $Resolution Channel supports resolution (resolution list separated by '/', National Standard Protocol example (6/3), custom example (12800960/640480))
     * @param integer $State Channel offline status (0: offline, 1: online)
     * @param string $Region Region
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PTZType",$param) and $param["PTZType"] !== null) {
            $this->PTZType = $param["PTZType"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
