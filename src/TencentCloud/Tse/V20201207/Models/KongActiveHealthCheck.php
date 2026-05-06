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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kong gateway proactive health check configuration
 *
 * @method integer getHealthyInterval() Obtain Probe interval for active health check in seconds. 0 means disabled.
 * @method void setHealthyInterval(integer $HealthyInterval) Set Probe interval for active health check in seconds. 0 means disabled.
 * @method integer getUnHealthyInterval() Obtain Proactive health check exception probe interval, unit: second. 0 indicates disabled.
 * @method void setUnHealthyInterval(integer $UnHealthyInterval) Set Proactive health check exception probe interval, unit: second. 0 indicates disabled.
 * @method string getHttpPath() Obtain Path used in GET HTTP request to run as a proactive health check probe. Default: "/".
 * @method void setHttpPath(string $HttpPath) Set Path used in GET HTTP request to run as a proactive health check probe. Default: "/".
 * @method float getTimeout() Obtain Timeout for GET HTTP requests, unit: seconds. Default 60.
 * @method void setTimeout(float $Timeout) Set Timeout for GET HTTP requests, unit: seconds. Default 60.
 */
class KongActiveHealthCheck extends AbstractModel
{
    /**
     * @var integer Probe interval for active health check in seconds. 0 means disabled.
     */
    public $HealthyInterval;

    /**
     * @var integer Proactive health check exception probe interval, unit: second. 0 indicates disabled.
     */
    public $UnHealthyInterval;

    /**
     * @var string Path used in GET HTTP request to run as a proactive health check probe. Default: "/".
     */
    public $HttpPath;

    /**
     * @var float Timeout for GET HTTP requests, unit: seconds. Default 60.
     */
    public $Timeout;

    /**
     * @param integer $HealthyInterval Probe interval for active health check in seconds. 0 means disabled.
     * @param integer $UnHealthyInterval Proactive health check exception probe interval, unit: second. 0 indicates disabled.
     * @param string $HttpPath Path used in GET HTTP request to run as a proactive health check probe. Default: "/".
     * @param float $Timeout Timeout for GET HTTP requests, unit: seconds. Default 60.
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
        if (array_key_exists("HealthyInterval",$param) and $param["HealthyInterval"] !== null) {
            $this->HealthyInterval = $param["HealthyInterval"];
        }

        if (array_key_exists("UnHealthyInterval",$param) and $param["UnHealthyInterval"] !== null) {
            $this->UnHealthyInterval = $param["UnHealthyInterval"];
        }

        if (array_key_exists("HttpPath",$param) and $param["HttpPath"] !== null) {
            $this->HttpPath = $param["HttpPath"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
