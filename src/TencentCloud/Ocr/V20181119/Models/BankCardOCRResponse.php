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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BankCardOCR response structure.
 *
 * @method string getCardNo() Obtain Card number
 * @method void setCardNo(string $CardNo) Set Card number
 * @method string getBankInfo() Obtain Bank information
 * @method void setBankInfo(string $BankInfo) Set Bank information
 * @method string getValidDate() Obtain Expiration date. Format: 07/2023
 * @method void setValidDate(string $ValidDate) Set Expiration date. Format: 07/2023
 * @method string getCardType() Obtain Card type
 * @method void setCardType(string $CardType) Set Card type
 * @method string getCardName() Obtain Card name
 * @method void setCardName(string $CardName) Set Card name
 * @method string getBorderCutImage() Obtain Sliced image data
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBorderCutImage(string $BorderCutImage) Set Sliced image data
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCardNoImage() Obtain Card number image data
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCardNoImage(string $CardNoImage) Set Card number image data
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getWarningCode() Obtain Warning code:
-9110: the bank card date is invalid. 
-9111: the bank card border is incomplete. 
-9112: the bank card image is reflective.
-9113: the bank card image is a photocopy.
-9114: the bank card image is a photograph.
Multiple warning codes may be returned at a time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWarningCode(array $WarningCode) Set Warning code:
-9110: the bank card date is invalid. 
-9111: the bank card border is incomplete. 
-9112: the bank card image is reflective.
-9113: the bank card image is a photocopy.
-9114: the bank card image is a photograph.
Multiple warning codes may be returned at a time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getQualityValue() Obtain Image quality value, which is returned when `EnableQualityValue` is set to `true`. The smaller the value, the less clear the image is. Value range: 0−100 (a threshold greater than or equal to 50 is recommended.)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQualityValue(integer $QualityValue) Set Image quality value, which is returned when `EnableQualityValue` is set to `true`. The smaller the value, the less clear the image is. Value range: 0−100 (a threshold greater than or equal to 50 is recommended.)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class BankCardOCRResponse extends AbstractModel
{
    /**
     * @var string Card number
     */
    public $CardNo;

    /**
     * @var string Bank information
     */
    public $BankInfo;

    /**
     * @var string Expiration date. Format: 07/2023
     */
    public $ValidDate;

    /**
     * @var string Card type
     */
    public $CardType;

    /**
     * @var string Card name
     */
    public $CardName;

    /**
     * @var string Sliced image data
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BorderCutImage;

    /**
     * @var string Card number image data
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CardNoImage;

    /**
     * @var array Warning code:
-9110: the bank card date is invalid. 
-9111: the bank card border is incomplete. 
-9112: the bank card image is reflective.
-9113: the bank card image is a photocopy.
-9114: the bank card image is a photograph.
Multiple warning codes may be returned at a time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WarningCode;

    /**
     * @var integer Image quality value, which is returned when `EnableQualityValue` is set to `true`. The smaller the value, the less clear the image is. Value range: 0−100 (a threshold greater than or equal to 50 is recommended.)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QualityValue;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CardNo Card number
     * @param string $BankInfo Bank information
     * @param string $ValidDate Expiration date. Format: 07/2023
     * @param string $CardType Card type
     * @param string $CardName Card name
     * @param string $BorderCutImage Sliced image data
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CardNoImage Card number image data
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $WarningCode Warning code:
-9110: the bank card date is invalid. 
-9111: the bank card border is incomplete. 
-9112: the bank card image is reflective.
-9113: the bank card image is a photocopy.
-9114: the bank card image is a photograph.
Multiple warning codes may be returned at a time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $QualityValue Image quality value, which is returned when `EnableQualityValue` is set to `true`. The smaller the value, the less clear the image is. Value range: 0−100 (a threshold greater than or equal to 50 is recommended.)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CardNo",$param) and $param["CardNo"] !== null) {
            $this->CardNo = $param["CardNo"];
        }

        if (array_key_exists("BankInfo",$param) and $param["BankInfo"] !== null) {
            $this->BankInfo = $param["BankInfo"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("CardName",$param) and $param["CardName"] !== null) {
            $this->CardName = $param["CardName"];
        }

        if (array_key_exists("BorderCutImage",$param) and $param["BorderCutImage"] !== null) {
            $this->BorderCutImage = $param["BorderCutImage"];
        }

        if (array_key_exists("CardNoImage",$param) and $param["CardNoImage"] !== null) {
            $this->CardNoImage = $param["CardNoImage"];
        }

        if (array_key_exists("WarningCode",$param) and $param["WarningCode"] !== null) {
            $this->WarningCode = $param["WarningCode"];
        }

        if (array_key_exists("QualityValue",$param) and $param["QualityValue"] !== null) {
            $this->QualityValue = $param["QualityValue"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
