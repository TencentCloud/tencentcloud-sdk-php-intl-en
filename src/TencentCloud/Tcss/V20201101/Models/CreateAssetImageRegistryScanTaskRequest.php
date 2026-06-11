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
 * CreateAssetImageRegistryScanTask request structure.
 *
 * @method boolean getAll() Obtain <p>Whether to scan all images.</p>
 * @method void setAll(boolean $All) Set <p>Whether to scan all images.</p>
 * @method array getImages() Obtain <p>List of images to be scanned.</p>
 * @method void setImages(array $Images) Set <p>List of images to be scanned.</p>
 * @method array getScanType() Obtain <p>Scan type array.</p>
 * @method void setScanType(array $ScanType) Set <p>Scan type array.</p>
 * @method array getId() Obtain <p>List of images to be scanned.</p>
 * @method void setId(array $Id) Set <p>List of images to be scanned.</p>
 * @method array getFilters() Obtain <p>Filter conditions.</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.</p>
 * @method array getExcludeImageList() Obtain <p>List of images that do not need to be scanned, used in conjunction with Filters.</p>
 * @method void setExcludeImageList(array $ExcludeImageList) Set <p>List of images that do not need to be scanned, used in conjunction with Filters.</p>
 * @method boolean getOnlyScanLatest() Obtain <p>Whether to scan only the latest version of the image in each repository, used in conjunction with Filters.</p>
 * @method void setOnlyScanLatest(boolean $OnlyScanLatest) Set <p>Whether to scan only the latest version of the image in each repository, used in conjunction with Filters.</p>
 * @method integer getTimeout() Obtain <p>Task timeout duration.</p><p>Unit: seconds.</p>
 * @method void setTimeout(integer $Timeout) Set <p>Task timeout duration.</p><p>Unit: seconds.</p>
 */
class CreateAssetImageRegistryScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean <p>Whether to scan all images.</p>
     */
    public $All;

    /**
     * @var array <p>List of images to be scanned.</p>
     */
    public $Images;

    /**
     * @var array <p>Scan type array.</p>
     */
    public $ScanType;

    /**
     * @var array <p>List of images to be scanned.</p>
     */
    public $Id;

    /**
     * @var array <p>Filter conditions.</p>
     */
    public $Filters;

    /**
     * @var array <p>List of images that do not need to be scanned, used in conjunction with Filters.</p>
     */
    public $ExcludeImageList;

    /**
     * @var boolean <p>Whether to scan only the latest version of the image in each repository, used in conjunction with Filters.</p>
     */
    public $OnlyScanLatest;

    /**
     * @var integer <p>Task timeout duration.</p><p>Unit: seconds.</p>
     */
    public $Timeout;

    /**
     * @param boolean $All <p>Whether to scan all images.</p>
     * @param array $Images <p>List of images to be scanned.</p>
     * @param array $ScanType <p>Scan type array.</p>
     * @param array $Id <p>List of images to be scanned.</p>
     * @param array $Filters <p>Filter conditions.</p>
     * @param array $ExcludeImageList <p>List of images that do not need to be scanned, used in conjunction with Filters.</p>
     * @param boolean $OnlyScanLatest <p>Whether to scan only the latest version of the image in each repository, used in conjunction with Filters.</p>
     * @param integer $Timeout <p>Task timeout duration.</p><p>Unit: seconds.</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageList",$param) and $param["ExcludeImageList"] !== null) {
            $this->ExcludeImageList = $param["ExcludeImageList"];
        }

        if (array_key_exists("OnlyScanLatest",$param) and $param["OnlyScanLatest"] !== null) {
            $this->OnlyScanLatest = $param["OnlyScanLatest"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
