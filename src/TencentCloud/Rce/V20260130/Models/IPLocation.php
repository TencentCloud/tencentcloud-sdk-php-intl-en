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
 * The geographical location of the IP address
 *
 * @method string getCountry() Obtain <p>The country of the IP address</p>
 * @method void setCountry(string $Country) Set <p>The country of the IP address</p>
 * @method string getRegion() Obtain <p>The region of the IP address</p>
 * @method void setRegion(string $Region) Set <p>The region of the IP address</p>
 * @method string getCity() Obtain <p>The city of the IP address</p>
 * @method void setCity(string $City) Set <p>The city of the IP address</p>
 * @method string getDistrict() Obtain <p>The district of the IP address</p>
 * @method void setDistrict(string $District) Set <p>The district of the IP address</p>
 * @method string getLongitude() Obtain <p>The longitude of the IP address</p>
 * @method void setLongitude(string $Longitude) Set <p>The longitude of the IP address</p>
 * @method string getLatitude() Obtain <p>The latitude of the IP address</p>
 * @method void setLatitude(string $Latitude) Set <p>The latitude of the IP address</p>
 * @method string getTimezone() Obtain <p>The timezone of the IP address</p>
 * @method void setTimezone(string $Timezone) Set <p>The timezone of the IP address</p>
 * @method string getZipCode() Obtain <p>The zip code of the IP address</p>
 * @method void setZipCode(string $ZipCode) Set <p>The zip code of the IP address</p>
 */
class IPLocation extends AbstractModel
{
    /**
     * @var string <p>The country of the IP address</p>
     */
    public $Country;

    /**
     * @var string <p>The region of the IP address</p>
     */
    public $Region;

    /**
     * @var string <p>The city of the IP address</p>
     */
    public $City;

    /**
     * @var string <p>The district of the IP address</p>
     */
    public $District;

    /**
     * @var string <p>The longitude of the IP address</p>
     */
    public $Longitude;

    /**
     * @var string <p>The latitude of the IP address</p>
     */
    public $Latitude;

    /**
     * @var string <p>The timezone of the IP address</p>
     */
    public $Timezone;

    /**
     * @var string <p>The zip code of the IP address</p>
     */
    public $ZipCode;

    /**
     * @param string $Country <p>The country of the IP address</p>
     * @param string $Region <p>The region of the IP address</p>
     * @param string $City <p>The city of the IP address</p>
     * @param string $District <p>The district of the IP address</p>
     * @param string $Longitude <p>The longitude of the IP address</p>
     * @param string $Latitude <p>The latitude of the IP address</p>
     * @param string $Timezone <p>The timezone of the IP address</p>
     * @param string $ZipCode <p>The zip code of the IP address</p>
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

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }
    }
}
