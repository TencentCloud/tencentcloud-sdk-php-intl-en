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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot Expiration Governance Item
 *
 * @method string getExpiredSnapshotsEnable() Obtain Whether to enable snapshot expiration governance: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExpiredSnapshotsEnable(string $ExpiredSnapshotsEnable) Set Whether to enable snapshot expiration governance: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngine() Obtain Name of the engine used to run snapshot expiration governance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngine(string $Engine) Set Name of the engine used to run snapshot expiration governance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRetainLast() Obtain Number of recent snapshots to retain
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRetainLast(integer $RetainLast) Set Number of recent snapshots to retain
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBeforeDays() Obtain Snapshots expired before specified days
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBeforeDays(integer $BeforeDays) Set Snapshots expired before specified days
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMaxConcurrentDeletes() Obtain Number of parallel processes for cleaning up expired snapshots
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMaxConcurrentDeletes(integer $MaxConcurrentDeletes) Set Number of parallel processes for cleaning up expired snapshots
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIntervalMin() Obtain Snapshot expiration governance run cycle, unit: minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntervalMin(integer $IntervalMin) Set Snapshot expiration governance run cycle, unit: minutes
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DlcExpiredSnapshotsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable snapshot expiration governance: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExpiredSnapshotsEnable;

    /**
     * @var string Name of the engine used to run snapshot expiration governance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Engine;

    /**
     * @var integer Number of recent snapshots to retain
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RetainLast;

    /**
     * @var integer Snapshots expired before specified days
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BeforeDays;

    /**
     * @var integer Number of parallel processes for cleaning up expired snapshots
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MaxConcurrentDeletes;

    /**
     * @var integer Snapshot expiration governance run cycle, unit: minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntervalMin;

    /**
     * @param string $ExpiredSnapshotsEnable Whether to enable snapshot expiration governance: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Engine Name of the engine used to run snapshot expiration governance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RetainLast Number of recent snapshots to retain
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $BeforeDays Snapshots expired before specified days
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MaxConcurrentDeletes Number of parallel processes for cleaning up expired snapshots
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IntervalMin Snapshot expiration governance run cycle, unit: minutes
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
        if (array_key_exists("ExpiredSnapshotsEnable",$param) and $param["ExpiredSnapshotsEnable"] !== null) {
            $this->ExpiredSnapshotsEnable = $param["ExpiredSnapshotsEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("RetainLast",$param) and $param["RetainLast"] !== null) {
            $this->RetainLast = $param["RetainLast"];
        }

        if (array_key_exists("BeforeDays",$param) and $param["BeforeDays"] !== null) {
            $this->BeforeDays = $param["BeforeDays"];
        }

        if (array_key_exists("MaxConcurrentDeletes",$param) and $param["MaxConcurrentDeletes"] !== null) {
            $this->MaxConcurrentDeletes = $param["MaxConcurrentDeletes"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}
