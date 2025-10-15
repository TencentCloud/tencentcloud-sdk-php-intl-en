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
 * Video deduplication result information.
 *
 * @method string getPath() Obtain Specifies the file path for intelligent video deduplication.
 * @method void setPath(string $Path) Set Specifies the file path for intelligent video deduplication.
 * @method TaskOutputStorage getOutputStorage() Obtain Specifies the storage location for intelligent video deduplication.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Specifies the storage location for intelligent video deduplication.
 */
class AiAnalysisTaskVideoRemakeOutput extends AbstractModel
{
    /**
     * @var string Specifies the file path for intelligent video deduplication.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Specifies the storage location for intelligent video deduplication.
     */
    public $OutputStorage;

    /**
     * @param string $Path Specifies the file path for intelligent video deduplication.
     * @param TaskOutputStorage $OutputStorage Specifies the storage location for intelligent video deduplication.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
