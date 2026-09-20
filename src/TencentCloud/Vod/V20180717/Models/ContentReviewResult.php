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
 * Result of the image intelligent content identification task.
 *
 * @method string getType() Obtain Result type. Valid values:
<li>Porn.Image: authentication result of offensive content in the image;</li>
<li>Terrorism.Image: authentication result of unsafe information in the image;</li>
<li>Political.Image: authentication result of inappropriate information in the image;</li>
<li>Porn.Ocr: authentication result of offensive content in image OCR text;</li>
<li>Terrorism.Ocr: Authentication result of unsafe information in image OCR text;</li>
<li>Political.Ocr: The authentication result of inappropriate information in the image OCR text.</li>
 * @method void setType(string $Type) Set Result type. Valid values:
<li>Porn.Image: authentication result of offensive content in the image;</li>
<li>Terrorism.Image: authentication result of unsafe information in the image;</li>
<li>Political.Image: authentication result of inappropriate information in the image;</li>
<li>Porn.Ocr: authentication result of offensive content in image OCR text;</li>
<li>Terrorism.Ocr: Authentication result of unsafe information in image OCR text;</li>
<li>Political.Ocr: The authentication result of inappropriate information in the image OCR text.</li>
 * @method PornImageResult getPornImageResult() Obtain Authentication result for offensive content in the image. Valid when Type is Porn.Image.
 * @method void setPornImageResult(PornImageResult $PornImageResult) Set Authentication result for offensive content in the image. Valid when Type is Porn.Image.
 * @method TerrorismImageResult getTerrorismImageResult() Obtain Authentication result for unsafe information in the image. Valid when Type is Terrorism.Image.
 * @method void setTerrorismImageResult(TerrorismImageResult $TerrorismImageResult) Set Authentication result for unsafe information in the image. Valid when Type is Terrorism.Image.
 * @method PoliticalImageResult getPoliticalImageResult() Obtain Authentication of inappropriate information results in the image. Valid when Type is Political.Image.
 * @method void setPoliticalImageResult(PoliticalImageResult $PoliticalImageResult) Set Authentication of inappropriate information results in the image. Valid when Type is Political.Image.
 * @method ContentReviewOcrResult getPornOcrResult() Obtain Authentication result for offensive content in image OCR text. Valid when Type is Porn.Ocr.
 * @method void setPornOcrResult(ContentReviewOcrResult $PornOcrResult) Set Authentication result for offensive content in image OCR text. Valid when Type is Porn.Ocr.
 * @method ContentReviewOcrResult getTerrorismOcrResult() Obtain Authentication result of unsafe information in image OCR. Valid when Type is Terrorism.Ocr.
 * @method void setTerrorismOcrResult(ContentReviewOcrResult $TerrorismOcrResult) Set Authentication result of unsafe information in image OCR. Valid when Type is Terrorism.Ocr.
 * @method ContentReviewOcrResult getPoliticalOcrResult() Obtain The authentication result of inappropriate information in the image OCR text. Valid when Type is Political.Ocr.
 * @method void setPoliticalOcrResult(ContentReviewOcrResult $PoliticalOcrResult) Set The authentication result of inappropriate information in the image OCR text. Valid when Type is Political.Ocr.
 */
class ContentReviewResult extends AbstractModel
{
    /**
     * @var string Result type. Valid values:
<li>Porn.Image: authentication result of offensive content in the image;</li>
<li>Terrorism.Image: authentication result of unsafe information in the image;</li>
<li>Political.Image: authentication result of inappropriate information in the image;</li>
<li>Porn.Ocr: authentication result of offensive content in image OCR text;</li>
<li>Terrorism.Ocr: Authentication result of unsafe information in image OCR text;</li>
<li>Political.Ocr: The authentication result of inappropriate information in the image OCR text.</li>
     */
    public $Type;

    /**
     * @var PornImageResult Authentication result for offensive content in the image. Valid when Type is Porn.Image.
     */
    public $PornImageResult;

    /**
     * @var TerrorismImageResult Authentication result for unsafe information in the image. Valid when Type is Terrorism.Image.
     */
    public $TerrorismImageResult;

    /**
     * @var PoliticalImageResult Authentication of inappropriate information results in the image. Valid when Type is Political.Image.
     */
    public $PoliticalImageResult;

    /**
     * @var ContentReviewOcrResult Authentication result for offensive content in image OCR text. Valid when Type is Porn.Ocr.
     */
    public $PornOcrResult;

    /**
     * @var ContentReviewOcrResult Authentication result of unsafe information in image OCR. Valid when Type is Terrorism.Ocr.
     */
    public $TerrorismOcrResult;

    /**
     * @var ContentReviewOcrResult The authentication result of inappropriate information in the image OCR text. Valid when Type is Political.Ocr.
     */
    public $PoliticalOcrResult;

    /**
     * @param string $Type Result type. Valid values:
<li>Porn.Image: authentication result of offensive content in the image;</li>
<li>Terrorism.Image: authentication result of unsafe information in the image;</li>
<li>Political.Image: authentication result of inappropriate information in the image;</li>
<li>Porn.Ocr: authentication result of offensive content in image OCR text;</li>
<li>Terrorism.Ocr: Authentication result of unsafe information in image OCR text;</li>
<li>Political.Ocr: The authentication result of inappropriate information in the image OCR text.</li>
     * @param PornImageResult $PornImageResult Authentication result for offensive content in the image. Valid when Type is Porn.Image.
     * @param TerrorismImageResult $TerrorismImageResult Authentication result for unsafe information in the image. Valid when Type is Terrorism.Image.
     * @param PoliticalImageResult $PoliticalImageResult Authentication of inappropriate information results in the image. Valid when Type is Political.Image.
     * @param ContentReviewOcrResult $PornOcrResult Authentication result for offensive content in image OCR text. Valid when Type is Porn.Ocr.
     * @param ContentReviewOcrResult $TerrorismOcrResult Authentication result of unsafe information in image OCR. Valid when Type is Terrorism.Ocr.
     * @param ContentReviewOcrResult $PoliticalOcrResult The authentication result of inappropriate information in the image OCR text. Valid when Type is Political.Ocr.
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

        if (array_key_exists("PornImageResult",$param) and $param["PornImageResult"] !== null) {
            $this->PornImageResult = new PornImageResult();
            $this->PornImageResult->deserialize($param["PornImageResult"]);
        }

        if (array_key_exists("TerrorismImageResult",$param) and $param["TerrorismImageResult"] !== null) {
            $this->TerrorismImageResult = new TerrorismImageResult();
            $this->TerrorismImageResult->deserialize($param["TerrorismImageResult"]);
        }

        if (array_key_exists("PoliticalImageResult",$param) and $param["PoliticalImageResult"] !== null) {
            $this->PoliticalImageResult = new PoliticalImageResult();
            $this->PoliticalImageResult->deserialize($param["PoliticalImageResult"]);
        }

        if (array_key_exists("PornOcrResult",$param) and $param["PornOcrResult"] !== null) {
            $this->PornOcrResult = new ContentReviewOcrResult();
            $this->PornOcrResult->deserialize($param["PornOcrResult"]);
        }

        if (array_key_exists("TerrorismOcrResult",$param) and $param["TerrorismOcrResult"] !== null) {
            $this->TerrorismOcrResult = new ContentReviewOcrResult();
            $this->TerrorismOcrResult->deserialize($param["TerrorismOcrResult"]);
        }

        if (array_key_exists("PoliticalOcrResult",$param) and $param["PoliticalOcrResult"] !== null) {
            $this->PoliticalOcrResult = new ContentReviewOcrResult();
            $this->PoliticalOcrResult->deserialize($param["PoliticalOcrResult"]);
        }
    }
}
