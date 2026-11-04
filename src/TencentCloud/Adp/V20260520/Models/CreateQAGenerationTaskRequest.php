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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQAGenerationTask request structure.
 *
 * @method array getDocIdList() Obtain <p>List of document IDs for QA to be generated (quantity: 1-20)</p>
 * @method void setDocIdList(array $DocIdList) Set <p>List of document IDs for QA to be generated (quantity: 1-20)</p>
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 */
class CreateQAGenerationTaskRequest extends AbstractModel
{
    /**
     * @var array <p>List of document IDs for QA to be generated (quantity: 1-20)</p>
     */
    public $DocIdList;

    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @param array $DocIdList <p>List of document IDs for QA to be generated (quantity: 1-20)</p>
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
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
        if (array_key_exists("DocIdList",$param) and $param["DocIdList"] !== null) {
            $this->DocIdList = $param["DocIdList"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }
    }
}
