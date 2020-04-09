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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNonlocalLoginPlaces response structure.
 *
 * @method integer getTotalCount() Obtain Total number of records.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records.
 * @method array getNonLocalLoginPlaces() Obtain Unusual login location information array.
 * @method void setNonLocalLoginPlaces(array $NonLocalLoginPlaces) Set Unusual login location information array.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNonlocalLoginPlacesResponse extends AbstractModel
{
    /**
     * @var integer Total number of records.
     */
    public $TotalCount;

    /**
     * @var array Unusual login location information array.
     */
    public $NonLocalLoginPlaces;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of records.
     * @param array $NonLocalLoginPlaces Unusual login location information array.
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

        if (array_key_exists("NonLocalLoginPlaces",$param) and $param["NonLocalLoginPlaces"] !== null) {
            $this->NonLocalLoginPlaces = [];
            foreach ($param["NonLocalLoginPlaces"] as $key => $value){
                $obj = new NonLocalLoginPlace();
                $obj->deserialize($value);
                array_push($this->NonLocalLoginPlaces, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
