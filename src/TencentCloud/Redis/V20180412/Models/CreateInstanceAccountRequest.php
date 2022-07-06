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
 * CreateInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getAccountName() Obtain Sub-account name
 * @method void setAccountName(string $AccountName) Set Sub-account name
 * @method string getAccountPassword() Obtain 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method void setAccountPassword(string $AccountPassword) Set 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method array getReadonlyPolicy() Obtain Routing policy. Valid values: master (master node); replication (replica node)
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) Set Routing policy. Valid values: master (master node); replication (replica node)
 * @method string getPrivilege() Obtain Read/Write policy. Valid values: r (read-only); rw (read/write).
 * @method void setPrivilege(string $Privilege) Set Read/Write policy. Valid values: r (read-only); rw (read/write).
 * @method string getRemark() Obtain Sub-account description information
 * @method void setRemark(string $Remark) Set Sub-account description information
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
     * @var string 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     */
    public $AccountPassword;

    /**
     * @var array Routing policy. Valid values: master (master node); replication (replica node)
     */
    public $ReadonlyPolicy;

    /**
     * @var string Read/Write policy. Valid values: r (read-only); rw (read/write).
     */
    public $Privilege;

    /**
     * @var string Sub-account description information
     */
    public $Remark;

    /**
     * @param string $InstanceId Instance ID
     * @param string $AccountName Sub-account name
     * @param string $AccountPassword 1. The password must contain 8–30 characters. A password of 12 or more characters is recommended.
2. It cannot start with a slash (/).
3. It must contain characters in at least two of the following types:
    a. Lowercase letters (a–z)
    b. Uppercase letters (A–Z)
    c. Digits (0–9)
    d. ()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     * @param array $ReadonlyPolicy Routing policy. Valid values: master (master node); replication (replica node)
     * @param string $Privilege Read/Write policy. Valid values: r (read-only); rw (read/write).
     * @param string $Remark Sub-account description information
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
