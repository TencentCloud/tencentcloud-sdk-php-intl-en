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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-7 rule.
 *
 * @method integer getKeepTime() Obtain Session persistence duration, in seconds.
 * @method void setKeepTime(integer $KeepTime) Set Session persistence duration, in seconds.
 * @method integer getLbType() Obtain Load balancing method. Valid value: `1` (weighed polling).
 * @method void setLbType(integer $LbType) Set Load balancing method. Valid value: `1` (weighed polling).
 * @method array getSourceList() Obtain List of origins
 * @method void setSourceList(array $SourceList) Set List of origins
 * @method integer getKeepEnable() Obtain Whether session persistence is enabled. Valid values: `0` (disabled) and `1` (enabled).
 * @method void setKeepEnable(integer $KeepEnable) Set Whether session persistence is enabled. Valid values: `0` (disabled) and `1` (enabled).
 * @method string getDomain() Obtain Forwarding domain name.
 * @method void setDomain(string $Domain) Set Forwarding domain name.
 * @method string getProtocol() Obtain Forwarding protocol. Valid values: `http` and `https`.
 * @method void setProtocol(string $Protocol) Set Forwarding protocol. Valid values: `http` and `https`.
 * @method integer getSourceType() Obtain Forwarding method. Valid values: `1` (by domain name); `2` (by IP).
 * @method void setSourceType(integer $SourceType) Set Forwarding method. Valid values: `1` (by domain name); `2` (by IP).
 * @method integer getHttpsToHttpEnable() Obtain Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). It defaults to `0`.
 * @method void setHttpsToHttpEnable(integer $HttpsToHttpEnable) Set Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). It defaults to `0`.
 * @method integer getStatus() Obtain Rule status. Valid values: `0` (the rule was successfully configured), `1` (configuring the rule), `2` (rule configuration failed), `3` (deleting the rule), `5` (failed to delete rule), `6` (rule awaiting configuration), `7` (rule awaiting deletion), and `8` (rule awaiting certificate configuration).
 * @method void setStatus(integer $Status) Set Rule status. Valid values: `0` (the rule was successfully configured), `1` (configuring the rule), `2` (rule configuration failed), `3` (deleting the rule), `5` (failed to delete rule), `6` (rule awaiting configuration), `7` (rule awaiting deletion), and `8` (rule awaiting certificate configuration).
 * @method string getCCLevel() Obtain CC protection level based on HTTPS.
 * @method void setCCLevel(string $CCLevel) Set CC protection level based on HTTPS.
 * @method integer getCCEnable() Obtain CC protection status based on HTTPS. Valid values: `0` (disabled) and `1` (enabled).
 * @method void setCCEnable(integer $CCEnable) Set CC protection status based on HTTPS. Valid values: `0` (disabled) and `1` (enabled).
 * @method integer getCCThreshold() Obtain CC protection threshold based on HTTPS.
 * @method void setCCThreshold(integer $CCThreshold) Set CC protection threshold based on HTTPS.
 * @method integer getRegion() Obtain Region code.
 * @method void setRegion(integer $Region) Set Region code.
 * @method string getRuleName() Obtain Rule description.
 * @method void setRuleName(string $RuleName) Set Rule description.
 * @method string getCert() Obtain [Disused] When the certificate is an external certificate, the certificate content should be provided here. 
 * @method void setCert(string $Cert) Set [Disused] When the certificate is an external certificate, the certificate content should be provided here. 
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method string getRuleId() Obtain Rule ID. This field is not required for adding a rule, but is required for modifying or deleting a rule.
 * @method void setRuleId(string $RuleId) Set Rule ID. This field is not required for adding a rule, but is required for modifying or deleting a rule.
 * @method string getIp() Obtain Anti-DDoS instance IP address.
 * @method void setIp(string $Ip) Set Anti-DDoS instance IP address.
 * @method string getPrivateKey() Obtain [Disused] When the certificate is an external certificate, the certificate key should be provided here. 
 * @method void setPrivateKey(string $PrivateKey) Set [Disused] When the certificate is an external certificate, the certificate key should be provided here. 
 * @method integer getCertType() Obtain Certificate source. When the forwarding protocol is HTTPS, this field must be set to `2` (Tencent Cloud managed certificate), and for HTTP protocol, it can be set to `0`.
 * @method void setCertType(integer $CertType) Set Certificate source. When the forwarding protocol is HTTPS, this field must be set to `2` (Tencent Cloud managed certificate), and for HTTP protocol, it can be set to `0`.
 * @method integer getVirtualPort() Obtain Access port number.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVirtualPort(integer $VirtualPort) Set Access port number.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCCStatus() Obtain CC protection status. Valid values: `0` (disabled) and `1` (enabled).
 * @method void setCCStatus(integer $CCStatus) Set CC protection status. Valid values: `0` (disabled) and `1` (enabled).
 * @method string getSSLId() Obtain When the certificate is managed by Tencent Cloud, this field must be set to the ID of the managed certificate.
 * @method void setSSLId(string $SSLId) Set When the certificate is managed by Tencent Cloud, this field must be set to the ID of the managed certificate.
 * @method string getId() Obtain Resource ID.
 * @method void setId(string $Id) Set Resource ID.
 */
class NewL7RuleEntry extends AbstractModel
{
    /**
     * @var integer Session persistence duration, in seconds.
     */
    public $KeepTime;

    /**
     * @var integer Load balancing method. Valid value: `1` (weighed polling).
     */
    public $LbType;

    /**
     * @var array List of origins
     */
    public $SourceList;

    /**
     * @var integer Whether session persistence is enabled. Valid values: `0` (disabled) and `1` (enabled).
     */
    public $KeepEnable;

    /**
     * @var string Forwarding domain name.
     */
    public $Domain;

    /**
     * @var string Forwarding protocol. Valid values: `http` and `https`.
     */
    public $Protocol;

    /**
     * @var integer Forwarding method. Valid values: `1` (by domain name); `2` (by IP).
     */
    public $SourceType;

    /**
     * @var integer Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). It defaults to `0`.
     */
    public $HttpsToHttpEnable;

    /**
     * @var integer Rule status. Valid values: `0` (the rule was successfully configured), `1` (configuring the rule), `2` (rule configuration failed), `3` (deleting the rule), `5` (failed to delete rule), `6` (rule awaiting configuration), `7` (rule awaiting deletion), and `8` (rule awaiting certificate configuration).
     */
    public $Status;

    /**
     * @var string CC protection level based on HTTPS.
     */
    public $CCLevel;

    /**
     * @var integer CC protection status based on HTTPS. Valid values: `0` (disabled) and `1` (enabled).
     */
    public $CCEnable;

    /**
     * @var integer CC protection threshold based on HTTPS.
     */
    public $CCThreshold;

    /**
     * @var integer Region code.
     */
    public $Region;

    /**
     * @var string Rule description.
     */
    public $RuleName;

    /**
     * @var string [Disused] When the certificate is an external certificate, the certificate content should be provided here. 
     */
    public $Cert;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @var string Rule ID. This field is not required for adding a rule, but is required for modifying or deleting a rule.
     */
    public $RuleId;

    /**
     * @var string Anti-DDoS instance IP address.
     */
    public $Ip;

    /**
     * @var string [Disused] When the certificate is an external certificate, the certificate key should be provided here. 
     */
    public $PrivateKey;

    /**
     * @var integer Certificate source. When the forwarding protocol is HTTPS, this field must be set to `2` (Tencent Cloud managed certificate), and for HTTP protocol, it can be set to `0`.
     */
    public $CertType;

    /**
     * @var integer Access port number.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VirtualPort;

    /**
     * @var integer CC protection status. Valid values: `0` (disabled) and `1` (enabled).
     */
    public $CCStatus;

    /**
     * @var string When the certificate is managed by Tencent Cloud, this field must be set to the ID of the managed certificate.
     */
    public $SSLId;

    /**
     * @var string Resource ID.
     */
    public $Id;

    /**
     * @param integer $KeepTime Session persistence duration, in seconds.
     * @param integer $LbType Load balancing method. Valid value: `1` (weighed polling).
     * @param array $SourceList List of origins
     * @param integer $KeepEnable Whether session persistence is enabled. Valid values: `0` (disabled) and `1` (enabled).
     * @param string $Domain Forwarding domain name.
     * @param string $Protocol Forwarding protocol. Valid values: `http` and `https`.
     * @param integer $SourceType Forwarding method. Valid values: `1` (by domain name); `2` (by IP).
     * @param integer $HttpsToHttpEnable Whether to enable **Forward HTTPS requests via HTTP**. Valid values: `0` (disabled) and `1` (enabled). It defaults to `0`.
     * @param integer $Status Rule status. Valid values: `0` (the rule was successfully configured), `1` (configuring the rule), `2` (rule configuration failed), `3` (deleting the rule), `5` (failed to delete rule), `6` (rule awaiting configuration), `7` (rule awaiting deletion), and `8` (rule awaiting certificate configuration).
     * @param string $CCLevel CC protection level based on HTTPS.
     * @param integer $CCEnable CC protection status based on HTTPS. Valid values: `0` (disabled) and `1` (enabled).
     * @param integer $CCThreshold CC protection threshold based on HTTPS.
     * @param integer $Region Region code.
     * @param string $RuleName Rule description.
     * @param string $Cert [Disused] When the certificate is an external certificate, the certificate content should be provided here. 
     * @param string $ModifyTime Modification time.
     * @param string $RuleId Rule ID. This field is not required for adding a rule, but is required for modifying or deleting a rule.
     * @param string $Ip Anti-DDoS instance IP address.
     * @param string $PrivateKey [Disused] When the certificate is an external certificate, the certificate key should be provided here. 
     * @param integer $CertType Certificate source. When the forwarding protocol is HTTPS, this field must be set to `2` (Tencent Cloud managed certificate), and for HTTP protocol, it can be set to `0`.
     * @param integer $VirtualPort Access port number.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CCStatus CC protection status. Valid values: `0` (disabled) and `1` (enabled).
     * @param string $SSLId When the certificate is managed by Tencent Cloud, this field must be set to the ID of the managed certificate.
     * @param string $Id Resource ID.
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
        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
            $this->LbType = $param["LbType"];
        }

        if (array_key_exists("SourceList",$param) and $param["SourceList"] !== null) {
            $this->SourceList = [];
            foreach ($param["SourceList"] as $key => $value){
                $obj = new L4RuleSource();
                $obj->deserialize($value);
                array_push($this->SourceList, $obj);
            }
        }

        if (array_key_exists("KeepEnable",$param) and $param["KeepEnable"] !== null) {
            $this->KeepEnable = $param["KeepEnable"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("HttpsToHttpEnable",$param) and $param["HttpsToHttpEnable"] !== null) {
            $this->HttpsToHttpEnable = $param["HttpsToHttpEnable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CCLevel",$param) and $param["CCLevel"] !== null) {
            $this->CCLevel = $param["CCLevel"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }

        if (array_key_exists("CCStatus",$param) and $param["CCStatus"] !== null) {
            $this->CCStatus = $param["CCStatus"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
