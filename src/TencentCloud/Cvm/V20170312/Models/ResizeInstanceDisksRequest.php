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
 * ResizeInstanceDisks request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
 * @method array getDataDisks() Obtain Configuration information of a data disk to be expanded. Only inelastic data disks (with `Portable` being `false` in the return values of [DescribeDisks](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1)) can be expanded. The unit of data disk capacity is GB. The minimum expansion step is 10 GB. For more information about data disk types, refer to [Disk Product Introduction](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). The available data disk type is restricted by the instance type `InstanceType`. Additionally, the maximum allowable capacity for expansion varies by data disk type.
<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
 * @method void setDataDisks(array $DataDisks) Set Configuration information of a data disk to be expanded. Only inelastic data disks (with `Portable` being `false` in the return values of [DescribeDisks](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1)) can be expanded. The unit of data disk capacity is GB. The minimum expansion step is 10 GB. For more information about data disk types, refer to [Disk Product Introduction](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). The available data disk type is restricted by the instance type `InstanceType`. Additionally, the maximum allowable capacity for expansion varies by data disk type.
<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
 * @method boolean getForceStop() Obtain Whether to forcibly shut down a running instance. It is recommended to manually shut down a running instance first and then reset the user password. Valid values:<br><li>true: Forcibly shut down an instance after a normal shutdown fails.</li><br><li>false: Do not forcibly shut down an instance after a normal shutdown fails.</li><br><br>Default value: false.<br><br>Forced shutdown is equivalent to turning off a physical computer's power switch. Forced shutdown may cause data loss or file system corruption and should only be used when a server cannot be shut down normally.
 * @method void setForceStop(boolean $ForceStop) Set Whether to forcibly shut down a running instance. It is recommended to manually shut down a running instance first and then reset the user password. Valid values:<br><li>true: Forcibly shut down an instance after a normal shutdown fails.</li><br><li>false: Do not forcibly shut down an instance after a normal shutdown fails.</li><br><br>Default value: false.<br><br>Forced shutdown is equivalent to turning off a physical computer's power switch. Forced shutdown may cause data loss or file system corruption and should only be used when a server cannot be shut down normally.
 * @method SystemDisk getSystemDisk() Obtain Configuration information of a system disk to be expanded. Only cloud disks can be expanded.

<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Configuration information of a system disk to be expanded. Only cloud disks can be expanded.

<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
 * @method boolean getResizeOnline() Obtain Whether the cloud disk is expanded online.
 * @method void setResizeOnline(boolean $ResizeOnline) Set Whether the cloud disk is expanded online.
 */
class ResizeInstanceDisksRequest extends AbstractModel
{
    /**
     * @var string Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
     */
    public $InstanceId;

    /**
     * @var array Configuration information of a data disk to be expanded. Only inelastic data disks (with `Portable` being `false` in the return values of [DescribeDisks](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1)) can be expanded. The unit of data disk capacity is GB. The minimum expansion step is 10 GB. For more information about data disk types, refer to [Disk Product Introduction](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). The available data disk type is restricted by the instance type `InstanceType`. Additionally, the maximum allowable capacity for expansion varies by data disk type.
<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
     */
    public $DataDisks;

    /**
     * @var boolean Whether to forcibly shut down a running instance. It is recommended to manually shut down a running instance first and then reset the user password. Valid values:<br><li>true: Forcibly shut down an instance after a normal shutdown fails.</li><br><li>false: Do not forcibly shut down an instance after a normal shutdown fails.</li><br><br>Default value: false.<br><br>Forced shutdown is equivalent to turning off a physical computer's power switch. Forced shutdown may cause data loss or file system corruption and should only be used when a server cannot be shut down normally.
     */
    public $ForceStop;

    /**
     * @var SystemDisk Configuration information of a system disk to be expanded. Only cloud disks can be expanded.

<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
     */
    public $SystemDisk;

    /**
     * @var boolean Whether the cloud disk is expanded online.
     */
    public $ResizeOnline;

    /**
     * @param string $InstanceId Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
     * @param array $DataDisks Configuration information of a data disk to be expanded. Only inelastic data disks (with `Portable` being `false` in the return values of [DescribeDisks](https://intl.cloud.tencent.com/document/api/362/16315?from_cn_redirect=1)) can be expanded. The unit of data disk capacity is GB. The minimum expansion step is 10 GB. For more information about data disk types, refer to [Disk Product Introduction](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). The available data disk type is restricted by the instance type `InstanceType`. Additionally, the maximum allowable capacity for expansion varies by data disk type.
<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
     * @param boolean $ForceStop Whether to forcibly shut down a running instance. It is recommended to manually shut down a running instance first and then reset the user password. Valid values:<br><li>true: Forcibly shut down an instance after a normal shutdown fails.</li><br><li>false: Do not forcibly shut down an instance after a normal shutdown fails.</li><br><br>Default value: false.<br><br>Forced shutdown is equivalent to turning off a physical computer's power switch. Forced shutdown may cause data loss or file system corruption and should only be used when a server cannot be shut down normally.
     * @param SystemDisk $SystemDisk Configuration information of a system disk to be expanded. Only cloud disks can be expanded.

<dx-alert infotype="explain" title="">You should specify either DataDisks or SystemDisk, but you cannot specify both at the same time.</dx-alert>
     * @param boolean $ResizeOnline Whether the cloud disk is expanded online.
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

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("ResizeOnline",$param) and $param["ResizeOnline"] !== null) {
            $this->ResizeOnline = $param["ResizeOnline"];
        }
    }
}
