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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS regional blocking
 *
 * @method string getSwitch() Obtain Whether to clear the blocklist of the region. Values:
<li>`off`: Clear the blocklist of the region.</li>
<li>`on`: Perform no operations.</li>
 * @method void setSwitch(string $Switch) Set Whether to clear the blocklist of the region. Values:
<li>`off`: Clear the blocklist of the region.</li>
<li>`on`: Perform no operations.</li>
 * @method array getRegionIds() Obtain Region information. For more information on the ID, see [DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/81247?!preview&!document=1).
 * @method void setRegionIds(array $RegionIds) Set Region information. For more information on the ID, see [DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/81247?!preview&!document=1).
 */
class DDoSGeoIp extends AbstractModel
{
    /**
     * @var string Whether to clear the blocklist of the region. Values:
<li>`off`: Clear the blocklist of the region.</li>
<li>`on`: Perform no operations.</li>
     */
    public $Switch;

    /**
     * @var array Region information. For more information on the ID, see [DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/81247?!preview&!document=1).
     */
    public $RegionIds;

    /**
     * @param string $Switch Whether to clear the blocklist of the region. Values:
<li>`off`: Clear the blocklist of the region.</li>
<li>`on`: Perform no operations.</li>
     * @param array $RegionIds Region information. For more information on the ID, see [DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/81247?!preview&!document=1).
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }
    }
}
