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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotOperationLogs request structure.
 *
 * @method string getSnapshotId() Obtain Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
 * @method string getStartTime() Obtain Start time, format "YYYY-MM-DD hh:MM:ss".
 * @method void setStartTime(string $StartTime) Set Start time, format "YYYY-MM-DD hh:MM:ss".
 * @method string getEndTime() Obtain End time, format "YYYY-MM-DD hh:MM:ss".
 * @method void setEndTime(string $EndTime) Set End time, format "YYYY-MM-DD hh:MM:ss".
 */
class DescribeSnapshotOperationLogsRequest extends AbstractModel
{
    /**
     * @var string Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
     */
    public $SnapshotId;

    /**
     * @var string Start time, format "YYYY-MM-DD hh:MM:ss".
     */
    public $StartTime;

    /**
     * @var string End time, format "YYYY-MM-DD hh:MM:ss".
     */
    public $EndTime;

    /**
     * @param string $SnapshotId Snapshot ID, which can be obtained by querying through the [DescribeCfsSnapshots](https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1) api.
     * @param string $StartTime Start time, format "YYYY-MM-DD hh:MM:ss".
     * @param string $EndTime End time, format "YYYY-MM-DD hh:MM:ss".
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
