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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information.
 *
 * @method string getRegion() Obtain Region name, such as `ap-guangzhou`
 * @method void setRegion(string $Region) Set Region name, such as `ap-guangzhou`
 * @method string getRegionName() Obtain Region description, such as South China (Guangzhou)
 * @method void setRegionName(string $RegionName) Set Region description, such as South China (Guangzhou)
 * @method string getRegionState() Obtain Whether the region is available
 * @method void setRegionState(string $RegionState) Set Whether the region is available
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region name, such as `ap-guangzhou`
     */
    public $Region;

    /**
     * @var string Region description, such as South China (Guangzhou)
     */
    public $RegionName;

    /**
     * @var string Whether the region is available
     */
    public $RegionState;

    /**
     * @param string $Region Region name, such as `ap-guangzhou`
     * @param string $RegionName Region description, such as South China (Guangzhou)
     * @param string $RegionState Whether the region is available
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
    }
}
