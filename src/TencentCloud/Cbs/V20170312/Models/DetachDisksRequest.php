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
 * DetachDisks request structure.
 *
 * @method array getDiskIds() Obtain ID of the cloud disk to be unmounted, which can be queried through the API [DescribeDisks](/document/product/362/16315). A maximum of 10 elastic cloud disks can be unmounted in a single request.
 * @method void setDiskIds(array $DiskIds) Set ID of the cloud disk to be unmounted, which can be queried through the API [DescribeDisks](/document/product/362/16315). A maximum of 10 elastic cloud disks can be unmounted in a single request.
 * @method string getInstanceId() Obtain For a cloud disk that is not shared, this parameter is ignored. For a shared cloud disk, this parameter indicates which CVM instance the cloud disk is to be unmounted from.
 * @method void setInstanceId(string $InstanceId) Set For a cloud disk that is not shared, this parameter is ignored. For a shared cloud disk, this parameter indicates which CVM instance the cloud disk is to be unmounted from.
 */
class DetachDisksRequest extends AbstractModel
{
    /**
     * @var array ID of the cloud disk to be unmounted, which can be queried through the API [DescribeDisks](/document/product/362/16315). A maximum of 10 elastic cloud disks can be unmounted in a single request.
     */
    public $DiskIds;

    /**
     * @var string For a cloud disk that is not shared, this parameter is ignored. For a shared cloud disk, this parameter indicates which CVM instance the cloud disk is to be unmounted from.
     */
    public $InstanceId;

    /**
     * @param array $DiskIds ID of the cloud disk to be unmounted, which can be queried through the API [DescribeDisks](/document/product/362/16315). A maximum of 10 elastic cloud disks can be unmounted in a single request.
     * @param string $InstanceId For a cloud disk that is not shared, this parameter is ignored. For a shared cloud disk, this parameter indicates which CVM instance the cloud disk is to be unmounted from.
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
