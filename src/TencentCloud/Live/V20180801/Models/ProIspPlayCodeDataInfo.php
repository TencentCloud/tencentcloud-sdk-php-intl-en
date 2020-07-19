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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Playback error code information
 *
 * @method string getCountryAreaName() Obtain Country or region.
 * @method void setCountryAreaName(string $CountryAreaName) Set Country or region.
 * @method string getProvinceName() Obtain District.
 * @method void setProvinceName(string $ProvinceName) Set District.
 * @method string getIspName() Obtain ISP.
 * @method void setIspName(string $IspName) Set ISP.
 * @method integer getCode2xx() Obtain Occurrences of 2xx error codes.
 * @method void setCode2xx(integer $Code2xx) Set Occurrences of 2xx error codes.
 * @method integer getCode3xx() Obtain Occurrences of 3xx error codes.
 * @method void setCode3xx(integer $Code3xx) Set Occurrences of 3xx error codes.
 * @method integer getCode4xx() Obtain Occurrences of 4xx error codes.
 * @method void setCode4xx(integer $Code4xx) Set Occurrences of 4xx error codes.
 * @method integer getCode5xx() Obtain Occurrences of 5xx error codes.
 * @method void setCode5xx(integer $Code5xx) Set Occurrences of 5xx error codes.
 */
class ProIspPlayCodeDataInfo extends AbstractModel
{
    /**
     * @var string Country or region.
     */
    public $CountryAreaName;

    /**
     * @var string District.
     */
    public $ProvinceName;

    /**
     * @var string ISP.
     */
    public $IspName;

    /**
     * @var integer Occurrences of 2xx error codes.
     */
    public $Code2xx;

    /**
     * @var integer Occurrences of 3xx error codes.
     */
    public $Code3xx;

    /**
     * @var integer Occurrences of 4xx error codes.
     */
    public $Code4xx;

    /**
     * @var integer Occurrences of 5xx error codes.
     */
    public $Code5xx;

    /**
     * @param string $CountryAreaName Country or region.
     * @param string $ProvinceName District.
     * @param string $IspName ISP.
     * @param integer $Code2xx Occurrences of 2xx error codes.
     * @param integer $Code3xx Occurrences of 3xx error codes.
     * @param integer $Code4xx Occurrences of 4xx error codes.
     * @param integer $Code5xx Occurrences of 5xx error codes.
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
        if (array_key_exists("CountryAreaName",$param) and $param["CountryAreaName"] !== null) {
            $this->CountryAreaName = $param["CountryAreaName"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("Code2xx",$param) and $param["Code2xx"] !== null) {
            $this->Code2xx = $param["Code2xx"];
        }

        if (array_key_exists("Code3xx",$param) and $param["Code3xx"] !== null) {
            $this->Code3xx = $param["Code3xx"];
        }

        if (array_key_exists("Code4xx",$param) and $param["Code4xx"] !== null) {
            $this->Code4xx = $param["Code4xx"];
        }

        if (array_key_exists("Code5xx",$param) and $param["Code5xx"] !== null) {
            $this->Code5xx = $param["Code5xx"];
        }
    }
}
