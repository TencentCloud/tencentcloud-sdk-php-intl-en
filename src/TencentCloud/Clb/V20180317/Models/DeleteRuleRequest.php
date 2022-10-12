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
 * DeleteRule request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method array getLocationIds() Obtain Array of IDs of the forwarding rules to be deleted
 * @method void setLocationIds(array $LocationIds) Set Array of IDs of the forwarding rules to be deleted
 * @method string getDomain() Obtain The domain name associated with the forwarding rule to delete. If the rule is associated with multiple domain names, specify any one of them.
 * @method void setDomain(string $Domain) Set The domain name associated with the forwarding rule to delete. If the rule is associated with multiple domain names, specify any one of them.
 * @method string getUrl() Obtain The forwarding path of the forwarding rule to delete.
 * @method void setUrl(string $Url) Set The forwarding path of the forwarding rule to delete.
 * @method string getNewDefaultServerDomain() Obtain Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) Set Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
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
     * @var string The domain name associated with the forwarding rule to delete. If the rule is associated with multiple domain names, specify any one of them.
     */
    public $Domain;

    /**
     * @var string The forwarding path of the forwarding rule to delete.
     */
    public $Url;

    /**
     * @var string Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
     */
    public $NewDefaultServerDomain;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param array $LocationIds Array of IDs of the forwarding rules to be deleted
     * @param string $Domain The domain name associated with the forwarding rule to delete. If the rule is associated with multiple domain names, specify any one of them.
     * @param string $Url The forwarding path of the forwarding rule to delete.
     * @param string $NewDefaultServerDomain Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
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

        if (array_key_exists("NewDefaultServerDomain",$param) and $param["NewDefaultServerDomain"] !== null) {
            $this->NewDefaultServerDomain = $param["NewDefaultServerDomain"];
        }
    }
}
