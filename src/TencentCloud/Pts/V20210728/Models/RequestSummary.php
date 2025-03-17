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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request details in performance test.
 *
 * @method string getService() Obtain Request URL.
 * @method void setService(string $Service) Set Request URL.
 * @method string getMethod() Obtain Request method.
 * @method void setMethod(string $Method) Set Request method.
 * @method integer getCount() Obtain Number of requests.
 * @method void setCount(integer $Count) Set Number of requests.
 * @method float getAverage() Obtain Average request response time (seconds).
 * @method void setAverage(float $Average) Set Average request response time (seconds).
 * @method float getP90() Obtain Request p90 latency (seconds).
 * @method void setP90(float $P90) Set Request p90 latency (seconds).
 * @method float getP95() Obtain Request p95 latency (seconds).
 * @method void setP95(float $P95) Set Request p95 latency (seconds).
 * @method float getMin() Obtain Minimum request latency (seconds).
 * @method void setMin(float $Min) Set Minimum request latency (seconds).
 * @method float getMax() Obtain Maximum request latency (seconds).
 * @method void setMax(float $Max) Set Maximum request latency (seconds).
 * @method float getErrorPercentage() Obtain Request error rate.
 * @method void setErrorPercentage(float $ErrorPercentage) Set Request error rate.
 * @method float getP99() Obtain Request p99 latency (seconds).
 * @method void setP99(float $P99) Set Request p99 latency (seconds).
 * @method string getStatus() Obtain Response status code.
 * @method void setStatus(string $Status) Set Response status code.
 * @method string getResult() Obtain Response details.
 * @method void setResult(string $Result) Set Response details.
 * @method float getRPS() Obtain Request per seconds, unit req/s.
 * @method void setRPS(float $RPS) Set Request per seconds, unit req/s.
 */
class RequestSummary extends AbstractModel
{
    /**
     * @var string Request URL.
     */
    public $Service;

    /**
     * @var string Request method.
     */
    public $Method;

    /**
     * @var integer Number of requests.
     */
    public $Count;

    /**
     * @var float Average request response time (seconds).
     */
    public $Average;

    /**
     * @var float Request p90 latency (seconds).
     */
    public $P90;

    /**
     * @var float Request p95 latency (seconds).
     */
    public $P95;

    /**
     * @var float Minimum request latency (seconds).
     */
    public $Min;

    /**
     * @var float Maximum request latency (seconds).
     */
    public $Max;

    /**
     * @var float Request error rate.
     */
    public $ErrorPercentage;

    /**
     * @var float Request p99 latency (seconds).
     */
    public $P99;

    /**
     * @var string Response status code.
     */
    public $Status;

    /**
     * @var string Response details.
     */
    public $Result;

    /**
     * @var float Request per seconds, unit req/s.
     */
    public $RPS;

    /**
     * @param string $Service Request URL.
     * @param string $Method Request method.
     * @param integer $Count Number of requests.
     * @param float $Average Average request response time (seconds).
     * @param float $P90 Request p90 latency (seconds).
     * @param float $P95 Request p95 latency (seconds).
     * @param float $Min Minimum request latency (seconds).
     * @param float $Max Maximum request latency (seconds).
     * @param float $ErrorPercentage Request error rate.
     * @param float $P99 Request p99 latency (seconds).
     * @param string $Status Response status code.
     * @param string $Result Response details.
     * @param float $RPS Request per seconds, unit req/s.
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = $param["Average"];
        }

        if (array_key_exists("P90",$param) and $param["P90"] !== null) {
            $this->P90 = $param["P90"];
        }

        if (array_key_exists("P95",$param) and $param["P95"] !== null) {
            $this->P95 = $param["P95"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("ErrorPercentage",$param) and $param["ErrorPercentage"] !== null) {
            $this->ErrorPercentage = $param["ErrorPercentage"];
        }

        if (array_key_exists("P99",$param) and $param["P99"] !== null) {
            $this->P99 = $param["P99"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("RPS",$param) and $param["RPS"] !== null) {
            $this->RPS = $param["RPS"];
        }
    }
}
