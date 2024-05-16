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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis region return complex type
 *
 * @method string getRegionId() Obtain Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(string $RegionId) Set Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionName() Obtain Region nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionName(string $RegionName) Set Region nameNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseRegionDetail extends AbstractModel
{
    /**
     * @var string Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var string Region nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionName;

    /**
     * @param string $RegionId Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionName Region nameNote: This field may return null, indicating that no valid values can be obtained.
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
