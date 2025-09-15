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
 * ResizeDataDisks request structure.
 *
 * @method string getInstanceId() Obtain ID of the EMR cluster instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the EMR cluster instance.
 * @method integer getDiskSize() Obtain Scale-out value, which should be greater than the original capacity and a multiple of 10.
 * @method void setDiskSize(integer $DiskSize) Set Scale-out value, which should be greater than the original capacity and a multiple of 10.
 * @method array getCvmInstanceIds() Obtain ID list of nodes to be scaled out.
 * @method void setCvmInstanceIds(array $CvmInstanceIds) Set ID list of nodes to be scaled out.
 * @method array getDiskIds() Obtain ID of the cloud disk to be scaled out.
 * @method void setDiskIds(array $DiskIds) Set ID of the cloud disk to be scaled out.
 * @method boolean getResizeAll() Obtain Whether to scale out all cloud disks.
 * @method void setResizeAll(boolean $ResizeAll) Set Whether to scale out all cloud disks.
 */
class ResizeDataDisksRequest extends AbstractModel
{
    /**
     * @var string ID of the EMR cluster instance.
     */
    public $InstanceId;

    /**
     * @var integer Scale-out value, which should be greater than the original capacity and a multiple of 10.
     */
    public $DiskSize;

    /**
     * @var array ID list of nodes to be scaled out.
     */
    public $CvmInstanceIds;

    /**
     * @var array ID of the cloud disk to be scaled out.
     */
    public $DiskIds;

    /**
     * @var boolean Whether to scale out all cloud disks.
     */
    public $ResizeAll;

    /**
     * @param string $InstanceId ID of the EMR cluster instance.
     * @param integer $DiskSize Scale-out value, which should be greater than the original capacity and a multiple of 10.
     * @param array $CvmInstanceIds ID list of nodes to be scaled out.
     * @param array $DiskIds ID of the cloud disk to be scaled out.
     * @param boolean $ResizeAll Whether to scale out all cloud disks.
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("ResizeAll",$param) and $param["ResizeAll"] !== null) {
            $this->ResizeAll = $param["ResizeAll"];
        }
    }
}
