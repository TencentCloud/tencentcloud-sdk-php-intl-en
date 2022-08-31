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
 * DescribeGrafanaInstances response structure.
 *
 * @method array getInstanceSet() Obtain This parameter has been disused. Use `Instances` instead.
 * @method void setInstanceSet(array $InstanceSet) Set This parameter has been disused. Use `Instances` instead.
 * @method integer getTotalCount() Obtain Number of eligible instances
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible instances
 * @method array getInstances() Obtain List of instances
 * @method void setInstances(array $Instances) Set List of instances
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeGrafanaInstancesResponse extends AbstractModel
{
    /**
     * @var array This parameter has been disused. Use `Instances` instead.
     */
    public $InstanceSet;

    /**
     * @var integer Number of eligible instances
     */
    public $TotalCount;

    /**
     * @var array List of instances
     */
    public $Instances;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InstanceSet This parameter has been disused. Use `Instances` instead.
     * @param integer $TotalCount Number of eligible instances
     * @param array $Instances List of instances
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
        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new GrafanaInstanceInfo();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new GrafanaInstanceInfo();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
