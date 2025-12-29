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
 * @method string getInstanceId() Obtain CKafka cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set CKafka cluster instance ID.
 * @method integer getBandWidth() Obtain Specifies the bandwidth after upgrade. measurement unit: mb.
 * @method void setBandWidth(integer $BandWidth) Set Specifies the bandwidth after upgrade. measurement unit: mb.
 * @method integer getDiskSize() Obtain Specifies the disk after upgrade, in gb.
 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk after upgrade, in gb.
 * @method string getDiskType() Obtain Disk type, such as CLOUD_PREMIUM.
 * @method void setDiskType(string $DiskType) Set Disk type, such as CLOUD_PREMIUM.
 * @method integer getPartition() Obtain Number of partitions.
 * @method void setPartition(integer $Partition) Set Number of partitions.
 * @method integer getTopic() Obtain Number of Topics
 * @method void setTopic(integer $Topic) Set Number of Topics
 * @method string getType() Obtain Instance type, such as sp_ckafka_profession.
 * @method void setType(string $Type) Set Instance type, such as sp_ckafka_profession.
 * @method string getModifyEntry() Obtain Configuration change portal.
 * @method void setModifyEntry(string $ModifyEntry) Set Configuration change portal.
 */
class DescribeModifyTypeRequest extends AbstractModel
{
    /**
     * @var string CKafka cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Specifies the bandwidth after upgrade. measurement unit: mb.
     */
    public $BandWidth;

    /**
     * @var integer Specifies the disk after upgrade, in gb.
     */
    public $DiskSize;

    /**
     * @var string Disk type, such as CLOUD_PREMIUM.
     */
    public $DiskType;

    /**
     * @var integer Number of partitions.
     */
    public $Partition;

    /**
     * @var integer Number of Topics
     */
    public $Topic;

    /**
     * @var string Instance type, such as sp_ckafka_profession.
     */
    public $Type;

    /**
     * @var string Configuration change portal.
     */
    public $ModifyEntry;

    /**
     * @param string $InstanceId CKafka cluster instance ID.
     * @param integer $BandWidth Specifies the bandwidth after upgrade. measurement unit: mb.
     * @param integer $DiskSize Specifies the disk after upgrade, in gb.
     * @param string $DiskType Disk type, such as CLOUD_PREMIUM.
     * @param integer $Partition Number of partitions.
     * @param integer $Topic Number of Topics
     * @param string $Type Instance type, such as sp_ckafka_profession.
     * @param string $ModifyEntry Configuration change portal.
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
    }
}
