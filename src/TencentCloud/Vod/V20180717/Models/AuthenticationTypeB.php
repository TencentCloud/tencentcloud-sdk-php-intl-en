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
 * Timestamp hotlink protection mode B configuration
 *
 * @method string getSecretKey() Obtain Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
 * @method void setSecretKey(string $SecretKey) Set Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
 * @method integer getExpireTime() Obtain Signature expiration time setting;
In seconds. The maximum settable value is 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time setting;
In seconds. The maximum settable value is 630720000.
 * @method array getFileExtensions() Obtain List of filename extensions for authentication/no authentication settings;
If it contains the character *, it means all files.
 * @method void setFileExtensions(array $FileExtensions) Set List of filename extensions for authentication/no authentication settings;
If it contains the character *, it means all files.
 * @method string getFilterType() Obtain whitelist: allowlist, means to authenticate all types except those in the FileExtensions list;
blacklist: blocklist, means authentication is only applicable to the types in FileExtensions.
 * @method void setFilterType(string $FilterType) Set whitelist: allowlist, means to authenticate all types except those in the FileExtensions list;
blacklist: blocklist, means authentication is only applicable to the types in FileExtensions.
 * @method string getBackupSecretKey() Obtain Secondary key for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Secondary key for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
 */
class AuthenticationTypeB extends AbstractModel
{
    /**
     * @var string Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
     */
    public $SecretKey;

    /**
     * @var integer Signature expiration time setting;
In seconds. The maximum settable value is 630720000.
     */
    public $ExpireTime;

    /**
     * @var array List of filename extensions for authentication/no authentication settings;
If it contains the character *, it means all files.
     */
    public $FileExtensions;

    /**
     * @var string whitelist: allowlist, means to authenticate all types except those in the FileExtensions list;
blacklist: blocklist, means authentication is only applicable to the types in FileExtensions.
     */
    public $FilterType;

    /**
     * @var string Secondary key for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
     * @param integer $ExpireTime Signature expiration time setting;
In seconds. The maximum settable value is 630720000.
     * @param array $FileExtensions List of filename extensions for authentication/no authentication settings;
If it contains the character *, it means all files.
     * @param string $FilterType whitelist: allowlist, means to authenticate all types except those in the FileExtensions list;
blacklist: blocklist, means authentication is only applicable to the types in FileExtensions.
     * @param string $BackupSecretKey Secondary key for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6–32 characters.
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }
    }
}
