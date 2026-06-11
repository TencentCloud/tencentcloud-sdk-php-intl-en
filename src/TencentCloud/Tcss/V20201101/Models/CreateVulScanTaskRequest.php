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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulScanTask request structure.
 *
 * @method string getLocalImageScanType() Obtain <p>Local image scan range type</p><p>Enumeration value:</p><ul><li>ALL: All local images</li><li>NOT_SCAN: All authorized unscanned local images</li><li>IMAGEIDS: Selected local image IDs</li><li>CLUSTER: Cluster filtering</li></ul>
 * @method void setLocalImageScanType(string $LocalImageScanType) Set <p>Local image scan range type</p><p>Enumeration value:</p><ul><li>ALL: All local images</li><li>NOT_SCAN: All authorized unscanned local images</li><li>IMAGEIDS: Selected local image IDs</li><li>CLUSTER: Cluster filtering</li></ul>
 * @method array getLocalImageIDs() Obtain <p>Scan by authorized local image IDs, which takes precedence over scanning by authorized local images that meet the conditions.</p>
 * @method void setLocalImageIDs(array $LocalImageIDs) Set <p>Scan by authorized local image IDs, which takes precedence over scanning by authorized local images that meet the conditions.</p>
 * @method string getRegistryImageScanType() Obtain <p>Repository image scan range type. ALL: All repository images. NOT_SCAN: Total authorized unscanned repository images. IMAGEIDS: Selected repository image IDs.</p>
 * @method void setRegistryImageScanType(string $RegistryImageScanType) Set <p>Repository image scan range type. ALL: All repository images. NOT_SCAN: Total authorized unscanned repository images. IMAGEIDS: Selected repository image IDs.</p>
 * @method array getRegistryImageIDs() Obtain <p>Scan by authorized repository image IDs, which takes precedence over scanning by authorized repository images that meet the conditions.</p>
 * @method void setRegistryImageIDs(array $RegistryImageIDs) Set <p>Scan by authorized repository image IDs, which takes precedence over scanning by authorized repository images that meet the conditions.</p>
 * @method integer getLocalTaskID() Obtain <p>Task ID for local image re-vulnerability scanning</p>
 * @method void setLocalTaskID(integer $LocalTaskID) Set <p>Task ID for local image re-vulnerability scanning</p>
 * @method integer getRegistryTaskID() Obtain <p>Task ID for repository image re-vulnerability scanning</p>
 * @method void setRegistryTaskID(integer $RegistryTaskID) Set <p>Task ID for repository image re-vulnerability scanning</p>
 * @method boolean getLocalImageContainerRunning() Obtain <p>Local image container runtime</p>
 * @method void setLocalImageContainerRunning(boolean $LocalImageContainerRunning) Set <p>Local image container runtime</p>
 * @method boolean getRegistryImageContainerRunning() Obtain <p>Image Container in repository is running</p>
 * @method void setRegistryImageContainerRunning(boolean $RegistryImageContainerRunning) Set <p>Image Container in repository is running</p>
 * @method boolean getIsLatest() Obtain <p>Whether the repository image is the latest</p>
 * @method void setIsLatest(boolean $IsLatest) Set <p>Whether the repository image is the latest</p>
 * @method array getExcludeLocalImageIDs() Obtain <p>Local image id to remove</p>
 * @method void setExcludeLocalImageIDs(array $ExcludeLocalImageIDs) Set <p>Local image id to remove</p>
 * @method array getExcludeRegistryImageIDs() Obtain <p>id of the repository image to remove</p>
 * @method void setExcludeRegistryImageIDs(array $ExcludeRegistryImageIDs) Set <p>id of the repository image to remove</p>
 * @method array getLocalClusterIDs() Obtain <p>Cluster ID.</p>
 * @method void setLocalClusterIDs(array $LocalClusterIDs) Set <p>Cluster ID.</p>
 */
class CreateVulScanTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Local image scan range type</p><p>Enumeration value:</p><ul><li>ALL: All local images</li><li>NOT_SCAN: All authorized unscanned local images</li><li>IMAGEIDS: Selected local image IDs</li><li>CLUSTER: Cluster filtering</li></ul>
     */
    public $LocalImageScanType;

    /**
     * @var array <p>Scan by authorized local image IDs, which takes precedence over scanning by authorized local images that meet the conditions.</p>
     */
    public $LocalImageIDs;

    /**
     * @var string <p>Repository image scan range type. ALL: All repository images. NOT_SCAN: Total authorized unscanned repository images. IMAGEIDS: Selected repository image IDs.</p>
     */
    public $RegistryImageScanType;

    /**
     * @var array <p>Scan by authorized repository image IDs, which takes precedence over scanning by authorized repository images that meet the conditions.</p>
     */
    public $RegistryImageIDs;

    /**
     * @var integer <p>Task ID for local image re-vulnerability scanning</p>
     */
    public $LocalTaskID;

    /**
     * @var integer <p>Task ID for repository image re-vulnerability scanning</p>
     */
    public $RegistryTaskID;

    /**
     * @var boolean <p>Local image container runtime</p>
     */
    public $LocalImageContainerRunning;

    /**
     * @var boolean <p>Image Container in repository is running</p>
     */
    public $RegistryImageContainerRunning;

    /**
     * @var boolean <p>Whether the repository image is the latest</p>
     */
    public $IsLatest;

    /**
     * @var array <p>Local image id to remove</p>
     */
    public $ExcludeLocalImageIDs;

    /**
     * @var array <p>id of the repository image to remove</p>
     */
    public $ExcludeRegistryImageIDs;

    /**
     * @var array <p>Cluster ID.</p>
     */
    public $LocalClusterIDs;

    /**
     * @param string $LocalImageScanType <p>Local image scan range type</p><p>Enumeration value:</p><ul><li>ALL: All local images</li><li>NOT_SCAN: All authorized unscanned local images</li><li>IMAGEIDS: Selected local image IDs</li><li>CLUSTER: Cluster filtering</li></ul>
     * @param array $LocalImageIDs <p>Scan by authorized local image IDs, which takes precedence over scanning by authorized local images that meet the conditions.</p>
     * @param string $RegistryImageScanType <p>Repository image scan range type. ALL: All repository images. NOT_SCAN: Total authorized unscanned repository images. IMAGEIDS: Selected repository image IDs.</p>
     * @param array $RegistryImageIDs <p>Scan by authorized repository image IDs, which takes precedence over scanning by authorized repository images that meet the conditions.</p>
     * @param integer $LocalTaskID <p>Task ID for local image re-vulnerability scanning</p>
     * @param integer $RegistryTaskID <p>Task ID for repository image re-vulnerability scanning</p>
     * @param boolean $LocalImageContainerRunning <p>Local image container runtime</p>
     * @param boolean $RegistryImageContainerRunning <p>Image Container in repository is running</p>
     * @param boolean $IsLatest <p>Whether the repository image is the latest</p>
     * @param array $ExcludeLocalImageIDs <p>Local image id to remove</p>
     * @param array $ExcludeRegistryImageIDs <p>id of the repository image to remove</p>
     * @param array $LocalClusterIDs <p>Cluster ID.</p>
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

        if (array_key_exists("LocalImageContainerRunning",$param) and $param["LocalImageContainerRunning"] !== null) {
            $this->LocalImageContainerRunning = $param["LocalImageContainerRunning"];
        }

        if (array_key_exists("RegistryImageContainerRunning",$param) and $param["RegistryImageContainerRunning"] !== null) {
            $this->RegistryImageContainerRunning = $param["RegistryImageContainerRunning"];
        }

        if (array_key_exists("IsLatest",$param) and $param["IsLatest"] !== null) {
            $this->IsLatest = $param["IsLatest"];
        }

        if (array_key_exists("ExcludeLocalImageIDs",$param) and $param["ExcludeLocalImageIDs"] !== null) {
            $this->ExcludeLocalImageIDs = $param["ExcludeLocalImageIDs"];
        }

        if (array_key_exists("ExcludeRegistryImageIDs",$param) and $param["ExcludeRegistryImageIDs"] !== null) {
            $this->ExcludeRegistryImageIDs = $param["ExcludeRegistryImageIDs"];
        }

        if (array_key_exists("LocalClusterIDs",$param) and $param["LocalClusterIDs"] !== null) {
            $this->LocalClusterIDs = $param["LocalClusterIDs"];
        }
    }
}
