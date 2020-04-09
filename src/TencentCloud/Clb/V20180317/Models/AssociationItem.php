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
 * Rule associated with target group
 *
 * @method string getLoadBalancerId() Obtain ID of associated CLB instance
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of associated CLB instance
 * @method string getListenerId() Obtain ID of associated listener
 * @method void setListenerId(string $ListenerId) Set ID of associated listener
 * @method string getLocationId() Obtain ID of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocationId(string $LocationId) Set ID of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol type of associated listener, such as HTTP or TCP
 * @method void setProtocol(string $Protocol) Set Protocol type of associated listener, such as HTTP or TCP
 * @method integer getPort() Obtain Port of associated listener
 * @method void setPort(integer $Port) Set Port of associated listener
 * @method string getDomain() Obtain Domain name of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain URL of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set URL of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 */
class AssociationItem extends AbstractModel
{
    /**
     * @var string ID of associated CLB instance
     */
    public $LoadBalancerId;

    /**
     * @var string ID of associated listener
     */
    public $ListenerId;

    /**
     * @var string ID of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LocationId;

    /**
     * @var string Protocol type of associated listener, such as HTTP or TCP
     */
    public $Protocol;

    /**
     * @var integer Port of associated listener
     */
    public $Port;

    /**
     * @var string Domain name of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string URL of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string CLB instance name
     */
    public $LoadBalancerName;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @param string $LoadBalancerId ID of associated CLB instance
     * @param string $ListenerId ID of associated listener
     * @param string $LocationId ID of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol type of associated listener, such as HTTP or TCP
     * @param integer $Port Port of associated listener
     * @param string $Domain Domain name of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url URL of associated forwarding rule
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerName CLB instance name
     * @param string $ListenerName Listener name
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }
    }
}
