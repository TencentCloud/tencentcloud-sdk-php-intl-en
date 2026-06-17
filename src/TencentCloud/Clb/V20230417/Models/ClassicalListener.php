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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Classic CLB listener information
 *
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method integer getListenerPort() Obtain CLB listener port
 * @method void setListenerPort(integer $ListenerPort) Set CLB listener port
 * @method integer getInstancePort() Obtain Listener backend forwarding port
 * @method void setInstancePort(integer $InstancePort) Set Listener backend forwarding port
 * @method string getListenerName() Obtain listener name
 * @method void setListenerName(string $ListenerName) Set listener name
 * @method string getProtocol() Obtain Listener protocol type
 * @method void setProtocol(string $Protocol) Set Listener protocol type
 * @method integer getSessionExpire() Obtain Session hold time
 * @method void setSessionExpire(integer $SessionExpire) Set Session hold time
 * @method integer getHealthSwitch() Obtain Whether health check is enabled. 1: Enabled; 0: Disabled
 * @method void setHealthSwitch(integer $HealthSwitch) Set Whether health check is enabled. 1: Enabled; 0: Disabled
 * @method integer getTimeOut() Obtain Response timeout duration
 * @method void setTimeOut(integer $TimeOut) Set Response timeout duration
 * @method integer getIntervalTime() Obtain check interval
 * @method void setIntervalTime(integer $IntervalTime) Set check interval
 * @method integer getHealthNum() Obtain health threshold
 * @method void setHealthNum(integer $HealthNum) Set health threshold
 * @method integer getAbnormalNum() Obtain unhealthy threshold
 * @method void setAbnormalNum(integer $AbnormalNum) Set unhealthy threshold
 * @method string getHttpHash() Obtain Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.
 * @method void setHttpHash(string $HttpHash) Set Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.
 * @method integer getHttpCode() Obtain Health check return code for HTTP and HTTPS listeners of a public network Classic CLB instance. For more information, refer to the explanation of this field in the listener creation API.
 * @method void setHttpCode(integer $HttpCode) Set Health check return code for HTTP and HTTPS listeners of a public network Classic CLB instance. For more information, refer to the explanation of this field in the listener creation API.
 * @method string getHttpCheckPath() Obtain Health check path for HTTP and HTTPS listeners of a public network Classic CLB instance
 * @method void setHttpCheckPath(string $HttpCheckPath) Set Health check path for HTTP and HTTPS listeners of a public network Classic CLB instance
 * @method string getSSLMode() Obtain Authentication method for an HTTPS listener of a public network Classic CLB instance
 * @method void setSSLMode(string $SSLMode) Set Authentication method for an HTTPS listener of a public network Classic CLB instance
 * @method string getCertId() Obtain Server certificate ID for an HTTPS listener of a public network Classic CLB instance
 * @method void setCertId(string $CertId) Set Server certificate ID for an HTTPS listener of a public network Classic CLB instance
 * @method string getCertCaId() Obtain Client certificate ID for an HTTPS listener of a public network Classic CLB instance
 * @method void setCertCaId(string $CertCaId) Set Client certificate ID for an HTTPS listener of a public network Classic CLB instance
 * @method integer getStatus() Obtain Listener status. 0: Creating; 1: Running
 * @method void setStatus(integer $Status) Set Listener status. 0: Creating; 1: Running
 */
class ClassicalListener extends AbstractModel
{
    /**
     * @var string CLB listener ID
     */
    public $ListenerId;

    /**
     * @var integer CLB listener port
     */
    public $ListenerPort;

    /**
     * @var integer Listener backend forwarding port
     */
    public $InstancePort;

    /**
     * @var string listener name
     */
    public $ListenerName;

    /**
     * @var string Listener protocol type
     */
    public $Protocol;

    /**
     * @var integer Session hold time
     */
    public $SessionExpire;

    /**
     * @var integer Whether health check is enabled. 1: Enabled; 0: Disabled
     */
    public $HealthSwitch;

    /**
     * @var integer Response timeout duration
     */
    public $TimeOut;

    /**
     * @var integer check interval
     */
    public $IntervalTime;

    /**
     * @var integer health threshold
     */
    public $HealthNum;

    /**
     * @var integer unhealthy threshold
     */
    public $AbnormalNum;

    /**
     * @var string Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.
     */
    public $HttpHash;

    /**
     * @var integer Health check return code for HTTP and HTTPS listeners of a public network Classic CLB instance. For more information, refer to the explanation of this field in the listener creation API.
     */
    public $HttpCode;

    /**
     * @var string Health check path for HTTP and HTTPS listeners of a public network Classic CLB instance
     */
    public $HttpCheckPath;

    /**
     * @var string Authentication method for an HTTPS listener of a public network Classic CLB instance
     */
    public $SSLMode;

    /**
     * @var string Server certificate ID for an HTTPS listener of a public network Classic CLB instance
     */
    public $CertId;

    /**
     * @var string Client certificate ID for an HTTPS listener of a public network Classic CLB instance
     */
    public $CertCaId;

    /**
     * @var integer Listener status. 0: Creating; 1: Running
     */
    public $Status;

    /**
     * @param string $ListenerId CLB listener ID
     * @param integer $ListenerPort CLB listener port
     * @param integer $InstancePort Listener backend forwarding port
     * @param string $ListenerName listener name
     * @param string $Protocol Listener protocol type
     * @param integer $SessionExpire Session hold time
     * @param integer $HealthSwitch Whether health check is enabled. 1: Enabled; 0: Disabled
     * @param integer $TimeOut Response timeout duration
     * @param integer $IntervalTime check interval
     * @param integer $HealthNum health threshold
     * @param integer $AbnormalNum unhealthy threshold
     * @param string $HttpHash Request balancing method for listeners of the classic public network CLB. An empty string or wrr indicates weighted round robin. ip_hash indicates consistent hashing based on the accessed source IP address. least_conn indicates least connections.
     * @param integer $HttpCode Health check return code for HTTP and HTTPS listeners of a public network Classic CLB instance. For more information, refer to the explanation of this field in the listener creation API.
     * @param string $HttpCheckPath Health check path for HTTP and HTTPS listeners of a public network Classic CLB instance
     * @param string $SSLMode Authentication method for an HTTPS listener of a public network Classic CLB instance
     * @param string $CertId Server certificate ID for an HTTPS listener of a public network Classic CLB instance
     * @param string $CertCaId Client certificate ID for an HTTPS listener of a public network Classic CLB instance
     * @param integer $Status Listener status. 0: Creating; 1: Running
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

        if (array_key_exists("AbnormalNum",$param) and $param["AbnormalNum"] !== null) {
            $this->AbnormalNum = $param["AbnormalNum"];
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
