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
 * Content moderation result
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Porn: porn detection.</li>
<li>Terrorism: sensitive image.</li>
<li>Political: sensitive image.</li>
<li>Porn.Asr: Pornography detection in ASR text</li>
<li>Porn.Ocr: Pornography detection in OCR text</li>
<li>Political.Asr: ASR text sensitivity</li>
<li>Political.Ocr: OCR text sensitivity</li>
<li>Terrorism.Ocr: OCR text sensitivity</li>
<li>Prohibited.Asr: ASR text prohibited information recognition</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Porn: porn detection.</li>
<li>Terrorism: sensitive image.</li>
<li>Political: sensitive image.</li>
<li>Porn.Asr: Pornography detection in ASR text</li>
<li>Porn.Ocr: Pornography detection in OCR text</li>
<li>Political.Asr: ASR text sensitivity</li>
<li>Political.Ocr: OCR text sensitivity</li>
<li>Terrorism.Ocr: OCR text sensitivity</li>
<li>Prohibited.Asr: ASR text prohibited information recognition</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
 * @method float getSampleRate() Obtain Sampling frequency, i.e., the number of frames captured per second for video review.
 * @method void setSampleRate(float $SampleRate) Set Sampling frequency, i.e., the number of frames captured per second for video review.
 * @method float getDuration() Obtain Video duration for review, in seconds.
 * @method void setDuration(float $Duration) Set Video duration for review, in seconds.
 * @method AiReviewTaskPornResult getPornTask() Obtain 
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) Set 
 * @method AiReviewTaskTerrorismResult getTerrorismTask() Obtain 
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) Set 
 * @method AiReviewTaskPoliticalResult getPoliticalTask() Obtain 
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) Set 
 * @method AiReviewTaskPornAsrResult getPornAsrTask() Obtain 
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) Set 
 * @method AiReviewTaskPornOcrResult getPornOcrTask() Obtain 
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) Set 
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() Obtain 
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) Set 
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() Obtain 
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) Set 
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() Obtain 
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) Set 
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() Obtain 
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) Set 
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() Obtain 
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) Set 
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Porn: porn detection.</li>
<li>Terrorism: sensitive image.</li>
<li>Political: sensitive image.</li>
<li>Porn.Asr: Pornography detection in ASR text</li>
<li>Porn.Ocr: Pornography detection in OCR text</li>
<li>Political.Asr: ASR text sensitivity</li>
<li>Political.Ocr: OCR text sensitivity</li>
<li>Terrorism.Ocr: OCR text sensitivity</li>
<li>Prohibited.Asr: ASR text prohibited information recognition</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
     */
    public $Type;

    /**
     * @var float Sampling frequency, i.e., the number of frames captured per second for video review.
     */
    public $SampleRate;

    /**
     * @var float Video duration for review, in seconds.
     */
    public $Duration;

    /**
     * @var AiReviewTaskPornResult 
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult 
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult 
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult 
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult 
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult 
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult 
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult 
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult 
     */
    public $ProhibitedAsrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult 
     */
    public $ProhibitedOcrTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Porn: porn detection.</li>
<li>Terrorism: sensitive image.</li>
<li>Political: sensitive image.</li>
<li>Porn.Asr: Pornography detection in ASR text</li>
<li>Porn.Ocr: Pornography detection in OCR text</li>
<li>Political.Asr: ASR text sensitivity</li>
<li>Political.Ocr: OCR text sensitivity</li>
<li>Terrorism.Ocr: OCR text sensitivity</li>
<li>Prohibited.Asr: ASR text prohibited information recognition</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
     * @param float $SampleRate Sampling frequency, i.e., the number of frames captured per second for video review.
     * @param float $Duration Video duration for review, in seconds.
     * @param AiReviewTaskPornResult $PornTask 
     * @param AiReviewTaskTerrorismResult $TerrorismTask 
     * @param AiReviewTaskPoliticalResult $PoliticalTask 
     * @param AiReviewTaskPornAsrResult $PornAsrTask 
     * @param AiReviewTaskPornOcrResult $PornOcrTask 
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask 
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask 
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask 
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask 
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask 
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

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("PornTask",$param) and $param["PornTask"] !== null) {
            $this->PornTask = new AiReviewTaskPornResult();
            $this->PornTask->deserialize($param["PornTask"]);
        }

        if (array_key_exists("TerrorismTask",$param) and $param["TerrorismTask"] !== null) {
            $this->TerrorismTask = new AiReviewTaskTerrorismResult();
            $this->TerrorismTask->deserialize($param["TerrorismTask"]);
        }

        if (array_key_exists("PoliticalTask",$param) and $param["PoliticalTask"] !== null) {
            $this->PoliticalTask = new AiReviewTaskPoliticalResult();
            $this->PoliticalTask->deserialize($param["PoliticalTask"]);
        }

        if (array_key_exists("PornAsrTask",$param) and $param["PornAsrTask"] !== null) {
            $this->PornAsrTask = new AiReviewTaskPornAsrResult();
            $this->PornAsrTask->deserialize($param["PornAsrTask"]);
        }

        if (array_key_exists("PornOcrTask",$param) and $param["PornOcrTask"] !== null) {
            $this->PornOcrTask = new AiReviewTaskPornOcrResult();
            $this->PornOcrTask->deserialize($param["PornOcrTask"]);
        }

        if (array_key_exists("PoliticalAsrTask",$param) and $param["PoliticalAsrTask"] !== null) {
            $this->PoliticalAsrTask = new AiReviewTaskPoliticalAsrResult();
            $this->PoliticalAsrTask->deserialize($param["PoliticalAsrTask"]);
        }

        if (array_key_exists("PoliticalOcrTask",$param) and $param["PoliticalOcrTask"] !== null) {
            $this->PoliticalOcrTask = new AiReviewTaskPoliticalOcrResult();
            $this->PoliticalOcrTask->deserialize($param["PoliticalOcrTask"]);
        }

        if (array_key_exists("TerrorismOcrTask",$param) and $param["TerrorismOcrTask"] !== null) {
            $this->TerrorismOcrTask = new AiReviewTaskTerrorismOcrResult();
            $this->TerrorismOcrTask->deserialize($param["TerrorismOcrTask"]);
        }

        if (array_key_exists("ProhibitedAsrTask",$param) and $param["ProhibitedAsrTask"] !== null) {
            $this->ProhibitedAsrTask = new AiReviewTaskProhibitedAsrResult();
            $this->ProhibitedAsrTask->deserialize($param["ProhibitedAsrTask"]);
        }

        if (array_key_exists("ProhibitedOcrTask",$param) and $param["ProhibitedOcrTask"] !== null) {
            $this->ProhibitedOcrTask = new AiReviewTaskProhibitedOcrResult();
            $this->ProhibitedOcrTask->deserialize($param["ProhibitedOcrTask"]);
        }
    }
}
