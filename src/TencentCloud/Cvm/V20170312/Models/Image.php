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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getImageId() 获取Image ID
 * @method void setImageId(string $ImageId) 设置Image ID
 * @method string getOsName() 获取Operating system of the image
 * @method void setOsName(string $OsName) 设置Operating system of the image
 * @method string getImageType() 获取Image type
 * @method void setImageType(string $ImageType) 设置Image type
 * @method string getCreatedTime() 获取Creation time of the image
 * @method void setCreatedTime(string $CreatedTime) 设置Creation time of the image
 * @method string getImageName() 获取Image name
 * @method void setImageName(string $ImageName) 设置Image name
 * @method string getImageDescription() 获取Image description
 * @method void setImageDescription(string $ImageDescription) 设置Image description
 * @method integer getImageSize() 获取Image size
 * @method void setImageSize(integer $ImageSize) 设置Image size
 * @method string getArchitecture() 获取Image architecture
 * @method void setArchitecture(string $Architecture) 设置Image architecture
 * @method string getImageState() 获取Image state
 * @method void setImageState(string $ImageState) 设置Image state
 * @method string getPlatform() 获取Source platform of the image
 * @method void setPlatform(string $Platform) 设置Source platform of the image
 * @method string getImageCreator() 获取Image creator
 * @method void setImageCreator(string $ImageCreator) 设置Image creator
 * @method string getImageSource() 获取Image source
 * @method void setImageSource(string $ImageSource) 设置Image source
 * @method integer getSyncPercent() 获取Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
 * @method void setSyncPercent(integer $SyncPercent) 设置Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getIsSupportCloudinit() 获取Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
 * @method void setIsSupportCloudinit(boolean $IsSupportCloudinit) 设置Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
 * @method array getSnapshotSet() 获取Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
 * @method void setSnapshotSet(array $SnapshotSet) 设置Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
 */

/**
 *Details about an image, including its state and attributes.
 */
class Image extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Operating system of the image
     */
    public $OsName;

    /**
     * @var string Image type
     */
    public $ImageType;

    /**
     * @var string Creation time of the image
     */
    public $CreatedTime;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var integer Image size
     */
    public $ImageSize;

    /**
     * @var string Image architecture
     */
    public $Architecture;

    /**
     * @var string Image state
     */
    public $ImageState;

    /**
     * @var string Source platform of the image
     */
    public $Platform;

    /**
     * @var string Image creator
     */
    public $ImageCreator;

    /**
     * @var string Image source
     */
    public $ImageSource;

    /**
     * @var integer Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
     */
    public $SyncPercent;

    /**
     * @var boolean Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
     */
    public $IsSupportCloudinit;

    /**
     * @var array Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
     */
    public $SnapshotSet;
    /**
     * @param string $ImageId Image ID
     * @param string $OsName Operating system of the image
     * @param string $ImageType Image type
     * @param string $CreatedTime Creation time of the image
     * @param string $ImageName Image name
     * @param string $ImageDescription Image description
     * @param integer $ImageSize Image size
     * @param string $Architecture Image architecture
     * @param string $ImageState Image state
     * @param string $Platform Source platform of the image
     * @param string $ImageCreator Image creator
     * @param string $ImageSource Image source
     * @param integer $SyncPercent Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $IsSupportCloudinit Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
     * @param array $SnapshotSet Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
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

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ImageCreator",$param) and $param["ImageCreator"] !== null) {
            $this->ImageCreator = $param["ImageCreator"];
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("SyncPercent",$param) and $param["SyncPercent"] !== null) {
            $this->SyncPercent = $param["SyncPercent"];
        }

        if (array_key_exists("IsSupportCloudinit",$param) and $param["IsSupportCloudinit"] !== null) {
            $this->IsSupportCloudinit = $param["IsSupportCloudinit"];
        }

        if (array_key_exists("SnapshotSet",$param) and $param["SnapshotSet"] !== null) {
            $this->SnapshotSet = [];
            foreach ($param["SnapshotSet"] as $key => $value){
                $obj = new Snapshot();
                $obj->deserialize($value);
                array_push($this->SnapshotSet, $obj);
            }
        }
    }
}
