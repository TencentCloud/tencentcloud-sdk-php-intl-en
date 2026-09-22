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
 * Task query result type.
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Transcode: transcode</li>
<li>AnimatedGraphics: animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Transcode: transcode</li>
<li>AnimatedGraphics: animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain Query result of a video transcoding task. Valid when the task type is Transcode.
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set Query result of a video transcoding task. Valid when the task type is Transcode.
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain Query result of a video-to-GIF task. Valid when the task type is AnimatedGraphics.
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set Query result of a video-to-GIF task. Valid when the task type is AnimatedGraphics.
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain Query result of a video time point screenshot task. Valid when the task type is `SnapshotByTimeOffset`.
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set Query result of a video time point screenshot task. Valid when the task type is `SnapshotByTimeOffset`.
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain Query result of the video sampling screenshot task. Valid when the task type is `SampleSnapshot`.
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set Query result of the video sampling screenshot task. Valid when the task type is `SampleSnapshot`.
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain Query result of the image sprite task for a video. Valid when the task type is `ImageSprite`.
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set Query result of the image sprite task for a video. Valid when the task type is `ImageSprite`.
 * @method MediaProcessTaskCoverBySnapshotResult getCoverBySnapshotTask() Obtain Query result of the video screencapturing for cover image task. Valid when the task type is `CoverBySnapshot`.
 * @method void setCoverBySnapshotTask(MediaProcessTaskCoverBySnapshotResult $CoverBySnapshotTask) Set Query result of the video screencapturing for cover image task. Valid when the task type is `CoverBySnapshot`.
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain Query result of the video to adaptive streaming task. Valid when the task type is AdaptiveDynamicStreaming.
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set Query result of the video to adaptive streaming task. Valid when the task type is AdaptiveDynamicStreaming.
 */
class MediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Transcode: transcode</li>
<li>AnimatedGraphics: animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     */
    public $Type;

    /**
     * @var MediaProcessTaskTranscodeResult Query result of a video transcoding task. Valid when the task type is Transcode.
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult Query result of a video-to-GIF task. Valid when the task type is AnimatedGraphics.
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult Query result of a video time point screenshot task. Valid when the task type is `SnapshotByTimeOffset`.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult Query result of the video sampling screenshot task. Valid when the task type is `SampleSnapshot`.
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult Query result of the image sprite task for a video. Valid when the task type is `ImageSprite`.
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskCoverBySnapshotResult Query result of the video screencapturing for cover image task. Valid when the task type is `CoverBySnapshot`.
     */
    public $CoverBySnapshotTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult Query result of the video to adaptive streaming task. Valid when the task type is AdaptiveDynamicStreaming.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Transcode: transcode</li>
<li>AnimatedGraphics: animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     * @param MediaProcessTaskTranscodeResult $TranscodeTask Query result of a video transcoding task. Valid when the task type is Transcode.
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask Query result of a video-to-GIF task. Valid when the task type is AnimatedGraphics.
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask Query result of a video time point screenshot task. Valid when the task type is `SnapshotByTimeOffset`.
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask Query result of the video sampling screenshot task. Valid when the task type is `SampleSnapshot`.
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask Query result of the image sprite task for a video. Valid when the task type is `ImageSprite`.
     * @param MediaProcessTaskCoverBySnapshotResult $CoverBySnapshotTask Query result of the video screencapturing for cover image task. Valid when the task type is `CoverBySnapshot`.
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask Query result of the video to adaptive streaming task. Valid when the task type is AdaptiveDynamicStreaming.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new MediaProcessTaskTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new MediaProcessTaskAnimatedGraphicResult();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new MediaProcessTaskSnapshotByTimeOffsetResult();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("SampleSnapshotTask",$param) and $param["SampleSnapshotTask"] !== null) {
            $this->SampleSnapshotTask = new MediaProcessTaskSampleSnapshotResult();
            $this->SampleSnapshotTask->deserialize($param["SampleSnapshotTask"]);
        }

        if (array_key_exists("ImageSpriteTask",$param) and $param["ImageSpriteTask"] !== null) {
            $this->ImageSpriteTask = new MediaProcessTaskImageSpriteResult();
            $this->ImageSpriteTask->deserialize($param["ImageSpriteTask"]);
        }

        if (array_key_exists("CoverBySnapshotTask",$param) and $param["CoverBySnapshotTask"] !== null) {
            $this->CoverBySnapshotTask = new MediaProcessTaskCoverBySnapshotResult();
            $this->CoverBySnapshotTask->deserialize($param["CoverBySnapshotTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new MediaProcessTaskAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }
    }
}
