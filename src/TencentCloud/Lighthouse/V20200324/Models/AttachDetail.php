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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attachment information 
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getAttachedDiskCount() Obtain Number of elastic cloud disks attached to the instance
 * @method void setAttachedDiskCount(integer $AttachedDiskCount) Set Number of elastic cloud disks attached to the instance
 * @method integer getMaxAttachCount() Obtain Upper limit of attached elastic cloud disks
 * @method void setMaxAttachCount(integer $MaxAttachCount) Set Upper limit of attached elastic cloud disks
 */
class AttachDetail extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Number of elastic cloud disks attached to the instance
     */
    public $AttachedDiskCount;

    /**
     * @var integer Upper limit of attached elastic cloud disks
     */
    public $MaxAttachCount;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $AttachedDiskCount Number of elastic cloud disks attached to the instance
     * @param integer $MaxAttachCount Upper limit of attached elastic cloud disks
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

        if (array_key_exists("AttachedDiskCount",$param) and $param["AttachedDiskCount"] !== null) {
            $this->AttachedDiskCount = $param["AttachedDiskCount"];
        }

        if (array_key_exists("MaxAttachCount",$param) and $param["MaxAttachCount"] !== null) {
            $this->MaxAttachCount = $param["MaxAttachCount"];
        }
    }
}
