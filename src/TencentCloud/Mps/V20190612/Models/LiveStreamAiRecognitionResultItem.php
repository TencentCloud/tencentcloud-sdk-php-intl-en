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
 * AI-based live stream recognition result
 *
 * @method string getType() Obtain Result type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>OcrFullTextRecognition: full text recognition.</li>
 * @method void setType(string $Type) Set Result type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>OcrFullTextRecognition: full text recognition.</li>
 * @method array getFaceRecognitionResultSet() Obtain Face recognition result, which is valid when `Type` is
`FaceRecognition`.
 * @method void setFaceRecognitionResultSet(array $FaceRecognitionResultSet) Set Face recognition result, which is valid when `Type` is
`FaceRecognition`.
 * @method array getAsrWordsRecognitionResultSet() Obtain Speech keyword recognition result, which is valid when `Type` is
`AsrWordsRecognition`.
 * @method void setAsrWordsRecognitionResultSet(array $AsrWordsRecognitionResultSet) Set Speech keyword recognition result, which is valid when `Type` is
`AsrWordsRecognition`.
 * @method array getOcrWordsRecognitionResultSet() Obtain Text keyword recognition result, which is valid when `Type` is
`OcrWordsRecognition`.
 * @method void setOcrWordsRecognitionResultSet(array $OcrWordsRecognitionResultSet) Set Text keyword recognition result, which is valid when `Type` is
`OcrWordsRecognition`.
 * @method array getAsrFullTextRecognitionResultSet() Obtain Full speech recognition result, which is valid when `Type` is
`AsrFullTextRecognition`.
 * @method void setAsrFullTextRecognitionResultSet(array $AsrFullTextRecognitionResultSet) Set Full speech recognition result, which is valid when `Type` is
`AsrFullTextRecognition`.
 * @method array getOcrFullTextRecognitionResultSet() Obtain Full text recognition result, which is valid when `Type` is
`OcrFullTextRecognition`.
 * @method void setOcrFullTextRecognitionResultSet(array $OcrFullTextRecognitionResultSet) Set Full text recognition result, which is valid when `Type` is
`OcrFullTextRecognition`.
 */
class LiveStreamAiRecognitionResultItem extends AbstractModel
{
    /**
     * @var string Result type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>OcrFullTextRecognition: full text recognition.</li>
     */
    public $Type;

    /**
     * @var array Face recognition result, which is valid when `Type` is
`FaceRecognition`.
     */
    public $FaceRecognitionResultSet;

    /**
     * @var array Speech keyword recognition result, which is valid when `Type` is
`AsrWordsRecognition`.
     */
    public $AsrWordsRecognitionResultSet;

    /**
     * @var array Text keyword recognition result, which is valid when `Type` is
`OcrWordsRecognition`.
     */
    public $OcrWordsRecognitionResultSet;

    /**
     * @var array Full speech recognition result, which is valid when `Type` is
`AsrFullTextRecognition`.
     */
    public $AsrFullTextRecognitionResultSet;

    /**
     * @var array Full text recognition result, which is valid when `Type` is
`OcrFullTextRecognition`.
     */
    public $OcrFullTextRecognitionResultSet;

    /**
     * @param string $Type Result type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>OcrFullTextRecognition: full text recognition.</li>
     * @param array $FaceRecognitionResultSet Face recognition result, which is valid when `Type` is
`FaceRecognition`.
     * @param array $AsrWordsRecognitionResultSet Speech keyword recognition result, which is valid when `Type` is
`AsrWordsRecognition`.
     * @param array $OcrWordsRecognitionResultSet Text keyword recognition result, which is valid when `Type` is
`OcrWordsRecognition`.
     * @param array $AsrFullTextRecognitionResultSet Full speech recognition result, which is valid when `Type` is
`AsrFullTextRecognition`.
     * @param array $OcrFullTextRecognitionResultSet Full text recognition result, which is valid when `Type` is
`OcrFullTextRecognition`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FaceRecognitionResultSet",$param) and $param["FaceRecognitionResultSet"] !== null) {
            $this->FaceRecognitionResultSet = [];
            foreach ($param["FaceRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamFaceRecognitionResult();
                $obj->deserialize($value);
                array_push($this->FaceRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AsrWordsRecognitionResultSet",$param) and $param["AsrWordsRecognitionResultSet"] !== null) {
            $this->AsrWordsRecognitionResultSet = [];
            foreach ($param["AsrWordsRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamAsrWordsRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AsrWordsRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("OcrWordsRecognitionResultSet",$param) and $param["OcrWordsRecognitionResultSet"] !== null) {
            $this->OcrWordsRecognitionResultSet = [];
            foreach ($param["OcrWordsRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamOcrWordsRecognitionResult();
                $obj->deserialize($value);
                array_push($this->OcrWordsRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AsrFullTextRecognitionResultSet",$param) and $param["AsrFullTextRecognitionResultSet"] !== null) {
            $this->AsrFullTextRecognitionResultSet = [];
            foreach ($param["AsrFullTextRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamAsrFullTextRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AsrFullTextRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("OcrFullTextRecognitionResultSet",$param) and $param["OcrFullTextRecognitionResultSet"] !== null) {
            $this->OcrFullTextRecognitionResultSet = [];
            foreach ($param["OcrFullTextRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamOcrFullTextRecognitionResult();
                $obj->deserialize($value);
                array_push($this->OcrFullTextRecognitionResultSet, $obj);
            }
        }
    }
}
