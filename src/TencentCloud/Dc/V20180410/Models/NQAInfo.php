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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NQA configuration information
 *
 * @method integer getProbeFailedTimes() Obtain Number of health checks
 * @method void setProbeFailedTimes(integer $ProbeFailedTimes) Set Number of health checks
 * @method integer getInterval() Obtain Health check interval
 * @method void setInterval(integer $Interval) Set Health check interval
 * @method string getDestinationIp() Obtain IP address for the health check
 * @method void setDestinationIp(string $DestinationIp) Set IP address for the health check
 */
class NQAInfo extends AbstractModel
{
    /**
     * @var integer Number of health checks
     */
    public $ProbeFailedTimes;

    /**
     * @var integer Health check interval
     */
    public $Interval;

    /**
     * @var string IP address for the health check
     */
    public $DestinationIp;

    /**
     * @param integer $ProbeFailedTimes Number of health checks
     * @param integer $Interval Health check interval
     * @param string $DestinationIp IP address for the health check
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
        if (array_key_exists("ProbeFailedTimes",$param) and $param["ProbeFailedTimes"] !== null) {
            $this->ProbeFailedTimes = $param["ProbeFailedTimes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("DestinationIp",$param) and $param["DestinationIp"] !== null) {
            $this->DestinationIp = $param["DestinationIp"];
        }
    }
}
