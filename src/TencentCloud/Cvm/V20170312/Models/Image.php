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
 * Details about an image, including its state and attributes.
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getOsName() Obtain Operating system of the image
 * @method void setOsName(string $OsName) Set Operating system of the image
 * @method string getImageType() Obtain Image type
 * @method void setImageType(string $ImageType) Set Image type
 * @method string getCreatedTime() Obtain Creation time of the image
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the image
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method integer getImageSize() Obtain Image size
 * @method void setImageSize(integer $ImageSize) Set Image size
 * @method string getArchitecture() Obtain Image architecture
 * @method void setArchitecture(string $Architecture) Set Image architecture
 * @method string getImageState() Obtain Image state
 * @method void setImageState(string $ImageState) Set Image state
 * @method string getPlatform() Obtain Source platform of the image
 * @method void setPlatform(string $Platform) Set Source platform of the image
 * @method string getImageCreator() Obtain Image creator
 * @method void setImageCreator(string $ImageCreator) Set Image creator
 * @method string getImageSource() Obtain Image source
 * @method void setImageSource(string $ImageSource) Set Image source
 * @method integer getSyncPercent() Obtain Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
 * @method void setSyncPercent(integer $SyncPercent) Set Synchronization percentage
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getIsSupportCloudinit() Obtain Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
 * @method void setIsSupportCloudinit(boolean $IsSupportCloudinit) Set Whether the image supports cloud-init
Note: This field may return null, indicating that no valid value is found.
 * @method array getSnapshotSet() Obtain Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
 * @method void setSnapshotSet(array $SnapshotSet) Set Information on the snapshots associated with the image
Note: This field may return null, indicating that no valid value is found.
 * @method array getTags() Obtain The list of tags bound to the image.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set The list of tags bound to the image.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getLicenseType() Obtain Image license type
 * @method void setLicenseType(string $LicenseType) Set Image license type
 * @method string getImageFamily() Obtain Image family, Note: This field may return empty
 * @method void setImageFamily(string $ImageFamily) Set Image family, Note: This field may return empty
 * @method boolean getImageDeprecated() Obtain Whether the image is deprecated
 * @method void setImageDeprecated(boolean $ImageDeprecated) Set Whether the image is deprecated
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
     * @var array The list of tags bound to the image.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Image license type
     */
    public $LicenseType;

    /**
     * @var string Image family, Note: This field may return empty
     */
    public $ImageFamily;

    /**
     * @var boolean Whether the image is deprecated
     */
    public $ImageDeprecated;

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
     * @param array $Tags The list of tags bound to the image.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $LicenseType Image license type
     * @param string $ImageFamily Image family, Note: This field may return empty
     * @param boolean $ImageDeprecated Whether the image is deprecated
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("ImageDeprecated",$param) and $param["ImageDeprecated"] !== null) {
            $this->ImageDeprecated = $param["ImageDeprecated"];
        }
    }
}
