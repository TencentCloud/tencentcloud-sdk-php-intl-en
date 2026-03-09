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
 * SubjectInfo
 *
 * @method string getSubjectType() Obtain Type.
 * @method void setSubjectType(string $SubjectType) Set Type.
 * @method string getSubjectTypeDisplayName() Obtain Topic type display name.
 * @method void setSubjectTypeDisplayName(string $SubjectTypeDisplayName) Set Topic type display name.
 * @method string getSubjectValue() Obtain Subject id.
 * @method void setSubjectValue(string $SubjectValue) Set Subject id.
 * @method string getSubjectValueDisplayName() Obtain Subject name.
 * @method void setSubjectValueDisplayName(string $SubjectValueDisplayName) Set Subject name.
 */
class SubjectInfo extends AbstractModel
{
    /**
     * @var string Type.
     */
    public $SubjectType;

    /**
     * @var string Topic type display name.
     */
    public $SubjectTypeDisplayName;

    /**
     * @var string Subject id.
     */
    public $SubjectValue;

    /**
     * @var string Subject name.
     */
    public $SubjectValueDisplayName;

    /**
     * @param string $SubjectType Type.
     * @param string $SubjectTypeDisplayName Topic type display name.
     * @param string $SubjectValue Subject id.
     * @param string $SubjectValueDisplayName Subject name.
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

        if (array_key_exists("SubjectTypeDisplayName",$param) and $param["SubjectTypeDisplayName"] !== null) {
            $this->SubjectTypeDisplayName = $param["SubjectTypeDisplayName"];
        }

        if (array_key_exists("SubjectValue",$param) and $param["SubjectValue"] !== null) {
            $this->SubjectValue = $param["SubjectValue"];
        }

        if (array_key_exists("SubjectValueDisplayName",$param) and $param["SubjectValueDisplayName"] !== null) {
            $this->SubjectValueDisplayName = $param["SubjectValueDisplayName"];
        }
    }
}
