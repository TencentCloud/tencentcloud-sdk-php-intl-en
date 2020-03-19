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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() Obtain Number of displayed results
 * @method void setTotalCount(integer $TotalCount) Set Number of displayed results
 * @method array getTargetGroupSet() Obtain Information set of displayed target groups
 * @method void setTargetGroupSet(array $TargetGroupSet) Set Information set of displayed target groups
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeTargetGroupList response structure.
 */
class DescribeTargetGroupListResponse extends AbstractModel
{
    /**
     * @var integer Number of displayed results
     */
    public $TotalCount;

    /**
     * @var array Information set of displayed target groups
     */
    public $TargetGroupSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Number of displayed results
     * @param array $TargetGroupSet Information set of displayed target groups
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

        if (array_key_exists("TargetGroupSet",$param) and $param["TargetGroupSet"] !== null) {
            $this->TargetGroupSet = [];
            foreach ($param["TargetGroupSet"] as $key => $value){
                $obj = new TargetGroupInfo();
                $obj->deserialize($value);
                array_push($this->TargetGroupSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
