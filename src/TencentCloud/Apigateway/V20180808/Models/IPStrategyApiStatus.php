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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of API bound to IP policy
 *
 * @method integer getTotalCount() Obtain Number of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getApiIdStatusSet() Obtain Details of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) Set Details of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class IPStrategyApiStatus extends AbstractModel
{
    /**
     * @var integer Number of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Details of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiIdStatusSet;

    /**
     * @param integer $TotalCount Number of APIs bound to environment.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ApiIdStatusSet Details of APIs bound to environment.
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

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new IPStrategyApi();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }
    }
}
