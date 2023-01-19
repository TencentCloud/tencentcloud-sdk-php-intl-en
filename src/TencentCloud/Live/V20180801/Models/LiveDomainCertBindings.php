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
 * The domain and certificate information returned by `DescribeLiveDomainCertBindings` and `DescribeLiveDomainCertBindingsGray`.
 *
 * @method string getDomainName() Obtain The domain name.
 * @method void setDomainName(string $DomainName) Set The domain name.
 * @method string getCertificateAlias() Obtain The remarks for the certificate. This parameter is the same as `CertName`.
 * @method void setCertificateAlias(string $CertificateAlias) Set The remarks for the certificate. This parameter is the same as `CertName`.
 * @method integer getCertType() Obtain The certificate type.
0: Self-owned certificate
1: Tencent Cloud-hosted certificate
 * @method void setCertType(integer $CertType) Set The certificate type.
0: Self-owned certificate
1: Tencent Cloud-hosted certificate
 * @method integer getStatus() Obtain Whether HTTPS is enabled.
1: Enabled
0: Disabled
 * @method void setStatus(integer $Status) Set Whether HTTPS is enabled.
1: Enabled
0: Disabled
 * @method string getCertExpireTime() Obtain The certificate expiration time.
Note: Beijing time (UTC+8) is used.
 * @method void setCertExpireTime(string $CertExpireTime) Set The certificate expiration time.
Note: Beijing time (UTC+8) is used.
 * @method integer getCertId() Obtain The certificate ID.
 * @method void setCertId(integer $CertId) Set The certificate ID.
 * @method string getCloudCertId() Obtain The SSL certificate ID assigned by Tencent Cloud.
 * @method void setCloudCertId(string $CloudCertId) Set The SSL certificate ID assigned by Tencent Cloud.
 * @method string getUpdateTime() Obtain The last updated time.
Note: Beijing time (UTC+8) is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
Note: Beijing time (UTC+8) is used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveDomainCertBindings extends AbstractModel
{
    /**
     * @var string The domain name.
     */
    public $DomainName;

    /**
     * @var string The remarks for the certificate. This parameter is the same as `CertName`.
     */
    public $CertificateAlias;

    /**
     * @var integer The certificate type.
0: Self-owned certificate
1: Tencent Cloud-hosted certificate
     */
    public $CertType;

    /**
     * @var integer Whether HTTPS is enabled.
1: Enabled
0: Disabled
     */
    public $Status;

    /**
     * @var string The certificate expiration time.
Note: Beijing time (UTC+8) is used.
     */
    public $CertExpireTime;

    /**
     * @var integer The certificate ID.
     */
    public $CertId;

    /**
     * @var string The SSL certificate ID assigned by Tencent Cloud.
     */
    public $CloudCertId;

    /**
     * @var string The last updated time.
Note: Beijing time (UTC+8) is used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $DomainName The domain name.
     * @param string $CertificateAlias The remarks for the certificate. This parameter is the same as `CertName`.
     * @param integer $CertType The certificate type.
0: Self-owned certificate
1: Tencent Cloud-hosted certificate
     * @param integer $Status Whether HTTPS is enabled.
1: Enabled
0: Disabled
     * @param string $CertExpireTime The certificate expiration time.
Note: Beijing time (UTC+8) is used.
     * @param integer $CertId The certificate ID.
     * @param string $CloudCertId The SSL certificate ID assigned by Tencent Cloud.
     * @param string $UpdateTime The last updated time.
Note: Beijing time (UTC+8) is used.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
