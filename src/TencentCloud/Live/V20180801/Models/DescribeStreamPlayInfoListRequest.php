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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPlayInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
 * @method string getEndTime() Obtain End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
The start time and end time cannot be more than 24 hours apart and must be within the last 15 days.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
The start time and end time cannot be more than 24 hours apart and must be within the last 15 days.
 * @method string getPlayDomain() Obtain Playback domain name,
If this parameter is left empty, data of live streams of all playback domain names will be queried.
 * @method void setPlayDomain(string $PlayDomain) Set Playback domain name,
If this parameter is left empty, data of live streams of all playback domain names will be queried.
 * @method string getStreamName() Obtain Stream name (exact match).
If this parameter is left empty, full playback data will be queried.
 * @method void setStreamName(string $StreamName) Set Stream name (exact match).
If this parameter is left empty, full playback data will be queried.
 * @method string getAppName() Obtain Push address. Its value is the same as the `AppName` in playback address. It supports exact match, and takes effect only when `StreamName` is passed at the same time.
If it is left empty, the full playback data will be queried.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
 * @method void setAppName(string $AppName) Set Push address. Its value is the same as the `AppName` in playback address. It supports exact match, and takes effect only when `StreamName` is passed at the same time.
If it is left empty, the full playback data will be queried.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
 * @method string getServiceName() Obtain Service name. Valid values: LVB, LEB. If this parameter is left empty, all data of LVB and LEB will be queried.
 * @method void setServiceName(string $ServiceName) Set Service name. Valid values: LVB, LEB. If this parameter is left empty, all data of LVB and LEB will be queried.
 */
class DescribeStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
The start time and end time cannot be more than 24 hours apart and must be within the last 15 days.
     */
    public $EndTime;

    /**
     * @var string Playback domain name,
If this parameter is left empty, data of live streams of all playback domain names will be queried.
     */
    public $PlayDomain;

    /**
     * @var string Stream name (exact match).
If this parameter is left empty, full playback data will be queried.
     */
    public $StreamName;

    /**
     * @var string Push address. Its value is the same as the `AppName` in playback address. It supports exact match, and takes effect only when `StreamName` is passed at the same time.
If it is left empty, the full playback data will be queried.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
     */
    public $AppName;

    /**
     * @var string Service name. Valid values: LVB, LEB. If this parameter is left empty, all data of LVB and LEB will be queried.
     */
    public $ServiceName;

    /**
     * @param string $StartTime Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
     * @param string $EndTime End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS
The start time and end time cannot be more than 24 hours apart and must be within the last 15 days.
     * @param string $PlayDomain Playback domain name,
If this parameter is left empty, data of live streams of all playback domain names will be queried.
     * @param string $StreamName Stream name (exact match).
If this parameter is left empty, full playback data will be queried.
     * @param string $AppName Push address. Its value is the same as the `AppName` in playback address. It supports exact match, and takes effect only when `StreamName` is passed at the same time.
If it is left empty, the full playback data will be queried.
Note: to query by `AppName`, you need to submit a ticket first. After your application succeeds, it will take about 5 business days (subject to the time in the reply) for the configuration to take effect.
     * @param string $ServiceName Service name. Valid values: LVB, LEB. If this parameter is left empty, all data of LVB and LEB will be queried.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
