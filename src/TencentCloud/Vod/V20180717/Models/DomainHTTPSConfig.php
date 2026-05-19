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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS configuration information of the domain name
 *
 * @method string getCertExpireTime() Obtain <p>Certificate expiration time.<li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li></p><p>Parameter format: YYYY-MM-DDThh:mm:ss+08:00</p>
 * @method void setCertExpireTime(string $CertExpireTime) Set <p>Certificate expiration time.<li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li></p><p>Parameter format: YYYY-MM-DDThh:mm:ss+08:00</p>
 * @method string getCloudCertId() Obtain <p>Certificate ID in Tencent Cloud SSL product.</p>
 * @method void setCloudCertId(string $CloudCertId) Set <p>Certificate ID in Tencent Cloud SSL product.</p>
 */
class DomainHTTPSConfig extends AbstractModel
{
    /**
     * @var string <p>Certificate expiration time.<li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li></p><p>Parameter format: YYYY-MM-DDThh:mm:ss+08:00</p>
     */
    public $CertExpireTime;

    /**
     * @var string <p>Certificate ID in Tencent Cloud SSL product.</p>
     */
    public $CloudCertId;

    /**
     * @param string $CertExpireTime <p>Certificate expiration time.<li>Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</li></p><p>Parameter format: YYYY-MM-DDThh:mm:ss+08:00</p>
     * @param string $CloudCertId <p>Certificate ID in Tencent Cloud SSL product.</p>
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
        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }
    }
}
