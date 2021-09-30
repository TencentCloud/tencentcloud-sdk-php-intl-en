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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information.
 *
 * @method string getRegion() Obtain Region name, such as `ap-guangzhou`.
 * @method void setRegion(string $Region) Set Region name, such as `ap-guangzhou`.
 * @method string getRegionName() Obtain Region description, such as South China (Guangzhou).
 * @method void setRegionName(string $RegionName) Set Region description, such as South China (Guangzhou).
 * @method string getRegionState() Obtain Region availability status. Its value can only be `AVAILABLE`.
 * @method void setRegionState(string $RegionState) Set Region availability status. Its value can only be `AVAILABLE`.
 * @method boolean getIsChinaMainland() Obtain Whether the region is in the Chinese mainland
 * @method void setIsChinaMainland(boolean $IsChinaMainland) Set Whether the region is in the Chinese mainland
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region name, such as `ap-guangzhou`.
     */
    public $Region;

    /**
     * @var string Region description, such as South China (Guangzhou).
     */
    public $RegionName;

    /**
     * @var string Region availability status. Its value can only be `AVAILABLE`.
     */
    public $RegionState;

    /**
     * @var boolean Whether the region is in the Chinese mainland
     */
    public $IsChinaMainland;

    /**
     * @param string $Region Region name, such as `ap-guangzhou`.
     * @param string $RegionName Region description, such as South China (Guangzhou).
     * @param string $RegionState Region availability status. Its value can only be `AVAILABLE`.
     * @param boolean $IsChinaMainland Whether the region is in the Chinese mainland
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("IsChinaMainland",$param) and $param["IsChinaMainland"] !== null) {
            $this->IsChinaMainland = $param["IsChinaMainland"];
        }
    }
}
