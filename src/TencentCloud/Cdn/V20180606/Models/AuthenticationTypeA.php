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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection mode A configuration
The access URL format of timestamp hotlink protection mode A is as follows: http://DomainName/Filename?sign=timestamp-rand-uid-md5hash
Here, timestamp is a decimal timestamp in Unix format;
rand is a random string composed of 0-100 characters, including digits, upper and lower-case letters.
uid is 0;
md5hash: MD5 (file path-timestamp-rand-uid-custom key)

 *
 * @method string getSecretKey() Obtain The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSignParam() Obtain Signature parameter name
Only upper and lower-case letters, digits, and underscores (_) are allowed. It cannot start with a digit. Length limit: 1-100 characters.
 * @method void setSignParam(string $SignParam) Set Signature parameter name
Only upper and lower-case letters, digits, and underscores (_) are allowed. It cannot start with a digit. Length limit: 1-100 characters.
 * @method integer getExpireTime() Obtain Signature expiration time
Unit: second. The maximum value is 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time
Unit: second. The maximum value is 630720000.
 * @method array getFileExtensions() Obtain File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
 * @method void setFileExtensions(array $FileExtensions) Set File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
 * @method string getFilterType() Obtain `whitelist`: All file types apart from the FileExtensions list are authenticated.
`blacklist`: Only the file types in the FileExtensions list are authenticated.
 * @method void setFilterType(string $FilterType) Set `whitelist`: All file types apart from the FileExtensions list are authenticated.
`blacklist`: Only the file types in the FileExtensions list are authenticated.
 * @method string getBackupSecretKey() Obtain Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class AuthenticationTypeA extends AbstractModel
{
    /**
     * @var string The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string Signature parameter name
Only upper and lower-case letters, digits, and underscores (_) are allowed. It cannot start with a digit. Length limit: 1-100 characters.
     */
    public $SignParam;

    /**
     * @var integer Signature expiration time
Unit: second. The maximum value is 630720000.
     */
    public $ExpireTime;

    /**
     * @var array File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
     */
    public $FileExtensions;

    /**
     * @var string `whitelist`: All file types apart from the FileExtensions list are authenticated.
`blacklist`: Only the file types in the FileExtensions list are authenticated.
     */
    public $FilterType;

    /**
     * @var string Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SignParam Signature parameter name
Only upper and lower-case letters, digits, and underscores (_) are allowed. It cannot start with a digit. Length limit: 1-100 characters.
     * @param integer $ExpireTime Signature expiration time
Unit: second. The maximum value is 630720000.
     * @param array $FileExtensions File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
     * @param string $FilterType `whitelist`: All file types apart from the FileExtensions list are authenticated.
`blacklist`: Only the file types in the FileExtensions list are authenticated.
     * @param string $BackupSecretKey Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
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
