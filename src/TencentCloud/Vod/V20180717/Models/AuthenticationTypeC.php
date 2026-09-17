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
 * Timestamp hotlink protection mode C configuration.
The access URL format of timestamp hotlink protection mode C is: http://DomainName/md5hash/timestamp/FileName;
Among them, timestamp is a hexadecimal UNIX timestamp;
md5hash: MD5 (custom key + file path + timestamp).
 *
 * @method string getSecretKey() Obtain Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
 * @method void setSecretKey(string $SecretKey) Set Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
 * @method integer getExpireTime() Obtain Signature expiration time setting;
In seconds. Maximum settable value: 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time setting;
In seconds. Maximum settable value: 630720000.
 * @method array getFileExtensions() Obtain List of filename extensions for authentication/no authentication settings;
If it contains the character *, it indicates all files.
 * @method void setFileExtensions(array $FileExtensions) Set List of filename extensions for authentication/no authentication settings;
If it contains the character *, it indicates all files.
 * @method string getFilterType() Obtain whitelist: allowlist, means to authenticate all types except the FileExtensions list;
blacklist: blocklist, means only applicable to authenticate the types in FileExtensions.
 * @method void setFilterType(string $FilterType) Set whitelist: allowlist, means to authenticate all types except the FileExtensions list;
blacklist: blocklist, means only applicable to authenticate the types in FileExtensions.
 * @method string getTimeFormat() Obtain Timestamp base settings:
<li>dec: decimal</li>
<li>hex: hexadecimal</li>
 * @method void setTimeFormat(string $TimeFormat) Set Timestamp base settings:
<li>dec: decimal</li>
<li>hex: hexadecimal</li>
 * @method string getBackupSecretKey() Obtain Secondary key for signature calculation;
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Secondary key for signature calculation;
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
 */
class AuthenticationTypeC extends AbstractModel
{
    /**
     * @var string Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
     */
    public $SecretKey;

    /**
     * @var integer Signature expiration time setting;
In seconds. Maximum settable value: 630720000.
     */
    public $ExpireTime;

    /**
     * @var array List of filename extensions for authentication/no authentication settings;
If it contains the character *, it indicates all files.
     */
    public $FileExtensions;

    /**
     * @var string whitelist: allowlist, means to authenticate all types except the FileExtensions list;
blacklist: blocklist, means only applicable to authenticate the types in FileExtensions.
     */
    public $FilterType;

    /**
     * @var string Timestamp base settings:
<li>dec: decimal</li>
<li>hex: hexadecimal</li>
     */
    public $TimeFormat;

    /**
     * @var string Secondary key for signature calculation;
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey Key used for signature calculation.
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
     * @param integer $ExpireTime Signature expiration time setting;
In seconds. Maximum settable value: 630720000.
     * @param array $FileExtensions List of filename extensions for authentication/no authentication settings;
If it contains the character *, it indicates all files.
     * @param string $FilterType whitelist: allowlist, means to authenticate all types except the FileExtensions list;
blacklist: blocklist, means only applicable to authenticate the types in FileExtensions.
     * @param string $TimeFormat Timestamp base settings:
<li>dec: decimal</li>
<li>hex: hexadecimal</li>
     * @param string $BackupSecretKey Secondary key for signature calculation;
Only allow upper- and lower-case letters and digits, with a length of 6 to 32 characters.
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

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }
    }
}
