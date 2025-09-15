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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Restart, stop, or start of service/monitoring configurations
 *
 * @method integer getRollingRestartSwitch() Obtain 0: disable rolling restart.
1: enable rolling start.
 * @method void setRollingRestartSwitch(integer $RollingRestartSwitch) Set 0: disable rolling restart.
1: enable rolling start.
 * @method integer getBatchSize() Obtain Rolling restart quantity per batch, which is up to 99999.
 * @method void setBatchSize(integer $BatchSize) Set Rolling restart quantity per batch, which is up to 99999.
 * @method integer getTimeWait() Obtain Stop and wait time for rolling restart per batch, with the maximum interval of 5 minutes and the unit of seconds.
 * @method void setTimeWait(integer $TimeWait) Set Stop and wait time for rolling restart per batch, with the maximum interval of 5 minutes and the unit of seconds.
 * @method integer getDealOnFail() Obtain Operation failure processing policy. 0: Block upon failure, 1: Automatically skipping failure.
 * @method void setDealOnFail(integer $DealOnFail) Set Operation failure processing policy. 0: Block upon failure, 1: Automatically skipping failure.
 * @method array getArgs() Obtain Parameters required in the instruction.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArgs(array $Args) Set Parameters required in the instruction.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StrategyConfig extends AbstractModel
{
    /**
     * @var integer 0: disable rolling restart.
1: enable rolling start.
     */
    public $RollingRestartSwitch;

    /**
     * @var integer Rolling restart quantity per batch, which is up to 99999.
     */
    public $BatchSize;

    /**
     * @var integer Stop and wait time for rolling restart per batch, with the maximum interval of 5 minutes and the unit of seconds.
     */
    public $TimeWait;

    /**
     * @var integer Operation failure processing policy. 0: Block upon failure, 1: Automatically skipping failure.
     */
    public $DealOnFail;

    /**
     * @var array Parameters required in the instruction.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Args;

    /**
     * @param integer $RollingRestartSwitch 0: disable rolling restart.
1: enable rolling start.
     * @param integer $BatchSize Rolling restart quantity per batch, which is up to 99999.
     * @param integer $TimeWait Stop and wait time for rolling restart per batch, with the maximum interval of 5 minutes and the unit of seconds.
     * @param integer $DealOnFail Operation failure processing policy. 0: Block upon failure, 1: Automatically skipping failure.
     * @param array $Args Parameters required in the instruction.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RollingRestartSwitch",$param) and $param["RollingRestartSwitch"] !== null) {
            $this->RollingRestartSwitch = $param["RollingRestartSwitch"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("TimeWait",$param) and $param["TimeWait"] !== null) {
            $this->TimeWait = $param["TimeWait"];
        }

        if (array_key_exists("DealOnFail",$param) and $param["DealOnFail"] !== null) {
            $this->DealOnFail = $param["DealOnFail"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = [];
            foreach ($param["Args"] as $key => $value){
                $obj = new Arg();
                $obj->deserialize($value);
                array_push($this->Args, $obj);
            }
        }
    }
}
