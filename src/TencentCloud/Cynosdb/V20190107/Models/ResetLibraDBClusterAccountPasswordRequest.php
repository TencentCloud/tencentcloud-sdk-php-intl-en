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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetLibraDBClusterAccountPassword request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster ID
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster ID
 * @method string getAccountPassword() Obtain Password.
 * @method void setAccountPassword(string $AccountPassword) Set Password.
 * @method string getAccountName() Obtain Account
 * @method void setAccountName(string $AccountName) Set Account
 * @method string getEncryptMethod() Obtain Encryption method
 * @method void setEncryptMethod(string $EncryptMethod) Set Encryption method
 * @method string getHost() Obtain host
 * @method void setHost(string $Host) Set host
 */
class ResetLibraDBClusterAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Password.
     */
    public $AccountPassword;

    /**
     * @var string Account
     */
    public $AccountName;

    /**
     * @var string Encryption method
     */
    public $EncryptMethod;

    /**
     * @var string host
     */
    public $Host;

    /**
     * @param string $ClusterId Analysis Cluster ID
     * @param string $AccountPassword Password.
     * @param string $AccountName Account
     * @param string $EncryptMethod Encryption method
     * @param string $Host host
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
