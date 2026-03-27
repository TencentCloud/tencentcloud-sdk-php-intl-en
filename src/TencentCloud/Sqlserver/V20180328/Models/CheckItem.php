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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance Resizing Inspection Items
 *
 * @method string getCheckName() Obtain Check item names: CK_CPU - Post-Resizing CPU Risk Check; CK_MASTER_STORAGE - During read-only replica resizing, verify that read-only replica storage space is not less than that of the primary instance; CK_MEMORY - Post-Resizing Memory Risk Check; CK_STORAGE - Post-Resizing Storage Space Risk Check; CK_UPGRATE - Resizing Migration Requirement Check;
 * @method void setCheckName(string $CheckName) Set Check item names: CK_CPU - Post-Resizing CPU Risk Check; CK_MASTER_STORAGE - During read-only replica resizing, verify that read-only replica storage space is not less than that of the primary instance; CK_MEMORY - Post-Resizing Memory Risk Check; CK_STORAGE - Post-Resizing Storage Space Risk Check; CK_UPGRATE - Resizing Migration Requirement Check;
 * @method string getCurrentValue() Obtain Check item return values: CK_CPU - Maximum CPU utilization (%) in the last 7 days; CK_MASTER_STORAGE - Disk space of the primary instance (GB); CK_MEMORY - Maximum memory usage (GB) in the last 7 days;

CK_STORAGE - Maximum disk usage (GB) in the last 7 days; CK_UPGRATE - Whether the current resizing check requires migration: MIGRATE indicates migration resizing is required, LOCAL indicates local resizing;
 * @method void setCurrentValue(string $CurrentValue) Set Check item return values: CK_CPU - Maximum CPU utilization (%) in the last 7 days; CK_MASTER_STORAGE - Disk space of the primary instance (GB); CK_MEMORY - Maximum memory usage (GB) in the last 7 days;

CK_STORAGE - Maximum disk usage (GB) in the last 7 days; CK_UPGRATE - Whether the current resizing check requires migration: MIGRATE indicates migration resizing is required, LOCAL indicates local resizing;
 * @method integer getPassed() Obtain Check item pass status: 0 - Not passed, resizing not allowed; 1 - Passed, resizing allowed
 * @method void setPassed(integer $Passed) Set Check item pass status: 0 - Not passed, resizing not allowed; 1 - Passed, resizing allowed
 * @method integer getIsAffect() Obtain Whether this resizing item affects the instance: 0 - No impact; 1 - Impact exists
 * @method void setIsAffect(integer $IsAffect) Set Whether this resizing item affects the instance: 0 - No impact; 1 - Impact exists
 * @method string getMsg() Obtain Required description when impact exists or the check is not passed
 * @method void setMsg(string $Msg) Set Required description when impact exists or the check is not passed
 * @method integer getMsgCode() Obtain Describe the corresponding code
 * @method void setMsgCode(integer $MsgCode) Set Describe the corresponding code
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string Check item names: CK_CPU - Post-Resizing CPU Risk Check; CK_MASTER_STORAGE - During read-only replica resizing, verify that read-only replica storage space is not less than that of the primary instance; CK_MEMORY - Post-Resizing Memory Risk Check; CK_STORAGE - Post-Resizing Storage Space Risk Check; CK_UPGRATE - Resizing Migration Requirement Check;
     */
    public $CheckName;

    /**
     * @var string Check item return values: CK_CPU - Maximum CPU utilization (%) in the last 7 days; CK_MASTER_STORAGE - Disk space of the primary instance (GB); CK_MEMORY - Maximum memory usage (GB) in the last 7 days;

CK_STORAGE - Maximum disk usage (GB) in the last 7 days; CK_UPGRATE - Whether the current resizing check requires migration: MIGRATE indicates migration resizing is required, LOCAL indicates local resizing;
     */
    public $CurrentValue;

    /**
     * @var integer Check item pass status: 0 - Not passed, resizing not allowed; 1 - Passed, resizing allowed
     */
    public $Passed;

    /**
     * @var integer Whether this resizing item affects the instance: 0 - No impact; 1 - Impact exists
     */
    public $IsAffect;

    /**
     * @var string Required description when impact exists or the check is not passed
     */
    public $Msg;

    /**
     * @var integer Describe the corresponding code
     */
    public $MsgCode;

    /**
     * @param string $CheckName Check item names: CK_CPU - Post-Resizing CPU Risk Check; CK_MASTER_STORAGE - During read-only replica resizing, verify that read-only replica storage space is not less than that of the primary instance; CK_MEMORY - Post-Resizing Memory Risk Check; CK_STORAGE - Post-Resizing Storage Space Risk Check; CK_UPGRATE - Resizing Migration Requirement Check;
     * @param string $CurrentValue Check item return values: CK_CPU - Maximum CPU utilization (%) in the last 7 days; CK_MASTER_STORAGE - Disk space of the primary instance (GB); CK_MEMORY - Maximum memory usage (GB) in the last 7 days;

CK_STORAGE - Maximum disk usage (GB) in the last 7 days; CK_UPGRATE - Whether the current resizing check requires migration: MIGRATE indicates migration resizing is required, LOCAL indicates local resizing;
     * @param integer $Passed Check item pass status: 0 - Not passed, resizing not allowed; 1 - Passed, resizing allowed
     * @param integer $IsAffect Whether this resizing item affects the instance: 0 - No impact; 1 - Impact exists
     * @param string $Msg Required description when impact exists or the check is not passed
     * @param integer $MsgCode Describe the corresponding code
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
        if (array_key_exists("CheckName",$param) and $param["CheckName"] !== null) {
            $this->CheckName = $param["CheckName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("IsAffect",$param) and $param["IsAffect"] !== null) {
            $this->IsAffect = $param["IsAffect"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("MsgCode",$param) and $param["MsgCode"] !== null) {
            $this->MsgCode = $param["MsgCode"];
        }
    }
}
