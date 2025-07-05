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
 * List of usage plans bound to API
 *
 * @method integer getTotalCount() Obtain Total number of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getApiUsagePlanList() Obtain List of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiUsagePlanList(array $ApiUsagePlanList) Set List of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiUsagePlanSet extends AbstractModel
{
    /**
     * @var integer Total number of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiUsagePlanList;

    /**
     * @param integer $TotalCount Total number of usage plans bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ApiUsagePlanList List of usage plans bound to API.
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

        if (array_key_exists("ApiUsagePlanList",$param) and $param["ApiUsagePlanList"] !== null) {
            $this->ApiUsagePlanList = [];
            foreach ($param["ApiUsagePlanList"] as $key => $value){
                $obj = new ApiUsagePlan();
                $obj->deserialize($value);
                array_push($this->ApiUsagePlanList, $obj);
            }
        }
    }
}
