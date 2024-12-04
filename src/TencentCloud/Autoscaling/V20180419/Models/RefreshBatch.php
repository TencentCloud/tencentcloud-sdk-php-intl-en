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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance refresh batch information, containing the refresh status, instances, start and end time, etc., of the batch.
 *
 * @method integer getRefreshBatchNum() Obtain Refresh batch number. For example, a value of 2 indicates that the current batch of instances will be refreshed in the second batch.
 * @method void setRefreshBatchNum(integer $RefreshBatchNum) Set Refresh batch number. For example, a value of 2 indicates that the current batch of instances will be refreshed in the second batch.
 * @method string getRefreshBatchStatus() Obtain Refresh batch status. Valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh failed;</li> <li>PARTIALLY_SUCCESSFUL: partially successful in the batch;</li> <li>CANCELLED: cancelled;</li> <li>SUCCESSFUL: refresh successful.</li>
 * @method void setRefreshBatchStatus(string $RefreshBatchStatus) Set Refresh batch status. Valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh failed;</li> <li>PARTIALLY_SUCCESSFUL: partially successful in the batch;</li> <li>CANCELLED: cancelled;</li> <li>SUCCESSFUL: refresh successful.</li>
 * @method array getRefreshBatchRelatedInstanceSet() Obtain List of instances linked to a refresh batch.
 * @method void setRefreshBatchRelatedInstanceSet(array $RefreshBatchRelatedInstanceSet) Set List of instances linked to a refresh batch.
 * @method string getStartTime() Obtain Refresh batch start time.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Refresh batch start time.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain Refresh batch end time.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set Refresh batch end time.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RefreshBatch extends AbstractModel
{
    /**
     * @var integer Refresh batch number. For example, a value of 2 indicates that the current batch of instances will be refreshed in the second batch.
     */
    public $RefreshBatchNum;

    /**
     * @var string Refresh batch status. Valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh failed;</li> <li>PARTIALLY_SUCCESSFUL: partially successful in the batch;</li> <li>CANCELLED: cancelled;</li> <li>SUCCESSFUL: refresh successful.</li>
     */
    public $RefreshBatchStatus;

    /**
     * @var array List of instances linked to a refresh batch.
     */
    public $RefreshBatchRelatedInstanceSet;

    /**
     * @var string Refresh batch start time.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Refresh batch end time.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param integer $RefreshBatchNum Refresh batch number. For example, a value of 2 indicates that the current batch of instances will be refreshed in the second batch.
     * @param string $RefreshBatchStatus Refresh batch status. Valid values: <li>WAITING: pending refresh;</li> <li>INIT: initializing;</li> <li>RUNNING: refreshing;</li> <li>FAILED: refresh failed;</li> <li>PARTIALLY_SUCCESSFUL: partially successful in the batch;</li> <li>CANCELLED: cancelled;</li> <li>SUCCESSFUL: refresh successful.</li>
     * @param array $RefreshBatchRelatedInstanceSet List of instances linked to a refresh batch.
     * @param string $StartTime Refresh batch start time.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime Refresh batch end time.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RefreshBatchNum",$param) and $param["RefreshBatchNum"] !== null) {
            $this->RefreshBatchNum = $param["RefreshBatchNum"];
        }

        if (array_key_exists("RefreshBatchStatus",$param) and $param["RefreshBatchStatus"] !== null) {
            $this->RefreshBatchStatus = $param["RefreshBatchStatus"];
        }

        if (array_key_exists("RefreshBatchRelatedInstanceSet",$param) and $param["RefreshBatchRelatedInstanceSet"] !== null) {
            $this->RefreshBatchRelatedInstanceSet = [];
            foreach ($param["RefreshBatchRelatedInstanceSet"] as $key => $value){
                $obj = new RefreshBatchRelatedInstance();
                $obj->deserialize($value);
                array_push($this->RefreshBatchRelatedInstanceSet, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
