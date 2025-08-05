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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The origin server configuration.
 *
 * @method array getOrigins() Obtain Origin server list.
 * @method void setOrigins(array $Origins) Set Origin server list.
 * @method array getBackupOrigins() Obtain Backup origin list.
 * @method void setBackupOrigins(array $BackupOrigins) Set Backup origin list.
 * @method string getOriginPullProtocol() Obtain Origin server protocol configuration. valid values:.
<Li>Http: forced http back to source;</li>.
<Li>`Follow`: follow protocol.</li>.
<Li>Https: enforce https origin-pull.</li>.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin server protocol configuration. valid values:.
<Li>Http: forced http back to source;</li>.
<Li>`Follow`: follow protocol.</li>.
<Li>Https: enforce https origin-pull.</li>.
 * @method string getCosPrivateAccess() Obtain When the origin is tencent cloud COS, whether it is a private access bucket. valid values:.
<li>`on`: private network access;</li>.
<li>`off`: public access.</li>.
 * @method void setCosPrivateAccess(string $CosPrivateAccess) Set When the origin is tencent cloud COS, whether it is a private access bucket. valid values:.
<li>`on`: private network access;</li>.
<li>`off`: public access.</li>.
 */
class Origin extends AbstractModel
{
    /**
     * @var array Origin server list.
     */
    public $Origins;

    /**
     * @var array Backup origin list.
     */
    public $BackupOrigins;

    /**
     * @var string Origin server protocol configuration. valid values:.
<Li>Http: forced http back to source;</li>.
<Li>`Follow`: follow protocol.</li>.
<Li>Https: enforce https origin-pull.</li>.
     */
    public $OriginPullProtocol;

    /**
     * @var string When the origin is tencent cloud COS, whether it is a private access bucket. valid values:.
<li>`on`: private network access;</li>.
<li>`off`: public access.</li>.
     */
    public $CosPrivateAccess;

    /**
     * @param array $Origins Origin server list.
     * @param array $BackupOrigins Backup origin list.
     * @param string $OriginPullProtocol Origin server protocol configuration. valid values:.
<Li>Http: forced http back to source;</li>.
<Li>`Follow`: follow protocol.</li>.
<Li>Https: enforce https origin-pull.</li>.
     * @param string $CosPrivateAccess When the origin is tencent cloud COS, whether it is a private access bucket. valid values:.
<li>`on`: private network access;</li>.
<li>`off`: public access.</li>.
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

        if (array_key_exists("BackupOrigins",$param) and $param["BackupOrigins"] !== null) {
            $this->BackupOrigins = $param["BackupOrigins"];
        }

        if (array_key_exists("OriginPullProtocol",$param) and $param["OriginPullProtocol"] !== null) {
            $this->OriginPullProtocol = $param["OriginPullProtocol"];
        }

        if (array_key_exists("CosPrivateAccess",$param) and $param["CosPrivateAccess"] !== null) {
            $this->CosPrivateAccess = $param["CosPrivateAccess"];
        }
    }
}
