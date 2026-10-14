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
 * Real-time translation result of the live stream
 *
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 * @method float getStartPtsTime() Obtain Start PTS time of a translated segment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a translated segment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a translated segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a translated segment, in seconds.
 * @method float getConfidence() Obtain Confidence of a translated segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a translated segment. Value range: 0-100.
 * @method string getTrans() Obtain Translated text.
 * @method void setTrans(string $Trans) Set Translated text.
 * @method string getStartTime() Obtain Translation start UTC time.
 * @method void setStartTime(string $StartTime) Set Translation start UTC time.
 * @method string getEndTime() Obtain UTC time when translation is completed.
 * @method void setEndTime(string $EndTime) Set UTC time when translation is completed.
 * @method boolean getSteadyState() Obtain Steady-state tag.
 * @method void setSteadyState(boolean $SteadyState) Set Steady-state tag.
 * @method string getUserId() Obtain UserId for real-time translation over websocket and trtc
 * @method void setUserId(string $UserId) Set UserId for real-time translation over websocket and trtc
 */
class LiveStreamTransTextRecognitionResult extends AbstractModel
{
    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @var float Start PTS time of a translated segment, in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of a translated segment, in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Confidence of a translated segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string Translated text.
     */
    public $Trans;

    /**
     * @var string Translation start UTC time.
     */
    public $StartTime;

    /**
     * @var string UTC time when translation is completed.
     */
    public $EndTime;

    /**
     * @var boolean Steady-state tag.
     */
    public $SteadyState;

    /**
     * @var string UserId for real-time translation over websocket and trtc
     */
    public $UserId;

    /**
     * @param string $Text Recognized text.
     * @param float $StartPtsTime Start PTS time of a translated segment, in seconds.
     * @param float $EndPtsTime End PTS time of a translated segment, in seconds.
     * @param float $Confidence Confidence of a translated segment. Value range: 0-100.
     * @param string $Trans Translated text.
     * @param string $StartTime Translation start UTC time.
     * @param string $EndTime UTC time when translation is completed.
     * @param boolean $SteadyState Steady-state tag.
     * @param string $UserId UserId for real-time translation over websocket and trtc
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SteadyState",$param) and $param["SteadyState"] !== null) {
            $this->SteadyState = $param["SteadyState"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
