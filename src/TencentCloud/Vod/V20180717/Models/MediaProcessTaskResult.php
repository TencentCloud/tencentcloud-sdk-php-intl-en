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
 * Query result type of task
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Transcode: transcoding</li>
<li>AnimatedGraphics: animated image generating</li>
<li>SnapshotByTimeOffset: time point screencapturing</li>
<li>SampleSnapshot: sampled screencapturing</li>
<li>ImageSprites: image sprite generating</li>
<li>CoverBySnapshot: Screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Transcode: transcoding</li>
<li>AnimatedGraphics: animated image generating</li>
<li>SnapshotByTimeOffset: time point screencapturing</li>
<li>SampleSnapshot: sampled screencapturing</li>
<li>ImageSprites: image sprite generating</li>
<li>CoverBySnapshot: Screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain Query result of transcoding task, which is valid when task type is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set Query result of transcoding task, which is valid when task type is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain Query result of animated image generating task, which is valid when task type is `AnimatedGraphics`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set Query result of animated image generating task, which is valid when task type is `AnimatedGraphics`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain Query result of time point screencapturing task, which is valid when task type is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set Query result of time point screencapturing task, which is valid when task type is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain Query result of sampled screencapturing task, which is valid when task type is `SampleSnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set Query result of sampled screencapturing task, which is valid when task type is `SampleSnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain Query result of image sprite generating task, which is valid when task type is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set Query result of image sprite generating task, which is valid when task type is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskCoverBySnapshotResult getCoverBySnapshotTask() Obtain Query result of cover generating task, which is valid if task type is `CoverBySnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverBySnapshotTask(MediaProcessTaskCoverBySnapshotResult $CoverBySnapshotTask) Set Query result of cover generating task, which is valid if task type is `CoverBySnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain Query result of adaptive bitrate streaming, which is valid if task type is `AdaptiveDynamicStreaming`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set Query result of adaptive bitrate streaming, which is valid if task type is `AdaptiveDynamicStreaming`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Transcode: transcoding</li>
<li>AnimatedGraphics: animated image generating</li>
<li>SnapshotByTimeOffset: time point screencapturing</li>
<li>SampleSnapshot: sampled screencapturing</li>
<li>ImageSprites: image sprite generating</li>
<li>CoverBySnapshot: Screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     */
    public $Type;

    /**
     * @var MediaProcessTaskTranscodeResult Query result of transcoding task, which is valid when task type is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult Query result of animated image generating task, which is valid when task type is `AnimatedGraphics`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult Query result of time point screencapturing task, which is valid when task type is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult Query result of sampled screencapturing task, which is valid when task type is `SampleSnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult Query result of image sprite generating task, which is valid when task type is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskCoverBySnapshotResult Query result of cover generating task, which is valid if task type is `CoverBySnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverBySnapshotTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult Query result of adaptive bitrate streaming, which is valid if task type is `AdaptiveDynamicStreaming`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Transcode: transcoding</li>
<li>AnimatedGraphics: animated image generating</li>
<li>SnapshotByTimeOffset: time point screencapturing</li>
<li>SampleSnapshot: sampled screencapturing</li>
<li>ImageSprites: image sprite generating</li>
<li>CoverBySnapshot: Screencapturing for cover image</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     * @param MediaProcessTaskTranscodeResult $TranscodeTask Query result of transcoding task, which is valid when task type is `Transcode`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask Query result of animated image generating task, which is valid when task type is `AnimatedGraphics`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask Query result of time point screencapturing task, which is valid when task type is `SnapshotByTimeOffset`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask Query result of sampled screencapturing task, which is valid when task type is `SampleSnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask Query result of image sprite generating task, which is valid when task type is `ImageSprite`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskCoverBySnapshotResult $CoverBySnapshotTask Query result of cover generating task, which is valid if task type is `CoverBySnapshot`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask Query result of adaptive bitrate streaming, which is valid if task type is `AdaptiveDynamicStreaming`.
Note: this field may return null, indicating that no valid values can be obtained.
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
