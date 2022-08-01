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
 * @method string getActivityType() Obtain The type of the scheme’s subtask.
<li>Transcode: Transcoding</li>
<li>SampleSnapshot: Sampled screenshot</li>
<li>AnimatedGraphics: Animated image generating</li>
<li>SnapshotByTimeOffset: Time point screenshot</li>
<li>ImageSprites: Image sprite generating</li>
<li>AdaptiveDynamicStreaming: Adaptive bitrate streaming</li>
<li>AiContentReview: Content moderation</li>
<li>AIRecognition: Content recognition</li>
<li>AIAnalysis: Content analysis</li>
 * @method void setActivityType(string $ActivityType) Set The type of the scheme’s subtask.
<li>Transcode: Transcoding</li>
<li>SampleSnapshot: Sampled screenshot</li>
<li>AnimatedGraphics: Animated image generating</li>
<li>SnapshotByTimeOffset: Time point screenshot</li>
<li>ImageSprites: Image sprite generating</li>
<li>AdaptiveDynamicStreaming: Adaptive bitrate streaming</li>
<li>AiContentReview: Content moderation</li>
<li>AIRecognition: Content recognition</li>
<li>AIAnalysis: Content analysis</li>
 * @method ActivityResItem getActivityResItem() Obtain The execution results of the subtasks of the scheme.
 * @method void setActivityResItem(ActivityResItem $ActivityResItem) Set The execution results of the subtasks of the scheme.
 */
class ActivityResult extends AbstractModel
{
    /**
     * @var string The type of the scheme’s subtask.
<li>Transcode: Transcoding</li>
<li>SampleSnapshot: Sampled screenshot</li>
<li>AnimatedGraphics: Animated image generating</li>
<li>SnapshotByTimeOffset: Time point screenshot</li>
<li>ImageSprites: Image sprite generating</li>
<li>AdaptiveDynamicStreaming: Adaptive bitrate streaming</li>
<li>AiContentReview: Content moderation</li>
<li>AIRecognition: Content recognition</li>
<li>AIAnalysis: Content analysis</li>
     */
    public $ActivityType;

    /**
     * @var ActivityResItem The execution results of the subtasks of the scheme.
     */
    public $ActivityResItem;

    /**
     * @param string $ActivityType The type of the scheme’s subtask.
<li>Transcode: Transcoding</li>
<li>SampleSnapshot: Sampled screenshot</li>
<li>AnimatedGraphics: Animated image generating</li>
<li>SnapshotByTimeOffset: Time point screenshot</li>
<li>ImageSprites: Image sprite generating</li>
<li>AdaptiveDynamicStreaming: Adaptive bitrate streaming</li>
<li>AiContentReview: Content moderation</li>
<li>AIRecognition: Content recognition</li>
<li>AIAnalysis: Content analysis</li>
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
