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
 * Intelligent recognition result
 *
 * @method string getType() Obtain Task type. Valid values:
<li>`Porn`: porn information recognition in images</li>
<li>`Terrorism`: terrorism information recognition in images</li>
<li>`Political`: politically sensitive information recognition in images</li>
<li>`Porn.Asr`: ASR-based porn information recognition in speech</li>
<li>`Porn.Ocr`: OCR-based porn information recognition in text</li>
<li>`Political.Asr`: ASR-based politically sensitive information recognition in speech</li>
<li>`Political.Ocr`: OCR-based politically sensitive information recognition in text</li>
<li>`Terrorism.Ocr`: OCR-based terrorism information recognition in text</li>
<li>`Prohibited.Asr`: ASR-based prohibited information recognition in speech</li>
<li>`Prohibited.Ocr`: OCR-based prohibited information recognition in text</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>`Porn`: porn information recognition in images</li>
<li>`Terrorism`: terrorism information recognition in images</li>
<li>`Political`: politically sensitive information recognition in images</li>
<li>`Porn.Asr`: ASR-based porn information recognition in speech</li>
<li>`Porn.Ocr`: OCR-based porn information recognition in text</li>
<li>`Political.Asr`: ASR-based politically sensitive information recognition in speech</li>
<li>`Political.Ocr`: OCR-based politically sensitive information recognition in text</li>
<li>`Terrorism.Ocr`: OCR-based terrorism information recognition in text</li>
<li>`Prohibited.Asr`: ASR-based prohibited information recognition in speech</li>
<li>`Prohibited.Ocr`: OCR-based prohibited information recognition in text</li>
 * @method AiReviewTaskPornResult getPornTask() Obtain Result for intelligent recognition of pornographic content in images. This parameter is valid when `Type` is `Porn`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) Set Result for intelligent recognition of pornographic content in images. This parameter is valid when `Type` is `Porn`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskTerrorismResult getTerrorismTask() Obtain Result for intelligent recognition of terrorism content in images. This parameter is valid when `Type` is `Terrorism`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) Set Result for intelligent recognition of terrorism content in images. This parameter is valid when `Type` is `Terrorism`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskPoliticalResult getPoliticalTask() Obtain Result for intelligent recognition of politically sensitive content in images. This parameter is valid when `Type` is `Political`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) Set Result for intelligent recognition of politically sensitive content in images. This parameter is valid when `Type` is `Political`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskPornAsrResult getPornAsrTask() Obtain Result for ASR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) Set Result for ASR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskPornOcrResult getPornOcrTask() Obtain Result for OCR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) Set Result for OCR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() Obtain Result for ASR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) Set Result for ASR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() Obtain Result for OCR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) Set Result for OCR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() Obtain Result for OCR-based recognition of terrorism content. This parameter is valid when `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) Set Result for OCR-based recognition of terrorism content. This parameter is valid when `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() Obtain Result for OCR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) Set Result for OCR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() Obtain Result for ASR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) Set Result for ASR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>`Porn`: porn information recognition in images</li>
<li>`Terrorism`: terrorism information recognition in images</li>
<li>`Political`: politically sensitive information recognition in images</li>
<li>`Porn.Asr`: ASR-based porn information recognition in speech</li>
<li>`Porn.Ocr`: OCR-based porn information recognition in text</li>
<li>`Political.Asr`: ASR-based politically sensitive information recognition in speech</li>
<li>`Political.Ocr`: OCR-based politically sensitive information recognition in text</li>
<li>`Terrorism.Ocr`: OCR-based terrorism information recognition in text</li>
<li>`Prohibited.Asr`: ASR-based prohibited information recognition in speech</li>
<li>`Prohibited.Ocr`: OCR-based prohibited information recognition in text</li>
     */
    public $Type;

    /**
     * @var AiReviewTaskPornResult Result for intelligent recognition of pornographic content in images. This parameter is valid when `Type` is `Porn`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult Result for intelligent recognition of terrorism content in images. This parameter is valid when `Type` is `Terrorism`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult Result for intelligent recognition of politically sensitive content in images. This parameter is valid when `Type` is `Political`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult Result for ASR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult Result for OCR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult Result for ASR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult Result for OCR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult Result for OCR-based recognition of terrorism content. This parameter is valid when `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult Result for OCR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ProhibitedOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult Result for ASR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ProhibitedAsrTask;

    /**
     * @param string $Type Task type. Valid values:
<li>`Porn`: porn information recognition in images</li>
<li>`Terrorism`: terrorism information recognition in images</li>
<li>`Political`: politically sensitive information recognition in images</li>
<li>`Porn.Asr`: ASR-based porn information recognition in speech</li>
<li>`Porn.Ocr`: OCR-based porn information recognition in text</li>
<li>`Political.Asr`: ASR-based politically sensitive information recognition in speech</li>
<li>`Political.Ocr`: OCR-based politically sensitive information recognition in text</li>
<li>`Terrorism.Ocr`: OCR-based terrorism information recognition in text</li>
<li>`Prohibited.Asr`: ASR-based prohibited information recognition in speech</li>
<li>`Prohibited.Ocr`: OCR-based prohibited information recognition in text</li>
     * @param AiReviewTaskPornResult $PornTask Result for intelligent recognition of pornographic content in images. This parameter is valid when `Type` is `Porn`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskTerrorismResult $TerrorismTask Result for intelligent recognition of terrorism content in images. This parameter is valid when `Type` is `Terrorism`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskPoliticalResult $PoliticalTask Result for intelligent recognition of politically sensitive content in images. This parameter is valid when `Type` is `Political`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskPornAsrResult $PornAsrTask Result for ASR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskPornOcrResult $PornOcrTask Result for OCR-based recognition of pornographic content. This parameter is valid when `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask Result for ASR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask Result for OCR-based recognition of politically sensitive content. This parameter is valid when `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask Result for OCR-based recognition of terrorism content. This parameter is valid when `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask Result for OCR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Ocr`.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask Result for ASR-based recognition of banned content. This parameter is valid when `Type` is `Prohibited.Asr`.
Note: This field may return `null`, indicating that no valid value can be found.
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
