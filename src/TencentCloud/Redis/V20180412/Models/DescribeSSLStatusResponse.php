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
 * DescribeSSLStatus response structure.
 *
 * @method string getCertDownloadUrl() Obtain <p>SSL certificate download address.</p>
 * @method void setCertDownloadUrl(string $CertDownloadUrl) Set <p>SSL certificate download address.</p>
 * @method string getUrlExpiredTime() Obtain <p>Certificate download link expiration time.</p>
 * @method void setUrlExpiredTime(string $UrlExpiredTime) Set <p>Certificate download link expiration time.</p>
 * @method boolean getSSLConfig() Obtain <p>Flag whether the instance enables SSL feature.</p><ul><li>true: enable.</li><li>false: disable.</li></ul>
 * @method void setSSLConfig(boolean $SSLConfig) Set <p>Flag whether the instance enables SSL feature.</p><ul><li>true: enable.</li><li>false: disable.</li></ul>
 * @method boolean getFeatureSupport() Obtain <p>Flag whether the instance supports SSL feature.</p><ul><li>true: support.</li><li>false: unsupported.</li></ul>
 * @method void setFeatureSupport(boolean $FeatureSupport) Set <p>Flag whether the instance supports SSL feature.</p><ul><li>true: support.</li><li>false: unsupported.</li></ul>
 * @method integer getStatus() Obtain <p>Describes the SSL configuration status.</p><ul><li>1: Configuration in progress.</li><li>2: Configured successfully.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Describes the SSL configuration status.</p><ul><li>1: Configuration in progress.</li><li>2: Configured successfully.</li></ul>
 * @method integer getAddressType() Obtain <p>Address type.</p><p>Enumeration value:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul>
 * @method void setAddressType(integer $AddressType) Set <p>Address type.</p><p>Enumeration value:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul>
 * @method string getEncryptAddress() Obtain <p>Current encrypted connection address</p>
 * @method void setEncryptAddress(string $EncryptAddress) Set <p>Current encrypted connection address</p>
 * @method integer getCertSource() Obtain <p>Key source</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: Custom certificate</li></ul>
 * @method void setCertSource(integer $CertSource) Set <p>Key source</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: Custom certificate</li></ul>
 * @method integer getCertStatus() Obtain <p>Certificate validity</p><p>Enumeration values:</p><ul><li>0: valid</li><li>1: expiring soon (within 30 days)</li><li>2: expired</li><li>404: cert deleted</li><li>500: query exception</li></ul>
 * @method void setCertStatus(integer $CertStatus) Set <p>Certificate validity</p><p>Enumeration values:</p><ul><li>0: valid</li><li>1: expiring soon (within 30 days)</li><li>2: expired</li><li>404: cert deleted</li><li>500: query exception</li></ul>
 * @method string getCertId() Obtain <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
 * @method void setCertId(string $CertId) Set <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
 * @method string getCertAlias() Obtain <p>Cert alias</p>
 * @method void setCertAlias(string $CertAlias) Set <p>Cert alias</p>
 * @method string getCertExpireTime() Obtain <p>Certificate expiration time</p><p>Parameter format: time format YYYY-MM-DD hh:mm:ss</p>
 * @method void setCertExpireTime(string $CertExpireTime) Set <p>Certificate expiration time</p><p>Parameter format: time format YYYY-MM-DD hh:mm:ss</p>
 * @method string getDomain() Obtain <p>Certificate-associated domain name (SAN)</p><p>Includes IP</p>
 * @method void setDomain(string $Domain) Set <p>Certificate-associated domain name (SAN)</p><p>Includes IP</p>
 * @method string getSSLMinVersion() Obtain <p>Minimum TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
 * @method void setSSLMinVersion(string $SSLMinVersion) Set <p>Minimum TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
 * @method string getEncryptionMode() Obtain <p>Current encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul>
 * @method void setEncryptionMode(string $EncryptionMode) Set <p>Current encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSSLStatusResponse extends AbstractModel
{
    /**
     * @var string <p>SSL certificate download address.</p>
     */
    public $CertDownloadUrl;

    /**
     * @var string <p>Certificate download link expiration time.</p>
     */
    public $UrlExpiredTime;

    /**
     * @var boolean <p>Flag whether the instance enables SSL feature.</p><ul><li>true: enable.</li><li>false: disable.</li></ul>
     */
    public $SSLConfig;

    /**
     * @var boolean <p>Flag whether the instance supports SSL feature.</p><ul><li>true: support.</li><li>false: unsupported.</li></ul>
     */
    public $FeatureSupport;

    /**
     * @var integer <p>Describes the SSL configuration status.</p><ul><li>1: Configuration in progress.</li><li>2: Configured successfully.</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Address type.</p><p>Enumeration value:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul>
     */
    public $AddressType;

    /**
     * @var string <p>Current encrypted connection address</p>
     */
    public $EncryptAddress;

    /**
     * @var integer <p>Key source</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: Custom certificate</li></ul>
     */
    public $CertSource;

    /**
     * @var integer <p>Certificate validity</p><p>Enumeration values:</p><ul><li>0: valid</li><li>1: expiring soon (within 30 days)</li><li>2: expired</li><li>404: cert deleted</li><li>500: query exception</li></ul>
     */
    public $CertStatus;

    /**
     * @var string <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
     */
    public $CertId;

    /**
     * @var string <p>Cert alias</p>
     */
    public $CertAlias;

    /**
     * @var string <p>Certificate expiration time</p><p>Parameter format: time format YYYY-MM-DD hh:mm:ss</p>
     */
    public $CertExpireTime;

    /**
     * @var string <p>Certificate-associated domain name (SAN)</p><p>Includes IP</p>
     */
    public $Domain;

    /**
     * @var string <p>Minimum TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
     */
    public $SSLMinVersion;

    /**
     * @var string <p>Current encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul>
     */
    public $EncryptionMode;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CertDownloadUrl <p>SSL certificate download address.</p>
     * @param string $UrlExpiredTime <p>Certificate download link expiration time.</p>
     * @param boolean $SSLConfig <p>Flag whether the instance enables SSL feature.</p><ul><li>true: enable.</li><li>false: disable.</li></ul>
     * @param boolean $FeatureSupport <p>Flag whether the instance supports SSL feature.</p><ul><li>true: support.</li><li>false: unsupported.</li></ul>
     * @param integer $Status <p>Describes the SSL configuration status.</p><ul><li>1: Configuration in progress.</li><li>2: Configured successfully.</li></ul>
     * @param integer $AddressType <p>Address type.</p><p>Enumeration value:</p><ul><li>0: Unlimited.</li><li>1: Private IPv4 address.</li><li>2: Private IPv6 address.</li><li>3: Public network.</li><li>-1: Unspecified.</li></ul>
     * @param string $EncryptAddress <p>Current encrypted connection address</p>
     * @param integer $CertSource <p>Key source</p><p>Enumeration values:</p><ul><li>0: Tencent Cloud provides</li><li>1: Custom certificate</li></ul>
     * @param integer $CertStatus <p>Certificate validity</p><p>Enumeration values:</p><ul><li>0: valid</li><li>1: expiring soon (within 30 days)</li><li>2: expired</li><li>404: cert deleted</li><li>500: query exception</li></ul>
     * @param string $CertId <p>Certificate ID of the SSL certificate service. Required when CertSource=1</p>
     * @param string $CertAlias <p>Cert alias</p>
     * @param string $CertExpireTime <p>Certificate expiration time</p><p>Parameter format: time format YYYY-MM-DD hh:mm:ss</p>
     * @param string $Domain <p>Certificate-associated domain name (SAN)</p><p>Includes IP</p>
     * @param string $SSLMinVersion <p>Minimum TLS version</p><p>Enumeration values:</p><ul><li>TLSv1.0: TLSv1.0</li><li>TLSv1.1: TLSv1.1</li><li>TLSv1.2: TLSv1.2</li></ul>
     * @param string $EncryptionMode <p>Current encryption mode</p><p>Enumeration values:</p><ul><li>required: Enforced encryption</li><li>flexible: Compatible mode</li></ul>
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
        if (array_key_exists("CertDownloadUrl",$param) and $param["CertDownloadUrl"] !== null) {
            $this->CertDownloadUrl = $param["CertDownloadUrl"];
        }

        if (array_key_exists("UrlExpiredTime",$param) and $param["UrlExpiredTime"] !== null) {
            $this->UrlExpiredTime = $param["UrlExpiredTime"];
        }

        if (array_key_exists("SSLConfig",$param) and $param["SSLConfig"] !== null) {
            $this->SSLConfig = $param["SSLConfig"];
        }

        if (array_key_exists("FeatureSupport",$param) and $param["FeatureSupport"] !== null) {
            $this->FeatureSupport = $param["FeatureSupport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("EncryptAddress",$param) and $param["EncryptAddress"] !== null) {
            $this->EncryptAddress = $param["EncryptAddress"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertStatus",$param) and $param["CertStatus"] !== null) {
            $this->CertStatus = $param["CertStatus"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertAlias",$param) and $param["CertAlias"] !== null) {
            $this->CertAlias = $param["CertAlias"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SSLMinVersion",$param) and $param["SSLMinVersion"] !== null) {
            $this->SSLMinVersion = $param["SSLMinVersion"];
        }

        if (array_key_exists("EncryptionMode",$param) and $param["EncryptionMode"] !== null) {
            $this->EncryptionMode = $param["EncryptionMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
