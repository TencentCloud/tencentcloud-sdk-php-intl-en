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
 * DescribeLiveStreamPublishedList request structure.
 *
 * @method string getDomainName() Obtain Your push domain name.
 * @method void setDomainName(string $DomainName) Set Your push domain name.
 * @method string getEndTime() Obtain End time.
In UTC format, such as 2016-06-30T19:00:00Z.
This cannot be after the current time.
Note: The difference between EndTime and StartTime cannot be greater than 30 days.
 * @method void setEndTime(string $EndTime) Set End time.
In UTC format, such as 2016-06-30T19:00:00Z.
This cannot be after the current time.
Note: The difference between EndTime and StartTime cannot be greater than 30 days.
 * @method string getStartTime() Obtain Start time. 
In UTC format, such as 2016-06-29T19:00:00Z.
This supports querying data in the past 60 days.
 * @method void setStartTime(string $StartTime) Set Start time. 
In UTC format, such as 2016-06-29T19:00:00Z.
This supports querying data in the past 60 days.
 * @method string getAppName() Obtain Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default. Fuzzy match is not supported.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default. Fuzzy match is not supported.
 * @method integer getPageNum() Obtain Page number to get.
Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number to get.
Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page.
Maximum value: 100
Valid values: integers between 10 and 100
Default value: 10
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
Maximum value: 100
Valid values: integers between 10 and 100
Default value: 10
 * @method string getStreamName() Obtain Stream name, which supports fuzzy match.
 * @method void setStreamName(string $StreamName) Set Stream name, which supports fuzzy match.
 */
class DescribeLiveStreamPublishedListRequest extends AbstractModel
{
    /**
     * @var string Your push domain name.
     */
    public $DomainName;

    /**
     * @var string End time.
In UTC format, such as 2016-06-30T19:00:00Z.
This cannot be after the current time.
Note: The difference between EndTime and StartTime cannot be greater than 30 days.
     */
    public $EndTime;

    /**
     * @var string Start time. 
In UTC format, such as 2016-06-29T19:00:00Z.
This supports querying data in the past 60 days.
     */
    public $StartTime;

    /**
     * @var string Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default. Fuzzy match is not supported.
     */
    public $AppName;

    /**
     * @var integer Page number to get.
Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page.
Maximum value: 100
Valid values: integers between 10 and 100
Default value: 10
     */
    public $PageSize;

    /**
     * @var string Stream name, which supports fuzzy match.
     */
    public $StreamName;

    /**
     * @param string $DomainName Your push domain name.
     * @param string $EndTime End time.
In UTC format, such as 2016-06-30T19:00:00Z.
This cannot be after the current time.
Note: The difference between EndTime and StartTime cannot be greater than 30 days.
     * @param string $StartTime Start time. 
In UTC format, such as 2016-06-29T19:00:00Z.
This supports querying data in the past 60 days.
     * @param string $AppName Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default. Fuzzy match is not supported.
     * @param integer $PageNum Page number to get.
Default value: 1.
     * @param integer $PageSize Number of entries per page.
Maximum value: 100
Valid values: integers between 10 and 100
Default value: 10
     * @param string $StreamName Stream name, which supports fuzzy match.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
