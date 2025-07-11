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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetReconstructDocumentResult request structure.
 *
 * @method string getTaskId() Obtain Unique ID of the task. It is the TaskId returned by [CreateReconstructDocumentFlow](https://cloud.tencent.com/document/product/1759/107506).
 * @method void setTaskId(string $TaskId) Set Unique ID of the task. It is the TaskId returned by [CreateReconstructDocumentFlow](https://cloud.tencent.com/document/product/1759/107506).
 */
class GetReconstructDocumentResultRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the task. It is the TaskId returned by [CreateReconstructDocumentFlow](https://cloud.tencent.com/document/product/1759/107506).
     */
    public $TaskId;

    /**
     * @param string $TaskId Unique ID of the task. It is the TaskId returned by [CreateReconstructDocumentFlow](https://cloud.tencent.com/document/product/1759/107506).
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
