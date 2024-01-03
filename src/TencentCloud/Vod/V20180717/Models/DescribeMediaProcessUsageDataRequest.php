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
 * DescribeMediaProcessUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setStartTime(string $StartTime) Set Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getEndTime() Obtain End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). The end date must be on or after the start date.
 * @method void setEndTime(string $EndTime) Set End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). The end date must be on or after the start date.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getType() Obtain Query the video processing task type. Currently supported task types include:
<li> Transcoding: Normal transcoding</li>
<li> Transcoding-TESHD: Extremely fast high-definition transcoding</li>
<li> Editing : Video editing</li>
<li> Editing-TESHD: Extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: Adaptive bitrate streaming</li>
<li> ContentAudit: Content audit</li> li>
<li> ContentRecognition: Content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li> ExtractTraceWatermark: Extract watermark</li>
<li> AddTraceWatermark: Add watermark </li>
<li> RebuildMedia: Rebirth of audio and video quality</li>
<li> QualityInspect: Media quality inspection</li>
<li> VideoHighlight: Smart video collection</li>
< li> VideoTag: Video smart tag</li>
<li> VideoClassification: Video smart classification</li>
<li> VideoCover: Video smart cover</li>
<li> VideoSegment: Video smart split </li>
<li>Transcode: transcoding, including normal transcoding, high-speed HD and video editing (not recommended)</li>
 * @method void setType(string $Type) Set Query the video processing task type. Currently supported task types include:
<li> Transcoding: Normal transcoding</li>
<li> Transcoding-TESHD: Extremely fast high-definition transcoding</li>
<li> Editing : Video editing</li>
<li> Editing-TESHD: Extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: Adaptive bitrate streaming</li>
<li> ContentAudit: Content audit</li> li>
<li> ContentRecognition: Content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li> ExtractTraceWatermark: Extract watermark</li>
<li> AddTraceWatermark: Add watermark </li>
<li> RebuildMedia: Rebirth of audio and video quality</li>
<li> QualityInspect: Media quality inspection</li>
<li> VideoHighlight: Smart video collection</li>
< li> VideoTag: Video smart tag</li>
<li> VideoClassification: Video smart classification</li>
<li> VideoCover: Video smart cover</li>
<li> VideoSegment: Video smart split </li>
<li>Transcode: transcoding, including normal transcoding, high-speed HD and video editing (not recommended)</li>
 */
class DescribeMediaProcessUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $StartTime;

    /**
     * @var string End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). The end date must be on or after the start date.
     */
    public $EndTime;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Query the video processing task type. Currently supported task types include:
<li> Transcoding: Normal transcoding</li>
<li> Transcoding-TESHD: Extremely fast high-definition transcoding</li>
<li> Editing : Video editing</li>
<li> Editing-TESHD: Extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: Adaptive bitrate streaming</li>
<li> ContentAudit: Content audit</li> li>
<li> ContentRecognition: Content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li> ExtractTraceWatermark: Extract watermark</li>
<li> AddTraceWatermark: Add watermark </li>
<li> RebuildMedia: Rebirth of audio and video quality</li>
<li> QualityInspect: Media quality inspection</li>
<li> VideoHighlight: Smart video collection</li>
< li> VideoTag: Video smart tag</li>
<li> VideoClassification: Video smart classification</li>
<li> VideoCover: Video smart cover</li>
<li> VideoSegment: Video smart split </li>
<li>Transcode: transcoding, including normal transcoding, high-speed HD and video editing (not recommended)</li>
     */
    public $Type;

    /**
     * @param string $StartTime Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $EndTime End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). The end date must be on or after the start date.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Type Query the video processing task type. Currently supported task types include:
<li> Transcoding: Normal transcoding</li>
<li> Transcoding-TESHD: Extremely fast high-definition transcoding</li>
<li> Editing : Video editing</li>
<li> Editing-TESHD: Extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: Adaptive bitrate streaming</li>
<li> ContentAudit: Content audit</li> li>
<li> ContentRecognition: Content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li> ExtractTraceWatermark: Extract watermark</li>
<li> AddTraceWatermark: Add watermark </li>
<li> RebuildMedia: Rebirth of audio and video quality</li>
<li> QualityInspect: Media quality inspection</li>
<li> VideoHighlight: Smart video collection</li>
< li> VideoTag: Video smart tag</li>
<li> VideoClassification: Video smart classification</li>
<li> VideoCover: Video smart cover</li>
<li> VideoSegment: Video smart split </li>
<li>Transcode: transcoding, including normal transcoding, high-speed HD and video editing (not recommended)</li>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
