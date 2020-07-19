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
 * DescribeLiveDomainPlayInfoList response structure.
 *
 * @method string getTime() Obtain Data time in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setTime(string $Time) Set Data time in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method float getTotalBandwidth() Obtain Real-time total bandwidth.
 * @method void setTotalBandwidth(float $TotalBandwidth) Set Real-time total bandwidth.
 * @method float getTotalFlux() Obtain Real-time total traffic.
 * @method void setTotalFlux(float $TotalFlux) Set Real-time total traffic.
 * @method integer getTotalRequest() Obtain Total number of requests.
 * @method void setTotalRequest(integer $TotalRequest) Set Total number of requests.
 * @method integer getTotalOnline() Obtain Real-time total number of connections.
 * @method void setTotalOnline(integer $TotalOnline) Set Real-time total number of connections.
 * @method array getDomainInfoList() Obtain Data by domain name.
 * @method void setDomainInfoList(array $DomainInfoList) Set Data by domain name.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLiveDomainPlayInfoListResponse extends AbstractModel
{
    /**
     * @var string Data time in the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $Time;

    /**
     * @var float Real-time total bandwidth.
     */
    public $TotalBandwidth;

    /**
     * @var float Real-time total traffic.
     */
    public $TotalFlux;

    /**
     * @var integer Total number of requests.
     */
    public $TotalRequest;

    /**
     * @var integer Real-time total number of connections.
     */
    public $TotalOnline;

    /**
     * @var array Data by domain name.
     */
    public $DomainInfoList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Time Data time in the format of `yyyy-mm-dd HH:MM:SS`.
     * @param float $TotalBandwidth Real-time total bandwidth.
     * @param float $TotalFlux Real-time total traffic.
     * @param integer $TotalRequest Total number of requests.
     * @param integer $TotalOnline Real-time total number of connections.
     * @param array $DomainInfoList Data by domain name.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("TotalBandwidth",$param) and $param["TotalBandwidth"] !== null) {
            $this->TotalBandwidth = $param["TotalBandwidth"];
        }

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("TotalOnline",$param) and $param["TotalOnline"] !== null) {
            $this->TotalOnline = $param["TotalOnline"];
        }

        if (array_key_exists("DomainInfoList",$param) and $param["DomainInfoList"] !== null) {
            $this->DomainInfoList = [];
            foreach ($param["DomainInfoList"] as $key => $value){
                $obj = new DomainInfoList();
                $obj->deserialize($value);
                array_push($this->DomainInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
