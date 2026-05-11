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
 * Media quality inspection task generates.
 *
 * @method integer getNoAudio() Obtain Whether there is no audio track in the media file. Value ranges from...to...
<li>0: No, have audio tracks;</li>
<li>1: Yes, no audio track.</li>
 * @method void setNoAudio(integer $NoAudio) Set Whether there is no audio track in the media file. Value ranges from...to...
<li>0: No, have audio tracks;</li>
<li>1: Yes, no audio track.</li>
 * @method integer getNoVideo() Obtain Whether there is no video track in the media file. Value ranges from...to...
<li>0: No, meaning there is a video track;</li>
<li>1: Yes, no video track.</li>
 * @method void setNoVideo(integer $NoVideo) Set Whether there is no video track in the media file. Value ranges from...to...
<li>0: No, meaning there is a video track;</li>
<li>1: Yes, no video track.</li>
 * @method integer getQualityEvaluationScore() Obtain Video picture quality score, value ranges from 0 to 100.
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set Video picture quality score, value ranges from 0 to 100.
 * @method array getQualityInspectResultSet() Obtain List of abnormalities detected in audio and video quality.
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) Set List of abnormalities detected in audio and video quality.
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer Whether there is no audio track in the media file. Value ranges from...to...
<li>0: No, have audio tracks;</li>
<li>1: Yes, no audio track.</li>
     */
    public $NoAudio;

    /**
     * @var integer Whether there is no video track in the media file. Value ranges from...to...
<li>0: No, meaning there is a video track;</li>
<li>1: Yes, no video track.</li>
     */
    public $NoVideo;

    /**
     * @var integer Video picture quality score, value ranges from 0 to 100.
     */
    public $QualityEvaluationScore;

    /**
     * @var array List of abnormalities detected in audio and video quality.
     */
    public $QualityInspectResultSet;

    /**
     * @param integer $NoAudio Whether there is no audio track in the media file. Value ranges from...to...
<li>0: No, have audio tracks;</li>
<li>1: Yes, no audio track.</li>
     * @param integer $NoVideo Whether there is no video track in the media file. Value ranges from...to...
<li>0: No, meaning there is a video track;</li>
<li>1: Yes, no video track.</li>
     * @param integer $QualityEvaluationScore Video picture quality score, value ranges from 0 to 100.
     * @param array $QualityInspectResultSet List of abnormalities detected in audio and video quality.
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
        if (array_key_exists("NoAudio",$param) and $param["NoAudio"] !== null) {
            $this->NoAudio = $param["NoAudio"];
        }

        if (array_key_exists("NoVideo",$param) and $param["NoVideo"] !== null) {
            $this->NoVideo = $param["NoVideo"];
        }

        if (array_key_exists("QualityEvaluationScore",$param) and $param["QualityEvaluationScore"] !== null) {
            $this->QualityEvaluationScore = $param["QualityEvaluationScore"];
        }

        if (array_key_exists("QualityInspectResultSet",$param) and $param["QualityInspectResultSet"] !== null) {
            $this->QualityInspectResultSet = [];
            foreach ($param["QualityInspectResultSet"] as $key => $value){
                $obj = new QualityInspectResultItem();
                $obj->deserialize($value);
                array_push($this->QualityInspectResultSet, $obj);
            }
        }
    }
}
