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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The execution result of a scheme.
 *
 * @method string getActivityType() Obtain Atomic task type.
<li>Transcode: transcoding.</li>
<li>SampleSnapshot: sampled screenshot taking.</li>
<li>AnimatedGraphics: animated image generating.</li>
<li>SnapshotByTimeOffset: time point screenshot taking.</li>
<li>ImageSprites: sprite image generating.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
<li>AiContentReview: content moderation.</li>
<li>AIRecognition: intelligent identification.</li>
<li>AIAnalysis: intelligent analysis.</li>

<li>AiQualityControl: media quality inspection.</li>
 * @method void setActivityType(string $ActivityType) Set Atomic task type.
<li>Transcode: transcoding.</li>
<li>SampleSnapshot: sampled screenshot taking.</li>
<li>AnimatedGraphics: animated image generating.</li>
<li>SnapshotByTimeOffset: time point screenshot taking.</li>
<li>ImageSprites: sprite image generating.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
<li>AiContentReview: content moderation.</li>
<li>AIRecognition: intelligent identification.</li>
<li>AIAnalysis: intelligent analysis.</li>

<li>AiQualityControl: media quality inspection.</li>
 * @method ActivityResItem getActivityResItem() Obtain The execution results of the subtasks of the scheme.
 * @method void setActivityResItem(ActivityResItem $ActivityResItem) Set The execution results of the subtasks of the scheme.
 */
class ActivityResult extends AbstractModel
{
    /**
     * @var string Atomic task type.
<li>Transcode: transcoding.</li>
<li>SampleSnapshot: sampled screenshot taking.</li>
<li>AnimatedGraphics: animated image generating.</li>
<li>SnapshotByTimeOffset: time point screenshot taking.</li>
<li>ImageSprites: sprite image generating.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
<li>AiContentReview: content moderation.</li>
<li>AIRecognition: intelligent identification.</li>
<li>AIAnalysis: intelligent analysis.</li>

<li>AiQualityControl: media quality inspection.</li>
     */
    public $ActivityType;

    /**
     * @var ActivityResItem The execution results of the subtasks of the scheme.
     */
    public $ActivityResItem;

    /**
     * @param string $ActivityType Atomic task type.
<li>Transcode: transcoding.</li>
<li>SampleSnapshot: sampled screenshot taking.</li>
<li>AnimatedGraphics: animated image generating.</li>
<li>SnapshotByTimeOffset: time point screenshot taking.</li>
<li>ImageSprites: sprite image generating.</li>
<li>AdaptiveDynamicStreaming: adaptive bitrate streaming.</li>
<li>AiContentReview: content moderation.</li>
<li>AIRecognition: intelligent identification.</li>
<li>AIAnalysis: intelligent analysis.</li>

<li>AiQualityControl: media quality inspection.</li>
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
