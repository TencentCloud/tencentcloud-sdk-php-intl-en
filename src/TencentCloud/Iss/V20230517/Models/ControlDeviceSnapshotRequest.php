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
 * ControlDeviceSnapshot request structure.
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method integer getSnapNum() Obtain Number of burst shots. Range of optional values: 1–10.
 * @method void setSnapNum(integer $SnapNum) Set Number of burst shots. Range of optional values: 1–10.
 * @method integer getInterval() Obtain Snapshot interval. Range of optional values: 1–1800
 * @method void setInterval(integer $Interval) Set Snapshot interval. Range of optional values: 1–1800
 * @method integer getExpire() Obtain Image storage period. Default value: 7 days. Only supports 7, 15, 30, 60, 90, 180, or 365 days.
 * @method void setExpire(integer $Expire) Set Image storage period. Default value: 7 days. Only supports 7, 15, 30, 60, 90, 180, or 365 days.
 */
class ControlDeviceSnapshotRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var integer Number of burst shots. Range of optional values: 1–10.
     */
    public $SnapNum;

    /**
     * @var integer Snapshot interval. Range of optional values: 1–1800
     */
    public $Interval;

    /**
     * @var integer Image storage period. Default value: 7 days. Only supports 7, 15, 30, 60, 90, 180, or 365 days.
     */
    public $Expire;

    /**
     * @param string $ChannelId Channel ID
     * @param integer $SnapNum Number of burst shots. Range of optional values: 1–10.
     * @param integer $Interval Snapshot interval. Range of optional values: 1–1800
     * @param integer $Expire Image storage period. Default value: 7 days. Only supports 7, 15, 30, 60, 90, 180, or 365 days.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("SnapNum",$param) and $param["SnapNum"] !== null) {
            $this->SnapNum = $param["SnapNum"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
