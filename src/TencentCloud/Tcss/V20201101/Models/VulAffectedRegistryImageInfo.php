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
 * This API is used to query the list of repository images affected by a specific vulnerability.
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image Name
 * @method void setImageName(string $ImageName) Set Image Name
 * @method string getImageTag() Obtain Mirror version
 * @method void setImageTag(string $ImageTag) Set Mirror version
 * @method string getNamespace() Obtain Image Namespace
 * @method void setNamespace(string $Namespace) Set Image Namespace
 * @method string getImageRepoAddress() Obtain Image address.
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image address.
 * @method array getComponentList() Obtain Component List
 * @method void setComponentList(array $ComponentList) Set Component List
 * @method boolean getIsLatestImage() Obtain Whether the Latest Version of the Image
 * @method void setIsLatestImage(boolean $IsLatestImage) Set Whether the Latest Version of the Image
 * @method integer getImageAssetId() Obtain Internal Image Asset ID
 * @method void setImageAssetId(integer $ImageAssetId) Set Internal Image Asset ID
 */
class VulAffectedRegistryImageInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image Name
     */
    public $ImageName;

    /**
     * @var string Mirror version
     */
    public $ImageTag;

    /**
     * @var string Image Namespace
     */
    public $Namespace;

    /**
     * @var string Image address.
     */
    public $ImageRepoAddress;

    /**
     * @var array Component List
     */
    public $ComponentList;

    /**
     * @var boolean Whether the Latest Version of the Image
     */
    public $IsLatestImage;

    /**
     * @var integer Internal Image Asset ID
     */
    public $ImageAssetId;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image Name
     * @param string $ImageTag Mirror version
     * @param string $Namespace Image Namespace
     * @param string $ImageRepoAddress Image address.
     * @param array $ComponentList Component List
     * @param boolean $IsLatestImage Whether the Latest Version of the Image
     * @param integer $ImageAssetId Internal Image Asset ID
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedImageComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("ImageAssetId",$param) and $param["ImageAssetId"] !== null) {
            $this->ImageAssetId = $param["ImageAssetId"];
        }
    }
}
