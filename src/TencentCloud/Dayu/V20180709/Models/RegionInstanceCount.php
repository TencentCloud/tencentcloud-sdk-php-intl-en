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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Number of resource instances in region
 *
 * @method string getRegion() Obtain Region code
 * @method void setRegion(string $Region) Set Region code
 * @method string getRegionV3() Obtain Region code (new specification)
 * @method void setRegionV3(string $RegionV3) Set Region code (new specification)
 * @method integer getCount() Obtain Number of resource instances
 * @method void setCount(integer $Count) Set Number of resource instances
 */
class RegionInstanceCount extends AbstractModel
{
    /**
     * @var string Region code
     */
    public $Region;

    /**
     * @var string Region code (new specification)
     */
    public $RegionV3;

    /**
     * @var integer Number of resource instances
     */
    public $Count;

    /**
     * @param string $Region Region code
     * @param string $RegionV3 Region code (new specification)
     * @param integer $Count Number of resource instances
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

        if (array_key_exists("RegionV3",$param) and $param["RegionV3"] !== null) {
            $this->RegionV3 = $param["RegionV3"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
