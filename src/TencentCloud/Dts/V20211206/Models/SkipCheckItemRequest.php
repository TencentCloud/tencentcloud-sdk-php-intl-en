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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SkipCheckItem request structure.
 *
 * @method string getJobId() Obtain Data migration task ID
 * @method void setJobId(string $JobId) Set Data migration task ID
 * @method array getStepIds() Obtain ID of the check step to be skipped, which is obtained in the `StepInfo[i].StepId` field returned by the `DescribeMigrationCheckJob` API, such as "OptimizeCheck".
 * @method void setStepIds(array $StepIds) Set ID of the check step to be skipped, which is obtained in the `StepInfo[i].StepId` field returned by the `DescribeMigrationCheckJob` API, such as "OptimizeCheck".
 * @method string getForeignKeyFlag() Obtain 
 * @method void setForeignKeyFlag(string $ForeignKeyFlag) Set 
 */
class SkipCheckItemRequest extends AbstractModel
{
    /**
     * @var string Data migration task ID
     */
    public $JobId;

    /**
     * @var array ID of the check step to be skipped, which is obtained in the `StepInfo[i].StepId` field returned by the `DescribeMigrationCheckJob` API, such as "OptimizeCheck".
     */
    public $StepIds;

    /**
     * @var string 
     */
    public $ForeignKeyFlag;

    /**
     * @param string $JobId Data migration task ID
     * @param array $StepIds ID of the check step to be skipped, which is obtained in the `StepInfo[i].StepId` field returned by the `DescribeMigrationCheckJob` API, such as "OptimizeCheck".
     * @param string $ForeignKeyFlag 
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StepIds",$param) and $param["StepIds"] !== null) {
            $this->StepIds = $param["StepIds"];
        }

        if (array_key_exists("ForeignKeyFlag",$param) and $param["ForeignKeyFlag"] !== null) {
            $this->ForeignKeyFlag = $param["ForeignKeyFlag"];
        }
    }
}
