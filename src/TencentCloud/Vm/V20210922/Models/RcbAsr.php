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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit ASR text information of the segment
 *
 * @method string getText() Obtain This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain This field is used to return the creation time of the queried task in ISO 8601 format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set This field is used to return the creation time of the queried task in ISO 8601 format.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RcbAsr extends AbstractModel
{
    /**
     * @var string This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var string This field is used to return the creation time of the queried task in ISO 8601 format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @param string $Text This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt This field is used to return the creation time of the queried task in ISO 8601 format.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
