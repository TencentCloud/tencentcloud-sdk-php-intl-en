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
 * HTTP/HTTPS listener forwarding rule (output)
 *
 * @method string getLocationId() Obtain Forwarding rule ID
 * @method void setLocationId(string $LocationId) Set Forwarding rule ID
 * @method string getDomain() Obtain Domain name of the forwarding rule
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule
 * @method string getUrl() Obtain Path of forwarding rules.
 * @method void setUrl(string $Url) Set Path of forwarding rules.
 * @method integer getSessionExpireTime() Obtain Session persistence time
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time
 * @method HealthCheck getHealthCheck() Obtain Health Check Information
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health Check Information
 * @method CertificateOutput getCertificate() Obtain Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(CertificateOutput $Certificate) Set Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduler() Obtain Request forwarding method in the rules.WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.
 * @method void setScheduler(string $Scheduler) Set Request forwarding method in the rules.WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.
 * @method string getListenerId() Obtain ID of the listener to which the forwarding rule belongs
 * @method void setListenerId(string $ListenerId) Set ID of the listener to which the forwarding rule belongs
 * @method RewriteTarget getRewriteTarget() Obtain Redirection target information of the forwarding rule
 * @method void setRewriteTarget(RewriteTarget $RewriteTarget) Set Redirection target information of the forwarding rule
 * @method boolean getHttpGzip() Obtain Whether to enable gzip
 * @method void setHttpGzip(boolean $HttpGzip) Set Whether to enable gzip
 * @method boolean getBeAutoCreated() Obtain Whether the forwarding rule is automatically created
 * @method void setBeAutoCreated(boolean $BeAutoCreated) Set Whether the forwarding rule is automatically created
 * @method boolean getDefaultServer() Obtain Whether to use as the default domain name
 * @method void setDefaultServer(boolean $DefaultServer) Set Whether to use as the default domain name
 * @method boolean getHttp2() Obtain Whether to enable Http2
 * @method void setHttp2(boolean $Http2) Set Whether to enable Http2
 * @method string getForwardType() Obtain Forwarding protocol between CLB and real server
 * @method void setForwardType(string $ForwardType) Set Forwarding protocol between CLB and real server
 * @method string getCreateTime() Obtain Forwarding rule creation time
 * @method void setCreateTime(string $CreateTime) Set Forwarding rule creation time
 * @method string getTargetType() Obtain Real server type. NODE indicates binding to a general node, and TARGETGROUP indicates binding to a target group.
 * @method void setTargetType(string $TargetType) Set Real server type. NODE indicates binding to a general node, and TARGETGROUP indicates binding to a target group.
 * @method BasicTargetGroupInfo getTargetGroup() Obtain Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) Set Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWafDomainId() Obtain WAF instance ID.
 * @method void setWafDomainId(string $WafDomainId) Set WAF instance ID.
 * @method string getTrpcCallee() Obtain Called server routing. valid when ForwardType is TRPC. currently not yet available.
 * @method void setTrpcCallee(string $TrpcCallee) Set Called server routing. valid when ForwardType is TRPC. currently not yet available.
 * @method string getTrpcFunc() Obtain TRPC calling service api. valid when ForwardType is TRPC. currently not yet available.
 * @method void setTrpcFunc(string $TrpcFunc) Set TRPC calling service api. valid when ForwardType is TRPC. currently not yet available.
 * @method string getQuicStatus() Obtain QUIC status. QUIC_ACTIVE means enabled, QUIC_INACTIVE means not enabled. note that only HTTPS domain names can enable QUIC.
 * @method void setQuicStatus(string $QuicStatus) Set QUIC status. QUIC_ACTIVE means enabled, QUIC_INACTIVE means not enabled. note that only HTTPS domain names can enable QUIC.
 * @method array getDomains() Obtain Specifies the domain name list of the forwarding rule.
 * @method void setDomains(array $Domains) Set Specifies the domain name list of the forwarding rule.
 * @method array getTargetGroupList() Obtain List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetGroupList(array $TargetGroupList) Set List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method OAuth getOAuth() Obtain OAuth configuration status.
 * @method void setOAuth(OAuth $OAuth) Set OAuth configuration status.
 * @method string getCookieName() Obtain Specifies the custom cookie name.
 * @method void setCookieName(string $CookieName) Set Specifies the custom cookie name.
 */
class RuleOutput extends AbstractModel
{
    /**
     * @var string Forwarding rule ID
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule
     */
    public $Domain;

    /**
     * @var string Path of forwarding rules.
     */
    public $Url;

    /**
     * @var integer Session persistence time
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health Check Information
     */
    public $HealthCheck;

    /**
     * @var CertificateOutput Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var string Request forwarding method in the rules.WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.
     */
    public $Scheduler;

    /**
     * @var string ID of the listener to which the forwarding rule belongs
     */
    public $ListenerId;

    /**
     * @var RewriteTarget Redirection target information of the forwarding rule
     */
    public $RewriteTarget;

    /**
     * @var boolean Whether to enable gzip
     */
    public $HttpGzip;

    /**
     * @var boolean Whether the forwarding rule is automatically created
     */
    public $BeAutoCreated;

    /**
     * @var boolean Whether to use as the default domain name
     */
    public $DefaultServer;

    /**
     * @var boolean Whether to enable Http2
     */
    public $Http2;

    /**
     * @var string Forwarding protocol between CLB and real server
     */
    public $ForwardType;

    /**
     * @var string Forwarding rule creation time
     */
    public $CreateTime;

    /**
     * @var string Real server type. NODE indicates binding to a general node, and TARGETGROUP indicates binding to a target group.
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroup;

    /**
     * @var string WAF instance ID.
     */
    public $WafDomainId;

    /**
     * @var string Called server routing. valid when ForwardType is TRPC. currently not yet available.
     */
    public $TrpcCallee;

    /**
     * @var string TRPC calling service api. valid when ForwardType is TRPC. currently not yet available.
     */
    public $TrpcFunc;

    /**
     * @var string QUIC status. QUIC_ACTIVE means enabled, QUIC_INACTIVE means not enabled. note that only HTTPS domain names can enable QUIC.
     */
    public $QuicStatus;

    /**
     * @var array Specifies the domain name list of the forwarding rule.
     */
    public $Domains;

    /**
     * @var array List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetGroupList;

    /**
     * @var OAuth OAuth configuration status.
     */
    public $OAuth;

    /**
     * @var string Specifies the custom cookie name.
     */
    public $CookieName;

    /**
     * @param string $LocationId Forwarding rule ID
     * @param string $Domain Domain name of the forwarding rule
     * @param string $Url Path of forwarding rules.
     * @param integer $SessionExpireTime Session persistence time
     * @param HealthCheck $HealthCheck Health Check Information
     * @param CertificateOutput $Certificate Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request forwarding method in the rules.WRR, LEAST_CONN, and IP_HASH respectively indicate weighted round robin, least connections, and IP hash.
     * @param string $ListenerId ID of the listener to which the forwarding rule belongs
     * @param RewriteTarget $RewriteTarget Redirection target information of the forwarding rule
     * @param boolean $HttpGzip Whether to enable gzip
     * @param boolean $BeAutoCreated Whether the forwarding rule is automatically created
     * @param boolean $DefaultServer Whether to use as the default domain name
     * @param boolean $Http2 Whether to enable Http2
     * @param string $ForwardType Forwarding protocol between CLB and real server
     * @param string $CreateTime Forwarding rule creation time
     * @param string $TargetType Real server type. NODE indicates binding to a general node, and TARGETGROUP indicates binding to a target group.
     * @param BasicTargetGroupInfo $TargetGroup Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WafDomainId WAF instance ID.
     * @param string $TrpcCallee Called server routing. valid when ForwardType is TRPC. currently not yet available.
     * @param string $TrpcFunc TRPC calling service api. valid when ForwardType is TRPC. currently not yet available.
     * @param string $QuicStatus QUIC status. QUIC_ACTIVE means enabled, QUIC_INACTIVE means not enabled. note that only HTTPS domain names can enable QUIC.
     * @param array $Domains Specifies the domain name list of the forwarding rule.
     * @param array $TargetGroupList List of bound target groups
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param OAuth $OAuth OAuth configuration status.
     * @param string $CookieName Specifies the custom cookie name.
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
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
            $this->Certificate = new CertificateOutput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RewriteTarget",$param) and $param["RewriteTarget"] !== null) {
            $this->RewriteTarget = new RewriteTarget();
            $this->RewriteTarget->deserialize($param["RewriteTarget"]);
        }

        if (array_key_exists("HttpGzip",$param) and $param["HttpGzip"] !== null) {
            $this->HttpGzip = $param["HttpGzip"];
        }

        if (array_key_exists("BeAutoCreated",$param) and $param["BeAutoCreated"] !== null) {
            $this->BeAutoCreated = $param["BeAutoCreated"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetGroup",$param) and $param["TargetGroup"] !== null) {
            $this->TargetGroup = new BasicTargetGroupInfo();
            $this->TargetGroup->deserialize($param["TargetGroup"]);
        }

        if (array_key_exists("WafDomainId",$param) and $param["WafDomainId"] !== null) {
            $this->WafDomainId = $param["WafDomainId"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }

        if (array_key_exists("QuicStatus",$param) and $param["QuicStatus"] !== null) {
            $this->QuicStatus = $param["QuicStatus"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("TargetGroupList",$param) and $param["TargetGroupList"] !== null) {
            $this->TargetGroupList = [];
            foreach ($param["TargetGroupList"] as $key => $value){
                $obj = new BasicTargetGroupInfo();
                $obj->deserialize($value);
                array_push($this->TargetGroupList, $obj);
            }
        }

        if (array_key_exists("OAuth",$param) and $param["OAuth"] !== null) {
            $this->OAuth = new OAuth();
            $this->OAuth->deserialize($param["OAuth"]);
        }

        if (array_key_exists("CookieName",$param) and $param["CookieName"] !== null) {
            $this->CookieName = $param["CookieName"];
        }
    }
}
