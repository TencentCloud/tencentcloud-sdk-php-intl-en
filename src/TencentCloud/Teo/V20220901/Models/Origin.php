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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The origin server configuration.
 *
 * @method array getOrigins() Obtain Primary origin server list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrigins(array $Origins) Set Primary origin server list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBackupOrigins() Obtain The list of backup origin servers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupOrigins(array $BackupOrigins) Set The list of backup origin servers.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol configuration. Values:
<li>`http`: Force HTTP for origin-pull.</li>
<li>`follow`: Follow protocol.</li>
<li>`https`: Force HTTPS for origin-pull.</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol configuration. Values:
<li>`http`: Force HTTP for origin-pull.</li>
<li>`follow`: Follow protocol.</li>
<li>`https`: Force HTTPS for origin-pull.</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCosPrivateAccess() Obtain Whether to allow private access to buckets when `OriginType=cos`. Valid values: 
<li>`on`: Private access;</li>
<li>`off`: Public access.</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCosPrivateAccess(string $CosPrivateAccess) Set Whether to allow private access to buckets when `OriginType=cos`. Valid values: 
<li>`on`: Private access;</li>
<li>`off`: Public access.</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Origin extends AbstractModel
{
    /**
     * @var array Primary origin server list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Origins;

    /**
     * @var array The list of backup origin servers.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupOrigins;

    /**
     * @var string Origin-pull protocol configuration. Values:
<li>`http`: Force HTTP for origin-pull.</li>
<li>`follow`: Follow protocol.</li>
<li>`https`: Force HTTPS for origin-pull.</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginPullProtocol;

    /**
     * @var string Whether to allow private access to buckets when `OriginType=cos`. Valid values: 
<li>`on`: Private access;</li>
<li>`off`: Public access.</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CosPrivateAccess;

    /**
     * @param array $Origins Primary origin server list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BackupOrigins The list of backup origin servers.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginPullProtocol Origin-pull protocol configuration. Values:
<li>`http`: Force HTTP for origin-pull.</li>
<li>`follow`: Follow protocol.</li>
<li>`https`: Force HTTPS for origin-pull.</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CosPrivateAccess Whether to allow private access to buckets when `OriginType=cos`. Valid values: 
<li>`on`: Private access;</li>
<li>`off`: Public access.</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
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
