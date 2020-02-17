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
 * @method integer getStepNo() Obtain Step number
 * @method void setStepNo(integer $StepNo) Set Step number
 * @method string getStepName() Obtain Step name
 * @method void setStepName(string $StepName) Set Step name
 * @method integer getCanStop() Obtain Whether it can be stopped
 * @method void setCanStop(integer $CanStop) Set Whether it can be stopped
 * @method integer getStepId() Obtain Step ID
 * @method void setStepId(integer $StepId) Set Step ID
 */

/**
 *Sync task progress
 */
class SyncStepDetailInfo extends AbstractModel
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
     * @var integer Whether it can be stopped
     */
    public $CanStop;

    /**
     * @var integer Step ID
     */
    public $StepId;
    /**
     * @param integer $StepNo Step number
     * @param string $StepName Step name
     * @param integer $CanStop Whether it can be stopped
     * @param integer $StepId Step ID
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

        if (array_key_exists("CanStop",$param) and $param["CanStop"] !== null) {
            $this->CanStop = $param["CanStop"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }
    }
}
