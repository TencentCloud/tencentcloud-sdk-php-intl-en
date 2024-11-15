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
 * Details of origin server group health status.
 *
 * @method string getOriginGroupId() Obtain Origin server group ID.
 * @method void setOriginGroupId(string $OriginGroupId) Set Origin server group ID.
 * @method array getOriginHealthStatus() Obtain The health status of each origin server in an origin server group, which is comprehensively decided based on the results of all detection regions. If more than half of the regions determine that the origin server is unhealthy, the corresponding status is unhealthy; otherwise, it is healthy.
 * @method void setOriginHealthStatus(array $OriginHealthStatus) Set The health status of each origin server in an origin server group, which is comprehensively decided based on the results of all detection regions. If more than half of the regions determine that the origin server is unhealthy, the corresponding status is unhealthy; otherwise, it is healthy.
 * @method array getCheckRegionHealthStatus() Obtain Health status of origin servers in each health check region.
 * @method void setCheckRegionHealthStatus(array $CheckRegionHealthStatus) Set Health status of origin servers in each health check region.
 */
class OriginGroupHealthStatusDetail extends AbstractModel
{
    /**
     * @var string Origin server group ID.
     */
    public $OriginGroupId;

    /**
     * @var array The health status of each origin server in an origin server group, which is comprehensively decided based on the results of all detection regions. If more than half of the regions determine that the origin server is unhealthy, the corresponding status is unhealthy; otherwise, it is healthy.
     */
    public $OriginHealthStatus;

    /**
     * @var array Health status of origin servers in each health check region.
     */
    public $CheckRegionHealthStatus;

    /**
     * @param string $OriginGroupId Origin server group ID.
     * @param array $OriginHealthStatus The health status of each origin server in an origin server group, which is comprehensively decided based on the results of all detection regions. If more than half of the regions determine that the origin server is unhealthy, the corresponding status is unhealthy; otherwise, it is healthy.
     * @param array $CheckRegionHealthStatus Health status of origin servers in each health check region.
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
        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }

        if (array_key_exists("CheckRegionHealthStatus",$param) and $param["CheckRegionHealthStatus"] !== null) {
            $this->CheckRegionHealthStatus = [];
            foreach ($param["CheckRegionHealthStatus"] as $key => $value){
                $obj = new CheckRegionHealthStatus();
                $obj->deserialize($value);
                array_push($this->CheckRegionHealthStatus, $obj);
            }
        }
    }
}
