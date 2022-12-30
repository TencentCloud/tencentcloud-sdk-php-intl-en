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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource details
 *
 * @method string getInstanceType() Obtain The spec type, such as `S2.MEDIUM8`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set The spec type, such as `S2.MEDIUM8`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSystemDisk() Obtain The system disk, which can be up to 1 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDisk(array $SystemDisk) Set The system disk, which can be up to 1 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain The list of tags to be bound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set The list of tags to be bound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDataDisk() Obtain The cloud data disk, which can be up to 15 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisk(array $DataDisk) Set The cloud data disk, which can be up to 15 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLocalDataDisk() Obtain The local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDataDisk(array $LocalDataDisk) Set The local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeResourceSpec extends AbstractModel
{
    /**
     * @var string The spec type, such as `S2.MEDIUM8`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var array The system disk, which can be up to 1 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDisk;

    /**
     * @var array The list of tags to be bound.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array The cloud data disk, which can be up to 15 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisk;

    /**
     * @var array The local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDataDisk;

    /**
     * @param string $InstanceType The spec type, such as `S2.MEDIUM8`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SystemDisk The system disk, which can be up to 1 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags The list of tags to be bound.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DataDisk The cloud data disk, which can be up to 15 PCS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LocalDataDisk The local data disk.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = [];
            foreach ($param["SystemDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->SystemDisk, $obj);
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

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }

        if (array_key_exists("LocalDataDisk",$param) and $param["LocalDataDisk"] !== null) {
            $this->LocalDataDisk = [];
            foreach ($param["LocalDataDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->LocalDataDisk, $obj);
            }
        }
    }
}
