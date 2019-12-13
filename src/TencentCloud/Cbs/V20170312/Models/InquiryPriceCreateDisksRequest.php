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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDiskType() 获取Type of cloud hard disk. Value range: <br><li>Ordinary cloud disk: CLOUD_BASIC <br><li>Premium cloud storage: CLOUD_PREMIUM <br><li>SSD cloud disk: CLOUD_SSD.
 * @method void setDiskType(string $DiskType) 设置Type of cloud hard disk. Value range: <br><li>Ordinary cloud disk: CLOUD_BASIC <br><li>Premium cloud storage: CLOUD_PREMIUM <br><li>SSD cloud disk: CLOUD_SSD.
 * @method integer getDiskSize() 获取Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](/document/product/362/2353).
 * @method void setDiskSize(integer $DiskSize) 设置Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](/document/product/362/2353).
 * @method string getDiskChargeType() 获取Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
 * @method void setDiskChargeType(string $DiskChargeType) 设置Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
 * @method integer getDiskCount() 获取Quantity of cloud disks purchased. If left empty, default is 1.
 * @method void setDiskCount(integer $DiskCount) 设置Quantity of cloud disks purchased. If left empty, default is 1.
 * @method integer getProjectId() 获取ID of project the cloud disk belongs to.
 * @method void setProjectId(integer $ProjectId) 设置ID of project the cloud disk belongs to.
 */

/**
 *InquiryPriceCreateDisks request structure.
 */
class InquiryPriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var string Type of cloud hard disk. Value range: <br><li>Ordinary cloud disk: CLOUD_BASIC <br><li>Premium cloud storage: CLOUD_PREMIUM <br><li>SSD cloud disk: CLOUD_SSD.
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](/document/product/362/2353).
     */
    public $DiskSize;

    /**
     * @var string Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
     */
    public $DiskChargeType;

    /**
     * @var DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Quantity of cloud disks purchased. If left empty, default is 1.
     */
    public $DiskCount;

    /**
     * @var integer ID of project the cloud disk belongs to.
     */
    public $ProjectId;
    /**
     * @param string $DiskType Type of cloud hard disk. Value range: <br><li>Ordinary cloud disk: CLOUD_BASIC <br><li>Premium cloud storage: CLOUD_PREMIUM <br><li>SSD cloud disk: CLOUD_SSD.
     * @param integer $DiskSize Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](/document/product/362/2353).
     * @param string $DiskChargeType Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
     * @param DiskChargePrepaid $DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
     * @param integer $DiskCount Quantity of cloud disks purchased. If left empty, default is 1.
     * @param integer $ProjectId ID of project the cloud disk belongs to.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
