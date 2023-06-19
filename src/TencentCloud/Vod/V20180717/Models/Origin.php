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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin Server Configuration
 *
 * @method array getOrigins() Obtain Primary origin server list When modifying the origin server, you need to enter the corresponding OriginType. Note: This field may return null, indicating that no valid value was found.
 * @method void setOrigins(array $Origins) Set Primary origin server list When modifying the origin server, you need to enter the corresponding OriginType. Note: This field may return null, indicating that no valid value was found.
 * @method string getOriginType() Obtain Primary origin server type The following types are supported for input parameters: <li> domain:domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
 * @method void setOriginType(string $OriginType) Set Primary origin server type The following types are supported for input parameters: <li> domain:domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
 * @method string getServerName() Obtain Host header used when accessing the primary origin server. If it is left empty, the acceleration domain name will be used by default.When the origin server type is object storage, the ServerName field is required.
 * @method void setServerName(string $ServerName) Set Host header used when accessing the primary origin server. If it is left empty, the acceleration domain name will be used by default.When the origin server type is object storage, the ServerName field is required.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol configuration http: forced HTTP origin-pull follow: protocol follow origin-pull https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol configuration http: forced HTTP origin-pull follow: protocol follow origin-pull https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull. Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getBackupOrigins() Obtain Backup origin server list When modifying the backup origin server, you need to enter the corresponding BackupOriginType. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBackupOrigins(array $BackupOrigins) Set Backup origin server list When modifying the backup origin server, you need to enter the corresponding BackupOriginType. Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBackupOriginType() Obtain  Backup origin server type, which supports the following types: <li>domain：Domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
 * @method void setBackupOriginType(string $BackupOriginType) Set  Backup origin server type, which supports the following types: <li>domain：Domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
 * @method string getBackupServerName() Obtain Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBackupServerName(string $BackupServerName) Set Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginCompany() Obtain The object storage returns to the source vendor. It is required when the source site type is a third-party storage source site (third_party). The optional values include the following:<li>aws_s3：AWS S3;</li> <li>ali_oss：Alibaba Cloud OSS;</li> <li>hw_obs：Huawei OBS;</li> <li>others：Object storage from other vendors only supports object storage compatible with the AWS signature algorithm, such as Tencent Cloud COS.</li>
 * @method void setOriginCompany(string $OriginCompany) Set The object storage returns to the source vendor. It is required when the source site type is a third-party storage source site (third_party). The optional values include the following:<li>aws_s3：AWS S3;</li> <li>ali_oss：Alibaba Cloud OSS;</li> <li>hw_obs：Huawei OBS;</li> <li>others：Object storage from other vendors only supports object storage compatible with the AWS signature algorithm, such as Tencent Cloud COS.</li>
 */
class Origin extends AbstractModel
{
    /**
     * @var array Primary origin server list When modifying the origin server, you need to enter the corresponding OriginType. Note: This field may return null, indicating that no valid value was found.
     */
    public $Origins;

    /**
     * @var string Primary origin server type The following types are supported for input parameters: <li> domain:domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
     */
    public $OriginType;

    /**
     * @var string Host header used when accessing the primary origin server. If it is left empty, the acceleration domain name will be used by default.When the origin server type is object storage, the ServerName field is required.
     */
    public $ServerName;

    /**
     * @var string Origin-pull protocol configuration http: forced HTTP origin-pull follow: protocol follow origin-pull https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginPullProtocol;

    /**
     * @var array Backup origin server list When modifying the backup origin server, you need to enter the corresponding BackupOriginType. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BackupOrigins;

    /**
     * @var string  Backup origin server type, which supports the following types: <li>domain：Domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
     */
    public $BackupOriginType;

    /**
     * @var string Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BackupServerName;

    /**
     * @var string The object storage returns to the source vendor. It is required when the source site type is a third-party storage source site (third_party). The optional values include the following:<li>aws_s3：AWS S3;</li> <li>ali_oss：Alibaba Cloud OSS;</li> <li>hw_obs：Huawei OBS;</li> <li>others：Object storage from other vendors only supports object storage compatible with the AWS signature algorithm, such as Tencent Cloud COS.</li>
     */
    public $OriginCompany;

    /**
     * @param array $Origins Primary origin server list When modifying the origin server, you need to enter the corresponding OriginType. Note: This field may return null, indicating that no valid value was found.
     * @param string $OriginType Primary origin server type The following types are supported for input parameters: <li> domain:domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
     * @param string $ServerName Host header used when accessing the primary origin server. If it is left empty, the acceleration domain name will be used by default.When the origin server type is object storage, the ServerName field is required.
     * @param string $OriginPullProtocol Origin-pull protocol configuration http: forced HTTP origin-pull follow: protocol follow origin-pull https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull. Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $BackupOrigins Backup origin server list When modifying the backup origin server, you need to enter the corresponding BackupOriginType. Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BackupOriginType  Backup origin server type, which supports the following types: <li>domain：Domain；</li> <li>ip：IP address；</li> <li>third_party：third-party object storage origin.</li>
     * @param string $BackupServerName Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginCompany The object storage returns to the source vendor. It is required when the source site type is a third-party storage source site (third_party). The optional values include the following:<li>aws_s3：AWS S3;</li> <li>ali_oss：Alibaba Cloud OSS;</li> <li>hw_obs：Huawei OBS;</li> <li>others：Object storage from other vendors only supports object storage compatible with the AWS signature algorithm, such as Tencent Cloud COS.</li>
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
        if (array_key_exists("Origins",$param) and $param["Origins"] !== null) {
            $this->Origins = $param["Origins"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OriginPullProtocol",$param) and $param["OriginPullProtocol"] !== null) {
            $this->OriginPullProtocol = $param["OriginPullProtocol"];
        }

        if (array_key_exists("BackupOrigins",$param) and $param["BackupOrigins"] !== null) {
            $this->BackupOrigins = $param["BackupOrigins"];
        }

        if (array_key_exists("BackupOriginType",$param) and $param["BackupOriginType"] !== null) {
            $this->BackupOriginType = $param["BackupOriginType"];
        }

        if (array_key_exists("BackupServerName",$param) and $param["BackupServerName"] !== null) {
            $this->BackupServerName = $param["BackupServerName"];
        }

        if (array_key_exists("OriginCompany",$param) and $param["OriginCompany"] !== null) {
            $this->OriginCompany = $param["OriginCompany"];
        }
    }
}
