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
 * The live stream translation result.
 *
 * @method string getText() Obtain The text transcript.
 * @method void setText(string $Text) Set The text transcript.
 * @method float getStartPtsTime() Obtain The PTS (seconds) of the start of a segment.
 * @method void setStartPtsTime(float $StartPtsTime) Set The PTS (seconds) of the start of a segment.
 * @method float getEndPtsTime() Obtain The PTS (seconds) of the end of a segment.
 * @method void setEndPtsTime(float $EndPtsTime) Set The PTS (seconds) of the end of a segment.
 * @method float getConfidence() Obtain The confidence score for a segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for a segment. Value range: 0-100.
 * @method string getTrans() Obtain The translation.
 * @method void setTrans(string $Trans) Set The translation.
 * @method string getStartTime() Obtain Translation start UTC time.
 * @method void setStartTime(string $StartTime) Set Translation start UTC time.
 * @method string getEndTime() Obtain Translation end UTC time.
 * @method void setEndTime(string $EndTime) Set Translation end UTC time.
 * @method boolean getSteadyState() Obtain Steady state marker.
 * @method void setSteadyState(boolean $SteadyState) Set Steady state marker.
 * @method string getUserId() Obtain User ID in the result of real-time translation via WebSocket and TRTC.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(string $UserId) Set User ID in the result of real-time translation via WebSocket and TRTC.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class LiveStreamTransTextRecognitionResult extends AbstractModel
{
    /**
     * @var string The text transcript.
     */
    public $Text;

    /**
     * @var float The PTS (seconds) of the start of a segment.
     */
    public $StartPtsTime;

    /**
     * @var float The PTS (seconds) of the end of a segment.
     */
    public $EndPtsTime;

    /**
     * @var float The confidence score for a segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string The translation.
     */
    public $Trans;

    /**
     * @var string Translation start UTC time.
     */
    public $StartTime;

    /**
     * @var string Translation end UTC time.
     */
    public $EndTime;

    /**
     * @var boolean Steady state marker.
     */
    public $SteadyState;

    /**
     * @var string User ID in the result of real-time translation via WebSocket and TRTC.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @param string $Text The text transcript.
     * @param float $StartPtsTime The PTS (seconds) of the start of a segment.
     * @param float $EndPtsTime The PTS (seconds) of the end of a segment.
     * @param float $Confidence The confidence score for a segment. Value range: 0-100.
     * @param string $Trans The translation.
     * @param string $StartTime Translation start UTC time.
     * @param string $EndTime Translation end UTC time.
     * @param boolean $SteadyState Steady state marker.
     * @param string $UserId User ID in the result of real-time translation via WebSocket and TRTC.
Note: This field may return null, indicating that no valid value can be obtained.
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
