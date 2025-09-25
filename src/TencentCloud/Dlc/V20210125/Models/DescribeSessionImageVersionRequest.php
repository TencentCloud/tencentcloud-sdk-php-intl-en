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
 * DescribeSessionImageVersion request structure.
 *
 * @method string getDataEngineId() Obtain Engine Id.
 * @method void setDataEngineId(string $DataEngineId) Set Engine Id.
 * @method string getFrameworkType() Obtain Framework type: machine-learning, python, spark-ml.
 * @method void setFrameworkType(string $FrameworkType) Set Framework type: machine-learning, python, spark-ml.
 */
class DescribeSessionImageVersionRequest extends AbstractModel
{
    /**
     * @var string Engine Id.
     */
    public $DataEngineId;

    /**
     * @var string Framework type: machine-learning, python, spark-ml.
     */
    public $FrameworkType;

    /**
     * @param string $DataEngineId Engine Id.
     * @param string $FrameworkType Framework type: machine-learning, python, spark-ml.
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("FrameworkType",$param) and $param["FrameworkType"] !== null) {
            $this->FrameworkType = $param["FrameworkType"];
        }
    }
}
