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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstance response structure.
 *
 * @method string getInstanceType() Obtain <p>Instance type<br>BASIC Basic version<br>PRO Professional Edition<br>PLATINUM Platinum version</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type<br>BASIC Basic version<br>PRO Professional Edition<br>PLATINUM Platinum version</p>
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method integer getTopicNum() Obtain <p>Number of topics</p>
 * @method void setTopicNum(integer $TopicNum) Set <p>Number of topics</p>
 * @method integer getTopicNumLimit() Obtain <p>Maximum number of topics per instance</p>
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set <p>Maximum number of topics per instance</p>
 * @method integer getTpsLimit() Obtain <p>TPS throttle value</p>
 * @method void setTpsLimit(integer $TpsLimit) Set <p>TPS throttle value</p>
 * @method integer getCreatedTime() Obtain <p>createTime, in seconds</p>
 * @method void setCreatedTime(integer $CreatedTime) Set <p>createTime, in seconds</p>
 * @method string getRemark() Obtain <p>Remarks</p>
 * @method void setRemark(string $Remark) Set <p>Remarks</p>
 * @method string getInstanceStatus() Obtain <p>Instance status, RUNNING, running MAINTAINING, maintaining ABNORMAL, abnormal OVERDUE, arrears DESTROYED, deleted CREATING, creating MODIFYING, modifying CREATE_FAILURE, creation failure MODIFY_FAILURE, configuration change failed DELETING, deleting</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status, RUNNING, running MAINTAINING, maintaining ABNORMAL, abnormal OVERDUE, arrears DESTROYED, deleted CREATING, creating MODIFYING, modifying CREATE_FAILURE, creation failure MODIFY_FAILURE, configuration change failed DELETING, deleting</p>
 * @method string getSkuCode() Obtain <p>Instance specification</p>
 * @method void setSkuCode(string $SkuCode) Set <p>Instance specification</p>
 * @method integer getMaxSubscriptionPerClient() Obtain <p>Maximum number of subscriptions for a single client</p>
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) Set <p>Maximum number of subscriptions for a single client</p>
 * @method integer getAuthorizationPolicyLimit() Obtain <p>Number of authorization rule entries</p>
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) Set <p>Number of authorization rule entries</p>
 * @method integer getClientNumLimit() Obtain <p>Number of clients cap</p>
 * @method void setClientNumLimit(integer $ClientNumLimit) Set <p>Number of clients cap</p>
 * @method string getDeviceCertificateProvisionType() Obtain <p>Client certificate registration method:<br>JITP: Automatic sign-up<br>API: Manually register through API</p>
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) Set <p>Client certificate registration method:<br>JITP: Automatic sign-up<br>API: Manually register through API</p>
 * @method boolean getAutomaticActivation() Obtain <p>Whether to automatically activate when automatically registering a device certificate</p>
 * @method void setAutomaticActivation(boolean $AutomaticActivation) Set <p>Whether to automatically activate when automatically registering a device certificate</p>
 * @method integer getRenewFlag() Obtain <p>Whether it is automatically renewed. Only applicable to monthly subscription clusters. 1: Automatic renewal 0: Non-automatic renewal</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Whether it is automatically renewed. Only applicable to monthly subscription clusters. 1: Automatic renewal 0: Non-automatic renewal</p>
 * @method string getPayMode() Obtain <p>Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription</p>
 * @method void setPayMode(string $PayMode) Set <p>Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription</p>
 * @method integer getExpiryTime() Obtain <p>Expiry time, millisecond-level timestamp</p>
 * @method void setExpiryTime(integer $ExpiryTime) Set <p>Expiry time, millisecond-level timestamp</p>
 * @method integer getDestroyTime() Obtain <p>Predestruction time, millisecond-level timestamp</p>
 * @method void setDestroyTime(integer $DestroyTime) Set <p>Predestruction time, millisecond-level timestamp</p>
 * @method string getX509Mode() Obtain <p>TLS, one-way authentication    mTLS, mutual authentication    BYOC; one certificate per device</p>
 * @method void setX509Mode(string $X509Mode) Set <p>TLS, one-way authentication    mTLS, mutual authentication    BYOC; one certificate per device</p>
 * @method integer getMaxCaNum() Obtain <p>Maximum Ca quota</p>
 * @method void setMaxCaNum(integer $MaxCaNum) Set <p>Maximum Ca quota</p>
 * @method string getRegistrationCode() Obtain <p>FPS Cert Registration Code</p>
 * @method void setRegistrationCode(string $RegistrationCode) Set <p>FPS Cert Registration Code</p>
 * @method integer getMaxSubscription() Obtain <p>Maximum number of subscriptions for a cluster</p>
 * @method void setMaxSubscription(integer $MaxSubscription) Set <p>Maximum number of subscriptions for a cluster</p>
 * @method boolean getAuthorizationPolicy() Obtain <p>Authorization policy switch</p>
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) Set <p>Authorization policy switch</p>
 * @method integer getSharedSubscriptionGroupLimit() Obtain <p>Maximum limit of shared subscription groups</p>
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) Set <p>Maximum limit of shared subscription groups</p>
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() Obtain <p>Number limit of TopicFilter in one shared subscription group</p>
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) Set <p>Number limit of TopicFilter in one shared subscription group</p>
 * @method integer getAutoSubscriptionPolicyLimit() Obtain <p>Limit on number of auto subscription rules</p>
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) Set <p>Limit on number of auto subscription rules</p>
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() Obtain <p>Number limit of TopicFilter in a single auto subscription rule</p>
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) Set <p>Number limit of TopicFilter in a single auto subscription rule</p>
 * @method boolean getUseDefaultServerCert() Obtain <p>Whether to use the default server certificate</p>
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) Set <p>Whether to use the default server certificate</p>
 * @method integer getTrustedCaLimit() Obtain <p>Maximum number of server CAs</p>
 * @method void setTrustedCaLimit(integer $TrustedCaLimit) Set <p>Maximum number of server CAs</p>
 * @method integer getServerCertLimit() Obtain <p>Maximum number of server certificates</p>
 * @method void setServerCertLimit(integer $ServerCertLimit) Set <p>Maximum number of server certificates</p>
 * @method integer getTopicPrefixSlashLimit() Obtain <p>Max level of topic prefix</p>
 * @method void setTopicPrefixSlashLimit(integer $TopicPrefixSlashLimit) Set <p>Max level of topic prefix</p>
 * @method integer getMessageRate() Obtain <p>Single client send message rate limiting, unit messages/second</p>
 * @method void setMessageRate(integer $MessageRate) Set <p>Single client send message rate limiting, unit messages/second</p>
 * @method string getTransportLayerSecurity() Obtain <p>Server-side tls supported protocols, separated by ",". Example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
 * @method void setTransportLayerSecurity(string $TransportLayerSecurity) Set <p>Server-side tls supported protocols, separated by ",". Example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
 * @method integer getMessageEnrichmentRuleLimit() Obtain <p>Message property enhancement rule quota</p>
 * @method void setMessageEnrichmentRuleLimit(integer $MessageEnrichmentRuleLimit) Set <p>Message property enhancement rule quota</p>
 * @method integer getBlockRuleLimit() Obtain <p>Maximum allowed number of blocking rules</p>
 * @method void setBlockRuleLimit(integer $BlockRuleLimit) Set <p>Maximum allowed number of blocking rules</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string <p>Instance type<br>BASIC Basic version<br>PRO Professional Edition<br>PLATINUM Platinum version</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Number of topics</p>
     */
    public $TopicNum;

    /**
     * @var integer <p>Maximum number of topics per instance</p>
     */
    public $TopicNumLimit;

    /**
     * @var integer <p>TPS throttle value</p>
     */
    public $TpsLimit;

    /**
     * @var integer <p>createTime, in seconds</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Remarks</p>
     */
    public $Remark;

    /**
     * @var string <p>Instance status, RUNNING, running MAINTAINING, maintaining ABNORMAL, abnormal OVERDUE, arrears DESTROYED, deleted CREATING, creating MODIFYING, modifying CREATE_FAILURE, creation failure MODIFY_FAILURE, configuration change failed DELETING, deleting</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Instance specification</p>
     */
    public $SkuCode;

    /**
     * @var integer <p>Maximum number of subscriptions for a single client</p>
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer <p>Number of authorization rule entries</p>
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer <p>Number of clients cap</p>
     */
    public $ClientNumLimit;

    /**
     * @var string <p>Client certificate registration method:<br>JITP: Automatic sign-up<br>API: Manually register through API</p>
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean <p>Whether to automatically activate when automatically registering a device certificate</p>
     */
    public $AutomaticActivation;

    /**
     * @var integer <p>Whether it is automatically renewed. Only applicable to monthly subscription clusters. 1: Automatic renewal 0: Non-automatic renewal</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Expiry time, millisecond-level timestamp</p>
     */
    public $ExpiryTime;

    /**
     * @var integer <p>Predestruction time, millisecond-level timestamp</p>
     */
    public $DestroyTime;

    /**
     * @var string <p>TLS, one-way authentication    mTLS, mutual authentication    BYOC; one certificate per device</p>
     */
    public $X509Mode;

    /**
     * @var integer <p>Maximum Ca quota</p>
     */
    public $MaxCaNum;

    /**
     * @var string <p>FPS Cert Registration Code</p>
     */
    public $RegistrationCode;

    /**
     * @var integer <p>Maximum number of subscriptions for a cluster</p>
     */
    public $MaxSubscription;

    /**
     * @var boolean <p>Authorization policy switch</p>
     */
    public $AuthorizationPolicy;

    /**
     * @var integer <p>Maximum limit of shared subscription groups</p>
     */
    public $SharedSubscriptionGroupLimit;

    /**
     * @var integer <p>Number limit of TopicFilter in one shared subscription group</p>
     * @deprecated
     */
    public $MaxTopicFilterPerSharedSubscriptionGroup;

    /**
     * @var integer <p>Limit on number of auto subscription rules</p>
     */
    public $AutoSubscriptionPolicyLimit;

    /**
     * @var integer <p>Number limit of TopicFilter in a single auto subscription rule</p>
     */
    public $MaxTopicFilterPerAutoSubscriptionPolicy;

    /**
     * @var boolean <p>Whether to use the default server certificate</p>
     */
    public $UseDefaultServerCert;

    /**
     * @var integer <p>Maximum number of server CAs</p>
     */
    public $TrustedCaLimit;

    /**
     * @var integer <p>Maximum number of server certificates</p>
     */
    public $ServerCertLimit;

    /**
     * @var integer <p>Max level of topic prefix</p>
     */
    public $TopicPrefixSlashLimit;

    /**
     * @var integer <p>Single client send message rate limiting, unit messages/second</p>
     */
    public $MessageRate;

    /**
     * @var string <p>Server-side tls supported protocols, separated by ",". Example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
     */
    public $TransportLayerSecurity;

    /**
     * @var integer <p>Message property enhancement rule quota</p>
     */
    public $MessageEnrichmentRuleLimit;

    /**
     * @var integer <p>Maximum allowed number of blocking rules</p>
     */
    public $BlockRuleLimit;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceType <p>Instance type<br>BASIC Basic version<br>PRO Professional Edition<br>PLATINUM Platinum version</p>
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param integer $TopicNum <p>Number of topics</p>
     * @param integer $TopicNumLimit <p>Maximum number of topics per instance</p>
     * @param integer $TpsLimit <p>TPS throttle value</p>
     * @param integer $CreatedTime <p>createTime, in seconds</p>
     * @param string $Remark <p>Remarks</p>
     * @param string $InstanceStatus <p>Instance status, RUNNING, running MAINTAINING, maintaining ABNORMAL, abnormal OVERDUE, arrears DESTROYED, deleted CREATING, creating MODIFYING, modifying CREATE_FAILURE, creation failure MODIFY_FAILURE, configuration change failed DELETING, deleting</p>
     * @param string $SkuCode <p>Instance specification</p>
     * @param integer $MaxSubscriptionPerClient <p>Maximum number of subscriptions for a single client</p>
     * @param integer $AuthorizationPolicyLimit <p>Number of authorization rule entries</p>
     * @param integer $ClientNumLimit <p>Number of clients cap</p>
     * @param string $DeviceCertificateProvisionType <p>Client certificate registration method:<br>JITP: Automatic sign-up<br>API: Manually register through API</p>
     * @param boolean $AutomaticActivation <p>Whether to automatically activate when automatically registering a device certificate</p>
     * @param integer $RenewFlag <p>Whether it is automatically renewed. Only applicable to monthly subscription clusters. 1: Automatic renewal 0: Non-automatic renewal</p>
     * @param string $PayMode <p>Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription</p>
     * @param integer $ExpiryTime <p>Expiry time, millisecond-level timestamp</p>
     * @param integer $DestroyTime <p>Predestruction time, millisecond-level timestamp</p>
     * @param string $X509Mode <p>TLS, one-way authentication    mTLS, mutual authentication    BYOC; one certificate per device</p>
     * @param integer $MaxCaNum <p>Maximum Ca quota</p>
     * @param string $RegistrationCode <p>FPS Cert Registration Code</p>
     * @param integer $MaxSubscription <p>Maximum number of subscriptions for a cluster</p>
     * @param boolean $AuthorizationPolicy <p>Authorization policy switch</p>
     * @param integer $SharedSubscriptionGroupLimit <p>Maximum limit of shared subscription groups</p>
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup <p>Number limit of TopicFilter in one shared subscription group</p>
     * @param integer $AutoSubscriptionPolicyLimit <p>Limit on number of auto subscription rules</p>
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy <p>Number limit of TopicFilter in a single auto subscription rule</p>
     * @param boolean $UseDefaultServerCert <p>Whether to use the default server certificate</p>
     * @param integer $TrustedCaLimit <p>Maximum number of server CAs</p>
     * @param integer $ServerCertLimit <p>Maximum number of server certificates</p>
     * @param integer $TopicPrefixSlashLimit <p>Max level of topic prefix</p>
     * @param integer $MessageRate <p>Single client send message rate limiting, unit messages/second</p>
     * @param string $TransportLayerSecurity <p>Server-side tls supported protocols, separated by ",". Example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
     * @param integer $MessageEnrichmentRuleLimit <p>Message property enhancement rule quota</p>
     * @param integer $BlockRuleLimit <p>Maximum allowed number of blocking rules</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("MaxCaNum",$param) and $param["MaxCaNum"] !== null) {
            $this->MaxCaNum = $param["MaxCaNum"];
        }

        if (array_key_exists("RegistrationCode",$param) and $param["RegistrationCode"] !== null) {
            $this->RegistrationCode = $param["RegistrationCode"];
        }

        if (array_key_exists("MaxSubscription",$param) and $param["MaxSubscription"] !== null) {
            $this->MaxSubscription = $param["MaxSubscription"];
        }

        if (array_key_exists("AuthorizationPolicy",$param) and $param["AuthorizationPolicy"] !== null) {
            $this->AuthorizationPolicy = $param["AuthorizationPolicy"];
        }

        if (array_key_exists("SharedSubscriptionGroupLimit",$param) and $param["SharedSubscriptionGroupLimit"] !== null) {
            $this->SharedSubscriptionGroupLimit = $param["SharedSubscriptionGroupLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerSharedSubscriptionGroup",$param) and $param["MaxTopicFilterPerSharedSubscriptionGroup"] !== null) {
            $this->MaxTopicFilterPerSharedSubscriptionGroup = $param["MaxTopicFilterPerSharedSubscriptionGroup"];
        }

        if (array_key_exists("AutoSubscriptionPolicyLimit",$param) and $param["AutoSubscriptionPolicyLimit"] !== null) {
            $this->AutoSubscriptionPolicyLimit = $param["AutoSubscriptionPolicyLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerAutoSubscriptionPolicy",$param) and $param["MaxTopicFilterPerAutoSubscriptionPolicy"] !== null) {
            $this->MaxTopicFilterPerAutoSubscriptionPolicy = $param["MaxTopicFilterPerAutoSubscriptionPolicy"];
        }

        if (array_key_exists("UseDefaultServerCert",$param) and $param["UseDefaultServerCert"] !== null) {
            $this->UseDefaultServerCert = $param["UseDefaultServerCert"];
        }

        if (array_key_exists("TrustedCaLimit",$param) and $param["TrustedCaLimit"] !== null) {
            $this->TrustedCaLimit = $param["TrustedCaLimit"];
        }

        if (array_key_exists("ServerCertLimit",$param) and $param["ServerCertLimit"] !== null) {
            $this->ServerCertLimit = $param["ServerCertLimit"];
        }

        if (array_key_exists("TopicPrefixSlashLimit",$param) and $param["TopicPrefixSlashLimit"] !== null) {
            $this->TopicPrefixSlashLimit = $param["TopicPrefixSlashLimit"];
        }

        if (array_key_exists("MessageRate",$param) and $param["MessageRate"] !== null) {
            $this->MessageRate = $param["MessageRate"];
        }

        if (array_key_exists("TransportLayerSecurity",$param) and $param["TransportLayerSecurity"] !== null) {
            $this->TransportLayerSecurity = $param["TransportLayerSecurity"];
        }

        if (array_key_exists("MessageEnrichmentRuleLimit",$param) and $param["MessageEnrichmentRuleLimit"] !== null) {
            $this->MessageEnrichmentRuleLimit = $param["MessageEnrichmentRuleLimit"];
        }

        if (array_key_exists("BlockRuleLimit",$param) and $param["BlockRuleLimit"] !== null) {
            $this->BlockRuleLimit = $param["BlockRuleLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
