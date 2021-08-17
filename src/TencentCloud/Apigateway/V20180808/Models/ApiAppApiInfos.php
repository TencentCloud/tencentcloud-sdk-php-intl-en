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
 * Application information set
 *
 * @method integer getTotalCount() Obtain Quantity
 * @method void setTotalCount(integer $TotalCount) Set Quantity
 * @method array getApiAppApiSet() Obtain Information array of the API bound to the application
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppApiSet(array $ApiAppApiSet) Set Information array of the API bound to the application
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiAppApiInfos extends AbstractModel
{
    /**
     * @var integer Quantity
     */
    public $TotalCount;

    /**
     * @var array Information array of the API bound to the application
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppApiSet;

    /**
     * @param integer $TotalCount Quantity
     * @param array $ApiAppApiSet Information array of the API bound to the application
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

        if (array_key_exists("ApiAppApiSet",$param) and $param["ApiAppApiSet"] !== null) {
            $this->ApiAppApiSet = [];
            foreach ($param["ApiAppApiSet"] as $key => $value){
                $obj = new ApiAppApiInfo();
                $obj->deserialize($value);
                array_push($this->ApiAppApiSet, $obj);
            }
        }
    }
}
