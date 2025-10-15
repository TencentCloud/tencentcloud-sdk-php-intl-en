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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed configuration of the Alarm rule.
 *
 * @method integer getTrigger() Obtain Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
 * @method void setTrigger(integer $Trigger) Set Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
 * @method integer getDataBackfillOrRerunTrigger() Obtain Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
 * @method void setDataBackfillOrRerunTrigger(integer $DataBackfillOrRerunTrigger) Set Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
 * @method array getTimeOutExtInfo() Obtain Timeout configuration of the periodic instance.

 * @method void setTimeOutExtInfo(array $TimeOutExtInfo) Set Timeout configuration of the periodic instance.

 * @method array getDataBackfillOrRerunTimeOutExtInfo() Obtain Specifies the timeout configuration details for rerunning a backfill instance.

 * @method void setDataBackfillOrRerunTimeOutExtInfo(array $DataBackfillOrRerunTimeOutExtInfo) Set Specifies the timeout configuration details for rerunning a backfill instance.

 * @method array getProjectInstanceStatisticsAlarmInfoList() Obtain Specifies the detail of Alarm configuration for project fluctuation.
 * @method void setProjectInstanceStatisticsAlarmInfoList(array $ProjectInstanceStatisticsAlarmInfoList) Set Specifies the detail of Alarm configuration for project fluctuation.
 * @method array getReconciliationExtInfo() Obtain Describes the Alarm configuration information for offline integration reconciliation.
 * @method void setReconciliationExtInfo(array $ReconciliationExtInfo) Set Describes the Alarm configuration information for offline integration reconciliation.
 */
class AlarmRuleDetail extends AbstractModel
{
    /**
     * @var integer Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
     */
    public $Trigger;

    /**
     * @var integer Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
     */
    public $DataBackfillOrRerunTrigger;

    /**
     * @var array Timeout configuration of the periodic instance.

     */
    public $TimeOutExtInfo;

    /**
     * @var array Specifies the timeout configuration details for rerunning a backfill instance.

     */
    public $DataBackfillOrRerunTimeOutExtInfo;

    /**
     * @var array Specifies the detail of Alarm configuration for project fluctuation.
     */
    public $ProjectInstanceStatisticsAlarmInfoList;

    /**
     * @var array Describes the Alarm configuration information for offline integration reconciliation.
     */
    public $ReconciliationExtInfo;

    /**
     * @param integer $Trigger Failure Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed (default)
     * @param integer $DataBackfillOrRerunTrigger Backfill/Rerun Trigger Condition

1: Trigger on the first failure

2: Trigger after all retries are completed
     * @param array $TimeOutExtInfo Timeout configuration of the periodic instance.

     * @param array $DataBackfillOrRerunTimeOutExtInfo Specifies the timeout configuration details for rerunning a backfill instance.

     * @param array $ProjectInstanceStatisticsAlarmInfoList Specifies the detail of Alarm configuration for project fluctuation.
     * @param array $ReconciliationExtInfo Describes the Alarm configuration information for offline integration reconciliation.
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
        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = $param["Trigger"];
        }

        if (array_key_exists("DataBackfillOrRerunTrigger",$param) and $param["DataBackfillOrRerunTrigger"] !== null) {
            $this->DataBackfillOrRerunTrigger = $param["DataBackfillOrRerunTrigger"];
        }

        if (array_key_exists("TimeOutExtInfo",$param) and $param["TimeOutExtInfo"] !== null) {
            $this->TimeOutExtInfo = [];
            foreach ($param["TimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->TimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("DataBackfillOrRerunTimeOutExtInfo",$param) and $param["DataBackfillOrRerunTimeOutExtInfo"] !== null) {
            $this->DataBackfillOrRerunTimeOutExtInfo = [];
            foreach ($param["DataBackfillOrRerunTimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->DataBackfillOrRerunTimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("ProjectInstanceStatisticsAlarmInfoList",$param) and $param["ProjectInstanceStatisticsAlarmInfoList"] !== null) {
            $this->ProjectInstanceStatisticsAlarmInfoList = [];
            foreach ($param["ProjectInstanceStatisticsAlarmInfoList"] as $key => $value){
                $obj = new ProjectInstanceStatisticsAlarmInfo();
                $obj->deserialize($value);
                array_push($this->ProjectInstanceStatisticsAlarmInfoList, $obj);
            }
        }

        if (array_key_exists("ReconciliationExtInfo",$param) and $param["ReconciliationExtInfo"] !== null) {
            $this->ReconciliationExtInfo = [];
            foreach ($param["ReconciliationExtInfo"] as $key => $value){
                $obj = new ReconciliationStrategyInfo();
                $obj->deserialize($value);
                array_push($this->ReconciliationExtInfo, $obj);
            }
        }
    }
}
