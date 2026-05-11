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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the segment clipped.
 *
 * @method string getStartTime() Obtain Segment start time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Segment start time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain Segment end time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set Segment end time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class LiveRealTimeClipMediaSegmentInfo extends AbstractModel
{
    /**
     * @var string Segment start time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string Segment end time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @param string $StartTime Segment start time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime Segment end time. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
    }
}
