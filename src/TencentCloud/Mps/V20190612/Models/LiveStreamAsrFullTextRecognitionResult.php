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
     * @param string $Text Recognized text.
     * @param float $StartPtsTime Start PTS time of recognized segment in seconds.
     * @param float $EndPtsTime End PTS time of recognized segment in seconds.
     * @param float $Confidence Confidence of recognized segment. Value range: 0–100.
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
    }
}
