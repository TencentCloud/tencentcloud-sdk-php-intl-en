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
 * CreateAssetImageRegistryScanTaskOneKey request structure.
 *
 * @method boolean getAll() Obtain Scan All Images (Deprecated)
 * @method void setAll(boolean $All) Set Scan All Images (Deprecated)
 * @method array getImages() Obtain Scanned Image List
 * @method void setImages(array $Images) Set Scanned Image List
 * @method array getScanType() Obtain Type Array for scanning
 * @method void setScanType(array $ScanType) Set Type Array for scanning
 * @method array getId() Obtain Scanned Image List ID
 * @method void setId(array $Id) Set Scanned Image List ID
 * @method array getExcludeIDs() Obtain List of image IDs excluded from scanning.
 * @method void setExcludeIDs(array $ExcludeIDs) Set List of image IDs excluded from scanning.
 * @method boolean getIsLatest() Obtain Whether the Latest Image
 * @method void setIsLatest(boolean $IsLatest) Set Whether the Latest Image
 * @method integer getScanScope() Obtain Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
 * @method void setScanScope(integer $ScanScope) Set Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
 * @method array getRegistryType() Obtain Repository type
 * @method void setRegistryType(array $RegistryType) Set Repository type
 * @method array getNamespace() Obtain Namespace
 * @method void setNamespace(array $Namespace) Set Namespace
 * @method boolean getContainerRunning() Obtain Whether There Are Running Containers
 * @method void setContainerRunning(boolean $ContainerRunning) Set Whether There Are Running Containers
 * @method integer getTimeout() Obtain Task Timeout Duration Unit (s)
 * @method void setTimeout(integer $Timeout) Set Task Timeout Duration Unit (s)
 */
class CreateAssetImageRegistryScanTaskOneKeyRequest extends AbstractModel
{
    /**
     * @var boolean Scan All Images (Deprecated)
     * @deprecated
     */
    public $All;

    /**
     * @var array Scanned Image List
     */
    public $Images;

    /**
     * @var array Type Array for scanning
     */
    public $ScanType;

    /**
     * @var array Scanned Image List ID
     */
    public $Id;

    /**
     * @var array List of image IDs excluded from scanning.
     */
    public $ExcludeIDs;

    /**
     * @var boolean Whether the Latest Image
     */
    public $IsLatest;

    /**
     * @var integer Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
     */
    public $ScanScope;

    /**
     * @var array Repository type
     */
    public $RegistryType;

    /**
     * @var array Namespace
     */
    public $Namespace;

    /**
     * @var boolean Whether There Are Running Containers
     */
    public $ContainerRunning;

    /**
     * @var integer Task Timeout Duration Unit (s)
     */
    public $Timeout;

    /**
     * @param boolean $All Scan All Images (Deprecated)
     * @param array $Images Scanned Image List
     * @param array $ScanType Type Array for scanning
     * @param array $Id Scanned Image List ID
     * @param array $ExcludeIDs List of image IDs excluded from scanning.
     * @param boolean $IsLatest Whether the Latest Image
     * @param integer $ScanScope Scan Scope. 0: All Images; 1: Custom Images; 2: Recommended Scan Images
     * @param array $RegistryType Repository type
     * @param array $Namespace Namespace
     * @param boolean $ContainerRunning Whether There Are Running Containers
     * @param integer $Timeout Task Timeout Duration Unit (s)
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ExcludeIDs",$param) and $param["ExcludeIDs"] !== null) {
            $this->ExcludeIDs = $param["ExcludeIDs"];
        }

        if (array_key_exists("IsLatest",$param) and $param["IsLatest"] !== null) {
            $this->IsLatest = $param["IsLatest"];
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

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
