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
 * Image source information
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageOsName() Obtain System name
 * @method void setImageOsName(string $ImageOsName) Set System name
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method integer getRegionID() Obtain Region ID
 * @method void setRegionID(integer $RegionID) Set Region ID
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method string getInstanceName() Obtain Source instance name
 * @method void setInstanceName(string $InstanceName) Set Source instance name
 * @method string getInstanceId() Obtain Source instance ID
 * @method void setInstanceId(string $InstanceId) Set Source instance ID
 * @method string getImageType() Obtain Source image type
 * @method void setImageType(string $ImageType) Set Source image type
 */
class SrcImage extends AbstractModel
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
     * @var string System name
     */
    public $ImageOsName;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var integer Region ID
     */
    public $RegionID;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string Source instance name
     */
    public $InstanceName;

    /**
     * @var string Source instance ID
     */
    public $InstanceId;

    /**
     * @var string Source image type
     */
    public $ImageType;

    /**
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param string $ImageOsName System name
     * @param string $ImageDescription Image description
     * @param string $Region Region
     * @param integer $RegionID Region ID
     * @param string $RegionName Region name
     * @param string $InstanceName Source instance name
     * @param string $InstanceId Source instance ID
     * @param string $ImageType Source image type
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

        if (array_key_exists("ImageOsName",$param) and $param["ImageOsName"] !== null) {
            $this->ImageOsName = $param["ImageOsName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
