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
 * Application information set
 *
 * @method integer getTotalCount() Obtain Number of applications
 * @method void setTotalCount(integer $TotalCount) Set Number of applications
 * @method array getApiAppSet() Obtain Application information array
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppSet(array $ApiAppSet) Set Application information array
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiAppInfos extends AbstractModel
{
    /**
     * @var integer Number of applications
     */
    public $TotalCount;

    /**
     * @var array Application information array
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppSet;

    /**
     * @param integer $TotalCount Number of applications
     * @param array $ApiAppSet Application information array
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

        if (array_key_exists("ApiAppSet",$param) and $param["ApiAppSet"] !== null) {
            $this->ApiAppSet = [];
            foreach ($param["ApiAppSet"] as $key => $value){
                $obj = new ApiAppInfo();
                $obj->deserialize($value);
                array_push($this->ApiAppSet, $obj);
            }
        }
    }
}
