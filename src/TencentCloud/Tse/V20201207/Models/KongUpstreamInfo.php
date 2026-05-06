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
 * backend configuration of the service
 *
 * @method string getHost() Obtain IP or domain
 * @method void setHost(string $Host) Set IP or domain
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getSourceID() Obtain Service source ID
 * @method void setSourceID(string $SourceID) Set Service source ID
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getServiceName() Obtain Service (registration center or service in Kubernetes) name
 * @method void setServiceName(string $ServiceName) Set Service (registration center or service in Kubernetes) name
 * @method array getTargets() Obtain The backend type is IPList when provided by the service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set The backend type is IPList when provided by the service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceType() Obtain Service source type
 * @method void setSourceType(string $SourceType) Set Service source type
 * @method string getScfType() Obtain SCF Function Type
 * @method void setScfType(string $ScfType) Set SCF Function Type
 * @method string getScfNamespace() Obtain SCF function namespace
 * @method void setScfNamespace(string $ScfNamespace) Set SCF function namespace
 * @method string getScfLambdaName() Obtain SCF Function Name
 * @method void setScfLambdaName(string $ScfLambdaName) Set SCF Function Name
 * @method string getScfLambdaQualifier() Obtain SCF Function Version
 * @method void setScfLambdaQualifier(string $ScfLambdaQualifier) Set SCF Function Version
 * @method integer getSlowStart() Obtain Cold start time, in seconds
 * @method void setSlowStart(integer $SlowStart) Set Cold start time, in seconds
 * @method string getAlgorithm() Obtain Load balancing algorithm, defaults to round-robin, also supports least-connections, consisten_hashing
 * @method void setAlgorithm(string $Algorithm) Set Load balancing algorithm, defaults to round-robin, also supports least-connections, consisten_hashing
 * @method string getAutoScalingGroupID() Obtain Auto scaling group ID of CVM
 * @method void setAutoScalingGroupID(string $AutoScalingGroupID) Set Auto scaling group ID of CVM
 * @method integer getAutoScalingCvmPort() Obtain CVM auto scaling group port
 * @method void setAutoScalingCvmPort(integer $AutoScalingCvmPort) Set CVM auto scaling group port
 * @method string getAutoScalingTatCmdStatus() Obtain TAT command status of the CVM used in the auto scaling group
 * @method void setAutoScalingTatCmdStatus(string $AutoScalingTatCmdStatus) Set TAT command status of the CVM used in the auto scaling group
 * @method string getAutoScalingHookStatus() Obtain CVM auto scaling group lifecycle hook status
 * @method void setAutoScalingHookStatus(string $AutoScalingHookStatus) Set CVM auto scaling group lifecycle hook status
 * @method string getSourceName() Obtain Service source name.
 * @method void setSourceName(string $SourceName) Set Service source name.
 * @method string getRealSourceType() Obtain Precise service source type. Type passed in when creating a service source.
 * @method void setRealSourceType(string $RealSourceType) Set Precise service source type. Type passed in when creating a service source.
 * @method string getHealthStatus() Obtain upstream health status HEALTHY (healthy), UNHEALTHY (abnormal), HEALTHCHECKS_OFF (not enabled), and NONE (health checks not supported)
 * @method void setHealthStatus(string $HealthStatus) Set upstream health status HEALTHY (healthy), UNHEALTHY (abnormal), HEALTHCHECKS_OFF (not enabled), and NONE (health checks not supported)
 * @method boolean getScfCamAuthEnable() Obtain Whether CAM authentication is enabled for SCF. Enabled by default (true) when left blank.
 * @method void setScfCamAuthEnable(boolean $ScfCamAuthEnable) Set Whether CAM authentication is enabled for SCF. Enabled by default (true) when left blank.
 * @method boolean getScfIsBase64Encoded() Obtain Whether Base64 encoding is enabled for SCF, default false
 * @method void setScfIsBase64Encoded(boolean $ScfIsBase64Encoded) Set Whether Base64 encoding is enabled for SCF, default false
 * @method boolean getScfIsIntegratedResponse() Obtain Whether response integration is enabled for the cloud function, default false
 * @method void setScfIsIntegratedResponse(boolean $ScfIsIntegratedResponse) Set Whether response integration is enabled for the cloud function, default false
 */
class KongUpstreamInfo extends AbstractModel
{
    /**
     * @var string IP or domain
     */
    public $Host;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Service source ID
     */
    public $SourceID;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Service (registration center or service in Kubernetes) name
     */
    public $ServiceName;

    /**
     * @var array The backend type is IPList when provided by the service
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @var string Service source type
     */
    public $SourceType;

    /**
     * @var string SCF Function Type
     */
    public $ScfType;

    /**
     * @var string SCF function namespace
     */
    public $ScfNamespace;

    /**
     * @var string SCF Function Name
     */
    public $ScfLambdaName;

    /**
     * @var string SCF Function Version
     */
    public $ScfLambdaQualifier;

    /**
     * @var integer Cold start time, in seconds
     */
    public $SlowStart;

    /**
     * @var string Load balancing algorithm, defaults to round-robin, also supports least-connections, consisten_hashing
     */
    public $Algorithm;

    /**
     * @var string Auto scaling group ID of CVM
     */
    public $AutoScalingGroupID;

    /**
     * @var integer CVM auto scaling group port
     */
    public $AutoScalingCvmPort;

    /**
     * @var string TAT command status of the CVM used in the auto scaling group
     */
    public $AutoScalingTatCmdStatus;

    /**
     * @var string CVM auto scaling group lifecycle hook status
     */
    public $AutoScalingHookStatus;

    /**
     * @var string Service source name.
     */
    public $SourceName;

    /**
     * @var string Precise service source type. Type passed in when creating a service source.
     */
    public $RealSourceType;

    /**
     * @var string upstream health status HEALTHY (healthy), UNHEALTHY (abnormal), HEALTHCHECKS_OFF (not enabled), and NONE (health checks not supported)
     */
    public $HealthStatus;

    /**
     * @var boolean Whether CAM authentication is enabled for SCF. Enabled by default (true) when left blank.
     */
    public $ScfCamAuthEnable;

    /**
     * @var boolean Whether Base64 encoding is enabled for SCF, default false
     */
    public $ScfIsBase64Encoded;

    /**
     * @var boolean Whether response integration is enabled for the cloud function, default false
     */
    public $ScfIsIntegratedResponse;

    /**
     * @param string $Host IP or domain
     * @param integer $Port Port.
     * @param string $SourceID Service source ID
     * @param string $Namespace Namespace
     * @param string $ServiceName Service (registration center or service in Kubernetes) name
     * @param array $Targets The backend type is IPList when provided by the service
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceType Service source type
     * @param string $ScfType SCF Function Type
     * @param string $ScfNamespace SCF function namespace
     * @param string $ScfLambdaName SCF Function Name
     * @param string $ScfLambdaQualifier SCF Function Version
     * @param integer $SlowStart Cold start time, in seconds
     * @param string $Algorithm Load balancing algorithm, defaults to round-robin, also supports least-connections, consisten_hashing
     * @param string $AutoScalingGroupID Auto scaling group ID of CVM
     * @param integer $AutoScalingCvmPort CVM auto scaling group port
     * @param string $AutoScalingTatCmdStatus TAT command status of the CVM used in the auto scaling group
     * @param string $AutoScalingHookStatus CVM auto scaling group lifecycle hook status
     * @param string $SourceName Service source name.
     * @param string $RealSourceType Precise service source type. Type passed in when creating a service source.
     * @param string $HealthStatus upstream health status HEALTHY (healthy), UNHEALTHY (abnormal), HEALTHCHECKS_OFF (not enabled), and NONE (health checks not supported)
     * @param boolean $ScfCamAuthEnable Whether CAM authentication is enabled for SCF. Enabled by default (true) when left blank.
     * @param boolean $ScfIsBase64Encoded Whether Base64 encoding is enabled for SCF, default false
     * @param boolean $ScfIsIntegratedResponse Whether response integration is enabled for the cloud function, default false
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ScfType",$param) and $param["ScfType"] !== null) {
            $this->ScfType = $param["ScfType"];
        }

        if (array_key_exists("ScfNamespace",$param) and $param["ScfNamespace"] !== null) {
            $this->ScfNamespace = $param["ScfNamespace"];
        }

        if (array_key_exists("ScfLambdaName",$param) and $param["ScfLambdaName"] !== null) {
            $this->ScfLambdaName = $param["ScfLambdaName"];
        }

        if (array_key_exists("ScfLambdaQualifier",$param) and $param["ScfLambdaQualifier"] !== null) {
            $this->ScfLambdaQualifier = $param["ScfLambdaQualifier"];
        }

        if (array_key_exists("SlowStart",$param) and $param["SlowStart"] !== null) {
            $this->SlowStart = $param["SlowStart"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("AutoScalingGroupID",$param) and $param["AutoScalingGroupID"] !== null) {
            $this->AutoScalingGroupID = $param["AutoScalingGroupID"];
        }

        if (array_key_exists("AutoScalingCvmPort",$param) and $param["AutoScalingCvmPort"] !== null) {
            $this->AutoScalingCvmPort = $param["AutoScalingCvmPort"];
        }

        if (array_key_exists("AutoScalingTatCmdStatus",$param) and $param["AutoScalingTatCmdStatus"] !== null) {
            $this->AutoScalingTatCmdStatus = $param["AutoScalingTatCmdStatus"];
        }

        if (array_key_exists("AutoScalingHookStatus",$param) and $param["AutoScalingHookStatus"] !== null) {
            $this->AutoScalingHookStatus = $param["AutoScalingHookStatus"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("RealSourceType",$param) and $param["RealSourceType"] !== null) {
            $this->RealSourceType = $param["RealSourceType"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ScfCamAuthEnable",$param) and $param["ScfCamAuthEnable"] !== null) {
            $this->ScfCamAuthEnable = $param["ScfCamAuthEnable"];
        }

        if (array_key_exists("ScfIsBase64Encoded",$param) and $param["ScfIsBase64Encoded"] !== null) {
            $this->ScfIsBase64Encoded = $param["ScfIsBase64Encoded"];
        }

        if (array_key_exists("ScfIsIntegratedResponse",$param) and $param["ScfIsIntegratedResponse"] !== null) {
            $this->ScfIsIntegratedResponse = $param["ScfIsIntegratedResponse"];
        }
    }
}
