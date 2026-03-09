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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subject entity information, authorize/reclaim entity.
 *
 * @method string getSubjectType() Obtain Type.
 * @method void setSubjectType(string $SubjectType) Set Type.
 * @method array getSubjectValues() Obtain Subject list.
 * @method void setSubjectValues(array $SubjectValues) Set Subject list.
 */
class Subject extends AbstractModel
{
    /**
     * @var string Type.
     */
    public $SubjectType;

    /**
     * @var array Subject list.
     */
    public $SubjectValues;

    /**
     * @param string $SubjectType Type.
     * @param array $SubjectValues Subject list.
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
        if (array_key_exists("SubjectType",$param) and $param["SubjectType"] !== null) {
            $this->SubjectType = $param["SubjectType"];
        }

        if (array_key_exists("SubjectValues",$param) and $param["SubjectValues"] !== null) {
            $this->SubjectValues = $param["SubjectValues"];
        }
    }
}
