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
 * CreateAssetImageScanTask request structure.
 *
 * @method boolean getAll() Obtain Whether to scan all images.
 * @method void setAll(boolean $All) Set Whether to scan all images.
 * @method array getImages() Obtain List of images to be scanned.
 * @method void setImages(array $Images) Set List of images to be scanned.
 * @method boolean getScanVul() Obtain Scan for vulnerabilities.
 * @method void setScanVul(boolean $ScanVul) Set Scan for vulnerabilities.
 * @method boolean getScanVirus() Obtain Scan for trojans.
 * @method void setScanVirus(boolean $ScanVirus) Set Scan for trojans.
 * @method boolean getScanRisk() Obtain Scan for risks.
 * @method void setScanRisk(boolean $ScanRisk) Set Scan for risks.
 * @method array getFilters() Obtain Filter
 * @method void setFilters(array $Filters) Set Filter
 * @method array getExcludeImageIds() Obtain Specified image IDs to be excluded
 * @method void setExcludeImageIds(array $ExcludeImageIds) Set Specified image IDs to be excluded
 */
class CreateAssetImageScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean Whether to scan all images.
     * @deprecated
     */
    public $All;

    /**
     * @var array List of images to be scanned.
     */
    public $Images;

    /**
     * @var boolean Scan for vulnerabilities.
     */
    public $ScanVul;

    /**
     * @var boolean Scan for trojans.
     */
    public $ScanVirus;

    /**
     * @var boolean Scan for risks.
     */
    public $ScanRisk;

    /**
     * @var array Filter
     */
    public $Filters;

    /**
     * @var array Specified image IDs to be excluded
     */
    public $ExcludeImageIds;

    /**
     * @param boolean $All Whether to scan all images.
     * @param array $Images List of images to be scanned.
     * @param boolean $ScanVul Scan for vulnerabilities.
     * @param boolean $ScanVirus Scan for trojans.
     * @param boolean $ScanRisk Scan for risks.
     * @param array $Filters Filter
     * @param array $ExcludeImageIds Specified image IDs to be excluded
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
    }
}
