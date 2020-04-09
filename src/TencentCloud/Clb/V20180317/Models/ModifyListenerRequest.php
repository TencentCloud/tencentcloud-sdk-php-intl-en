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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyListener request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getListenerName() Obtain New listener name
 * @method void setListenerName(string $ListenerName) Set New listener name
 * @method integer getSessionExpireTime() Obtain Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method HealthCheck getHealthCheck() Obtain Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners.
 * @method CertificateInput getCertificate() Obtain Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
 * @method void setCertificate(CertificateInput $Certificate) Set Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
 * @method string getScheduler() Obtain Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) Set Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
 * @method integer getSniSwitch() Obtain Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners. Note: The SNI feature can be enabled but cannot be disabled once enabled.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners. Note: The SNI feature can be enabled but cannot be disabled once enabled.
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB listener ID
     */
    public $ListenerId;

    /**
     * @var string New listener name
     */
    public $ListenerName;

    /**
     * @var integer Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners.
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
     */
    public $Certificate;

    /**
     * @var string Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners. Note: The SNI feature can be enabled but cannot be disabled once enabled.
     */
    public $SniSwitch;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param string $ListenerName New listener name
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30-3,600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param HealthCheck $HealthCheck Health check parameter, which is applicable only to TCP/UDP/TCP_SSL listeners.
     * @param CertificateInput $Certificate Certificate information. This parameter is applicable only to HTTPS/TCP_SSL listeners.
     * @param string $Scheduler Forwarding method of a listener. Value range: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
     * @param integer $SniSwitch Whether to enable the SNI feature. This parameter is applicable only to HTTPS listeners. Note: The SNI feature can be enabled but cannot be disabled once enabled.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }
    }
}
