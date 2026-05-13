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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskAttributes request structure.
 *
 * @method array getDiskIds() Obtain One or more cloud disk ids to be operated, which can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. if multiple cloud disk ids are passed in, only modifying all cloud disks to the same attribute is supported.

 * @method void setDiskIds(array $DiskIds) Set One or more cloud disk ids to be operated, which can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. if multiple cloud disk ids are passed in, only modifying all cloud disks to the same attribute is supported.

 * @method string getDiskName() Obtain Name of new cloud disk.
 * @method void setDiskName(string $DiskName) Set Name of new cloud disk.
 * @method boolean getPortable() Obtain Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
 * @method void setPortable(boolean $Portable) Set Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
 * @method integer getProjectId() Obtain The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1).
 * @method void setProjectId(integer $ProjectId) Set The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1).
 * @method boolean getDeleteWithInstance() Obtain Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
 * @method string getDiskType() Obtain When changing the CLOUD disk type, you can input this parameter to indicate the target type. valid values:<br><li>CLOUD_PREMIUM: refers to high-performance CLOUD block storage</li><li>CLOUD_SSD: refers to SSD CLOUD disk.</li>batch type change is not supported. when inputting DiskType, DiskIds only supports entering one CLOUD disk id.<br>changing the CLOUD disk type does not support changing other attributes at the same time.
For details, see [adjust cloud disk type](https://www.tencentcloud.com/document/product/362/32540?from_cn_redirect=1).
 * @method void setDiskType(string $DiskType) Set When changing the CLOUD disk type, you can input this parameter to indicate the target type. valid values:<br><li>CLOUD_PREMIUM: refers to high-performance CLOUD block storage</li><li>CLOUD_SSD: refers to SSD CLOUD disk.</li>batch type change is not supported. when inputting DiskType, DiskIds only supports entering one CLOUD disk id.<br>changing the CLOUD disk type does not support changing other attributes at the same time.
For details, see [adjust cloud disk type](https://www.tencentcloud.com/document/product/362/32540?from_cn_redirect=1).
 * @method string getBurstPerformanceOperation() Obtain Enable/Disable cloud disk performance burst feature. valid values:. 
CREATE: enable.
Specifies to CANCEL and close.
 * @method void setBurstPerformanceOperation(string $BurstPerformanceOperation) Set Enable/Disable cloud disk performance burst feature. valid values:. 
CREATE: enable.
Specifies to CANCEL and close.
 */
class ModifyDiskAttributesRequest extends AbstractModel
{
    /**
     * @var array One or more cloud disk ids to be operated, which can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. if multiple cloud disk ids are passed in, only modifying all cloud disks to the same attribute is supported.

     */
    public $DiskIds;

    /**
     * @var string Name of new cloud disk.
     */
    public $DiskName;

    /**
     * @var boolean Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
     */
    public $Portable;

    /**
     * @var integer The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1).
     */
    public $ProjectId;

    /**
     * @var boolean Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
     */
    public $DeleteWithInstance;

    /**
     * @var string When changing the CLOUD disk type, you can input this parameter to indicate the target type. valid values:<br><li>CLOUD_PREMIUM: refers to high-performance CLOUD block storage</li><li>CLOUD_SSD: refers to SSD CLOUD disk.</li>batch type change is not supported. when inputting DiskType, DiskIds only supports entering one CLOUD disk id.<br>changing the CLOUD disk type does not support changing other attributes at the same time.
For details, see [adjust cloud disk type](https://www.tencentcloud.com/document/product/362/32540?from_cn_redirect=1).
     */
    public $DiskType;

    /**
     * @var string Enable/Disable cloud disk performance burst feature. valid values:. 
CREATE: enable.
Specifies to CANCEL and close.
     */
    public $BurstPerformanceOperation;

    /**
     * @param array $DiskIds One or more cloud disk ids to be operated, which can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. if multiple cloud disk ids are passed in, only modifying all cloud disks to the same attribute is supported.

     * @param string $DiskName Name of new cloud disk.
     * @param boolean $Portable Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
     * @param integer $ProjectId The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1).
     * @param boolean $DeleteWithInstance Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
     * @param string $DiskType When changing the CLOUD disk type, you can input this parameter to indicate the target type. valid values:<br><li>CLOUD_PREMIUM: refers to high-performance CLOUD block storage</li><li>CLOUD_SSD: refers to SSD CLOUD disk.</li>batch type change is not supported. when inputting DiskType, DiskIds only supports entering one CLOUD disk id.<br>changing the CLOUD disk type does not support changing other attributes at the same time.
For details, see [adjust cloud disk type](https://www.tencentcloud.com/document/product/362/32540?from_cn_redirect=1).
     * @param string $BurstPerformanceOperation Enable/Disable cloud disk performance burst feature. valid values:. 
CREATE: enable.
Specifies to CANCEL and close.
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("BurstPerformanceOperation",$param) and $param["BurstPerformanceOperation"] !== null) {
            $this->BurstPerformanceOperation = $param["BurstPerformanceOperation"];
        }
    }
}
