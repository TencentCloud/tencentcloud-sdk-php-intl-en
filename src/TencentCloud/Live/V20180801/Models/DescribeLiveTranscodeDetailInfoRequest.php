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
 * DescribeLiveTranscodeDetailInfo request structure.
 *
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getDayTime() Obtain Query date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a day in the past one month, with yesterday as the latest date allowed.
 * @method void setDayTime(string $DayTime) Set Query date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a day in the past one month, with yesterday as the latest date allowed.
 * @method integer getPageNum() Obtain Number of pages. Default value: 1.
Up to 100 pages.
 * @method void setPageNum(integer $PageNum) Set Number of pages. Default value: 1.
Up to 100 pages.
 * @method integer getPageSize() Obtain Number of entries per page. Default value: 20,
Value range: [10,1000].
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Default value: 20,
Value range: [10,1000].
 * @method string getStartDayTime() Obtain Start date (UTC+8)
Format: yyyymmdd
Note: details for the last one month can be queried.
 * @method void setStartDayTime(string $StartDayTime) Set Start date (UTC+8)
Format: yyyymmdd
Note: details for the last one month can be queried.
 * @method string getEndDayTime() Obtain End date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a period in the past one month, with yesterday as the latest date allowed. You must specify either `DayTime`, or `StartDayTime` and `EndDayTime`. If you specify all three parameters, only `DayTime` will be applied.
 * @method void setEndDayTime(string $EndDayTime) Set End date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a period in the past one month, with yesterday as the latest date allowed. You must specify either `DayTime`, or `StartDayTime` and `EndDayTime`. If you specify all three parameters, only `DayTime` will be applied.
 */
class DescribeLiveTranscodeDetailInfoRequest extends AbstractModel
{
    /**
     * @var string Push domain name.
     */
    public $PushDomain;

    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string Query date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a day in the past one month, with yesterday as the latest date allowed.
     */
    public $DayTime;

    /**
     * @var integer Number of pages. Default value: 1.
Up to 100 pages.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Default value: 20,
Value range: [10,1000].
     */
    public $PageSize;

    /**
     * @var string Start date (UTC+8)
Format: yyyymmdd
Note: details for the last one month can be queried.
     */
    public $StartDayTime;

    /**
     * @var string End date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a period in the past one month, with yesterday as the latest date allowed. You must specify either `DayTime`, or `StartDayTime` and `EndDayTime`. If you specify all three parameters, only `DayTime` will be applied.
     */
    public $EndDayTime;

    /**
     * @param string $PushDomain Push domain name.
     * @param string $StreamName Stream name.
     * @param string $DayTime Query date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a day in the past one month, with yesterday as the latest date allowed.
     * @param integer $PageNum Number of pages. Default value: 1.
Up to 100 pages.
     * @param integer $PageSize Number of entries per page. Default value: 20,
Value range: [10,1000].
     * @param string $StartDayTime Start date (UTC+8)
Format: yyyymmdd
Note: details for the last one month can be queried.
     * @param string $EndDayTime End date (UTC+8)
Format: yyyymmdd
Note: you can query the statistics for a period in the past one month, with yesterday as the latest date allowed. You must specify either `DayTime`, or `StartDayTime` and `EndDayTime`. If you specify all three parameters, only `DayTime` will be applied.
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
        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartDayTime",$param) and $param["StartDayTime"] !== null) {
            $this->StartDayTime = $param["StartDayTime"];
        }

        if (array_key_exists("EndDayTime",$param) and $param["EndDayTime"] !== null) {
            $this->EndDayTime = $param["EndDayTime"];
        }
    }
}
