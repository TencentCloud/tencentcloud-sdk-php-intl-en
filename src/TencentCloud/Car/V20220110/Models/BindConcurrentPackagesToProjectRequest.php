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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindConcurrentPackagesToProject request structure.
 *
 * @method array getConcurrentIds() Obtain Concurrency pack ID list.
 * @method void setConcurrentIds(array $ConcurrentIds) Set Concurrency pack ID list.
 * @method string getProjectId() Obtain Cloud application project ID.
 * @method void setProjectId(string $ProjectId) Set Cloud application project ID.
 */
class BindConcurrentPackagesToProjectRequest extends AbstractModel
{
    /**
     * @var array Concurrency pack ID list.
     */
    public $ConcurrentIds;

    /**
     * @var string Cloud application project ID.
     */
    public $ProjectId;

    /**
     * @param array $ConcurrentIds Concurrency pack ID list.
     * @param string $ProjectId Cloud application project ID.
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
        if (array_key_exists("ConcurrentIds",$param) and $param["ConcurrentIds"] !== null) {
            $this->ConcurrentIds = $param["ConcurrentIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
