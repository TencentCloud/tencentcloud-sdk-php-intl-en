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
 * IP information to be queried
 *
 * @method boolean getCountry() Obtain Country/region of the IP
 * @method void setCountry(boolean $Country) Set Country/region of the IP
 * @method boolean getProvince() Obtain Province/municipality/state of the IP
 * @method void setProvince(boolean $Province) Set Province/municipality/state of the IP
 * @method boolean getCity() Obtain City of the IP
 * @method void setCity(boolean $City) Set City of the IP
 * @method boolean getRegion() Obtain City district of the IP
 * @method void setRegion(boolean $Region) Set City district of the IP
 * @method boolean getIsp() Obtain Access ISP field
 * @method void setIsp(boolean $Isp) Set Access ISP field
 * @method boolean getAsName() Obtain ISP backbone network’s AS field
 * @method void setAsName(boolean $AsName) Set ISP backbone network’s AS field
 * @method boolean getAsId() Obtain Backbone AS ID
 * @method void setAsId(boolean $AsId) Set Backbone AS ID
 * @method boolean getComment() Obtain Comment
 * @method void setComment(boolean $Comment) Set Comment
 */
class IpField extends AbstractModel
{
    /**
     * @var boolean Country/region of the IP
     */
    public $Country;

    /**
     * @var boolean Province/municipality/state of the IP
     */
    public $Province;

    /**
     * @var boolean City of the IP
     */
    public $City;

    /**
     * @var boolean City district of the IP
     */
    public $Region;

    /**
     * @var boolean Access ISP field
     */
    public $Isp;

    /**
     * @var boolean ISP backbone network’s AS field
     */
    public $AsName;

    /**
     * @var boolean Backbone AS ID
     */
    public $AsId;

    /**
     * @var boolean Comment
     */
    public $Comment;

    /**
     * @param boolean $Country Country/region of the IP
     * @param boolean $Province Province/municipality/state of the IP
     * @param boolean $City City of the IP
     * @param boolean $Region City district of the IP
     * @param boolean $Isp Access ISP field
     * @param boolean $AsName ISP backbone network’s AS field
     * @param boolean $AsId Backbone AS ID
     * @param boolean $Comment Comment
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
    }
}
