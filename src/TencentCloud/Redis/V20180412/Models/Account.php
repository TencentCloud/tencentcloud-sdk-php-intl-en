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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountName() 获取Account name (`root` for a root account)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountName(string $AccountName) 设置Account name (`root` for a root account)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() 获取Account description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) 设置Account description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivilege() 获取Read/write policy. r: read-only; w: write-only; rw: read/write
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilege(string $Privilege) 设置Read/write policy. r: read-only; w: write-only; rw: read/write
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReadonlyPolicy() 获取Routing policy. master: master node; replication: slave node
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置Routing policy. master: master node; replication: slave node
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() 获取Sub-account status. 1: account is being changed; 2: account is valid; -4: account has been deleted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) 设置Sub-account status. 1: account is being changed; 2: account is valid; -4: account has been deleted
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Sub-account information
 */
class Account extends AbstractModel
{
    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Account name (`root` for a root account)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountName;

    /**
     * @var string Account description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Read/write policy. r: read-only; w: write-only; rw: read/write
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Privilege;

    /**
     * @var array Routing policy. master: master node; replication: slave node
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadonlyPolicy;

    /**
     * @var integer Sub-account status. 1: account is being changed; 2: account is valid; -4: account has been deleted
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;
    /**
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountName Account name (`root` for a root account)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Account description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Privilege Read/write policy. r: read-only; w: write-only; rw: read/write
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ReadonlyPolicy Routing policy. master: master node; replication: slave node
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Sub-account status. 1: account is being changed; 2: account is valid; -4: account has been deleted
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
