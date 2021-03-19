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
 * Migration steps of a cold backup import task
 *
 * @method integer getStepNo() Obtain Step sequence
 * @method void setStepNo(integer $StepNo) Set Step sequence
 * @method string getStepName() Obtain Step name
 * @method void setStepName(string $StepName) Set Step name
 * @method string getStepId() Obtain Step ID in English
 * @method void setStepId(string $StepId) Set Step ID in English
 * @method integer getStatus() Obtain Step status: 0 (default value), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
 * @method void setStatus(integer $Status) Set Step status: 0 (default value), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
 */
class MigrationStep extends AbstractModel
{
    /**
     * @var integer Step sequence
     */
    public $StepNo;

    /**
     * @var string Step name
     */
    public $StepName;

    /**
     * @var string Step ID in English
     */
    public $StepId;

    /**
     * @var integer Step status: 0 (default value), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
     */
    public $Status;

    /**
     * @param integer $StepNo Step sequence
     * @param string $StepName Step name
     * @param string $StepId Step ID in English
     * @param integer $Status Step status: 0 (default value), 1 (succeeded), 2 (failed), 3 (in progress), 4 (not started)
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
    }
}
