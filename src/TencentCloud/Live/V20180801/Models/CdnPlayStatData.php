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
 * Downstream playback statistical metrics
 *
 * @method string getTime() Obtain Time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setTime(string $Time) Set Time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method float getBandwidth() Obtain Bandwidth in Mbps.
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth in Mbps.
 * @method float getFlux() Obtain Traffic in MB.
 * @method void setFlux(float $Flux) Set Traffic in MB.
 * @method integer getRequest() Obtain Number of new requests.
 * @method void setRequest(integer $Request) Set Number of new requests.
 * @method integer getOnline() Obtain Number of concurrent connections.
 * @method void setOnline(integer $Online) Set Number of concurrent connections.
 */
class CdnPlayStatData extends AbstractModel
{
    /**
     * @var string Time point in the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $Time;

    /**
     * @var float Bandwidth in Mbps.
     */
    public $Bandwidth;

    /**
     * @var float Traffic in MB.
     */
    public $Flux;

    /**
     * @var integer Number of new requests.
     */
    public $Request;

    /**
     * @var integer Number of concurrent connections.
     */
    public $Online;

    /**
     * @param string $Time Time point in the format of `yyyy-mm-dd HH:MM:SS`.
     * @param float $Bandwidth Bandwidth in Mbps.
     * @param float $Flux Traffic in MB.
     * @param integer $Request Number of new requests.
     * @param integer $Online Number of concurrent connections.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
