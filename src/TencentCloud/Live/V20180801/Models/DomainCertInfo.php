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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name certificate information
 *
 * @method integer getCertId() Obtain Certificate ID.
 * @method void setCertId(integer $CertId) Set Certificate ID.
 * @method string getCertName() Obtain Certificate name.
 * @method void setCertName(string $CertName) Set Certificate name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getCreateTime() Obtain The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method string getHttpsCrt() Obtain Certificate content.
 * @method void setHttpsCrt(string $HttpsCrt) Set Certificate content.
 * @method integer getCertType() Obtain Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate.
 * @method void setCertType(integer $CertType) Set Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate.
 * @method string getCertExpireTime() Obtain The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method void setCertExpireTime(string $CertExpireTime) Set The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method string getDomainName() Obtain Domain name that uses this certificate.
 * @method void setDomainName(string $DomainName) Set Domain name that uses this certificate.
 * @method integer getStatus() Obtain Certificate status.
 * @method void setStatus(integer $Status) Set Certificate status.
 * @method array getCertDomains() Obtain List of domain names in the certificate.
["*.x.com"] for example.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCertDomains(array $CertDomains) Set List of domain names in the certificate.
["*.x.com"] for example.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCloudCertId() Obtain Tencent Cloud SSL certificate ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCloudCertId(string $CloudCertId) Set Tencent Cloud SSL certificate ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DomainCertInfo extends AbstractModel
{
    /**
     * @var integer Certificate ID.
     */
    public $CertId;

    /**
     * @var string Certificate name.
     */
    public $CertName;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var string Certificate content.
     */
    public $HttpsCrt;

    /**
     * @var integer Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate.
     */
    public $CertType;

    /**
     * @var string The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
     */
    public $CertExpireTime;

    /**
     * @var string Domain name that uses this certificate.
     */
    public $DomainName;

    /**
     * @var integer Certificate status.
     */
    public $Status;

    /**
     * @var array List of domain names in the certificate.
["*.x.com"] for example.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CertDomains;

    /**
     * @var string Tencent Cloud SSL certificate ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CloudCertId;

    /**
     * @param integer $CertId Certificate ID.
     * @param string $CertName Certificate name.
     * @param string $Description Description.
     * @param string $CreateTime The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
     * @param string $HttpsCrt Certificate content.
     * @param integer $CertType Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate.
     * @param string $CertExpireTime The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
     * @param string $DomainName Domain name that uses this certificate.
     * @param integer $Status Certificate status.
     * @param array $CertDomains List of domain names in the certificate.
["*.x.com"] for example.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CloudCertId Tencent Cloud SSL certificate ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("HttpsCrt",$param) and $param["HttpsCrt"] !== null) {
            $this->HttpsCrt = $param["HttpsCrt"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertDomains",$param) and $param["CertDomains"] !== null) {
            $this->CertDomains = $param["CertDomains"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }
    }
}
