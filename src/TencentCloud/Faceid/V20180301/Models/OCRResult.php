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
 * The content of a single license in the license information
 *
 * @method boolean getIsPass() Obtain <p>Whether the identity authentication or OCR process is successful.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPass(boolean $IsPass) Set <p>Whether the identity authentication or OCR process is successful.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCardImageBase64() Obtain <p>Base64 of the front side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardImageBase64(string $CardImageBase64) Set <p>Base64 of the front side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CardInfo getCardInfo() Obtain <p>ID card recognition result</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardInfo(CardInfo $CardInfo) Set <p>ID card recognition result</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NormalCardInfo getNormalCardInfo() Obtain <p>Document recognition result (when CheckMode value is 4, return the OriginalCardInfo field; other scenarios return the current field)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNormalCardInfo(NormalCardInfo $NormalCardInfo) Set <p>Document recognition result (when CheckMode value is 4, return the OriginalCardInfo field; other scenarios return the current field)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain <p>Request id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestId(string $RequestId) Set <p>Request id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCardCutImageBase64() Obtain <p>Base64 of the cropped ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardCutImageBase64(string $CardCutImageBase64) Set <p>Base64 of the cropped ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCardBackCutImageBase64() Obtain <p>Base64 of the cropped image of the back side of the ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardBackCutImageBase64(string $CardBackCutImageBase64) Set <p>Base64 of the cropped image of the back side of the ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWarnCardInfos() Obtain <p>Alarm code</p><p>Enumeration value:</p><ul><li>9101: Alarm for incomplete document border</li><li>9102: Alarm for document photocopy</li><li>9103: Alarm for rephotographing</li><li>9104: PS alarm</li><li>9107: Reflective alarm</li><li>9108: Blurry alarm</li><li>9109: Alarm capability not enabled</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarnCardInfos(array $WarnCardInfos) Set <p>Alarm code</p><p>Enumeration value:</p><ul><li>9101: Alarm for incomplete document border</li><li>9102: Alarm for document photocopy</li><li>9103: Alarm for rephotographing</li><li>9104: PS alarm</li><li>9107: Reflective alarm</li><li>9108: Blurry alarm</li><li>9109: Alarm capability not enabled</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCardInfo() Obtain <p>Original document recognition information (the current field will be returned when CheckMode value is 4)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCardInfo(string $OriginalCardInfo) Set <p>Original document recognition information (the current field will be returned when CheckMode value is 4)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHeadImageBase64() Obtain <p>Document portrait matting</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeadImageBase64(string $HeadImageBase64) Set <p>Document portrait matting</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCardBackImageBase64() Obtain <p>Base64 of the back side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardBackImageBase64(string $CardBackImageBase64) Set <p>Base64 of the back side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OCRResult extends AbstractModel
{
    /**
     * @var boolean <p>Whether the identity authentication or OCR process is successful.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPass;

    /**
     * @var string <p>Base64 of the front side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardImageBase64;

    /**
     * @var CardInfo <p>ID card recognition result</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $CardInfo;

    /**
     * @var NormalCardInfo <p>Document recognition result (when CheckMode value is 4, return the OriginalCardInfo field; other scenarios return the current field)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NormalCardInfo;

    /**
     * @var string <p>Request id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestId;

    /**
     * @var string <p>Base64 of the cropped ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardCutImageBase64;

    /**
     * @var string <p>Base64 of the cropped image of the back side of the ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardBackCutImageBase64;

    /**
     * @var array <p>Alarm code</p><p>Enumeration value:</p><ul><li>9101: Alarm for incomplete document border</li><li>9102: Alarm for document photocopy</li><li>9103: Alarm for rephotographing</li><li>9104: PS alarm</li><li>9107: Reflective alarm</li><li>9108: Blurry alarm</li><li>9109: Alarm capability not enabled</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WarnCardInfos;

    /**
     * @var string <p>Original document recognition information (the current field will be returned when CheckMode value is 4)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCardInfo;

    /**
     * @var string <p>Document portrait matting</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeadImageBase64;

    /**
     * @var string <p>Base64 of the back side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardBackImageBase64;

    /**
     * @param boolean $IsPass <p>Whether the identity authentication or OCR process is successful.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CardImageBase64 <p>Base64 of the front side ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CardInfo $CardInfo <p>ID card recognition result</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NormalCardInfo $NormalCardInfo <p>Document recognition result (when CheckMode value is 4, return the OriginalCardInfo field; other scenarios return the current field)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId <p>Request id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CardCutImageBase64 <p>Base64 of the cropped ID image</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CardBackCutImageBase64 <p>Base64 of the cropped image of the back side of the ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WarnCardInfos <p>Alarm code</p><p>Enumeration value:</p><ul><li>9101: Alarm for incomplete document border</li><li>9102: Alarm for document photocopy</li><li>9103: Alarm for rephotographing</li><li>9104: PS alarm</li><li>9107: Reflective alarm</li><li>9108: Blurry alarm</li><li>9109: Alarm capability not enabled</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCardInfo <p>Original document recognition information (the current field will be returned when CheckMode value is 4)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HeadImageBase64 <p>Document portrait matting</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CardBackImageBase64 <p>Base64 of the back side ID image</p>
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
