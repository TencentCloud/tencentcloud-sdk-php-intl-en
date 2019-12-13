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
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getRuleId() 获取Forwarding rule ID
 * @method void setRuleId(string $RuleId) 设置Forwarding rule ID
 * @method string getScheduler() 获取Scheduling policy:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
 * @method void setScheduler(string $Scheduler) 设置Scheduling policy:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
 * @method integer getHealthCheck() 获取Whether to enable the origin server health check:
1: enable;
0: disable.
 * @method void setHealthCheck(integer $HealthCheck) 设置Whether to enable the origin server health check:
1: enable;
0: disable.
 * @method RuleCheckParams getCheckParams() 获取Health check configuration parameters
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置Health check configuration parameters
 * @method string getPath() 获取Forwarding rule path
 * @method void setPath(string $Path) 设置Forwarding rule path
 * @method string getForwardProtocol() 获取Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
 * @method void setForwardProtocol(string $ForwardProtocol) 设置Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
 * @method string getForwardHost() 获取The ‘host’ carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name of rule will be used. For other cases, the value set in this field will be used.
 * @method void setForwardHost(string $ForwardHost) 设置The ‘host’ carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name of rule will be used. For other cases, the value set in this field will be used.
 */

/**
 *ModifyRuleAttribute request structure.
 */
class ModifyRuleAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Forwarding rule ID
     */
    public $RuleId;

    /**
     * @var string Scheduling policy:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the origin server health check:
1: enable;
0: disable.
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams Health check configuration parameters
     */
    public $CheckParams;

    /**
     * @var string Forwarding rule path
     */
    public $Path;

    /**
     * @var string Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
     */
    public $ForwardProtocol;

    /**
     * @var string The ‘host’ carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name of rule will be used. For other cases, the value set in this field will be used.
     */
    public $ForwardHost;
    /**
     * @param string $ListenerId Listener ID
     * @param string $RuleId Forwarding rule ID
     * @param string $Scheduler Scheduling policy:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
     * @param integer $HealthCheck Whether to enable the origin server health check:
1: enable;
0: disable.
     * @param RuleCheckParams $CheckParams Health check configuration parameters
     * @param string $Path Forwarding rule path
     * @param string $ForwardProtocol Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
     * @param string $ForwardHost The ‘host’ carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name of rule will be used. For other cases, the value set in this field will be used.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }
    }
}
