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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notebook/Python cell output configuration
 *
 * @method string getCellId() Obtain Cell ID
 * @method void setCellId(string $CellId) Set Cell ID
 * @method string getDashboardConf() Obtain Dashboard chart configuration, JSON string
 * @method void setDashboardConf(string $DashboardConf) Set Dashboard chart configuration, JSON string
 * @method string getOutputPath() Obtain Pre-signed download URL of the execution result file
 * @method void setOutputPath(string $OutputPath) Set Pre-signed download URL of the execution result file
 */
class FileOutputConf extends AbstractModel
{
    /**
     * @var string Cell ID
     */
    public $CellId;

    /**
     * @var string Dashboard chart configuration, JSON string
     */
    public $DashboardConf;

    /**
     * @var string Pre-signed download URL of the execution result file
     */
    public $OutputPath;

    /**
     * @param string $CellId Cell ID
     * @param string $DashboardConf Dashboard chart configuration, JSON string
     * @param string $OutputPath Pre-signed download URL of the execution result file
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
        if (array_key_exists("CellId",$param) and $param["CellId"] !== null) {
            $this->CellId = $param["CellId"];
        }

        if (array_key_exists("DashboardConf",$param) and $param["DashboardConf"] !== null) {
            $this->DashboardConf = $param["DashboardConf"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }
    }
}
