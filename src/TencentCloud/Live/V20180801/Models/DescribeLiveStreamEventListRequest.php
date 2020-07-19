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
 * DescribeLiveStreamEventList request structure.
 *
 * @method string getStartTime() Obtain Start time. 
In UTC format, such as 2018-12-29T19:00:00Z.
This supports querying the history of 60 days.
 * @method void setStartTime(string $StartTime) Set Start time. 
In UTC format, such as 2018-12-29T19:00:00Z.
This supports querying the history of 60 days.
 * @method string getEndTime() Obtain End time.
In UTC format, such as 2018-12-29T20:00:00Z.
This cannot be after the current time and cannot be more than 30 days after the start time.
 * @method void setEndTime(string $EndTime) Set End time.
In UTC format, such as 2018-12-29T20:00:00Z.
This cannot be after the current time and cannot be more than 30 days after the start time.
 * @method string getAppName() Obtain Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method string getStreamName() Obtain Stream name; query with wildcard (*) is not supported; fuzzy match by default.
The IsStrict field can be used to change to exact query.
 * @method void setStreamName(string $StreamName) Set Stream name; query with wildcard (*) is not supported; fuzzy match by default.
The IsStrict field can be used to change to exact query.
 * @method integer getPageNum() Obtain Page number to get.
Default value: 1.
Note: Currently, query for up to 10,000 entries is supported.
 * @method void setPageNum(integer $PageNum) Set Page number to get.
Default value: 1.
Note: Currently, query for up to 10,000 entries is supported.
 * @method integer getPageSize() Obtain Number of entries per page.
Maximum value: 100.
Value range: any integer between 1 and 100.
Default value: 10.
Note: currently, query for up to 10,000 entries is supported.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
Maximum value: 100.
Value range: any integer between 1 and 100.
Default value: 10.
Note: currently, query for up to 10,000 entries is supported.
 * @method integer getIsFilter() Obtain Whether to filter. No filtering by default.
0: No filtering at all.
1: Filter out the failing streams and return only the successful ones.
 * @method void setIsFilter(integer $IsFilter) Set Whether to filter. No filtering by default.
0: No filtering at all.
1: Filter out the failing streams and return only the successful ones.
 * @method integer getIsStrict() Obtain Whether to query exactly. Fuzzy match by default.
0: Fuzzy match.
1: Exact query.
Note: This parameter takes effect when StreamName is used.
 * @method void setIsStrict(integer $IsStrict) Set Whether to query exactly. Fuzzy match by default.
0: Fuzzy match.
1: Exact query.
Note: This parameter takes effect when StreamName is used.
 * @method integer getIsAsc() Obtain Whether to display in ascending order by end time. Descending order by default.
0: Descending.
1: Ascending.
 * @method void setIsAsc(integer $IsAsc) Set Whether to display in ascending order by end time. Descending order by default.
0: Descending.
1: Ascending.
 */
class DescribeLiveStreamEventListRequest extends AbstractModel
{
    /**
     * @var string Start time. 
In UTC format, such as 2018-12-29T19:00:00Z.
This supports querying the history of 60 days.
     */
    public $StartTime;

    /**
     * @var string End time.
In UTC format, such as 2018-12-29T20:00:00Z.
This cannot be after the current time and cannot be more than 30 days after the start time.
     */
    public $EndTime;

    /**
     * @var string Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     */
    public $AppName;

    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var string Stream name; query with wildcard (*) is not supported; fuzzy match by default.
The IsStrict field can be used to change to exact query.
     */
    public $StreamName;

    /**
     * @var integer Page number to get.
Default value: 1.
Note: Currently, query for up to 10,000 entries is supported.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page.
Maximum value: 100.
Value range: any integer between 1 and 100.
Default value: 10.
Note: currently, query for up to 10,000 entries is supported.
     */
    public $PageSize;

    /**
     * @var integer Whether to filter. No filtering by default.
0: No filtering at all.
1: Filter out the failing streams and return only the successful ones.
     */
    public $IsFilter;

    /**
     * @var integer Whether to query exactly. Fuzzy match by default.
0: Fuzzy match.
1: Exact query.
Note: This parameter takes effect when StreamName is used.
     */
    public $IsStrict;

    /**
     * @var integer Whether to display in ascending order by end time. Descending order by default.
0: Descending.
1: Ascending.
     */
    public $IsAsc;

    /**
     * @param string $StartTime Start time. 
In UTC format, such as 2018-12-29T19:00:00Z.
This supports querying the history of 60 days.
     * @param string $EndTime End time.
In UTC format, such as 2018-12-29T20:00:00Z.
This cannot be after the current time and cannot be more than 30 days after the start time.
     * @param string $AppName Push path, which is the same as the AppName in push and playback addresses and is "live" by default.
     * @param string $DomainName Push domain name.
     * @param string $StreamName Stream name; query with wildcard (*) is not supported; fuzzy match by default.
The IsStrict field can be used to change to exact query.
     * @param integer $PageNum Page number to get.
Default value: 1.
Note: Currently, query for up to 10,000 entries is supported.
     * @param integer $PageSize Number of entries per page.
Maximum value: 100.
Value range: any integer between 1 and 100.
Default value: 10.
Note: currently, query for up to 10,000 entries is supported.
     * @param integer $IsFilter Whether to filter. No filtering by default.
0: No filtering at all.
1: Filter out the failing streams and return only the successful ones.
     * @param integer $IsStrict Whether to query exactly. Fuzzy match by default.
0: Fuzzy match.
1: Exact query.
Note: This parameter takes effect when StreamName is used.
     * @param integer $IsAsc Whether to display in ascending order by end time. Descending order by default.
0: Descending.
1: Ascending.
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("IsFilter",$param) and $param["IsFilter"] !== null) {
            $this->IsFilter = $param["IsFilter"];
        }

        if (array_key_exists("IsStrict",$param) and $param["IsStrict"] !== null) {
            $this->IsStrict = $param["IsStrict"];
        }

        if (array_key_exists("IsAsc",$param) and $param["IsAsc"] !== null) {
            $this->IsAsc = $param["IsAsc"];
        }
    }
}
