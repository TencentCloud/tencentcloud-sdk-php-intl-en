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
 * Overseas document recognition address information
 *
 * @method string getCountry() Obtain <p>Country</p>
 * @method void setCountry(string $Country) Set <p>Country</p>
 * @method string getPostalCode() Obtain <p>Postal code</p>
 * @method void setPostalCode(string $PostalCode) Set <p>Postal code</p>
 * @method string getSubdivision() Obtain <p>Sub-region</p>
 * @method void setSubdivision(string $Subdivision) Set <p>Sub-region</p>
 * @method string getDistrict() Obtain <p>District</p>
 * @method void setDistrict(string $District) Set <p>District</p>
 * @method string getCity() Obtain <p>City</p>
 * @method void setCity(string $City) Set <p>City</p>
 * @method string getSubdistrict() Obtain <p>Sub-district office</p>
 * @method void setSubdistrict(string $Subdistrict) Set <p>Sub-district office</p>
 * @method string getFormattedAddress() Obtain <p>Complete address</p>
 * @method void setFormattedAddress(string $FormattedAddress) Set <p>Complete address</p>
 * @method string getLineOne() Obtain <p>First line of the address bar</p>
 * @method void setLineOne(string $LineOne) Set <p>First line of the address bar</p>
 * @method string getLineTwo() Obtain <p>Second line of the address bar</p>
 * @method void setLineTwo(string $LineTwo) Set <p>Second line of the address bar</p>
 * @method string getLineThree() Obtain <p>Third line of the address bar</p>
 * @method void setLineThree(string $LineThree) Set <p>Third line of the address bar</p>
 * @method string getLineFour() Obtain <p>Fourth line of the address bar</p>
 * @method void setLineFour(string $LineFour) Set <p>Fourth line of the address bar</p>
 * @method string getLineFive() Obtain <p>Fifth line of the address bar</p>
 * @method void setLineFive(string $LineFive) Set <p>Fifth line of the address bar</p>
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var string <p>Country</p>
     */
    public $Country;

    /**
     * @var string <p>Postal code</p>
     */
    public $PostalCode;

    /**
     * @var string <p>Sub-region</p>
     */
    public $Subdivision;

    /**
     * @var string <p>District</p>
     */
    public $District;

    /**
     * @var string <p>City</p>
     */
    public $City;

    /**
     * @var string <p>Sub-district office</p>
     */
    public $Subdistrict;

    /**
     * @var string <p>Complete address</p>
     */
    public $FormattedAddress;

    /**
     * @var string <p>First line of the address bar</p>
     */
    public $LineOne;

    /**
     * @var string <p>Second line of the address bar</p>
     */
    public $LineTwo;

    /**
     * @var string <p>Third line of the address bar</p>
     */
    public $LineThree;

    /**
     * @var string <p>Fourth line of the address bar</p>
     */
    public $LineFour;

    /**
     * @var string <p>Fifth line of the address bar</p>
     */
    public $LineFive;

    /**
     * @param string $Country <p>Country</p>
     * @param string $PostalCode <p>Postal code</p>
     * @param string $Subdivision <p>Sub-region</p>
     * @param string $District <p>District</p>
     * @param string $City <p>City</p>
     * @param string $Subdistrict <p>Sub-district office</p>
     * @param string $FormattedAddress <p>Complete address</p>
     * @param string $LineOne <p>First line of the address bar</p>
     * @param string $LineTwo <p>Second line of the address bar</p>
     * @param string $LineThree <p>Third line of the address bar</p>
     * @param string $LineFour <p>Fourth line of the address bar</p>
     * @param string $LineFive <p>Fifth line of the address bar</p>
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
