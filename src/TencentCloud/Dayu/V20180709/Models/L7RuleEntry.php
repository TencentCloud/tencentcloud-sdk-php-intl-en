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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-7 rule
 *
 * @method string getProtocol() Obtain Forwarding protocol. Valid values: [http, https]
 * @method void setProtocol(string $Protocol) Set Forwarding protocol. Valid values: [http, https]
 * @method string getDomain() Obtain Forwarding domain name
 * @method void setDomain(string $Domain) Set Forwarding domain name
 * @method integer getSourceType() Obtain Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
 * @method void setSourceType(integer $SourceType) Set Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
 * @method integer getKeepTime() Obtain Session persistence duration in seconds
 * @method void setKeepTime(integer $KeepTime) Set Session persistence duration in seconds
 * @method array getSourceList() Obtain Forward list
 * @method void setSourceList(array $SourceList) Set Forward list
 * @method integer getLbType() Obtain Load balancing method. Valid value: [1 (weighted round robin)]
 * @method void setLbType(integer $LbType) Set Load balancing method. Valid value: [1 (weighted round robin)]
 * @method integer getKeepEnable() Obtain Session persistence status. Valid values: [0 (disabled), 1 (enabled)]
 * @method void setKeepEnable(integer $KeepEnable) Set Session persistence status. Valid values: [0 (disabled), 1 (enabled)]
 * @method string getRuleId() Obtain Rule ID, which is optional when adding a new rule but required when modifying or deleting a rule;
 * @method void setRuleId(string $RuleId) Set Rule ID, which is optional when adding a new rule but required when modifying or deleting a rule;
 * @method integer getCertType() Obtain Certificate source, which is required if the forwarding protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]. If the forwarding protocol is HTTP, 0 can be entered for this field
 * @method void setCertType(integer $CertType) Set Certificate source, which is required if the forwarding protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]. If the forwarding protocol is HTTP, 0 can be entered for this field
 * @method string getSSLId() Obtain If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID
 * @method void setSSLId(string $SSLId) Set If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID
 * @method string getCert() Obtain If the certificate is an external certificate, this field must be entered with the certificate content. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
 * @method void setCert(string $Cert) Set If the certificate is an external certificate, this field must be entered with the certificate content. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
 * @method string getPrivateKey() Obtain If the certificate is an external certificate, this field must be entered with the certificate key. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
 * @method void setPrivateKey(string $PrivateKey) Set If the certificate is an external certificate, this field must be entered with the certificate key. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
 * @method string getRuleName() Obtain Rule description
 * @method void setRuleName(string $RuleName) Set Rule description
 * @method integer getStatus() Obtain Rule status. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
 * @method void setStatus(integer $Status) Set Rule status. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
 * @method integer getCCStatus() Obtain CC protection status. Valid values: [0 (disabled), 1 (enabled)]
 * @method void setCCStatus(integer $CCStatus) Set CC protection status. Valid values: [0 (disabled), 1 (enabled)]
 * @method integer getCCEnable() Obtain HTTPS CC protection status. Valid values: [0 (disabled), 1 (enabled)]
 * @method void setCCEnable(integer $CCEnable) Set HTTPS CC protection status. Valid values: [0 (disabled), 1 (enabled)]
 * @method integer getCCThreshold() Obtain HTTPS CC protection threshold
 * @method void setCCThreshold(integer $CCThreshold) Set HTTPS CC protection threshold
 * @method string getCCLevel() Obtain HTTPS CC protection level
 * @method void setCCLevel(string $CCLevel) Set HTTPS CC protection level
 * @method integer getHttpsToHttpEnable() Obtain Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). The default value is disabled.
 * @method void setHttpsToHttpEnable(integer $HttpsToHttpEnable) Set Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). The default value is disabled.
 * @method integer getVirtualPort() Obtain Access port number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualPort(integer $VirtualPort) Set Access port number.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class L7RuleEntry extends AbstractModel
{
    /**
     * @var string Forwarding protocol. Valid values: [http, https]
     */
    public $Protocol;

    /**
     * @var string Forwarding domain name
     */
    public $Domain;

    /**
     * @var integer Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
     */
    public $SourceType;

    /**
     * @var integer Session persistence duration in seconds
     */
    public $KeepTime;

    /**
     * @var array Forward list
     */
    public $SourceList;

    /**
     * @var integer Load balancing method. Valid value: [1 (weighted round robin)]
     */
    public $LbType;

    /**
     * @var integer Session persistence status. Valid values: [0 (disabled), 1 (enabled)]
     */
    public $KeepEnable;

    /**
     * @var string Rule ID, which is optional when adding a new rule but required when modifying or deleting a rule;
     */
    public $RuleId;

    /**
     * @var integer Certificate source, which is required if the forwarding protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]. If the forwarding protocol is HTTP, 0 can be entered for this field
     */
    public $CertType;

    /**
     * @var string If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID
     */
    public $SSLId;

    /**
     * @var string If the certificate is an external certificate, this field must be entered with the certificate content. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
     */
    public $Cert;

    /**
     * @var string If the certificate is an external certificate, this field must be entered with the certificate key. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
     */
    public $PrivateKey;

    /**
     * @var string Rule description
     */
    public $RuleName;

    /**
     * @var integer Rule status. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
     */
    public $Status;

    /**
     * @var integer CC protection status. Valid values: [0 (disabled), 1 (enabled)]
     */
    public $CCStatus;

    /**
     * @var integer HTTPS CC protection status. Valid values: [0 (disabled), 1 (enabled)]
     */
    public $CCEnable;

    /**
     * @var integer HTTPS CC protection threshold
     */
    public $CCThreshold;

    /**
     * @var string HTTPS CC protection level
     */
    public $CCLevel;

    /**
     * @var integer Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). The default value is disabled.
     */
    public $HttpsToHttpEnable;

    /**
     * @var integer Access port number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualPort;

    /**
     * @param string $Protocol Forwarding protocol. Valid values: [http, https]
     * @param string $Domain Forwarding domain name
     * @param integer $SourceType Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
     * @param integer $KeepTime Session persistence duration in seconds
     * @param array $SourceList Forward list
     * @param integer $LbType Load balancing method. Valid value: [1 (weighted round robin)]
     * @param integer $KeepEnable Session persistence status. Valid values: [0 (disabled), 1 (enabled)]
     * @param string $RuleId Rule ID, which is optional when adding a new rule but required when modifying or deleting a rule;
     * @param integer $CertType Certificate source, which is required if the forwarding protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]. If the forwarding protocol is HTTP, 0 can be entered for this field
     * @param string $SSLId If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID
     * @param string $Cert If the certificate is an external certificate, this field must be entered with the certificate content. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
     * @param string $PrivateKey If the certificate is an external certificate, this field must be entered with the certificate key. (As external certificates are no longer supported, this field has been disused and does not need to be entered)
     * @param string $RuleName Rule description
     * @param integer $Status Rule status. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
     * @param integer $CCStatus CC protection status. Valid values: [0 (disabled), 1 (enabled)]
     * @param integer $CCEnable HTTPS CC protection status. Valid values: [0 (disabled), 1 (enabled)]
     * @param integer $CCThreshold HTTPS CC protection threshold
     * @param string $CCLevel HTTPS CC protection level
     * @param integer $HttpsToHttpEnable Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). The default value is disabled.
     * @param integer $VirtualPort Access port number.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("SourceList",$param) and $param["SourceList"] !== null) {
            $this->SourceList = [];
            foreach ($param["SourceList"] as $key => $value){
                $obj = new L4RuleSource();
                $obj->deserialize($value);
                array_push($this->SourceList, $obj);
            }
        }

        if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
            $this->LbType = $param["LbType"];
        }

        if (array_key_exists("KeepEnable",$param) and $param["KeepEnable"] !== null) {
            $this->KeepEnable = $param["KeepEnable"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CCStatus",$param) and $param["CCStatus"] !== null) {
            $this->CCStatus = $param["CCStatus"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }

        if (array_key_exists("CCLevel",$param) and $param["CCLevel"] !== null) {
            $this->CCLevel = $param["CCLevel"];
        }

        if (array_key_exists("HttpsToHttpEnable",$param) and $param["HttpsToHttpEnable"] !== null) {
            $this->HttpsToHttpEnable = $param["HttpsToHttpEnable"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }
    }
}
