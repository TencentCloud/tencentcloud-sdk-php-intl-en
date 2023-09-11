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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region of associated cloud resources
 *
 * @method string getRegion() Obtain The region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set The region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain The total number of associated cloud resources.
 * @method void setTotalCount(integer $TotalCount) Set The total number of associated cloud resources.
 */
class BindResourceRegionResult extends AbstractModel
{
    /**
     * @var string The region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer The total number of associated cloud resources.
     */
    public $TotalCount;

    /**
     * @param string $Region The region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount The total number of associated cloud resources.
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

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
