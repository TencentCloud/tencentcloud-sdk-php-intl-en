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
 * DescribeInstancesDiskNum response structure.
 *
 * @method array getAttachDetailSet() Obtain Information of all attached disks
 * @method void setAttachDetailSet(array $AttachDetailSet) Set Information of all attached disks
 * @method integer getTotalCount() Obtain Number of attached cloud disks
 * @method void setTotalCount(integer $TotalCount) Set Number of attached cloud disks
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstancesDiskNumResponse extends AbstractModel
{
    /**
     * @var array Information of all attached disks
     */
    public $AttachDetailSet;

    /**
     * @var integer Number of attached cloud disks
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AttachDetailSet Information of all attached disks
     * @param integer $TotalCount Number of attached cloud disks
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
        if (array_key_exists("AttachDetailSet",$param) and $param["AttachDetailSet"] !== null) {
            $this->AttachDetailSet = [];
            foreach ($param["AttachDetailSet"] as $key => $value){
                $obj = new AttachDetail();
                $obj->deserialize($value);
                array_push($this->AttachDetailSet, $obj);
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
