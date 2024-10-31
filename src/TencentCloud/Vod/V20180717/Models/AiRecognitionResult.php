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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent recognition result.
 *
 * @method string getType() Obtain Task type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>AsrTranslateRecognition: voice translation recognition,</li>
<li>OcrFullTextRecognition: full text recognition,</li>
<li>HeadTailRecognition: video opening and ending credits recognition,</li>
<li>ObjectRecognition: object recognition.</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>AsrTranslateRecognition: voice translation recognition,</li>
<li>OcrFullTextRecognition: full text recognition,</li>
<li>HeadTailRecognition: video opening and ending credits recognition,</li>
<li>ObjectRecognition: object recognition.</li>
 * @method AiRecognitionTaskHeadTailResult getHeadTailTask() Obtain Video opening and ending credits recognition result, which is valid when `Type` is
 `HeadTailRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeadTailTask(AiRecognitionTaskHeadTailResult $HeadTailTask) Set Video opening and ending credits recognition result, which is valid when `Type` is
 `HeadTailRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskSegmentResult getSegmentTask() Obtain Video splitting recognition result, which is valid when `Type` is
 `SegmentRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentTask(AiRecognitionTaskSegmentResult $SegmentTask) Set Video splitting recognition result, which is valid when `Type` is
 `SegmentRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskFaceResult getFaceTask() Obtain Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaceTask(AiRecognitionTaskFaceResult $FaceTask) Set Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskAsrWordsResult getAsrWordsTask() Obtain Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAsrWordsTask(AiRecognitionTaskAsrWordsResult $AsrWordsTask) Set Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskAsrFullTextResult getAsrFullTextTask() Obtain Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAsrFullTextTask(AiRecognitionTaskAsrFullTextResult $AsrFullTextTask) Set Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskAsrTranslateResult getAsrTranslateTask() Obtain Voice translation result, valid when Type is AsrTranslateRecognition.
 * @method void setAsrTranslateTask(AiRecognitionTaskAsrTranslateResult $AsrTranslateTask) Set Voice translation result, valid when Type is AsrTranslateRecognition.
 * @method AiRecognitionTaskOcrWordsResult getOcrWordsTask() Obtain Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOcrWordsTask(AiRecognitionTaskOcrWordsResult $OcrWordsTask) Set Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskOcrFullTextResult getOcrFullTextTask() Obtain Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOcrFullTextTask(AiRecognitionTaskOcrFullTextResult $OcrFullTextTask) Set Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskObjectResult getObjectTask() Obtain Object recognition result, which is valid when `Type` is
 `ObjectRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObjectTask(AiRecognitionTaskObjectResult $ObjectTask) Set Object recognition result, which is valid when `Type` is
 `ObjectRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AiRecognitionResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>AsrTranslateRecognition: voice translation recognition,</li>
<li>OcrFullTextRecognition: full text recognition,</li>
<li>HeadTailRecognition: video opening and ending credits recognition,</li>
<li>ObjectRecognition: object recognition.</li>
     */
    public $Type;

    /**
     * @var AiRecognitionTaskHeadTailResult Video opening and ending credits recognition result, which is valid when `Type` is
 `HeadTailRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HeadTailTask;

    /**
     * @var AiRecognitionTaskSegmentResult Video splitting recognition result, which is valid when `Type` is
 `SegmentRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentTask;

    /**
     * @var AiRecognitionTaskFaceResult Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaceTask;

    /**
     * @var AiRecognitionTaskAsrWordsResult Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AsrWordsTask;

    /**
     * @var AiRecognitionTaskAsrFullTextResult Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AsrFullTextTask;

    /**
     * @var AiRecognitionTaskAsrTranslateResult Voice translation result, valid when Type is AsrTranslateRecognition.
     */
    public $AsrTranslateTask;

    /**
     * @var AiRecognitionTaskOcrWordsResult Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OcrWordsTask;

    /**
     * @var AiRecognitionTaskOcrFullTextResult Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OcrFullTextTask;

    /**
     * @var AiRecognitionTaskObjectResult Object recognition result, which is valid when `Type` is
 `ObjectRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectTask;

    /**
     * @param string $Type Task type. Valid values:
<li>FaceRecognition: face recognition,</li>
<li>AsrWordsRecognition: speech keyword recognition,</li>
<li>OcrWordsRecognition: text keyword recognition,</li>
<li>AsrFullTextRecognition: full speech recognition,</li>
<li>AsrTranslateRecognition: voice translation recognition,</li>
<li>OcrFullTextRecognition: full text recognition,</li>
<li>HeadTailRecognition: video opening and ending credits recognition,</li>
<li>ObjectRecognition: object recognition.</li>
     * @param AiRecognitionTaskHeadTailResult $HeadTailTask Video opening and ending credits recognition result, which is valid when `Type` is
 `HeadTailRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskSegmentResult $SegmentTask Video splitting recognition result, which is valid when `Type` is
 `SegmentRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskFaceResult $FaceTask Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskAsrWordsResult $AsrWordsTask Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskAsrFullTextResult $AsrFullTextTask Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskAsrTranslateResult $AsrTranslateTask Voice translation result, valid when Type is AsrTranslateRecognition.
     * @param AiRecognitionTaskOcrWordsResult $OcrWordsTask Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskOcrFullTextResult $OcrFullTextTask Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskObjectResult $ObjectTask Object recognition result, which is valid when `Type` is
 `ObjectRecognition`.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("HeadTailTask",$param) and $param["HeadTailTask"] !== null) {
            $this->HeadTailTask = new AiRecognitionTaskHeadTailResult();
            $this->HeadTailTask->deserialize($param["HeadTailTask"]);
        }

        if (array_key_exists("SegmentTask",$param) and $param["SegmentTask"] !== null) {
            $this->SegmentTask = new AiRecognitionTaskSegmentResult();
            $this->SegmentTask->deserialize($param["SegmentTask"]);
        }

        if (array_key_exists("FaceTask",$param) and $param["FaceTask"] !== null) {
            $this->FaceTask = new AiRecognitionTaskFaceResult();
            $this->FaceTask->deserialize($param["FaceTask"]);
        }

        if (array_key_exists("AsrWordsTask",$param) and $param["AsrWordsTask"] !== null) {
            $this->AsrWordsTask = new AiRecognitionTaskAsrWordsResult();
            $this->AsrWordsTask->deserialize($param["AsrWordsTask"]);
        }

        if (array_key_exists("AsrFullTextTask",$param) and $param["AsrFullTextTask"] !== null) {
            $this->AsrFullTextTask = new AiRecognitionTaskAsrFullTextResult();
            $this->AsrFullTextTask->deserialize($param["AsrFullTextTask"]);
        }

        if (array_key_exists("AsrTranslateTask",$param) and $param["AsrTranslateTask"] !== null) {
            $this->AsrTranslateTask = new AiRecognitionTaskAsrTranslateResult();
            $this->AsrTranslateTask->deserialize($param["AsrTranslateTask"]);
        }

        if (array_key_exists("OcrWordsTask",$param) and $param["OcrWordsTask"] !== null) {
            $this->OcrWordsTask = new AiRecognitionTaskOcrWordsResult();
            $this->OcrWordsTask->deserialize($param["OcrWordsTask"]);
        }

        if (array_key_exists("OcrFullTextTask",$param) and $param["OcrFullTextTask"] !== null) {
            $this->OcrFullTextTask = new AiRecognitionTaskOcrFullTextResult();
            $this->OcrFullTextTask->deserialize($param["OcrFullTextTask"]);
        }

        if (array_key_exists("ObjectTask",$param) and $param["ObjectTask"] !== null) {
            $this->ObjectTask = new AiRecognitionTaskObjectResult();
            $this->ObjectTask->deserialize($param["ObjectTask"]);
        }
    }
}
