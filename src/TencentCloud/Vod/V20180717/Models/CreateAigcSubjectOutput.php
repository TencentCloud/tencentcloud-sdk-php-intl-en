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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create subject output message.
 *
 * @method string getSubjectId() Obtain <p>Subject ID.</p>
 * @method void setSubjectId(string $SubjectId) Set <p>Subject ID.</p>
 * @method string getSubjectInfo() Obtain <p>Entity information.</p>
 * @method void setSubjectInfo(string $SubjectInfo) Set <p>Entity information.</p>
 */
class CreateAigcSubjectOutput extends AbstractModel
{
    /**
     * @var string <p>Subject ID.</p>
     */
    public $SubjectId;

    /**
     * @var string <p>Entity information.</p>
     */
    public $SubjectInfo;

    /**
     * @param string $SubjectId <p>Subject ID.</p>
     * @param string $SubjectInfo <p>Entity information.</p>
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
        if (array_key_exists("SubjectId",$param) and $param["SubjectId"] !== null) {
            $this->SubjectId = $param["SubjectId"];
        }

        if (array_key_exists("SubjectInfo",$param) and $param["SubjectInfo"] !== null) {
            $this->SubjectInfo = $param["SubjectInfo"];
        }
    }
}
