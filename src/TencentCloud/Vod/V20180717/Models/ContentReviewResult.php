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
 * The result for intelligent image moderation.
 *
 * @method string getType() Obtain The result type. Valid values:
<li>Porn.Image: Pornographic content in the image</li>
<li>Terrorism.Image: Terrorist content in the image</li>
<li>Political.Image: Politically sensitive content in the image</li>
<li>Porn.Ocr: Pornographic content in the image based on OCR</li>
<li>Terrorism.Ocr: Terrorist content in the image based on OCR</li>
<li>Political.Ocr: Politically sensitive content in the image based on OCR</li>
 * @method void setType(string $Type) Set The result type. Valid values:
<li>Porn.Image: Pornographic content in the image</li>
<li>Terrorism.Image: Terrorist content in the image</li>
<li>Political.Image: Politically sensitive content in the image</li>
<li>Porn.Ocr: Pornographic content in the image based on OCR</li>
<li>Terrorism.Ocr: Terrorist content in the image based on OCR</li>
<li>Political.Ocr: Politically sensitive content in the image based on OCR</li>
 * @method PornImageResult getPornImageResult() Obtain The pornographic content detected in the image. This parameter is valid if `Type` is `Porn.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPornImageResult(PornImageResult $PornImageResult) Set The pornographic content detected in the image. This parameter is valid if `Type` is `Porn.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method TerrorismImageResult getTerrorismImageResult() Obtain The terrorist content detected in the image. This parameter is valid if `Type` is `Terrorism.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTerrorismImageResult(TerrorismImageResult $TerrorismImageResult) Set The terrorist content detected in the image. This parameter is valid if `Type` is `Terrorism.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method PoliticalImageResult getPoliticalImageResult() Obtain The politically sensitive content detected in the image. This parameter is valid if `Type` is `Political.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPoliticalImageResult(PoliticalImageResult $PoliticalImageResult) Set The politically sensitive content detected in the image. This parameter is valid if `Type` is `Political.Image`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method ContentReviewOcrResult getPornOcrResult() Obtain The pornographic content detected in the image based on OCR. This parameter is valid if `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPornOcrResult(ContentReviewOcrResult $PornOcrResult) Set The pornographic content detected in the image based on OCR. This parameter is valid if `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method ContentReviewOcrResult getTerrorismOcrResult() Obtain The terrorist content detected in the image based on OCR. This parameter is valid if `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTerrorismOcrResult(ContentReviewOcrResult $TerrorismOcrResult) Set The terrorist content detected in the image based on OCR. This parameter is valid if `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method ContentReviewOcrResult getPoliticalOcrResult() Obtain The politically sensitive content detected in the image based on OCR. This parameter is valid if `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPoliticalOcrResult(ContentReviewOcrResult $PoliticalOcrResult) Set The politically sensitive content detected in the image based on OCR. This parameter is valid if `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
 */
class ContentReviewResult extends AbstractModel
{
    /**
     * @var string The result type. Valid values:
<li>Porn.Image: Pornographic content in the image</li>
<li>Terrorism.Image: Terrorist content in the image</li>
<li>Political.Image: Politically sensitive content in the image</li>
<li>Porn.Ocr: Pornographic content in the image based on OCR</li>
<li>Terrorism.Ocr: Terrorist content in the image based on OCR</li>
<li>Political.Ocr: Politically sensitive content in the image based on OCR</li>
     */
    public $Type;

    /**
     * @var PornImageResult The pornographic content detected in the image. This parameter is valid if `Type` is `Porn.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PornImageResult;

    /**
     * @var TerrorismImageResult The terrorist content detected in the image. This parameter is valid if `Type` is `Terrorism.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TerrorismImageResult;

    /**
     * @var PoliticalImageResult The politically sensitive content detected in the image. This parameter is valid if `Type` is `Political.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PoliticalImageResult;

    /**
     * @var ContentReviewOcrResult The pornographic content detected in the image based on OCR. This parameter is valid if `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PornOcrResult;

    /**
     * @var ContentReviewOcrResult The terrorist content detected in the image based on OCR. This parameter is valid if `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TerrorismOcrResult;

    /**
     * @var ContentReviewOcrResult The politically sensitive content detected in the image based on OCR. This parameter is valid if `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PoliticalOcrResult;

    /**
     * @param string $Type The result type. Valid values:
<li>Porn.Image: Pornographic content in the image</li>
<li>Terrorism.Image: Terrorist content in the image</li>
<li>Political.Image: Politically sensitive content in the image</li>
<li>Porn.Ocr: Pornographic content in the image based on OCR</li>
<li>Terrorism.Ocr: Terrorist content in the image based on OCR</li>
<li>Political.Ocr: Politically sensitive content in the image based on OCR</li>
     * @param PornImageResult $PornImageResult The pornographic content detected in the image. This parameter is valid if `Type` is `Porn.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param TerrorismImageResult $TerrorismImageResult The terrorist content detected in the image. This parameter is valid if `Type` is `Terrorism.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param PoliticalImageResult $PoliticalImageResult The politically sensitive content detected in the image. This parameter is valid if `Type` is `Political.Image`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param ContentReviewOcrResult $PornOcrResult The pornographic content detected in the image based on OCR. This parameter is valid if `Type` is `Porn.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param ContentReviewOcrResult $TerrorismOcrResult The terrorist content detected in the image based on OCR. This parameter is valid if `Type` is `Terrorism.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param ContentReviewOcrResult $PoliticalOcrResult The politically sensitive content detected in the image based on OCR. This parameter is valid if `Type` is `Political.Ocr`.
Note: This field may return `null`, indicating that no valid value was found.
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
