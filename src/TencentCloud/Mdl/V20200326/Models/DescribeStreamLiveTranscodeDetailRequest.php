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
 * DescribeStreamLiveTranscodeDetail request structure.
 *
 * @method string getStartDayTime() Obtain The query start time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
 * @method void setStartDayTime(string $StartDayTime) Set The query start time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
 * @method string getEndDayTime() Obtain The query end time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
 * @method void setEndDayTime(string $EndDayTime) Set The query end time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
 * @method string getChannelId() Obtain The channel ID (optional).
 * @method void setChannelId(string $ChannelId) Set The channel ID (optional).
 * @method integer getPageNum() Obtain The number of pages. Default value: 1.
The value cannot exceed 100.
 * @method void setPageNum(integer $PageNum) Set The number of pages. Default value: 1.
The value cannot exceed 100.
 * @method integer getPageSize() Obtain The number of records per page. Default value: 10.
Value range: 1-1000.
 * @method void setPageSize(integer $PageSize) Set The number of records per page. Default value: 10.
Value range: 1-1000.
 */
class DescribeStreamLiveTranscodeDetailRequest extends AbstractModel
{
    /**
     * @var string The query start time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
     */
    public $StartDayTime;

    /**
     * @var string The query end time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
     */
    public $EndDayTime;

    /**
     * @var string The channel ID (optional).
     */
    public $ChannelId;

    /**
     * @var integer The number of pages. Default value: 1.
The value cannot exceed 100.
     */
    public $PageNum;

    /**
     * @var integer The number of records per page. Default value: 10.
Value range: 1-1000.
     */
    public $PageSize;

    /**
     * @param string $StartDayTime The query start time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
     * @param string $EndDayTime The query end time (UTC+8) in the format of yyyy-MM-dd.
You can only query data in the last month (not including the current day).
     * @param string $ChannelId The channel ID (optional).
     * @param integer $PageNum The number of pages. Default value: 1.
The value cannot exceed 100.
     * @param integer $PageSize The number of records per page. Default value: 10.
Value range: 1-1000.
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
        if (array_key_exists("StartDayTime",$param) and $param["StartDayTime"] !== null) {
            $this->StartDayTime = $param["StartDayTime"];
        }

        if (array_key_exists("EndDayTime",$param) and $param["EndDayTime"] !== null) {
            $this->EndDayTime = $param["EndDayTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
