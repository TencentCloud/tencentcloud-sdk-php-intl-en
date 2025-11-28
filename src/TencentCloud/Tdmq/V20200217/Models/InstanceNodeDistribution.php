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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of instance node distribution
 *
 * @method string getZoneName() Obtain AZ
 * @method void setZoneName(string $ZoneName) Set AZ
 * @method string getZoneId() Obtain AZ ID
 * @method void setZoneId(string $ZoneId) Set AZ ID
 * @method integer getNodeCount() Obtain Number of nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes
 * @method boolean getNodePermWipeFlag() Obtain This flag is true if there is a scheduling task with no switchback AZs.
 * @method void setNodePermWipeFlag(boolean $NodePermWipeFlag) Set This flag is true if there is a scheduling task with no switchback AZs.
 * @method string getZoneStatus() Obtain Availability zone status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneStatus(string $ZoneStatus) Set Availability zone status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceNodeDistribution extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $ZoneName;

    /**
     * @var string AZ ID
     */
    public $ZoneId;

    /**
     * @var integer Number of nodes
     */
    public $NodeCount;

    /**
     * @var boolean This flag is true if there is a scheduling task with no switchback AZs.
     */
    public $NodePermWipeFlag;

    /**
     * @var string Availability zone status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneStatus;

    /**
     * @param string $ZoneName AZ
     * @param string $ZoneId AZ ID
     * @param integer $NodeCount Number of nodes
     * @param boolean $NodePermWipeFlag This flag is true if there is a scheduling task with no switchback AZs.
     * @param string $ZoneStatus Availability zone status
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodePermWipeFlag",$param) and $param["NodePermWipeFlag"] !== null) {
            $this->NodePermWipeFlag = $param["NodePermWipeFlag"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }
    }
}
