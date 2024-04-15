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
 * Sub-account information
 *
 * @method string getInstanceId() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountName() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountName(string $AccountName) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivilege() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilege(string $Privilege) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReadonlyPolicy() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 */
class Account extends AbstractModel
{
    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountName;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Privilege;

    /**
     * @var array Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadonlyPolicy;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $InstanceId Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountName Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Privilege Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ReadonlyPolicy Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
