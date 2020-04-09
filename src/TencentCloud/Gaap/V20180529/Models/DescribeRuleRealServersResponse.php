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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleRealServers response structure.
 *
 * @method integer getTotalCount() Obtain Quantity of origin servers that can be bound
 * @method void setTotalCount(integer $TotalCount) Set Quantity of origin servers that can be bound
 * @method array getRealServerSet() Obtain Information list of origin servers that can be bound
 * @method void setRealServerSet(array $RealServerSet) Set Information list of origin servers that can be bound
 * @method integer getBindRealServerTotalCount() Obtain Quantity of bound origin servers
 * @method void setBindRealServerTotalCount(integer $BindRealServerTotalCount) Set Quantity of bound origin servers
 * @method array getBindRealServerSet() Obtain Bound origin server information list
 * @method void setBindRealServerSet(array $BindRealServerSet) Set Bound origin server information list
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRuleRealServersResponse extends AbstractModel
{
    /**
     * @var integer Quantity of origin servers that can be bound
     */
    public $TotalCount;

    /**
     * @var array Information list of origin servers that can be bound
     */
    public $RealServerSet;

    /**
     * @var integer Quantity of bound origin servers
     */
    public $BindRealServerTotalCount;

    /**
     * @var array Bound origin server information list
     */
    public $BindRealServerSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Quantity of origin servers that can be bound
     * @param array $RealServerSet Information list of origin servers that can be bound
     * @param integer $BindRealServerTotalCount Quantity of bound origin servers
     * @param array $BindRealServerSet Bound origin server information list
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

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new RealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("BindRealServerTotalCount",$param) and $param["BindRealServerTotalCount"] !== null) {
            $this->BindRealServerTotalCount = $param["BindRealServerTotalCount"];
        }

        if (array_key_exists("BindRealServerSet",$param) and $param["BindRealServerSet"] !== null) {
            $this->BindRealServerSet = [];
            foreach ($param["BindRealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->BindRealServerSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
