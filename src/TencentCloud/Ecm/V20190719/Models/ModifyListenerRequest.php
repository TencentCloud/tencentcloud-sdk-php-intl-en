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
namespace TencentCloud\Ecm\V20190719\Models;
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
 * @method integer getSessionExpireTime() Obtain Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method HealthCheck getHealthCheck() Obtain Health check parameters
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameters
 * @method string getScheduler() Obtain Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) Set Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
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
     * @var integer Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check parameters
     */
    public $HealthCheck;

    /**
     * @var string Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param string $ListenerName New listener name
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param HealthCheck $HealthCheck Health check parameters
     * @param string $Scheduler Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
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

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }
    }
}
