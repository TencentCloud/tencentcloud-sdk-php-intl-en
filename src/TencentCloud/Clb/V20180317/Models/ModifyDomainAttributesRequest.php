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
 * ModifyDomainAttributes request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain CLB listener ID
 * @method void setListenerId(string $ListenerId) Set CLB listener ID
 * @method string getDomain() Obtain The domain name, which must be associated with an existing forwarding rule. If there are multiple domain names, you only need to specify one.
 * @method void setDomain(string $Domain) Set The domain name, which must be associated with an existing forwarding rule. If there are multiple domain names, you only need to specify one.
 * @method string getNewDomain() Obtain The one domain name to modify. `NewDomain` and `NewDomains` can not be both specified.
 * @method void setNewDomain(string $NewDomain) Set The one domain name to modify. `NewDomain` and `NewDomains` can not be both specified.
 * @method CertificateInput getCertificate() Obtain Domain name certificate information. Note: This is only applicable to SNI-enabled listeners.
 * @method void setCertificate(CertificateInput $Certificate) Set Domain name certificate information. Note: This is only applicable to SNI-enabled listeners.
 * @method boolean getHttp2() Obtain Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
 * @method void setHttp2(boolean $Http2) Set Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
 * @method boolean getDefaultServer() Obtain Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method void setDefaultServer(boolean $DefaultServer) Set Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method string getNewDefaultServerDomain() Obtain Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) Set Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
 * @method array getNewDomains() Obtain The new domain names to modify. `NewDomain` and `NewDomains` can not be both specified.
 * @method void setNewDomains(array $NewDomains) Set The new domain names to modify. `NewDomain` and `NewDomains` can not be both specified.
 */
class ModifyDomainAttributesRequest extends AbstractModel
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
     * @var string The domain name, which must be associated with an existing forwarding rule. If there are multiple domain names, you only need to specify one.
     */
    public $Domain;

    /**
     * @var string The one domain name to modify. `NewDomain` and `NewDomains` can not be both specified.
     */
    public $NewDomain;

    /**
     * @var CertificateInput Domain name certificate information. Note: This is only applicable to SNI-enabled listeners.
     */
    public $Certificate;

    /**
     * @var boolean Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
     */
    public $Http2;

    /**
     * @var boolean Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     */
    public $DefaultServer;

    /**
     * @var string Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
     */
    public $NewDefaultServerDomain;

    /**
     * @var array The new domain names to modify. `NewDomain` and `NewDomains` can not be both specified.
     */
    public $NewDomains;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId CLB listener ID
     * @param string $Domain The domain name, which must be associated with an existing forwarding rule. If there are multiple domain names, you only need to specify one.
     * @param string $NewDomain The one domain name to modify. `NewDomain` and `NewDomains` can not be both specified.
     * @param CertificateInput $Certificate Domain name certificate information. Note: This is only applicable to SNI-enabled listeners.
     * @param boolean $Http2 Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
     * @param boolean $DefaultServer Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     * @param string $NewDefaultServerDomain Specifies a new default domain name for the listener. This field is used when the original default domain name is disabled. If there are multiple domain names, specify one of them.
     * @param array $NewDomains The new domain names to modify. `NewDomain` and `NewDomains` can not be both specified.
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

        if (array_key_exists("NewDomain",$param) and $param["NewDomain"] !== null) {
            $this->NewDomain = $param["NewDomain"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("NewDefaultServerDomain",$param) and $param["NewDefaultServerDomain"] !== null) {
            $this->NewDefaultServerDomain = $param["NewDefaultServerDomain"];
        }

        if (array_key_exists("NewDomains",$param) and $param["NewDomains"] !== null) {
            $this->NewDomains = $param["NewDomains"];
        }
    }
}
