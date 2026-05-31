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
 * GrantAccountPrivileges request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method InputAccount getAccount() Obtain Account information
 * @method void setAccount(InputAccount $Account) Set Account information
 * @method array getDbTablePrivileges() Obtain Array of table permission codes
 * @method void setDbTablePrivileges(array $DbTablePrivileges) Set Array of table permission codes
 * @method array getDbTables() Obtain Database table information
 * @method void setDbTables(array $DbTables) Set Database table information
 */
class GrantAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var InputAccount Account information
     */
    public $Account;

    /**
     * @var array Array of table permission codes
     */
    public $DbTablePrivileges;

    /**
     * @var array Database table information
     */
    public $DbTables;

    /**
     * @param string $ClusterId Cluster ID.
     * @param InputAccount $Account Account information
     * @param array $DbTablePrivileges Array of table permission codes
     * @param array $DbTables Database table information
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

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new InputAccount();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("DbTablePrivileges",$param) and $param["DbTablePrivileges"] !== null) {
            $this->DbTablePrivileges = $param["DbTablePrivileges"];
        }

        if (array_key_exists("DbTables",$param) and $param["DbTables"] !== null) {
            $this->DbTables = [];
            foreach ($param["DbTables"] as $key => $value){
                $obj = new DbTable();
                $obj->deserialize($value);
                array_push($this->DbTables, $obj);
            }
        }
    }
}
