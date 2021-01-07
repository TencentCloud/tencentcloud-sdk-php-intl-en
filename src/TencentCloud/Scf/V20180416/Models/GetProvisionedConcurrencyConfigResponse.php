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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetProvisionedConcurrencyConfig response structure.
 *
 * @method integer getUnallocatedConcurrencyNum() Obtain Unallocated provisioned concurrency amount of function.
 * @method void setUnallocatedConcurrencyNum(integer $UnallocatedConcurrencyNum) Set Unallocated provisioned concurrency amount of function.
 * @method array getAllocated() Obtain Allocated provisioned concurrency amount of function.
 * @method void setAllocated(array $Allocated) Set Allocated provisioned concurrency amount of function.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetProvisionedConcurrencyConfigResponse extends AbstractModel
{
    /**
     * @var integer Unallocated provisioned concurrency amount of function.
     */
    public $UnallocatedConcurrencyNum;

    /**
     * @var array Allocated provisioned concurrency amount of function.
     */
    public $Allocated;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $UnallocatedConcurrencyNum Unallocated provisioned concurrency amount of function.
     * @param array $Allocated Allocated provisioned concurrency amount of function.
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
        if (array_key_exists("UnallocatedConcurrencyNum",$param) and $param["UnallocatedConcurrencyNum"] !== null) {
            $this->UnallocatedConcurrencyNum = $param["UnallocatedConcurrencyNum"];
        }

        if (array_key_exists("Allocated",$param) and $param["Allocated"] !== null) {
            $this->Allocated = [];
            foreach ($param["Allocated"] as $key => $value){
                $obj = new VersionProvisionedConcurrencyInfo();
                $obj->deserialize($value);
                array_push($this->Allocated, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
