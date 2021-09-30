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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcnAttachedInstances response structure.
 *
 * @method array getCcnAttachedInstanceSet() Obtain List of instances associated with the CCN instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCcnAttachedInstanceSet(array $CcnAttachedInstanceSet) Set List of instances associated with the CCN instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCcnAttachedInstancesResponse extends AbstractModel
{
    /**
     * @var array List of instances associated with the CCN instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CcnAttachedInstanceSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CcnAttachedInstanceSet List of instances associated with the CCN instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CcnAttachedInstanceSet",$param) and $param["CcnAttachedInstanceSet"] !== null) {
            $this->CcnAttachedInstanceSet = [];
            foreach ($param["CcnAttachedInstanceSet"] as $key => $value){
                $obj = new CcnAttachedInstance();
                $obj->deserialize($value);
                array_push($this->CcnAttachedInstanceSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
