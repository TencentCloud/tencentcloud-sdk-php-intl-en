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
 * DescribePlayErrorCodeDetailInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
 * @method string getEndTime() Obtain End time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method integer getGranularity() Obtain Query granularity:
1: 1-minute granularity.
 * @method void setGranularity(integer $Granularity) Set Query granularity:
1: 1-minute granularity.
 * @method string getStatType() Obtain Yes. Valid values: "4xx", "5xx". Mixed codes in the format of `4xx,5xx` are also supported.
 * @method void setStatType(string $StatType) Set Yes. Valid values: "4xx", "5xx". Mixed codes in the format of `4xx,5xx` are also supported.
 * @method array getPlayDomains() Obtain Playback domain name list.
 * @method void setPlayDomains(array $PlayDomains) Set Playback domain name list.
 * @method string getMainlandOrOversea() Obtain Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 */
class DescribePlayErrorCodeDetailInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     */
    public $EndTime;

    /**
     * @var integer Query granularity:
1: 1-minute granularity.
     */
    public $Granularity;

    /**
     * @var string Yes. Valid values: "4xx", "5xx". Mixed codes in the format of `4xx,5xx` are also supported.
     */
    public $StatType;

    /**
     * @var array Playback domain name list.
     */
    public $PlayDomains;

    /**
     * @var string Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime Start time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
     * @param string $EndTime End time (Beijing time),
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     * @param integer $Granularity Query granularity:
1: 1-minute granularity.
     * @param string $StatType Yes. Valid values: "4xx", "5xx". Mixed codes in the format of `4xx,5xx` are also supported.
     * @param array $PlayDomains Playback domain name list.
     * @param string $MainlandOrOversea Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
