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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task query result type
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Transcode: Transcode</li>
<li>AnimatedGraphics: Animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Transcode: Transcode</li>
<li>AnimatedGraphics: Animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain 
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set 
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain 
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set 
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain 
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set 
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain 
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set 
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain 
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set 
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain 
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set 
 */
class MediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Transcode: Transcode</li>
<li>AnimatedGraphics: Animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
     */
    public $Type;

    /**
     * @var MediaProcessTaskTranscodeResult 
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult 
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult 
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult 
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult 
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult 
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Transcode: Transcode</li>
<li>AnimatedGraphics: Animated image</li>
<li>SnapshotByTimeOffset: time point screenshot.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>ImageSprites: sprite sheet</li>
<li>CoverBySnapshot: screencapturing for cover image.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
     * @param MediaProcessTaskTranscodeResult $TranscodeTask 
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask 
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask 
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask 
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask 
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask 
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

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new MediaProcessTaskAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }
    }
}
