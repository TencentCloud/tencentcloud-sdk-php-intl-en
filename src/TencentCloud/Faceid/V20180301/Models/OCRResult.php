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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The content of a single license in the license information.
 *
 * @method boolean getIsPass() Obtain Is the indentity verification or OCR process passed
 * @method void setIsPass(boolean $IsPass) Set Is the indentity verification or OCR process passed
 * @method string getCardImageBase64() Obtain The Base64 of ID card image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardImageBase64(string $CardImageBase64) Set The Base64 of ID card image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CardInfo getCardInfo() Obtain OCR result of the ID card.
 * @method void setCardInfo(CardInfo $CardInfo) Set OCR result of the ID card.
 * @method string getRequestId() Obtain The request id
 * @method void setRequestId(string $RequestId) Set The request id
 */
class OCRResult extends AbstractModel
{
    /**
     * @var boolean Is the indentity verification or OCR process passed
     */
    public $IsPass;

    /**
     * @var string The Base64 of ID card image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardImageBase64;

    /**
     * @var CardInfo OCR result of the ID card.
     */
    public $CardInfo;

    /**
     * @var string The request id
     */
    public $RequestId;

    /**
     * @param boolean $IsPass Is the indentity verification or OCR process passed
     * @param string $CardImageBase64 The Base64 of ID card image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CardInfo $CardInfo OCR result of the ID card.
     * @param string $RequestId The request id
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
