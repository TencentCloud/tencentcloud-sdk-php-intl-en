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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachDisks request structure.
 *
 * @method string getInstanceId() Obtain ID of the EMR cluster instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the EMR cluster instance.
 * @method array getDiskIds() Obtain Cloud disk ID required for mounting.
 * @method void setDiskIds(array $DiskIds) Set Cloud disk ID required for mounting.
 * @method string getAlignType() Obtain Mount mode. Valid values.
AUTO_RENEW: auto-renewal.
ALIGN_DEADLINE: automatic alignment with the deadline.
 * @method void setAlignType(string $AlignType) Set Mount mode. Valid values.
AUTO_RENEW: auto-renewal.
ALIGN_DEADLINE: automatic alignment with the deadline.
 * @method array getCvmInstanceIds() Obtain List of CVM node IDs requiring mounting.
 * @method void setCvmInstanceIds(array $CvmInstanceIds) Set List of CVM node IDs requiring mounting.
 * @method boolean getCreateDisk() Obtain Whether to mount newly purchased cloud disks.
 * @method void setCreateDisk(boolean $CreateDisk) Set Whether to mount newly purchased cloud disks.
 * @method NodeSpecDiskV2 getDiskSpec() Obtain Specifications of newly purchased cloud disks.
 * @method void setDiskSpec(NodeSpecDiskV2 $DiskSpec) Set Specifications of newly purchased cloud disks.
 * @method boolean getDeleteWithInstance() Obtain Optional parameter. Only mount operation is performed if this parameter is not passed. When True is passed, the CBS will be set to termination with the cloud host upon successful mounting. This is only applicable to pay-as-you-go cloud disk.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Optional parameter. Only mount operation is performed if this parameter is not passed. When True is passed, the CBS will be set to termination with the cloud host upon successful mounting. This is only applicable to pay-as-you-go cloud disk.
 * @method array getSelectiveConfServices() Obtain Name list of services that can be configured when a new disk is mounted.
 * @method void setSelectiveConfServices(array $SelectiveConfServices) Set Name list of services that can be configured when a new disk is mounted.
 * @method integer getChargeType() Obtain Disk billing type (1: monthly subscription, 3: committed use).
 * @method void setChargeType(integer $ChargeType) Set Disk billing type (1: monthly subscription, 3: committed use).
 * @method integer getUnderWriteDuration() Obtain Disk committed use and purchase duration (only supports 12, 24, 36, 48, and 60).
 * @method void setUnderWriteDuration(integer $UnderWriteDuration) Set Disk committed use and purchase duration (only supports 12, 24, 36, 48, and 60).
 */
class AttachDisksRequest extends AbstractModel
{
    /**
     * @var string ID of the EMR cluster instance.
     */
    public $InstanceId;

    /**
     * @var array Cloud disk ID required for mounting.
     */
    public $DiskIds;

    /**
     * @var string Mount mode. Valid values.
AUTO_RENEW: auto-renewal.
ALIGN_DEADLINE: automatic alignment with the deadline.
     */
    public $AlignType;

    /**
     * @var array List of CVM node IDs requiring mounting.
     */
    public $CvmInstanceIds;

    /**
     * @var boolean Whether to mount newly purchased cloud disks.
     */
    public $CreateDisk;

    /**
     * @var NodeSpecDiskV2 Specifications of newly purchased cloud disks.
     */
    public $DiskSpec;

    /**
     * @var boolean Optional parameter. Only mount operation is performed if this parameter is not passed. When True is passed, the CBS will be set to termination with the cloud host upon successful mounting. This is only applicable to pay-as-you-go cloud disk.
     */
    public $DeleteWithInstance;

    /**
     * @var array Name list of services that can be configured when a new disk is mounted.
     */
    public $SelectiveConfServices;

    /**
     * @var integer Disk billing type (1: monthly subscription, 3: committed use).
     */
    public $ChargeType;

    /**
     * @var integer Disk committed use and purchase duration (only supports 12, 24, 36, 48, and 60).
     */
    public $UnderWriteDuration;

    /**
     * @param string $InstanceId ID of the EMR cluster instance.
     * @param array $DiskIds Cloud disk ID required for mounting.
     * @param string $AlignType Mount mode. Valid values.
AUTO_RENEW: auto-renewal.
ALIGN_DEADLINE: automatic alignment with the deadline.
     * @param array $CvmInstanceIds List of CVM node IDs requiring mounting.
     * @param boolean $CreateDisk Whether to mount newly purchased cloud disks.
     * @param NodeSpecDiskV2 $DiskSpec Specifications of newly purchased cloud disks.
     * @param boolean $DeleteWithInstance Optional parameter. Only mount operation is performed if this parameter is not passed. When True is passed, the CBS will be set to termination with the cloud host upon successful mounting. This is only applicable to pay-as-you-go cloud disk.
     * @param array $SelectiveConfServices Name list of services that can be configured when a new disk is mounted.
     * @param integer $ChargeType Disk billing type (1: monthly subscription, 3: committed use).
     * @param integer $UnderWriteDuration Disk committed use and purchase duration (only supports 12, 24, 36, 48, and 60).
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

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("AlignType",$param) and $param["AlignType"] !== null) {
            $this->AlignType = $param["AlignType"];
        }

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("CreateDisk",$param) and $param["CreateDisk"] !== null) {
            $this->CreateDisk = $param["CreateDisk"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new NodeSpecDiskV2();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SelectiveConfServices",$param) and $param["SelectiveConfServices"] !== null) {
            $this->SelectiveConfServices = $param["SelectiveConfServices"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("UnderWriteDuration",$param) and $param["UnderWriteDuration"] !== null) {
            $this->UnderWriteDuration = $param["UnderWriteDuration"];
        }
    }
}
