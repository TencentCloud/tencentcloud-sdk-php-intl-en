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
 * Result of the sentence recognition.
 *
 * @method float getStart() Obtain Start time in the audio, in seconds.
 * @method void setStart(float $Start) Set Start time in the audio, in seconds.
 * @method float getEnd() Obtain End time in the audio, in seconds.
 * @method void setEnd(float $End) Set End time in the audio, in seconds.
 * @method string getText() Obtain Audio recognition result.
 * @method void setText(string $Text) Set Audio recognition result.
 * @method array getWordsInfo() Obtain Word timestamp result.
 * @method void setWordsInfo(array $WordsInfo) Set Word timestamp result.
 */
class RecognizeAudioSentence extends AbstractModel
{
    /**
     * @var float Start time in the audio, in seconds.
     */
    public $Start;

    /**
     * @var float End time in the audio, in seconds.
     */
    public $End;

    /**
     * @var string Audio recognition result.
     */
    public $Text;

    /**
     * @var array Word timestamp result.
     */
    public $WordsInfo;

    /**
     * @param float $Start Start time in the audio, in seconds.
     * @param float $End End time in the audio, in seconds.
     * @param string $Text Audio recognition result.
     * @param array $WordsInfo Word timestamp result.
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("WordsInfo",$param) and $param["WordsInfo"] !== null) {
            $this->WordsInfo = [];
            foreach ($param["WordsInfo"] as $key => $value){
                $obj = new WordResult();
                $obj->deserialize($value);
                array_push($this->WordsInfo, $obj);
            }
        }
    }
}
