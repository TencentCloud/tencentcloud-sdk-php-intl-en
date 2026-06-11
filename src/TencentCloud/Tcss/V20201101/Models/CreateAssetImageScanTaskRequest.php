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
 * CreateAssetImageScanTask request structure.
 *
 * @method boolean getAll() Obtain <p>Whether to scan all images; select one from all images, image list, and filter by condition.</p>
 * @method void setAll(boolean $All) Set <p>Whether to scan all images; select one from all images, image list, and filter by condition.</p>
 * @method array getImages() Obtain <p>List of images to scan; choose one from all images, image list, and filter by condition.</p>
 * @method void setImages(array $Images) Set <p>List of images to scan; choose one from all images, image list, and filter by condition.</p>
 * @method boolean getScanVul() Obtain <p>Scan vulnerabilities; select one from vulnerability, Trojan, and risk.</p>
 * @method void setScanVul(boolean $ScanVul) Set <p>Scan vulnerabilities; select one from vulnerability, Trojan, and risk.</p>
 * @method boolean getScanVirus() Obtain <p>Scan for trojans; select either vulnerability, Trojan or risk.</p>
 * @method void setScanVirus(boolean $ScanVirus) Set <p>Scan for trojans; select either vulnerability, Trojan or risk.</p>
 * @method boolean getScanRisk() Obtain <p>Scan risk; select one from vulnerability, Trojan, and risk.</p>
 * @method void setScanRisk(boolean $ScanRisk) Set <p>Scan risk; select one from vulnerability, Trojan, and risk.</p>
 * @method array getFilters() Obtain <p>Filter images by conditions; select one from all images, image list, and filter by condition.</p>
 * @method void setFilters(array $Filters) Set <p>Filter images by conditions; select one from all images, image list, and filter by condition.</p>
 * @method array getExcludeImageIds() Obtain <p>Filter images by conditions and exclude individual images</p>
 * @method void setExcludeImageIds(array $ExcludeImageIds) Set <p>Filter images by conditions and exclude individual images</p>
 * @method boolean getContainerRunning() Obtain <p>Whether the image has running containers</p>
 * @method void setContainerRunning(boolean $ContainerRunning) Set <p>Whether the image has running containers</p>
 * @method integer getScanScope() Obtain <p>Scan range 0 all authorized images, 1 selected images, 2 recommended scan, 3 cluster scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
 * @method void setScanScope(integer $ScanScope) Set <p>Scan range 0 all authorized images, 1 selected images, 2 recommended scan, 3 cluster scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
 * @method integer getTimeout() Obtain <p>Task timeout duration unit seconds, default 1 hour.</p>
 * @method void setTimeout(integer $Timeout) Set <p>Task timeout duration unit seconds, default 1 hour.</p>
 * @method boolean getIsOneClickScanningTask() Obtain <p>One-click scan task. Default false indicates non-one-click scan, true one-click scan.</p>
 * @method void setIsOneClickScanningTask(boolean $IsOneClickScanningTask) Set <p>One-click scan task. Default false indicates non-one-click scan, true one-click scan.</p>
 * @method array getClusterIDs() Obtain <p>Cluster ID.</p>
 * @method void setClusterIDs(array $ClusterIDs) Set <p>Cluster ID.</p>
 */
class CreateAssetImageScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean <p>Whether to scan all images; select one from all images, image list, and filter by condition.</p>
     * @deprecated
     */
    public $All;

    /**
     * @var array <p>List of images to scan; choose one from all images, image list, and filter by condition.</p>
     */
    public $Images;

    /**
     * @var boolean <p>Scan vulnerabilities; select one from vulnerability, Trojan, and risk.</p>
     */
    public $ScanVul;

    /**
     * @var boolean <p>Scan for trojans; select either vulnerability, Trojan or risk.</p>
     */
    public $ScanVirus;

    /**
     * @var boolean <p>Scan risk; select one from vulnerability, Trojan, and risk.</p>
     */
    public $ScanRisk;

    /**
     * @var array <p>Filter images by conditions; select one from all images, image list, and filter by condition.</p>
     */
    public $Filters;

    /**
     * @var array <p>Filter images by conditions and exclude individual images</p>
     */
    public $ExcludeImageIds;

    /**
     * @var boolean <p>Whether the image has running containers</p>
     */
    public $ContainerRunning;

    /**
     * @var integer <p>Scan range 0 all authorized images, 1 selected images, 2 recommended scan, 3 cluster scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
     */
    public $ScanScope;

    /**
     * @var integer <p>Task timeout duration unit seconds, default 1 hour.</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>One-click scan task. Default false indicates non-one-click scan, true one-click scan.</p>
     */
    public $IsOneClickScanningTask;

    /**
     * @var array <p>Cluster ID.</p>
     */
    public $ClusterIDs;

    /**
     * @param boolean $All <p>Whether to scan all images; select one from all images, image list, and filter by condition.</p>
     * @param array $Images <p>List of images to scan; choose one from all images, image list, and filter by condition.</p>
     * @param boolean $ScanVul <p>Scan vulnerabilities; select one from vulnerability, Trojan, and risk.</p>
     * @param boolean $ScanVirus <p>Scan for trojans; select either vulnerability, Trojan or risk.</p>
     * @param boolean $ScanRisk <p>Scan risk; select one from vulnerability, Trojan, and risk.</p>
     * @param array $Filters <p>Filter images by conditions; select one from all images, image list, and filter by condition.</p>
     * @param array $ExcludeImageIds <p>Filter images by conditions and exclude individual images</p>
     * @param boolean $ContainerRunning <p>Whether the image has running containers</p>
     * @param integer $ScanScope <p>Scan range 0 all authorized images, 1 selected images, 2 recommended scan, 3 cluster scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
     * @param integer $Timeout <p>Task timeout duration unit seconds, default 1 hour.</p>
     * @param boolean $IsOneClickScanningTask <p>One-click scan task. Default false indicates non-one-click scan, true one-click scan.</p>
     * @param array $ClusterIDs <p>Cluster ID.</p>
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
            $this->Images = $param["Images"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageIds",$param) and $param["ExcludeImageIds"] !== null) {
            $this->ExcludeImageIds = $param["ExcludeImageIds"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IsOneClickScanningTask",$param) and $param["IsOneClickScanningTask"] !== null) {
            $this->IsOneClickScanningTask = $param["IsOneClickScanningTask"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }
    }
}
