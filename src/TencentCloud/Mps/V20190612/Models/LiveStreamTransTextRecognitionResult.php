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
 * Live stream real-time translation result
 *
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 * @method float getStartPtsTime() Obtain Start PTS time of a translated fragment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a translated fragment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a translated segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a translated segment, in seconds.
 * @method float getConfidence() Obtain Confidence of a translated segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a translated segment. Value range: 0-100.
 * @method string getTrans() Obtain Translated text.
 * @method void setTrans(string $Trans) Set Translated text.
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method boolean getSteadyState() Obtain 
 * @method void setSteadyState(boolean $SteadyState) Set 
 * @method string getUserId() Obtain 
 * @method void setUserId(string $UserId) Set 
 */
class LiveStreamTransTextRecognitionResult extends AbstractModel
{
    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @var float Start PTS time of a translated fragment, in seconds.
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
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var boolean 
     */
    public $SteadyState;

    /**
     * @var string 
     */
    public $UserId;

    /**
     * @param string $Text Recognized text.
     * @param float $StartPtsTime Start PTS time of a translated fragment, in seconds.
     * @param float $EndPtsTime End PTS time of a translated segment, in seconds.
     * @param float $Confidence Confidence of a translated segment. Value range: 0-100.
     * @param string $Trans Translated text.
     * @param string $StartTime 
     * @param string $EndTime 
     * @param boolean $SteadyState 
     * @param string $UserId 
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
