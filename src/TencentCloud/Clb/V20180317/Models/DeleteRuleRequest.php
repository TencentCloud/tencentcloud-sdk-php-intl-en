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
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method array getLocationIds() Obtain Array of IDs of the forwarding rules to be deleted
 * @method void setLocationIds(array $LocationIds) Set Array of IDs of the forwarding rules to be deleted
 * @method string getDomain() Obtain Domain name of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
 * @method string getUrl() Obtain Forwarding path of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
 * @method void setUrl(string $Url) Set Forwarding path of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
 */

/**
 *DeleteRule request structure.
 */
class DeleteRuleRequest extends AbstractModel
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
     * @var array Array of IDs of the forwarding rules to be deleted
     */
    public $LocationIds;

    /**
     * @var string Domain name of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
     */
    public $Domain;

    /**
     * @var string Forwarding path of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
     */
    public $Url;
    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param array $LocationIds Array of IDs of the forwarding rules to be deleted
     * @param string $Domain Domain name of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
     * @param string $Url Forwarding path of the forwarding rule to be deleted. This parameter does not take effect if LocationIds is specified
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

        if (array_key_exists("LocationIds",$param) and $param["LocationIds"] !== null) {
            $this->LocationIds = $param["LocationIds"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
