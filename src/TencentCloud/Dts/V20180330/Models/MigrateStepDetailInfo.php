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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of steps in migration
 *
 * @method integer getStepNo() Obtain Step number
 * @method void setStepNo(integer $StepNo) Set Step number
 * @method string getStepName() Obtain Step name
 * @method void setStepName(string $StepName) Set Step name
 * @method string getStepId() Obtain Step ID
 * @method void setStepId(string $StepId) Set Step ID
 * @method integer getStatus() Obtain Step status. Value range: 0 (default), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
 * @method void setStatus(integer $Status) Set Step status. Value range: 0 (default), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
 * @method string getStartTime() Obtain Start time of current step in the format of `yyyy-mm-dd hh:mm:ss`. This field is meaningless if it does not exist or is empty
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of current step in the format of `yyyy-mm-dd hh:mm:ss`. This field is meaningless if it does not exist or is empty
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MigrateStepDetailInfo extends AbstractModel
{
    /**
     * @var integer Step number
     */
    public $StepNo;

    /**
     * @var string Step name
     */
    public $StepName;

    /**
     * @var string Step ID
     */
    public $StepId;

    /**
     * @var integer Step status. Value range: 0 (default), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
     */
    public $Status;

    /**
     * @var string Start time of current step in the format of `yyyy-mm-dd hh:mm:ss`. This field is meaningless if it does not exist or is empty
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @param integer $StepNo Step number
     * @param string $StepName Step name
     * @param string $StepId Step ID
     * @param integer $Status Step status. Value range: 0 (default), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
     * @param string $StartTime Start time of current step in the format of `yyyy-mm-dd hh:mm:ss`. This field is meaningless if it does not exist or is empty
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
