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
 * 
 *
 * @method string getCountry() Obtain Nationality.
 * @method void setCountry(string $Country) Set Nationality.
 * @method string getPostalCode() Obtain Post code.
 * @method void setPostalCode(string $PostalCode) Set Post code.
 * @method string getSubdivision() Obtain Subregion.
 * @method void setSubdivision(string $Subdivision) Set Subregion.
 * @method string getCity() Obtain City.
 * @method void setCity(string $City) Set City.
 * @method string getFormattedAddress() Obtain Complete address.
 * @method void setFormattedAddress(string $FormattedAddress) Set Complete address.
 * @method string getLineOne() Obtain The first line of address.
 * @method void setLineOne(string $LineOne) Set The first line of address.
 * @method string getLineTwo() Obtain The second line of address.
 * @method void setLineTwo(string $LineTwo) Set The second line of address.
 * @method string getLineThree() Obtain The third line of address.
 * @method void setLineThree(string $LineThree) Set The third line of address.
 * @method string getLineFour() Obtain The fourth line of address.
 * @method void setLineFour(string $LineFour) Set The fourth line of address.
 * @method string getLineFive() Obtain The fifth line of address.
 * @method void setLineFive(string $LineFive) Set The fifth line of address.
 */
class Address extends AbstractModel
{
    /**
     * @var string Nationality.
     */
    public $Country;

    /**
     * @var string Post code.
     */
    public $PostalCode;

    /**
     * @var string Subregion.
     */
    public $Subdivision;

    /**
     * @var string City.
     */
    public $City;

    /**
     * @var string Complete address.
     */
    public $FormattedAddress;

    /**
     * @var string The first line of address.
     */
    public $LineOne;

    /**
     * @var string The second line of address.
     */
    public $LineTwo;

    /**
     * @var string The third line of address.
     */
    public $LineThree;

    /**
     * @var string The fourth line of address.
     */
    public $LineFour;

    /**
     * @var string The fifth line of address.
     */
    public $LineFive;

    /**
     * @param string $Country Nationality.
     * @param string $PostalCode Post code.
     * @param string $Subdivision Subregion.
     * @param string $City City.
     * @param string $FormattedAddress Complete address.
     * @param string $LineOne The first line of address.
     * @param string $LineTwo The second line of address.
     * @param string $LineThree The third line of address.
     * @param string $LineFour The fourth line of address.
     * @param string $LineFive The fifth line of address.
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
