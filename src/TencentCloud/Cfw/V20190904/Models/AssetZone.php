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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssetZone 
 *
 * @method string getZone() Obtain Region
 * @method void setZone(string $Zone) Set Region
 * @method string getZoneEng() Obtain Region
 * @method void setZoneEng(string $ZoneEng) Set Region
 */
class AssetZone extends AbstractModel
{
    /**
     * @var string Region
     */
    public $Zone;

    /**
     * @var string Region
     */
    public $ZoneEng;

    /**
     * @param string $Zone Region
     * @param string $ZoneEng Region
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneEng",$param) and $param["ZoneEng"] !== null) {
            $this->ZoneEng = $param["ZoneEng"];
        }
    }
}
