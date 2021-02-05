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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upgrade progress of a node
 *
 * @method string getInstanceID() Obtain Node instance ID
 * @method void setInstanceID(string $InstanceID) Set Node instance ID
 * @method string getLifeState() Obtain Task lifecycle
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
pending: not started
 * @method void setLifeState(string $LifeState) Set Task lifecycle
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
pending: not started
 * @method string getStartAt() Obtain Upgrade start time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStartAt(string $StartAt) Set Upgrade start time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getEndAt() Obtain Upgrade end time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setEndAt(string $EndAt) Set Upgrade end time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method InstanceUpgradePreCheckResult getCheckResult() Obtain Check result before upgrading
 * @method void setCheckResult(InstanceUpgradePreCheckResult $CheckResult) Set Check result before upgrading
 * @method array getDetail() Obtain Upgrade steps details
 * @method void setDetail(array $Detail) Set Upgrade steps details
 */
class InstanceUpgradeProgressItem extends AbstractModel
{
    /**
     * @var string Node instance ID
     */
    public $InstanceID;

    /**
     * @var string Task lifecycle
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
pending: not started
     */
    public $LifeState;

    /**
     * @var string Upgrade start time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StartAt;

    /**
     * @var string Upgrade end time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $EndAt;

    /**
     * @var InstanceUpgradePreCheckResult Check result before upgrading
     */
    public $CheckResult;

    /**
     * @var array Upgrade steps details
     */
    public $Detail;

    /**
     * @param string $InstanceID Node instance ID
     * @param string $LifeState Task lifecycle
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
pending: not started
     * @param string $StartAt Upgrade start time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $EndAt Upgrade end time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param InstanceUpgradePreCheckResult $CheckResult Check result before upgrading
     * @param array $Detail Upgrade steps details
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = new InstanceUpgradePreCheckResult();
            $this->CheckResult->deserialize($param["CheckResult"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new TaskStepInfo();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
