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
 * @method array getOrigins() Obtain 
 * @method void setOrigins(array $Origins) Set 
 * @method string getOriginType() Obtain 
 * @method void setOriginType(string $OriginType) Set 
 * @method string getServerName() Obtain 
 * @method void setServerName(string $ServerName) Set 
 * @method string getOriginPullProtocol() Obtain 
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set 
 * @method array getBackupOrigins() Obtain 
 * @method void setBackupOrigins(array $BackupOrigins) Set 
 * @method string getBackupOriginType() Obtain 
 * @method void setBackupOriginType(string $BackupOriginType) Set 
 * @method string getBackupServerName() Obtain Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBackupServerName(string $BackupServerName) Set Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginCompany() Obtain 
 * @method void setOriginCompany(string $OriginCompany) Set 
 */
class Origin extends AbstractModel
{
    /**
     * @var array 
     */
    public $Origins;

    /**
     * @var string 
     */
    public $OriginType;

    /**
     * @var string 
     */
    public $ServerName;

    /**
     * @var string 
     */
    public $OriginPullProtocol;

    /**
     * @var array 
     */
    public $BackupOrigins;

    /**
     * @var string 
     */
    public $BackupOriginType;

    /**
     * @var string Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BackupServerName;

    /**
     * @var string 
     */
    public $OriginCompany;

    /**
     * @param array $Origins 
     * @param string $OriginType 
     * @param string $ServerName 
     * @param string $OriginPullProtocol 
     * @param array $BackupOrigins 
     * @param string $BackupOriginType 
     * @param string $BackupServerName Host header used when accessing the backup origin server. If it is left empty, the ServerName of primary origin server will be used by default. Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginCompany 
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
