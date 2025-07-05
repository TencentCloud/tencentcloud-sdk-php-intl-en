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
 * DeregisterFunctionTargets request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method string getListenerId() Obtain CLB listener ID.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID.
 * @method array getFunctionTargets() Obtain List of functions to be unbound
 * @method void setFunctionTargets(array $FunctionTargets) Set List of functions to be unbound
 * @method string getLocationId() Obtain The ID of target forwarding rule. To unbind a function from an L7 forwarding rule, either `LocationId` or `Domain+Url` is required. 
 * @method void setLocationId(string $LocationId) Set The ID of target forwarding rule. To unbind a function from an L7 forwarding rule, either `LocationId` or `Domain+Url` is required. 
 * @method string getDomain() Obtain Domain name of the target forwarding rule. It is ignored if `LocationId` is specified. 
 * @method void setDomain(string $Domain) Set Domain name of the target forwarding rule. It is ignored if `LocationId` is specified. 
 * @method string getUrl() Obtain URL of the target forwarding rule. It is ignored if `LocationId` is specified. 
 * @method void setUrl(string $Url) Set URL of the target forwarding rule. It is ignored if `LocationId` is specified. 
 */
class DeregisterFunctionTargetsRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB listener ID.
     */
    public $ListenerId;

    /**
     * @var array List of functions to be unbound
     */
    public $FunctionTargets;

    /**
     * @var string The ID of target forwarding rule. To unbind a function from an L7 forwarding rule, either `LocationId` or `Domain+Url` is required. 
     */
    public $LocationId;

    /**
     * @var string Domain name of the target forwarding rule. It is ignored if `LocationId` is specified. 
     */
    public $Domain;

    /**
     * @var string URL of the target forwarding rule. It is ignored if `LocationId` is specified. 
     */
    public $Url;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param string $ListenerId CLB listener ID.
     * @param array $FunctionTargets List of functions to be unbound
     * @param string $LocationId The ID of target forwarding rule. To unbind a function from an L7 forwarding rule, either `LocationId` or `Domain+Url` is required. 
     * @param string $Domain Domain name of the target forwarding rule. It is ignored if `LocationId` is specified. 
     * @param string $Url URL of the target forwarding rule. It is ignored if `LocationId` is specified. 
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

        if (array_key_exists("FunctionTargets",$param) and $param["FunctionTargets"] !== null) {
            $this->FunctionTargets = [];
            foreach ($param["FunctionTargets"] as $key => $value){
                $obj = new FunctionTarget();
                $obj->deserialize($value);
                array_push($this->FunctionTargets, $obj);
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
