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
 * DescribeTranscodeTaskNum request structure.
 *
 * @method string getStartTime() Obtain The start time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method void setStartTime(string $StartTime) Set The start time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method string getEndTime() Obtain The end time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method void setEndTime(string $EndTime) Set The end time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
 * @method array getPushDomains() Obtain The push domains to query. If you do not pass a value, all push domains will be queried.
 * @method void setPushDomains(array $PushDomains) Set The push domains to query. If you do not pass a value, all push domains will be queried.
 */
class DescribeTranscodeTaskNumRequest extends AbstractModel
{
    /**
     * @var string The start time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     */
    public $StartTime;

    /**
     * @var string The end time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     */
    public $EndTime;

    /**
     * @var array The push domains to query. If you do not pass a value, all push domains will be queried.
     */
    public $PushDomains;

    /**
     * @param string $StartTime The start time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format, for details, see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     * @param string $EndTime The end time of the request, supports data query for the last forty days, the gap between the start time and the end time cannot exceed one day. Interface request supports two time formats:
1) YYYY-MM-DDThh:mm:ssZ: ISO time format,for details,see [ISO Date Format Description](https://cloud.tencent.com/document/product/267/38543#:~:text=I- ,ISO,-%E6%97%A5%E6%9C%9F%E6%A0%BC%E5%BC%8F)
2) YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.
     * @param array $PushDomains The push domains to query. If you do not pass a value, all push domains will be queried.
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

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }
    }
}
