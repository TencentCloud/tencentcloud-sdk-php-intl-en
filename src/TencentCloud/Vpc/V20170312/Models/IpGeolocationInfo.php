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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP location
 *
 * @method string getCountry() Obtain Country/region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCountry(string $Country) Set Country/region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProvince() Obtain Province- or municipality-level administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProvince(string $Province) Set Province- or municipality-level administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCity() Obtain Municipal administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCity(string $City) Set Municipal administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Urban area
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Urban area
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getIsp() Obtain Access ISP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsp(string $Isp) Set Access ISP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAsName() Obtain ISP backbone network’s AS name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAsName(string $AsName) Set ISP backbone network’s AS name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAsId() Obtain ISP backbone network’s AS ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAsId(string $AsId) Set ISP backbone network’s AS ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Comment. The APN value of mobile users is entered currently. If there is no APN attribute, this is `null`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Comment. The APN value of mobile users is entered currently. If there is no APN attribute, this is `null`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAddressIp() Obtain IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddressIp(string $AddressIp) Set IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class IpGeolocationInfo extends AbstractModel
{
    /**
     * @var string Country/region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Country;

    /**
     * @var string Province- or municipality-level administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Province;

    /**
     * @var string Municipal administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @var string Urban area
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Access ISP
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Isp;

    /**
     * @var string ISP backbone network’s AS name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AsName;

    /**
     * @var string ISP backbone network’s AS ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AsId;

    /**
     * @var string Comment. The APN value of mobile users is entered currently. If there is no APN attribute, this is `null`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AddressIp;

    /**
     * @param string $Country Country/region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Province Province- or municipality-level administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $City Municipal administrative region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Region Urban area
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Isp Access ISP
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AsName ISP backbone network’s AS name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AsId ISP backbone network’s AS ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Comment Comment. The APN value of mobile users is entered currently. If there is no APN attribute, this is `null`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AddressIp IP address
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("AsName",$param) and $param["AsName"] !== null) {
            $this->AsName = $param["AsName"];
        }

        if (array_key_exists("AsId",$param) and $param["AsId"] !== null) {
            $this->AsId = $param["AsId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }
    }
}
