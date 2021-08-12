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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBsNormal response structure.
 *
 * @method integer getTotalCount() Obtain Total number of databases of the instance
 * @method void setTotalCount(integer $TotalCount) Set Total number of databases of the instance
 * @method array getDBList() Obtain Detailed database configurations, such as whether CDC or CT is enabled for the database
 * @method void setDBList(array $DBList) Set Detailed database configurations, such as whether CDC or CT is enabled for the database
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBsNormalResponse extends AbstractModel
{
    /**
     * @var integer Total number of databases of the instance
     */
    public $TotalCount;

    /**
     * @var array Detailed database configurations, such as whether CDC or CT is enabled for the database
     */
    public $DBList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of databases of the instance
     * @param array $DBList Detailed database configurations, such as whether CDC or CT is enabled for the database
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

        if (array_key_exists("DBList",$param) and $param["DBList"] !== null) {
            $this->DBList = [];
            foreach ($param["DBList"] as $key => $value){
                $obj = new DbNormalDetail();
                $obj->deserialize($value);
                array_push($this->DBList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
