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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvironments response structure.
 *
 * @method integer getTotalCount() Obtain The number of namespaces.
 * @method void setTotalCount(integer $TotalCount) Set The number of namespaces.
 * @method array getEnvironmentSet() Obtain Array of namespace sets.
 * @method void setEnvironmentSet(array $EnvironmentSet) Set Array of namespace sets.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEnvironmentsResponse extends AbstractModel
{
    /**
     * @var integer The number of namespaces.
     */
    public $TotalCount;

    /**
     * @var array Array of namespace sets.
     */
    public $EnvironmentSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The number of namespaces.
     * @param array $EnvironmentSet Array of namespace sets.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("EnvironmentSet",$param) and $param["EnvironmentSet"] !== null) {
            $this->EnvironmentSet = [];
            foreach ($param["EnvironmentSet"] as $key => $value){
                $obj = new Environment();
                $obj->deserialize($value);
                array_push($this->EnvironmentSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
