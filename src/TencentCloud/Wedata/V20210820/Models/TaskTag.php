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
 * Task Tag, can be used as a condition for retrieving tasks
 *
 * @method string getTagName() Obtain Tag Name
 * @method void setTagName(string $TagName) Set Tag Name
 * @method array getTagValues() Obtain Tag Value List
 * @method void setTagValues(array $TagValues) Set Tag Value List
 */
class TaskTag extends AbstractModel
{
    /**
     * @var string Tag Name
     */
    public $TagName;

    /**
     * @var array Tag Value List
     */
    public $TagValues;

    /**
     * @param string $TagName Tag Name
     * @param array $TagValues Tag Value List
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
            $this->TagValues = $param["TagValues"];
        }
    }
}
