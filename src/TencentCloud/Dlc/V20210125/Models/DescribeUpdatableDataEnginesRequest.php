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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpdatableDataEngines request structure.
 *
 * @method string getDataEngineConfigCommand() Obtain Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
 * @method void setDataEngineConfigCommand(string $DataEngineConfigCommand) Set Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
 * @method boolean getUseLakeFs() Obtain Whether to use managed storage as result storage
 * @method void setUseLakeFs(boolean $UseLakeFs) Set Whether to use managed storage as result storage
 * @method string getCustomResultPath() Obtain User-defined Result Storage Path
 * @method void setCustomResultPath(string $CustomResultPath) Set User-defined Result Storage Path
 */
class DescribeUpdatableDataEnginesRequest extends AbstractModel
{
    /**
     * @var string Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
     */
    public $DataEngineConfigCommand;

    /**
     * @var boolean Whether to use managed storage as result storage
     */
    public $UseLakeFs;

    /**
     * @var string User-defined Result Storage Path
     */
    public $CustomResultPath;

    /**
     * @param string $DataEngineConfigCommand Operation commands of engine configuration. UpdateSparkSQLLakefsPath updates the path of managed tables, and UpdateSparkSQLResultPath updates the path of result buckets.
     * @param boolean $UseLakeFs Whether to use managed storage as result storage
     * @param string $CustomResultPath User-defined Result Storage Path
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
