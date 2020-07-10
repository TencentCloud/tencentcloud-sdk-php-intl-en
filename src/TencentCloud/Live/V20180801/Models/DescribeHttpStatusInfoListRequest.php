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
 * DescribeHttpStatusInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
StartTime cannot be more than 3 months ago.
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
StartTime cannot be more than 3 months ago.
 * @method string getEndTime() Obtain End time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
 * @method array getPlayDomains() Obtain List of playback domain names.
 * @method void setPlayDomains(array $PlayDomains) Set List of playback domain names.
 */
class DescribeHttpStatusInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
StartTime cannot be more than 3 months ago.
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
     */
    public $EndTime;

    /**
     * @var array List of playback domain names.
     */
    public $PlayDomains;

    /**
     * @param string $StartTime Start time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
StartTime cannot be more than 3 months ago.
     * @param string $EndTime End time (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
     * @param array $PlayDomains List of playback domain names.
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

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }
    }
}
