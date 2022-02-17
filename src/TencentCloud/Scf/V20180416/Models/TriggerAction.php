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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a scheduled provisioned concurrency scaling action
 *
 * @method string getTriggerName() Obtain Scheduled action name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTriggerName(string $TriggerName) Set Scheduled action name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTriggerProvisionedConcurrencyNum() Obtain Target provisioned concurrency of the scheduled scaling action 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTriggerProvisionedConcurrencyNum(integer $TriggerProvisionedConcurrencyNum) Set Target provisioned concurrency of the scheduled scaling action 
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTriggerCronConfig() Obtain Trigger time of the scheduled action in Cron expression. Seven fields are required and should be separated with a space.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTriggerCronConfig(string $TriggerCronConfig) Set Trigger time of the scheduled action in Cron expression. Seven fields are required and should be separated with a space.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProvisionedType() Obtain The provision type. Value: `Default`
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setProvisionedType(string $ProvisionedType) Set The provision type. Value: `Default`
Note: This field may return `null`, indicating that no valid value can be found.
 */
class TriggerAction extends AbstractModel
{
    /**
     * @var string Scheduled action name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TriggerName;

    /**
     * @var integer Target provisioned concurrency of the scheduled scaling action 
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TriggerProvisionedConcurrencyNum;

    /**
     * @var string Trigger time of the scheduled action in Cron expression. Seven fields are required and should be separated with a space.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TriggerCronConfig;

    /**
     * @var string The provision type. Value: `Default`
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ProvisionedType;

    /**
     * @param string $TriggerName Scheduled action name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TriggerProvisionedConcurrencyNum Target provisioned concurrency of the scheduled scaling action 
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TriggerCronConfig Trigger time of the scheduled action in Cron expression. Seven fields are required and should be separated with a space.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProvisionedType The provision type. Value: `Default`
Note: This field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("TriggerProvisionedConcurrencyNum",$param) and $param["TriggerProvisionedConcurrencyNum"] !== null) {
            $this->TriggerProvisionedConcurrencyNum = $param["TriggerProvisionedConcurrencyNum"];
        }

        if (array_key_exists("TriggerCronConfig",$param) and $param["TriggerCronConfig"] !== null) {
            $this->TriggerCronConfig = $param["TriggerCronConfig"];
        }

        if (array_key_exists("ProvisionedType",$param) and $param["ProvisionedType"] !== null) {
            $this->ProvisionedType = $param["ProvisionedType"];
        }
    }
}
