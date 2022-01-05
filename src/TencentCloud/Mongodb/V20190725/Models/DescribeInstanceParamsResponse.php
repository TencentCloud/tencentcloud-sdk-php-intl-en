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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParams response structure.
 *
 * @method array getInstanceEnumParam() Obtain The collection of enum parameters
 * @method void setInstanceEnumParam(array $InstanceEnumParam) Set The collection of enum parameters
 * @method array getInstanceIntegerParam() Obtain The collection of integer parameters
 * @method void setInstanceIntegerParam(array $InstanceIntegerParam) Set The collection of integer parameters
 * @method array getInstanceTextParam() Obtain The collection of text parameters
 * @method void setInstanceTextParam(array $InstanceTextParam) Set The collection of text parameters
 * @method array getInstanceMultiParam() Obtain The collection of string parameters used to represent time ranges
 * @method void setInstanceMultiParam(array $InstanceMultiParam) Set The collection of string parameters used to represent time ranges
 * @method integer getTotalCount() Obtain The total number of modifiable parameters of the instance, such as 0
 * @method void setTotalCount(integer $TotalCount) Set The total number of modifiable parameters of the instance, such as 0
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstanceParamsResponse extends AbstractModel
{
    /**
     * @var array The collection of enum parameters
     */
    public $InstanceEnumParam;

    /**
     * @var array The collection of integer parameters
     */
    public $InstanceIntegerParam;

    /**
     * @var array The collection of text parameters
     */
    public $InstanceTextParam;

    /**
     * @var array The collection of string parameters used to represent time ranges
     */
    public $InstanceMultiParam;

    /**
     * @var integer The total number of modifiable parameters of the instance, such as 0
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InstanceEnumParam The collection of enum parameters
     * @param array $InstanceIntegerParam The collection of integer parameters
     * @param array $InstanceTextParam The collection of text parameters
     * @param array $InstanceMultiParam The collection of string parameters used to represent time ranges
     * @param integer $TotalCount The total number of modifiable parameters of the instance, such as 0
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
        if (array_key_exists("InstanceEnumParam",$param) and $param["InstanceEnumParam"] !== null) {
            $this->InstanceEnumParam = [];
            foreach ($param["InstanceEnumParam"] as $key => $value){
                $obj = new InstanceEnumParam();
                $obj->deserialize($value);
                array_push($this->InstanceEnumParam, $obj);
            }
        }

        if (array_key_exists("InstanceIntegerParam",$param) and $param["InstanceIntegerParam"] !== null) {
            $this->InstanceIntegerParam = [];
            foreach ($param["InstanceIntegerParam"] as $key => $value){
                $obj = new InstanceIntegerParam();
                $obj->deserialize($value);
                array_push($this->InstanceIntegerParam, $obj);
            }
        }

        if (array_key_exists("InstanceTextParam",$param) and $param["InstanceTextParam"] !== null) {
            $this->InstanceTextParam = [];
            foreach ($param["InstanceTextParam"] as $key => $value){
                $obj = new InstanceTextParam();
                $obj->deserialize($value);
                array_push($this->InstanceTextParam, $obj);
            }
        }

        if (array_key_exists("InstanceMultiParam",$param) and $param["InstanceMultiParam"] !== null) {
            $this->InstanceMultiParam = [];
            foreach ($param["InstanceMultiParam"] as $key => $value){
                $obj = new InstanceMultiParam();
                $obj->deserialize($value);
                array_push($this->InstanceMultiParam, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
