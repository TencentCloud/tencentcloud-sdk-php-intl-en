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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBusinessIntelligenceFile response structure.
 *
 * @method integer getTotalCount() Obtain Total number of file deployment tasks
 * @method void setTotalCount(integer $TotalCount) Set Total number of file deployment tasks
 * @method array getBackupMigrationSet() Obtain File deployment task set
 * @method void setBackupMigrationSet(array $BackupMigrationSet) Set File deployment task set
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBusinessIntelligenceFileResponse extends AbstractModel
{
    /**
     * @var integer Total number of file deployment tasks
     */
    public $TotalCount;

    /**
     * @var array File deployment task set
     */
    public $BackupMigrationSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of file deployment tasks
     * @param array $BackupMigrationSet File deployment task set
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

        if (array_key_exists("BackupMigrationSet",$param) and $param["BackupMigrationSet"] !== null) {
            $this->BackupMigrationSet = [];
            foreach ($param["BackupMigrationSet"] as $key => $value){
                $obj = new BusinessIntelligenceFile();
                $obj->deserialize($value);
                array_push($this->BackupMigrationSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
