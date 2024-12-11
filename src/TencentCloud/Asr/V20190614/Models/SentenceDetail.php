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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed recognition result of a sentence, including the time offset of individual words. This parameter generally applies to subtitle generation scenarios.
 *
 * @method string getFinalSentence() Obtain Final recognition result of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFinalSentence(string $FinalSentence) Set Final recognition result of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSliceSentence() Obtain Intermediate recognition result of a sentence. The sentence is split into multiple phrases by spaces.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSliceSentence(string $SliceSentence) Set Intermediate recognition result of a sentence. The sentence is split into multiple phrases by spaces.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWrittenText() Obtain Oral-to-written transcription result. This parameter has a value only if the corresponding feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWrittenText(string $WrittenText) Set Oral-to-written transcription result. This parameter has a value only if the corresponding feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartMs() Obtain Start time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartMs(integer $StartMs) Set Start time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndMs() Obtain End time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndMs(integer $EndMs) Set End time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWordsNum() Obtain Number of words in a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWordsNum(integer $WordsNum) Set Number of words in a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWords() Obtain Word details of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWords(array $Words) Set Word details of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSpeechSpeed() Obtain Speech speed of a sentence. Unit: Number of words per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpeechSpeed(float $SpeechSpeed) Set Speech speed of a sentence. Unit: Number of words per second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSpeakerId() Obtain Channel or speaker ID. (If speaker_diarization is specified or ChannelNum is set to 2 (stereo) in the request, speakers or channels can be distinguished.)
Different values represent different speakers in mono mode. For the speakerId values, 0 represents the left channel, and 1 represents the right channel in stereo mode if an 8k engine is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpeakerId(integer $SpeakerId) Set Channel or speaker ID. (If speaker_diarization is specified or ChannelNum is set to 2 (stereo) in the request, speakers or channels can be distinguished.)
Different values represent different speakers in mono mode. For the speakerId values, 0 represents the left channel, and 1 represents the right channel in stereo mode if an 8k engine is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getEmotionalEnergy() Obtain Emotional energy value. This value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmotionalEnergy(float $EmotionalEnergy) Set Emotional energy value. This value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSilenceTime() Obtain Silent duration between the current sentence and the last sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSilenceTime(integer $SilenceTime) Set Silent duration between the current sentence and the last sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEmotionType() Obtain Emotion type. (This parameter may be left blank in two scenarios: 1. No corresponding resource package exists; 2. The emotion is not recognized because it is not strong enough, which is related to the emotional energy.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmotionType(array $EmotionType) Set Emotion type. (This parameter may be left blank in two scenarios: 1. No corresponding resource package exists; 2. The emotion is not recognized because it is not strong enough, which is related to the emotional energy.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeyWordResults() Obtain List of recognized keywords.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyWordResults(array $KeyWordResults) Set List of recognized keywords.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SentenceDetail extends AbstractModel
{
    /**
     * @var string Final recognition result of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FinalSentence;

    /**
     * @var string Intermediate recognition result of a sentence. The sentence is split into multiple phrases by spaces.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SliceSentence;

    /**
     * @var string Oral-to-written transcription result. This parameter has a value only if the corresponding feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WrittenText;

    /**
     * @var integer Start time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartMs;

    /**
     * @var integer End time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndMs;

    /**
     * @var integer Number of words in a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WordsNum;

    /**
     * @var array Word details of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Words;

    /**
     * @var float Speech speed of a sentence. Unit: Number of words per second.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpeechSpeed;

    /**
     * @var integer Channel or speaker ID. (If speaker_diarization is specified or ChannelNum is set to 2 (stereo) in the request, speakers or channels can be distinguished.)
Different values represent different speakers in mono mode. For the speakerId values, 0 represents the left channel, and 1 represents the right channel in stereo mode if an 8k engine is used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpeakerId;

    /**
     * @var float Emotional energy value. This value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EmotionalEnergy;

    /**
     * @var integer Silent duration between the current sentence and the last sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SilenceTime;

    /**
     * @var array Emotion type. (This parameter may be left blank in two scenarios: 1. No corresponding resource package exists; 2. The emotion is not recognized because it is not strong enough, which is related to the emotional energy.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EmotionType;

    /**
     * @var array List of recognized keywords.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyWordResults;

    /**
     * @param string $FinalSentence Final recognition result of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SliceSentence Intermediate recognition result of a sentence. The sentence is split into multiple phrases by spaces.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WrittenText Oral-to-written transcription result. This parameter has a value only if the corresponding feature is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartMs Start time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndMs End time of a sentence (ms).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WordsNum Number of words in a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Words Word details of a sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SpeechSpeed Speech speed of a sentence. Unit: Number of words per second.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SpeakerId Channel or speaker ID. (If speaker_diarization is specified or ChannelNum is set to 2 (stereo) in the request, speakers or channels can be distinguished.)
Different values represent different speakers in mono mode. For the speakerId values, 0 represents the left channel, and 1 represents the right channel in stereo mode if an 8k engine is used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $EmotionalEnergy Emotional energy value. This value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SilenceTime Silent duration between the current sentence and the last sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EmotionType Emotion type. (This parameter may be left blank in two scenarios: 1. No corresponding resource package exists; 2. The emotion is not recognized because it is not strong enough, which is related to the emotional energy.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $KeyWordResults List of recognized keywords.
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
        if (array_key_exists("FinalSentence",$param) and $param["FinalSentence"] !== null) {
            $this->FinalSentence = $param["FinalSentence"];
        }

        if (array_key_exists("SliceSentence",$param) and $param["SliceSentence"] !== null) {
            $this->SliceSentence = $param["SliceSentence"];
        }

        if (array_key_exists("WrittenText",$param) and $param["WrittenText"] !== null) {
            $this->WrittenText = $param["WrittenText"];
        }

        if (array_key_exists("StartMs",$param) and $param["StartMs"] !== null) {
            $this->StartMs = $param["StartMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }

        if (array_key_exists("WordsNum",$param) and $param["WordsNum"] !== null) {
            $this->WordsNum = $param["WordsNum"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new SentenceWords();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("SpeechSpeed",$param) and $param["SpeechSpeed"] !== null) {
            $this->SpeechSpeed = $param["SpeechSpeed"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("SilenceTime",$param) and $param["SilenceTime"] !== null) {
            $this->SilenceTime = $param["SilenceTime"];
        }

        if (array_key_exists("EmotionType",$param) and $param["EmotionType"] !== null) {
            $this->EmotionType = $param["EmotionType"];
        }

        if (array_key_exists("KeyWordResults",$param) and $param["KeyWordResults"] !== null) {
            $this->KeyWordResults = [];
            foreach ($param["KeyWordResults"] as $key => $value){
                $obj = new KeyWordResult();
                $obj->deserialize($value);
                array_push($this->KeyWordResults, $obj);
            }
        }
    }
}
