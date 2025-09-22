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
 * The execution result of a scheme.
 *
 * @method string getActivityType() Obtain Atomic task type.
<Li>Transcode: transcoding.</li>.
<Li>SampleSnapshot: specifies sampled screenshot taking.</li>.
<Li>AnimatedGraphics: specifies the animated image.</li>.
<Li>SnapshotByTimeOffset: specifies time point screenshot taking.</li>.
<Li>ImageSprites: specifies the sprite sheet.</li>.
<Li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>.
<Li>AiContentReview: specifies content moderation.</li>.
<Li>AIRecognition: intelligent identification.</li>.
<Li>AIAnalysis: specifies ai analysis.</li>.
<li>AiQualityControl: media quality inspection</li>

<Li>SmartSubtitles: smart subtitle</li>

<Li>SmartErase: smart erasure.</li>.
 * @method void setActivityType(string $ActivityType) Set Atomic task type.
<Li>Transcode: transcoding.</li>.
<Li>SampleSnapshot: specifies sampled screenshot taking.</li>.
<Li>AnimatedGraphics: specifies the animated image.</li>.
<Li>SnapshotByTimeOffset: specifies time point screenshot taking.</li>.
<Li>ImageSprites: specifies the sprite sheet.</li>.
<Li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>.
<Li>AiContentReview: specifies content moderation.</li>.
<Li>AIRecognition: intelligent identification.</li>.
<Li>AIAnalysis: specifies ai analysis.</li>.
<li>AiQualityControl: media quality inspection</li>

<Li>SmartSubtitles: smart subtitle</li>

<Li>SmartErase: smart erasure.</li>.
 * @method ActivityResItem getActivityResItem() Obtain The execution results of the subtasks of the scheme.
 * @method void setActivityResItem(ActivityResItem $ActivityResItem) Set The execution results of the subtasks of the scheme.
 */
class ActivityResult extends AbstractModel
{
    /**
     * @var string Atomic task type.
<Li>Transcode: transcoding.</li>.
<Li>SampleSnapshot: specifies sampled screenshot taking.</li>.
<Li>AnimatedGraphics: specifies the animated image.</li>.
<Li>SnapshotByTimeOffset: specifies time point screenshot taking.</li>.
<Li>ImageSprites: specifies the sprite sheet.</li>.
<Li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>.
<Li>AiContentReview: specifies content moderation.</li>.
<Li>AIRecognition: intelligent identification.</li>.
<Li>AIAnalysis: specifies ai analysis.</li>.
<li>AiQualityControl: media quality inspection</li>

<Li>SmartSubtitles: smart subtitle</li>

<Li>SmartErase: smart erasure.</li>.
     */
    public $ActivityType;

    /**
     * @var ActivityResItem The execution results of the subtasks of the scheme.
     */
    public $ActivityResItem;

    /**
     * @param string $ActivityType Atomic task type.
<Li>Transcode: transcoding.</li>.
<Li>SampleSnapshot: specifies sampled screenshot taking.</li>.
<Li>AnimatedGraphics: specifies the animated image.</li>.
<Li>SnapshotByTimeOffset: specifies time point screenshot taking.</li>.
<Li>ImageSprites: specifies the sprite sheet.</li>.
<Li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>.
<Li>AiContentReview: specifies content moderation.</li>.
<Li>AIRecognition: intelligent identification.</li>.
<Li>AIAnalysis: specifies ai analysis.</li>.
<li>AiQualityControl: media quality inspection</li>

<Li>SmartSubtitles: smart subtitle</li>

<Li>SmartErase: smart erasure.</li>.
     * @param ActivityResItem $ActivityResItem The execution results of the subtasks of the scheme.
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
        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("ActivityResItem",$param) and $param["ActivityResItem"] !== null) {
            $this->ActivityResItem = new ActivityResItem();
            $this->ActivityResItem->deserialize($param["ActivityResItem"]);
        }
    }
}
