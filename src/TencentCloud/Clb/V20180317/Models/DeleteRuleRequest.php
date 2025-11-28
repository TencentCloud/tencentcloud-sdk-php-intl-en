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
 * DeleteRule request structure.
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method string getListenerId() Obtain ID of the CLB instance listener. You can call the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) API to query the ID.
 * @method void setListenerId(string $ListenerId) Set ID of the CLB instance listener. You can call the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) API to query the ID.
 * @method array getLocationIds() Obtain Array of ids of forwarding rules to be deleted, can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
 * @method void setLocationIds(array $LocationIds) Set Array of ids of forwarding rules to be deleted, can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
 * @method string getDomain() Obtain Domain name of the forwarding rule to be deleted. if it is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule to be deleted. if it is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
 * @method string getUrl() Obtain Forwarding path of the forwarding rule to be deleted can be accessed through the DescribeLoadBalancersDetail api (https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1).
 * @method void setUrl(string $Url) Set Forwarding path of the forwarding rule to be deleted can be accessed through the DescribeLoadBalancersDetail api (https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1).
 * @method string getNewDefaultServerDomain() Obtain A default domain name must be configured under the listener. when you need to delete the default domain name, you can specify another domain name as the new default domain name. if the new default domain name is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) api.
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) Set A default domain name must be configured under the listener. when you need to delete the default domain name, you can specify another domain name as the new default domain name. if the new default domain name is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) api.
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     */
    public $LoadBalancerId;

    /**
     * @var string ID of the CLB instance listener. You can call the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) API to query the ID.
     */
    public $ListenerId;

    /**
     * @var array Array of ids of forwarding rules to be deleted, can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
     */
    public $LocationIds;

    /**
     * @var string Domain name of the forwarding rule to be deleted. if it is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
     */
    public $Domain;

    /**
     * @var string Forwarding path of the forwarding rule to be deleted can be accessed through the DescribeLoadBalancersDetail api (https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1).
     */
    public $Url;

    /**
     * @var string A default domain name must be configured under the listener. when you need to delete the default domain name, you can specify another domain name as the new default domain name. if the new default domain name is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) api.
     */
    public $NewDefaultServerDomain;

    /**
     * @param string $LoadBalancerId ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     * @param string $ListenerId ID of the CLB instance listener. You can call the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) API to query the ID.
     * @param array $LocationIds Array of ids of forwarding rules to be deleted, can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
     * @param string $Domain Domain name of the forwarding rule to be deleted. if it is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeLoadBalancersDetail](https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1) api.
     * @param string $Url Forwarding path of the forwarding rule to be deleted can be accessed through the DescribeLoadBalancersDetail api (https://www.tencentcloud.comom/document/api/214/46916?from_cn_redirect=1).
     * @param string $NewDefaultServerDomain A default domain name must be configured under the listener. when you need to delete the default domain name, you can specify another domain name as the new default domain name. if the new default domain name is multiple domains, you can specify any one of the domain name list. it can be accessed through the [DescribeListeners](https://www.tencentcloud.comom/document/product/214/30686?from_cn_redirect=1) api.
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
