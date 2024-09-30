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
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation.</li>

<li>ObjectRecognition: object recognition.</li>
<li>TagRecognition: highlights marking.</li>
 * @method void setType(string $Type) Set Result type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation.</li>

<li>ObjectRecognition: object recognition.</li>
<li>TagRecognition: highlights marking.</li>
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
 * @method array getTransTextRecognitionResultSet() Obtain The translation result. This parameter is valid only if `Type` is `TransTextRecognition`.
 * @method void setTransTextRecognitionResultSet(array $TransTextRecognitionResultSet) Set The translation result. This parameter is valid only if `Type` is `TransTextRecognition`.
 * @method array getObjectRecognitionResultSet() Obtain Object recognition result, which is valid when Type is ObjectRecognition.
 * @method void setObjectRecognitionResultSet(array $ObjectRecognitionResultSet) Set Object recognition result, which is valid when Type is ObjectRecognition.
 * @method array getTagRecognitionResultSet() Obtain 
 * @method void setTagRecognitionResultSet(array $TagRecognitionResultSet) Set 
 */
class LiveStreamAiRecognitionResultItem extends AbstractModel
{
    /**
     * @var string Result type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation.</li>

<li>ObjectRecognition: object recognition.</li>
<li>TagRecognition: highlights marking.</li>
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
     * @var array The translation result. This parameter is valid only if `Type` is `TransTextRecognition`.
     */
    public $TransTextRecognitionResultSet;

    /**
     * @var array Object recognition result, which is valid when Type is ObjectRecognition.
     */
    public $ObjectRecognitionResultSet;

    /**
     * @var array 
     */
    public $TagRecognitionResultSet;

    /**
     * @param string $Type Result type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation.</li>

<li>ObjectRecognition: object recognition.</li>
<li>TagRecognition: highlights marking.</li>
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
     * @param array $TransTextRecognitionResultSet The translation result. This parameter is valid only if `Type` is `TransTextRecognition`.
     * @param array $ObjectRecognitionResultSet Object recognition result, which is valid when Type is ObjectRecognition.
     * @param array $TagRecognitionResultSet 
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

        if (array_key_exists("TransTextRecognitionResultSet",$param) and $param["TransTextRecognitionResultSet"] !== null) {
            $this->TransTextRecognitionResultSet = [];
            foreach ($param["TransTextRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamTransTextRecognitionResult();
                $obj->deserialize($value);
                array_push($this->TransTextRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("ObjectRecognitionResultSet",$param) and $param["ObjectRecognitionResultSet"] !== null) {
            $this->ObjectRecognitionResultSet = [];
            foreach ($param["ObjectRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamObjectRecognitionResult();
                $obj->deserialize($value);
                array_push($this->ObjectRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("TagRecognitionResultSet",$param) and $param["TagRecognitionResultSet"] !== null) {
            $this->TagRecognitionResultSet = [];
            foreach ($param["TagRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamTagRecognitionResult();
                $obj->deserialize($value);
                array_push($this->TagRecognitionResultSet, $obj);
            }
        }
    }
}
