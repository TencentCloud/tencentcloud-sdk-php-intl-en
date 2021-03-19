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
 * Details of a cold backup import task
 *
 * @method integer getStepAll() Obtain Total number of steps
 * @method void setStepAll(integer $StepAll) Set Total number of steps
 * @method integer getStepNow() Obtain Current step
 * @method void setStepNow(integer $StepNow) Set Current step
 * @method integer getProgress() Obtain Overall progress. For example, “30” means 30%.
 * @method void setProgress(integer $Progress) Set Overall progress. For example, “30” means 30%.
 * @method array getStepInfo() Obtain Step information. ‘null’ means the migration has not started
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 * @method void setStepInfo(array $StepInfo) Set Step information. ‘null’ means the migration has not started
Note: this field may return ‘null’, indicating that no valid values can be obtained.
 */
class MigrationDetail extends AbstractModel
{
    /**
     * @var integer Total number of steps
     */
    public $StepAll;

    /**
     * @var integer Current step
     */
    public $StepNow;

    /**
     * @var integer Overall progress. For example, “30” means 30%.
     */
    public $Progress;

    /**
     * @var array Step information. ‘null’ means the migration has not started
Note: this field may return ‘null’, indicating that no valid values can be obtained.
     */
    public $StepInfo;

    /**
     * @param integer $StepAll Total number of steps
     * @param integer $StepNow Current step
     * @param integer $Progress Overall progress. For example, “30” means 30%.
     * @param array $StepInfo Step information. ‘null’ means the migration has not started
Note: this field may return ‘null’, indicating that no valid values can be obtained.
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new MigrationStep();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
