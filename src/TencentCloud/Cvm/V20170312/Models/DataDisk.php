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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes data disk information.
 *
 * @method integer getDiskSize() Obtain Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://cloud.tencent.com/document/product/213/4952). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://cloud.tencent.com/document/product/213/4952). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
 * @method string getDiskType() Obtain The type of the data disk. For more information regarding data disk types and limits, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for `ResizeInstanceDisk`.
 * @method void setDiskType(string $DiskType) Set The type of the data disk. For more information regarding data disk types and limits, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for `ResizeInstanceDisk`.
 * @method string getDiskId() Obtain Data disk ID. Data disks of the type `LOCAL_BASIC` or `LOCAL_SSD` do not have IDs and do not support this parameter.
 * @method void setDiskId(string $DiskId) Set Data disk ID. Data disks of the type `LOCAL_BASIC` or `LOCAL_SSD` do not have IDs and do not support this parameter.
 * @method boolean getDeleteWithInstance() Obtain Whether to terminate the data disk when its CVM is terminated. Valid values:
<li>TRUE: terminate the data disk when its CVM is terminated. This value only supports pay-as-you-go cloud disks billed on an hourly basis.
<li>FALSE: retain the data disk when its CVM is terminated.<br>
Default value: TRUE<br>
Currently this parameter is only used in the `RunInstances` API.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether to terminate the data disk when its CVM is terminated. Valid values:
<li>TRUE: terminate the data disk when its CVM is terminated. This value only supports pay-as-you-go cloud disks billed on an hourly basis.
<li>FALSE: retain the data disk when its CVM is terminated.<br>
Default value: TRUE<br>
Currently this parameter is only used in the `RunInstances` API.
Note: This field may return null, indicating that no valid value is found.
 * @method string getSnapshotId() Obtain Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
 * @method void setSnapshotId(string $SnapshotId) Set Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getEncrypt() Obtain Specifies whether the data disk is encrypted. Valid values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
This parameter is only used with `RunInstances`.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setEncrypt(boolean $Encrypt) Set Specifies whether the data disk is encrypted. Valid values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
This parameter is only used with `RunInstances`.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://cloud.tencent.com/document/product/213/4952). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
     */
    public $DiskSize;

    /**
     * @var string The type of the data disk. For more information regarding data disk types and limits, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for `ResizeInstanceDisk`.
     */
    public $DiskType;

    /**
     * @var string Data disk ID. Data disks of the type `LOCAL_BASIC` or `LOCAL_SSD` do not have IDs and do not support this parameter.
     */
    public $DiskId;

    /**
     * @var boolean Whether to terminate the data disk when its CVM is terminated. Valid values:
<li>TRUE: terminate the data disk when its CVM is terminated. This value only supports pay-as-you-go cloud disks billed on an hourly basis.
<li>FALSE: retain the data disk when its CVM is terminated.<br>
Default value: TRUE<br>
Currently this parameter is only used in the `RunInstances` API.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DeleteWithInstance;

    /**
     * @var string Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
     */
    public $SnapshotId;

    /**
     * @var boolean Specifies whether the data disk is encrypted. Valid values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
This parameter is only used with `RunInstances`.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Encrypt;

    /**
     * @param integer $DiskSize Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://cloud.tencent.com/document/product/213/4952). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
     * @param string $DiskType The type of the data disk. For more information regarding data disk types and limits, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for `ResizeInstanceDisk`.
     * @param string $DiskId Data disk ID. Data disks of the type `LOCAL_BASIC` or `LOCAL_SSD` do not have IDs and do not support this parameter.
     * @param boolean $DeleteWithInstance Whether to terminate the data disk when its CVM is terminated. Valid values:
<li>TRUE: terminate the data disk when its CVM is terminated. This value only supports pay-as-you-go cloud disks billed on an hourly basis.
<li>FALSE: retain the data disk when its CVM is terminated.<br>
Default value: TRUE<br>
Currently this parameter is only used in the `RunInstances` API.
Note: This field may return null, indicating that no valid value is found.
     * @param string $SnapshotId Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Encrypt Specifies whether the data disk is encrypted. Valid values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
This parameter is only used with `RunInstances`.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }
    }
}
