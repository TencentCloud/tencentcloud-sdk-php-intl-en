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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenSSL request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method integer getAddressType() Obtain <p>SSL address type.</p><p>Enumeration values:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul><p>Default value: 0</p>
 * @method void setAddressType(integer $AddressType) Set <p>SSL address type.</p><p>Enumeration values:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul><p>Default value: 0</p>
 * @method integer getCertSource() Obtain <p>Key type.</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: User-defined certificate</li></ul><p>Default value: 0</p>
 * @method void setCertSource(integer $CertSource) Set <p>Key type.</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: User-defined certificate</li></ul><p>Default value: 0</p>
 * @method integer getSwitchOption() Obtain <p>Switch time. (This parameter is deprecated and no longer effective.)</p><p>Enumeration values:</p><ul><li>1: Operate within the maintenance window: SSL encryption will be enabled and executed within the set maintenance window. Use the DescribeMaintenanceWindow interface to query the set maintenance time period.</li><li>2: Immediate operation: The operation will be executed immediately with no waiting for the maintenance window. The system default setting is immediate operation.</li></ul>
 * @method void setSwitchOption(integer $SwitchOption) Set <p>Switch time. (This parameter is deprecated and no longer effective.)</p><p>Enumeration values:</p><ul><li>1: Operate within the maintenance window: SSL encryption will be enabled and executed within the set maintenance window. Use the DescribeMaintenanceWindow interface to query the set maintenance time period.</li><li>2: Immediate operation: The operation will be executed immediately with no waiting for the maintenance window. The system default setting is immediate operation.</li></ul>
 * @method string getCertId() Obtain <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
 * @method void setCertId(string $CertId) Set <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
 * @method string getSSLMinVersion() Obtain <p>Min TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
 * @method void setSSLMinVersion(string $SSLMinVersion) Set <p>Min TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
 * @method string getEncryptionMode() Obtain <p>Target encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul><p>Default value: flexible</p>
 * @method void setEncryptionMode(string $EncryptionMode) Set <p>Target encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul><p>Default value: flexible</p>
 */
class OpenSSLRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>SSL address type.</p><p>Enumeration values:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul><p>Default value: 0</p>
     */
    public $AddressType;

    /**
     * @var integer <p>Key type.</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: User-defined certificate</li></ul><p>Default value: 0</p>
     */
    public $CertSource;

    /**
     * @var integer <p>Switch time. (This parameter is deprecated and no longer effective.)</p><p>Enumeration values:</p><ul><li>1: Operate within the maintenance window: SSL encryption will be enabled and executed within the set maintenance window. Use the DescribeMaintenanceWindow interface to query the set maintenance time period.</li><li>2: Immediate operation: The operation will be executed immediately with no waiting for the maintenance window. The system default setting is immediate operation.</li></ul>
     * @deprecated
     */
    public $SwitchOption;

    /**
     * @var string <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
     */
    public $CertId;

    /**
     * @var string <p>Min TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
     */
    public $SSLMinVersion;

    /**
     * @var string <p>Target encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul><p>Default value: flexible</p>
     */
    public $EncryptionMode;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     * @param integer $AddressType <p>SSL address type.</p><p>Enumeration values:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul><p>Default value: 0</p>
     * @param integer $CertSource <p>Key type.</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: User-defined certificate</li></ul><p>Default value: 0</p>
     * @param integer $SwitchOption <p>Switch time. (This parameter is deprecated and no longer effective.)</p><p>Enumeration values:</p><ul><li>1: Operate within the maintenance window: SSL encryption will be enabled and executed within the set maintenance window. Use the DescribeMaintenanceWindow interface to query the set maintenance time period.</li><li>2: Immediate operation: The operation will be executed immediately with no waiting for the maintenance window. The system default setting is immediate operation.</li></ul>
     * @param string $CertId <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
     * @param string $SSLMinVersion <p>Min TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
     * @param string $EncryptionMode <p>Target encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul><p>Default value: flexible</p>
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

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("SSLMinVersion",$param) and $param["SSLMinVersion"] !== null) {
            $this->SSLMinVersion = $param["SSLMinVersion"];
        }

        if (array_key_exists("EncryptionMode",$param) and $param["EncryptionMode"] !== null) {
            $this->EncryptionMode = $param["EncryptionMode"];
        }
    }
}
