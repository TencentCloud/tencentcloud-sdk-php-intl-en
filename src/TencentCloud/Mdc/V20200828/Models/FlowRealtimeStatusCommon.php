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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common status information for querying stream status in real time.
 *
 * @method string getState() Obtain Current connection status. Connected | Waiting | Idle.
 * @method void setState(string $State) Set Current connection status. Connected | Waiting | Idle.
 * @method string getMode() Obtain Connection mode. Listener|Caller.
 * @method void setMode(string $Mode) Set Connection mode. Listener|Caller.
 * @method integer getConnectedTime() Obtain Connection duration, unit: ms.
 * @method void setConnectedTime(integer $ConnectedTime) Set Connection duration, unit: ms.
 * @method integer getBitrate() Obtain Real-time bitrate, unit in bps.
 * @method void setBitrate(integer $Bitrate) Set Real-time bitrate, unit in bps.
 * @method integer getReconnections() Obtain Number of retries.
 * @method void setReconnections(integer $Reconnections) Set Number of retries.
 */
class FlowRealtimeStatusCommon extends AbstractModel
{
    /**
     * @var string Current connection status. Connected | Waiting | Idle.
     */
    public $State;

    /**
     * @var string Connection mode. Listener|Caller.
     */
    public $Mode;

    /**
     * @var integer Connection duration, unit: ms.
     */
    public $ConnectedTime;

    /**
     * @var integer Real-time bitrate, unit in bps.
     */
    public $Bitrate;

    /**
     * @var integer Number of retries.
     */
    public $Reconnections;

    /**
     * @param string $State Current connection status. Connected | Waiting | Idle.
     * @param string $Mode Connection mode. Listener|Caller.
     * @param integer $ConnectedTime Connection duration, unit: ms.
     * @param integer $Bitrate Real-time bitrate, unit in bps.
     * @param integer $Reconnections Number of retries.
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ConnectedTime",$param) and $param["ConnectedTime"] !== null) {
            $this->ConnectedTime = $param["ConnectedTime"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Reconnections",$param) and $param["Reconnections"] !== null) {
            $this->Reconnections = $param["Reconnections"];
        }
    }
}
