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
 * DescribeUploadStreamNums request structure.
 *
 * @method string getStartTime() Obtain Start time point in the format of yyyy-mm-dd HH:MM:SS.
 * @method void setStartTime(string $StartTime) Set Start time point in the format of yyyy-mm-dd HH:MM:SS.
 * @method string getEndTime() Obtain End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 31 days can be queried.
 * @method void setEndTime(string $EndTime) Set End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 31 days can be queried.
 * @method array getDomains() Obtain LVB domain names. If this parameter is left empty, data of all domain names will be queried.
 * @method void setDomains(array $Domains) Set LVB domain names. If this parameter is left empty, data of all domain names will be queried.
 * @method integer getGranularity() Obtain Time granularity of the data. Valid values:
5: 5-minute granularity (the query period is up to 1 day).
1440: 1-day granularity (the query period is up to 1 month).
Default value: 5.
 * @method void setGranularity(integer $Granularity) Set Time granularity of the data. Valid values:
5: 5-minute granularity (the query period is up to 1 day).
1440: 1-day granularity (the query period is up to 1 month).
Default value: 5.
 */
class DescribeUploadStreamNumsRequest extends AbstractModel
{
    /**
     * @var string Start time point in the format of yyyy-mm-dd HH:MM:SS.
     */
    public $StartTime;

    /**
     * @var string End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 31 days can be queried.
     */
    public $EndTime;

    /**
     * @var array LVB domain names. If this parameter is left empty, data of all domain names will be queried.
     */
    public $Domains;

    /**
     * @var integer Time granularity of the data. Valid values:
5: 5-minute granularity (the query period is up to 1 day).
1440: 1-day granularity (the query period is up to 1 month).
Default value: 5.
     */
    public $Granularity;

    /**
     * @param string $StartTime Start time point in the format of yyyy-mm-dd HH:MM:SS.
     * @param string $EndTime End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 31 days can be queried.
     * @param array $Domains LVB domain names. If this parameter is left empty, data of all domain names will be queried.
     * @param integer $Granularity Time granularity of the data. Valid values:
5: 5-minute granularity (the query period is up to 1 day).
1440: 1-day granularity (the query period is up to 1 month).
Default value: 5.
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
