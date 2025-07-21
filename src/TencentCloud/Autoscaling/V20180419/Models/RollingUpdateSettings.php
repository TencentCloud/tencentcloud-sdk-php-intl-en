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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rolling update settings.
 *
 * @method integer getBatchNumber() Obtain Batch quantity. The batch quantity should be a positive integer greater than 0, but cannot exceed the total number of instances pending refresh.
 * @method void setBatchNumber(integer $BatchNumber) Set Batch quantity. The batch quantity should be a positive integer greater than 0, but cannot exceed the total number of instances pending refresh.
 * @method string getBatchPause() Obtain Pause policy between batches. Default value: Automatic. Valid values:
<li>FIRST_BATCH_PAUSE: Pause after the first batch of updates is completed.</li>
<li>BATCH_INTERVAL_PAUSE: Pause between batches.</li>
<li>AUTOMATIC: Do not pause.</li>
 * @method void setBatchPause(string $BatchPause) Set Pause policy between batches. Default value: Automatic. Valid values:
<li>FIRST_BATCH_PAUSE: Pause after the first batch of updates is completed.</li>
<li>BATCH_INTERVAL_PAUSE: Pause between batches.</li>
<li>AUTOMATIC: Do not pause.</li>
 * @method integer getMaxSurge() Obtain The maximum additional quantity of instances. After this parameter is set, create a batch of additional pay-as-you-go instances according to the launch configuration before the rolling update starts. After the rolling update is completed, the additional instances will be terminated.This parameter is used to ensure a certain number of instances available during the rolling update. The maximum additional quantity of instances cannot exceed the number of refreshing instances in a single batch of the rolling update. The rollback process does not support this parameter currently.
 * @method void setMaxSurge(integer $MaxSurge) Set The maximum additional quantity of instances. After this parameter is set, create a batch of additional pay-as-you-go instances according to the launch configuration before the rolling update starts. After the rolling update is completed, the additional instances will be terminated.This parameter is used to ensure a certain number of instances available during the rolling update. The maximum additional quantity of instances cannot exceed the number of refreshing instances in a single batch of the rolling update. The rollback process does not support this parameter currently.
 * @method string getFailProcess() Obtain Failure handling strategy. default value: AUTO_PAUSE. valid values:.
<Li>AUTO_PAUSE: suspended after refresh fails</li>.
<li>AUTO_ROLLBACK: roll back after a refresh fails. each batch rolls back one instance during ROLLBACK, and the CheckInstanceTargetHealth parameter value matches the original refresh activity. no need to roll back if the shrinkage process introduced by the MaxSurge parameter fails. a cancel action will replace the ROLLBACK.</li>.
<Li>AUTO_CANCEL: cancel after refresh fails</li>.
 * @method void setFailProcess(string $FailProcess) Set Failure handling strategy. default value: AUTO_PAUSE. valid values:.
<Li>AUTO_PAUSE: suspended after refresh fails</li>.
<li>AUTO_ROLLBACK: roll back after a refresh fails. each batch rolls back one instance during ROLLBACK, and the CheckInstanceTargetHealth parameter value matches the original refresh activity. no need to roll back if the shrinkage process introduced by the MaxSurge parameter fails. a cancel action will replace the ROLLBACK.</li>.
<Li>AUTO_CANCEL: cancel after refresh fails</li>.
 */
class RollingUpdateSettings extends AbstractModel
{
    /**
     * @var integer Batch quantity. The batch quantity should be a positive integer greater than 0, but cannot exceed the total number of instances pending refresh.
     */
    public $BatchNumber;

    /**
     * @var string Pause policy between batches. Default value: Automatic. Valid values:
<li>FIRST_BATCH_PAUSE: Pause after the first batch of updates is completed.</li>
<li>BATCH_INTERVAL_PAUSE: Pause between batches.</li>
<li>AUTOMATIC: Do not pause.</li>
     */
    public $BatchPause;

    /**
     * @var integer The maximum additional quantity of instances. After this parameter is set, create a batch of additional pay-as-you-go instances according to the launch configuration before the rolling update starts. After the rolling update is completed, the additional instances will be terminated.This parameter is used to ensure a certain number of instances available during the rolling update. The maximum additional quantity of instances cannot exceed the number of refreshing instances in a single batch of the rolling update. The rollback process does not support this parameter currently.
     */
    public $MaxSurge;

    /**
     * @var string Failure handling strategy. default value: AUTO_PAUSE. valid values:.
<Li>AUTO_PAUSE: suspended after refresh fails</li>.
<li>AUTO_ROLLBACK: roll back after a refresh fails. each batch rolls back one instance during ROLLBACK, and the CheckInstanceTargetHealth parameter value matches the original refresh activity. no need to roll back if the shrinkage process introduced by the MaxSurge parameter fails. a cancel action will replace the ROLLBACK.</li>.
<Li>AUTO_CANCEL: cancel after refresh fails</li>.
     */
    public $FailProcess;

    /**
     * @param integer $BatchNumber Batch quantity. The batch quantity should be a positive integer greater than 0, but cannot exceed the total number of instances pending refresh.
     * @param string $BatchPause Pause policy between batches. Default value: Automatic. Valid values:
<li>FIRST_BATCH_PAUSE: Pause after the first batch of updates is completed.</li>
<li>BATCH_INTERVAL_PAUSE: Pause between batches.</li>
<li>AUTOMATIC: Do not pause.</li>
     * @param integer $MaxSurge The maximum additional quantity of instances. After this parameter is set, create a batch of additional pay-as-you-go instances according to the launch configuration before the rolling update starts. After the rolling update is completed, the additional instances will be terminated.This parameter is used to ensure a certain number of instances available during the rolling update. The maximum additional quantity of instances cannot exceed the number of refreshing instances in a single batch of the rolling update. The rollback process does not support this parameter currently.
     * @param string $FailProcess Failure handling strategy. default value: AUTO_PAUSE. valid values:.
<Li>AUTO_PAUSE: suspended after refresh fails</li>.
<li>AUTO_ROLLBACK: roll back after a refresh fails. each batch rolls back one instance during ROLLBACK, and the CheckInstanceTargetHealth parameter value matches the original refresh activity. no need to roll back if the shrinkage process introduced by the MaxSurge parameter fails. a cancel action will replace the ROLLBACK.</li>.
<Li>AUTO_CANCEL: cancel after refresh fails</li>.
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
        if (array_key_exists("BatchNumber",$param) and $param["BatchNumber"] !== null) {
            $this->BatchNumber = $param["BatchNumber"];
        }

        if (array_key_exists("BatchPause",$param) and $param["BatchPause"] !== null) {
            $this->BatchPause = $param["BatchPause"];
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = $param["MaxSurge"];
        }

        if (array_key_exists("FailProcess",$param) and $param["FailProcess"] !== null) {
            $this->FailProcess = $param["FailProcess"];
        }
    }
}
