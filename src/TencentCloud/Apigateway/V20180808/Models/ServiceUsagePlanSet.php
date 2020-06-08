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
 * List of usage plans bound to service
 *
 * @method integer getTotalCount() Obtain Total number of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getServiceUsagePlanList() Obtain List of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceUsagePlanList(array $ServiceUsagePlanList) Set List of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ServiceUsagePlanSet extends AbstractModel
{
    /**
     * @var integer Total number of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceUsagePlanList;

    /**
     * @param integer $TotalCount Total number of usage plans bound to service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ServiceUsagePlanList List of usage plans bound to service.
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

        if (array_key_exists("ServiceUsagePlanList",$param) and $param["ServiceUsagePlanList"] !== null) {
            $this->ServiceUsagePlanList = [];
            foreach ($param["ServiceUsagePlanList"] as $key => $value){
                $obj = new ApiUsagePlan();
                $obj->deserialize($value);
                array_push($this->ServiceUsagePlanList, $obj);
            }
        }
    }
}
