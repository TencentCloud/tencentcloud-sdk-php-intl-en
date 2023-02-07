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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstanceInitStatus response structure.
 *
 * @method string getStatus() Obtain Instance initialization status. Valid values:
`uninitialized` 
`initializing`
`running`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Instance initialization status. Valid values:
`uninitialized` 
`initializing`
`running`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSteps() Obtain Initialize task steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSteps(array $Steps) Set Initialize task steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEksClusterId() Obtain EKS cluster ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEksClusterId(string $EksClusterId) Set EKS cluster ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePrometheusInstanceInitStatusResponse extends AbstractModel
{
    /**
     * @var string Instance initialization status. Valid values:
`uninitialized` 
`initializing`
`running`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Initialize task steps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Steps;

    /**
     * @var string EKS cluster ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EksClusterId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Instance initialization status. Valid values:
`uninitialized` 
`initializing`
`running`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Steps Initialize task steps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EksClusterId EKS cluster ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new TaskStepInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("EksClusterId",$param) and $param["EksClusterId"] !== null) {
            $this->EksClusterId = $param["EksClusterId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
