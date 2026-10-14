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
 * Intelligent recognition result.
 *
 * @method string getType() Obtain Task type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation</li>
 * @method AiRecognitionTaskFaceResult getFaceTask() Obtain Face recognition result, which is valid when Type is 
Valid for FaceRecognition.
 * @method void setFaceTask(AiRecognitionTaskFaceResult $FaceTask) Set Face recognition result, which is valid when Type is 
Valid for FaceRecognition.
 * @method AiRecognitionTaskAsrWordsResult getAsrWordsTask() Obtain Speech keyword recognition result, which is valid when Type is
Valid when set to AsrWordsRecognition.
 * @method void setAsrWordsTask(AiRecognitionTaskAsrWordsResult $AsrWordsTask) Set Speech keyword recognition result, which is valid when Type is
Valid when set to AsrWordsRecognition.
 * @method AiRecognitionTaskAsrFullTextResult getAsrFullTextTask() Obtain Full speech recognition result. When Type is
Valid when AsrFullTextRecognition is used.
 * @method void setAsrFullTextTask(AiRecognitionTaskAsrFullTextResult $AsrFullTextTask) Set Full speech recognition result. When Type is
Valid when AsrFullTextRecognition is used.
 * @method AiRecognitionTaskOcrWordsResult getOcrWordsTask() Obtain Text keyword recognition result. When Type is
Valid when set to OcrWordsRecognition.
 * @method void setOcrWordsTask(AiRecognitionTaskOcrWordsResult $OcrWordsTask) Set Text keyword recognition result. When Type is
Valid when set to OcrWordsRecognition.
 * @method AiRecognitionTaskOcrFullTextResult getOcrFullTextTask() Obtain Full text recognition result. When Type is
Valid when OcrFullTextRecognition is used.
 * @method void setOcrFullTextTask(AiRecognitionTaskOcrFullTextResult $OcrFullTextTask) Set Full text recognition result. When Type is
Valid when OcrFullTextRecognition is used.
 * @method AiRecognitionTaskTransTextResult getTransTextTask() Obtain Translation result. When Type is

Valid when set to TransTextRecognition.
 * @method void setTransTextTask(AiRecognitionTaskTransTextResult $TransTextTask) Set Translation result. When Type is

Valid when set to TransTextRecognition.
 * @method AiRecognitionTaskObjectResult getObjectTask() Obtain Object recognition result, which is valid when Type is

Valid for ObjectRecognition.
 * @method void setObjectTask(AiRecognitionTaskObjectResult $ObjectTask) Set Object recognition result, which is valid when Type is

Valid for ObjectRecognition.
 */
class AiRecognitionResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation</li>
     */
    public $Type;

    /**
     * @var AiRecognitionTaskFaceResult Face recognition result, which is valid when Type is 
Valid for FaceRecognition.
     */
    public $FaceTask;

    /**
     * @var AiRecognitionTaskAsrWordsResult Speech keyword recognition result, which is valid when Type is
Valid when set to AsrWordsRecognition.
     */
    public $AsrWordsTask;

    /**
     * @var AiRecognitionTaskAsrFullTextResult Full speech recognition result. When Type is
Valid when AsrFullTextRecognition is used.
     */
    public $AsrFullTextTask;

    /**
     * @var AiRecognitionTaskOcrWordsResult Text keyword recognition result. When Type is
Valid when set to OcrWordsRecognition.
     */
    public $OcrWordsTask;

    /**
     * @var AiRecognitionTaskOcrFullTextResult Full text recognition result. When Type is
Valid when OcrFullTextRecognition is used.
     */
    public $OcrFullTextTask;

    /**
     * @var AiRecognitionTaskTransTextResult Translation result. When Type is

Valid when set to TransTextRecognition.
     */
    public $TransTextTask;

    /**
     * @var AiRecognitionTaskObjectResult Object recognition result, which is valid when Type is

Valid for ObjectRecognition.
     */
    public $ObjectTask;

    /**
     * @param string $Type Task type. Valid values:
<li>FaceRecognition: face recognition.</li>
<li>AsrWordsRecognition: speech keyword recognition.</li>
<li>OcrWordsRecognition: text keyword recognition.</li>
<li>AsrFullTextRecognition: full speech recognition.</li>
<li>OcrFullTextRecognition: full text recognition.</li>
<li>TransTextRecognition: speech translation</li>
     * @param AiRecognitionTaskFaceResult $FaceTask Face recognition result, which is valid when Type is 
Valid for FaceRecognition.
     * @param AiRecognitionTaskAsrWordsResult $AsrWordsTask Speech keyword recognition result, which is valid when Type is
Valid when set to AsrWordsRecognition.
     * @param AiRecognitionTaskAsrFullTextResult $AsrFullTextTask Full speech recognition result. When Type is
Valid when AsrFullTextRecognition is used.
     * @param AiRecognitionTaskOcrWordsResult $OcrWordsTask Text keyword recognition result. When Type is
Valid when set to OcrWordsRecognition.
     * @param AiRecognitionTaskOcrFullTextResult $OcrFullTextTask Full text recognition result. When Type is
Valid when OcrFullTextRecognition is used.
     * @param AiRecognitionTaskTransTextResult $TransTextTask Translation result. When Type is

Valid when set to TransTextRecognition.
     * @param AiRecognitionTaskObjectResult $ObjectTask Object recognition result, which is valid when Type is

Valid for ObjectRecognition.
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

        if (array_key_exists("TransTextTask",$param) and $param["TransTextTask"] !== null) {
            $this->TransTextTask = new AiRecognitionTaskTransTextResult();
            $this->TransTextTask->deserialize($param["TransTextTask"]);
        }

        if (array_key_exists("ObjectTask",$param) and $param["ObjectTask"] !== null) {
            $this->ObjectTask = new AiRecognitionTaskObjectResult();
            $this->ObjectTask->deserialize($param["ObjectTask"]);
        }
    }
}
