<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiagDBInstances response structure.
 *
 * @method integer getTotalCount() Obtain Total number of instances.
 * @method void setTotalCount(integer $TotalCount) Set Total number of instances.
 * @method integer getDbScanStatus() Obtain Status of all instance inspection. 0: all instance inspection enabled, 1: all instance inspection disabled.
 * @method void setDbScanStatus(integer $DbScanStatus) Set Status of all instance inspection. 0: all instance inspection enabled, 1: all instance inspection disabled.
 * @method array getItems() Obtain Instance information.
 * @method void setItems(array $Items) Set Instance information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDiagDBInstancesResponse extends AbstractModel
{
    /**
     * @var integer Total number of instances.
     */
    public $TotalCount;

    /**
     * @var integer Status of all instance inspection. 0: all instance inspection enabled, 1: all instance inspection disabled.
     */
    public $DbScanStatus;

    /**
     * @var array Instance information.
     */
    public $Items;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of instances.
     * @param integer $DbScanStatus Status of all instance inspection. 0: all instance inspection enabled, 1: all instance inspection disabled.
     * @param array $Items Instance information.
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

        if (array_key_exists("DbScanStatus",$param) and $param["DbScanStatus"] !== null) {
            $this->DbScanStatus = $param["DbScanStatus"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
