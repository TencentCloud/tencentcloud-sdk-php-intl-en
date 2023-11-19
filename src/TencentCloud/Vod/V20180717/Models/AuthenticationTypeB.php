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
 * Timestamp hotlink protection mode B configuration
 *
 * @method string getSecretKey() Obtain The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
 * @method void setSecretKey(string $SecretKey) Set The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
 * @method integer getExpireTime() Obtain Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
 * @method array getFileExtensions() Obtain File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
 * @method void setFileExtensions(array $FileExtensions) Set File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
 * @method string getFilterType() Obtain whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
 * @method void setFilterType(string $FilterType) Set whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
 * @method string getBackupSecretKey() Obtain Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
 */
class AuthenticationTypeB extends AbstractModel
{
    /**
     * @var string The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
     */
    public $SecretKey;

    /**
     * @var integer Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
     */
    public $ExpireTime;

    /**
     * @var array File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
     */
    public $FileExtensions;

    /**
     * @var string whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
     */
    public $FilterType;

    /**
     * @var string Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
     * @param integer $ExpireTime Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
     * @param array $FileExtensions File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
     * @param string $FilterType whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
     * @param string $BackupSecretKey Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
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
