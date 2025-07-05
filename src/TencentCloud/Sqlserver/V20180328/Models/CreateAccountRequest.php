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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount request structure.
 *
 * @method string getInstanceId() Obtain Database instance ID in the format of mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) Set Database instance ID in the format of mssql-njj2mtpl
 * @method array getAccounts() Obtain Database instance account information
 * @method void setAccounts(array $Accounts) Set Database instance account information
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string Database instance ID in the format of mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var array Database instance account information
     */
    public $Accounts;

    /**
     * @param string $InstanceId Database instance ID in the format of mssql-njj2mtpl
     * @param array $Accounts Database instance account information
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new AccountCreateInfo();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }
    }
}
