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
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getAccountName() 获取Sub-account name
 * @method void setAccountName(string $AccountName) 设置Sub-account name
 * @method string getAccountPassword() 获取Sub-account password
 * @method void setAccountPassword(string $AccountPassword) 设置Sub-account password
 * @method array getReadonlyPolicy() 获取Routing policy. Enter `master` for master node or `replication` for slave node
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置Routing policy. Enter `master` for master node or `replication` for slave node
 * @method string getPrivilege() 获取Read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
 * @method void setPrivilege(string $Privilege) 设置Read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
 * @method string getRemark() 获取Sub-account description information
 * @method void setRemark(string $Remark) 设置Sub-account description information
 */

/**
 *CreateInstanceAccount request structure.
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Sub-account name
     */
    public $AccountName;

    /**
     * @var string Sub-account password
     */
    public $AccountPassword;

    /**
     * @var array Routing policy. Enter `master` for master node or `replication` for slave node
     */
    public $ReadonlyPolicy;

    /**
     * @var string Read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
     */
    public $Privilege;

    /**
     * @var string Sub-account description information
     */
    public $Remark;
    /**
     * @param string $InstanceId Instance ID
     * @param string $AccountName Sub-account name
     * @param string $AccountPassword Sub-account password
     * @param array $ReadonlyPolicy Routing policy. Enter `master` for master node or `replication` for slave node
     * @param string $Privilege Read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
     * @param string $Remark Sub-account description information
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
