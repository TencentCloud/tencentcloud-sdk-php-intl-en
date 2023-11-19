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
 * Timestamp anti-hotlinking mode D configuration; The access URL format of timestamp anti-hotlinking mode D is: http://DomainName/FileName?sign=md5hash&t=timestamp; where timestamp is a decimal or hexadecimal UNIX timestamp; md5hash: MD5 (custom key + file path + timestamp).
 *
 * @method string getSecretKey() Obtain The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
 * @method void setSecretKey(string $SecretKey) Set The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
 * @method integer getExpireTime() Obtain Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
 * @method array getFileExtensions() Obtain File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
 * @method void setFileExtensions(array $FileExtensions) Set File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
 * @method string getFilterType() Obtain whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
 * @method void setFilterType(string $FilterType) Set whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
 * @method string getSignParam() Obtain Signature parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
 * @method void setSignParam(string $SignParam) Set Signature parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
 * @method string getTimeParam() Obtain Timestamp parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
 * @method void setTimeParam(string $TimeParam) Set Timestamp parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
 * @method string getTimeFormat() Obtain Timestamp base setting: <li>dec: decimal</li> <li>hex: hexadecimal</li>
 * @method void setTimeFormat(string $TimeFormat) Set Timestamp base setting: <li>dec: decimal</li> <li>hex: hexadecimal</li>
 * @method string getBackupSecretKey() Obtain Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
 */
class AuthenticationTypeD extends AbstractModel
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
     * @var string Signature parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
     */
    public $SignParam;

    /**
     * @var string Timestamp parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
     */
    public $TimeParam;

    /**
     * @var string Timestamp base setting: <li>dec: decimal</li> <li>hex: hexadecimal</li>
     */
    public $TimeFormat;

    /**
     * @var string Alternate key for calculating signature; only uppercase and lowercase letters and numbers are allowed, length 6~32 characters.
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey The key to calculate the signature; only uppercase and lowercase letters and numbers are allowed, with a length of 6~32 characters.
     * @param integer $ExpireTime Signature expiration time setting; the unit is seconds, and the maximum value can be set to 630720000.
     * @param array $FileExtensions File extension list settings for authentication/non-authentication; if the character * is included, it means all files.
     * @param string $FilterType whitelist: whitelist, indicating that all types except the FileExtensions list will be authenticated; blacklist: blacklist, indicating that only the types in FileExtensions will be authenticated.
     * @param string $SignParam Signature parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
     * @param string $TimeParam Timestamp parameter name setting; only uppercase and lowercase letters, numbers or underscores are allowed, the length is 1~100 characters, and it cannot start with a number.
     * @param string $TimeFormat Timestamp base setting: <li>dec: decimal</li> <li>hex: hexadecimal</li>
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

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }
    }
}
