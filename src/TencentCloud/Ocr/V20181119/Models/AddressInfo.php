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
 * Overseas document recognition address information.
 *
 * @method string getCountry() Obtain Country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountry(string $Country) Set Country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPostalCode() Obtain Postal code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPostalCode(string $PostalCode) Set Postal code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubdivision() Obtain Sub-region or state/province.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubdivision(string $Subdivision) Set Sub-region or state/province.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDistrict() Obtain District or county.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDistrict(string $District) Set District or county.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCity() Obtain City name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCity(string $City) Set City name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubdistrict() Obtain Subdistrict or township.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubdistrict(string $Subdistrict) Set Subdistrict or township.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain Formatted complete address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Formatted complete address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineOne() Obtain First line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineOne(string $LineOne) Set First line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineTwo() Obtain Second line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineTwo(string $LineTwo) Set Second line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineThree() Obtain Specifies the third line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineThree(string $LineThree) Set Specifies the third line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineFour() Obtain Specifies the fourth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineFour(string $LineFour) Set Specifies the fourth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineFive() Obtain Specifies the fifth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineFive(string $LineFive) Set Specifies the fifth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var string Country.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Country;

    /**
     * @var string Postal code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PostalCode;

    /**
     * @var string Sub-region or state/province.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subdivision;

    /**
     * @var string District or county.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $District;

    /**
     * @var string City name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @var string Subdistrict or township.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subdistrict;

    /**
     * @var string Formatted complete address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @var string First line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineOne;

    /**
     * @var string Second line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineTwo;

    /**
     * @var string Specifies the third line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineThree;

    /**
     * @var string Specifies the fourth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineFour;

    /**
     * @var string Specifies the fifth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineFive;

    /**
     * @param string $Country Country.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PostalCode Postal code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Subdivision Sub-region or state/province.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $District District or county.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $City City name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Subdistrict Subdistrict or township.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress Formatted complete address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineOne First line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineTwo Second line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineThree Specifies the third line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineFour Specifies the fourth line of the address bar.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineFive Specifies the fifth line of the address bar.
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
        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("Subdivision",$param) and $param["Subdivision"] !== null) {
            $this->Subdivision = $param["Subdivision"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Subdistrict",$param) and $param["Subdistrict"] !== null) {
            $this->Subdistrict = $param["Subdistrict"];
        }

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }

        if (array_key_exists("LineOne",$param) and $param["LineOne"] !== null) {
            $this->LineOne = $param["LineOne"];
        }

        if (array_key_exists("LineTwo",$param) and $param["LineTwo"] !== null) {
            $this->LineTwo = $param["LineTwo"];
        }

        if (array_key_exists("LineThree",$param) and $param["LineThree"] !== null) {
            $this->LineThree = $param["LineThree"];
        }

        if (array_key_exists("LineFour",$param) and $param["LineFour"] !== null) {
            $this->LineFour = $param["LineFour"];
        }

        if (array_key_exists("LineFive",$param) and $param["LineFive"] !== null) {
            $this->LineFive = $param["LineFive"];
        }
    }
}
