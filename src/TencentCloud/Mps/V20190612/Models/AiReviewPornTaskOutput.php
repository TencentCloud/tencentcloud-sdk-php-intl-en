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
 * Porn information detection result
 *
 * @method float getConfidence() Obtain Score of the detected porn information in video from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Score of the detected porn information in video from 0 to 100.
 * @method string getSuggestion() Obtain Suggestion for the detected porn information. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Suggestion for the detected porn information. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getLabel() Obtain Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
 * @method void setLabel(string $Label) Set Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
 * @method array getSegmentSet() Obtain List of video segments that contain the detected porn information.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments that contain the detected porn information.
 */
class AiReviewPornTaskOutput extends AbstractModel
{
    /**
     * @var float Score of the detected porn information in video from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Suggestion for the detected porn information. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
     */
    public $Label;

    /**
     * @var array List of video segments that contain the detected porn information.
     */
    public $SegmentSet;

    /**
     * @param float $Confidence Score of the detected porn information in video from 0 to 100.
     * @param string $Suggestion Suggestion for the detected porn information. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Label Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
     * @param array $SegmentSet List of video segments that contain the detected porn information.
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
