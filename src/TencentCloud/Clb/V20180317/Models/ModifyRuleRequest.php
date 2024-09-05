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
 * ModifyRule request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getLocationId() Obtain ID of the forwarding rule to be modified.
 * @method void setLocationId(string $LocationId) Set ID of the forwarding rule to be modified.
 * @method string getUrl() Obtain New forwarding path of the forwarding rule. This parameter is not required if the URL does not need to be modified.
 * @method void setUrl(string $Url) Set New forwarding path of the forwarding rule. This parameter is not required if the URL does not need to be modified.
 * @method HealthCheck getHealthCheck() Obtain Health check information
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check information
 * @method string getScheduler() Obtain Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) Set Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method integer getSessionExpireTime() Obtain Session persistence duration, in seconds. Value range: 0 or 30-86400.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence duration, in seconds. Value range: 0 or 30-86400.
 * @method string getForwardType() Obtain Forwarding protocol between a CLB instance and the real server. Default value: HTTP. Valid values: HTTP, HTTPS, GRPC. This parameter is valid only for HTTPS listeners.
 * @method void setForwardType(string $ForwardType) Set Forwarding protocol between a CLB instance and the real server. Default value: HTTP. Valid values: HTTP, HTTPS, GRPC. This parameter is valid only for HTTPS listeners.
 * @method string getTrpcCallee() Obtain TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method void setTrpcCallee(string $TrpcCallee) Set TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method string getTrpcFunc() Obtain TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method void setTrpcFunc(string $TrpcFunc) Set TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method OAuth getOAuth() Obtain OAuth configuration information.
 * @method void setOAuth(OAuth $OAuth) Set OAuth configuration information.
 */
class ModifyRuleRequest extends AbstractModel
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
     * @var string ID of the forwarding rule to be modified.
     */
    public $LocationId;

    /**
     * @var string New forwarding path of the forwarding rule. This parameter is not required if the URL does not need to be modified.
     */
    public $Url;

    /**
     * @var HealthCheck Health check information
     */
    public $HealthCheck;

    /**
     * @var string Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @var integer Session persistence duration, in seconds. Value range: 0 or 30-86400.
     */
    public $SessionExpireTime;

    /**
     * @var string Forwarding protocol between a CLB instance and the real server. Default value: HTTP. Valid values: HTTP, HTTPS, GRPC. This parameter is valid only for HTTPS listeners.
     */
    public $ForwardType;

    /**
     * @var string TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     */
    public $TrpcCallee;

    /**
     * @var string TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     */
    public $TrpcFunc;

    /**
     * @var OAuth OAuth configuration information.
     */
    public $OAuth;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param string $LocationId ID of the forwarding rule to be modified.
     * @param string $Url New forwarding path of the forwarding rule. This parameter is not required if the URL does not need to be modified.
     * @param HealthCheck $HealthCheck Health check information
     * @param string $Scheduler Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     * @param integer $SessionExpireTime Session persistence duration, in seconds. Value range: 0 or 30-86400.
     * @param string $ForwardType Forwarding protocol between a CLB instance and the real server. Default value: HTTP. Valid values: HTTP, HTTPS, GRPC. This parameter is valid only for HTTPS listeners.
     * @param string $TrpcCallee TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     * @param string $TrpcFunc TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     * @param OAuth $OAuth OAuth configuration information.
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

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
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

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }

        if (array_key_exists("OAuth",$param) and $param["OAuth"] !== null) {
            $this->OAuth = new OAuth();
            $this->OAuth->deserialize($param["OAuth"]);
        }
    }
}
