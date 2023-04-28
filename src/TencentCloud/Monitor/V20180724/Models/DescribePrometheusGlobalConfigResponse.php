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
 * DescribePrometheusGlobalConfig response structure.
 *
 * @method string getConfig() Obtain Configuration content
 * @method void setConfig(string $Config) Set Configuration content
 * @method array getServiceMonitors() Obtain List of service monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceMonitors(array $ServiceMonitors) Set List of service monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPodMonitors() Obtain List of pod monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodMonitors(array $PodMonitors) Set List of pod monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRawJobs() Obtain List of raw jobs and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRawJobs(array $RawJobs) Set List of raw jobs and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProbes() Obtain List of probes and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProbes(array $Probes) Set List of probes and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePrometheusGlobalConfigResponse extends AbstractModel
{
    /**
     * @var string Configuration content
     */
    public $Config;

    /**
     * @var array List of service monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceMonitors;

    /**
     * @var array List of pod monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodMonitors;

    /**
     * @var array List of raw jobs and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RawJobs;

    /**
     * @var array List of probes and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Probes;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Config Configuration content
     * @param array $ServiceMonitors List of service monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PodMonitors List of pod monitors and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RawJobs List of raw jobs and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Probes List of probes and the corresponding targets information
Note: This field may return null, indicating that no valid values can be obtained.
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
