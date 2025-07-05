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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePackageDetail request structure.
 *
 * @method string getPackageId() Obtain The unique ID of a resource pack
 * @method void setPackageId(string $PackageId) Set The unique ID of a resource pack
 * @method array getClusterIds() Obtain Cluster ID
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getOffset() Obtain Offset
 * @method void setOffset(string $Offset) Set Offset
 * @method string getLimit() Obtain Limit
 * @method void setLimit(string $Limit) Set Limit
 * @method array getInstanceIds() Obtain Instance D
 * @method void setInstanceIds(array $InstanceIds) Set Instance D
 */
class DescribeResourcePackageDetailRequest extends AbstractModel
{
    /**
     * @var string The unique ID of a resource pack
     */
    public $PackageId;

    /**
     * @var array Cluster ID
     */
    public $ClusterIds;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Offset
     */
    public $Offset;

    /**
     * @var string Limit
     */
    public $Limit;

    /**
     * @var array Instance D
     */
    public $InstanceIds;

    /**
     * @param string $PackageId The unique ID of a resource pack
     * @param array $ClusterIds Cluster ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $Offset Offset
     * @param string $Limit Limit
     * @param array $InstanceIds Instance D
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
