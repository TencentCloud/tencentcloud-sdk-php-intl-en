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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaPlayStatDetails request structure.
 *
 * @method string getFileId() Obtain The ID of the media file.
 * @method void setFileId(string $FileId) Set The ID of the media file.
 * @method string getStartTime() Obtain The start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setStartTime(string $StartTime) Set The start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method string getEndTime() Obtain The end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setEndTime(string $EndTime) Set The end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getInterval() Obtain Granularity. Valid values:
<li>Hour</li>
<li>Day</li>
The default value depends on the time period queried. If the time period is shorter than one day, the default value is `Hour`; if the time period is one day or longer, the default value is `Day`.
 * @method void setInterval(string $Interval) Set Granularity. Valid values:
<li>Hour</li>
<li>Day</li>
The default value depends on the time period queried. If the time period is shorter than one day, the default value is `Hour`; if the time period is one day or longer, the default value is `Day`.
 */
class DescribeMediaPlayStatDetailsRequest extends AbstractModel
{
    /**
     * @var string The ID of the media file.
     */
    public $FileId;

    /**
     * @var string The start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $StartTime;

    /**
     * @var string The end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $EndTime;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Granularity. Valid values:
<li>Hour</li>
<li>Day</li>
The default value depends on the time period queried. If the time period is shorter than one day, the default value is `Hour`; if the time period is one day or longer, the default value is `Day`.
     */
    public $Interval;

    /**
     * @param string $FileId The ID of the media file.
     * @param string $StartTime The start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param string $EndTime The end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Interval Granularity. Valid values:
<li>Hour</li>
<li>Day</li>
The default value depends on the time period queried. If the time period is shorter than one day, the default value is `Hour`; if the time period is one day or longer, the default value is `Day`.
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
