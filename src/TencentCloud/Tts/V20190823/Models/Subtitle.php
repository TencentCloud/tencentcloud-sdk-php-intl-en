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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information about the timestamps.
 *
 * @method string getText() Obtain The word in the text that is sent.
 * @method void setText(string $Text) Set The word in the text that is sent.
 * @method integer getBeginTime() Obtain The start timestamp of the word in the synthesized audio data, in milliseconds.
 * @method void setBeginTime(integer $BeginTime) Set The start timestamp of the word in the synthesized audio data, in milliseconds.
 * @method integer getEndTime() Obtain The end timestamp of the word in the synthesized audio data, in milliseconds.
 * @method void setEndTime(integer $EndTime) Set The end timestamp of the word in the synthesized audio data, in milliseconds.
 * @method integer getBeginIndex() Obtain The start index of the character in the whole sentence, starting from 0.
 * @method void setBeginIndex(integer $BeginIndex) Set The start index of the character in the whole sentence, starting from 0.
 * @method integer getEndIndex() Obtain The end index of the character in the whole sentence, starting from 0.
 * @method void setEndIndex(integer $EndIndex) Set The end index of the character in the whole sentence, starting from 0.
 * @method string getPhoneme() Obtain The phonemes of the word.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneme(string $Phoneme) Set The phonemes of the word.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Subtitle extends AbstractModel
{
    /**
     * @var string The word in the text that is sent.
     */
    public $Text;

    /**
     * @var integer The start timestamp of the word in the synthesized audio data, in milliseconds.
     */
    public $BeginTime;

    /**
     * @var integer The end timestamp of the word in the synthesized audio data, in milliseconds.
     */
    public $EndTime;

    /**
     * @var integer The start index of the character in the whole sentence, starting from 0.
     */
    public $BeginIndex;

    /**
     * @var integer The end index of the character in the whole sentence, starting from 0.
     */
    public $EndIndex;

    /**
     * @var string The phonemes of the word.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phoneme;

    /**
     * @param string $Text The word in the text that is sent.
     * @param integer $BeginTime The start timestamp of the word in the synthesized audio data, in milliseconds.
     * @param integer $EndTime The end timestamp of the word in the synthesized audio data, in milliseconds.
     * @param integer $BeginIndex The start index of the character in the whole sentence, starting from 0.
     * @param integer $EndIndex The end index of the character in the whole sentence, starting from 0.
     * @param string $Phoneme The phonemes of the word.
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BeginIndex",$param) and $param["BeginIndex"] !== null) {
            $this->BeginIndex = $param["BeginIndex"];
        }

        if (array_key_exists("EndIndex",$param) and $param["EndIndex"] !== null) {
            $this->EndIndex = $param["EndIndex"];
        }

        if (array_key_exists("Phoneme",$param) and $param["Phoneme"] !== null) {
            $this->Phoneme = $param["Phoneme"];
        }
    }
}
