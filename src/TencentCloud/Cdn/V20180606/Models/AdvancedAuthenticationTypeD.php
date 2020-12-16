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
 * Timestamp hotlink protection advanced configuration mode D
 *
 * @method string getSecretKey() Obtain Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
 * @method void setSecretKey(string $SecretKey) Set Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
 * @method string getBackupSecretKey() Obtain Alternative key used for authentication after the authentication key (`SecretKey`) failed
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Alternative key used for authentication after the authentication key (`SecretKey`) failed
 * @method string getSignParam() Obtain Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setSignParam(string $SignParam) Set Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method string getTimeParam() Obtain Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setTimeParam(string $TimeParam) Set Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method integer getExpireTime() Obtain Expiration time in seconds
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time in seconds
 * @method string getTimeFormat() Obtain Time format. Valid values: dec (decimal), hex (hexadecimal).
 * @method void setTimeFormat(string $TimeFormat) Set Time format. Valid values: dec (decimal), hex (hexadecimal).
 */
class AdvancedAuthenticationTypeD extends AbstractModel
{
    /**
     * @var string Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
     */
    public $SecretKey;

    /**
     * @var string Alternative key used for authentication after the authentication key (`SecretKey`) failed
     */
    public $BackupSecretKey;

    /**
     * @var string Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     */
    public $SignParam;

    /**
     * @var string Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     */
    public $TimeParam;

    /**
     * @var integer Expiration time in seconds
     */
    public $ExpireTime;

    /**
     * @var string Time format. Valid values: dec (decimal), hex (hexadecimal).
     */
    public $TimeFormat;

    /**
     * @param string $SecretKey Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
     * @param string $BackupSecretKey Alternative key used for authentication after the authentication key (`SecretKey`) failed
     * @param string $SignParam Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param string $TimeParam Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param integer $ExpireTime Expiration time in seconds
     * @param string $TimeFormat Time format. Valid values: dec (decimal), hex (hexadecimal).
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

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
