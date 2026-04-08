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
 * Translated segment.
 *
 * @method float getConfidence() Obtain <p>Confidence of a recognized segment. Value range: 0-100.</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence of a recognized segment. Value range: 0-100.</p>
 * @method float getStartTimeOffset() Obtain <p>Start time offset of a recognized segment, in seconds.</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time offset of a recognized segment, in seconds.</p>
 * @method float getEndTimeOffset() Obtain <p>End time offset of a recognized segment, in seconds.</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time offset of a recognized segment, in seconds.</p>
 * @method string getText() Obtain <p>Recognized text.</p>
 * @method void setText(string $Text) Set <p>Recognized text.</p>
 * @method string getTrans() Obtain <p>Translated text.</p>
 * @method void setTrans(string $Trans) Set <p>Translated text.</p>
 * @method array getWordlist() Obtain <p>Word timestamp information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWordlist(array $Wordlist) Set <p>Word timestamp information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpeakerId() Obtain <p>Speaker ID (if speaker recognition is enabled)</p>
 * @method void setSpeakerId(string $SpeakerId) Set <p>Speaker ID (if speaker recognition is enabled)</p>
 */
class SmartSubtitleTaskTransTextSegmentItem extends AbstractModel
{
    /**
     * @var float <p>Confidence of a recognized segment. Value range: 0-100.</p>
     */
    public $Confidence;

    /**
     * @var float <p>Start time offset of a recognized segment, in seconds.</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time offset of a recognized segment, in seconds.</p>
     */
    public $EndTimeOffset;

    /**
     * @var string <p>Recognized text.</p>
     */
    public $Text;

    /**
     * @var string <p>Translated text.</p>
     */
    public $Trans;

    /**
     * @var array <p>Word timestamp information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Wordlist;

    /**
     * @var string <p>Speaker ID (if speaker recognition is enabled)</p>
     */
    public $SpeakerId;

    /**
     * @param float $Confidence <p>Confidence of a recognized segment. Value range: 0-100.</p>
     * @param float $StartTimeOffset <p>Start time offset of a recognized segment, in seconds.</p>
     * @param float $EndTimeOffset <p>End time offset of a recognized segment, in seconds.</p>
     * @param string $Text <p>Recognized text.</p>
     * @param string $Trans <p>Translated text.</p>
     * @param array $Wordlist <p>Word timestamp information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SpeakerId <p>Speaker ID (if speaker recognition is enabled)</p>
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }

        if (array_key_exists("Wordlist",$param) and $param["Wordlist"] !== null) {
            $this->Wordlist = [];
            foreach ($param["Wordlist"] as $key => $value){
                $obj = new WordResult();
                $obj->deserialize($value);
                array_push($this->Wordlist, $obj);
            }
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }
    }
}
