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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image description information.
 *
 * @method string getImageType() Obtain Image type. Valid values: TCR ( which indicates a Tencent Container Registry (TCR) image), CCR (which indicates a TCR Personal Edition image), PreSet (which indicates a platform preset image), and CUSTOM (which indicates a third-party custom image).
 * @method void setImageType(string $ImageType) Set Image type. Valid values: TCR ( which indicates a Tencent Container Registry (TCR) image), CCR (which indicates a TCR Personal Edition image), PreSet (which indicates a platform preset image), and CUSTOM (which indicates a third-party custom image).
 * @method string getImageUrl() Obtain Image address.
 * @method void setImageUrl(string $ImageUrl) Set Image address.
 * @method string getRegistryRegion() Obtain Region corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryRegion(string $RegistryRegion) Set Region corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistryId() Obtain Instance ID corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryId(string $RegistryId) Set Instance ID corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAllowSaveAllContent() Obtain Whether to allow exporting all content.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowSaveAllContent(boolean $AllowSaveAllContent) Set Whether to allow exporting all content.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Image name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Image name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportDataPipeline() Obtain Whether to support data generation.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportDataPipeline(boolean $SupportDataPipeline) Set Whether to support data generation.Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string Image type. Valid values: TCR ( which indicates a Tencent Container Registry (TCR) image), CCR (which indicates a TCR Personal Edition image), PreSet (which indicates a platform preset image), and CUSTOM (which indicates a third-party custom image).
     */
    public $ImageType;

    /**
     * @var string Image address.
     */
    public $ImageUrl;

    /**
     * @var string Region corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryRegion;

    /**
     * @var string Instance ID corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryId;

    /**
     * @var boolean Whether to allow exporting all content.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowSaveAllContent;

    /**
     * @var string Image name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageName;

    /**
     * @var boolean Whether to support data generation.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportDataPipeline;

    /**
     * @param string $ImageType Image type. Valid values: TCR ( which indicates a Tencent Container Registry (TCR) image), CCR (which indicates a TCR Personal Edition image), PreSet (which indicates a platform preset image), and CUSTOM (which indicates a third-party custom image).
     * @param string $ImageUrl Image address.
     * @param string $RegistryRegion Region corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistryId Instance ID corresponding to the TCR image.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AllowSaveAllContent Whether to allow exporting all content.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Image name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportDataPipeline Whether to support data generation.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("AllowSaveAllContent",$param) and $param["AllowSaveAllContent"] !== null) {
            $this->AllowSaveAllContent = $param["AllowSaveAllContent"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("SupportDataPipeline",$param) and $param["SupportDataPipeline"] !== null) {
            $this->SupportDataPipeline = $param["SupportDataPipeline"];
        }
    }
}
