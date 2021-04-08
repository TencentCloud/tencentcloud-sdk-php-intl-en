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
 * RegisterTargets request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method array getTargets() Obtain List of real servers to be bound. Array length limit: 20.
 * @method void setTargets(array $Targets) Set List of real servers to be bound. Array length limit: 20.
 * @method string getLocationId() Obtain Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
 * @method string getDomain() Obtain Target forwarding rule domain name. This parameter does not take effect if LocationId is specified.
 * @method void setDomain(string $Domain) Set Target forwarding rule domain name. This parameter does not take effect if LocationId is specified.
 * @method string getUrl() Obtain Target forwarding rule URL. This parameter does not take effect if LocationId is specified.
 * @method void setUrl(string $Url) Set Target forwarding rule URL. This parameter does not take effect if LocationId is specified.
 */
class RegisterTargetsRequest extends AbstractModel
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
     * @var array List of real servers to be bound. Array length limit: 20.
     */
    public $Targets;

    /**
     * @var string Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
     */
    public $LocationId;

    /**
     * @var string Target forwarding rule domain name. This parameter does not take effect if LocationId is specified.
     */
    public $Domain;

    /**
     * @var string Target forwarding rule URL. This parameter does not take effect if LocationId is specified.
     */
    public $Url;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param array $Targets List of real servers to be bound. Array length limit: 20.
     * @param string $LocationId Forwarding rule ID. When binding a real server to a layer-7 forwarding rule, you must provide either this parameter or Domain+Url.
     * @param string $Domain Target forwarding rule domain name. This parameter does not take effect if LocationId is specified.
     * @param string $Url Target forwarding rule URL. This parameter does not take effect if LocationId is specified.
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
