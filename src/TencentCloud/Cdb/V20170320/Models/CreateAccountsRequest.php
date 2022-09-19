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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccounts request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method array getAccounts() Obtain List of TencentDB accounts
 * @method void setAccounts(array $Accounts) Set List of TencentDB accounts
 * @method string getPassword() Obtain Password of the new account
 * @method void setPassword(string $Password) Set Password of the new account
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method integer getMaxUserConnections() Obtain Maximum connections of the new account. Default value: `10240`. Maximum value: `10240`.
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set Maximum connections of the new account. Default value: `10240`. Maximum value: `10240`.
 */
class CreateAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var array List of TencentDB accounts
     */
    public $Accounts;

    /**
     * @var string Password of the new account
     */
    public $Password;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var integer Maximum connections of the new account. Default value: `10240`. Maximum value: `10240`.
     */
    public $MaxUserConnections;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param array $Accounts List of TencentDB accounts
     * @param string $Password Password of the new account
     * @param string $Description Remarks
     * @param integer $MaxUserConnections Maximum connections of the new account. Default value: `10240`. Maximum value: `10240`.
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
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
