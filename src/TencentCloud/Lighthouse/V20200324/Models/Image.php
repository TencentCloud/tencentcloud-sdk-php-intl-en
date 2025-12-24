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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM image information.
 *
 * @method string getImageId() Obtain CVM Image ID, which is the unique identifier of the image.
 * @method void setImageId(string $ImageId) Set CVM Image ID, which is the unique identifier of the image.
 * @method string getImageName() Obtain Image name.
 * @method void setImageName(string $ImageName) Set Image name.
 * @method string getImageDescription() Obtain Image description.
 * @method void setImageDescription(string $ImageDescription) Set Image description.
 * @method integer getImageSize() Obtain Image size, in GB.
 * @method void setImageSize(integer $ImageSize) Set Image size, in GB.
 * @method string getImageSource() Obtain Image source.
<li>CREATE_IMAGE: custom image.</li>
<li>EXTERNAL_IMPORT: externally imported image.</li>
 * @method void setImageSource(string $ImageSource) Set Image source.
<li>CREATE_IMAGE: custom image.</li>
<li>EXTERNAL_IMPORT: externally imported image.</li>
 * @method string getImageClass() Obtain Image classification.
<li>SystemImage: system disk image.</li>
<li>InstanceImage: full-instance image.</li>
 * @method void setImageClass(string $ImageClass) Set Image classification.
<li>SystemImage: system disk image.</li>
<li>InstanceImage: full-instance image.</li>
 * @method string getImageState() Obtain Image status.
CREATING: creating.
NORMAL: normal.
CREATEFAILED: creation failed.
USING: in use.
SYNCING: synchronizing.
IMPORTING: importing.
IMPORTFAILED: import failed.
 * @method void setImageState(string $ImageState) Set Image status.
CREATING: creating.
NORMAL: normal.
CREATEFAILED: creation failed.
USING: in use.
SYNCING: synchronizing.
IMPORTING: importing.
IMPORTFAILED: import failed.
 * @method boolean getIsSupportCloudinit() Obtain Whether the image supports Cloudinit.
 * @method void setIsSupportCloudinit(boolean $IsSupportCloudinit) Set Whether the image supports Cloudinit.
 * @method string getArchitecture() Obtain Image architecture.
 * @method void setArchitecture(string $Architecture) Set Image architecture.
 * @method string getOsName() Obtain Image operating system.
 * @method void setOsName(string $OsName) Set Image operating system.
 * @method string getPlatform() Obtain Image source platform.
 * @method void setPlatform(string $Platform) Set Image source platform.
 * @method string getCreatedTime() Obtain Image creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Image creation time.
 * @method boolean getIsShareable() Obtain Whether the image can be shared to Lighthouse.
 * @method void setIsShareable(boolean $IsShareable) Set Whether the image can be shared to Lighthouse.
 * @method string getUnshareableReason() Obtain Reason for not being shared.
 * @method void setUnshareableReason(string $UnshareableReason) Set Reason for not being shared.
 */
class Image extends AbstractModel
{
    /**
     * @var string CVM Image ID, which is the unique identifier of the image.
     */
    public $ImageId;

    /**
     * @var string Image name.
     */
    public $ImageName;

    /**
     * @var string Image description.
     */
    public $ImageDescription;

    /**
     * @var integer Image size, in GB.
     */
    public $ImageSize;

    /**
     * @var string Image source.
<li>CREATE_IMAGE: custom image.</li>
<li>EXTERNAL_IMPORT: externally imported image.</li>
     */
    public $ImageSource;

    /**
     * @var string Image classification.
<li>SystemImage: system disk image.</li>
<li>InstanceImage: full-instance image.</li>
     */
    public $ImageClass;

    /**
     * @var string Image status.
CREATING: creating.
NORMAL: normal.
CREATEFAILED: creation failed.
USING: in use.
SYNCING: synchronizing.
IMPORTING: importing.
IMPORTFAILED: import failed.
     */
    public $ImageState;

    /**
     * @var boolean Whether the image supports Cloudinit.
     */
    public $IsSupportCloudinit;

    /**
     * @var string Image architecture.
     */
    public $Architecture;

    /**
     * @var string Image operating system.
     */
    public $OsName;

    /**
     * @var string Image source platform.
     */
    public $Platform;

    /**
     * @var string Image creation time.
     */
    public $CreatedTime;

    /**
     * @var boolean Whether the image can be shared to Lighthouse.
     */
    public $IsShareable;

    /**
     * @var string Reason for not being shared.
     */
    public $UnshareableReason;

    /**
     * @param string $ImageId CVM Image ID, which is the unique identifier of the image.
     * @param string $ImageName Image name.
     * @param string $ImageDescription Image description.
     * @param integer $ImageSize Image size, in GB.
     * @param string $ImageSource Image source.
<li>CREATE_IMAGE: custom image.</li>
<li>EXTERNAL_IMPORT: externally imported image.</li>
     * @param string $ImageClass Image classification.
<li>SystemImage: system disk image.</li>
<li>InstanceImage: full-instance image.</li>
     * @param string $ImageState Image status.
CREATING: creating.
NORMAL: normal.
CREATEFAILED: creation failed.
USING: in use.
SYNCING: synchronizing.
IMPORTING: importing.
IMPORTFAILED: import failed.
     * @param boolean $IsSupportCloudinit Whether the image supports Cloudinit.
     * @param string $Architecture Image architecture.
     * @param string $OsName Image operating system.
     * @param string $Platform Image source platform.
     * @param string $CreatedTime Image creation time.
     * @param boolean $IsShareable Whether the image can be shared to Lighthouse.
     * @param string $UnshareableReason Reason for not being shared.
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

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("ImageClass",$param) and $param["ImageClass"] !== null) {
            $this->ImageClass = $param["ImageClass"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("IsSupportCloudinit",$param) and $param["IsSupportCloudinit"] !== null) {
            $this->IsSupportCloudinit = $param["IsSupportCloudinit"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IsShareable",$param) and $param["IsShareable"] !== null) {
            $this->IsShareable = $param["IsShareable"];
        }

        if (array_key_exists("UnshareableReason",$param) and $param["UnshareableReason"] !== null) {
            $this->UnshareableReason = $param["UnshareableReason"];
        }
    }
}
