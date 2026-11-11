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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common login location (input parameter)
 *
 * @method integer getCountryId() Obtain <p>Country ID. Currently, only 1 is supported, indicating China.</p>
 * @method void setCountryId(integer $CountryId) Set <p>Country ID. Currently, only 1 is supported, indicating China.</p>
 * @method integer getProvinceId() Obtain <p>Province ID; 99999 means all provinces</p>
 * @method void setProvinceId(integer $ProvinceId) Set <p>Province ID; 99999 means all provinces</p>
 * @method integer getCityId() Obtain <p>City ID; 99999 means all cities</p>
 * @method void setCityId(integer $CityId) Set <p>City ID; 99999 means all cities</p>
 */
class LoginWhitePlaceInput extends AbstractModel
{
    /**
     * @var integer <p>Country ID. Currently, only 1 is supported, indicating China.</p>
     */
    public $CountryId;

    /**
     * @var integer <p>Province ID; 99999 means all provinces</p>
     */
    public $ProvinceId;

    /**
     * @var integer <p>City ID; 99999 means all cities</p>
     */
    public $CityId;

    /**
     * @param integer $CountryId <p>Country ID. Currently, only 1 is supported, indicating China.</p>
     * @param integer $ProvinceId <p>Province ID; 99999 means all provinces</p>
     * @param integer $CityId <p>City ID; 99999 means all cities</p>
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
        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }
    }
}
