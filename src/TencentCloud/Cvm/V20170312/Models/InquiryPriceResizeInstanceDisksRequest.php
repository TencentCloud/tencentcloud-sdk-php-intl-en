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
 * @method string getInstanceId() Obtain Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response.
 * @method array getDataDisks() Obtain The configuration of data disks to be expanded. Currently, you can only use the API to expand non-elastic data disks whose [disk type](https://cloud.tencent.com/document/product/213/15753#DataDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic. Data disk capacity unit: GB; minimum increment: 10 GB. For more information about selecting a data disk type, see the product overview on cloud disks. Available data disk types are subject to the instance type (`InstanceType`). In addition, the maximum capacity allowed for expansion varies by data disk type.
 * @method void setDataDisks(array $DataDisks) Set The configuration of data disks to be expanded. Currently, you can only use the API to expand non-elastic data disks whose [disk type](https://cloud.tencent.com/document/product/213/15753#DataDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic. Data disk capacity unit: GB; minimum increment: 10 GB. For more information about selecting a data disk type, see the product overview on cloud disks. Available data disk types are subject to the instance type (`InstanceType`). In addition, the maximum capacity allowed for expansion varies by data disk type.
 * @method boolean getForceStop() Obtain Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
 * @method void setForceStop(boolean $ForceStop) Set Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
 */

/**
 *InquiryPriceResizeInstanceDisks request structure.
 */
class InquiryPriceResizeInstanceDisksRequest extends AbstractModel
{
    /**
     * @var string Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response.
     */
    public $InstanceId;

    /**
     * @var array The configuration of data disks to be expanded. Currently, you can only use the API to expand non-elastic data disks whose [disk type](https://cloud.tencent.com/document/product/213/15753#DataDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic. Data disk capacity unit: GB; minimum increment: 10 GB. For more information about selecting a data disk type, see the product overview on cloud disks. Available data disk types are subject to the instance type (`InstanceType`). In addition, the maximum capacity allowed for expansion varies by data disk type.
     */
    public $DataDisks;

    /**
     * @var boolean Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
     */
    public $ForceStop;
    /**
     * @param string $InstanceId Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response.
     * @param array $DataDisks The configuration of data disks to be expanded. Currently, you can only use the API to expand non-elastic data disks whose [disk type](https://cloud.tencent.com/document/product/213/15753#DataDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic. Data disk capacity unit: GB; minimum increment: 10 GB. For more information about selecting a data disk type, see the product overview on cloud disks. Available data disk types are subject to the instance type (`InstanceType`). In addition, the maximum capacity allowed for expansion varies by data disk type.
     * @param boolean $ForceStop Whether to force shut down a running instances. It is recommended to manually shut down a running instance before resetting the user password. Valid values: <br><li>TRUE: force shut down an instance after a normal shutdown fails. <br><li>FALSE: do not force shut down an instance after a normal shutdown fails. <br><br>Default value: FALSE. <br><br>A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be shut down normally.
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

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
