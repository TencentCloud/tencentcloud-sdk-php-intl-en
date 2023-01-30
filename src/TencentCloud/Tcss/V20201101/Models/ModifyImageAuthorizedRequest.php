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
 * ModifyImageAuthorized request structure.
 *
 * @method boolean getAllLocalImages() Obtain Whether to license all local images, which has a higher priority than licensing by local image ID. When it is `true`, `UpdatedLocalImageCnt` should be greater than `0`.
 * @method void setAllLocalImages(boolean $AllLocalImages) Set Whether to license all local images, which has a higher priority than licensing by local image ID. When it is `true`, `UpdatedLocalImageCnt` should be greater than `0`.
 * @method boolean getAllRegistryImages() Obtain Whether to license all repository images, with a higher priority than licensing by image ID. When it is `true`, `UpdatedRegistryImageCnt` should be greater than `0`.
 * @method void setAllRegistryImages(boolean $AllRegistryImages) Set Whether to license all repository images, with a higher priority than licensing by image ID. When it is `true`, `UpdatedRegistryImageCnt` should be greater than `0`.
 * @method integer getUpdatedLocalImageCnt() Obtain Specified number of local images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
 * @method void setUpdatedLocalImageCnt(integer $UpdatedLocalImageCnt) Set Specified number of local images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
 * @method integer getUpdatedRegistryImageCnt() Obtain Specified number of repository images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
 * @method void setUpdatedRegistryImageCnt(integer $UpdatedRegistryImageCnt) Set Specified number of repository images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
 * @method string getImageSourceType() Obtain Licensing by eligible local images. Valid values of local image source: `ASSETIMAGE` (local image list); `IMAGEALL` (local image sync). This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method void setImageSourceType(string $ImageSourceType) Set Licensing by eligible local images. Valid values of local image source: `ASSETIMAGE` (local image list); `IMAGEALL` (local image sync). This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method array getLocalImageFilter() Obtain Licensing by eligible local images. This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method void setLocalImageFilter(array $LocalImageFilter) Set Licensing by eligible local images. This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method array getRegistryImageFilter() Obtain Licensing by eligible repository images. This parameter is required when `AllRegistryImages` is `false`, `RegistryImageIds` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
 * @method void setRegistryImageFilter(array $RegistryImageFilter) Set Licensing by eligible repository images. This parameter is required when `AllRegistryImages` is `false`, `RegistryImageIds` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
 * @method array getExcludeLocalImageIds() Obtain Licensing by eligible images, excluding specified local image IDs
 * @method void setExcludeLocalImageIds(array $ExcludeLocalImageIds) Set Licensing by eligible images, excluding specified local image IDs
 * @method array getExcludeRegistryImageIds() Obtain Licensing by eligible images, excluding specified repository image IDs
 * @method void setExcludeRegistryImageIds(array $ExcludeRegistryImageIds) Set Licensing by eligible images, excluding specified repository image IDs
 * @method array getLocalImageIds() Obtain Licensing by local image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllLocalImages` is `false`, `LocalImageFilter` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method void setLocalImageIds(array $LocalImageIds) Set Licensing by local image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllLocalImages` is `false`, `LocalImageFilter` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
 * @method array getRegistryImageIds() Obtain Licensing by repository image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllRegistryImages` is `false`, `RegistryImageFilter` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
 * @method void setRegistryImageIds(array $RegistryImageIds) Set Licensing by repository image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllRegistryImages` is `false`, `RegistryImageFilter` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
 * @method boolean getOnlyShowLatest() Obtain Whether to only include latest images. This parameter is required for repository images when `RegistryImageFilter` is not empty and `UpdatedRegistryImageCnt` is greater than `0`.
 * @method void setOnlyShowLatest(boolean $OnlyShowLatest) Set Whether to only include latest images. This parameter is required for repository images when `RegistryImageFilter` is not empty and `UpdatedRegistryImageCnt` is greater than `0`.
 */
class ModifyImageAuthorizedRequest extends AbstractModel
{
    /**
     * @var boolean Whether to license all local images, which has a higher priority than licensing by local image ID. When it is `true`, `UpdatedLocalImageCnt` should be greater than `0`.
     */
    public $AllLocalImages;

    /**
     * @var boolean Whether to license all repository images, with a higher priority than licensing by image ID. When it is `true`, `UpdatedRegistryImageCnt` should be greater than `0`.
     */
    public $AllRegistryImages;

    /**
     * @var integer Specified number of local images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
     */
    public $UpdatedLocalImageCnt;

    /**
     * @var integer Specified number of repository images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
     */
    public $UpdatedRegistryImageCnt;

    /**
     * @var string Licensing by eligible local images. Valid values of local image source: `ASSETIMAGE` (local image list); `IMAGEALL` (local image sync). This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     */
    public $ImageSourceType;

    /**
     * @var array Licensing by eligible local images. This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     */
    public $LocalImageFilter;

    /**
     * @var array Licensing by eligible repository images. This parameter is required when `AllRegistryImages` is `false`, `RegistryImageIds` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
     */
    public $RegistryImageFilter;

    /**
     * @var array Licensing by eligible images, excluding specified local image IDs
     */
    public $ExcludeLocalImageIds;

    /**
     * @var array Licensing by eligible images, excluding specified repository image IDs
     */
    public $ExcludeRegistryImageIds;

    /**
     * @var array Licensing by local image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllLocalImages` is `false`, `LocalImageFilter` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     */
    public $LocalImageIds;

    /**
     * @var array Licensing by repository image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllRegistryImages` is `false`, `RegistryImageFilter` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
     */
    public $RegistryImageIds;

    /**
     * @var boolean Whether to only include latest images. This parameter is required for repository images when `RegistryImageFilter` is not empty and `UpdatedRegistryImageCnt` is greater than `0`.
     */
    public $OnlyShowLatest;

    /**
     * @param boolean $AllLocalImages Whether to license all local images, which has a higher priority than licensing by local image ID. When it is `true`, `UpdatedLocalImageCnt` should be greater than `0`.
     * @param boolean $AllRegistryImages Whether to license all repository images, with a higher priority than licensing by image ID. When it is `true`, `UpdatedRegistryImageCnt` should be greater than `0`.
     * @param integer $UpdatedLocalImageCnt Specified number of local images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
     * @param integer $UpdatedRegistryImageCnt Specified number of repository images to be licensed, with the highest priority. Any difference between this number and the actual number will be randomly ignored.
     * @param string $ImageSourceType Licensing by eligible local images. Valid values of local image source: `ASSETIMAGE` (local image list); `IMAGEALL` (local image sync). This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     * @param array $LocalImageFilter Licensing by eligible local images. This parameter is required when `AllLocalImages` is `false`, `LocalImageIds` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     * @param array $RegistryImageFilter Licensing by eligible repository images. This parameter is required when `AllRegistryImages` is `false`, `RegistryImageIds` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
     * @param array $ExcludeLocalImageIds Licensing by eligible images, excluding specified local image IDs
     * @param array $ExcludeRegistryImageIds Licensing by eligible images, excluding specified repository image IDs
     * @param array $LocalImageIds Licensing by local image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllLocalImages` is `false`, `LocalImageFilter` is empty, and `UpdatedLocalImageCnt` is greater than `0`.
     * @param array $RegistryImageIds Licensing by repository image ID. This parameter has a higher priority than licensing by eligible images. It is required when `AllRegistryImages` is `false`, `RegistryImageFilter` is empty, and `UpdatedRegistryImageCnt` is greater than `0`.
     * @param boolean $OnlyShowLatest Whether to only include latest images. This parameter is required for repository images when `RegistryImageFilter` is not empty and `UpdatedRegistryImageCnt` is greater than `0`.
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
        if (array_key_exists("AllLocalImages",$param) and $param["AllLocalImages"] !== null) {
            $this->AllLocalImages = $param["AllLocalImages"];
        }

        if (array_key_exists("AllRegistryImages",$param) and $param["AllRegistryImages"] !== null) {
            $this->AllRegistryImages = $param["AllRegistryImages"];
        }

        if (array_key_exists("UpdatedLocalImageCnt",$param) and $param["UpdatedLocalImageCnt"] !== null) {
            $this->UpdatedLocalImageCnt = $param["UpdatedLocalImageCnt"];
        }

        if (array_key_exists("UpdatedRegistryImageCnt",$param) and $param["UpdatedRegistryImageCnt"] !== null) {
            $this->UpdatedRegistryImageCnt = $param["UpdatedRegistryImageCnt"];
        }

        if (array_key_exists("ImageSourceType",$param) and $param["ImageSourceType"] !== null) {
            $this->ImageSourceType = $param["ImageSourceType"];
        }

        if (array_key_exists("LocalImageFilter",$param) and $param["LocalImageFilter"] !== null) {
            $this->LocalImageFilter = [];
            foreach ($param["LocalImageFilter"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->LocalImageFilter, $obj);
            }
        }

        if (array_key_exists("RegistryImageFilter",$param) and $param["RegistryImageFilter"] !== null) {
            $this->RegistryImageFilter = [];
            foreach ($param["RegistryImageFilter"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->RegistryImageFilter, $obj);
            }
        }

        if (array_key_exists("ExcludeLocalImageIds",$param) and $param["ExcludeLocalImageIds"] !== null) {
            $this->ExcludeLocalImageIds = $param["ExcludeLocalImageIds"];
        }

        if (array_key_exists("ExcludeRegistryImageIds",$param) and $param["ExcludeRegistryImageIds"] !== null) {
            $this->ExcludeRegistryImageIds = $param["ExcludeRegistryImageIds"];
        }

        if (array_key_exists("LocalImageIds",$param) and $param["LocalImageIds"] !== null) {
            $this->LocalImageIds = $param["LocalImageIds"];
        }

        if (array_key_exists("RegistryImageIds",$param) and $param["RegistryImageIds"] !== null) {
            $this->RegistryImageIds = $param["RegistryImageIds"];
        }

        if (array_key_exists("OnlyShowLatest",$param) and $param["OnlyShowLatest"] !== null) {
            $this->OnlyShowLatest = $param["OnlyShowLatest"];
        }
    }
}
