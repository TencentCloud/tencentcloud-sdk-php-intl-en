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
 * DescribeScreenShotSheetNumList request structure.
 *
 * @method string getStartTime() Obtain Start time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
 * @method void setStartTime(string $StartTime) Set Start time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
 * @method string getEndTime() Obtain End time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`. Data for the last year can be queried.
 * @method void setEndTime(string $EndTime) Set End time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`. Data for the last year can be queried.
 * @method string getZone() Obtain Region information. Valid values: Mainland, Oversea. The former is to query data within Mainland China, while the latter outside Mainland China. If this parameter is left empty, data of all regions will be queried.
 * @method void setZone(string $Zone) Set Region information. Valid values: Mainland, Oversea. The former is to query data within Mainland China, while the latter outside Mainland China. If this parameter is left empty, data of all regions will be queried.
 * @method array getPushDomains() Obtain Push domain name (data at the domain name level after November 1, 2019 can be queried).
 * @method void setPushDomains(array $PushDomains) Set Push domain name (data at the domain name level after November 1, 2019 can be queried).
 * @method string getGranularity() Obtain Data granularity. There is a 1.5-hour delay in data reporting. Valid values: `Minute` (5-minute granularity; query period of up to 31 days); `Day` (1-day granularity based on UTC+8:00; query period of up to 186 days)
 * @method void setGranularity(string $Granularity) Set Data granularity. There is a 1.5-hour delay in data reporting. Valid values: `Minute` (5-minute granularity; query period of up to 31 days); `Day` (1-day granularity based on UTC+8:00; query period of up to 186 days)
 */
class DescribeScreenShotSheetNumListRequest extends AbstractModel
{
    /**
     * @var string Start time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
     */
    public $StartTime;

    /**
     * @var string End time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`. Data for the last year can be queried.
     */
    public $EndTime;

    /**
     * @var string Region information. Valid values: Mainland, Oversea. The former is to query data within Mainland China, while the latter outside Mainland China. If this parameter is left empty, data of all regions will be queried.
     */
    public $Zone;

    /**
     * @var array Push domain name (data at the domain name level after November 1, 2019 can be queried).
     */
    public $PushDomains;

    /**
     * @var string Data granularity. There is a 1.5-hour delay in data reporting. Valid values: `Minute` (5-minute granularity; query period of up to 31 days); `Day` (1-day granularity based on UTC+8:00; query period of up to 186 days)
     */
    public $Granularity;

    /**
     * @param string $StartTime Start time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
     * @param string $EndTime End time in UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`. Data for the last year can be queried.
     * @param string $Zone Region information. Valid values: Mainland, Oversea. The former is to query data within Mainland China, while the latter outside Mainland China. If this parameter is left empty, data of all regions will be queried.
     * @param array $PushDomains Push domain name (data at the domain name level after November 1, 2019 can be queried).
     * @param string $Granularity Data granularity. There is a 1.5-hour delay in data reporting. Valid values: `Minute` (5-minute granularity; query period of up to 31 days); `Day` (1-day granularity based on UTC+8:00; query period of up to 186 days)
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
