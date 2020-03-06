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
 * @method string getType() Obtain Task type. Valid values:
<li>Porn: porn information detection in image</li>
<li>Terrorism: terrorism information detection in image</li>
<li>Political: politically sensitive information detection in image</li>
<li>Porn.Asr: ASR-based porn information detection in speech</li>
<li>Porn.Ocr: OCR-based porn information detection in text</li>
<li>Political.Asr: ASR-based politically sensitive information detection in speech</li>
<li>Political.Ocr: OCR-based politically sensitive information detection in text</li>
<li>Terrorism.Ocr: OCR-based terrorism information in text</li>
<li>Prohibited.Asr: ASR-based prohibited information detection in speech</li>
<li>Prohibited.Ocr: OCR-based prohibited information detection in text</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Porn: porn information detection in image</li>
<li>Terrorism: terrorism information detection in image</li>
<li>Political: politically sensitive information detection in image</li>
<li>Porn.Asr: ASR-based porn information detection in speech</li>
<li>Porn.Ocr: OCR-based porn information detection in text</li>
<li>Political.Asr: ASR-based politically sensitive information detection in speech</li>
<li>Political.Ocr: OCR-based politically sensitive information detection in text</li>
<li>Terrorism.Ocr: OCR-based terrorism information in text</li>
<li>Prohibited.Asr: ASR-based prohibited information detection in speech</li>
<li>Prohibited.Ocr: OCR-based prohibited information detection in text</li>
 * @method AiReviewTaskPornResult getPornTask() Obtain Query result of intelligent porn information detection in video image task in video content audit, which is valid when task type is `Porn`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) Set Query result of intelligent porn information detection in video image task in video content audit, which is valid when task type is `Porn`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskTerrorismResult getTerrorismTask() Obtain Query result of intelligent terrorism information detection in video image task in video content audit, which is valid when task type is `Terrorism`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) Set Query result of intelligent terrorism information detection in video image task in video content audit, which is valid when task type is `Terrorism`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskPoliticalResult getPoliticalTask() Obtain Query result of intelligent politically sensitive information detection in video image task in video content audit, which is valid when task type is `Political`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) Set Query result of intelligent politically sensitive information detection in video image task in video content audit, which is valid when task type is `Political`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskPornAsrResult getPornAsrTask() Obtain Query result of ASR-based porn information detection in speech task in video content audit, which is valid when task type is `Porn.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) Set Query result of ASR-based porn information detection in speech task in video content audit, which is valid when task type is `Porn.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskPornOcrResult getPornOcrTask() Obtain Query result of OCR-based porn information detection in text task in video content audit, which is valid when task type is `Porn.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) Set Query result of OCR-based porn information detection in text task in video content audit, which is valid when task type is `Porn.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() Obtain Query result of ASR-based politically sensitive information detection in speech task in video content audit, which is valid when task type is `Political.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) Set Query result of ASR-based politically sensitive information detection in speech task in video content audit, which is valid when task type is `Political.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() Obtain Query result of OCR-based politically sensitive information detection in text task in video content audit, which is valid when task type is `Political.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) Set Query result of OCR-based politically sensitive information detection in text task in video content audit, which is valid when task type is `Political.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() Obtain Query result of OCR-based terrorism information detection in text task in video content audit, which is valid when task type is `Terrorism.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) Set Query result of OCR-based terrorism information detection in text task in video content audit, which is valid when task type is `Terrorism.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() Obtain Query result of ASR-based prohibited information detection in speech task in video content audit, which is valid when task type is `Prohibited.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) Set Query result of ASR-based prohibited information detection in speech task in video content audit, which is valid when task type is `Prohibited.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() Obtain Query result of OCR-based prohibited information detection in text task in video content audit, which is valid when task type is `Prohibited.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) Set Query result of OCR-based prohibited information detection in text task in video content audit, which is valid when task type is `Prohibited.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Content audit result
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Porn: porn information detection in image</li>
<li>Terrorism: terrorism information detection in image</li>
<li>Political: politically sensitive information detection in image</li>
<li>Porn.Asr: ASR-based porn information detection in speech</li>
<li>Porn.Ocr: OCR-based porn information detection in text</li>
<li>Political.Asr: ASR-based politically sensitive information detection in speech</li>
<li>Political.Ocr: OCR-based politically sensitive information detection in text</li>
<li>Terrorism.Ocr: OCR-based terrorism information in text</li>
<li>Prohibited.Asr: ASR-based prohibited information detection in speech</li>
<li>Prohibited.Ocr: OCR-based prohibited information detection in text</li>
     */
    public $Type;

    /**
     * @var AiReviewTaskPornResult Query result of intelligent porn information detection in video image task in video content audit, which is valid when task type is `Porn`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult Query result of intelligent terrorism information detection in video image task in video content audit, which is valid when task type is `Terrorism`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult Query result of intelligent politically sensitive information detection in video image task in video content audit, which is valid when task type is `Political`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult Query result of ASR-based porn information detection in speech task in video content audit, which is valid when task type is `Porn.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult Query result of OCR-based porn information detection in text task in video content audit, which is valid when task type is `Porn.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult Query result of ASR-based politically sensitive information detection in speech task in video content audit, which is valid when task type is `Political.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult Query result of OCR-based politically sensitive information detection in text task in video content audit, which is valid when task type is `Political.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult Query result of OCR-based terrorism information detection in text task in video content audit, which is valid when task type is `Terrorism.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult Query result of ASR-based prohibited information detection in speech task in video content audit, which is valid when task type is `Prohibited.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProhibitedAsrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult Query result of OCR-based prohibited information detection in text task in video content audit, which is valid when task type is `Prohibited.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProhibitedOcrTask;
    /**
     * @param string $Type Task type. Valid values:
<li>Porn: porn information detection in image</li>
<li>Terrorism: terrorism information detection in image</li>
<li>Political: politically sensitive information detection in image</li>
<li>Porn.Asr: ASR-based porn information detection in speech</li>
<li>Porn.Ocr: OCR-based porn information detection in text</li>
<li>Political.Asr: ASR-based politically sensitive information detection in speech</li>
<li>Political.Ocr: OCR-based politically sensitive information detection in text</li>
<li>Terrorism.Ocr: OCR-based terrorism information in text</li>
<li>Prohibited.Asr: ASR-based prohibited information detection in speech</li>
<li>Prohibited.Ocr: OCR-based prohibited information detection in text</li>
     * @param AiReviewTaskPornResult $PornTask Query result of intelligent porn information detection in video image task in video content audit, which is valid when task type is `Porn`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskTerrorismResult $TerrorismTask Query result of intelligent terrorism information detection in video image task in video content audit, which is valid when task type is `Terrorism`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskPoliticalResult $PoliticalTask Query result of intelligent politically sensitive information detection in video image task in video content audit, which is valid when task type is `Political`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskPornAsrResult $PornAsrTask Query result of ASR-based porn information detection in speech task in video content audit, which is valid when task type is `Porn.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskPornOcrResult $PornOcrTask Query result of OCR-based porn information detection in text task in video content audit, which is valid when task type is `Porn.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask Query result of ASR-based politically sensitive information detection in speech task in video content audit, which is valid when task type is `Political.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask Query result of OCR-based politically sensitive information detection in text task in video content audit, which is valid when task type is `Political.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask Query result of OCR-based terrorism information detection in text task in video content audit, which is valid when task type is `Terrorism.Ocr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask Query result of ASR-based prohibited information detection in speech task in video content audit, which is valid when task type is `Prohibited.Asr`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask Query result of OCR-based prohibited information detection in text task in video content audit, which is valid when task type is `Prohibited.Ocr`.
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
