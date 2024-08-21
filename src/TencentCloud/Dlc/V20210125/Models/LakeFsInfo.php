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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describe basic information about DLC managed storage
 *
 * @method string getName() Obtain Managed storage name
 * @method void setName(string $Name) Set Managed storage name
 * @method string getType() Obtain Managed storage type
 * @method void setType(string $Type) Set Managed storage type
 * @method float getSpaceUsedSize() Obtain Capacity
 * @method void setSpaceUsedSize(float $SpaceUsedSize) Set Capacity
 * @method integer getCreateTimeStamp() Obtain Timestamp of the creation time
 * @method void setCreateTimeStamp(integer $CreateTimeStamp) Set Timestamp of the creation time
 * @method integer getDefaultBucket() Obtain Whether it is the user's default bucket: 0: default bucket, 1: non-default bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultBucket(integer $DefaultBucket) Set Whether it is the user's default bucket: 0: default bucket, 1: non-default bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShortName() Obtain Managed storage short name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShortName(string $ShortName) Set Managed storage short name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description information of the bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description information of the bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The status of the managed bucket. Current values: creating, bind, readOnly, and isolate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set The status of the managed bucket. Current values: creating, bind, readOnly, and isolate
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LakeFsInfo extends AbstractModel
{
    /**
     * @var string Managed storage name
     */
    public $Name;

    /**
     * @var string Managed storage type
     */
    public $Type;

    /**
     * @var float Capacity
     */
    public $SpaceUsedSize;

    /**
     * @var integer Timestamp of the creation time
     */
    public $CreateTimeStamp;

    /**
     * @var integer Whether it is the user's default bucket: 0: default bucket, 1: non-default bucket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultBucket;

    /**
     * @var string Managed storage short name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShortName;

    /**
     * @var string Description information of the bucket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string The status of the managed bucket. Current values: creating, bind, readOnly, and isolate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $Name Managed storage name
     * @param string $Type Managed storage type
     * @param float $SpaceUsedSize Capacity
     * @param integer $CreateTimeStamp Timestamp of the creation time
     * @param integer $DefaultBucket Whether it is the user's default bucket: 0: default bucket, 1: non-default bucket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShortName Managed storage short name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description information of the bucket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status The status of the managed bucket. Current values: creating, bind, readOnly, and isolate
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SpaceUsedSize",$param) and $param["SpaceUsedSize"] !== null) {
            $this->SpaceUsedSize = $param["SpaceUsedSize"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("DefaultBucket",$param) and $param["DefaultBucket"] !== null) {
            $this->DefaultBucket = $param["DefaultBucket"];
        }

        if (array_key_exists("ShortName",$param) and $param["ShortName"] !== null) {
            $this->ShortName = $param["ShortName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
