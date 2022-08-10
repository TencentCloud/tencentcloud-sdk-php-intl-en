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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getCountry() Obtain Country name
 * @method void setCountry(string $Country) Set Country name
 * @method string getContinent() Obtain Continent name
 * @method void setContinent(string $Continent) Set Continent name
 * @method string getCountryEn() Obtain Country name in English
 * @method void setCountryEn(string $CountryEn) Set Country name in English
 * @method string getContinentEn() Obtain Continent name in English
 * @method void setContinentEn(string $ContinentEn) Set Continent name in English
 */
class GeoIp extends AbstractModel
{
    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Country name
     */
    public $Country;

    /**
     * @var string Continent name
     */
    public $Continent;

    /**
     * @var string Country name in English
     */
    public $CountryEn;

    /**
     * @var string Continent name in English
     */
    public $ContinentEn;

    /**
     * @param integer $RegionId Region ID
     * @param string $Country Country name
     * @param string $Continent Continent name
     * @param string $CountryEn Country name in English
     * @param string $ContinentEn Continent name in English
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Continent",$param) and $param["Continent"] !== null) {
            $this->Continent = $param["Continent"];
        }

        if (array_key_exists("CountryEn",$param) and $param["CountryEn"] !== null) {
            $this->CountryEn = $param["CountryEn"];
        }

        if (array_key_exists("ContinentEn",$param) and $param["ContinentEn"] !== null) {
            $this->ContinentEn = $param["ContinentEn"];
        }
    }
}
