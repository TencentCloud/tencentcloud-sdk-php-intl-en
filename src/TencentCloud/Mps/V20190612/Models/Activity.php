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
 * A subtask of a scheme.
 *
 * @method string getActivityType() Obtain Atomic task type.
<li>input: start node</li>
<li>output: end node</li>
<li>action-trans: transcoding</li>
<li>action-samplesnapshot: sampled screenshot</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: conversion to GIF</li>
<li>action-image-sprite: image sprite</li>
<li>action-snapshotByTimeOffset: time point screenshot</li>
<li>action-adaptive-substream: adaptive bitrate stream</li>
<li>action-AIQualityControl: media quality inspection</li>
<li>action-SmartSubtitles: smart subtitle</li>



Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setActivityType(string $ActivityType) Set Atomic task type.
<li>input: start node</li>
<li>output: end node</li>
<li>action-trans: transcoding</li>
<li>action-samplesnapshot: sampled screenshot</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: conversion to GIF</li>
<li>action-image-sprite: image sprite</li>
<li>action-snapshotByTimeOffset: time point screenshot</li>
<li>action-adaptive-substream: adaptive bitrate stream</li>
<li>action-AIQualityControl: media quality inspection</li>
<li>action-SmartSubtitles: smart subtitle</li>



Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getReardriveIndex() Obtain The indexes of the subsequent actions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReardriveIndex(array $ReardriveIndex) Set The indexes of the subsequent actions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ActivityPara getActivityPara() Obtain The parameters of a subtask.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActivityPara(ActivityPara $ActivityPara) Set The parameters of a subtask.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Activity extends AbstractModel
{
    /**
     * @var string Atomic task type.
<li>input: start node</li>
<li>output: end node</li>
<li>action-trans: transcoding</li>
<li>action-samplesnapshot: sampled screenshot</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: conversion to GIF</li>
<li>action-image-sprite: image sprite</li>
<li>action-snapshotByTimeOffset: time point screenshot</li>
<li>action-adaptive-substream: adaptive bitrate stream</li>
<li>action-AIQualityControl: media quality inspection</li>
<li>action-SmartSubtitles: smart subtitle</li>



Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ActivityType;

    /**
     * @var array The indexes of the subsequent actions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReardriveIndex;

    /**
     * @var ActivityPara The parameters of a subtask.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActivityPara;

    /**
     * @param string $ActivityType Atomic task type.
<li>input: start node</li>
<li>output: end node</li>
<li>action-trans: transcoding</li>
<li>action-samplesnapshot: sampled screenshot</li>
<li>action-AIAnalysis: analysis</li>
<li>action-AIRecognition: recognition</li>
<li>action-aiReview: review</li>
<li>action-animated-graphics: conversion to GIF</li>
<li>action-image-sprite: image sprite</li>
<li>action-snapshotByTimeOffset: time point screenshot</li>
<li>action-adaptive-substream: adaptive bitrate stream</li>
<li>action-AIQualityControl: media quality inspection</li>
<li>action-SmartSubtitles: smart subtitle</li>



Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ReardriveIndex The indexes of the subsequent actions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ActivityPara $ActivityPara The parameters of a subtask.
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
