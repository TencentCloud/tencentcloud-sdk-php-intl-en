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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusZones request structure.
 *
 * @method integer getRegionId() Obtain Region ID. You only need to specify the value of either `RegionId` or `RegionName`.
 * @method void setRegionId(integer $RegionId) Set Region ID. You only need to specify the value of either `RegionId` or `RegionName`.
 * @method string getRegionName() Obtain Region name. You only need to specify the value of either `RegionId` or `RegionName`.
 * @method void setRegionName(string $RegionName) Set Region name. You only need to specify the value of either `RegionId` or `RegionName`.
 */
class DescribePrometheusZonesRequest extends AbstractModel
{
    /**
     * @var integer Region ID. You only need to specify the value of either `RegionId` or `RegionName`.
     */
    public $RegionId;

    /**
     * @var string Region name. You only need to specify the value of either `RegionId` or `RegionName`.
     */
    public $RegionName;

    /**
     * @param integer $RegionId Region ID. You only need to specify the value of either `RegionId` or `RegionName`.
     * @param string $RegionName Region name. You only need to specify the value of either `RegionId` or `RegionName`.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
