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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sparse backup policy configuration info
 *
 * @method string getOpType() Obtain <p>Operation type: add, modify, remove</p>
 * @method void setOpType(string $OpType) Set <p>Operation type: add, modify, remove</p>
 * @method string getConfigId() Obtain <p>Configuration ID</p>
 * @method void setConfigId(string $ConfigId) Set <p>Configuration ID</p>
 * @method string getSparsePeriodConfig() Obtain <p>Policy type: weekly/monthly/yearly</p>
 * @method void setSparsePeriodConfig(string $SparsePeriodConfig) Set <p>Policy type: weekly/monthly/yearly</p>
 * @method SparsePeriodTime getSparsePeriodTime() Obtain <p>Cycle time configuration</p>
 * @method void setSparsePeriodTime(SparsePeriodTime $SparsePeriodTime) Set <p>Cycle time configuration</p>
 * @method integer getSparseBackupSaveDays() Obtain <p>Retention days (7-7320 days, longest 20 years)</p>
 * @method void setSparseBackupSaveDays(integer $SparseBackupSaveDays) Set <p>Retention days (7-7320 days, longest 20 years)</p>
 */
class SparseBackupConfigInfo extends AbstractModel
{
    /**
     * @var string <p>Operation type: add, modify, remove</p>
     */
    public $OpType;

    /**
     * @var string <p>Configuration ID</p>
     */
    public $ConfigId;

    /**
     * @var string <p>Policy type: weekly/monthly/yearly</p>
     */
    public $SparsePeriodConfig;

    /**
     * @var SparsePeriodTime <p>Cycle time configuration</p>
     */
    public $SparsePeriodTime;

    /**
     * @var integer <p>Retention days (7-7320 days, longest 20 years)</p>
     */
    public $SparseBackupSaveDays;

    /**
     * @param string $OpType <p>Operation type: add, modify, remove</p>
     * @param string $ConfigId <p>Configuration ID</p>
     * @param string $SparsePeriodConfig <p>Policy type: weekly/monthly/yearly</p>
     * @param SparsePeriodTime $SparsePeriodTime <p>Cycle time configuration</p>
     * @param integer $SparseBackupSaveDays <p>Retention days (7-7320 days, longest 20 years)</p>
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
        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("SparsePeriodConfig",$param) and $param["SparsePeriodConfig"] !== null) {
            $this->SparsePeriodConfig = $param["SparsePeriodConfig"];
        }

        if (array_key_exists("SparsePeriodTime",$param) and $param["SparsePeriodTime"] !== null) {
            $this->SparsePeriodTime = new SparsePeriodTime();
            $this->SparsePeriodTime->deserialize($param["SparsePeriodTime"]);
        }

        if (array_key_exists("SparseBackupSaveDays",$param) and $param["SparseBackupSaveDays"] !== null) {
            $this->SparseBackupSaveDays = $param["SparseBackupSaveDays"];
        }
    }
}
