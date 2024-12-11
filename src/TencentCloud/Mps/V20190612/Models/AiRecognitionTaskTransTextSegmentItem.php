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
 * The translated segments.
 *
 * @method float getConfidence() Obtain The confidence score for a segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for a segment. Value range: 0-100.
 * @method float getStartTimeOffset() Obtain The start time offset (seconds) of a segment.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start time offset (seconds) of a segment.
 * @method float getEndTimeOffset() Obtain The end time offset (seconds) of a segment.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end time offset (seconds) of a segment.
 * @method string getText() Obtain The text transcript.
 * @method void setText(string $Text) Set The text transcript.
 * @method string getTrans() Obtain The translation.
 * @method void setTrans(string $Trans) Set The translation.
 * @method array getWordlist() Obtain Word timestamp information.
 * @method void setWordlist(array $Wordlist) Set Word timestamp information.
 */
class AiRecognitionTaskTransTextSegmentItem extends AbstractModel
{
    /**
     * @var float The confidence score for a segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var float The start time offset (seconds) of a segment.
     */
    public $StartTimeOffset;

    /**
     * @var float The end time offset (seconds) of a segment.
     */
    public $EndTimeOffset;

    /**
     * @var string The text transcript.
     */
    public $Text;

    /**
     * @var string The translation.
     */
    public $Trans;

    /**
     * @var array Word timestamp information.
     */
    public $Wordlist;

    /**
     * @param float $Confidence The confidence score for a segment. Value range: 0-100.
     * @param float $StartTimeOffset The start time offset (seconds) of a segment.
     * @param float $EndTimeOffset The end time offset (seconds) of a segment.
     * @param string $Text The text transcript.
     * @param string $Trans The translation.
     * @param array $Wordlist Word timestamp information.
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
    }
}
