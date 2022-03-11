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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image information
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageState() Obtain Image status
 * @method void setImageState(string $ImageState) Set Image status
 * @method string getImageType() Obtain Image type
 * @method void setImageType(string $ImageType) Set Image type
 * @method string getImageOsName() Obtain OS name
 * @method void setImageOsName(string $ImageOsName) Set OS name
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method string getImageCreateTime() Obtain Image import time
 * @method void setImageCreateTime(string $ImageCreateTime) Set Image import time
 * @method string getArchitecture() Obtain Number of bits of the OS
 * @method void setArchitecture(string $Architecture) Set Number of bits of the OS
 * @method string getOsType() Obtain OS type
 * @method void setOsType(string $OsType) Set OS type
 * @method string getOsVersion() Obtain OS version
 * @method void setOsVersion(string $OsVersion) Set OS version
 * @method string getPlatform() Obtain OS platform
 * @method void setPlatform(string $Platform) Set OS platform
 * @method integer getImageOwner() Obtain Image owner
 * @method void setImageOwner(integer $ImageOwner) Set Image owner
 * @method integer getImageSize() Obtain Image size in GB
 * @method void setImageSize(integer $ImageSize) Set Image size in GB
 * @method SrcImage getSrcImage() Obtain Image source information
 * @method void setSrcImage(SrcImage $SrcImage) Set Image source information
 * @method string getImageSource() Obtain Image source type
 * @method void setImageSource(string $ImageSource) Set Image source type
 * @method string getTaskId() Obtain ID of the task in intermediate or failed status
 * @method void setTaskId(string $TaskId) Set ID of the task in intermediate or failed status
 * @method boolean getIsSupportCloudInit() Obtain Whether cloud-init is supported
 * @method void setIsSupportCloudInit(boolean $IsSupportCloudInit) Set Whether cloud-init is supported
 */
class Image extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image status
     */
    public $ImageState;

    /**
     * @var string Image type
     */
    public $ImageType;

    /**
     * @var string OS name
     */
    public $ImageOsName;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var string Image import time
     */
    public $ImageCreateTime;

    /**
     * @var string Number of bits of the OS
     */
    public $Architecture;

    /**
     * @var string OS type
     */
    public $OsType;

    /**
     * @var string OS version
     */
    public $OsVersion;

    /**
     * @var string OS platform
     */
    public $Platform;

    /**
     * @var integer Image owner
     */
    public $ImageOwner;

    /**
     * @var integer Image size in GB
     */
    public $ImageSize;

    /**
     * @var SrcImage Image source information
     */
    public $SrcImage;

    /**
     * @var string Image source type
     */
    public $ImageSource;

    /**
     * @var string ID of the task in intermediate or failed status
     */
    public $TaskId;

    /**
     * @var boolean Whether cloud-init is supported
     */
    public $IsSupportCloudInit;

    /**
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param string $ImageState Image status
     * @param string $ImageType Image type
     * @param string $ImageOsName OS name
     * @param string $ImageDescription Image description
     * @param string $ImageCreateTime Image import time
     * @param string $Architecture Number of bits of the OS
     * @param string $OsType OS type
     * @param string $OsVersion OS version
     * @param string $Platform OS platform
     * @param integer $ImageOwner Image owner
     * @param integer $ImageSize Image size in GB
     * @param SrcImage $SrcImage Image source information
     * @param string $ImageSource Image source type
     * @param string $TaskId ID of the task in intermediate or failed status
     * @param boolean $IsSupportCloudInit Whether cloud-init is supported
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageOsName",$param) and $param["ImageOsName"] !== null) {
            $this->ImageOsName = $param["ImageOsName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ImageOwner",$param) and $param["ImageOwner"] !== null) {
            $this->ImageOwner = $param["ImageOwner"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("SrcImage",$param) and $param["SrcImage"] !== null) {
            $this->SrcImage = new SrcImage();
            $this->SrcImage->deserialize($param["SrcImage"]);
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("IsSupportCloudInit",$param) and $param["IsSupportCloudInit"] !== null) {
            $this->IsSupportCloudInit = $param["IsSupportCloudInit"];
        }
    }
}
