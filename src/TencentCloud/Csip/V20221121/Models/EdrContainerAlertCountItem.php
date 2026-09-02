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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Group statistics item for container alarms (only TotalCount is returned, without splitting by major category of alarm)
 *
 * @method string getClusterId() Obtain <p>Cluster ID (has a value when grouping by cluster, otherwise empty string)</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID (has a value when grouping by cluster, otherwise empty string)</p>
 * @method string getContainerId() Obtain <p>Container ID (has a value when grouped by container; otherwise, empty string)</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container ID (has a value when grouped by container; otherwise, empty string)</p>
 * @method integer getTotalCount() Obtain <p>Total number of alarms for the cluster/container</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of alarms for the cluster/container</p>
 */
class EdrContainerAlertCountItem extends AbstractModel
{
    /**
     * @var string <p>Cluster ID (has a value when grouping by cluster, otherwise empty string)</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Container ID (has a value when grouped by container; otherwise, empty string)</p>
     */
    public $ContainerId;

    /**
     * @var integer <p>Total number of alarms for the cluster/container</p>
     */
    public $TotalCount;

    /**
     * @param string $ClusterId <p>Cluster ID (has a value when grouping by cluster, otherwise empty string)</p>
     * @param string $ContainerId <p>Container ID (has a value when grouped by container; otherwise, empty string)</p>
     * @param integer $TotalCount <p>Total number of alarms for the cluster/container</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
