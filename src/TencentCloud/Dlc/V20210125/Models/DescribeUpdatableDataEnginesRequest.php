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
 * DescribeUpdatableDataEngines request structure.
 *
 * @method string getDataEngineConfigCommand() Obtain Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
 * @method void setDataEngineConfigCommand(string $DataEngineConfigCommand) Set Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
 * @method boolean getUseLakeFs() Obtain 
 * @method void setUseLakeFs(boolean $UseLakeFs) Set 
 * @method string getCustomResultPath() Obtain 
 * @method void setCustomResultPath(string $CustomResultPath) Set 
 */
class DescribeUpdatableDataEnginesRequest extends AbstractModel
{
    /**
     * @var string Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
     */
    public $DataEngineConfigCommand;

    /**
     * @var boolean 
     */
    public $UseLakeFs;

    /**
     * @var string 
     */
    public $CustomResultPath;

    /**
     * @param string $DataEngineConfigCommand Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
     * @param boolean $UseLakeFs 
     * @param string $CustomResultPath 
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
        if (array_key_exists("DataEngineConfigCommand",$param) and $param["DataEngineConfigCommand"] !== null) {
            $this->DataEngineConfigCommand = $param["DataEngineConfigCommand"];
        }

        if (array_key_exists("UseLakeFs",$param) and $param["UseLakeFs"] !== null) {
            $this->UseLakeFs = $param["UseLakeFs"];
        }

        if (array_key_exists("CustomResultPath",$param) and $param["CustomResultPath"] !== null) {
            $this->CustomResultPath = $param["CustomResultPath"];
        }
    }
}
