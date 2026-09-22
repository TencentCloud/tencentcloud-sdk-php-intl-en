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
 * Audio/video moderation result
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Porn: whether image recognition involves offensive content</li>
<li>Terrorism: image recognition for unsafe information</li>
<li>Political: Whether image recognition involves inappropriate information</li>
<li>Porn.Asr: ASR text (text in audio) authentication for whether it involves offensive content</li>
<li>Porn.Ocr: whether Ocr text identification involves offensive content</li>
<li>Political.Asr: ASR text (text in audio) authentication whether it involves inappropriate information</li>
<li>Political.Ocr: whether Ocr text identification involves inappropriate information</li>
<li>Terrorism.Ocr: whether Ocr text identification involves unsafe information</li>
<li>Prohibited.Asr: Prohibited information recognition for ASR text (text in audio)</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Porn: whether image recognition involves offensive content</li>
<li>Terrorism: image recognition for unsafe information</li>
<li>Political: Whether image recognition involves inappropriate information</li>
<li>Porn.Asr: ASR text (text in audio) authentication for whether it involves offensive content</li>
<li>Porn.Ocr: whether Ocr text identification involves offensive content</li>
<li>Political.Asr: ASR text (text in audio) authentication whether it involves inappropriate information</li>
<li>Political.Ocr: whether Ocr text identification involves inappropriate information</li>
<li>Terrorism.Ocr: whether Ocr text identification involves unsafe information</li>
<li>Prohibited.Asr: Prohibited information recognition for ASR text (text in audio)</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
 * @method AiReviewTaskPornResult getPornTask() Obtain Query result of a video audio/video moderation task (visual contains offensive content). Valid when the task type is Porn.
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) Set Query result of a video audio/video moderation task (visual contains offensive content). Valid when the task type is Porn.
 * @method AiReviewTaskTerrorismResult getTerrorismTask() Obtain Query result of a video audio/video moderation task (frames involving unsafe information). Valid when the task type is Terrorism.
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) Set Query result of a video audio/video moderation task (frames involving unsafe information). Valid when the task type is Terrorism.
 * @method AiReviewTaskPoliticalResult getPoliticalTask() Obtain Query result of the video audio/video moderation task (visuals involving inappropriate information). Valid when the task type is Political.
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) Set Query result of the video audio/video moderation task (visuals involving inappropriate information). Valid when the task type is Political.
 * @method AiReviewTaskPornAsrResult getPornAsrTask() Obtain Query result of a video audio/video moderation task (ASR text involves offensive content). Valid when the task type is Porn.Asr.
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) Set Query result of a video audio/video moderation task (ASR text involves offensive content). Valid when the task type is Porn.Asr.
 * @method AiReviewTaskPornOcrResult getPornOcrTask() Obtain Query result of a video audio/video moderation task (OCR text contains offensive content). Valid when the task type is Porn.Ocr.
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) Set Query result of a video audio/video moderation task (OCR text contains offensive content). Valid when the task type is Porn.Ocr.
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() Obtain Query result of the video audio/video moderation task (ASR text involving inappropriate information). Valid when the task type is Political.Asr.
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) Set Query result of the video audio/video moderation task (ASR text involving inappropriate information). Valid when the task type is Political.Asr.
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() Obtain Query result of a video/audio moderation task (OCR text involving inappropriate information). Valid when the task type is Political.Ocr.
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) Set Query result of a video/audio moderation task (OCR text involving inappropriate information). Valid when the task type is Political.Ocr.
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() Obtain Query result of a video/audio moderation task (OCR text involving unsafe information). Valid when the task type is Terrorism.Ocr.
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) Set Query result of a video/audio moderation task (OCR text involving unsafe information). Valid when the task type is Terrorism.Ocr.
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() Obtain Query result of a video audio/video moderation OCR text prohibited task. Valid when the task type is Prohibited.Ocr.
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) Set Query result of a video audio/video moderation OCR text prohibited task. Valid when the task type is Prohibited.Ocr.
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() Obtain Query result of the ASR text prohibited task in video moderation. Valid when the task type is Prohibited.Asr.
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) Set Query result of the ASR text prohibited task in video moderation. Valid when the task type is Prohibited.Asr.
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Porn: whether image recognition involves offensive content</li>
<li>Terrorism: image recognition for unsafe information</li>
<li>Political: Whether image recognition involves inappropriate information</li>
<li>Porn.Asr: ASR text (text in audio) authentication for whether it involves offensive content</li>
<li>Porn.Ocr: whether Ocr text identification involves offensive content</li>
<li>Political.Asr: ASR text (text in audio) authentication whether it involves inappropriate information</li>
<li>Political.Ocr: whether Ocr text identification involves inappropriate information</li>
<li>Terrorism.Ocr: whether Ocr text identification involves unsafe information</li>
<li>Prohibited.Asr: Prohibited information recognition for ASR text (text in audio)</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
     */
    public $Type;

    /**
     * @var AiReviewTaskPornResult Query result of a video audio/video moderation task (visual contains offensive content). Valid when the task type is Porn.
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult Query result of a video audio/video moderation task (frames involving unsafe information). Valid when the task type is Terrorism.
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult Query result of the video audio/video moderation task (visuals involving inappropriate information). Valid when the task type is Political.
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult Query result of a video audio/video moderation task (ASR text involves offensive content). Valid when the task type is Porn.Asr.
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult Query result of a video audio/video moderation task (OCR text contains offensive content). Valid when the task type is Porn.Ocr.
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult Query result of the video audio/video moderation task (ASR text involving inappropriate information). Valid when the task type is Political.Asr.
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult Query result of a video/audio moderation task (OCR text involving inappropriate information). Valid when the task type is Political.Ocr.
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult Query result of a video/audio moderation task (OCR text involving unsafe information). Valid when the task type is Terrorism.Ocr.
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult Query result of a video audio/video moderation OCR text prohibited task. Valid when the task type is Prohibited.Ocr.
     */
    public $ProhibitedOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult Query result of the ASR text prohibited task in video moderation. Valid when the task type is Prohibited.Asr.
     */
    public $ProhibitedAsrTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Porn: whether image recognition involves offensive content</li>
<li>Terrorism: image recognition for unsafe information</li>
<li>Political: Whether image recognition involves inappropriate information</li>
<li>Porn.Asr: ASR text (text in audio) authentication for whether it involves offensive content</li>
<li>Porn.Ocr: whether Ocr text identification involves offensive content</li>
<li>Political.Asr: ASR text (text in audio) authentication whether it involves inappropriate information</li>
<li>Political.Ocr: whether Ocr text identification involves inappropriate information</li>
<li>Terrorism.Ocr: whether Ocr text identification involves unsafe information</li>
<li>Prohibited.Asr: Prohibited information recognition for ASR text (text in audio)</li>
<li>Prohibited.Ocr: OCR text prohibited information recognition</li>
     * @param AiReviewTaskPornResult $PornTask Query result of a video audio/video moderation task (visual contains offensive content). Valid when the task type is Porn.
     * @param AiReviewTaskTerrorismResult $TerrorismTask Query result of a video audio/video moderation task (frames involving unsafe information). Valid when the task type is Terrorism.
     * @param AiReviewTaskPoliticalResult $PoliticalTask Query result of the video audio/video moderation task (visuals involving inappropriate information). Valid when the task type is Political.
     * @param AiReviewTaskPornAsrResult $PornAsrTask Query result of a video audio/video moderation task (ASR text involves offensive content). Valid when the task type is Porn.Asr.
     * @param AiReviewTaskPornOcrResult $PornOcrTask Query result of a video audio/video moderation task (OCR text contains offensive content). Valid when the task type is Porn.Ocr.
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask Query result of the video audio/video moderation task (ASR text involving inappropriate information). Valid when the task type is Political.Asr.
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask Query result of a video/audio moderation task (OCR text involving inappropriate information). Valid when the task type is Political.Ocr.
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask Query result of a video/audio moderation task (OCR text involving unsafe information). Valid when the task type is Terrorism.Ocr.
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask Query result of a video audio/video moderation OCR text prohibited task. Valid when the task type is Prohibited.Ocr.
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask Query result of the ASR text prohibited task in video moderation. Valid when the task type is Prohibited.Asr.
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

        if (array_key_exists("ProhibitedOcrTask",$param) and $param["ProhibitedOcrTask"] !== null) {
            $this->ProhibitedOcrTask = new AiReviewTaskProhibitedOcrResult();
            $this->ProhibitedOcrTask->deserialize($param["ProhibitedOcrTask"]);
        }

        if (array_key_exists("ProhibitedAsrTask",$param) and $param["ProhibitedAsrTask"] !== null) {
            $this->ProhibitedAsrTask = new AiReviewTaskProhibitedAsrResult();
            $this->ProhibitedAsrTask->deserialize($param["ProhibitedAsrTask"]);
        }
    }
}
