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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mounting configuration of the CVM instance data disk
 *
 * @method string getInstanceType() Obtain CVM instance type
 * @method void setInstanceType(string $InstanceType) Set CVM instance type
 * @method array getDataDisks() Obtain Data disk mounting information
 * @method void setDataDisks(array $DataDisks) Set Data disk mounting information
 * @method string getZone() Obtain Availability zone where the CVM instance is located
 * @method void setZone(string $Zone) Set Availability zone where the CVM instance is located
 */
class InstanceDataDiskMountSetting extends AbstractModel
{
    /**
     * @var string CVM instance type
     */
    public $InstanceType;

    /**
     * @var array Data disk mounting information
     */
    public $DataDisks;

    /**
     * @var string Availability zone where the CVM instance is located
     */
    public $Zone;

    /**
     * @param string $InstanceType CVM instance type
     * @param array $DataDisks Data disk mounting information
     * @param string $Zone Availability zone where the CVM instance is located
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

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
