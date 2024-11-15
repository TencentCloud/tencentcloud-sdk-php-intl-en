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
 * DescribeOriginGroupHealthStatus request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getLBInstanceId() Obtain CLB instance ID.
 * @method void setLBInstanceId(string $LBInstanceId) Set CLB instance ID.
 * @method array getOriginGroupIds() Obtain Origin server group ID. If left empty, the health status of all origin server groups under a LoadBalancer is obtained by default.
 * @method void setOriginGroupIds(array $OriginGroupIds) Set Origin server group ID. If left empty, the health status of all origin server groups under a LoadBalancer is obtained by default.
 */
class DescribeOriginGroupHealthStatusRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string CLB instance ID.
     */
    public $LBInstanceId;

    /**
     * @var array Origin server group ID. If left empty, the health status of all origin server groups under a LoadBalancer is obtained by default.
     */
    public $OriginGroupIds;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $LBInstanceId CLB instance ID.
     * @param array $OriginGroupIds Origin server group ID. If left empty, the health status of all origin server groups under a LoadBalancer is obtained by default.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LBInstanceId",$param) and $param["LBInstanceId"] !== null) {
            $this->LBInstanceId = $param["LBInstanceId"];
        }

        if (array_key_exists("OriginGroupIds",$param) and $param["OriginGroupIds"] !== null) {
            $this->OriginGroupIds = $param["OriginGroupIds"];
        }
    }
}
