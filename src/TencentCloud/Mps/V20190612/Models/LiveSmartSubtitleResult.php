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
 * Smart subtitle task result for live stream.
 *
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 * @method float getStartPTSTime() Obtain Translate the starting PTS time of a segment, in seconds.
 * @method void setStartPTSTime(float $StartPTSTime) Set Translate the starting PTS time of a segment, in seconds.
 * @method float getEndPTSTime() Obtain End PTS time of a translated segment, in seconds.
 * @method void setEndPTSTime(float $EndPTSTime) Set End PTS time of a translated segment, in seconds.
 * @method string getTrans() Obtain Translated text.
 * @method void setTrans(string $Trans) Set Translated text.
 * @method string getStartTime() Obtain Translation started at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Translation started at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Translation ends at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Translation ends at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSteadyState() Obtain Steady-State tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSteadyState(boolean $SteadyState) Set Steady-State tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain websocket and trtc real-time translation UserId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set websocket and trtc real-time translation UserId.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveSmartSubtitleResult extends AbstractModel
{
    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @var float Translate the starting PTS time of a segment, in seconds.
     */
    public $StartPTSTime;

    /**
     * @var float End PTS time of a translated segment, in seconds.
     */
    public $EndPTSTime;

    /**
     * @var string Translated text.
     */
    public $Trans;

    /**
     * @var string Translation started at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Translation ends at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var boolean Steady-State tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SteadyState;

    /**
     * @var string websocket and trtc real-time translation UserId.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @param string $Text Recognized text.
     * @param float $StartPTSTime Translate the starting PTS time of a segment, in seconds.
     * @param float $EndPTSTime End PTS time of a translated segment, in seconds.
     * @param string $Trans Translated text.
     * @param string $StartTime Translation started at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Translation ends at UTC time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SteadyState Steady-State tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId websocket and trtc real-time translation UserId.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("StartPTSTime",$param) and $param["StartPTSTime"] !== null) {
            $this->StartPTSTime = $param["StartPTSTime"];
        }

        if (array_key_exists("EndPTSTime",$param) and $param["EndPTSTime"] !== null) {
            $this->EndPTSTime = $param["EndPTSTime"];
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
