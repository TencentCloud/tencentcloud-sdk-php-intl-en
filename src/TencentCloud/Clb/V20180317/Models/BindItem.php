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
 * Configuration binding relationship
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB instance bound to the configuration
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance bound to the configuration
 * @method string getListenerId() Obtain ID of the listener bound to the configuration
 * @method void setListenerId(string $ListenerId) Set ID of the listener bound to the configuration
 * @method string getDomain() Obtain Domain name bound to the configuration
 * @method void setDomain(string $Domain) Set Domain name bound to the configuration
 * @method string getLocationId() Obtain Rule bound to the configuration
 * @method void setLocationId(string $LocationId) Set Rule bound to the configuration
 */
class BindItem extends AbstractModel
{
    /**
     * @var string ID of the CLB instance bound to the configuration
     */
    public $LoadBalancerId;

    /**
     * @var string ID of the listener bound to the configuration
     */
    public $ListenerId;

    /**
     * @var string Domain name bound to the configuration
     */
    public $Domain;

    /**
     * @var string Rule bound to the configuration
     */
    public $LocationId;

    /**
     * @param string $LoadBalancerId ID of the CLB instance bound to the configuration
     * @param string $ListenerId ID of the listener bound to the configuration
     * @param string $Domain Domain name bound to the configuration
     * @param string $LocationId Rule bound to the configuration
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}
