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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
 *
 * @method string getServerUid() Obtain The unique ID of the storage layer (tcapsvr)
 * @method void setServerUid(string $ServerUid) Set The unique ID of the storage layer (tcapsvr)
 * @method string getMachineType() Obtain Machine type
 * @method void setMachineType(string $MachineType) Set Machine type
 * @method integer getMemoryRate() Obtain Memory utilization
 * @method void setMemoryRate(integer $MemoryRate) Set Memory utilization
 * @method integer getDiskRate() Obtain Disk utilization
 * @method void setDiskRate(integer $DiskRate) Set Disk utilization
 * @method integer getReadNum() Obtain The number of reads
 * @method void setReadNum(integer $ReadNum) Set The number of reads
 * @method integer getWriteNum() Obtain The number of writes
 * @method void setWriteNum(integer $WriteNum) Set The number of writes
 * @method string getVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServerDetailInfo extends AbstractModel
{
    /**
     * @var string The unique ID of the storage layer (tcapsvr)
     */
    public $ServerUid;

    /**
     * @var string Machine type
     */
    public $MachineType;

    /**
     * @var integer Memory utilization
     */
    public $MemoryRate;

    /**
     * @var integer Disk utilization
     */
    public $DiskRate;

    /**
     * @var integer The number of reads
     */
    public $ReadNum;

    /**
     * @var integer The number of writes
     */
    public $WriteNum;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $ServerUid The unique ID of the storage layer (tcapsvr)
     * @param string $MachineType Machine type
     * @param integer $MemoryRate Memory utilization
     * @param integer $DiskRate Disk utilization
     * @param integer $ReadNum The number of reads
     * @param integer $WriteNum The number of writes
     * @param string $Version Version
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServerUid",$param) and $param["ServerUid"] !== null) {
            $this->ServerUid = $param["ServerUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MemoryRate",$param) and $param["MemoryRate"] !== null) {
            $this->MemoryRate = $param["MemoryRate"];
        }

        if (array_key_exists("DiskRate",$param) and $param["DiskRate"] !== null) {
            $this->DiskRate = $param["DiskRate"];
        }

        if (array_key_exists("ReadNum",$param) and $param["ReadNum"] !== null) {
            $this->ReadNum = $param["ReadNum"];
        }

        if (array_key_exists("WriteNum",$param) and $param["WriteNum"] !== null) {
            $this->WriteNum = $param["WriteNum"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
