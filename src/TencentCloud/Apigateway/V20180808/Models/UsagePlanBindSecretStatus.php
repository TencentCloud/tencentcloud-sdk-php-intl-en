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
 * List of keys bound to usage plan.
 *
 * @method integer getTotalCount() Obtain Number of keys bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of keys bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAccessKeyList() Obtain List of key details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccessKeyList(array $AccessKeyList) Set List of key details.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanBindSecretStatus extends AbstractModel
{
    /**
     * @var integer Number of keys bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of key details.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccessKeyList;

    /**
     * @param integer $TotalCount Number of keys bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AccessKeyList List of key details.
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

        if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
            $this->AccessKeyList = [];
            foreach ($param["AccessKeyList"] as $key => $value){
                $obj = new UsagePlanBindSecret();
                $obj->deserialize($value);
                array_push($this->AccessKeyList, $obj);
            }
        }
    }
}
