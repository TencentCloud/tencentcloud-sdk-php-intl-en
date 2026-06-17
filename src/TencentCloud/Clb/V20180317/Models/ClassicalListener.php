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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Classic CLB listener information
 *
 * @method string getListenerId() Obtain <p>CLB listener ID</p>
 * @method void setListenerId(string $ListenerId) Set <p>CLB listener ID</p>
 * @method integer getListenerPort() Obtain <p>CLB listener port</p>
 * @method void setListenerPort(integer $ListenerPort) Set <p>CLB listener port</p>
 * @method integer getInstancePort() Obtain <p>listener backend forwarding port</p>
 * @method void setInstancePort(integer $InstancePort) Set <p>listener backend forwarding port</p>
 * @method string getListenerName() Obtain <p>Listener name</p>
 * @method void setListenerName(string $ListenerName) Set <p>Listener name</p>
 * @method string getProtocol() Obtain <p>Listener protocol type</p>
 * @method void setProtocol(string $Protocol) Set <p>Listener protocol type</p>
 * @method integer getSessionExpire() Obtain <p>Session persistence time</p>
 * @method void setSessionExpire(integer $SessionExpire) Set <p>Session persistence time</p>
 * @method integer getHealthSwitch() Obtain <p>Whether health check is enabled: 1 (enabled), 0 (disabled)</p>
 * @method void setHealthSwitch(integer $HealthSwitch) Set <p>Whether health check is enabled: 1 (enabled), 0 (disabled)</p>
 * @method integer getTimeOut() Obtain <p>Response timeout</p><p>Unit: second</p>
 * @method void setTimeOut(integer $TimeOut) Set <p>Response timeout</p><p>Unit: second</p>
 * @method integer getIntervalTime() Obtain <p>Check interval</p><p>Unit: seconds</p>
 * @method void setIntervalTime(integer $IntervalTime) Set <p>Check interval</p><p>Unit: seconds</p>
 * @method integer getHealthNum() Obtain <p>Health threshold</p>
 * @method void setHealthNum(integer $HealthNum) Set <p>Health threshold</p>
 * @method integer getUnhealthNum() Obtain <p>Unhealthy threshold</p>
 * @method void setUnhealthNum(integer $UnhealthNum) Set <p>Unhealthy threshold</p>
 * @method string getHttpHash() Obtain <p>Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.</p>
 * @method void setHttpHash(string $HttpHash) Set <p>Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.</p>
 * @method integer getHttpCode() Obtain <p>Health check return code of HTTP and HTTPS listeners for public network CLB. For details, see the explanation of this field in listener creation API.</p>
 * @method void setHttpCode(integer $HttpCode) Set <p>Health check return code of HTTP and HTTPS listeners for public network CLB. For details, see the explanation of this field in listener creation API.</p>
 * @method string getHttpCheckPath() Obtain <p>Health check path of HTTP and HTTPS listeners for public network CLB</p>
 * @method void setHttpCheckPath(string $HttpCheckPath) Set <p>Health check path of HTTP and HTTPS listeners for public network CLB</p>
 * @method string getSSLMode() Obtain <p>Authentication method of the HTTPS listener for public network CLB</p>
 * @method void setSSLMode(string $SSLMode) Set <p>Authentication method of the HTTPS listener for public network CLB</p>
 * @method string getCertId() Obtain <p>Server certificate ID of the HTTPS listener for the public network CLB</p>
 * @method void setCertId(string $CertId) Set <p>Server certificate ID of the HTTPS listener for the public network CLB</p>
 * @method string getCertCaId() Obtain <p>Client certificate ID of the HTTPS listener for public network CLB</p>
 * @method void setCertCaId(string $CertCaId) Set <p>Client certificate ID of the HTTPS listener for public network CLB</p>
 * @method integer getStatus() Obtain <p>Listener status. 0 indicates creating in progress, 1 indicates running.</p>
 * @method void setStatus(integer $Status) Set <p>Listener status. 0 indicates creating in progress, 1 indicates running.</p>
 */
class ClassicalListener extends AbstractModel
{
    /**
     * @var string <p>CLB listener ID</p>
     */
    public $ListenerId;

    /**
     * @var integer <p>CLB listener port</p>
     */
    public $ListenerPort;

    /**
     * @var integer <p>listener backend forwarding port</p>
     */
    public $InstancePort;

    /**
     * @var string <p>Listener name</p>
     */
    public $ListenerName;

    /**
     * @var string <p>Listener protocol type</p>
     */
    public $Protocol;

    /**
     * @var integer <p>Session persistence time</p>
     */
    public $SessionExpire;

    /**
     * @var integer <p>Whether health check is enabled: 1 (enabled), 0 (disabled)</p>
     */
    public $HealthSwitch;

    /**
     * @var integer <p>Response timeout</p><p>Unit: second</p>
     */
    public $TimeOut;

    /**
     * @var integer <p>Check interval</p><p>Unit: seconds</p>
     */
    public $IntervalTime;

    /**
     * @var integer <p>Health threshold</p>
     */
    public $HealthNum;

    /**
     * @var integer <p>Unhealthy threshold</p>
     */
    public $UnhealthNum;

    /**
     * @var string <p>Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.</p>
     */
    public $HttpHash;

    /**
     * @var integer <p>Health check return code of HTTP and HTTPS listeners for public network CLB. For details, see the explanation of this field in listener creation API.</p>
     */
    public $HttpCode;

    /**
     * @var string <p>Health check path of HTTP and HTTPS listeners for public network CLB</p>
     */
    public $HttpCheckPath;

    /**
     * @var string <p>Authentication method of the HTTPS listener for public network CLB</p>
     */
    public $SSLMode;

    /**
     * @var string <p>Server certificate ID of the HTTPS listener for the public network CLB</p>
     */
    public $CertId;

    /**
     * @var string <p>Client certificate ID of the HTTPS listener for public network CLB</p>
     */
    public $CertCaId;

    /**
     * @var integer <p>Listener status. 0 indicates creating in progress, 1 indicates running.</p>
     */
    public $Status;

    /**
     * @param string $ListenerId <p>CLB listener ID</p>
     * @param integer $ListenerPort <p>CLB listener port</p>
     * @param integer $InstancePort <p>listener backend forwarding port</p>
     * @param string $ListenerName <p>Listener name</p>
     * @param string $Protocol <p>Listener protocol type</p>
     * @param integer $SessionExpire <p>Session persistence time</p>
     * @param integer $HealthSwitch <p>Whether health check is enabled: 1 (enabled), 0 (disabled)</p>
     * @param integer $TimeOut <p>Response timeout</p><p>Unit: second</p>
     * @param integer $IntervalTime <p>Check interval</p><p>Unit: seconds</p>
     * @param integer $HealthNum <p>Health threshold</p>
     * @param integer $UnhealthNum <p>Unhealthy threshold</p>
     * @param string $HttpHash <p>Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.</p>
     * @param integer $HttpCode <p>Health check return code of HTTP and HTTPS listeners for public network CLB. For details, see the explanation of this field in listener creation API.</p>
     * @param string $HttpCheckPath <p>Health check path of HTTP and HTTPS listeners for public network CLB</p>
     * @param string $SSLMode <p>Authentication method of the HTTPS listener for public network CLB</p>
     * @param string $CertId <p>Server certificate ID of the HTTPS listener for the public network CLB</p>
     * @param string $CertCaId <p>Client certificate ID of the HTTPS listener for public network CLB</p>
     * @param integer $Status <p>Listener status. 0 indicates creating in progress, 1 indicates running.</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("InstancePort",$param) and $param["InstancePort"] !== null) {
            $this->InstancePort = $param["InstancePort"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("HttpHash",$param) and $param["HttpHash"] !== null) {
            $this->HttpHash = $param["HttpHash"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
