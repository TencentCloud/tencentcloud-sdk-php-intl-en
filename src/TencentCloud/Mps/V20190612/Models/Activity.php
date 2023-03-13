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
 * @method string getActivityType() Obtain The subtask type.
<li>`input`: The start.</li>
<li>`output`: The end.</li>
<li>`action-trans`: Transcoding.</li>
<li>`action-samplesnapshot`: Sampled screencapturing.</li>
<li>`action-AIAnalysis`: Content analysis.</li>
<li>`action-AIRecognition`: Content recognition.</li>
<li>`action-aiReview`: Content moderation.</li>
<li>`action-animated-graphics`: Animated screenshot generation.</li>
<li>`action-image-sprite`: Image sprite generation.</li>
<li>`action-snapshotByTimeOffset`: Time point screencapturing.</li>
<li>`action-adaptive-substream`: Adaptive bitrate streaming.</li>
 * @method void setActivityType(string $ActivityType) Set The subtask type.
<li>`input`: The start.</li>
<li>`output`: The end.</li>
<li>`action-trans`: Transcoding.</li>
<li>`action-samplesnapshot`: Sampled screencapturing.</li>
<li>`action-AIAnalysis`: Content analysis.</li>
<li>`action-AIRecognition`: Content recognition.</li>
<li>`action-aiReview`: Content moderation.</li>
<li>`action-animated-graphics`: Animated screenshot generation.</li>
<li>`action-image-sprite`: Image sprite generation.</li>
<li>`action-snapshotByTimeOffset`: Time point screencapturing.</li>
<li>`action-adaptive-substream`: Adaptive bitrate streaming.</li>
 * @method array getReardriveIndex() Obtain The indexes of the subsequent actions.
 * @method void setReardriveIndex(array $ReardriveIndex) Set The indexes of the subsequent actions.
 * @method ActivityPara getActivityPara() Obtain The parameters of a subtask.
 * @method void setActivityPara(ActivityPara $ActivityPara) Set The parameters of a subtask.
 */
class Activity extends AbstractModel
{
    /**
     * @var string The subtask type.
<li>`input`: The start.</li>
<li>`output`: The end.</li>
<li>`action-trans`: Transcoding.</li>
<li>`action-samplesnapshot`: Sampled screencapturing.</li>
<li>`action-AIAnalysis`: Content analysis.</li>
<li>`action-AIRecognition`: Content recognition.</li>
<li>`action-aiReview`: Content moderation.</li>
<li>`action-animated-graphics`: Animated screenshot generation.</li>
<li>`action-image-sprite`: Image sprite generation.</li>
<li>`action-snapshotByTimeOffset`: Time point screencapturing.</li>
<li>`action-adaptive-substream`: Adaptive bitrate streaming.</li>
     */
    public $ActivityType;

    /**
     * @var array The indexes of the subsequent actions.
     */
    public $ReardriveIndex;

    /**
     * @var ActivityPara The parameters of a subtask.
     */
    public $ActivityPara;

    /**
     * @param string $ActivityType The subtask type.
<li>`input`: The start.</li>
<li>`output`: The end.</li>
<li>`action-trans`: Transcoding.</li>
<li>`action-samplesnapshot`: Sampled screencapturing.</li>
<li>`action-AIAnalysis`: Content analysis.</li>
<li>`action-AIRecognition`: Content recognition.</li>
<li>`action-aiReview`: Content moderation.</li>
<li>`action-animated-graphics`: Animated screenshot generation.</li>
<li>`action-image-sprite`: Image sprite generation.</li>
<li>`action-snapshotByTimeOffset`: Time point screencapturing.</li>
<li>`action-adaptive-substream`: Adaptive bitrate streaming.</li>
     * @param array $ReardriveIndex The indexes of the subsequent actions.
     * @param ActivityPara $ActivityPara The parameters of a subtask.
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
