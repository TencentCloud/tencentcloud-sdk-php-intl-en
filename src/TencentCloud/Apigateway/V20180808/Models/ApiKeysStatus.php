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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key list
 *
 * @method integer getTotalCount() Obtain Number of eligible API keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible API keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getApiKeySet() Obtain API key list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiKeySet(array $ApiKeySet) Set API key list.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiKeysStatus extends AbstractModel
{
    /**
     * @var integer Number of eligible API keys.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array API key list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiKeySet;

    /**
     * @param integer $TotalCount Number of eligible API keys.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ApiKeySet API key list.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ApiKeySet",$param) and $param["ApiKeySet"] !== null) {
            $this->ApiKeySet = [];
            foreach ($param["ApiKeySet"] as $key => $value){
                $obj = new ApiKey();
                $obj->deserialize($value);
                array_push($this->ApiKeySet, $obj);
            }
        }
    }
}
