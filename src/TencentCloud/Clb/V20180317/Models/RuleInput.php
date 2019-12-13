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
 * @method string getDomain() 获取Domain name of the forwarding rule. Length: 1-80.
 * @method void setDomain(string $Domain) 设置Domain name of the forwarding rule. Length: 1-80.
 * @method string getUrl() 获取Forwarding rule path. Length: 1-200.
 * @method void setUrl(string $Url) 设置Forwarding rule path. Length: 1-200.
 * @method integer getSessionExpireTime() 获取Session persistence time in seconds. Value range: 30-3,600. Setting it to 0 indicates that session persistence is disabled.
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置Session persistence time in seconds. Value range: 30-3,600. Setting it to 0 indicates that session persistence is disabled.
 * @method HealthCheck getHealthCheck() 获取Health check information
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置Health check information
 * @method CertificateInput getCertificate() 获取Certificate information
 * @method void setCertificate(CertificateInput $Certificate) 设置Certificate information
 * @method string getScheduler() 获取Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) 设置Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method string getForwardType() 获取Forwarding protocol between CLB and real server. Currently, HTTP is supported
 * @method void setForwardType(string $ForwardType) 设置Forwarding protocol between CLB and real server. Currently, HTTP is supported
 * @method boolean getDefaultServer() 获取Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method void setDefaultServer(boolean $DefaultServer) 设置Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method boolean getHttp2() 获取Whether to enable Http2. Note: Http2 can be enabled only for HTTPS domain names.
 * @method void setHttp2(boolean $Http2) 设置Whether to enable Http2. Note: Http2 can be enabled only for HTTPS domain names.
 * @method string getTargetType() 获取Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
 * @method void setTargetType(string $TargetType) 设置Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
 * @method string getTrpcCallee() 获取
 * @method void setTrpcCallee(string $TrpcCallee) 设置
 * @method string getTrpcFunc() 获取
 * @method void setTrpcFunc(string $TrpcFunc) 设置
 */

/**
 *HTTP/HTTPS forwarding rule (input)
 */
class RuleInput extends AbstractModel
{
    /**
     * @var string Domain name of the forwarding rule. Length: 1-80.
     */
    public $Domain;

    /**
     * @var string Forwarding rule path. Length: 1-200.
     */
    public $Url;

    /**
     * @var integer Session persistence time in seconds. Value range: 30-3,600. Setting it to 0 indicates that session persistence is disabled.
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check information
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information
     */
    public $Certificate;

    /**
     * @var string Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @var string Forwarding protocol between CLB and real server. Currently, HTTP is supported
     */
    public $ForwardType;

    /**
     * @var boolean Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     */
    public $DefaultServer;

    /**
     * @var boolean Whether to enable Http2. Note: Http2 can be enabled only for HTTPS domain names.
     */
    public $Http2;

    /**
     * @var string Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
     */
    public $TargetType;

    /**
     * @var string 
     */
    public $TrpcCallee;

    /**
     * @var string 
     */
    public $TrpcFunc;
    /**
     * @param string $Domain Domain name of the forwarding rule. Length: 1-80.
     * @param string $Url Forwarding rule path. Length: 1-200.
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30-3,600. Setting it to 0 indicates that session persistence is disabled.
     * @param HealthCheck $HealthCheck Health check information
     * @param CertificateInput $Certificate Certificate information
     * @param string $Scheduler Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     * @param string $ForwardType Forwarding protocol between CLB and real server. Currently, HTTP is supported
     * @param boolean $DefaultServer Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     * @param boolean $Http2 Whether to enable Http2. Note: Http2 can be enabled only for HTTPS domain names.
     * @param string $TargetType Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
     * @param string $TrpcCallee 
     * @param string $TrpcFunc 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }
    }
}
