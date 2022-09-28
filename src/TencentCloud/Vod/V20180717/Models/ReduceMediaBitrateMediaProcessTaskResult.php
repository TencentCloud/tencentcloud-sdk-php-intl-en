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
 * The result of a bitrate reduction task.
 *
 * @method string getType() Obtain The task type. Valid values:
<li>Transcode</li>
<li>AdaptiveDynamicStreaming</li>
 * @method void setType(string $Type) Set The task type. Valid values:
<li>Transcode</li>
<li>AdaptiveDynamicStreaming</li>
 * @method ReduceMediaBitrateTranscodeResult getTranscodeTask() Obtain The result of a transcoding task. This parameter is valid if `Type` is `Transcode`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeTask(ReduceMediaBitrateTranscodeResult $TranscodeTask) Set The result of a transcoding task. This parameter is valid if `Type` is `Transcode`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReduceMediaBitrateAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain The result of an adaptive bitrate task. This parameter is valid if `Type` is `AdaptiveDynamicStreaming`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdaptiveDynamicStreamingTask(ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set The result of an adaptive bitrate task. This parameter is valid if `Type` is `AdaptiveDynamicStreaming`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReduceMediaBitrateMediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string The task type. Valid values:
<li>Transcode</li>
<li>AdaptiveDynamicStreaming</li>
     */
    public $Type;

    /**
     * @var ReduceMediaBitrateTranscodeResult The result of a transcoding task. This parameter is valid if `Type` is `Transcode`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var ReduceMediaBitrateAdaptiveDynamicStreamingResult The result of an adaptive bitrate task. This parameter is valid if `Type` is `AdaptiveDynamicStreaming`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type The task type. Valid values:
<li>Transcode</li>
<li>AdaptiveDynamicStreaming</li>
     * @param ReduceMediaBitrateTranscodeResult $TranscodeTask The result of a transcoding task. This parameter is valid if `Type` is `Transcode`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask The result of an adaptive bitrate task. This parameter is valid if `Type` is `AdaptiveDynamicStreaming`.
Note: This field may return null, indicating that no valid values can be obtained.
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
