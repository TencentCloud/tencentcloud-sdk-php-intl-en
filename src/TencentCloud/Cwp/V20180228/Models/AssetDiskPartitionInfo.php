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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset management disk partition information
 *
 * @method string getName() Obtain Partition name
 * @method void setName(string $Name) Set Partition name
 * @method integer getSize() Obtain Partition size (unit: G)
 * @method void setSize(integer $Size) Set Partition size (unit: G)
 * @method float getPercent() Obtain Partition utilization
 * @method void setPercent(float $Percent) Set Partition utilization
 * @method string getType() Obtain File system type
 * @method void setType(string $Type) Set File system type
 * @method string getPath() Obtain Mounting directory
 * @method void setPath(string $Path) Set Mounting directory
 * @method integer getUsed() Obtain Used space (unit: G)
 * @method void setUsed(integer $Used) Set Used space (unit: G)
 */
class AssetDiskPartitionInfo extends AbstractModel
{
    /**
     * @var string Partition name
     */
    public $Name;

    /**
     * @var integer Partition size (unit: G)
     */
    public $Size;

    /**
     * @var float Partition utilization
     */
    public $Percent;

    /**
     * @var string File system type
     */
    public $Type;

    /**
     * @var string Mounting directory
     */
    public $Path;

    /**
     * @var integer Used space (unit: G)
     */
    public $Used;

    /**
     * @param string $Name Partition name
     * @param integer $Size Partition size (unit: G)
     * @param float $Percent Partition utilization
     * @param string $Type File system type
     * @param string $Path Mounting directory
     * @param integer $Used Used space (unit: G)
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
