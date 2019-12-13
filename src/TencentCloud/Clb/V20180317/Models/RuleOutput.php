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
 * @method string getLocationId() 获取Forwarding rule ID
 * @method void setLocationId(string $LocationId) 设置Forwarding rule ID
 * @method string getDomain() 获取Domain name of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) 设置Domain name of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() 获取Forwarding rule path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) 设置Forwarding rule path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionExpireTime() 获取Session persistence time
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置Session persistence time
 * @method HealthCheck getHealthCheck() 获取Health check information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置Health check information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CertificateOutput getCertificate() 获取Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(CertificateOutput $Certificate) 设置Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduler() 获取Request forwarding method of the rule
 * @method void setScheduler(string $Scheduler) 设置Request forwarding method of the rule
 * @method string getListenerId() 获取ID of the listener to which the forwarding rule belongs
 * @method void setListenerId(string $ListenerId) 设置ID of the listener to which the forwarding rule belongs
 * @method RewriteTarget getRewriteTarget() 获取Redirect target information of a forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRewriteTarget(RewriteTarget $RewriteTarget) 设置Redirect target information of a forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHttpGzip() 获取Whether to enable gzip
 * @method void setHttpGzip(boolean $HttpGzip) 设置Whether to enable gzip
 * @method boolean getBeAutoCreated() 获取Whether the forwarding rule is automatically created
 * @method void setBeAutoCreated(boolean $BeAutoCreated) 设置Whether the forwarding rule is automatically created
 * @method boolean getDefaultServer() 获取Whether to use as the default domain name
 * @method void setDefaultServer(boolean $DefaultServer) 设置Whether to use as the default domain name
 * @method boolean getHttp2() 获取Whether to enable Http2
 * @method void setHttp2(boolean $Http2) 设置Whether to enable Http2
 * @method string getForwardType() 获取Forwarding protocol between CLB and real server
 * @method void setForwardType(string $ForwardType) 设置Forwarding protocol between CLB and real server
 * @method string getCreateTime() 获取Forwarding rule creation time
 * @method void setCreateTime(string $CreateTime) 设置Forwarding rule creation time
 * @method string getTargetType() 获取Real server type
 * @method void setTargetType(string $TargetType) 设置Real server type
 * @method BasicTargetGroupInfo getTargetGroup() 获取Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) 设置Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWafDomainId() 获取WAF instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWafDomainId(string $WafDomainId) 设置WAF instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTrpcCallee() 获取
 * @method void setTrpcCallee(string $TrpcCallee) 设置
 * @method string getTrpcFunc() 获取
 * @method void setTrpcFunc(string $TrpcFunc) 设置
 */

/**
 *HTTP/HTTPS listener forwarding rule (output)
 */
class RuleOutput extends AbstractModel
{
    /**
     * @var string Forwarding rule ID
     */
    public $LocationId;

    /**
     * @var string Domain name of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Forwarding rule path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var integer Session persistence time
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck Health check information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var CertificateOutput Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var string Request forwarding method of the rule
     */
    public $Scheduler;

    /**
     * @var string ID of the listener to which the forwarding rule belongs
     */
    public $ListenerId;

    /**
     * @var RewriteTarget Redirect target information of a forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Real server type
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetGroup;

    /**
     * @var string WAF instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WafDomainId;

    /**
     * @var string 
     */
    public $TrpcCallee;

    /**
     * @var string 
     */
    public $TrpcFunc;
    /**
     * @param string $LocationId Forwarding rule ID
     * @param string $Domain Domain name of the forwarding rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Forwarding rule path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionExpireTime Session persistence time
     * @param HealthCheck $HealthCheck Health check information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CertificateOutput $Certificate Certificate information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scheduler Request forwarding method of the rule
     * @param string $ListenerId ID of the listener to which the forwarding rule belongs
     * @param RewriteTarget $RewriteTarget Redirect target information of a forwarding rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HttpGzip Whether to enable gzip
     * @param boolean $BeAutoCreated Whether the forwarding rule is automatically created
     * @param boolean $DefaultServer Whether to use as the default domain name
     * @param boolean $Http2 Whether to enable Http2
     * @param string $ForwardType Forwarding protocol between CLB and real server
     * @param string $CreateTime Forwarding rule creation time
     * @param string $TargetType Real server type
     * @param BasicTargetGroupInfo $TargetGroup Basic information of a bound target group. This field will be returned if a target group is bound to a rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WafDomainId WAF instance ID
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
