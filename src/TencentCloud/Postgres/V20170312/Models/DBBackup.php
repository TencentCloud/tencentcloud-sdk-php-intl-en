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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database backup information
 *
 * @method integer getId() Obtain Unique backup file ID
 * @method void setId(integer $Id) Set Unique backup file ID
 * @method string getStartTime() Obtain File generation start time
 * @method void setStartTime(string $StartTime) Set File generation start time
 * @method string getEndTime() Obtain File generation end time
 * @method void setEndTime(string $EndTime) Set File generation end time
 * @method integer getSize() Obtain File size in KB
 * @method void setSize(integer $Size) Set File size in KB
 * @method integer getStrategy() Obtain Policy (0: instance backup, 1: multi-database backup)
 * @method void setStrategy(integer $Strategy) Set Policy (0: instance backup, 1: multi-database backup)
 * @method integer getWay() Obtain Type (0: scheduled)
 * @method void setWay(integer $Way) Set Type (0: scheduled)
 * @method integer getType() Obtain Backup mode (1: full)
 * @method void setType(integer $Type) Set Backup mode (1: full)
 * @method integer getStatus() Obtain Status (1: creating, 2: success, 3: failure)
 * @method void setStatus(integer $Status) Set Status (1: creating, 2: success, 3: failure)
 * @method array getDbList() Obtain DB list
 * @method void setDbList(array $DbList) Set DB list
 * @method string getInternalAddr() Obtain Download address on private network
 * @method void setInternalAddr(string $InternalAddr) Set Download address on private network
 * @method string getExternalAddr() Obtain Download address on public network
 * @method void setExternalAddr(string $ExternalAddr) Set Download address on public network
 * @method string getSetId() Obtain Backup set ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSetId(string $SetId) Set Backup set ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DBBackup extends AbstractModel
{
    /**
     * @var integer Unique backup file ID
     */
    public $Id;

    /**
     * @var string File generation start time
     */
    public $StartTime;

    /**
     * @var string File generation end time
     */
    public $EndTime;

    /**
     * @var integer File size in KB
     */
    public $Size;

    /**
     * @var integer Policy (0: instance backup, 1: multi-database backup)
     */
    public $Strategy;

    /**
     * @var integer Type (0: scheduled)
     */
    public $Way;

    /**
     * @var integer Backup mode (1: full)
     */
    public $Type;

    /**
     * @var integer Status (1: creating, 2: success, 3: failure)
     */
    public $Status;

    /**
     * @var array DB list
     */
    public $DbList;

    /**
     * @var string Download address on private network
     */
    public $InternalAddr;

    /**
     * @var string Download address on public network
     */
    public $ExternalAddr;

    /**
     * @var string Backup set ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SetId;

    /**
     * @param integer $Id Unique backup file ID
     * @param string $StartTime File generation start time
     * @param string $EndTime File generation end time
     * @param integer $Size File size in KB
     * @param integer $Strategy Policy (0: instance backup, 1: multi-database backup)
     * @param integer $Way Type (0: scheduled)
     * @param integer $Type Backup mode (1: full)
     * @param integer $Status Status (1: creating, 2: success, 3: failure)
     * @param array $DbList DB list
     * @param string $InternalAddr Download address on private network
     * @param string $ExternalAddr Download address on public network
     * @param string $SetId Backup set ID
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Way",$param) and $param["Way"] !== null) {
            $this->Way = $param["Way"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DbList",$param) and $param["DbList"] !== null) {
            $this->DbList = $param["DbList"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }
    }
}
