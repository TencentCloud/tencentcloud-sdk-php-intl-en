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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk partition information
 *
 * @method string getName() Obtain <p>Partition name</p>
 * @method void setName(string $Name) Set <p>Partition name</p>
 * @method string getPath() Obtain <p>Mount path</p>
 * @method void setPath(string $Path) Set <p>Mount path</p>
 * @method float getPercent() Obtain <p>Usage percentage</p>
 * @method void setPercent(float $Percent) Set <p>Usage percentage</p>
 * @method integer getSize() Obtain <p>Partition size (MB)</p>
 * @method void setSize(integer $Size) Set <p>Partition size (MB)</p>
 * @method string getType() Obtain <p>Partition type</p>
 * @method void setType(string $Type) Set <p>Partition type</p>
 * @method integer getUsed() Obtain <p>Used (MB)</p>
 * @method void setUsed(integer $Used) Set <p>Used (MB)</p>
 */
class DiskPartitionInfo extends AbstractModel
{
    /**
     * @var string <p>Partition name</p>
     */
    public $Name;

    /**
     * @var string <p>Mount path</p>
     */
    public $Path;

    /**
     * @var float <p>Usage percentage</p>
     */
    public $Percent;

    /**
     * @var integer <p>Partition size (MB)</p>
     */
    public $Size;

    /**
     * @var string <p>Partition type</p>
     */
    public $Type;

    /**
     * @var integer <p>Used (MB)</p>
     */
    public $Used;

    /**
     * @param string $Name <p>Partition name</p>
     * @param string $Path <p>Mount path</p>
     * @param float $Percent <p>Usage percentage</p>
     * @param integer $Size <p>Partition size (MB)</p>
     * @param string $Type <p>Partition type</p>
     * @param integer $Used <p>Used (MB)</p>
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
