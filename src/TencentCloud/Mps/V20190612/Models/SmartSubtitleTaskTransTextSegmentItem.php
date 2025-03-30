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
 * Translated segment.
 *
 * @method float getConfidence() Obtain Confidence of a recognized segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a recognized segment. Value range: 0-100.
 * @method float getStartTimeOffset() Obtain Start time offset of a recognized segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a recognized segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a recognized segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a recognized segment, in seconds.
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 * @method string getTrans() Obtain Translated text.
 * @method void setTrans(string $Trans) Set Translated text.
 * @method array getWordlist() Obtain Word timestamp information.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWordlist(array $Wordlist) Set Word timestamp information.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class SmartSubtitleTaskTransTextSegmentItem extends AbstractModel
{
    /**
     * @var float Confidence of a recognized segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var float Start time offset of a recognized segment, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a recognized segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @var string Translated text.
     */
    public $Trans;

    /**
     * @var array Word timestamp information.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Wordlist;

    /**
     * @param float $Confidence Confidence of a recognized segment. Value range: 0-100.
     * @param float $StartTimeOffset Start time offset of a recognized segment, in seconds.
     * @param float $EndTimeOffset End time offset of a recognized segment, in seconds.
     * @param string $Text Recognized text.
     * @param string $Trans Translated text.
     * @param array $Wordlist Word timestamp information.

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
