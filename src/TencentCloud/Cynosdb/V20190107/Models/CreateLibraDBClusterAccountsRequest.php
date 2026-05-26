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
 * CreateLibraDBClusterAccounts request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster id
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster id
 * @method array getAccounts() Obtain Account information
 * @method void setAccounts(array $Accounts) Set Account information
 * @method string getEncryptMethod() Obtain Encryption method
 * @method void setEncryptMethod(string $EncryptMethod) Set Encryption method
 */
class CreateLibraDBClusterAccountsRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster id
     */
    public $ClusterId;

    /**
     * @var array Account information
     */
    public $Accounts;

    /**
     * @var string Encryption method
     */
    public $EncryptMethod;

    /**
     * @param string $ClusterId Analysis Cluster id
     * @param array $Accounts Account information
     * @param string $EncryptMethod Encryption method
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

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new NewAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }
    }
}
