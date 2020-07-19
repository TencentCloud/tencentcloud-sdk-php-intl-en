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
 * Statistics of each domain name.
 *
 * @method string getMainlandOrOversea() Obtain In or outside Mainland China:
Mainland: data in Mainland China.
Oversea: data outside Mainland China.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set In or outside Mainland China:
Mainland: data in Mainland China.
Oversea: data outside Mainland China.
 * @method float getBandwidth() Obtain Bandwidth in Mbps.
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth in Mbps.
 * @method float getFlux() Obtain Traffic in MB.
 * @method void setFlux(float $Flux) Set Traffic in MB.
 * @method integer getOnline() Obtain Number of viewers.
 * @method void setOnline(integer $Online) Set Number of viewers.
 * @method integer getRequest() Obtain Number of requests.
 * @method void setRequest(integer $Request) Set Number of requests.
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string In or outside Mainland China:
Mainland: data in Mainland China.
Oversea: data outside Mainland China.
     */
    public $MainlandOrOversea;

    /**
     * @var float Bandwidth in Mbps.
     */
    public $Bandwidth;

    /**
     * @var float Traffic in MB.
     */
    public $Flux;

    /**
     * @var integer Number of viewers.
     */
    public $Online;

    /**
     * @var integer Number of requests.
     */
    public $Request;

    /**
     * @param string $MainlandOrOversea In or outside Mainland China:
Mainland: data in Mainland China.
Oversea: data outside Mainland China.
     * @param float $Bandwidth Bandwidth in Mbps.
     * @param float $Flux Traffic in MB.
     * @param integer $Online Number of viewers.
     * @param integer $Request Number of requests.
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
        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }
    }
}
