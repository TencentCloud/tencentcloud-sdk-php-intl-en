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
 * @method string getStartTime() Obtain Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS,
The start time cannot be more than 30 days after the current time.
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS,
The start time cannot be more than 30 days after the current time.
 * @method string getEndTime() Obtain End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS.
The end time and start time must be on the same day.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS.
The end time and start time must be on the same day.
 * @method string getPlayDomain() Obtain Playback domain name.
If it is left blank, data of live streams of all playback domain names will be queried.
 * @method void setPlayDomain(string $PlayDomain) Set Playback domain name.
If it is left blank, data of live streams of all playback domain names will be queried.
 * @method string getStreamName() Obtain Stream name (exact match).
If it is left blank, the full playback data will be queried.
 * @method void setStreamName(string $StreamName) Set Stream name (exact match).
If it is left blank, the full playback data will be queried.
 * @method string getAppName() Obtain push and playback addresses and is "live" by default. Exact match is required. Fuzzy match is not supported.
If it is left blank, the full playback data will be queried.
Note: To query by AppName, you need to submit a ticket for application.
 * @method void setAppName(string $AppName) Set push and playback addresses and is "live" by default. Exact match is required. Fuzzy match is not supported.
If it is left blank, the full playback data will be queried.
Note: To query by AppName, you need to submit a ticket for application.
 */
class DescribeStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS,
The start time cannot be more than 30 days after the current time.
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS.
The end time and start time must be on the same day.
     */
    public $EndTime;

    /**
     * @var string Playback domain name.
If it is left blank, data of live streams of all playback domain names will be queried.
     */
    public $PlayDomain;

    /**
     * @var string Stream name (exact match).
If it is left blank, the full playback data will be queried.
     */
    public $StreamName;

    /**
     * @var string push and playback addresses and is "live" by default. Exact match is required. Fuzzy match is not supported.
If it is left blank, the full playback data will be queried.
Note: To query by AppName, you need to submit a ticket for application.
     */
    public $AppName;

    /**
     * @param string $StartTime Start time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS,
The start time cannot be more than 30 days after the current time.
     * @param string $EndTime End time (Beijing time) in the format of yyyy-mm-dd HH:MM:SS.
The end time and start time must be on the same day.
     * @param string $PlayDomain Playback domain name.
If it is left blank, data of live streams of all playback domain names will be queried.
     * @param string $StreamName Stream name (exact match).
If it is left blank, the full playback data will be queried.
     * @param string $AppName push and playback addresses and is "live" by default. Exact match is required. Fuzzy match is not supported.
If it is left blank, the full playback data will be queried.
Note: To query by AppName, you need to submit a ticket for application.
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
    }
}
