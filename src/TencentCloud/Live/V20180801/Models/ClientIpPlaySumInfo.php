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
 * Aggregated playback information of client IP.
 *
 * @method string getClientIp() Obtain Client IP in dotted-decimal notation.
 * @method void setClientIp(string $ClientIp) Set Client IP in dotted-decimal notation.
 * @method string getProvince() Obtain District where the client is located.
 * @method void setProvince(string $Province) Set District where the client is located.
 * @method float getTotalFlux() Obtain Total traffic.
 * @method void setTotalFlux(float $TotalFlux) Set Total traffic.
 * @method integer getTotalRequest() Obtain Total number of requests.
 * @method void setTotalRequest(integer $TotalRequest) Set Total number of requests.
 * @method integer getTotalFailedRequest() Obtain Total number of failed requests.
 * @method void setTotalFailedRequest(integer $TotalFailedRequest) Set Total number of failed requests.
 * @method string getCountryArea() Obtain Country/region where the client is located.
 * @method void setCountryArea(string $CountryArea) Set Country/region where the client is located.
 */
class ClientIpPlaySumInfo extends AbstractModel
{
    /**
     * @var string Client IP in dotted-decimal notation.
     */
    public $ClientIp;

    /**
     * @var string District where the client is located.
     */
    public $Province;

    /**
     * @var float Total traffic.
     */
    public $TotalFlux;

    /**
     * @var integer Total number of requests.
     */
    public $TotalRequest;

    /**
     * @var integer Total number of failed requests.
     */
    public $TotalFailedRequest;

    /**
     * @var string Country/region where the client is located.
     */
    public $CountryArea;

    /**
     * @param string $ClientIp Client IP in dotted-decimal notation.
     * @param string $Province District where the client is located.
     * @param float $TotalFlux Total traffic.
     * @param integer $TotalRequest Total number of requests.
     * @param integer $TotalFailedRequest Total number of failed requests.
     * @param string $CountryArea Country/region where the client is located.
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("TotalFailedRequest",$param) and $param["TotalFailedRequest"] !== null) {
            $this->TotalFailedRequest = $param["TotalFailedRequest"];
        }

        if (array_key_exists("CountryArea",$param) and $param["CountryArea"] !== null) {
            $this->CountryArea = $param["CountryArea"];
        }
    }
}
