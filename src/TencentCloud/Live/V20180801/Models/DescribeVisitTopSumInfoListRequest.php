<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeVisitTopSumInfoList request structure.
 *
 * @method string getStartTime() Obtain The start time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method void setStartTime(string $StartTime) Set The start time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method string getEndTime() Obtain The end time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method void setEndTime(string $EndTime) Set The end time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method string getTopIndex() Obtain Bandwidth metric. Valid values: "Domain", "StreamId".
 * @method void setTopIndex(string $TopIndex) Set Bandwidth metric. Valid values: "Domain", "StreamId".
 * @method array getPlayDomains() Obtain Playback domain name. If this parameter is left empty, full data will be queried by default.
 * @method void setPlayDomains(array $PlayDomains) Set Playback domain name. If this parameter is left empty, full data will be queried by default.
 * @method integer getPageNum() Obtain Page number,
Value range: [1,1000],
Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number,
Value range: [1,1000],
Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page. Value range: [1,1000].
Default value: 20.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: [1,1000].
Default value: 20.
 * @method string getOrderParam() Obtain Sorting metric. Valid values: "AvgFluxPerSecond", "TotalRequest" (default), "TotalFlux".
 * @method void setOrderParam(string $OrderParam) Set Sorting metric. Valid values: "AvgFluxPerSecond", "TotalRequest" (default), "TotalFlux".
 */
class DescribeVisitTopSumInfoListRequest extends AbstractModel
{
    /**
     * @var string The start time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     */
    public $StartTime;

    /**
     * @var string The end time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     */
    public $EndTime;

    /**
     * @var string Bandwidth metric. Valid values: "Domain", "StreamId".
     */
    public $TopIndex;

    /**
     * @var array Playback domain name. If this parameter is left empty, full data will be queried by default.
     */
    public $PlayDomains;

    /**
     * @var integer Page number,
Value range: [1,1000],
Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Value range: [1,1000].
Default value: 20.
     */
    public $PageSize;

    /**
     * @var string Sorting metric. Valid values: "AvgFluxPerSecond", "TotalRequest" (default), "TotalFlux".
     */
    public $OrderParam;

    /**
     * @param string $StartTime The start time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     * @param string $EndTime The end time of the request, supports data query for the last one day, the gap between the start time and the end time cannot exceed four hours. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     * @param string $TopIndex Bandwidth metric. Valid values: "Domain", "StreamId".
     * @param array $PlayDomains Playback domain name. If this parameter is left empty, full data will be queried by default.
     * @param integer $PageNum Page number,
Value range: [1,1000],
Default value: 1.
     * @param integer $PageSize Number of entries per page. Value range: [1,1000].
Default value: 20.
     * @param string $OrderParam Sorting metric. Valid values: "AvgFluxPerSecond", "TotalRequest" (default), "TotalFlux".
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

        if (array_key_exists("TopIndex",$param) and $param["TopIndex"] !== null) {
            $this->TopIndex = $param["TopIndex"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderParam",$param) and $param["OrderParam"] !== null) {
            $this->OrderParam = $param["OrderParam"];
        }
    }
}
