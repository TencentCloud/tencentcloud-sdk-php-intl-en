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
 * RegisterFunctionTargets request structure.
 *
 * @method string getLoadBalancerId() Obtain 
 * @method void setLoadBalancerId(string $LoadBalancerId) Set 
 * @method string getListenerId() Obtain 
 * @method void setListenerId(string $ListenerId) Set 
 * @method array getFunctionTargets() Obtain 
 * @method void setFunctionTargets(array $FunctionTargets) Set 
 * @method string getLocationId() Obtain 
 * @method void setLocationId(string $LocationId) Set 
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 */
class RegisterFunctionTargetsRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $LoadBalancerId;

    /**
     * @var string 
     */
    public $ListenerId;

    /**
     * @var array 
     */
    public $FunctionTargets;

    /**
     * @var string 
     */
    public $LocationId;

    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @param string $LoadBalancerId 
     * @param string $ListenerId 
     * @param array $FunctionTargets 
     * @param string $LocationId 
     * @param string $Domain 
     * @param string $Url 
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
