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
 * Orchestrate atomic tasks
 *
 * @method string getActivityType() Obtain Atomic task type.
<li>input: start node.</li>
<li>output: termination node.</li>
<li>action-trans: transcoding.</li>
<li>action-samplesnapshot: sampled screenshot taking.</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition.</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: animated image</li>
<li>action-image-sprite: sprite sheet</li>
<li>action-snapshotByTimeOffset: time point screenshot taking</li>
<li>action-adaptive-substream: adaptive bitrate streaming.</li>
<li>action-AIQualityControl: media quality inspection.</li>
<li>action-SmartSubtitles: smart subtitle</li>
<li>action-exec-rules: judgment rule</li>
<li>action-SmartErase: intelligent removal.</li>



 * @method void setActivityType(string $ActivityType) Set Atomic task type.
<li>input: start node.</li>
<li>output: termination node.</li>
<li>action-trans: transcoding.</li>
<li>action-samplesnapshot: sampled screenshot taking.</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition.</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: animated image</li>
<li>action-image-sprite: sprite sheet</li>
<li>action-snapshotByTimeOffset: time point screenshot taking</li>
<li>action-adaptive-substream: adaptive bitrate streaming.</li>
<li>action-AIQualityControl: media quality inspection.</li>
<li>action-SmartSubtitles: smart subtitle</li>
<li>action-exec-rules: judgment rule</li>
<li>action-SmartErase: intelligent removal.</li>



 * @method array getReardriveIndex() Obtain Rear drive node index array
 * @method void setReardriveIndex(array $ReardriveIndex) Set Rear drive node index array
 * @method ActivityPara getActivityPara() Obtain 
 * @method void setActivityPara(ActivityPara $ActivityPara) Set 
 */
class Activity extends AbstractModel
{
    /**
     * @var string Atomic task type.
<li>input: start node.</li>
<li>output: termination node.</li>
<li>action-trans: transcoding.</li>
<li>action-samplesnapshot: sampled screenshot taking.</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition.</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: animated image</li>
<li>action-image-sprite: sprite sheet</li>
<li>action-snapshotByTimeOffset: time point screenshot taking</li>
<li>action-adaptive-substream: adaptive bitrate streaming.</li>
<li>action-AIQualityControl: media quality inspection.</li>
<li>action-SmartSubtitles: smart subtitle</li>
<li>action-exec-rules: judgment rule</li>
<li>action-SmartErase: intelligent removal.</li>



     */
    public $ActivityType;

    /**
     * @var array Rear drive node index array
     */
    public $ReardriveIndex;

    /**
     * @var ActivityPara 
     */
    public $ActivityPara;

    /**
     * @param string $ActivityType Atomic task type.
<li>input: start node.</li>
<li>output: termination node.</li>
<li>action-trans: transcoding.</li>
<li>action-samplesnapshot: sampled screenshot taking.</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition.</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: animated image</li>
<li>action-image-sprite: sprite sheet</li>
<li>action-snapshotByTimeOffset: time point screenshot taking</li>
<li>action-adaptive-substream: adaptive bitrate streaming.</li>
<li>action-AIQualityControl: media quality inspection.</li>
<li>action-SmartSubtitles: smart subtitle</li>
<li>action-exec-rules: judgment rule</li>
<li>action-SmartErase: intelligent removal.</li>



     * @param array $ReardriveIndex Rear drive node index array
     * @param ActivityPara $ActivityPara 
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

        if (array_key_exists("ReardriveIndex",$param) and $param["ReardriveIndex"] !== null) {
            $this->ReardriveIndex = $param["ReardriveIndex"];
        }

        if (array_key_exists("ActivityPara",$param) and $param["ActivityPara"] !== null) {
            $this->ActivityPara = new ActivityPara();
            $this->ActivityPara->deserialize($param["ActivityPara"]);
        }
    }
}
