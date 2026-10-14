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
 * UpdateImageRegistryTimingScanTask request structure.
 *
 * @method integer getScanPeriod() Obtain Scheduled scan cycle
 * @method void setScanPeriod(integer $ScanPeriod) Set Scheduled scan cycle
 * @method boolean getEnable() Obtain Scheduled scan switch
 * @method void setEnable(boolean $Enable) Set Scheduled scan switch
 * @method string getScanTime() Obtain The time for scheduled scan
 * @method void setScanTime(string $ScanTime) Set The time for scheduled scan
 * @method array getScanType() Obtain Array of Trojan horse types to scan
 * @method void setScanType(array $ScanType) Set Array of Trojan horse types to scan
 * @method array getImages() Obtain Scan image
 * @method void setImages(array $Images) Set Scan image
 * @method boolean getAll() Obtain Whether to scan all
 * @method void setAll(boolean $All) Set Whether to scan all
 * @method array getId() Obtain Scan Image ID
 * @method void setId(array $Id) Set Scan Image ID
 * @method boolean getLatest() Obtain Whether to Scan the Latest Version
 * @method void setLatest(boolean $Latest) Set Whether to Scan the Latest Version
 * @method boolean getContainerRunning() Obtain Whether There Are Running Containers
 * @method void setContainerRunning(boolean $ContainerRunning) Set Whether There Are Running Containers
 * @method string getScanEndTime() Obtain Scan end time
 * @method void setScanEndTime(string $ScanEndTime) Set Scan end time
 * @method integer getScanScope() Obtain Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
 * @method void setScanScope(integer $ScanScope) Set Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
 * @method array getRegistryType() Obtain Repository Type: tcr, ccr, harbor
 * @method void setRegistryType(array $RegistryType) Set Repository Type: tcr, ccr, harbor
 * @method array getNamespace() Obtain Namespace
 * @method void setNamespace(array $Namespace) Set Namespace
 * @method array getExcludeImageAssetIds() Obtain IDs of excluded image assets.
 * @method void setExcludeImageAssetIds(array $ExcludeImageAssetIds) Set IDs of excluded image assets.
 */
class UpdateImageRegistryTimingScanTaskRequest extends AbstractModel
{
    /**
     * @var integer Scheduled scan cycle
     */
    public $ScanPeriod;

    /**
     * @var boolean Scheduled scan switch
     */
    public $Enable;

    /**
     * @var string The time for scheduled scan
     */
    public $ScanTime;

    /**
     * @var array Array of Trojan horse types to scan
     */
    public $ScanType;

    /**
     * @var array Scan image
     */
    public $Images;

    /**
     * @var boolean Whether to scan all
     * @deprecated
     */
    public $All;

    /**
     * @var array Scan Image ID
     */
    public $Id;

    /**
     * @var boolean Whether to Scan the Latest Version
     */
    public $Latest;

    /**
     * @var boolean Whether There Are Running Containers
     */
    public $ContainerRunning;

    /**
     * @var string Scan end time
     */
    public $ScanEndTime;

    /**
     * @var integer Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
     */
    public $ScanScope;

    /**
     * @var array Repository Type: tcr, ccr, harbor
     */
    public $RegistryType;

    /**
     * @var array Namespace
     */
    public $Namespace;

    /**
     * @var array IDs of excluded image assets.
     */
    public $ExcludeImageAssetIds;

    /**
     * @param integer $ScanPeriod Scheduled scan cycle
     * @param boolean $Enable Scheduled scan switch
     * @param string $ScanTime The time for scheduled scan
     * @param array $ScanType Array of Trojan horse types to scan
     * @param array $Images Scan image
     * @param boolean $All Whether to scan all
     * @param array $Id Scan Image ID
     * @param boolean $Latest Whether to Scan the Latest Version
     * @param boolean $ContainerRunning Whether There Are Running Containers
     * @param string $ScanEndTime Scan end time
     * @param integer $ScanScope Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
     * @param array $RegistryType Repository Type: tcr, ccr, harbor
     * @param array $Namespace Namespace
     * @param array $ExcludeImageAssetIds IDs of excluded image assets.
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
        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Latest",$param) and $param["Latest"] !== null) {
            $this->Latest = $param["Latest"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ExcludeImageAssetIds",$param) and $param["ExcludeImageAssetIds"] !== null) {
            $this->ExcludeImageAssetIds = $param["ExcludeImageAssetIds"];
        }
    }
}
