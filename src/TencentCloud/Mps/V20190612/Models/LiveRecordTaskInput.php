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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The input parameters of a live recording task.
 *
 * @method integer getDefinition() Obtain The live recording template ID.
 * @method void setDefinition(integer $Definition) Set The live recording template ID.
 * @method TaskOutputStorage getOutputStorage() Obtain The storage of the recording file. If this parameter is left empty, the `OutputStorage` value of the parent folder will be inherited.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The storage of the recording file. If this parameter is left empty, the `OutputStorage` value of the parent folder will be inherited.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain The output path of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set The output path of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class LiveRecordTaskInput extends AbstractModel
{
    /**
     * @var integer The live recording template ID.
     */
    public $Definition;

    /**
     * @var TaskOutputStorage The storage of the recording file. If this parameter is left empty, the `OutputStorage` value of the parent folder will be inherited.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string The output path of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition The live recording template ID.
     * @param TaskOutputStorage $OutputStorage The storage of the recording file. If this parameter is left empty, the `OutputStorage` value of the parent folder will be inherited.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath The output path of the recording file.
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }
    }
}
