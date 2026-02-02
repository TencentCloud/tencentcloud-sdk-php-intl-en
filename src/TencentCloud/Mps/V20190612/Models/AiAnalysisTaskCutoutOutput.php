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
 * Video matting result information.
 *
 * @method string getPath() Obtain File path for the intelligent video matting.
 * @method void setPath(string $Path) Set File path for the intelligent video matting.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location for the intelligent video matting.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location for the intelligent video matting.
 */
class AiAnalysisTaskCutoutOutput extends AbstractModel
{
    /**
     * @var string File path for the intelligent video matting.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Storage location for the intelligent video matting.
     */
    public $OutputStorage;

    /**
     * @param string $Path File path for the intelligent video matting.
     * @param TaskOutputStorage $OutputStorage Storage location for the intelligent video matting.
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
