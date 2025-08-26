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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Type of document in brazil.
 *
 * @method BrazilRNEInfo getRNE() Obtain RNE document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRNE(BrazilRNEInfo $RNE) Set RNE document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BrazilRNMInfo getRNM() Obtain Specifies the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRNM(BrazilRNMInfo $RNM) Set Specifies the document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BrazilDriverLicenseInfo getDriverLicense() Obtain Driver license document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDriverLicense(BrazilDriverLicenseInfo $DriverLicense) Set Driver license document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BrazilIDCardInfo getIDCard() Obtain ID card document.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIDCard(BrazilIDCardInfo $IDCard) Set ID card document.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BrazilCardInfo extends AbstractModel
{
    /**
     * @var BrazilRNEInfo RNE document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RNE;

    /**
     * @var BrazilRNMInfo Specifies the document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RNM;

    /**
     * @var BrazilDriverLicenseInfo Driver license document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DriverLicense;

    /**
     * @var BrazilIDCardInfo ID card document.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IDCard;

    /**
     * @param BrazilRNEInfo $RNE RNE document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BrazilRNMInfo $RNM Specifies the document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BrazilDriverLicenseInfo $DriverLicense Driver license document.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BrazilIDCardInfo $IDCard ID card document.
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
        if (array_key_exists("RNE",$param) and $param["RNE"] !== null) {
            $this->RNE = new BrazilRNEInfo();
            $this->RNE->deserialize($param["RNE"]);
        }

        if (array_key_exists("RNM",$param) and $param["RNM"] !== null) {
            $this->RNM = new BrazilRNMInfo();
            $this->RNM->deserialize($param["RNM"]);
        }

        if (array_key_exists("DriverLicense",$param) and $param["DriverLicense"] !== null) {
            $this->DriverLicense = new BrazilDriverLicenseInfo();
            $this->DriverLicense->deserialize($param["DriverLicense"]);
        }

        if (array_key_exists("IDCard",$param) and $param["IDCard"] !== null) {
            $this->IDCard = new BrazilIDCardInfo();
            $this->IDCard->deserialize($param["IDCard"]);
        }
    }
}
