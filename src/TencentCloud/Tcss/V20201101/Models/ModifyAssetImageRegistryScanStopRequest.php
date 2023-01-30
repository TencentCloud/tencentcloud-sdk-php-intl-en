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
 * ModifyAssetImageRegistryScanStop request structure.
 *
 * @method boolean getAll() Obtain Whether to scan all images
 * @method void setAll(boolean $All) Set Whether to scan all images
 * @method array getImages() Obtain List of scanned images
 * @method void setImages(array $Images) Set List of scanned images
 * @method array getId() Obtain List of scanned images
 * @method void setId(array $Id) Set List of scanned images
 * @method array getFilters() Obtain Filter
 * @method void setFilters(array $Filters) Set Filter
 * @method array getExcludeImageList() Obtain List of images not to be scanned, which is used together with `Filters`.
 * @method void setExcludeImageList(array $ExcludeImageList) Set List of images not to be scanned, which is used together with `Filters`.
 * @method boolean getOnlyScanLatest() Obtain Whether to scan only the latest repository images
 * @method void setOnlyScanLatest(boolean $OnlyScanLatest) Set Whether to scan only the latest repository images
 */
class ModifyAssetImageRegistryScanStopRequest extends AbstractModel
{
    /**
     * @var boolean Whether to scan all images
     */
    public $All;

    /**
     * @var array List of scanned images
     */
    public $Images;

    /**
     * @var array List of scanned images
     */
    public $Id;

    /**
     * @var array Filter
     */
    public $Filters;

    /**
     * @var array List of images not to be scanned, which is used together with `Filters`.
     */
    public $ExcludeImageList;

    /**
     * @var boolean Whether to scan only the latest repository images
     */
    public $OnlyScanLatest;

    /**
     * @param boolean $All Whether to scan all images
     * @param array $Images List of scanned images
     * @param array $Id List of scanned images
     * @param array $Filters Filter
     * @param array $ExcludeImageList List of images not to be scanned, which is used together with `Filters`.
     * @param boolean $OnlyScanLatest Whether to scan only the latest repository images
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
    }
}
