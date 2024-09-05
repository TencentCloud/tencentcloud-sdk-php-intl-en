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
 * HTTP/HTTPS forwarding rule (input)
 *
 * @method string getUrl() Obtain Forwarding rule path. Length: 1-200.
 * @method void setUrl(string $Url) Set Forwarding rule path. Length: 1-200.
 * @method string getDomain() Obtain The domain name associated with the forwarding rule. It can contain 1-80 characters. Only one domain name can be entered. If you need to enter multiple domain names, use `Domains`.
 * @method void setDomain(string $Domain) Set The domain name associated with the forwarding rule. It can contain 1-80 characters. Only one domain name can be entered. If you need to enter multiple domain names, use `Domains`.
 * @method integer getSessionExpireTime() Obtain Session persistence duration, in seconds. 0 indicates that session persistence is disabled, and a value ranging from 30 to 86400 indicates that session persistence is enabled.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence duration, in seconds. 0 indicates that session persistence is disabled, and a value ranging from 30 to 86400 indicates that session persistence is enabled.
 * @method HealthCheck getHealthCheck() Obtain Health check information. For more information, please see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1)
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check information. For more information, please see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1)
 * @method CertificateInput getCertificate() Obtain Certificate information. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method void setCertificate(CertificateInput $Certificate) Set Certificate information. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method string getScheduler() Obtain Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) Set Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
 * @method string getForwardType() Obtain Forwarding protocol between the CLB instance and backend service. Values: `HTTP`, `HTTPS`, `GRPC` and `TRPC` (only for internal usage). It defaults to `HTTP`.
 * @method void setForwardType(string $ForwardType) Set Forwarding protocol between the CLB instance and backend service. Values: `HTTP`, `HTTPS`, `GRPC` and `TRPC` (only for internal usage). It defaults to `HTTP`.
 * @method boolean getDefaultServer() Obtain Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method void setDefaultServer(boolean $DefaultServer) Set Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
 * @method boolean getHttp2() Obtain Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
 * @method void setHttp2(boolean $Http2) Set Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
 * @method string getTargetType() Obtain Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
 * @method void setTargetType(string $TargetType) Set Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
 * @method string getTrpcCallee() Obtain TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method void setTrpcCallee(string $TrpcCallee) Set TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method string getTrpcFunc() Obtain TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method void setTrpcFunc(string $TrpcFunc) Set TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
 * @method boolean getQuic() Obtain Whether to enable QUIC. Note: QUIC can be enabled only for HTTPS domain names
 * @method void setQuic(boolean $Quic) Set Whether to enable QUIC. Note: QUIC can be enabled only for HTTPS domain names
 * @method array getDomains() Obtain The domain name associated with the forwarding rule. Each contain 1-80 characters. If you only need to enter one domain name, use `Domain` instead.
 * @method void setDomains(array $Domains) Set The domain name associated with the forwarding rule. Each contain 1-80 characters. If you only need to enter one domain name, use `Domain` instead.
 * @method MultiCertInfo getMultiCertInfo() Obtain Certificate information. You can specify multiple server-side certificates with different algorithm types. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) Set Certificate information. You can specify multiple server-side certificates with different algorithm types. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
 */
class RuleInput extends AbstractModel
{
    /**
     * @var string Forwarding rule path. Length: 1-200.
     */
    public $Url;

    /**
     * @var string The domain name associated with the forwarding rule. It can contain 1-80 characters. Only one domain name can be entered. If you need to enter multiple domain names, use `Domains`.
     */
    public $Domain;

    /**
     * @var integer Session persistence duration, in seconds. 0 indicates that session persistence is disabled, and a value ranging from 30 to 86400 indicates that session persistence is enabled.
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check information. For more information, please see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1)
     */
    public $HealthCheck;

    /**
     * @var CertificateInput Certificate information. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     */
    public $Certificate;

    /**
     * @var string Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @var string Forwarding protocol between the CLB instance and backend service. Values: `HTTP`, `HTTPS`, `GRPC` and `TRPC` (only for internal usage). It defaults to `HTTP`.
     */
    public $ForwardType;

    /**
     * @var boolean Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     */
    public $DefaultServer;

    /**
     * @var boolean Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
     */
    public $Http2;

    /**
     * @var string Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
     */
    public $TargetType;

    /**
     * @var string TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     */
    public $TrpcCallee;

    /**
     * @var string TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     */
    public $TrpcFunc;

    /**
     * @var boolean Whether to enable QUIC. Note: QUIC can be enabled only for HTTPS domain names
     */
    public $Quic;

    /**
     * @var array The domain name associated with the forwarding rule. Each contain 1-80 characters. If you only need to enter one domain name, use `Domain` instead.
     */
    public $Domains;

    /**
     * @var MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     */
    public $MultiCertInfo;

    /**
     * @param string $Url Forwarding rule path. Length: 1-200.
     * @param string $Domain The domain name associated with the forwarding rule. It can contain 1-80 characters. Only one domain name can be entered. If you need to enter multiple domain names, use `Domains`.
     * @param integer $SessionExpireTime Session persistence duration, in seconds. 0 indicates that session persistence is disabled, and a value ranging from 30 to 86400 indicates that session persistence is enabled.
     * @param HealthCheck $HealthCheck Health check information. For more information, please see [Health Check](https://intl.cloud.tencent.com/document/product/214/6097?from_cn_redirect=1)
     * @param CertificateInput $Certificate Certificate information. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
     * @param string $Scheduler Request forwarding method of the rule. Value range: WRR, LEAST_CONN, IP_HASH
They represent weighted round robin, least connections, and IP hash, respectively. Default value: WRR.
     * @param string $ForwardType Forwarding protocol between the CLB instance and backend service. Values: `HTTP`, `HTTPS`, `GRPC` and `TRPC` (only for internal usage). It defaults to `HTTP`.
     * @param boolean $DefaultServer Whether to set this domain name as the default domain name. Note: Only one default domain name can be set under one listener.
     * @param boolean $Http2 Whether to enable HTTP/2. Note: HTTP/2 can be enabled only for HTTPS domain names.
     * @param string $TargetType Target real server type. NODE: binding a general node; TARGETGROUP: binding a target group.
     * @param string $TrpcCallee TRPC callee server route, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     * @param string $TrpcFunc TRPC calling service API, which is required when `ForwardType` is "TRPC". This is now only for internal usage.
     * @param boolean $Quic Whether to enable QUIC. Note: QUIC can be enabled only for HTTPS domain names
     * @param array $Domains The domain name associated with the forwarding rule. Each contain 1-80 characters. If you only need to enter one domain name, use `Domain` instead.
     * @param MultiCertInfo $MultiCertInfo Certificate information. You can specify multiple server-side certificates with different algorithm types. `Certificate` and `MultiCertInfo` cannot be specified at the same time. 
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = $param["Quic"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("MultiCertInfo",$param) and $param["MultiCertInfo"] !== null) {
            $this->MultiCertInfo = new MultiCertInfo();
            $this->MultiCertInfo->deserialize($param["MultiCertInfo"]);
        }
    }
}
