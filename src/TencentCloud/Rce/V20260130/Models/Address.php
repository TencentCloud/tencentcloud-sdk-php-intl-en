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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Address
 *
 * @method string getCountry() Obtain <p>Country</p><p>Parameter format: Compliant with the ISO 3166 standard</p>
 * @method void setCountry(string $Country) Set <p>Country</p><p>Parameter format: Compliant with the ISO 3166 standard</p>
 * @method string getRegion() Obtain <p>Province</p>
 * @method void setRegion(string $Region) Set <p>Province</p>
 * @method string getCity() Obtain <p>City</p>
 * @method void setCity(string $City) Set <p>City</p>
 * @method string getDistrict() Obtain <p>Region</p>
 * @method void setDistrict(string $District) Set <p>Region</p>
 * @method string getDetail() Obtain <p>Detailed address</p>
 * @method void setDetail(string $Detail) Set <p>Detailed address</p>
 * @method string getZipCode() Obtain <p>Postal code</p>
 * @method void setZipCode(string $ZipCode) Set <p>Postal code</p>
 */
class Address extends AbstractModel
{
    /**
     * @var string <p>Country</p><p>Parameter format: Compliant with the ISO 3166 standard</p>
     */
    public $Country;

    /**
     * @var string <p>Province</p>
     */
    public $Region;

    /**
     * @var string <p>City</p>
     */
    public $City;

    /**
     * @var string <p>Region</p>
     */
    public $District;

    /**
     * @var string <p>Detailed address</p>
     */
    public $Detail;

    /**
     * @var string <p>Postal code</p>
     */
    public $ZipCode;

    /**
     * @param string $Country <p>Country</p><p>Parameter format: Compliant with the ISO 3166 standard</p>
     * @param string $Region <p>Province</p>
     * @param string $City <p>City</p>
     * @param string $District <p>Region</p>
     * @param string $Detail <p>Detailed address</p>
     * @param string $ZipCode <p>Postal code</p>
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }
    }
}
