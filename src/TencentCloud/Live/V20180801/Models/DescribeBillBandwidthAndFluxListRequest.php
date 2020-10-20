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
 * DescribeBillBandwidthAndFluxList request structure.
 *
 * @method string getStartTime() Obtain Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setStartTime(string $StartTime) Set Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method string getEndTime() Obtain End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 3 years can be queried.
 * @method void setEndTime(string $EndTime) Set End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 3 years can be queried.
 * @method array getPlayDomains() Obtain LVB playback domain name. If this parameter is left empty, full data will be queried.
 * @method void setPlayDomains(array $PlayDomains) Set LVB playback domain name. If this parameter is left empty, full data will be queried.
 * @method string getMainlandOrOversea() Obtain Valid values:
Mainland: query data for Mainland China,
Oversea: query data for regions outside Mainland China,
Default: query data for all regions.
Note: LEB only supports querying data for all regions.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Valid values:
Mainland: query data for Mainland China,
Oversea: query data for regions outside Mainland China,
Default: query data for all regions.
Note: LEB only supports querying data for all regions.
 * @method integer getGranularity() Obtain Data granularity. Valid values:
5: 5-minute granularity (the query time span should be within 1 day),
60: 1-hour granularity (the query time span should be within one month),
1440: 1-day granularity (the query time span should be within one month).
Default value: 5.
 * @method void setGranularity(integer $Granularity) Set Data granularity. Valid values:
5: 5-minute granularity (the query time span should be within 1 day),
60: 1-hour granularity (the query time span should be within one month),
1440: 1-day granularity (the query time span should be within one month).
Default value: 5.
 * @method string getServiceName() Obtain Service name. Valid values: LVB, LEB. Default value: LVB.
 * @method void setServiceName(string $ServiceName) Set Service name. Valid values: LVB, LEB. Default value: LVB.
 */
class DescribeBillBandwidthAndFluxListRequest extends AbstractModel
{
    /**
     * @var string Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $StartTime;

    /**
     * @var string End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 3 years can be queried.
     */
    public $EndTime;

    /**
     * @var array LVB playback domain name. If this parameter is left empty, full data will be queried.
     */
    public $PlayDomains;

    /**
     * @var string Valid values:
Mainland: query data for Mainland China,
Oversea: query data for regions outside Mainland China,
Default: query data for all regions.
Note: LEB only supports querying data for all regions.
     */
    public $MainlandOrOversea;

    /**
     * @var integer Data granularity. Valid values:
5: 5-minute granularity (the query time span should be within 1 day),
60: 1-hour granularity (the query time span should be within one month),
1440: 1-day granularity (the query time span should be within one month).
Default value: 5.
     */
    public $Granularity;

    /**
     * @var string Service name. Valid values: LVB, LEB. Default value: LVB.
     */
    public $ServiceName;

    /**
     * @param string $StartTime Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
     * @param string $EndTime End time point in the format of yyyy-mm-dd HH:MM:SS. The difference between the start time and end time cannot be greater than 31 days. Data in the last 3 years can be queried.
     * @param array $PlayDomains LVB playback domain name. If this parameter is left empty, full data will be queried.
     * @param string $MainlandOrOversea Valid values:
Mainland: query data for Mainland China,
Oversea: query data for regions outside Mainland China,
Default: query data for all regions.
Note: LEB only supports querying data for all regions.
     * @param integer $Granularity Data granularity. Valid values:
5: 5-minute granularity (the query time span should be within 1 day),
60: 1-hour granularity (the query time span should be within one month),
1440: 1-day granularity (the query time span should be within one month).
Default value: 5.
     * @param string $ServiceName Service name. Valid values: LVB, LEB. Default value: LVB.
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

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
