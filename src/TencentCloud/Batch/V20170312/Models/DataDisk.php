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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getDiskSize() Obtain The data disk size in GB. The minimum increment is 10 GB. Different types of data disks have different value ranges. For details, see [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518). The default value is 0, indicating that no data disk is purchased. For more information, see the CVM documentation.
 * @method void setDiskSize(integer $DiskSize) Set The data disk size in GB. The minimum increment is 10 GB. Different types of data disks have different value ranges. For details, see [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518). The default value is 0, indicating that no data disk is purchased. For more information, see the CVM documentation.
 * @method string getDiskType() Obtain The data disk type. For more information about the limits on different data disk types, see [Instance Specifications](/document/product/213/2177). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for the `ResizeInstanceDisk` API.
 * @method void setDiskType(string $DiskType) Set The data disk type. For more information about the limits on different data disk types, see [Instance Specifications](/document/product/213/2177). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for the `ResizeInstanceDisk` API.
 * @method string getDiskId() Obtain Data disk ID. Data disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
 * @method void setDiskId(string $DiskId) Set Data disk ID. Data disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
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
 * @method boolean getEncrypt() Obtain Specifies whether the data disk is encrypted. Values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEncrypt(boolean $Encrypt) Set Specifies whether the data disk is encrypted. Values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Describes data disk information.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer The data disk size in GB. The minimum increment is 10 GB. Different types of data disks have different value ranges. For details, see [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518). The default value is 0, indicating that no data disk is purchased. For more information, see the CVM documentation.
     */
    public $DiskSize;

    /**
     * @var string The data disk type. For more information about the limits on different data disk types, see [Instance Specifications](/document/product/213/2177). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for the `ResizeInstanceDisk` API.
     */
    public $DiskType;

    /**
     * @var string Data disk ID. Data disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
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
     * @var boolean Specifies whether the data disk is encrypted. Values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Encrypt;
    /**
     * @param integer $DiskSize The data disk size in GB. The minimum increment is 10 GB. Different types of data disks have different value ranges. For details, see [Instance Specifications](https://intl.cloud.tencent.com/document/product/213/11518). The default value is 0, indicating that no data disk is purchased. For more information, see the CVM documentation.
     * @param string $DiskType The data disk type. For more information about the limits on different data disk types, see [Instance Specifications](/document/product/213/2177). Valid values: <br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><li>CLOUD_SSD: SSD cloud disk<br><br>Default value: LOCAL_BASIC.<br><br>This parameter is invalid for the `ResizeInstanceDisk` API.
     * @param string $DiskId Data disk ID. Data disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
     * @param boolean $DeleteWithInstance Whether to terminate the data disk when its CVM is terminated. Valid values:
<li>TRUE: terminate the data disk when its CVM is terminated. This value only supports pay-as-you-go cloud disks billed on an hourly basis.
<li>FALSE: retain the data disk when its CVM is terminated.<br>
Default value: TRUE<br>
Currently this parameter is only used in the `RunInstances` API.
Note: This field may return null, indicating that no valid value is found.
     * @param string $SnapshotId Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Encrypt Specifies whether the data disk is encrypted. Values: 
<li>TRUE: encrypted
<li>FALSE: not encrypted<br>
Default value: FALSE<br>
Currently, this parameter is only used in the `RunInstances` API.
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
