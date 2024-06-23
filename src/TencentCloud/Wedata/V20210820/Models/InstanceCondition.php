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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance Retrieval Criteria
 *
 * @method string getExecutionSpace() Obtain Execution Type
 * @method void setExecutionSpace(string $ExecutionSpace) Set Execution Type
 * @method string getProductName() Obtain Task Product Type
 * @method void setProductName(string $ProductName) Set Task Product Type
 */
class InstanceCondition extends AbstractModel
{
    /**
     * @var string Execution Type
     */
    public $ExecutionSpace;

    /**
     * @var string Task Product Type
     */
    public $ProductName;

    /**
     * @param string $ExecutionSpace Execution Type
     * @param string $ProductName Task Product Type
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
        if (array_key_exists("ExecutionSpace",$param) and $param["ExecutionSpace"] !== null) {
            $this->ExecutionSpace = $param["ExecutionSpace"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
