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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key information
 *
 * @method string getAutoName() Obtain The name of the recognized field.
 * @method void setAutoName(string $AutoName) Set The name of the recognized field.
 * @method string getConfigName() Obtain The name of a defined field (the key passed in).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigName(string $ConfigName) Set The name of a defined field (the key passed in).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Key extends AbstractModel
{
    /**
     * @var string The name of the recognized field.
     */
    public $AutoName;

    /**
     * @var string The name of a defined field (the key passed in).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigName;

    /**
     * @param string $AutoName The name of the recognized field.
     * @param string $ConfigName The name of a defined field (the key passed in).
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
        if (array_key_exists("AutoName",$param) and $param["AutoName"] !== null) {
            $this->AutoName = $param["AutoName"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }
    }
}
