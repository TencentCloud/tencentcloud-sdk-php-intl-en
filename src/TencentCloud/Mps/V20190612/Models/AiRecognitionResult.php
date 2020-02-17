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
 * @method string getType() Obtain Task type. Valid values:
<li>FaceRecognition: Face recognition,</li>
<li>AsrWordsRecognition: Speech keyword recognition,</li>
<li>OcrWordsRecognition: Text keyword recognition,</li>
<li>AsrFullTextRecognition: Full speech recognition,</li>
<li>OcrFullTextRecognition: Full text recognition,</li>
<li>HeadTailRecognition: Video opening and ending credits recognition,</li>
<li>ObjectRecognition: Object recognition.</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>FaceRecognition: Face recognition,</li>
<li>AsrWordsRecognition: Speech keyword recognition,</li>
<li>OcrWordsRecognition: Text keyword recognition,</li>
<li>AsrFullTextRecognition: Full speech recognition,</li>
<li>OcrFullTextRecognition: Full text recognition,</li>
<li>HeadTailRecognition: Video opening and ending credits recognition,</li>
<li>ObjectRecognition: Object recognition.</li>
 * @method AiRecognitionTaskFaceResult getFaceTask() Obtain Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceTask(AiRecognitionTaskFaceResult $FaceTask) Set Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskAsrWordsResult getAsrWordsTask() Obtain Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrWordsTask(AiRecognitionTaskAsrWordsResult $AsrWordsTask) Set Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskAsrFullTextResult getAsrFullTextTask() Obtain Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrFullTextTask(AiRecognitionTaskAsrFullTextResult $AsrFullTextTask) Set Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskOcrWordsResult getOcrWordsTask() Obtain Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrWordsTask(AiRecognitionTaskOcrWordsResult $OcrWordsTask) Set Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiRecognitionTaskOcrFullTextResult getOcrFullTextTask() Obtain Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrFullTextTask(AiRecognitionTaskOcrFullTextResult $OcrFullTextTask) Set Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Intelligent recognition result.
 */
class AiRecognitionResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>FaceRecognition: Face recognition,</li>
<li>AsrWordsRecognition: Speech keyword recognition,</li>
<li>OcrWordsRecognition: Text keyword recognition,</li>
<li>AsrFullTextRecognition: Full speech recognition,</li>
<li>OcrFullTextRecognition: Full text recognition,</li>
<li>HeadTailRecognition: Video opening and ending credits recognition,</li>
<li>ObjectRecognition: Object recognition.</li>
     */
    public $Type;

    /**
     * @var AiRecognitionTaskFaceResult Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceTask;

    /**
     * @var AiRecognitionTaskAsrWordsResult Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrWordsTask;

    /**
     * @var AiRecognitionTaskAsrFullTextResult Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrFullTextTask;

    /**
     * @var AiRecognitionTaskOcrWordsResult Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrWordsTask;

    /**
     * @var AiRecognitionTaskOcrFullTextResult Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrFullTextTask;
    /**
     * @param string $Type Task type. Valid values:
<li>FaceRecognition: Face recognition,</li>
<li>AsrWordsRecognition: Speech keyword recognition,</li>
<li>OcrWordsRecognition: Text keyword recognition,</li>
<li>AsrFullTextRecognition: Full speech recognition,</li>
<li>OcrFullTextRecognition: Full text recognition,</li>
<li>HeadTailRecognition: Video opening and ending credits recognition,</li>
<li>ObjectRecognition: Object recognition.</li>
     * @param AiRecognitionTaskFaceResult $FaceTask Face recognition result, which is valid when `Type` is 
 `FaceRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskAsrWordsResult $AsrWordsTask Speech keyword recognition result, which is valid when `Type` is
 `AsrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskAsrFullTextResult $AsrFullTextTask Full speech recognition result, which is valid when `Type` is
 `AsrFullTextRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskOcrWordsResult $OcrWordsTask Text keyword recognition result, which is valid when `Type` is
 `OcrWordsRecognition`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiRecognitionTaskOcrFullTextResult $OcrFullTextTask Full text recognition result, which is valid when `Type` is
 `OcrFullTextRecognition`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("OcrWordsTask",$param) and $param["OcrWordsTask"] !== null) {
            $this->OcrWordsTask = new AiRecognitionTaskOcrWordsResult();
            $this->OcrWordsTask->deserialize($param["OcrWordsTask"]);
        }

        if (array_key_exists("OcrFullTextTask",$param) and $param["OcrFullTextTask"] !== null) {
            $this->OcrFullTextTask = new AiRecognitionTaskOcrFullTextResult();
            $this->OcrFullTextTask->deserialize($param["OcrFullTextTask"]);
        }
    }
}
