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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParams response structure.
 *
 * @method integer getTotalCount() Obtain Total number of the parameter lists
 * @method void setTotalCount(integer $TotalCount) Set Total number of the parameter lists
 * @method array getInstanceEnumParam() Obtain Instance parameter in Enum type
 * @method void setInstanceEnumParam(array $InstanceEnumParam) Set Instance parameter in Enum type
 * @method array getInstanceIntegerParam() Obtain Instance parameter in Integer type
 * @method void setInstanceIntegerParam(array $InstanceIntegerParam) Set Instance parameter in Integer type
 * @method array getInstanceTextParam() Obtain Instance parameter in Char type
 * @method void setInstanceTextParam(array $InstanceTextParam) Set Instance parameter in Char type
 * @method array getInstanceMultiParam() Obtain Instance parameter in Multi type
 * @method void setInstanceMultiParam(array $InstanceMultiParam) Set Instance parameter in Multi type
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstanceParamsResponse extends AbstractModel
{
    /**
     * @var integer Total number of the parameter lists
     */
    public $TotalCount;

    /**
     * @var array Instance parameter in Enum type
     */
    public $InstanceEnumParam;

    /**
     * @var array Instance parameter in Integer type
     */
    public $InstanceIntegerParam;

    /**
     * @var array Instance parameter in Char type
     */
    public $InstanceTextParam;

    /**
     * @var array Instance parameter in Multi type
     */
    public $InstanceMultiParam;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of the parameter lists
     * @param array $InstanceEnumParam Instance parameter in Enum type
     * @param array $InstanceIntegerParam Instance parameter in Integer type
     * @param array $InstanceTextParam Instance parameter in Char type
     * @param array $InstanceMultiParam Instance parameter in Multi type
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
