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
 * @method string getInstanceType() Obtain Instance type
BASIC: basic edition.
PRO edition.
PLATINUM edition.
 * @method void setInstanceType(string $InstanceType) Set Instance type
BASIC: basic edition.
PRO edition.
PLATINUM edition.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method integer getTopicNumLimit() Obtain Maximum number of topics per instance
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Maximum number of topics per instance
 * @method integer getTpsLimit() Obtain TPS throttle value
 * @method void setTpsLimit(integer $TpsLimit) Set TPS throttle value
 * @method integer getCreatedTime() Obtain Creation time, in seconds
 * @method void setCreatedTime(integer $CreatedTime) Set Creation time, in seconds
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getInstanceStatus() Obtain Instance status. RUNNING: running; MAINTAINING: maintaining; ABNORMAL: abnormal; OVERDUE: in arrears; DESTROYED: deleted; CREATING: creating; MODIFYING: adjusting the configuration; CREATE_FAILURE: creation failed; MODIFY_FAILURE: configuration adjustment failed; DELETING: deleting.
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status. RUNNING: running; MAINTAINING: maintaining; ABNORMAL: abnormal; OVERDUE: in arrears; DESTROYED: deleted; CREATING: creating; MODIFYING: adjusting the configuration; CREATE_FAILURE: creation failed; MODIFY_FAILURE: configuration adjustment failed; DELETING: deleting.
 * @method string getSkuCode() Obtain Specifies the instance specification.
 * @method void setSkuCode(string $SkuCode) Set Specifies the instance specification.
 * @method integer getMaxSubscriptionPerClient() Obtain Maximum number of subscriptions for a single client.
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) Set Maximum number of subscriptions for a single client.
 * @method integer getAuthorizationPolicyLimit() Obtain Number of authorization rules.
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) Set Number of authorization rules.
 * @method integer getClientNumLimit() Obtain Maximum number of clients.
 * @method void setClientNumLimit(integer $ClientNumLimit) Set Maximum number of clients.
 * @method string getDeviceCertificateProvisionType() Obtain Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) Set Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
 * @method boolean getAutomaticActivation() Obtain Specifies whether to automatically activate the device certificate during automatic registration.
 * @method void setAutomaticActivation(boolean $AutomaticActivation) Set Specifies whether to automatically activate the device certificate during automatic registration.
 * @method integer getRenewFlag() Obtain Whether the instance is automatically renewed. this parameter is valid only for monthly subscription clusters. valid values: 1 (auto-renewal), 0 (non-automatic renewal).
 * @method void setRenewFlag(integer $RenewFlag) Set Whether the instance is automatically renewed. this parameter is valid only for monthly subscription clusters. valid values: 1 (auto-renewal), 0 (non-automatic renewal).
 * @method string getPayMode() Obtain Billing mode. POSTPAID: pay-as-you-go billing. PREPAID: monthly subscription.
 * @method void setPayMode(string $PayMode) Set Billing mode. POSTPAID: pay-as-you-go billing. PREPAID: monthly subscription.
 * @method integer getExpiryTime() Obtain Expiry time. millisecond-level timestamp.
 * @method void setExpiryTime(integer $ExpiryTime) Set Expiry time. millisecond-level timestamp.
 * @method integer getDestroyTime() Obtain Scheduled destruction time. millisecond-level timestamp.
 * @method void setDestroyTime(integer $DestroyTime) Set Scheduled destruction time. millisecond-level timestamp.
 * @method string getX509Mode() Obtain TLS, one-way authentication. mTLS, mutual authentication. BYOC, one certificate per device.
 * @method void setX509Mode(string $X509Mode) Set TLS, one-way authentication. mTLS, mutual authentication. BYOC, one certificate per device.
 * @method integer getMaxCaNum() Obtain Specifies the maximum Ca quota.
 * @method void setMaxCaNum(integer $MaxCaNum) Set Specifies the maximum Ca quota.
 * @method string getRegistrationCode() Obtain FPS cert registration code.
 * @method void setRegistrationCode(string $RegistrationCode) Set FPS cert registration code.
 * @method integer getMaxSubscription() Obtain Maximum number of subscriptions for a cluster.
 * @method void setMaxSubscription(integer $MaxSubscription) Set Maximum number of subscriptions for a cluster.
 * @method boolean getAuthorizationPolicy() Obtain Authorization policy switch.
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) Set Authorization policy switch.
 * @method integer getSharedSubscriptionGroupLimit() Obtain Maximum limit of shared subscription groups.
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) Set Maximum limit of shared subscription groups.
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() Obtain Specifies the topic filter number limit for each shared subscription group.
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) Set Specifies the topic filter number limit for each shared subscription group.
 * @method integer getAutoSubscriptionPolicyLimit() Obtain Specifies the limit on number of auto-subscription rules.
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) Set Specifies the limit on number of auto-subscription rules.
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() Obtain Specifies the number limit of TopicFilter in a single auto-subscription rule.
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) Set Specifies the number limit of TopicFilter in a single auto-subscription rule.
 * @method boolean getUseDefaultServerCert() Obtain Specifies whether to use the default server certificate.
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) Set Specifies whether to use the default server certificate.
 * @method integer getTrustedCaLimit() Obtain Maximum allowed number of server cas.
 * @method void setTrustedCaLimit(integer $TrustedCaLimit) Set Maximum allowed number of server cas.
 * @method integer getServerCertLimit() Obtain Specifies the maximum allowed number of server certificates.
 * @method void setServerCertLimit(integer $ServerCertLimit) Set Specifies the maximum allowed number of server certificates.
 * @method integer getTopicPrefixSlashLimit() Obtain Specifies the max level of the topic prefix.
 * @method void setTopicPrefixSlashLimit(integer $TopicPrefixSlashLimit) Set Specifies the max level of the topic prefix.
 * @method integer getMessageRate() Obtain Specifies the speed limit for sending messages by a single client in messages per second.
 * @method void setMessageRate(integer $MessageRate) Set Specifies the speed limit for sending messages by a single client in messages per second.
 * @method string getTransportLayerSecurity() Obtain Specifies the protocols supported by the server tls, separated by ",". example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1.
 * @method void setTransportLayerSecurity(string $TransportLayerSecurity) Set Specifies the protocols supported by the server tls, separated by ",". example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1.
 * @method integer getMessageEnrichmentRuleLimit() Obtain Specifies the message property enrichment rule quota.
 * @method void setMessageEnrichmentRuleLimit(integer $MessageEnrichmentRuleLimit) Set Specifies the message property enrichment rule quota.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string Instance type
BASIC: basic edition.
PRO edition.
PLATINUM edition.
     */
    public $InstanceType;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var integer Maximum number of topics per instance
     */
    public $TopicNumLimit;

    /**
     * @var integer TPS throttle value
     */
    public $TpsLimit;

    /**
     * @var integer Creation time, in seconds
     */
    public $CreatedTime;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Instance status. RUNNING: running; MAINTAINING: maintaining; ABNORMAL: abnormal; OVERDUE: in arrears; DESTROYED: deleted; CREATING: creating; MODIFYING: adjusting the configuration; CREATE_FAILURE: creation failed; MODIFY_FAILURE: configuration adjustment failed; DELETING: deleting.
     */
    public $InstanceStatus;

    /**
     * @var string Specifies the instance specification.
     */
    public $SkuCode;

    /**
     * @var integer Maximum number of subscriptions for a single client.
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer Number of authorization rules.
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer Maximum number of clients.
     */
    public $ClientNumLimit;

    /**
     * @var string Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean Specifies whether to automatically activate the device certificate during automatic registration.
     */
    public $AutomaticActivation;

    /**
     * @var integer Whether the instance is automatically renewed. this parameter is valid only for monthly subscription clusters. valid values: 1 (auto-renewal), 0 (non-automatic renewal).
     */
    public $RenewFlag;

    /**
     * @var string Billing mode. POSTPAID: pay-as-you-go billing. PREPAID: monthly subscription.
     */
    public $PayMode;

    /**
     * @var integer Expiry time. millisecond-level timestamp.
     */
    public $ExpiryTime;

    /**
     * @var integer Scheduled destruction time. millisecond-level timestamp.
     */
    public $DestroyTime;

    /**
     * @var string TLS, one-way authentication. mTLS, mutual authentication. BYOC, one certificate per device.
     */
    public $X509Mode;

    /**
     * @var integer Specifies the maximum Ca quota.
     */
    public $MaxCaNum;

    /**
     * @var string FPS cert registration code.
     */
    public $RegistrationCode;

    /**
     * @var integer Maximum number of subscriptions for a cluster.
     */
    public $MaxSubscription;

    /**
     * @var boolean Authorization policy switch.
     */
    public $AuthorizationPolicy;

    /**
     * @var integer Maximum limit of shared subscription groups.
     */
    public $SharedSubscriptionGroupLimit;

    /**
     * @var integer Specifies the topic filter number limit for each shared subscription group.
     */
    public $MaxTopicFilterPerSharedSubscriptionGroup;

    /**
     * @var integer Specifies the limit on number of auto-subscription rules.
     */
    public $AutoSubscriptionPolicyLimit;

    /**
     * @var integer Specifies the number limit of TopicFilter in a single auto-subscription rule.
     */
    public $MaxTopicFilterPerAutoSubscriptionPolicy;

    /**
     * @var boolean Specifies whether to use the default server certificate.
     */
    public $UseDefaultServerCert;

    /**
     * @var integer Maximum allowed number of server cas.
     */
    public $TrustedCaLimit;

    /**
     * @var integer Specifies the maximum allowed number of server certificates.
     */
    public $ServerCertLimit;

    /**
     * @var integer Specifies the max level of the topic prefix.
     */
    public $TopicPrefixSlashLimit;

    /**
     * @var integer Specifies the speed limit for sending messages by a single client in messages per second.
     */
    public $MessageRate;

    /**
     * @var string Specifies the protocols supported by the server tls, separated by ",". example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1.
     */
    public $TransportLayerSecurity;

    /**
     * @var integer Specifies the message property enrichment rule quota.
     */
    public $MessageEnrichmentRuleLimit;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceType Instance type
BASIC: basic edition.
PRO edition.
PLATINUM edition.
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name
     * @param integer $TopicNum Number of topics
     * @param integer $TopicNumLimit Maximum number of topics per instance
     * @param integer $TpsLimit TPS throttle value
     * @param integer $CreatedTime Creation time, in seconds
     * @param string $Remark Remarks
     * @param string $InstanceStatus Instance status. RUNNING: running; MAINTAINING: maintaining; ABNORMAL: abnormal; OVERDUE: in arrears; DESTROYED: deleted; CREATING: creating; MODIFYING: adjusting the configuration; CREATE_FAILURE: creation failed; MODIFY_FAILURE: configuration adjustment failed; DELETING: deleting.
     * @param string $SkuCode Specifies the instance specification.
     * @param integer $MaxSubscriptionPerClient Maximum number of subscriptions for a single client.
     * @param integer $AuthorizationPolicyLimit Number of authorization rules.
     * @param integer $ClientNumLimit Maximum number of clients.
     * @param string $DeviceCertificateProvisionType Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
     * @param boolean $AutomaticActivation Specifies whether to automatically activate the device certificate during automatic registration.
     * @param integer $RenewFlag Whether the instance is automatically renewed. this parameter is valid only for monthly subscription clusters. valid values: 1 (auto-renewal), 0 (non-automatic renewal).
     * @param string $PayMode Billing mode. POSTPAID: pay-as-you-go billing. PREPAID: monthly subscription.
     * @param integer $ExpiryTime Expiry time. millisecond-level timestamp.
     * @param integer $DestroyTime Scheduled destruction time. millisecond-level timestamp.
     * @param string $X509Mode TLS, one-way authentication. mTLS, mutual authentication. BYOC, one certificate per device.
     * @param integer $MaxCaNum Specifies the maximum Ca quota.
     * @param string $RegistrationCode FPS cert registration code.
     * @param integer $MaxSubscription Maximum number of subscriptions for a cluster.
     * @param boolean $AuthorizationPolicy Authorization policy switch.
     * @param integer $SharedSubscriptionGroupLimit Maximum limit of shared subscription groups.
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup Specifies the topic filter number limit for each shared subscription group.
     * @param integer $AutoSubscriptionPolicyLimit Specifies the limit on number of auto-subscription rules.
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy Specifies the number limit of TopicFilter in a single auto-subscription rule.
     * @param boolean $UseDefaultServerCert Specifies whether to use the default server certificate.
     * @param integer $TrustedCaLimit Maximum allowed number of server cas.
     * @param integer $ServerCertLimit Specifies the maximum allowed number of server certificates.
     * @param integer $TopicPrefixSlashLimit Specifies the max level of the topic prefix.
     * @param integer $MessageRate Specifies the speed limit for sending messages by a single client in messages per second.
     * @param string $TransportLayerSecurity Specifies the protocols supported by the server tls, separated by ",". example: TLSv1.3,TLSv1.2,TLSv1.1,TLSv1.
     * @param integer $MessageEnrichmentRuleLimit Specifies the message property enrichment rule quota.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
