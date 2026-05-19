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
 * DescribeMediaPlayStatDetails request structure.
 *
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method string getStartTime() Obtain Start time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Start time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain End time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set End time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getInterval() Obtain Statistical time granularity. Valid values:
<li>Hour: hourly granularity.</li>
<li>Day: By day.</li>
The default granularity is determined by the duration. If the duration is less than 1 day, the granularity is hour. If the duration is equal to or greater than 1 day, the granularity is day.
 * @method void setInterval(string $Interval) Set Statistical time granularity. Valid values:
<li>Hour: hourly granularity.</li>
<li>Day: By day.</li>
The default granularity is determined by the duration. If the duration is less than 1 day, the granularity is hour. If the duration is equal to or greater than 1 day, the granularity is day.
 */
class DescribeMediaPlayStatDetailsRequest extends AbstractModel
{
    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var string Start time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Statistical time granularity. Valid values:
<li>Hour: hourly granularity.</li>
<li>Day: By day.</li>
The default granularity is determined by the duration. If the duration is less than 1 day, the granularity is hour. If the duration is equal to or greater than 1 day, the granularity is day.
     */
    public $Interval;

    /**
     * @param string $FileId Media file ID.
     * @param string $StartTime Start time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End time. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Interval Statistical time granularity. Valid values:
<li>Hour: hourly granularity.</li>
<li>Day: By day.</li>
The default granularity is determined by the duration. If the duration is less than 1 day, the granularity is hour. If the duration is equal to or greater than 1 day, the granularity is day.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
