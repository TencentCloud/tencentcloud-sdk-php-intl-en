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
 * ASR-based full live stream recognition
 *
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 * @method float getStartPtsTime() Obtain Start PTS time of recognized segment in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of recognized segment in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of recognized segment in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of recognized segment in seconds.
 * @method float getConfidence() Obtain Confidence of recognized segment. Value range: 0–100.
 * @method void setConfidence(float $Confidence) Set Confidence of recognized segment. Value range: 0–100.
 * @method string getStartTime() Obtain Recognition start UTC time.
 * @method void setStartTime(string $StartTime) Set Recognition start UTC time.
 * @method string getEndTime() Obtain Recognition end UTC time.
 * @method void setEndTime(string $EndTime) Set Recognition end UTC time.
 * @method boolean getSteadyState() Obtain Steady state marker.
 * @method void setSteadyState(boolean $SteadyState) Set Steady state marker.
 * @method string getUserId() Obtain User ID in the result of recognition via WebSocket and TRTC.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(string $UserId) Set User ID in the result of recognition via WebSocket and TRTC.Note: This field may return null, indicating that no valid value can be obtained.
 */
class LiveStreamAsrFullTextRecognitionResult extends AbstractModel
{
    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @var float Start PTS time of recognized segment in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of recognized segment in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Confidence of recognized segment. Value range: 0–100.
     */
    public $Confidence;

    /**
     * @var string Recognition start UTC time.
     */
    public $StartTime;

    /**
     * @var string Recognition end UTC time.
     */
    public $EndTime;

    /**
     * @var boolean Steady state marker.
     */
    public $SteadyState;

    /**
     * @var string User ID in the result of recognition via WebSocket and TRTC.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @param string $Text Recognized text.
     * @param float $StartPtsTime Start PTS time of recognized segment in seconds.
     * @param float $EndPtsTime End PTS time of recognized segment in seconds.
     * @param float $Confidence Confidence of recognized segment. Value range: 0–100.
     * @param string $StartTime Recognition start UTC time.
     * @param string $EndTime Recognition end UTC time.
     * @param boolean $SteadyState Steady state marker.
     * @param string $UserId User ID in the result of recognition via WebSocket and TRTC.Note: This field may return null, indicating that no valid value can be obtained.
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
