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
 * List of environments bound to usage plan.
 *
 * @method integer getTotalCount() Obtain Number of environments of the service bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of environments of the service bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getEnvironmentList() Obtain Environment status of services bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentList(array $EnvironmentList) Set Environment status of services bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanEnvironmentStatus extends AbstractModel
{
    /**
     * @var integer Number of environments of the service bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Environment status of services bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentList;

    /**
     * @param integer $TotalCount Number of environments of the service bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $EnvironmentList Environment status of services bound to usage plan.
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

        if (array_key_exists("EnvironmentList",$param) and $param["EnvironmentList"] !== null) {
            $this->EnvironmentList = [];
            foreach ($param["EnvironmentList"] as $key => $value){
                $obj = new UsagePlanEnvironment();
                $obj->deserialize($value);
                array_push($this->EnvironmentList, $obj);
            }
        }
    }
}
