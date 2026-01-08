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
 * ModifyInstance request structure.
 *
 * @method string getInstanceId() Obtain tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method void setInstanceId(string $InstanceId) Set tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method string getName() Obtain Specifies the instance name to be modified, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method void setName(string $Name) Set Specifies the instance name to be modified, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method string getRemark() Obtain Specifies the remark information to be modified, with a maximum of 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark information to be modified, with a maximum of 128 characters.
 * @method string getSkuCode() Obtain Specifies the configuration specification to be changed.
Basic version and professional edition clusters cannot be upgraded to platinum version specifications. platinum edition clusters cannot be downgraded to basic version and enhanced specifications.
 * @method void setSkuCode(string $SkuCode) Set Specifies the configuration specification to be changed.
Basic version and professional edition clusters cannot be upgraded to platinum version specifications. platinum edition clusters cannot be downgraded to basic version and enhanced specifications.
 * @method string getDeviceCertificateProvisionType() Obtain Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) Set Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
 * @method boolean getAutomaticActivation() Obtain Specifies whether to automatically activate the cert after automatic registration.
 * @method void setAutomaticActivation(boolean $AutomaticActivation) Set Specifies whether to automatically activate the cert after automatic registration.
 * @method boolean getAuthorizationPolicy() Obtain Authorization policy switch.
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) Set Authorization policy switch.
 * @method boolean getUseDefaultServerCert() Obtain Specifies whether to use the default server certificate.
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) Set Specifies whether to use the default server certificate.
 * @method string getX509Mode() Obtain TLS: one-way authentication.
mTLS. specifies mutual authentication.
BYOC: one device, one certificate.
 * @method void setX509Mode(string $X509Mode) Set TLS: one-way authentication.
mTLS. specifies mutual authentication.
BYOC: one device, one certificate.
 * @method integer getMessageRate() Obtain Specifies the speed limit unit for client message send and receive in messages per second.
 * @method void setMessageRate(integer $MessageRate) Set Specifies the speed limit unit for client message send and receive in messages per second.
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     */
    public $InstanceId;

    /**
     * @var string Specifies the instance name to be modified, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
     */
    public $Name;

    /**
     * @var string Specifies the remark information to be modified, with a maximum of 128 characters.
     */
    public $Remark;

    /**
     * @var string Specifies the configuration specification to be changed.
Basic version and professional edition clusters cannot be upgraded to platinum version specifications. platinum edition clusters cannot be downgraded to basic version and enhanced specifications.
     */
    public $SkuCode;

    /**
     * @var string Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
     * @deprecated
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean Specifies whether to automatically activate the cert after automatic registration.
     * @deprecated
     */
    public $AutomaticActivation;

    /**
     * @var boolean Authorization policy switch.
     */
    public $AuthorizationPolicy;

    /**
     * @var boolean Specifies whether to use the default server certificate.
     */
    public $UseDefaultServerCert;

    /**
     * @var string TLS: one-way authentication.
mTLS. specifies mutual authentication.
BYOC: one device, one certificate.
     */
    public $X509Mode;

    /**
     * @var integer Specifies the speed limit unit for client message send and receive in messages per second.
     */
    public $MessageRate;

    /**
     * @param string $InstanceId tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     * @param string $Name Specifies the instance name to be modified, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
     * @param string $Remark Specifies the remark information to be modified, with a maximum of 128 characters.
     * @param string $SkuCode Specifies the configuration specification to be changed.
Basic version and professional edition clusters cannot be upgraded to platinum version specifications. platinum edition clusters cannot be downgraded to basic version and enhanced specifications.
     * @param string $DeviceCertificateProvisionType Specifies the registration method for the client certificate.
JITP: automatically register.
API: register manually through api.
     * @param boolean $AutomaticActivation Specifies whether to automatically activate the cert after automatic registration.
     * @param boolean $AuthorizationPolicy Authorization policy switch.
     * @param boolean $UseDefaultServerCert Specifies whether to use the default server certificate.
     * @param string $X509Mode TLS: one-way authentication.
mTLS. specifies mutual authentication.
BYOC: one device, one certificate.
     * @param integer $MessageRate Specifies the speed limit unit for client message send and receive in messages per second.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }

        if (array_key_exists("AuthorizationPolicy",$param) and $param["AuthorizationPolicy"] !== null) {
            $this->AuthorizationPolicy = $param["AuthorizationPolicy"];
        }

        if (array_key_exists("UseDefaultServerCert",$param) and $param["UseDefaultServerCert"] !== null) {
            $this->UseDefaultServerCert = $param["UseDefaultServerCert"];
        }

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("MessageRate",$param) and $param["MessageRate"] !== null) {
            $this->MessageRate = $param["MessageRate"];
        }
    }
}
