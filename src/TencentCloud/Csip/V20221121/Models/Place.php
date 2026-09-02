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
 * Log-in location information
 *
 * @method integer getCityId() Obtain <p>City ID.</p>
 * @method void setCityId(integer $CityId) Set <p>City ID.</p>
 * @method integer getProvinceId() Obtain <p>Province ID.</p>
 * @method void setProvinceId(integer $ProvinceId) Set <p>Province ID.</p>
 * @method integer getCountryId() Obtain <p>Country ID. Currently, only 1 is supported, indicating China.</p>
 * @method void setCountryId(integer $CountryId) Set <p>Country ID. Currently, only 1 is supported, indicating China.</p>
 * @method string getLocation() Obtain <p>Location name.</p>
 * @method void setLocation(string $Location) Set <p>Location name.</p>
 */
class Place extends AbstractModel
{
    /**
     * @var integer <p>City ID.</p>
     */
    public $CityId;

    /**
     * @var integer <p>Province ID.</p>
     */
    public $ProvinceId;

    /**
     * @var integer <p>Country ID. Currently, only 1 is supported, indicating China.</p>
     */
    public $CountryId;

    /**
     * @var string <p>Location name.</p>
     */
    public $Location;

    /**
     * @param integer $CityId <p>City ID.</p>
     * @param integer $ProvinceId <p>Province ID.</p>
     * @param integer $CountryId <p>Country ID. Currently, only 1 is supported, indicating China.</p>
     * @param string $Location <p>Location name.</p>
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
        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
