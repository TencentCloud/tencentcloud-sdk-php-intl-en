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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDataEngineConfig request structure.
 *
 * @method array getDataEngineIds() Obtain Engine ID
 * @method void setDataEngineIds(array $DataEngineIds) Set Engine ID
 * @method string getDataEngineConfigCommand() Obtain Commands of engine configuration. UpdateSparkSQLLakefsPath (updates the configuration of the native table) and UpdateSparkSQLResultPath (updates the configuration of the result path) are supported.
 * @method void setDataEngineConfigCommand(string $DataEngineConfigCommand) Set Commands of engine configuration. UpdateSparkSQLLakefsPath (updates the configuration of the native table) and UpdateSparkSQLResultPath (updates the configuration of the result path) are supported.
 */
class UpdateDataEngineConfigRequest extends AbstractModel
{
    /**
     * @var array Engine ID
     */
    public $DataEngineIds;

    /**
     * @var string Commands of engine configuration. UpdateSparkSQLLakefsPath (updates the configuration of the native table) and UpdateSparkSQLResultPath (updates the configuration of the result path) are supported.
     */
    public $DataEngineConfigCommand;

    /**
     * @param array $DataEngineIds Engine ID
     * @param string $DataEngineConfigCommand Commands of engine configuration. UpdateSparkSQLLakefsPath (updates the configuration of the native table) and UpdateSparkSQLResultPath (updates the configuration of the result path) are supported.
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
        if (array_key_exists("DataEngineIds",$param) and $param["DataEngineIds"] !== null) {
            $this->DataEngineIds = $param["DataEngineIds"];
        }

        if (array_key_exists("DataEngineConfigCommand",$param) and $param["DataEngineConfigCommand"] !== null) {
            $this->DataEngineConfigCommand = $param["DataEngineConfigCommand"];
        }
    }
}
