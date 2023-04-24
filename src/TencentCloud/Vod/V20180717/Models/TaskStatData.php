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
 * Video processing task statistics.
 *
 * @method string getTaskType() Obtain The task type.
<li>`Transcoding`: General transcoding</li>
<li>`Transcoding-TESHD`: Top Speed Codec transcoding</li>
<li>`Editing`: Video editing</li>
<li>`Editing-TESHD`: Top Speed Codec editing</li>
<li>`AdaptiveBitrateStreaming`: Adaptive bitrate streaming</li>
<li>ContentAudit: Content moderation</li>
<li>`ContentRecognition`: Content recognition</li>
<li>RemoveWatermark: Watermark removal</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`AddTraceWatermark`: Digital watermarking</li>
<li>`RebuildMedia`: Remaster</li>
<li>`Transcode` Transcoding, including general transcoding, Top Speed Codec transcoding, and video editing. This value is not recommended.</li>
 * @method void setTaskType(string $TaskType) Set The task type.
<li>`Transcoding`: General transcoding</li>
<li>`Transcoding-TESHD`: Top Speed Codec transcoding</li>
<li>`Editing`: Video editing</li>
<li>`Editing-TESHD`: Top Speed Codec editing</li>
<li>`AdaptiveBitrateStreaming`: Adaptive bitrate streaming</li>
<li>ContentAudit: Content moderation</li>
<li>`ContentRecognition`: Content recognition</li>
<li>RemoveWatermark: Watermark removal</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`AddTraceWatermark`: Digital watermarking</li>
<li>`RebuildMedia`: Remaster</li>
<li>`Transcode` Transcoding, including general transcoding, Top Speed Codec transcoding, and video editing. This value is not recommended.</li>
 * @method array getSummary() Obtain Task statistics overview (usage unit: second).
 * @method void setSummary(array $Summary) Set Task statistics overview (usage unit: second).
 * @method array getDetails() Obtain The usage statistics for different task types.
Transcoding:
<li>`Remuxing`</li>
<li>`Audio` (audio transcoding)</li>
<li>`Standard.H264.SD`</li>
<li>`Standard.H264.HD`</li>
<li>`Standard.H264.FHD`</li>
<li>`Standard.H264.2K`</li>
<li>`Standard.H264.4K`</li>
<li>`Standard.H265.SD`</li>
<li>`Standard.H265.HD`</li>
<li>`Standard.H265.FHD`</li>
<li>`Standard.H265.2K`</li>
<li>`Standard.H265.4K`</li>
<li>`TESHD-10.H264.SD` (H.264 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.HD` (H.264 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.2K` (H.264 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.4K` (H.264 4K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.SD` (H.265 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.HD` (H.265 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.2K` (H.265 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.4K` (H.265 4K Top Speed Codec transcoding)</li>
<li>`Edit.Audio`</li>
<li>`Edit.H264.SD` (H.264 SD video editing)</li>
<li>`Edit.H264.HD` (H.264 HD video editing)</li>
<li>`Edit.H264.FHD` (H.264 FHD video editing)</li>
<li>`Edit.H264.2K` (H.264 2K video editing)</li>
<li>`Edit.H264.4K` (H.264 4K video editing)</li>
<li>`Edit.H265.SD` (H.265 SD video editing)</li>
<li>`Edit.H265.HD` (H.265 HD video editing)</li>
<li>`Edit.H265.FHD` (H.265 FHD video editing)</li>
<li>`Edit.H265.2K` (H.265 2K video editing)</li>
<li>`Edit.H265.4K` (H.265 4K video editing)</li>
<li>`Edit.TESHD-10.H264.SD` (H.264 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.HD` (H.264 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.2K` (H.264 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.4K` (H.264 4K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.SD` (H.265 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.HD` (H.265 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.2K` (H.265 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.4K` (H.265 4K Top Speed Codec video editing)</li>
The watermark removal/remaster specifications. Valid values:
<li>`480P` (short side ≤ 480 px)</li>
<li>`720P` (short side ≤ 720 px)</li>
<li>`1080P` (short side ≤ 1080 px)</li>
<li>`2K` (short side ≤ 1440 px)</li>
<li>`4K` (short side ≤ 2160 px)</li>
<li>`8K` (short side ≤ 4320 px)</li>
<li>`audio`</li>
 * @method void setDetails(array $Details) Set The usage statistics for different task types.
Transcoding:
<li>`Remuxing`</li>
<li>`Audio` (audio transcoding)</li>
<li>`Standard.H264.SD`</li>
<li>`Standard.H264.HD`</li>
<li>`Standard.H264.FHD`</li>
<li>`Standard.H264.2K`</li>
<li>`Standard.H264.4K`</li>
<li>`Standard.H265.SD`</li>
<li>`Standard.H265.HD`</li>
<li>`Standard.H265.FHD`</li>
<li>`Standard.H265.2K`</li>
<li>`Standard.H265.4K`</li>
<li>`TESHD-10.H264.SD` (H.264 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.HD` (H.264 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.2K` (H.264 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.4K` (H.264 4K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.SD` (H.265 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.HD` (H.265 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.2K` (H.265 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.4K` (H.265 4K Top Speed Codec transcoding)</li>
<li>`Edit.Audio`</li>
<li>`Edit.H264.SD` (H.264 SD video editing)</li>
<li>`Edit.H264.HD` (H.264 HD video editing)</li>
<li>`Edit.H264.FHD` (H.264 FHD video editing)</li>
<li>`Edit.H264.2K` (H.264 2K video editing)</li>
<li>`Edit.H264.4K` (H.264 4K video editing)</li>
<li>`Edit.H265.SD` (H.265 SD video editing)</li>
<li>`Edit.H265.HD` (H.265 HD video editing)</li>
<li>`Edit.H265.FHD` (H.265 FHD video editing)</li>
<li>`Edit.H265.2K` (H.265 2K video editing)</li>
<li>`Edit.H265.4K` (H.265 4K video editing)</li>
<li>`Edit.TESHD-10.H264.SD` (H.264 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.HD` (H.264 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.2K` (H.264 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.4K` (H.264 4K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.SD` (H.265 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.HD` (H.265 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.2K` (H.265 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.4K` (H.265 4K Top Speed Codec video editing)</li>
The watermark removal/remaster specifications. Valid values:
<li>`480P` (short side ≤ 480 px)</li>
<li>`720P` (short side ≤ 720 px)</li>
<li>`1080P` (short side ≤ 1080 px)</li>
<li>`2K` (short side ≤ 1440 px)</li>
<li>`4K` (short side ≤ 2160 px)</li>
<li>`8K` (short side ≤ 4320 px)</li>
<li>`audio`</li>
 */
class TaskStatData extends AbstractModel
{
    /**
     * @var string The task type.
<li>`Transcoding`: General transcoding</li>
<li>`Transcoding-TESHD`: Top Speed Codec transcoding</li>
<li>`Editing`: Video editing</li>
<li>`Editing-TESHD`: Top Speed Codec editing</li>
<li>`AdaptiveBitrateStreaming`: Adaptive bitrate streaming</li>
<li>ContentAudit: Content moderation</li>
<li>`ContentRecognition`: Content recognition</li>
<li>RemoveWatermark: Watermark removal</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`AddTraceWatermark`: Digital watermarking</li>
<li>`RebuildMedia`: Remaster</li>
<li>`Transcode` Transcoding, including general transcoding, Top Speed Codec transcoding, and video editing. This value is not recommended.</li>
     */
    public $TaskType;

    /**
     * @var array Task statistics overview (usage unit: second).
     */
    public $Summary;

    /**
     * @var array The usage statistics for different task types.
Transcoding:
<li>`Remuxing`</li>
<li>`Audio` (audio transcoding)</li>
<li>`Standard.H264.SD`</li>
<li>`Standard.H264.HD`</li>
<li>`Standard.H264.FHD`</li>
<li>`Standard.H264.2K`</li>
<li>`Standard.H264.4K`</li>
<li>`Standard.H265.SD`</li>
<li>`Standard.H265.HD`</li>
<li>`Standard.H265.FHD`</li>
<li>`Standard.H265.2K`</li>
<li>`Standard.H265.4K`</li>
<li>`TESHD-10.H264.SD` (H.264 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.HD` (H.264 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.2K` (H.264 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.4K` (H.264 4K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.SD` (H.265 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.HD` (H.265 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.2K` (H.265 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.4K` (H.265 4K Top Speed Codec transcoding)</li>
<li>`Edit.Audio`</li>
<li>`Edit.H264.SD` (H.264 SD video editing)</li>
<li>`Edit.H264.HD` (H.264 HD video editing)</li>
<li>`Edit.H264.FHD` (H.264 FHD video editing)</li>
<li>`Edit.H264.2K` (H.264 2K video editing)</li>
<li>`Edit.H264.4K` (H.264 4K video editing)</li>
<li>`Edit.H265.SD` (H.265 SD video editing)</li>
<li>`Edit.H265.HD` (H.265 HD video editing)</li>
<li>`Edit.H265.FHD` (H.265 FHD video editing)</li>
<li>`Edit.H265.2K` (H.265 2K video editing)</li>
<li>`Edit.H265.4K` (H.265 4K video editing)</li>
<li>`Edit.TESHD-10.H264.SD` (H.264 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.HD` (H.264 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.2K` (H.264 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.4K` (H.264 4K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.SD` (H.265 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.HD` (H.265 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.2K` (H.265 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.4K` (H.265 4K Top Speed Codec video editing)</li>
The watermark removal/remaster specifications. Valid values:
<li>`480P` (short side ≤ 480 px)</li>
<li>`720P` (short side ≤ 720 px)</li>
<li>`1080P` (short side ≤ 1080 px)</li>
<li>`2K` (short side ≤ 1440 px)</li>
<li>`4K` (short side ≤ 2160 px)</li>
<li>`8K` (short side ≤ 4320 px)</li>
<li>`audio`</li>
     */
    public $Details;

    /**
     * @param string $TaskType The task type.
<li>`Transcoding`: General transcoding</li>
<li>`Transcoding-TESHD`: Top Speed Codec transcoding</li>
<li>`Editing`: Video editing</li>
<li>`Editing-TESHD`: Top Speed Codec editing</li>
<li>`AdaptiveBitrateStreaming`: Adaptive bitrate streaming</li>
<li>ContentAudit: Content moderation</li>
<li>`ContentRecognition`: Content recognition</li>
<li>RemoveWatermark: Watermark removal</li>
<li>`ExtractTraceWatermark`: Digital watermark extraction</li>
<li>`AddTraceWatermark`: Digital watermarking</li>
<li>`RebuildMedia`: Remaster</li>
<li>`Transcode` Transcoding, including general transcoding, Top Speed Codec transcoding, and video editing. This value is not recommended.</li>
     * @param array $Summary Task statistics overview (usage unit: second).
     * @param array $Details The usage statistics for different task types.
Transcoding:
<li>`Remuxing`</li>
<li>`Audio` (audio transcoding)</li>
<li>`Standard.H264.SD`</li>
<li>`Standard.H264.HD`</li>
<li>`Standard.H264.FHD`</li>
<li>`Standard.H264.2K`</li>
<li>`Standard.H264.4K`</li>
<li>`Standard.H265.SD`</li>
<li>`Standard.H265.HD`</li>
<li>`Standard.H265.FHD`</li>
<li>`Standard.H265.2K`</li>
<li>`Standard.H265.4K`</li>
<li>`TESHD-10.H264.SD` (H.264 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.HD` (H.264 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.2K` (H.264 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H264.4K` (H.264 4K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.SD` (H.265 SD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.HD` (H.265 HD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.2K` (H.265 2K Top Speed Codec transcoding)</li>
<li>`TESHD-10.H265.4K` (H.265 4K Top Speed Codec transcoding)</li>
<li>`Edit.Audio`</li>
<li>`Edit.H264.SD` (H.264 SD video editing)</li>
<li>`Edit.H264.HD` (H.264 HD video editing)</li>
<li>`Edit.H264.FHD` (H.264 FHD video editing)</li>
<li>`Edit.H264.2K` (H.264 2K video editing)</li>
<li>`Edit.H264.4K` (H.264 4K video editing)</li>
<li>`Edit.H265.SD` (H.265 SD video editing)</li>
<li>`Edit.H265.HD` (H.265 HD video editing)</li>
<li>`Edit.H265.FHD` (H.265 FHD video editing)</li>
<li>`Edit.H265.2K` (H.265 2K video editing)</li>
<li>`Edit.H265.4K` (H.265 4K video editing)</li>
<li>`Edit.TESHD-10.H264.SD` (H.264 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.HD` (H.264 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.FHD` (H.264 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.2K` (H.264 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H264.4K` (H.264 4K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.SD` (H.265 SD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.HD` (H.265 HD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.FHD` (H.265 FHD Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.2K` (H.265 2K Top Speed Codec video editing)</li>
<li>`Edit.TESHD-10.H265.4K` (H.265 4K Top Speed Codec video editing)</li>
The watermark removal/remaster specifications. Valid values:
<li>`480P` (short side ≤ 480 px)</li>
<li>`720P` (short side ≤ 720 px)</li>
<li>`1080P` (short side ≤ 1080 px)</li>
<li>`2K` (short side ≤ 1440 px)</li>
<li>`4K` (short side ≤ 2160 px)</li>
<li>`8K` (short side ≤ 4320 px)</li>
<li>`audio`</li>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = [];
            foreach ($param["Summary"] as $key => $value){
                $obj = new TaskStatDataItem();
                $obj->deserialize($value);
                array_push($this->Summary, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new SpecificationDataItem();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
