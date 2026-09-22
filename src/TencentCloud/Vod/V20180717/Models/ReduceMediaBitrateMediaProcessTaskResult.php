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
 * Bitrate reduction task result
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Transcode: transcode</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Transcode: transcode</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
 * @method ReduceMediaBitrateTranscodeResult getTranscodeTask() Obtain Query result of the video transcoding task in the bitrate reduction task. Valid when the task type is `Transcode`.
 * @method void setTranscodeTask(ReduceMediaBitrateTranscodeResult $TranscodeTask) Set Query result of the video transcoding task in the bitrate reduction task. Valid when the task type is `Transcode`.
 * @method ReduceMediaBitrateAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain Query result of the video to adaptive streaming task in a bitrate reduction task. Valid when the task type is `AdaptiveDynamicStreaming`.
 * @method void setAdaptiveDynamicStreamingTask(ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set Query result of the video to adaptive streaming task in a bitrate reduction task. Valid when the task type is `AdaptiveDynamicStreaming`.
 */
class ReduceMediaBitrateMediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Transcode: transcode</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     */
    public $Type;

    /**
     * @var ReduceMediaBitrateTranscodeResult Query result of the video transcoding task in the bitrate reduction task. Valid when the task type is `Transcode`.
     */
    public $TranscodeTask;

    /**
     * @var ReduceMediaBitrateAdaptiveDynamicStreamingResult Query result of the video to adaptive streaming task in a bitrate reduction task. Valid when the task type is `AdaptiveDynamicStreaming`.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Transcode: transcode</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming</li>
     * @param ReduceMediaBitrateTranscodeResult $TranscodeTask Query result of the video transcoding task in the bitrate reduction task. Valid when the task type is `Transcode`.
     * @param ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask Query result of the video to adaptive streaming task in a bitrate reduction task. Valid when the task type is `AdaptiveDynamicStreaming`.
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
            $this->TranscodeTask = new ReduceMediaBitrateTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new ReduceMediaBitrateAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }
    }
}
