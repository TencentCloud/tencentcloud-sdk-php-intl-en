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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getAccountName() Obtain Sub-account name. If you want to change it to the root account, fill in root.
 * @method void setAccountName(string $AccountName) Set Sub-account name. If you want to change it to the root account, fill in root.
 * @method string getAccountPassword() Obtain Sub-account password.
 * @method void setAccountPassword(string $AccountPassword) Set Sub-account password.
 * @method string getRemark() Obtain Sub-account description information
 * @method void setRemark(string $Remark) Set Sub-account description information
 * @method array getReadonlyPolicy() Obtain Account read/write routing policy.
- master: primary node.
- replication: secondary node.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Account read/write routing policy.
- master: primary node.
- replication: secondary node.
 * @method string getPrivilege() Obtain Sub-account read/write policy.
- r: read-only.
- w: write-only.
- rw: read/write.
 * @method void setPrivilege(string $Privilege) Set Sub-account read/write policy.
- r: read-only.
- w: write-only.
- rw: read/write.
 * @method boolean getNoAuth() Obtain Whether to switch the root account to a password-free account. This applies only to the root account. Sub-accounts do not support password-free access.
- true: Switch the root account to a password-free account.
- false: Do not switch it.
 * @method void setNoAuth(boolean $NoAuth) Set Whether to switch the root account to a password-free account. This applies only to the root account. Sub-accounts do not support password-free access.
- true: Switch the root account to a password-free account.
- false: Do not switch it.
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Sub-account name. If you want to change it to the root account, fill in root.
     */
    public $AccountName;

    /**
     * @var string Sub-account password.
     */
    public $AccountPassword;

    /**
     * @var string Sub-account description information
     */
    public $Remark;

    /**
     * @var array Account read/write routing policy.
- master: primary node.
- replication: secondary node.
     */
    public $ReadonlyPolicy;

    /**
     * @var string Sub-account read/write policy.
- r: read-only.
- w: write-only.
- rw: read/write.
     */
    public $Privilege;

    /**
     * @var boolean Whether to switch the root account to a password-free account. This applies only to the root account. Sub-accounts do not support password-free access.
- true: Switch the root account to a password-free account.
- false: Do not switch it.
     */
    public $NoAuth;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $AccountName Sub-account name. If you want to change it to the root account, fill in root.
     * @param string $AccountPassword Sub-account password.
     * @param string $Remark Sub-account description information
     * @param array $ReadonlyPolicy Account read/write routing policy.
- master: primary node.
- replication: secondary node.
     * @param string $Privilege Sub-account read/write policy.
- r: read-only.
- w: write-only.
- rw: read/write.
     * @param boolean $NoAuth Whether to switch the root account to a password-free account. This applies only to the root account. Sub-accounts do not support password-free access.
- true: Switch the root account to a password-free account.
- false: Do not switch it.
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
    }
}
