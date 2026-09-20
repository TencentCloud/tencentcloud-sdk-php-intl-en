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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of a single document in the document information
 *
 * @method boolean getIsPass() Obtain <p>Whether the identity authentication or OCR process is successful.</p>
 * @method void setIsPass(boolean $IsPass) Set <p>Whether the identity authentication or OCR process is successful.</p>
 * @method string getCardImageBase64() Obtain <p>Base64 of the front image of the identity document</p>
 * @method void setCardImageBase64(string $CardImageBase64) Set <p>Base64 of the front image of the identity document</p>
 * @method CardInfo getCardInfo() Obtain <p>ID document recognition result</p>
 * @method void setCardInfo(CardInfo $CardInfo) Set <p>ID document recognition result</p>
 * @method NormalCardInfo getNormalCardInfo() Obtain <p>ID document recognition result (when CheckMode value is 4, the OriginalCardInfo field is returned; in other scenarios, the current field is returned)</p>
 * @method void setNormalCardInfo(NormalCardInfo $NormalCardInfo) Set <p>ID document recognition result (when CheckMode value is 4, the OriginalCardInfo field is returned; in other scenarios, the current field is returned)</p>
 * @method string getRequestId() Obtain <p>Request id</p>
 * @method void setRequestId(string $RequestId) Set <p>Request id</p>
 * @method string getCardCutImageBase64() Obtain <p>Base64 of the front cropped image of the identity document</p>
 * @method void setCardCutImageBase64(string $CardCutImageBase64) Set <p>Base64 of the front cropped image of the identity document</p>
 * @method string getCardBackCutImageBase64() Obtain <p>Base64 of the edge-cropped image of the back of an identity document</p>
 * @method void setCardBackCutImageBase64(string $CardBackCutImageBase64) Set <p>Base64 of the edge-cropped image of the back of an identity document</p>
 * @method array getWarnCardInfos() Obtain <p>Alarm code</p><p>Enumeration value:</p><ul><li>-9101: alarm for incomplete document border</li><li>-9102: alarm for document photocopy</li><li>-9103: alarm for document rephotographing</li><li>-9104: document PS alarm</li><li>-9107: document reflective alarm</li><li>-9108: alarm for blurry document</li><li>-9109: alarm capability not enabled</li></ul>
 * @method void setWarnCardInfos(array $WarnCardInfos) Set <p>Alarm code</p><p>Enumeration value:</p><ul><li>-9101: alarm for incomplete document border</li><li>-9102: alarm for document photocopy</li><li>-9103: alarm for document rephotographing</li><li>-9104: document PS alarm</li><li>-9107: document reflective alarm</li><li>-9108: alarm for blurry document</li><li>-9109: alarm capability not enabled</li></ul>
 * @method string getOriginalCardInfo() Obtain <p>Original document recognition information (when CheckMode value is 4, the current field will be returned)</p>
 * @method void setOriginalCardInfo(string $OriginalCardInfo) Set <p>Original document recognition information (when CheckMode value is 4, the current field will be returned)</p>
 * @method string getHeadImageBase64() Obtain <p>Portrait matting in the document</p>
 * @method void setHeadImageBase64(string $HeadImageBase64) Set <p>Portrait matting in the document</p>
 * @method string getCardBackImageBase64() Obtain <p>Base64 of the back image of the identity document</p>
 * @method void setCardBackImageBase64(string $CardBackImageBase64) Set <p>Base64 of the back image of the identity document</p>
 */
class OCRResult extends AbstractModel
{
    /**
     * @var boolean <p>Whether the identity authentication or OCR process is successful.</p>
     */
    public $IsPass;

    /**
     * @var string <p>Base64 of the front image of the identity document</p>
     */
    public $CardImageBase64;

    /**
     * @var CardInfo <p>ID document recognition result</p>
     * @deprecated
     */
    public $CardInfo;

    /**
     * @var NormalCardInfo <p>ID document recognition result (when CheckMode value is 4, the OriginalCardInfo field is returned; in other scenarios, the current field is returned)</p>
     */
    public $NormalCardInfo;

    /**
     * @var string <p>Request id</p>
     */
    public $RequestId;

    /**
     * @var string <p>Base64 of the front cropped image of the identity document</p>
     */
    public $CardCutImageBase64;

    /**
     * @var string <p>Base64 of the edge-cropped image of the back of an identity document</p>
     */
    public $CardBackCutImageBase64;

    /**
     * @var array <p>Alarm code</p><p>Enumeration value:</p><ul><li>-9101: alarm for incomplete document border</li><li>-9102: alarm for document photocopy</li><li>-9103: alarm for document rephotographing</li><li>-9104: document PS alarm</li><li>-9107: document reflective alarm</li><li>-9108: alarm for blurry document</li><li>-9109: alarm capability not enabled</li></ul>
     */
    public $WarnCardInfos;

    /**
     * @var string <p>Original document recognition information (when CheckMode value is 4, the current field will be returned)</p>
     */
    public $OriginalCardInfo;

    /**
     * @var string <p>Portrait matting in the document</p>
     */
    public $HeadImageBase64;

    /**
     * @var string <p>Base64 of the back image of the identity document</p>
     */
    public $CardBackImageBase64;

    /**
     * @param boolean $IsPass <p>Whether the identity authentication or OCR process is successful.</p>
     * @param string $CardImageBase64 <p>Base64 of the front image of the identity document</p>
     * @param CardInfo $CardInfo <p>ID document recognition result</p>
     * @param NormalCardInfo $NormalCardInfo <p>ID document recognition result (when CheckMode value is 4, the OriginalCardInfo field is returned; in other scenarios, the current field is returned)</p>
     * @param string $RequestId <p>Request id</p>
     * @param string $CardCutImageBase64 <p>Base64 of the front cropped image of the identity document</p>
     * @param string $CardBackCutImageBase64 <p>Base64 of the edge-cropped image of the back of an identity document</p>
     * @param array $WarnCardInfos <p>Alarm code</p><p>Enumeration value:</p><ul><li>-9101: alarm for incomplete document border</li><li>-9102: alarm for document photocopy</li><li>-9103: alarm for document rephotographing</li><li>-9104: document PS alarm</li><li>-9107: document reflective alarm</li><li>-9108: alarm for blurry document</li><li>-9109: alarm capability not enabled</li></ul>
     * @param string $OriginalCardInfo <p>Original document recognition information (when CheckMode value is 4, the current field will be returned)</p>
     * @param string $HeadImageBase64 <p>Portrait matting in the document</p>
     * @param string $CardBackImageBase64 <p>Base64 of the back image of the identity document</p>
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
        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("CardImageBase64",$param) and $param["CardImageBase64"] !== null) {
            $this->CardImageBase64 = $param["CardImageBase64"];
        }

        if (array_key_exists("CardInfo",$param) and $param["CardInfo"] !== null) {
            $this->CardInfo = new CardInfo();
            $this->CardInfo->deserialize($param["CardInfo"]);
        }

        if (array_key_exists("NormalCardInfo",$param) and $param["NormalCardInfo"] !== null) {
            $this->NormalCardInfo = new NormalCardInfo();
            $this->NormalCardInfo->deserialize($param["NormalCardInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("CardCutImageBase64",$param) and $param["CardCutImageBase64"] !== null) {
            $this->CardCutImageBase64 = $param["CardCutImageBase64"];
        }

        if (array_key_exists("CardBackCutImageBase64",$param) and $param["CardBackCutImageBase64"] !== null) {
            $this->CardBackCutImageBase64 = $param["CardBackCutImageBase64"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("OriginalCardInfo",$param) and $param["OriginalCardInfo"] !== null) {
            $this->OriginalCardInfo = $param["OriginalCardInfo"];
        }

        if (array_key_exists("HeadImageBase64",$param) and $param["HeadImageBase64"] !== null) {
            $this->HeadImageBase64 = $param["HeadImageBase64"];
        }

        if (array_key_exists("CardBackImageBase64",$param) and $param["CardBackImageBase64"] !== null) {
            $this->CardBackImageBase64 = $param["CardBackImageBase64"];
        }
    }
}
