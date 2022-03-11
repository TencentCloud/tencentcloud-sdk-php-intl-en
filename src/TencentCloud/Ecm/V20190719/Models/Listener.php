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
 * CLB listener
 *
 * @method string getListenerId() Obtain CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method HealthCheck getHealthCheck() Obtain Health check information of the listener
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check information of the listener
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getScheduler() Obtain Request scheduling method
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setScheduler(string $Scheduler) Set Request scheduling method
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionExpireTime() Obtain Session persistence time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain Listener name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) Set Listener name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Listener creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Listener creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSessionType() Obtain Session type of the listener
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionType(string $SessionType) Set Session type of the listener
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEndPort() Obtain End port of the port range
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndPort(integer $EndPort) Set End port of the port range
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Listener extends AbstractModel
{
    /**
     * @var string CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var HealthCheck Health check information of the listener
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string Request scheduling method
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Scheduler;

    /**
     * @var integer Session persistence time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionExpireTime;

    /**
     * @var string Listener name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Listener creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Session type of the listener
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionType;

    /**
     * @var integer End port of the port range
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndPort;

    /**
     * @param string $ListenerId CLB listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Listener port.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param HealthCheck $HealthCheck Health check information of the listener
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request scheduling method
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime Session persistence time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerName Listener name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Listener creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SessionType Session type of the listener
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $EndPort End port of the port range
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }
    }
}
