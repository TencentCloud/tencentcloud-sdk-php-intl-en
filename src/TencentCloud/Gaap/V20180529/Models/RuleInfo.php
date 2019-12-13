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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRuleId() 获取Rule information
 * @method void setRuleId(string $RuleId) 设置Rule information
 * @method string getListenerId() 获取Listener information
 * @method void setListenerId(string $ListenerId) 设置Listener information
 * @method string getDomain() 获取Rule domain name
 * @method void setDomain(string $Domain) 设置Rule domain name
 * @method string getPath() 获取Rule path
 * @method void setPath(string $Path) 设置Rule path
 * @method string getRealServerType() 获取Origin server type
 * @method void setRealServerType(string $RealServerType) 设置Origin server type
 * @method string getScheduler() 获取Forwarding policy of the origin server
 * @method void setScheduler(string $Scheduler) 设置Forwarding policy of the origin server
 * @method integer getHealthCheck() 获取Health check identifier: 1 (enable), 0 (disable).
 * @method void setHealthCheck(integer $HealthCheck) 设置Health check identifier: 1 (enable), 0 (disable).
 * @method integer getRuleStatus() 获取Origin server status. 0: running; 1: creating; 2: terminating; 3: binding or unbinding; 4: updating configuration
 * @method void setRuleStatus(integer $RuleStatus) 设置Origin server status. 0: running; 1: creating; 2: terminating; 3: binding or unbinding; 4: updating configuration
 * @method RuleCheckParams getCheckParams() 获取Health check parameters
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置Health check parameters
 * @method array getRealServerSet() 获取Bound origin server information
 * @method void setRealServerSet(array $RealServerSet) 设置Bound origin server information
 * @method integer getBindStatus() 获取Origin server binding status. 0: normal; 1: origin server IP exception; 2: origin server domain name resolution exception.
 * @method void setBindStatus(integer $BindStatus) 设置Origin server binding status. 0: normal; 1: origin server IP exception; 2: origin server domain name resolution exception.
 * @method string getForwardHost() 获取The ‘host’ carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received “host”.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardHost(string $ForwardHost) 设置The ‘host’ carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received “host”.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Forwarding rule of layer-7 listeners
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var string Rule information
     */
    public $RuleId;

    /**
     * @var string Listener information
     */
    public $ListenerId;

    /**
     * @var string Rule domain name
     */
    public $Domain;

    /**
     * @var string Rule path
     */
    public $Path;

    /**
     * @var string Origin server type
     */
    public $RealServerType;

    /**
     * @var string Forwarding policy of the origin server
     */
    public $Scheduler;

    /**
     * @var integer Health check identifier: 1 (enable), 0 (disable).
     */
    public $HealthCheck;

    /**
     * @var integer Origin server status. 0: running; 1: creating; 2: terminating; 3: binding or unbinding; 4: updating configuration
     */
    public $RuleStatus;

    /**
     * @var RuleCheckParams Health check parameters
     */
    public $CheckParams;

    /**
     * @var array Bound origin server information
     */
    public $RealServerSet;

    /**
     * @var integer Origin server binding status. 0: normal; 1: origin server IP exception; 2: origin server domain name resolution exception.
     */
    public $BindStatus;

    /**
     * @var string The ‘host’ carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received “host”.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardHost;
    /**
     * @param string $RuleId Rule information
     * @param string $ListenerId Listener information
     * @param string $Domain Rule domain name
     * @param string $Path Rule path
     * @param string $RealServerType Origin server type
     * @param string $Scheduler Forwarding policy of the origin server
     * @param integer $HealthCheck Health check identifier: 1 (enable), 0 (disable).
     * @param integer $RuleStatus Origin server status. 0: running; 1: creating; 2: terminating; 3: binding or unbinding; 4: updating configuration
     * @param RuleCheckParams $CheckParams Health check parameters
     * @param array $RealServerSet Bound origin server information
     * @param integer $BindStatus Origin server binding status. 0: normal; 1: origin server IP exception; 2: origin server domain name resolution exception.
     * @param string $ForwardHost The ‘host’ carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received “host”.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }
    }
}
