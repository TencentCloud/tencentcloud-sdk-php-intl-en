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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent analysis common result information
 *
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location.</p>
 * @method string getResult() Obtain <p>Task result.</p>
 * @method void setResult(string $Result) Set <p>Task result.</p>
 */
class AiAnalysisTaskGenericOutput extends AbstractModel
{
    /**
     * @var TaskOutputStorage <p>Storage location.</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>Task result.</p>
     */
    public $Result;

    /**
     * @param TaskOutputStorage $OutputStorage <p>Storage location.</p>
     * @param string $Result <p>Task result.</p>
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
