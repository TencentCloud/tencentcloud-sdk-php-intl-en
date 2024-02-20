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
 * DescribeIPRegion request structure.
 *
 * @method array getIPs() Obtain List of IPs to be queried, supporting IPV4 and IPV6. Up to 100 can be queried.
 * @method void setIPs(array $IPs) Set List of IPs to be queried, supporting IPV4 and IPV6. Up to 100 can be queried.
 */
class DescribeIPRegionRequest extends AbstractModel
{
    /**
     * @var array List of IPs to be queried, supporting IPV4 and IPV6. Up to 100 can be queried.
     */
    public $IPs;

    /**
     * @param array $IPs List of IPs to be queried, supporting IPV4 and IPV6. Up to 100 can be queried.
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
        if (array_key_exists("IPs",$param) and $param["IPs"] !== null) {
            $this->IPs = $param["IPs"];
        }
    }
}
