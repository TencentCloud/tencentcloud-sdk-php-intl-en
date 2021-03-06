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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaLiveChannelOutputStatistics request structure.
 *
 * @method string getChannelId() Obtain Channel ID.
 * @method void setChannelId(string $ChannelId) Set Channel ID.
 * @method string getStartTime() Obtain Statistics start time, which is one hour ago by default. Maximum value: the last 7 days.
UTC time, such as `2020-01-01T12:00:00Z`.
 * @method void setStartTime(string $StartTime) Set Statistics start time, which is one hour ago by default. Maximum value: the last 7 days.
UTC time, such as `2020-01-01T12:00:00Z`.
 * @method string getEndTime() Obtain Statistics end time, which is one hour after `StartTime` by default.
UTC time, such as `2020-01-01T12:00:00Z`.
 * @method void setEndTime(string $EndTime) Set Statistics end time, which is one hour after `StartTime` by default.
UTC time, such as `2020-01-01T12:00:00Z`.
 * @method string getPeriod() Obtain Data interval. Valid values: 5s, 1min, 5min, 15min. Default value: 1min.
 * @method void setPeriod(string $Period) Set Data interval. Valid values: 5s, 1min, 5min, 15min. Default value: 1min.
 */
class DescribeMediaLiveChannelOutputStatisticsRequest extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $ChannelId;

    /**
     * @var string Statistics start time, which is one hour ago by default. Maximum value: the last 7 days.
UTC time, such as `2020-01-01T12:00:00Z`.
     */
    public $StartTime;

    /**
     * @var string Statistics end time, which is one hour after `StartTime` by default.
UTC time, such as `2020-01-01T12:00:00Z`.
     */
    public $EndTime;

    /**
     * @var string Data interval. Valid values: 5s, 1min, 5min, 15min. Default value: 1min.
     */
    public $Period;

    /**
     * @param string $ChannelId Channel ID.
     * @param string $StartTime Statistics start time, which is one hour ago by default. Maximum value: the last 7 days.
UTC time, such as `2020-01-01T12:00:00Z`.
     * @param string $EndTime Statistics end time, which is one hour after `StartTime` by default.
UTC time, such as `2020-01-01T12:00:00Z`.
     * @param string $Period Data interval. Valid values: 5s, 1min, 5min, 15min. Default value: 1min.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
