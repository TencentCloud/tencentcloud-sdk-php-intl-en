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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upstream health check parameter configuration
 *
 * @method boolean getEnableActiveCheck() Obtain Specifies whether to enable active health check
 * @method void setEnableActiveCheck(boolean $EnableActiveCheck) Set Specifies whether to enable active health check
 * @method boolean getEnablePassiveCheck() Obtain Specifies whether the enable passive health check
 * @method void setEnablePassiveCheck(boolean $EnablePassiveCheck) Set Specifies whether the enable passive health check
 * @method string getHealthyHttpStatus() Obtain The HTTP status code that indicates that the upstream is healthy
 * @method void setHealthyHttpStatus(string $HealthyHttpStatus) Set The HTTP status code that indicates that the upstream is healthy
 * @method string getUnhealthyHttpStatus() Obtain The HTTP status code that indicates that the upstream is unhealthy
 * @method void setUnhealthyHttpStatus(string $UnhealthyHttpStatus) Set The HTTP status code that indicates that the upstream is unhealthy
 * @method integer getTcpFailureThreshold() Obtain The threshold on consecutive TCP errors. Range: [0, 254]. `0` indicates not to check TCP.
 * @method void setTcpFailureThreshold(integer $TcpFailureThreshold) Set The threshold on consecutive TCP errors. Range: [0, 254]. `0` indicates not to check TCP.
 * @method integer getTimeoutThreshold() Obtain The threshold on consecutive timeouts. Range: [0, 254]. `0` indicates not to check TCP.
 * @method void setTimeoutThreshold(integer $TimeoutThreshold) Set The threshold on consecutive timeouts. Range: [0, 254]. `0` indicates not to check TCP.
 * @method integer getHttpFailureThreshold() Obtain The threshold on consecutive HTTP errors. Range: [0, 254]. `0` indicates not to check HTTP.
 * @method void setHttpFailureThreshold(integer $HttpFailureThreshold) Set The threshold on consecutive HTTP errors. Range: [0, 254]. `0` indicates not to check HTTP.
 * @method string getActiveCheckHttpPath() Obtain The path for active health check. It defaults to `/`.
 * @method void setActiveCheckHttpPath(string $ActiveCheckHttpPath) Set The path for active health check. It defaults to `/`.
 * @method integer getActiveCheckTimeout() Obtain The timeout period for active health check in seconds. Default: `5`. 
 * @method void setActiveCheckTimeout(integer $ActiveCheckTimeout) Set The timeout period for active health check in seconds. Default: `5`. 
 * @method integer getActiveCheckInterval() Obtain The interval for active health check in seconds. Default: `5`. 
 * @method void setActiveCheckInterval(integer $ActiveCheckInterval) Set The interval for active health check in seconds. Default: `5`. 
 * @method array getActiveRequestHeader() Obtain Header of the active health check request
 * @method void setActiveRequestHeader(array $ActiveRequestHeader) Set Header of the active health check request
 * @method integer getUnhealthyTimeout() Obtain The period for an abnormal to recover automatically in seconds. If only the passive health check is enabled, it must be greater than 0. Otherwise the abnormal nodes can not recovered automatically. The default value is 30 seconds. 
 * @method void setUnhealthyTimeout(integer $UnhealthyTimeout) Set The period for an abnormal to recover automatically in seconds. If only the passive health check is enabled, it must be greater than 0. Otherwise the abnormal nodes can not recovered automatically. The default value is 30 seconds. 
 */
class UpstreamHealthChecker extends AbstractModel
{
    /**
     * @var boolean Specifies whether to enable active health check
     */
    public $EnableActiveCheck;

    /**
     * @var boolean Specifies whether the enable passive health check
     */
    public $EnablePassiveCheck;

    /**
     * @var string The HTTP status code that indicates that the upstream is healthy
     */
    public $HealthyHttpStatus;

    /**
     * @var string The HTTP status code that indicates that the upstream is unhealthy
     */
    public $UnhealthyHttpStatus;

    /**
     * @var integer The threshold on consecutive TCP errors. Range: [0, 254]. `0` indicates not to check TCP.
     */
    public $TcpFailureThreshold;

    /**
     * @var integer The threshold on consecutive timeouts. Range: [0, 254]. `0` indicates not to check TCP.
     */
    public $TimeoutThreshold;

    /**
     * @var integer The threshold on consecutive HTTP errors. Range: [0, 254]. `0` indicates not to check HTTP.
     */
    public $HttpFailureThreshold;

    /**
     * @var string The path for active health check. It defaults to `/`.
     */
    public $ActiveCheckHttpPath;

    /**
     * @var integer The timeout period for active health check in seconds. Default: `5`. 
     */
    public $ActiveCheckTimeout;

    /**
     * @var integer The interval for active health check in seconds. Default: `5`. 
     */
    public $ActiveCheckInterval;

    /**
     * @var array Header of the active health check request
     */
    public $ActiveRequestHeader;

    /**
     * @var integer The period for an abnormal to recover automatically in seconds. If only the passive health check is enabled, it must be greater than 0. Otherwise the abnormal nodes can not recovered automatically. The default value is 30 seconds. 
     */
    public $UnhealthyTimeout;

    /**
     * @param boolean $EnableActiveCheck Specifies whether to enable active health check
     * @param boolean $EnablePassiveCheck Specifies whether the enable passive health check
     * @param string $HealthyHttpStatus The HTTP status code that indicates that the upstream is healthy
     * @param string $UnhealthyHttpStatus The HTTP status code that indicates that the upstream is unhealthy
     * @param integer $TcpFailureThreshold The threshold on consecutive TCP errors. Range: [0, 254]. `0` indicates not to check TCP.
     * @param integer $TimeoutThreshold The threshold on consecutive timeouts. Range: [0, 254]. `0` indicates not to check TCP.
     * @param integer $HttpFailureThreshold The threshold on consecutive HTTP errors. Range: [0, 254]. `0` indicates not to check HTTP.
     * @param string $ActiveCheckHttpPath The path for active health check. It defaults to `/`.
     * @param integer $ActiveCheckTimeout The timeout period for active health check in seconds. Default: `5`. 
     * @param integer $ActiveCheckInterval The interval for active health check in seconds. Default: `5`. 
     * @param array $ActiveRequestHeader Header of the active health check request
     * @param integer $UnhealthyTimeout The period for an abnormal to recover automatically in seconds. If only the passive health check is enabled, it must be greater than 0. Otherwise the abnormal nodes can not recovered automatically. The default value is 30 seconds. 
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
        if (array_key_exists("EnableActiveCheck",$param) and $param["EnableActiveCheck"] !== null) {
            $this->EnableActiveCheck = $param["EnableActiveCheck"];
        }

        if (array_key_exists("EnablePassiveCheck",$param) and $param["EnablePassiveCheck"] !== null) {
            $this->EnablePassiveCheck = $param["EnablePassiveCheck"];
        }

        if (array_key_exists("HealthyHttpStatus",$param) and $param["HealthyHttpStatus"] !== null) {
            $this->HealthyHttpStatus = $param["HealthyHttpStatus"];
        }

        if (array_key_exists("UnhealthyHttpStatus",$param) and $param["UnhealthyHttpStatus"] !== null) {
            $this->UnhealthyHttpStatus = $param["UnhealthyHttpStatus"];
        }

        if (array_key_exists("TcpFailureThreshold",$param) and $param["TcpFailureThreshold"] !== null) {
            $this->TcpFailureThreshold = $param["TcpFailureThreshold"];
        }

        if (array_key_exists("TimeoutThreshold",$param) and $param["TimeoutThreshold"] !== null) {
            $this->TimeoutThreshold = $param["TimeoutThreshold"];
        }

        if (array_key_exists("HttpFailureThreshold",$param) and $param["HttpFailureThreshold"] !== null) {
            $this->HttpFailureThreshold = $param["HttpFailureThreshold"];
        }

        if (array_key_exists("ActiveCheckHttpPath",$param) and $param["ActiveCheckHttpPath"] !== null) {
            $this->ActiveCheckHttpPath = $param["ActiveCheckHttpPath"];
        }

        if (array_key_exists("ActiveCheckTimeout",$param) and $param["ActiveCheckTimeout"] !== null) {
            $this->ActiveCheckTimeout = $param["ActiveCheckTimeout"];
        }

        if (array_key_exists("ActiveCheckInterval",$param) and $param["ActiveCheckInterval"] !== null) {
            $this->ActiveCheckInterval = $param["ActiveCheckInterval"];
        }

        if (array_key_exists("ActiveRequestHeader",$param) and $param["ActiveRequestHeader"] !== null) {
            $this->ActiveRequestHeader = [];
            foreach ($param["ActiveRequestHeader"] as $key => $value){
                $obj = new UpstreamHealthCheckerReqHeaders();
                $obj->deserialize($value);
                array_push($this->ActiveRequestHeader, $obj);
            }
        }

        if (array_key_exists("UnhealthyTimeout",$param) and $param["UnhealthyTimeout"] !== null) {
            $this->UnhealthyTimeout = $param["UnhealthyTimeout"];
        }
    }
}
