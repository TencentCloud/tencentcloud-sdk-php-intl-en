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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database information
 *
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getCharset() Obtain Character set
 * @method void setCharset(string $Charset) Set Character set
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getCreateTime() Obtain Database creation time
 * @method void setCreateTime(string $CreateTime) Set Database creation time
 * @method integer getStatus() Obtain Database status. 1: creating, 2: running, 3: modifying, -1: dropping
 * @method void setStatus(integer $Status) Set Database status. 1: creating, 2: running, 3: modifying, -1: dropping
 * @method array getAccounts() Obtain Database account permission information
 * @method void setAccounts(array $Accounts) Set Database account permission information
 * @method string getInternalStatus() Obtain Internal status. ONLINE: running
 * @method void setInternalStatus(string $InternalStatus) Set Internal status. ONLINE: running
 * @method string getEncryption() Obtain TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method void setEncryption(string $Encryption) Set TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 */
class DBDetail extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Character set
     */
    public $Charset;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Database creation time
     */
    public $CreateTime;

    /**
     * @var integer Database status. 1: creating, 2: running, 3: modifying, -1: dropping
     */
    public $Status;

    /**
     * @var array Database account permission information
     */
    public $Accounts;

    /**
     * @var string Internal status. ONLINE: running
     */
    public $InternalStatus;

    /**
     * @var string TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     */
    public $Encryption;

    /**
     * @param string $Name Database name
     * @param string $Charset Character set
     * @param string $Remark Remarks
     * @param string $CreateTime Database creation time
     * @param integer $Status Database status. 1: creating, 2: running, 3: modifying, -1: dropping
     * @param array $Accounts Database account permission information
     * @param string $InternalStatus Internal status. ONLINE: running
     * @param string $Encryption TDE status. Valid values: `enable` (enabled), `disable` (disabled).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new AccountPrivilege();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("InternalStatus",$param) and $param["InternalStatus"] !== null) {
            $this->InternalStatus = $param["InternalStatus"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}
