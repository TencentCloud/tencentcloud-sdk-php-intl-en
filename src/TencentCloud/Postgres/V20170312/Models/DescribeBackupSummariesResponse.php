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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupSummaries response structure.
 *
 * @method array getBackupSummarySet() Obtain Backup statistics list.
 * @method void setBackupSummarySet(array $BackupSummarySet) Set Backup statistics list.
 * @method integer getTotalCount() Obtain Number of all queried backups.
 * @method void setTotalCount(integer $TotalCount) Set Number of all queried backups.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBackupSummariesResponse extends AbstractModel
{
    /**
     * @var array Backup statistics list.
     */
    public $BackupSummarySet;

    /**
     * @var integer Number of all queried backups.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $BackupSummarySet Backup statistics list.
     * @param integer $TotalCount Number of all queried backups.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("BackupSummarySet",$param) and $param["BackupSummarySet"] !== null) {
            $this->BackupSummarySet = [];
            foreach ($param["BackupSummarySet"] as $key => $value){
                $obj = new BackupSummary();
                $obj->deserialize($value);
                array_push($this->BackupSummarySet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
