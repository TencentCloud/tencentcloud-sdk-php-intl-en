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
 * DescribeMediaProcessUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getType() Obtain Query video processing task type. Currently supported task types include:
<li>Transcoding: standard transcoding.</li>
<li>Transcoding-TESHD: TSC transcoding</li>
<li>Editing: video editing</li>
<li>Editing-TESHD: Extremely fast high-definition video editing</li>
<li>AdaptiveBitrateStreaming: adaptive bitrate streaming</li>
<li>ContentAudit: content moderation</li>
<li>ContentRecognition: content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li>ExtractTraceWatermark: extract watermark</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: Audio and video quality revival</li>
<li>QualityInspect: audio and video quality inspection</li>
<li>VideoHighlight: Video intelligent highlights</li>
<li>VideoTag: video intelligent tag</li>
<li>VideoClassification: video intelligent classification</li>
<li>VideoCover: video intelligent cover</li>
<li>VideoSegment: video intelligent splitting</li>
<li>VideoProduce: video production</li>
<li>MediaCast: media forwarding</li>
<li>Transcode: Transcode, including standard transcoding, top speed Codec, and video editing (This is not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding.</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: Real-time encryption</li>
<li>MediaEnhancement: audio and video enhancement</li>
<li>ImageCompression: image compression</li>
<li>ImageEnhancement: image enhancement</li>
<li>ImageSuperResolution: image super resolution</li>
<li>ImageAdvanceCompression: image advanced compression</li>
<li>ImageUnderstanding: image understanding</li>
<li>AddTraceWatermark: Add a traceable watermark</li>
<li>AddBlindWatermark: Add blind watermark</li>
<li>AddNagraWatermark: Add NAGRA digital watermark</li>
<li>ExtractTraceWatermark: extract traceability watermark</li>
<li>ExtractBlindWatermark: extract a blind watermark</li>
<li>ExtractNagraWatermark: Extract NAGRA digital watermark</li>

 * @method void setType(string $Type) Set Query video processing task type. Currently supported task types include:
<li>Transcoding: standard transcoding.</li>
<li>Transcoding-TESHD: TSC transcoding</li>
<li>Editing: video editing</li>
<li>Editing-TESHD: Extremely fast high-definition video editing</li>
<li>AdaptiveBitrateStreaming: adaptive bitrate streaming</li>
<li>ContentAudit: content moderation</li>
<li>ContentRecognition: content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li>ExtractTraceWatermark: extract watermark</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: Audio and video quality revival</li>
<li>QualityInspect: audio and video quality inspection</li>
<li>VideoHighlight: Video intelligent highlights</li>
<li>VideoTag: video intelligent tag</li>
<li>VideoClassification: video intelligent classification</li>
<li>VideoCover: video intelligent cover</li>
<li>VideoSegment: video intelligent splitting</li>
<li>VideoProduce: video production</li>
<li>MediaCast: media forwarding</li>
<li>Transcode: Transcode, including standard transcoding, top speed Codec, and video editing (This is not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding.</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: Real-time encryption</li>
<li>MediaEnhancement: audio and video enhancement</li>
<li>ImageCompression: image compression</li>
<li>ImageEnhancement: image enhancement</li>
<li>ImageSuperResolution: image super resolution</li>
<li>ImageAdvanceCompression: image advanced compression</li>
<li>ImageUnderstanding: image understanding</li>
<li>AddTraceWatermark: Add a traceable watermark</li>
<li>AddBlindWatermark: Add blind watermark</li>
<li>AddNagraWatermark: Add NAGRA digital watermark</li>
<li>ExtractTraceWatermark: extract traceability watermark</li>
<li>ExtractBlindWatermark: extract a blind watermark</li>
<li>ExtractNagraWatermark: Extract NAGRA digital watermark</li>
 */
class DescribeMediaProcessUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Query video processing task type. Currently supported task types include:
<li>Transcoding: standard transcoding.</li>
<li>Transcoding-TESHD: TSC transcoding</li>
<li>Editing: video editing</li>
<li>Editing-TESHD: Extremely fast high-definition video editing</li>
<li>AdaptiveBitrateStreaming: adaptive bitrate streaming</li>
<li>ContentAudit: content moderation</li>
<li>ContentRecognition: content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li>ExtractTraceWatermark: extract watermark</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: Audio and video quality revival</li>
<li>QualityInspect: audio and video quality inspection</li>
<li>VideoHighlight: Video intelligent highlights</li>
<li>VideoTag: video intelligent tag</li>
<li>VideoClassification: video intelligent classification</li>
<li>VideoCover: video intelligent cover</li>
<li>VideoSegment: video intelligent splitting</li>
<li>VideoProduce: video production</li>
<li>MediaCast: media forwarding</li>
<li>Transcode: Transcode, including standard transcoding, top speed Codec, and video editing (This is not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding.</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: Real-time encryption</li>
<li>MediaEnhancement: audio and video enhancement</li>
<li>ImageCompression: image compression</li>
<li>ImageEnhancement: image enhancement</li>
<li>ImageSuperResolution: image super resolution</li>
<li>ImageAdvanceCompression: image advanced compression</li>
<li>ImageUnderstanding: image understanding</li>
<li>AddTraceWatermark: Add a traceable watermark</li>
<li>AddBlindWatermark: Add blind watermark</li>
<li>AddNagraWatermark: Add NAGRA digital watermark</li>
<li>ExtractTraceWatermark: extract traceability watermark</li>
<li>ExtractBlindWatermark: extract a blind watermark</li>
<li>ExtractNagraWatermark: Extract NAGRA digital watermark</li>

     */
    public $Type;

    /**
     * @param string $StartTime Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $EndTime End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Type Query video processing task type. Currently supported task types include:
<li>Transcoding: standard transcoding.</li>
<li>Transcoding-TESHD: TSC transcoding</li>
<li>Editing: video editing</li>
<li>Editing-TESHD: Extremely fast high-definition video editing</li>
<li>AdaptiveBitrateStreaming: adaptive bitrate streaming</li>
<li>ContentAudit: content moderation</li>
<li>ContentRecognition: content recognition</li>
<li> RemoveWatermark: Remove watermark</li>
<li>ExtractTraceWatermark: extract watermark</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: Audio and video quality revival</li>
<li>QualityInspect: audio and video quality inspection</li>
<li>VideoHighlight: Video intelligent highlights</li>
<li>VideoTag: video intelligent tag</li>
<li>VideoClassification: video intelligent classification</li>
<li>VideoCover: video intelligent cover</li>
<li>VideoSegment: video intelligent splitting</li>
<li>VideoProduce: video production</li>
<li>MediaCast: media forwarding</li>
<li>Transcode: Transcode, including standard transcoding, top speed Codec, and video editing (This is not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding.</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: Real-time encryption</li>
<li>MediaEnhancement: audio and video enhancement</li>
<li>ImageCompression: image compression</li>
<li>ImageEnhancement: image enhancement</li>
<li>ImageSuperResolution: image super resolution</li>
<li>ImageAdvanceCompression: image advanced compression</li>
<li>ImageUnderstanding: image understanding</li>
<li>AddTraceWatermark: Add a traceable watermark</li>
<li>AddBlindWatermark: Add blind watermark</li>
<li>AddNagraWatermark: Add NAGRA digital watermark</li>
<li>ExtractTraceWatermark: extract traceability watermark</li>
<li>ExtractBlindWatermark: extract a blind watermark</li>
<li>ExtractNagraWatermark: Extract NAGRA digital watermark</li>
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
