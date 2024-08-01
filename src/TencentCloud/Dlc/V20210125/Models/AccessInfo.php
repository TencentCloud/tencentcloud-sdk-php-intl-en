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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about visits to the engine
 *
 * @method string getAccessType() Obtain Methods to visit the engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(string $AccessType) Set Methods to visit the engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAccessConnectionInfos() Obtain URL that visits the engine and part of internal parameters should be taken place according to the actual situation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessConnectionInfos(array $AccessConnectionInfos) Set URL that visits the engine and part of internal parameters should be taken place according to the actual situation.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AccessInfo extends AbstractModel
{
    /**
     * @var string Methods to visit the engine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @var array URL that visits the engine and part of internal parameters should be taken place according to the actual situation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessConnectionInfos;

    /**
     * @param string $AccessType Methods to visit the engine
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AccessConnectionInfos URL that visits the engine and part of internal parameters should be taken place according to the actual situation.
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessConnectionInfos",$param) and $param["AccessConnectionInfos"] !== null) {
            $this->AccessConnectionInfos = $param["AccessConnectionInfos"];
        }
    }
}
