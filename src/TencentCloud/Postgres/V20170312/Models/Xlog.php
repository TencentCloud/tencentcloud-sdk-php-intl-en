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
 * Database Xlog information
 *
 * @method integer getId() Obtain Unique backup file ID
 * @method void setId(integer $Id) Set Unique backup file ID
 * @method string getStartTime() Obtain File generation start time
 * @method void setStartTime(string $StartTime) Set File generation start time
 * @method string getEndTime() Obtain File generation end time
 * @method void setEndTime(string $EndTime) Set File generation end time
 * @method string getInternalAddr() Obtain Download address on private network
 * @method void setInternalAddr(string $InternalAddr) Set Download address on private network
 * @method string getExternalAddr() Obtain Download address on public network
 * @method void setExternalAddr(string $ExternalAddr) Set Download address on public network
 * @method integer getSize() Obtain Backup file size
 * @method void setSize(integer $Size) Set Backup file size
 */
class Xlog extends AbstractModel
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
     * @var string Download address on private network
     */
    public $InternalAddr;

    /**
     * @var string Download address on public network
     */
    public $ExternalAddr;

    /**
     * @var integer Backup file size
     */
    public $Size;

    /**
     * @param integer $Id Unique backup file ID
     * @param string $StartTime File generation start time
     * @param string $EndTime File generation end time
     * @param string $InternalAddr Download address on private network
     * @param string $ExternalAddr Download address on public network
     * @param integer $Size Backup file size
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

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
