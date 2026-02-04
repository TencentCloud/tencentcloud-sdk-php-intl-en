<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrors request structure.
 *
 * @method array getTrafficMirrorIds() Obtain Collection of traffic mirroring instance IDs.
 * @method void setTrafficMirrorIds(array $TrafficMirrorIds) Set Collection of traffic mirroring instance IDs.
 * @method Filter getFilters() Obtain Traffic mirroring query filtering and adjustment.
vpc-id: VPC instance ID, for example: vpc-f49l6u0z.
traffic-mirror-id: traffic mirroring instance ID.
Traffic-Mirror-Name: traffic mirroring name.
tag-key: filters according to the tag key.
 * @method void setFilters(Filter $Filters) Set Traffic mirroring query filtering and adjustment.
vpc-id: VPC instance ID, for example: vpc-f49l6u0z.
traffic-mirror-id: traffic mirroring instance ID.
Traffic-Mirror-Name: traffic mirroring name.
tag-key: filters according to the tag key.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returns. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returns. Default value: 20. Maximum value: 100.
 */
class DescribeTrafficMirrorsRequest extends AbstractModel
{
    /**
     * @var array Collection of traffic mirroring instance IDs.
     */
    public $TrafficMirrorIds;

    /**
     * @var Filter Traffic mirroring query filtering and adjustment.
vpc-id: VPC instance ID, for example: vpc-f49l6u0z.
traffic-mirror-id: traffic mirroring instance ID.
Traffic-Mirror-Name: traffic mirroring name.
tag-key: filters according to the tag key.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $TrafficMirrorIds Collection of traffic mirroring instance IDs.
     * @param Filter $Filters Traffic mirroring query filtering and adjustment.
vpc-id: VPC instance ID, for example: vpc-f49l6u0z.
traffic-mirror-id: traffic mirroring instance ID.
Traffic-Mirror-Name: traffic mirroring name.
tag-key: filters according to the tag key.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returns. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("TrafficMirrorIds",$param) and $param["TrafficMirrorIds"] !== null) {
            $this->TrafficMirrorIds = $param["TrafficMirrorIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
