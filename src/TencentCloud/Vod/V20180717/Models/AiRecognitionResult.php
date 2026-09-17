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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method AiRecognitionTaskHeadTailResult getHeadTailTask() Obtain 
 * @method void setHeadTailTask(AiRecognitionTaskHeadTailResult $HeadTailTask) Set 
 * @method AiRecognitionTaskSegmentResult getSegmentTask() Obtain 
 * @method void setSegmentTask(AiRecognitionTaskSegmentResult $SegmentTask) Set 
 * @method AiRecognitionTaskFaceResult getFaceTask() Obtain 
 * @method void setFaceTask(AiRecognitionTaskFaceResult $FaceTask) Set 
 * @method AiRecognitionTaskAsrWordsResult getAsrWordsTask() Obtain 
 * @method void setAsrWordsTask(AiRecognitionTaskAsrWordsResult $AsrWordsTask) Set 
 * @method AiRecognitionTaskAsrFullTextResult getAsrFullTextTask() Obtain 
 * @method void setAsrFullTextTask(AiRecognitionTaskAsrFullTextResult $AsrFullTextTask) Set 
 * @method AiRecognitionTaskAsrTranslateResult getAsrTranslateTask() Obtain 
 * @method void setAsrTranslateTask(AiRecognitionTaskAsrTranslateResult $AsrTranslateTask) Set 
 * @method AiRecognitionTaskOcrWordsResult getOcrWordsTask() Obtain 
 * @method void setOcrWordsTask(AiRecognitionTaskOcrWordsResult $OcrWordsTask) Set 
 * @method AiRecognitionTaskOcrFullTextResult getOcrFullTextTask() Obtain 
 * @method void setOcrFullTextTask(AiRecognitionTaskOcrFullTextResult $OcrFullTextTask) Set 
 * @method AiRecognitionTaskObjectResult getObjectTask() Obtain 
 * @method void setObjectTask(AiRecognitionTaskObjectResult $ObjectTask) Set 
 */
class AiRecognitionResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var AiRecognitionTaskHeadTailResult 
     */
    public $HeadTailTask;

    /**
     * @var AiRecognitionTaskSegmentResult 
     */
    public $SegmentTask;

    /**
     * @var AiRecognitionTaskFaceResult 
     */
    public $FaceTask;

    /**
     * @var AiRecognitionTaskAsrWordsResult 
     */
    public $AsrWordsTask;

    /**
     * @var AiRecognitionTaskAsrFullTextResult 
     */
    public $AsrFullTextTask;

    /**
     * @var AiRecognitionTaskAsrTranslateResult 
     */
    public $AsrTranslateTask;

    /**
     * @var AiRecognitionTaskOcrWordsResult 
     */
    public $OcrWordsTask;

    /**
     * @var AiRecognitionTaskOcrFullTextResult 
     */
    public $OcrFullTextTask;

    /**
     * @var AiRecognitionTaskObjectResult 
     */
    public $ObjectTask;

    /**
     * @param string $Type 
     * @param AiRecognitionTaskHeadTailResult $HeadTailTask 
     * @param AiRecognitionTaskSegmentResult $SegmentTask 
     * @param AiRecognitionTaskFaceResult $FaceTask 
     * @param AiRecognitionTaskAsrWordsResult $AsrWordsTask 
     * @param AiRecognitionTaskAsrFullTextResult $AsrFullTextTask 
     * @param AiRecognitionTaskAsrTranslateResult $AsrTranslateTask 
     * @param AiRecognitionTaskOcrWordsResult $OcrWordsTask 
     * @param AiRecognitionTaskOcrFullTextResult $OcrFullTextTask 
     * @param AiRecognitionTaskObjectResult $ObjectTask 
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
