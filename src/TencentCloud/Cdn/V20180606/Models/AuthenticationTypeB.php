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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection mode B configuration (mode B is being upgraded and is currently not supported)
 *
 * @method string getSecretKey() Obtain The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getExpireTime() Obtain Signature expiration time
Unit: second. The maximum value is 630720000.
 * @method void setExpireTime(integer $ExpireTime) Set Signature expiration time
Unit: second. The maximum value is 630720000.
 * @method array getFileExtensions() Obtain File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
 * @method void setFileExtensions(array $FileExtensions) Set File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
 * @method string getFilterType() Obtain whitelist: indicates that all file types apart from the FileExtensions list are authenticated
blacklist: indicates that only the file types in the FileExtensions list are authenticated
 * @method void setFilterType(string $FilterType) Set whitelist: indicates that all file types apart from the FileExtensions list are authenticated
blacklist: indicates that only the file types in the FileExtensions list are authenticated
 * @method string getBackupSecretKey() Obtain Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Backup key, which is used to calculate a signature.
6-32 characters. Only digits and letters are allowed. 
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class AuthenticationTypeB extends AbstractModel
{
    /**
     * @var string The key for signature calculation
6-32 characters. Only digits and letters are allowed. 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecretKey;

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
     * @var string whitelist: indicates that all file types apart from the FileExtensions list are authenticated
blacklist: indicates that only the file types in the FileExtensions list are authenticated
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
     * @param integer $ExpireTime Signature expiration time
Unit: second. The maximum value is 630720000.
     * @param array $FileExtensions File extension list settings determining if authentication should be performed
If it contains an asterisk (*), this indicates all files.
     * @param string $FilterType whitelist: indicates that all file types apart from the FileExtensions list are authenticated
blacklist: indicates that only the file types in the FileExtensions list are authenticated
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
