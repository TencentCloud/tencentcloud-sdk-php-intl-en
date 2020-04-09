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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshots response structure.
 *
 * @method integer getTotalCount() Obtain Number of snapshots.
 * @method void setTotalCount(integer $TotalCount) Set Number of snapshots.
 * @method array getSnapshotSet() Obtain List of snapshot details.
 * @method void setSnapshotSet(array $SnapshotSet) Set List of snapshot details.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSnapshotsResponse extends AbstractModel
{
    /**
     * @var integer Number of snapshots.
     */
    public $TotalCount;

    /**
     * @var array List of snapshot details.
     */
    public $SnapshotSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of snapshots.
     * @param array $SnapshotSet List of snapshot details.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SnapshotSet",$param) and $param["SnapshotSet"] !== null) {
            $this->SnapshotSet = [];
            foreach ($param["SnapshotSet"] as $key => $value){
                $obj = new Snapshot();
                $obj->deserialize($value);
                array_push($this->SnapshotSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
