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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModifyType request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p>
 * @method integer getBandWidth() Obtain <p>Bandwidth after upgrade, unit mb</p>
 * @method void setBandWidth(integer $BandWidth) Set <p>Bandwidth after upgrade, unit mb</p>
 * @method integer getDiskSize() Obtain <p>Disk capacity after upgrade, in GB</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Disk capacity after upgrade, in GB</p>
 * @method string getDiskType() Obtain <p>Disk type, such as CLOUD_PREMIUM</p>
 * @method void setDiskType(string $DiskType) Set <p>Disk type, such as CLOUD_PREMIUM</p>
 * @method integer getPartition() Obtain <p>Number of partitions</p>
 * @method void setPartition(integer $Partition) Set <p>Number of partitions</p>
 * @method integer getTopic() Obtain <p>topic count</p>
 * @method void setTopic(integer $Topic) Set <p>topic count</p>
 * @method string getType() Obtain <p>Instance type such as sp_ckafka_profession</p>
 * @method void setType(string $Type) Set <p>Instance type such as sp_ckafka_profession</p>
 * @method string getModifyEntry() Obtain <p>Resize portal</p>
 * @method void setModifyEntry(string $ModifyEntry) Set <p>Resize portal</p>
 * @method boolean getModifyZone() Obtain <p>Whether to modify AZ  false: Not modify AZ  true: Modify AZ  Default false</p>
 * @method void setModifyZone(boolean $ModifyZone) Set <p>Whether to modify AZ  false: Not modify AZ  true: Modify AZ  Default false</p>
 */
class DescribeModifyTypeRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Bandwidth after upgrade, unit mb</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>Disk capacity after upgrade, in GB</p>
     */
    public $DiskSize;

    /**
     * @var string <p>Disk type, such as CLOUD_PREMIUM</p>
     */
    public $DiskType;

    /**
     * @var integer <p>Number of partitions</p>
     */
    public $Partition;

    /**
     * @var integer <p>topic count</p>
     */
    public $Topic;

    /**
     * @var string <p>Instance type such as sp_ckafka_profession</p>
     */
    public $Type;

    /**
     * @var string <p>Resize portal</p>
     */
    public $ModifyEntry;

    /**
     * @var boolean <p>Whether to modify AZ  false: Not modify AZ  true: Modify AZ  Default false</p>
     */
    public $ModifyZone;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p>
     * @param integer $BandWidth <p>Bandwidth after upgrade, unit mb</p>
     * @param integer $DiskSize <p>Disk capacity after upgrade, in GB</p>
     * @param string $DiskType <p>Disk type, such as CLOUD_PREMIUM</p>
     * @param integer $Partition <p>Number of partitions</p>
     * @param integer $Topic <p>topic count</p>
     * @param string $Type <p>Instance type such as sp_ckafka_profession</p>
     * @param string $ModifyEntry <p>Resize portal</p>
     * @param boolean $ModifyZone <p>Whether to modify AZ  false: Not modify AZ  true: Modify AZ  Default false</p>
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ModifyEntry",$param) and $param["ModifyEntry"] !== null) {
            $this->ModifyEntry = $param["ModifyEntry"];
        }

        if (array_key_exists("ModifyZone",$param) and $param["ModifyZone"] !== null) {
            $this->ModifyZone = $param["ModifyZone"];
        }
    }
}
