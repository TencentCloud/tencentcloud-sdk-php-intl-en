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
 * ModifyLibraDBClusterAccountPrivilege request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method InputAccount getAccount() Obtain Account
 * @method void setAccount(InputAccount $Account) Set Account
 * @method array getGlobalPrivileges() Obtain Global permission
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Global permission
 * @method array getDatabasePrivileges() Obtain Database permission
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Database permission
 * @method array getTablePrivileges() Obtain Table permission
 * @method void setTablePrivileges(array $TablePrivileges) Set Table permission
 */
class ModifyLibraDBClusterAccountPrivilegeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var InputAccount Account
     */
    public $Account;

    /**
     * @var array Global permission
     */
    public $GlobalPrivileges;

    /**
     * @var array Database permission
     */
    public $DatabasePrivileges;

    /**
     * @var array Table permission
     */
    public $TablePrivileges;

    /**
     * @param string $ClusterId Cluster ID.
     * @param InputAccount $Account Account
     * @param array $GlobalPrivileges Global permission
     * @param array $DatabasePrivileges Database permission
     * @param array $TablePrivileges Table permission
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

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivileges();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivileges();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }
    }
}
