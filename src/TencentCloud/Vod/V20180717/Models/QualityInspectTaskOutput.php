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
 * Media quality inspection task generates.
 *
 * @method integer getNoAudio() Obtain Whether the media files have no audio track, range: <li>0: No, that is, there is an audio track;</li> <li>1: Yes, that is, there is no audio track.</li>
 * @method void setNoAudio(integer $NoAudio) Set Whether the media files have no audio track, range: <li>0: No, that is, there is an audio track;</li> <li>1: Yes, that is, there is no audio track.</li>
 * @method integer getNoVideo() Obtain Whether the media files have no video track, range: <li>0: No, that is, there is a video track;</li> <li>1: Yes, that is, there is no video track.</li>
 * @method void setNoVideo(integer $NoVideo) Set Whether the media files have no video track, range: <li>0: No, that is, there is a video track;</li> <li>1: Yes, that is, there is no video track.</li>
 * @method integer getQualityEvaluationScore() Obtain Quality score, value range: [0, 100].
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set Quality score, value range: [0, 100].
 * @method array getQualityInspectResultSet() Obtain Abnormal items list detected of media quality inspection task
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) Set Abnormal items list detected of media quality inspection task
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer Whether the media files have no audio track, range: <li>0: No, that is, there is an audio track;</li> <li>1: Yes, that is, there is no audio track.</li>
     */
    public $NoAudio;

    /**
     * @var integer Whether the media files have no video track, range: <li>0: No, that is, there is a video track;</li> <li>1: Yes, that is, there is no video track.</li>
     */
    public $NoVideo;

    /**
     * @var integer Quality score, value range: [0, 100].
     */
    public $QualityEvaluationScore;

    /**
     * @var array Abnormal items list detected of media quality inspection task
     */
    public $QualityInspectResultSet;

    /**
     * @param integer $NoAudio Whether the media files have no audio track, range: <li>0: No, that is, there is an audio track;</li> <li>1: Yes, that is, there is no audio track.</li>
     * @param integer $NoVideo Whether the media files have no video track, range: <li>0: No, that is, there is a video track;</li> <li>1: Yes, that is, there is no video track.</li>
     * @param integer $QualityEvaluationScore Quality score, value range: [0, 100].
     * @param array $QualityInspectResultSet Abnormal items list detected of media quality inspection task
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
