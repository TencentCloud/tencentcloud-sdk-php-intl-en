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
 * Statistical data of video processing tasks.
 *
 * @method string getTaskType() Obtain Task type.
<li> Transcoding: standard transcoding.</li>
<li> Transcoding-TESHD: TSC transcoding.</li>
<li> Editing: video editing</li>
<li> Editing-TESHD: extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: adaptive bitrate streaming.</li>
<li> ContentAudit: content moderation.</li>
<li>ContentRecognition: content recognition.</li>
<li> RemoveWatermark: watermark removal</li>
<li> ExtractTraceWatermark: extract watermark.</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: audio and video quality revival</li>
<li> QualityInspect: audio and video quality inspection</li>
<li>Transcode: Transcoding, including standard transcoding, top speed Codec, and video editing (not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: real-time encryption</li>
 * @method void setTaskType(string $TaskType) Set Task type.
<li> Transcoding: standard transcoding.</li>
<li> Transcoding-TESHD: TSC transcoding.</li>
<li> Editing: video editing</li>
<li> Editing-TESHD: extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: adaptive bitrate streaming.</li>
<li> ContentAudit: content moderation.</li>
<li>ContentRecognition: content recognition.</li>
<li> RemoveWatermark: watermark removal</li>
<li> ExtractTraceWatermark: extract watermark.</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: audio and video quality revival</li>
<li> QualityInspect: audio and video quality inspection</li>
<li>Transcode: Transcoding, including standard transcoding, top speed Codec, and video editing (not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: real-time encryption</li>
 * @method array getSummary() Obtain Statistical data overview of the number of tasks. Amount unit: seconds.
 * @method void setSummary(array $Summary) Set Statistical data overview of the number of tasks. Amount unit: seconds.
 * @method array getDetails() Obtain Details of task statistics data for varying specifications.
Transcoding specification:
<li>Remuxing: transmuxing</li>
<li>Audio: audio transcoding.</li>
<li>Standard.H264.SD: H.264 encoding for SD transcoding</li>
<li>Standard.H264.HD: H.264 encoding for high-definition transcoding</li>
<li>Standard.H264.FHD: H.264 encoding for full high-definition transcoding</li>
<li>Standard.H264.2K: H.264 encoding 2K transcode.</li>
<li>Standard.H264.4K: H.264 encoding 4K transcode</li>
<li>Standard.H265.SD: H.265 encoding mode SD transcoding</li>
<li>Standard.H265.HD: H.265 encoding high-definition transcoding.</li>
<li>Standard.H265.FHD: H.265 encoding for full high-definition transcoding</li>
<li>Standard.H265.2K: H.265 encoding 2K transcode.</li>
<li>Standard.H265.4K: H.265 encoding 4K transcode</li>
<li>TESHD-10.H264.SD: H.264 encoding SD TSC transcoding</li>
<li>TESHD-10.H264.HD: H.264 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H264.FHD: H.264 full HD TSC transcoding</li>
<li>TESHD-10.H264.2K: H.264 encoding 2K TSC transcoding</li>
<li>TESHD-10.H264.4K: H.264 encoding 4K TSC transcoding</li>
<li>TESHD-10.H265.SD: H.265 encoding SD TSC transcoding</li>
<li>TESHD-10.H265.HD: H.265 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H265.FHD: H.265 encoding full HD TSC transcoding</li>
<li>TESHD-10.H265.2K: H.265 encoding 2K TSC transcoding</li>
<li>TESHD-10.H265.4K: H.265 encoding 4K TSC transcoding</li>
<li>Edit.Audio: audio editing</li>
<li>Edit.H264.SD: H.264 encoding for SD video editing</li>
<li>Edit.H264.HD: H.264 encoding for high-definition video editing</li>
<li>Edit.H264.FHD: Full HD video editing with H.264 encoding</li>
<li>Edit.H264.2K: H.264 encoding 2K video editing</li>
<li>Edit.H264.4K: H.264 encoding for 4K video editing</li>
<li>Edit.H265.SD: H.265 encoding SD video editing</li>
<li>Edit.H265.HD: H.265 encoding for high-definition video editing</li>
<li>Edit.H265.FHD: Full HD video editing with H.265 encoding</li>
<li>Edit.H265.2K: H.265 encoding 2K video editing</li>
<li>Edit.H265.4K: H.265 encoding 4K video editing</li>
<li>Edit.TESHD-10.H264.SD: H.264 encoding for SD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.HD: H.264 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.FHD: H.264 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.2K: H.264 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.4K: H.264 encoding 4K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.SD: H.265 encoding for standard definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.HD: H.265 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.FHD: H.265 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.2K: H.265 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.4K: H.265 encoding 4K extremely fast high-definition video editing</li>
Watermark removal and audio and video quality revival specifications:
<li>480P: short side ≤ 480px</li>
<li>720P: Short side ≤ 720px</li>
<li>1080P: Short side ≤ 1080px</li>
<li>2K: Short side ≤ 1440px</li>
<li>4K: short side ≤ 2160px</li>
<li>8K: short side ≤ 4320px</li>
<li>Audio: audio.</li>
Real-time transcoding specification:
<li>JITTranscoding.H264.SD: H.264 encoding standard definition JIT transcoding.</li>
<li>JITTranscoding.H264.HD: H.264 encoding high-definition JIT transcoding</li>
<li>JITTranscoding.H264.FHD: H.264 encoding full HD JIT transcoding</li>
<li>JITTranscoding.H264.2K: H.264 encoding 2K JIT transcoding</li>
<li>JITTranscoding.Audio: JIT audio transcoding</li>
<li>JITTranscoding.Copy: remux JIT transcoding</li>
Video screenshot specification:
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot</li>
<li>ImageSprite: sprite.</li>
 * @method void setDetails(array $Details) Set Details of task statistics data for varying specifications.
Transcoding specification:
<li>Remuxing: transmuxing</li>
<li>Audio: audio transcoding.</li>
<li>Standard.H264.SD: H.264 encoding for SD transcoding</li>
<li>Standard.H264.HD: H.264 encoding for high-definition transcoding</li>
<li>Standard.H264.FHD: H.264 encoding for full high-definition transcoding</li>
<li>Standard.H264.2K: H.264 encoding 2K transcode.</li>
<li>Standard.H264.4K: H.264 encoding 4K transcode</li>
<li>Standard.H265.SD: H.265 encoding mode SD transcoding</li>
<li>Standard.H265.HD: H.265 encoding high-definition transcoding.</li>
<li>Standard.H265.FHD: H.265 encoding for full high-definition transcoding</li>
<li>Standard.H265.2K: H.265 encoding 2K transcode.</li>
<li>Standard.H265.4K: H.265 encoding 4K transcode</li>
<li>TESHD-10.H264.SD: H.264 encoding SD TSC transcoding</li>
<li>TESHD-10.H264.HD: H.264 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H264.FHD: H.264 full HD TSC transcoding</li>
<li>TESHD-10.H264.2K: H.264 encoding 2K TSC transcoding</li>
<li>TESHD-10.H264.4K: H.264 encoding 4K TSC transcoding</li>
<li>TESHD-10.H265.SD: H.265 encoding SD TSC transcoding</li>
<li>TESHD-10.H265.HD: H.265 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H265.FHD: H.265 encoding full HD TSC transcoding</li>
<li>TESHD-10.H265.2K: H.265 encoding 2K TSC transcoding</li>
<li>TESHD-10.H265.4K: H.265 encoding 4K TSC transcoding</li>
<li>Edit.Audio: audio editing</li>
<li>Edit.H264.SD: H.264 encoding for SD video editing</li>
<li>Edit.H264.HD: H.264 encoding for high-definition video editing</li>
<li>Edit.H264.FHD: Full HD video editing with H.264 encoding</li>
<li>Edit.H264.2K: H.264 encoding 2K video editing</li>
<li>Edit.H264.4K: H.264 encoding for 4K video editing</li>
<li>Edit.H265.SD: H.265 encoding SD video editing</li>
<li>Edit.H265.HD: H.265 encoding for high-definition video editing</li>
<li>Edit.H265.FHD: Full HD video editing with H.265 encoding</li>
<li>Edit.H265.2K: H.265 encoding 2K video editing</li>
<li>Edit.H265.4K: H.265 encoding 4K video editing</li>
<li>Edit.TESHD-10.H264.SD: H.264 encoding for SD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.HD: H.264 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.FHD: H.264 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.2K: H.264 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.4K: H.264 encoding 4K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.SD: H.265 encoding for standard definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.HD: H.265 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.FHD: H.265 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.2K: H.265 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.4K: H.265 encoding 4K extremely fast high-definition video editing</li>
Watermark removal and audio and video quality revival specifications:
<li>480P: short side ≤ 480px</li>
<li>720P: Short side ≤ 720px</li>
<li>1080P: Short side ≤ 1080px</li>
<li>2K: Short side ≤ 1440px</li>
<li>4K: short side ≤ 2160px</li>
<li>8K: short side ≤ 4320px</li>
<li>Audio: audio.</li>
Real-time transcoding specification:
<li>JITTranscoding.H264.SD: H.264 encoding standard definition JIT transcoding.</li>
<li>JITTranscoding.H264.HD: H.264 encoding high-definition JIT transcoding</li>
<li>JITTranscoding.H264.FHD: H.264 encoding full HD JIT transcoding</li>
<li>JITTranscoding.H264.2K: H.264 encoding 2K JIT transcoding</li>
<li>JITTranscoding.Audio: JIT audio transcoding</li>
<li>JITTranscoding.Copy: remux JIT transcoding</li>
Video screenshot specification:
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot</li>
<li>ImageSprite: sprite.</li>
 */
class TaskStatData extends AbstractModel
{
    /**
     * @var string Task type.
<li> Transcoding: standard transcoding.</li>
<li> Transcoding-TESHD: TSC transcoding.</li>
<li> Editing: video editing</li>
<li> Editing-TESHD: extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: adaptive bitrate streaming.</li>
<li> ContentAudit: content moderation.</li>
<li>ContentRecognition: content recognition.</li>
<li> RemoveWatermark: watermark removal</li>
<li> ExtractTraceWatermark: extract watermark.</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: audio and video quality revival</li>
<li> QualityInspect: audio and video quality inspection</li>
<li>Transcode: Transcoding, including standard transcoding, top speed Codec, and video editing (not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: real-time encryption</li>
     */
    public $TaskType;

    /**
     * @var array Statistical data overview of the number of tasks. Amount unit: seconds.
     */
    public $Summary;

    /**
     * @var array Details of task statistics data for varying specifications.
Transcoding specification:
<li>Remuxing: transmuxing</li>
<li>Audio: audio transcoding.</li>
<li>Standard.H264.SD: H.264 encoding for SD transcoding</li>
<li>Standard.H264.HD: H.264 encoding for high-definition transcoding</li>
<li>Standard.H264.FHD: H.264 encoding for full high-definition transcoding</li>
<li>Standard.H264.2K: H.264 encoding 2K transcode.</li>
<li>Standard.H264.4K: H.264 encoding 4K transcode</li>
<li>Standard.H265.SD: H.265 encoding mode SD transcoding</li>
<li>Standard.H265.HD: H.265 encoding high-definition transcoding.</li>
<li>Standard.H265.FHD: H.265 encoding for full high-definition transcoding</li>
<li>Standard.H265.2K: H.265 encoding 2K transcode.</li>
<li>Standard.H265.4K: H.265 encoding 4K transcode</li>
<li>TESHD-10.H264.SD: H.264 encoding SD TSC transcoding</li>
<li>TESHD-10.H264.HD: H.264 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H264.FHD: H.264 full HD TSC transcoding</li>
<li>TESHD-10.H264.2K: H.264 encoding 2K TSC transcoding</li>
<li>TESHD-10.H264.4K: H.264 encoding 4K TSC transcoding</li>
<li>TESHD-10.H265.SD: H.265 encoding SD TSC transcoding</li>
<li>TESHD-10.H265.HD: H.265 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H265.FHD: H.265 encoding full HD TSC transcoding</li>
<li>TESHD-10.H265.2K: H.265 encoding 2K TSC transcoding</li>
<li>TESHD-10.H265.4K: H.265 encoding 4K TSC transcoding</li>
<li>Edit.Audio: audio editing</li>
<li>Edit.H264.SD: H.264 encoding for SD video editing</li>
<li>Edit.H264.HD: H.264 encoding for high-definition video editing</li>
<li>Edit.H264.FHD: Full HD video editing with H.264 encoding</li>
<li>Edit.H264.2K: H.264 encoding 2K video editing</li>
<li>Edit.H264.4K: H.264 encoding for 4K video editing</li>
<li>Edit.H265.SD: H.265 encoding SD video editing</li>
<li>Edit.H265.HD: H.265 encoding for high-definition video editing</li>
<li>Edit.H265.FHD: Full HD video editing with H.265 encoding</li>
<li>Edit.H265.2K: H.265 encoding 2K video editing</li>
<li>Edit.H265.4K: H.265 encoding 4K video editing</li>
<li>Edit.TESHD-10.H264.SD: H.264 encoding for SD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.HD: H.264 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.FHD: H.264 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.2K: H.264 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.4K: H.264 encoding 4K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.SD: H.265 encoding for standard definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.HD: H.265 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.FHD: H.265 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.2K: H.265 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.4K: H.265 encoding 4K extremely fast high-definition video editing</li>
Watermark removal and audio and video quality revival specifications:
<li>480P: short side ≤ 480px</li>
<li>720P: Short side ≤ 720px</li>
<li>1080P: Short side ≤ 1080px</li>
<li>2K: Short side ≤ 1440px</li>
<li>4K: short side ≤ 2160px</li>
<li>8K: short side ≤ 4320px</li>
<li>Audio: audio.</li>
Real-time transcoding specification:
<li>JITTranscoding.H264.SD: H.264 encoding standard definition JIT transcoding.</li>
<li>JITTranscoding.H264.HD: H.264 encoding high-definition JIT transcoding</li>
<li>JITTranscoding.H264.FHD: H.264 encoding full HD JIT transcoding</li>
<li>JITTranscoding.H264.2K: H.264 encoding 2K JIT transcoding</li>
<li>JITTranscoding.Audio: JIT audio transcoding</li>
<li>JITTranscoding.Copy: remux JIT transcoding</li>
Video screenshot specification:
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot</li>
<li>ImageSprite: sprite.</li>
     */
    public $Details;

    /**
     * @param string $TaskType Task type.
<li> Transcoding: standard transcoding.</li>
<li> Transcoding-TESHD: TSC transcoding.</li>
<li> Editing: video editing</li>
<li> Editing-TESHD: extremely fast high-definition video editing</li>
<li> AdaptiveBitrateStreaming: adaptive bitrate streaming.</li>
<li> ContentAudit: content moderation.</li>
<li>ContentRecognition: content recognition.</li>
<li> RemoveWatermark: watermark removal</li>
<li> ExtractTraceWatermark: extract watermark.</li>
<li> AddTraceWatermark: Add watermark</li>
<li> RebuildMedia: audio and video quality revival</li>
<li> QualityInspect: audio and video quality inspection</li>
<li>Transcode: Transcoding, including standard transcoding, top speed Codec, and video editing (not recommended)</li>
<li>VoiceTranslation: speech translation</li>
<li>JITTranscoding: JIT transcoding</li>
<li>VideoSnapshot: video screenshot.</li>
<li>JITEncryption: real-time encryption</li>
     * @param array $Summary Statistical data overview of the number of tasks. Amount unit: seconds.
     * @param array $Details Details of task statistics data for varying specifications.
Transcoding specification:
<li>Remuxing: transmuxing</li>
<li>Audio: audio transcoding.</li>
<li>Standard.H264.SD: H.264 encoding for SD transcoding</li>
<li>Standard.H264.HD: H.264 encoding for high-definition transcoding</li>
<li>Standard.H264.FHD: H.264 encoding for full high-definition transcoding</li>
<li>Standard.H264.2K: H.264 encoding 2K transcode.</li>
<li>Standard.H264.4K: H.264 encoding 4K transcode</li>
<li>Standard.H265.SD: H.265 encoding mode SD transcoding</li>
<li>Standard.H265.HD: H.265 encoding high-definition transcoding.</li>
<li>Standard.H265.FHD: H.265 encoding for full high-definition transcoding</li>
<li>Standard.H265.2K: H.265 encoding 2K transcode.</li>
<li>Standard.H265.4K: H.265 encoding 4K transcode</li>
<li>TESHD-10.H264.SD: H.264 encoding SD TSC transcoding</li>
<li>TESHD-10.H264.HD: H.264 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H264.FHD: H.264 full HD TSC transcoding</li>
<li>TESHD-10.H264.2K: H.264 encoding 2K TSC transcoding</li>
<li>TESHD-10.H264.4K: H.264 encoding 4K TSC transcoding</li>
<li>TESHD-10.H265.SD: H.265 encoding SD TSC transcoding</li>
<li>TESHD-10.H265.HD: H.265 encoding high-definition TSC transcoding</li>
<li>TESHD-10.H265.FHD: H.265 encoding full HD TSC transcoding</li>
<li>TESHD-10.H265.2K: H.265 encoding 2K TSC transcoding</li>
<li>TESHD-10.H265.4K: H.265 encoding 4K TSC transcoding</li>
<li>Edit.Audio: audio editing</li>
<li>Edit.H264.SD: H.264 encoding for SD video editing</li>
<li>Edit.H264.HD: H.264 encoding for high-definition video editing</li>
<li>Edit.H264.FHD: Full HD video editing with H.264 encoding</li>
<li>Edit.H264.2K: H.264 encoding 2K video editing</li>
<li>Edit.H264.4K: H.264 encoding for 4K video editing</li>
<li>Edit.H265.SD: H.265 encoding SD video editing</li>
<li>Edit.H265.HD: H.265 encoding for high-definition video editing</li>
<li>Edit.H265.FHD: Full HD video editing with H.265 encoding</li>
<li>Edit.H265.2K: H.265 encoding 2K video editing</li>
<li>Edit.H265.4K: H.265 encoding 4K video editing</li>
<li>Edit.TESHD-10.H264.SD: H.264 encoding for SD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.HD: H.264 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.FHD: H.264 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.2K: H.264 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H264.4K: H.264 encoding 4K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.SD: H.265 encoding for standard definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.HD: H.265 encoding high-definition extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.FHD: H.265 encoding full HD extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.2K: H.265 encoding 2K extremely fast high-definition video editing</li>
<li>Edit.TESHD-10.H265.4K: H.265 encoding 4K extremely fast high-definition video editing</li>
Watermark removal and audio and video quality revival specifications:
<li>480P: short side ≤ 480px</li>
<li>720P: Short side ≤ 720px</li>
<li>1080P: Short side ≤ 1080px</li>
<li>2K: Short side ≤ 1440px</li>
<li>4K: short side ≤ 2160px</li>
<li>8K: short side ≤ 4320px</li>
<li>Audio: audio.</li>
Real-time transcoding specification:
<li>JITTranscoding.H264.SD: H.264 encoding standard definition JIT transcoding.</li>
<li>JITTranscoding.H264.HD: H.264 encoding high-definition JIT transcoding</li>
<li>JITTranscoding.H264.FHD: H.264 encoding full HD JIT transcoding</li>
<li>JITTranscoding.H264.2K: H.264 encoding 2K JIT transcoding</li>
<li>JITTranscoding.Audio: JIT audio transcoding</li>
<li>JITTranscoding.Copy: remux JIT transcoding</li>
Video screenshot specification:
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot</li>
<li>ImageSprite: sprite.</li>
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
