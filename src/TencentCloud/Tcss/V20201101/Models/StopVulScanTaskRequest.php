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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopVulScanTask request structure.
 *
 * @method integer getLocalTaskID() Obtain ID of the task to scan local images for vulnerabilities
 * @method void setLocalTaskID(integer $LocalTaskID) Set ID of the task to scan local images for vulnerabilities
 * @method array getLocalImageIDs() Obtain Local image ID. If it is not specified, it indicates all.
 * @method void setLocalImageIDs(array $LocalImageIDs) Set Local image ID. If it is not specified, it indicates all.
 * @method array getRegistryImageIDs() Obtain Repository image ID. If it is not specified, it indicates all.
 * @method void setRegistryImageIDs(array $RegistryImageIDs) Set Repository image ID. If it is not specified, it indicates all.
 * @method integer getRegistryTaskID() Obtain ID of the task to scan repository images for vulnerabilities
 * @method void setRegistryTaskID(integer $RegistryTaskID) Set ID of the task to scan repository images for vulnerabilities
 */
class StopVulScanTaskRequest extends AbstractModel
{
    /**
     * @var integer ID of the task to scan local images for vulnerabilities
     */
    public $LocalTaskID;

    /**
     * @var array Local image ID. If it is not specified, it indicates all.
     */
    public $LocalImageIDs;

    /**
     * @var array Repository image ID. If it is not specified, it indicates all.
     */
    public $RegistryImageIDs;

    /**
     * @var integer ID of the task to scan repository images for vulnerabilities
     */
    public $RegistryTaskID;

    /**
     * @param integer $LocalTaskID ID of the task to scan local images for vulnerabilities
     * @param array $LocalImageIDs Local image ID. If it is not specified, it indicates all.
     * @param array $RegistryImageIDs Repository image ID. If it is not specified, it indicates all.
     * @param integer $RegistryTaskID ID of the task to scan repository images for vulnerabilities
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
        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("LocalImageIDs",$param) and $param["LocalImageIDs"] !== null) {
            $this->LocalImageIDs = $param["LocalImageIDs"];
        }

        if (array_key_exists("RegistryImageIDs",$param) and $param["RegistryImageIDs"] !== null) {
            $this->RegistryImageIDs = $param["RegistryImageIDs"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }
    }
}
