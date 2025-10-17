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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getAccountName() Obtain Specifies the account that needs modification.
- root: refers to the automatically generated account when a TencentDB for Redis® instance is created. Users cannot modify read-write permissions for the account, but can only modify its request routing policies.
- Custom account: an account manually created by users after successful instance creation. Users can modify read-write permissions and request routing policies for the account at any time.
 * @method void setAccountName(string $AccountName) Set Specifies the account that needs modification.
- root: refers to the automatically generated account when a TencentDB for Redis® instance is created. Users cannot modify read-write permissions for the account, but can only modify its request routing policies.
- Custom account: an account manually created by users after successful instance creation. Users can modify read-write permissions and request routing policies for the account at any time.
 * @method string getAccountPassword() Obtain Specifies the access password for the account to be modified.
 * @method void setAccountPassword(string $AccountPassword) Set Specifies the access password for the account to be modified.
 * @method string getRemark() Obtain Account description information.
 * @method void setRemark(string $Remark) Set Account description information.
 * @method array getReadonlyPolicy() Obtain Specifies the read-write request routing policies for the account to be modified.
- master: read-write request routing to the primary node.
- replication: read-write request routing to the secondary node.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Specifies the read-write request routing policies for the account to be modified.
- master: read-write request routing to the primary node.
- replication: read-write request routing to the secondary node.
 * @method string getPrivilege() Obtain Specifies the read-write permissions for the account to be modified.
- r: read-only.
- w: write-only.
- rw: read-write.
 * @method void setPrivilege(string $Privilege) Set Specifies the read-write permissions for the account to be modified.
- r: read-only.
- w: write-only.
- rw: read-write.
 * @method boolean getNoAuth() Obtain Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.
- true: set the default account (root) to a password-free account.
- false: not set the default account (root) to a password-free account.
 * @method void setNoAuth(boolean $NoAuth) Set Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.
- true: set the default account (root) to a password-free account.
- false: not set the default account (root) to a password-free account.
 * @method boolean getEncryptPassword() Obtain Specifies whether to encrypt the password for the account to be modified.
 * @method void setEncryptPassword(boolean $EncryptPassword) Set Specifies whether to encrypt the password for the account to be modified.
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Specifies the account that needs modification.
- root: refers to the automatically generated account when a TencentDB for Redis® instance is created. Users cannot modify read-write permissions for the account, but can only modify its request routing policies.
- Custom account: an account manually created by users after successful instance creation. Users can modify read-write permissions and request routing policies for the account at any time.
     */
    public $AccountName;

    /**
     * @var string Specifies the access password for the account to be modified.
     */
    public $AccountPassword;

    /**
     * @var string Account description information.
     */
    public $Remark;

    /**
     * @var array Specifies the read-write request routing policies for the account to be modified.
- master: read-write request routing to the primary node.
- replication: read-write request routing to the secondary node.
     */
    public $ReadonlyPolicy;

    /**
     * @var string Specifies the read-write permissions for the account to be modified.
- r: read-only.
- w: write-only.
- rw: read-write.
     */
    public $Privilege;

    /**
     * @var boolean Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.
- true: set the default account (root) to a password-free account.
- false: not set the default account (root) to a password-free account.
     */
    public $NoAuth;

    /**
     * @var boolean Specifies whether to encrypt the password for the account to be modified.
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $AccountName Specifies the account that needs modification.
- root: refers to the automatically generated account when a TencentDB for Redis® instance is created. Users cannot modify read-write permissions for the account, but can only modify its request routing policies.
- Custom account: an account manually created by users after successful instance creation. Users can modify read-write permissions and request routing policies for the account at any time.
     * @param string $AccountPassword Specifies the access password for the account to be modified.
     * @param string $Remark Account description information.
     * @param array $ReadonlyPolicy Specifies the read-write request routing policies for the account to be modified.
- master: read-write request routing to the primary node.
- replication: read-write request routing to the secondary node.
     * @param string $Privilege Specifies the read-write permissions for the account to be modified.
- r: read-only.
- w: write-only.
- rw: read-write.
     * @param boolean $NoAuth Specifies whether to set the default account (root) to a password-free account. Custom accounts do not support password-free access.
- true: set the default account (root) to a password-free account.
- false: not set the default account (root) to a password-free account.
     * @param boolean $EncryptPassword Specifies whether to encrypt the password for the account to be modified.
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
