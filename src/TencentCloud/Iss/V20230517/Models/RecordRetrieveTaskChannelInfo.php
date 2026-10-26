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
 * Retrieve the task channel information
 *
 * @method string getDeviceId() Obtain Device ID to which the device channel belongs
 * @method void setDeviceId(string $DeviceId) Set Device ID to which the device channel belongs
 * @method string getDeviceName() Obtain Device name of the device channel
 * @method void setDeviceName(string $DeviceName) Set Device name of the device channel
 * @method string getChannelId() Obtain Device channel ID
 * @method void setChannelId(string $ChannelId) Set Device channel ID
 * @method string getChannelName() Obtain Device channel name
 * @method void setChannelName(string $ChannelName) Set Device channel name
 * @method integer getStatus() Obtain Task status. 0: Retrieved, 1: Retrieving, 2: Pending retrieval, 3: No archived video recording
 * @method void setStatus(integer $Status) Set Task status. 0: Retrieved, 1: Retrieving, 2: Pending retrieval, 3: No archived video recording
 */
class RecordRetrieveTaskChannelInfo extends AbstractModel
{
    /**
     * @var string Device ID to which the device channel belongs
     */
    public $DeviceId;

    /**
     * @var string Device name of the device channel
     */
    public $DeviceName;

    /**
     * @var string Device channel ID
     */
    public $ChannelId;

    /**
     * @var string Device channel name
     */
    public $ChannelName;

    /**
     * @var integer Task status. 0: Retrieved, 1: Retrieving, 2: Pending retrieval, 3: No archived video recording
     */
    public $Status;

    /**
     * @param string $DeviceId Device ID to which the device channel belongs
     * @param string $DeviceName Device name of the device channel
     * @param string $ChannelId Device channel ID
     * @param string $ChannelName Device channel name
     * @param integer $Status Task status. 0: Retrieved, 1: Retrieving, 2: Pending retrieval, 3: No archived video recording
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
