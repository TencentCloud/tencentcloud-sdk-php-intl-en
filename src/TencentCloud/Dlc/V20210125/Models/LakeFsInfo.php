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
     * @param string $Name Managed storage name
     * @param string $Type Managed storage type
     * @param float $SpaceUsedSize Capacity
     * @param integer $CreateTimeStamp Timestamp of the creation time
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
    }
}
