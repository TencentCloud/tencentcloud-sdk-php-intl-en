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
 * @method string getScanTime() Obtain Scheduled scan time
 * @method void setScanTime(string $ScanTime) Set Scheduled scan time
 * @method array getScanType() Obtain Array of the scanned trojan types
 * @method void setScanType(array $ScanType) Set Array of the scanned trojan types
 * @method array getImages() Obtain Scanned image
 * @method void setImages(array $Images) Set Scanned image
 * @method boolean getAll() Obtain Whether to scan all
 * @method void setAll(boolean $All) Set Whether to scan all
 * @method array getId() Obtain ID of the image to be scanned
 * @method void setId(array $Id) Set ID of the image to be scanned
 * @method boolean getLatest() Obtain Whether to scan for the latest version
 * @method void setLatest(boolean $Latest) Set Whether to scan for the latest version
 * @method boolean getContainerRunning() Obtain Whether running containers exist
 * @method void setContainerRunning(boolean $ContainerRunning) Set Whether running containers exist
 * @method string getScanEndTime() Obtain Scan End Time
 * @method void setScanEndTime(string $ScanEndTime) Set Scan End Time
 * @method integer getScanScope() Obtain Scan Scope: 0 All Images, 1 Custom Images, 2 Recommended Scan Images
 * @method void setScanScope(integer $ScanScope) Set Scan Scope: 0 All Images, 1 Custom Images, 2 Recommended Scan Images
 * @method array getRegistryType() Obtain Repository Type tcr,ccr,harbor
 * @method void setRegistryType(array $RegistryType) Set Repository Type tcr,ccr,harbor
 * @method array getNamespace() Obtain Namespace
 * @method void setNamespace(array $Namespace) Set Namespace
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
     * @var string Scheduled scan time
     */
    public $ScanTime;

    /**
     * @var array Array of the scanned trojan types
     */
    public $ScanType;

    /**
     * @var array Scanned image
     */
    public $Images;

    /**
     * @var boolean Whether to scan all
     * @deprecated
     */
    public $All;

    /**
     * @var array ID of the image to be scanned
     */
    public $Id;

    /**
     * @var boolean Whether to scan for the latest version
     */
    public $Latest;

    /**
     * @var boolean Whether running containers exist
     */
    public $ContainerRunning;

    /**
     * @var string Scan End Time
     */
    public $ScanEndTime;

    /**
     * @var integer Scan Scope: 0 All Images, 1 Custom Images, 2 Recommended Scan Images
     */
    public $ScanScope;

    /**
     * @var array Repository Type tcr,ccr,harbor
     */
    public $RegistryType;

    /**
     * @var array Namespace
     */
    public $Namespace;

    /**
     * @param integer $ScanPeriod Scheduled scan cycle
     * @param boolean $Enable Scheduled scan switch
     * @param string $ScanTime Scheduled scan time
     * @param array $ScanType Array of the scanned trojan types
     * @param array $Images Scanned image
     * @param boolean $All Whether to scan all
     * @param array $Id ID of the image to be scanned
     * @param boolean $Latest Whether to scan for the latest version
     * @param boolean $ContainerRunning Whether running containers exist
     * @param string $ScanEndTime Scan End Time
     * @param integer $ScanScope Scan Scope: 0 All Images, 1 Custom Images, 2 Recommended Scan Images
     * @param array $RegistryType Repository Type tcr,ccr,harbor
     * @param array $Namespace Namespace
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
    }
}
