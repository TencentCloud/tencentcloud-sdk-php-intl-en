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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusConfig response structure.
 *
 * @method string getConfig() Obtain Global configuration
 * @method void setConfig(string $Config) Set Global configuration
 * @method array getServiceMonitors() Obtain ServiceMonitor configuration
 * @method void setServiceMonitors(array $ServiceMonitors) Set ServiceMonitor configuration
 * @method array getPodMonitors() Obtain PodMonitor configuration
 * @method void setPodMonitors(array $PodMonitors) Set PodMonitor configuration
 * @method array getRawJobs() Obtain Raw jobs
 * @method void setRawJobs(array $RawJobs) Set Raw jobs
 * @method array getProbes() Obtain Probes
 * @method void setProbes(array $Probes) Set Probes
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePrometheusConfigResponse extends AbstractModel
{
    /**
     * @var string Global configuration
     */
    public $Config;

    /**
     * @var array ServiceMonitor configuration
     */
    public $ServiceMonitors;

    /**
     * @var array PodMonitor configuration
     */
    public $PodMonitors;

    /**
     * @var array Raw jobs
     */
    public $RawJobs;

    /**
     * @var array Probes
     */
    public $Probes;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Config Global configuration
     * @param array $ServiceMonitors ServiceMonitor configuration
     * @param array $PodMonitors PodMonitor configuration
     * @param array $RawJobs Raw jobs
     * @param array $Probes Probes
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = [];
            foreach ($param["ServiceMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->ServiceMonitors, $obj);
            }
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = [];
            foreach ($param["PodMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->PodMonitors, $obj);
            }
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = [];
            foreach ($param["RawJobs"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RawJobs, $obj);
            }
        }

        if (array_key_exists("Probes",$param) and $param["Probes"] !== null) {
            $this->Probes = [];
            foreach ($param["Probes"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->Probes, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
