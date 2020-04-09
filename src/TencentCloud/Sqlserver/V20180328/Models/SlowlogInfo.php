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
 * Slow query log file information
 *
 * @method integer getId() Obtain Unique ID of slow query log file
 * @method void setId(integer $Id) Set Unique ID of slow query log file
 * @method string getStartTime() Obtain File generation start time
 * @method void setStartTime(string $StartTime) Set File generation start time
 * @method string getEndTime() Obtain File generation end time
 * @method void setEndTime(string $EndTime) Set File generation end time
 * @method integer getSize() Obtain File size in KB
 * @method void setSize(integer $Size) Set File size in KB
 * @method integer getCount() Obtain Number of logs in file
 * @method void setCount(integer $Count) Set Number of logs in file
 * @method string getInternalAddr() Obtain Download address for private network
 * @method void setInternalAddr(string $InternalAddr) Set Download address for private network
 * @method string getExternalAddr() Obtain Download address for public network
 * @method void setExternalAddr(string $ExternalAddr) Set Download address for public network
 * @method integer getStatus() Obtain Status (1: success, 2: failure)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status (1: success, 2: failure)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SlowlogInfo extends AbstractModel
{
    /**
     * @var integer Unique ID of slow query log file
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
     * @var integer Number of logs in file
     */
    public $Count;

    /**
     * @var string Download address for private network
     */
    public $InternalAddr;

    /**
     * @var string Download address for public network
     */
    public $ExternalAddr;

    /**
     * @var integer Status (1: success, 2: failure)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $Id Unique ID of slow query log file
     * @param string $StartTime File generation start time
     * @param string $EndTime File generation end time
     * @param integer $Size File size in KB
     * @param integer $Count Number of logs in file
     * @param string $InternalAddr Download address for private network
     * @param string $ExternalAddr Download address for public network
     * @param integer $Status Status (1: success, 2: failure)
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
