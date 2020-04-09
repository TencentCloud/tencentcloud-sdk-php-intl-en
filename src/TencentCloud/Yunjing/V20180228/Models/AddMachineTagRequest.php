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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddMachineTag request structure.
 *
 * @method string getQuuid() Obtain Server ID
 * @method void setQuuid(string $Quuid) Set Server ID
 * @method integer getTagId() Obtain Tag ID
 * @method void setTagId(integer $TagId) Set Tag ID
 * @method string getMRegion() Obtain Server region
 * @method void setMRegion(string $MRegion) Set Server region
 * @method string getMArea() Obtain Server type (`CVM` or `BM`)
 * @method void setMArea(string $MArea) Set Server type (`CVM` or `BM`)
 */
class AddMachineTagRequest extends AbstractModel
{
    /**
     * @var string Server ID
     */
    public $Quuid;

    /**
     * @var integer Tag ID
     */
    public $TagId;

    /**
     * @var string Server region
     */
    public $MRegion;

    /**
     * @var string Server type (`CVM` or `BM`)
     */
    public $MArea;

    /**
     * @param string $Quuid Server ID
     * @param integer $TagId Tag ID
     * @param string $MRegion Server region
     * @param string $MArea Server type (`CVM` or `BM`)
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("MRegion",$param) and $param["MRegion"] !== null) {
            $this->MRegion = $param["MRegion"];
        }

        if (array_key_exists("MArea",$param) and $param["MArea"] !== null) {
            $this->MArea = $param["MArea"];
        }
    }
}
