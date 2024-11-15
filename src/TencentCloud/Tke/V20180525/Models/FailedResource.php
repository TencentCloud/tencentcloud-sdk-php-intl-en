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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource failed to modify the Tag.
 *
 * @method string getResource() Obtain 6-Segment resource

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setResource(string $Resource) Set 6-Segment resource

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getError() Obtain Reason for execution failure
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setError(string $Error) Set Reason for execution failure
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class FailedResource extends AbstractModel
{
    /**
     * @var string 6-Segment resource

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Resource;

    /**
     * @var string Reason for execution failure
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Error;

    /**
     * @param string $Resource 6-Segment resource

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Error Reason for execution failure
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
