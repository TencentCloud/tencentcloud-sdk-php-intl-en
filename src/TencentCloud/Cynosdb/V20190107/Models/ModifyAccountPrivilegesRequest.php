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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPrivileges request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method InputAccount getAccount() Obtain Account infomation
 * @method void setAccount(InputAccount $Account) Set Account infomation
 * @method array getGlobalPrivileges() Obtain Array of global permissions
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Array of global permissions
 * @method array getDatabasePrivileges() Obtain Array of database permissions
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Array of database permissions
 * @method array getTablePrivileges() Obtain Array of table permissions
 * @method void setTablePrivileges(array $TablePrivileges) Set Array of table permissions
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var InputAccount Account infomation
     */
    public $Account;

    /**
     * @var array Array of global permissions
     */
    public $GlobalPrivileges;

    /**
     * @var array Array of database permissions
     */
    public $DatabasePrivileges;

    /**
     * @var array Array of table permissions
     */
    public $TablePrivileges;

    /**
     * @param string $ClusterId Cluster ID
     * @param InputAccount $Account Account infomation
     * @param array $GlobalPrivileges Array of global permissions
     * @param array $DatabasePrivileges Array of database permissions
     * @param array $TablePrivileges Array of table permissions
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
