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
 * Overseas document address
 *
 * @method string getCountry() Obtain Country
 * @method void setCountry(string $Country) Set Country
 * @method string getPostalCode() Obtain Postal code
 * @method void setPostalCode(string $PostalCode) Set Postal code
 * @method string getSubdivision() Obtain Sub-region
 * @method void setSubdivision(string $Subdivision) Set Sub-region
 * @method string getCity() Obtain city
 * @method void setCity(string $City) Set city
 * @method string getFormattedAddress() Obtain Complete address
 * @method void setFormattedAddress(string $FormattedAddress) Set Complete address
 * @method string getLineOne() Obtain First line of the address bar
 * @method void setLineOne(string $LineOne) Set First line of the address bar
 * @method string getLineTwo() Obtain Second line of the address bar
 * @method void setLineTwo(string $LineTwo) Set Second line of the address bar
 * @method string getLineThree() Obtain Third line of the address bar
 * @method void setLineThree(string $LineThree) Set Third line of the address bar
 * @method string getLineFour() Obtain Fourth line of the address bar
 * @method void setLineFour(string $LineFour) Set Fourth line of the address bar
 * @method string getLineFive() Obtain Fifth line of the address bar
 * @method void setLineFive(string $LineFive) Set Fifth line of the address bar
 */
class Address extends AbstractModel
{
    /**
     * @var string Country
     */
    public $Country;

    /**
     * @var string Postal code
     */
    public $PostalCode;

    /**
     * @var string Sub-region
     */
    public $Subdivision;

    /**
     * @var string city
     */
    public $City;

    /**
     * @var string Complete address
     */
    public $FormattedAddress;

    /**
     * @var string First line of the address bar
     */
    public $LineOne;

    /**
     * @var string Second line of the address bar
     */
    public $LineTwo;

    /**
     * @var string Third line of the address bar
     */
    public $LineThree;

    /**
     * @var string Fourth line of the address bar
     */
    public $LineFour;

    /**
     * @var string Fifth line of the address bar
     */
    public $LineFive;

    /**
     * @param string $Country Country
     * @param string $PostalCode Postal code
     * @param string $Subdivision Sub-region
     * @param string $City city
     * @param string $FormattedAddress Complete address
     * @param string $LineOne First line of the address bar
     * @param string $LineTwo Second line of the address bar
     * @param string $LineThree Third line of the address bar
     * @param string $LineFour Fourth line of the address bar
     * @param string $LineFive Fifth line of the address bar
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

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
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
