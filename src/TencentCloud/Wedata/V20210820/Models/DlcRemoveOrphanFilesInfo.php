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
 * Remove Isolated Files Governance Item
 *
 * @method string getRemoveOrphanFilesEnable() Obtain Enable Removal of Isolated Files Governance Item: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemoveOrphanFilesEnable(string $RemoveOrphanFilesEnable) Set Enable Removal of Isolated Files Governance Item: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEngine() Obtain Engine Name for Running Removal of Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEngine(string $Engine) Set Engine Name for Running Removal of Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getBeforeDays() Obtain Remove Isolated Files Older Than Specified Days
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBeforeDays(integer $BeforeDays) Set Remove Isolated Files Older Than Specified Days
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMaxConcurrentDeletes() Obtain Number of Concurrent Processes for Removing Isolated Files
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMaxConcurrentDeletes(integer $MaxConcurrentDeletes) Set Number of Concurrent Processes for Removing Isolated Files
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getIntervalMin() Obtain Isolated Files Governance Run Cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIntervalMin(integer $IntervalMin) Set Isolated Files Governance Run Cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DlcRemoveOrphanFilesInfo extends AbstractModel
{
    /**
     * @var string Enable Removal of Isolated Files Governance Item: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemoveOrphanFilesEnable;

    /**
     * @var string Engine Name for Running Removal of Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Engine;

    /**
     * @var integer Remove Isolated Files Older Than Specified Days
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BeforeDays;

    /**
     * @var integer Number of Concurrent Processes for Removing Isolated Files
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MaxConcurrentDeletes;

    /**
     * @var integer Isolated Files Governance Run Cycle, in minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IntervalMin;

    /**
     * @param string $RemoveOrphanFilesEnable Enable Removal of Isolated Files Governance Item: enable, none
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Engine Engine Name for Running Removal of Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $BeforeDays Remove Isolated Files Older Than Specified Days
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MaxConcurrentDeletes Number of Concurrent Processes for Removing Isolated Files
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $IntervalMin Isolated Files Governance Run Cycle, in minutes
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
        if (array_key_exists("RemoveOrphanFilesEnable",$param) and $param["RemoveOrphanFilesEnable"] !== null) {
            $this->RemoveOrphanFilesEnable = $param["RemoveOrphanFilesEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
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
