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
 * @method array getOrigins() Obtain List of main origin sites. When modifying the main origin site, the corresponding OriginType needs to be filled in at the same time.
 * @method void setOrigins(array $Origins) Set List of main origin sites. When modifying the main origin site, the corresponding OriginType needs to be filled in at the same time.
 * @method string getOriginType() Obtain Main origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
 * @method void setOriginType(string $OriginType) Set Main origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
 * @method string getServerName() Obtain When returning to the main origin server, the Host header will default to the accelerated domain name if it is not filled in. When the origin server type is object storage, the ServerName field is required.
 * @method void setServerName(string $ServerName) Set When returning to the main origin server, the Host header will default to the accelerated domain name if it is not filled in. When the origin server type is object storage, the ServerName field is required.
 * @method string getOriginPullProtocol() Obtain Back-to-origin protocol configuration: <li>http: Forces HTTP back-to-origin;</li> <li>follow: The protocol follows back-to-origin;</li> <li>https: Forces https back-to-origin, and https back-to-origin only supports origin. Station port 443. </li>
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Back-to-origin protocol configuration: <li>http: Forces HTTP back-to-origin;</li> <li>follow: The protocol follows back-to-origin;</li> <li>https: Forces https back-to-origin, and https back-to-origin only supports origin. Station port 443. </li>
 * @method array getBackupOrigins() Obtain Backup source site list. When modifying the backup origin site, the corresponding OriginType needs to be filled in at the same time.
 * @method void setBackupOrigins(array $BackupOrigins) Set Backup source site list. When modifying the backup origin site, the corresponding OriginType needs to be filled in at the same time.
 * @method string getBackupOriginType() Obtain Backup origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
 * @method void setBackupOriginType(string $BackupOriginType) Set Backup origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
 * @method string getBackupServerName() Obtain Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBackupServerName(string $BackupServerName) Set Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginCompany() Obtain Object storage back to the origin vendor. Required when the origin site type is a third-party storage origin site (third_party). Optional values u200bu200binclude the following: <li>aws_s3: AWS S3;</li> <li>ali_oss: Alibaba Cloud OSS; </li> <li>hw_obs: Huawei OBS;</li> <li>others: object storage from other manufacturers, only supports object storage compatible with AWS signature algorithm, such as Tencent Cloud COS. </li>
 * @method void setOriginCompany(string $OriginCompany) Set Object storage back to the origin vendor. Required when the origin site type is a third-party storage origin site (third_party). Optional values u200bu200binclude the following: <li>aws_s3: AWS S3;</li> <li>ali_oss: Alibaba Cloud OSS; </li> <li>hw_obs: Huawei OBS;</li> <li>others: object storage from other manufacturers, only supports object storage compatible with AWS signature algorithm, such as Tencent Cloud COS. </li>
 */
class Origin extends AbstractModel
{
    /**
     * @var array List of main origin sites. When modifying the main origin site, the corresponding OriginType needs to be filled in at the same time.
     */
    public $Origins;

    /**
     * @var string Main origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
     */
    public $OriginType;

    /**
     * @var string When returning to the main origin server, the Host header will default to the accelerated domain name if it is not filled in. When the origin server type is object storage, the ServerName field is required.
     */
    public $ServerName;

    /**
     * @var string Back-to-origin protocol configuration: <li>http: Forces HTTP back-to-origin;</li> <li>follow: The protocol follows back-to-origin;</li> <li>https: Forces https back-to-origin, and https back-to-origin only supports origin. Station port 443. </li>
     */
    public $OriginPullProtocol;

    /**
     * @var array Backup source site list. When modifying the backup origin site, the corresponding OriginType needs to be filled in at the same time.
     */
    public $BackupOrigins;

    /**
     * @var string Backup origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
     */
    public $BackupOriginType;

    /**
     * @var string Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BackupServerName;

    /**
     * @var string Object storage back to the origin vendor. Required when the origin site type is a third-party storage origin site (third_party). Optional values u200bu200binclude the following: <li>aws_s3: AWS S3;</li> <li>ali_oss: Alibaba Cloud OSS; </li> <li>hw_obs: Huawei OBS;</li> <li>others: object storage from other manufacturers, only supports object storage compatible with AWS signature algorithm, such as Tencent Cloud COS. </li>
     */
    public $OriginCompany;

    /**
     * @param array $Origins List of main origin sites. When modifying the main origin site, the corresponding OriginType needs to be filled in at the same time.
     * @param string $OriginType Main origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
     * @param string $ServerName When returning to the main origin server, the Host header will default to the accelerated domain name if it is not filled in. When the origin server type is object storage, the ServerName field is required.
     * @param string $OriginPullProtocol Back-to-origin protocol configuration: <li>http: Forces HTTP back-to-origin;</li> <li>follow: The protocol follows back-to-origin;</li> <li>https: Forces https back-to-origin, and https back-to-origin only supports origin. Station port 443. </li>
     * @param array $BackupOrigins Backup source site list. When modifying the backup origin site, the corresponding OriginType needs to be filled in at the same time.
     * @param string $BackupOriginType Backup origin site type, input parameters support the following types: <li>domain: domain name type;</li> <li>ip: IP list as the origin site;</li> <li>third_party: third-party storage origin site . </li>
     * @param string $BackupServerName Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginCompany Object storage back to the origin vendor. Required when the origin site type is a third-party storage origin site (third_party). Optional values u200bu200binclude the following: <li>aws_s3: AWS S3;</li> <li>ali_oss: Alibaba Cloud OSS; </li> <li>hw_obs: Huawei OBS;</li> <li>others: object storage from other manufacturers, only supports object storage compatible with AWS signature algorithm, such as Tencent Cloud COS. </li>
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
