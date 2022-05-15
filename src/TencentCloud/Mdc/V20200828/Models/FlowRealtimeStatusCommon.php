<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The common real-time status information of a flow.
 *
 * @method string getState() Obtain The connection status. Valid values: Connected, Waiting, Idle.
 * @method void setState(string $State) Set The connection status. Valid values: Connected, Waiting, Idle.
 * @method string getMode() Obtain The connection mode. Valid values: Listener, Caller.
 * @method void setMode(string $Mode) Set The connection mode. Valid values: Listener, Caller.
 * @method integer getConnectedTime() Obtain The connected time.
 * @method void setConnectedTime(integer $ConnectedTime) Set The connected time.
 * @method integer getBitrate() Obtain The real-time bitrate (bps).
 * @method void setBitrate(integer $Bitrate) Set The real-time bitrate (bps).
 * @method integer getReconnections() Obtain The number of retries.
 * @method void setReconnections(integer $Reconnections) Set The number of retries.
 */
class FlowRealtimeStatusCommon extends AbstractModel
{
    /**
     * @var string The connection status. Valid values: Connected, Waiting, Idle.
     */
    public $State;

    /**
     * @var string The connection mode. Valid values: Listener, Caller.
     */
    public $Mode;

    /**
     * @var integer The connected time.
     */
    public $ConnectedTime;

    /**
     * @var integer The real-time bitrate (bps).
     */
    public $Bitrate;

    /**
     * @var integer The number of retries.
     */
    public $Reconnections;

    /**
     * @param string $State The connection status. Valid values: Connected, Waiting, Idle.
     * @param string $Mode The connection mode. Valid values: Listener, Caller.
     * @param integer $ConnectedTime The connected time.
     * @param integer $Bitrate The real-time bitrate (bps).
     * @param integer $Reconnections The number of retries.
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
