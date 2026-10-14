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
 * Output of the orchestration task
 *
 * @method string getActivityType() Obtain <p>Atomic task type.</p><li>Transcode: Transcoding.</li><li>SampleSnapshot: Sampled screenshot.</li><li>AnimatedGraphics: Animated image.</li><li>SnapshotByTimeOffset: Time point screenshot.</li><li>ImageSprites: Sprite sheet.</li><li>AdaptiveDynamicStreaming: Adaptive bitrate stream.</li><li>AiContentReview: Content review.</li><li>AIRecognition: Intelligent recognition.</li><li>AIAnalysis: Intelligent analysis.</li><li>AiQualityControl: Media quality inspection.</li><li>SmartSubtitles: Smart subtitle.</li><li>SmartErase: Smart erasing.</li><li>Dubbing: AI dubbing.</li>
 * @method void setActivityType(string $ActivityType) Set <p>Atomic task type.</p><li>Transcode: Transcoding.</li><li>SampleSnapshot: Sampled screenshot.</li><li>AnimatedGraphics: Animated image.</li><li>SnapshotByTimeOffset: Time point screenshot.</li><li>ImageSprites: Sprite sheet.</li><li>AdaptiveDynamicStreaming: Adaptive bitrate stream.</li><li>AiContentReview: Content review.</li><li>AIRecognition: Intelligent recognition.</li><li>AIAnalysis: Intelligent analysis.</li><li>AiQualityControl: Media quality inspection.</li><li>SmartSubtitles: Smart subtitle.</li><li>SmartErase: Smart erasing.</li><li>Dubbing: AI dubbing.</li>
 * @method ActivityResItem getActivityResItem() Obtain <p>Output of the atomic task.</p>
 * @method void setActivityResItem(ActivityResItem $ActivityResItem) Set <p>Output of the atomic task.</p>
 */
class ActivityResult extends AbstractModel
{
    /**
     * @var string <p>Atomic task type.</p><li>Transcode: Transcoding.</li><li>SampleSnapshot: Sampled screenshot.</li><li>AnimatedGraphics: Animated image.</li><li>SnapshotByTimeOffset: Time point screenshot.</li><li>ImageSprites: Sprite sheet.</li><li>AdaptiveDynamicStreaming: Adaptive bitrate stream.</li><li>AiContentReview: Content review.</li><li>AIRecognition: Intelligent recognition.</li><li>AIAnalysis: Intelligent analysis.</li><li>AiQualityControl: Media quality inspection.</li><li>SmartSubtitles: Smart subtitle.</li><li>SmartErase: Smart erasing.</li><li>Dubbing: AI dubbing.</li>
     */
    public $ActivityType;

    /**
     * @var ActivityResItem <p>Output of the atomic task.</p>
     */
    public $ActivityResItem;

    /**
     * @param string $ActivityType <p>Atomic task type.</p><li>Transcode: Transcoding.</li><li>SampleSnapshot: Sampled screenshot.</li><li>AnimatedGraphics: Animated image.</li><li>SnapshotByTimeOffset: Time point screenshot.</li><li>ImageSprites: Sprite sheet.</li><li>AdaptiveDynamicStreaming: Adaptive bitrate stream.</li><li>AiContentReview: Content review.</li><li>AIRecognition: Intelligent recognition.</li><li>AIAnalysis: Intelligent analysis.</li><li>AiQualityControl: Media quality inspection.</li><li>SmartSubtitles: Smart subtitle.</li><li>SmartErase: Smart erasing.</li><li>Dubbing: AI dubbing.</li>
     * @param ActivityResItem $ActivityResItem <p>Output of the atomic task.</p>
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
