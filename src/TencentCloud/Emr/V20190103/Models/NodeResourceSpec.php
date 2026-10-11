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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource details.
 *
 * @method string getInstanceType() Obtain <p>Specifications type, such as S2.MEDIUM8.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Specifications type, such as S2.MEDIUM8.</p>
 * @method array getSystemDisk() Obtain <p>System disk. The number of system disks does not exceed 1.</p>
 * @method void setSystemDisk(array $SystemDisk) Set <p>System disk. The number of system disks does not exceed 1.</p>
 * @method array getTags() Obtain <p>List of tags to be bound.</p>
 * @method void setTags(array $Tags) Set <p>List of tags to be bound.</p>
 * @method array getDataDisk() Obtain <p>Cloud data disk. The total number of cloud data disks does not exceed 15.</p>
 * @method void setDataDisk(array $DataDisk) Set <p>Cloud data disk. The total number of cloud data disks does not exceed 15.</p>
 * @method array getLocalDataDisk() Obtain <p>Local data disk.</p>
 * @method void setLocalDataDisk(array $LocalDataDisk) Set <p>Local data disk.</p>
 * @method array getSoftwareConfig() Obtain <p>Node configuration information. Currently provided only for the Terraform platform to validate parameters.</p>
 * @method void setSoftwareConfig(array $SoftwareConfig) Set <p>Node configuration information. Currently provided only for the Terraform platform to validate parameters.</p>
 * @method string getCustomNodeName() Obtain <p>Custom hostname.</p>
 * @method void setCustomNodeName(string $CustomNodeName) Set <p>Custom hostname.</p>
 */
class NodeResourceSpec extends AbstractModel
{
    /**
     * @var string <p>Specifications type, such as S2.MEDIUM8.</p>
     */
    public $InstanceType;

    /**
     * @var array <p>System disk. The number of system disks does not exceed 1.</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>List of tags to be bound.</p>
     */
    public $Tags;

    /**
     * @var array <p>Cloud data disk. The total number of cloud data disks does not exceed 15.</p>
     */
    public $DataDisk;

    /**
     * @var array <p>Local data disk.</p>
     */
    public $LocalDataDisk;

    /**
     * @var array <p>Node configuration information. Currently provided only for the Terraform platform to validate parameters.</p>
     */
    public $SoftwareConfig;

    /**
     * @var string <p>Custom hostname.</p>
     */
    public $CustomNodeName;

    /**
     * @param string $InstanceType <p>Specifications type, such as S2.MEDIUM8.</p>
     * @param array $SystemDisk <p>System disk. The number of system disks does not exceed 1.</p>
     * @param array $Tags <p>List of tags to be bound.</p>
     * @param array $DataDisk <p>Cloud data disk. The total number of cloud data disks does not exceed 15.</p>
     * @param array $LocalDataDisk <p>Local data disk.</p>
     * @param array $SoftwareConfig <p>Node configuration information. Currently provided only for the Terraform platform to validate parameters.</p>
     * @param string $CustomNodeName <p>Custom hostname.</p>
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

        if (array_key_exists("SoftwareConfig",$param) and $param["SoftwareConfig"] !== null) {
            $this->SoftwareConfig = [];
            foreach ($param["SoftwareConfig"] as $key => $value){
                $obj = new ServiceDeploy();
                $obj->deserialize($value);
                array_push($this->SoftwareConfig, $obj);
            }
        }

        if (array_key_exists("CustomNodeName",$param) and $param["CustomNodeName"] !== null) {
            $this->CustomNodeName = $param["CustomNodeName"];
        }
    }
}
