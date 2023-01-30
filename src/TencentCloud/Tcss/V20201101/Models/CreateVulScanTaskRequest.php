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
 * CreateVulScanTask request structure.
 *
 * @method string getLocalImageScanType() Obtain Local image scan scope. Valid values: `ALL` (all local images); `NOT_SCAN` (all licensed but not scanned local images); `IMAGEIDS` (IDs of specified local images).
 * @method void setLocalImageScanType(string $LocalImageScanType) Set Local image scan scope. Valid values: `ALL` (all local images); `NOT_SCAN` (all licensed but not scanned local images); `IMAGEIDS` (IDs of specified local images).
 * @method array getLocalImageIDs() Obtain Scan by licensed local image ID, with a higher priority than scan by licensed local image that meets the condition.
 * @method void setLocalImageIDs(array $LocalImageIDs) Set Scan by licensed local image ID, with a higher priority than scan by licensed local image that meets the condition.
 * @method string getRegistryImageScanType() Obtain Repository image scan scope. Valid values: `ALL` (all repository images); `NOT_SCAN` (all licensed but not scanned repository images); `IMAGEIDS` (IDs of specified repository images).
 * @method void setRegistryImageScanType(string $RegistryImageScanType) Set Repository image scan scope. Valid values: `ALL` (all repository images); `NOT_SCAN` (all licensed but not scanned repository images); `IMAGEIDS` (IDs of specified repository images).
 * @method array getRegistryImageIDs() Obtain Scan by licensed repository image ID, with a higher priority than scan by licensed repository image that meets the condition.
 * @method void setRegistryImageIDs(array $RegistryImageIDs) Set Scan by licensed repository image ID, with a higher priority than scan by licensed repository image that meets the condition.
 * @method integer getLocalTaskID() Obtain ID of the task to scan local images again for vulnerabilities
 * @method void setLocalTaskID(integer $LocalTaskID) Set ID of the task to scan local images again for vulnerabilities
 * @method integer getRegistryTaskID() Obtain ID of the task to scan repository images again for vulnerabilities
 * @method void setRegistryTaskID(integer $RegistryTaskID) Set ID of the task to scan repository images again for vulnerabilities
 */
class CreateVulScanTaskRequest extends AbstractModel
{
    /**
     * @var string Local image scan scope. Valid values: `ALL` (all local images); `NOT_SCAN` (all licensed but not scanned local images); `IMAGEIDS` (IDs of specified local images).
     */
    public $LocalImageScanType;

    /**
     * @var array Scan by licensed local image ID, with a higher priority than scan by licensed local image that meets the condition.
     */
    public $LocalImageIDs;

    /**
     * @var string Repository image scan scope. Valid values: `ALL` (all repository images); `NOT_SCAN` (all licensed but not scanned repository images); `IMAGEIDS` (IDs of specified repository images).
     */
    public $RegistryImageScanType;

    /**
     * @var array Scan by licensed repository image ID, with a higher priority than scan by licensed repository image that meets the condition.
     */
    public $RegistryImageIDs;

    /**
     * @var integer ID of the task to scan local images again for vulnerabilities
     */
    public $LocalTaskID;

    /**
     * @var integer ID of the task to scan repository images again for vulnerabilities
     */
    public $RegistryTaskID;

    /**
     * @param string $LocalImageScanType Local image scan scope. Valid values: `ALL` (all local images); `NOT_SCAN` (all licensed but not scanned local images); `IMAGEIDS` (IDs of specified local images).
     * @param array $LocalImageIDs Scan by licensed local image ID, with a higher priority than scan by licensed local image that meets the condition.
     * @param string $RegistryImageScanType Repository image scan scope. Valid values: `ALL` (all repository images); `NOT_SCAN` (all licensed but not scanned repository images); `IMAGEIDS` (IDs of specified repository images).
     * @param array $RegistryImageIDs Scan by licensed repository image ID, with a higher priority than scan by licensed repository image that meets the condition.
     * @param integer $LocalTaskID ID of the task to scan local images again for vulnerabilities
     * @param integer $RegistryTaskID ID of the task to scan repository images again for vulnerabilities
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
        if (array_key_exists("LocalImageScanType",$param) and $param["LocalImageScanType"] !== null) {
            $this->LocalImageScanType = $param["LocalImageScanType"];
        }

        if (array_key_exists("LocalImageIDs",$param) and $param["LocalImageIDs"] !== null) {
            $this->LocalImageIDs = $param["LocalImageIDs"];
        }

        if (array_key_exists("RegistryImageScanType",$param) and $param["RegistryImageScanType"] !== null) {
            $this->RegistryImageScanType = $param["RegistryImageScanType"];
        }

        if (array_key_exists("RegistryImageIDs",$param) and $param["RegistryImageIDs"] !== null) {
            $this->RegistryImageIDs = $param["RegistryImageIDs"];
        }

        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }
    }
}
