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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances response structure.
 *
 * @method array getDealNames() Obtain Order number list. Each instance corresponds to an order number.
 * @method void setDealNames(array $DealNames) Set Order number list. Each instance corresponds to an order number.
 * @method string getBillId() Obtain Bill ID of frozen fees
 * @method void setBillId(string $BillId) Set Bill ID of frozen fees
 * @method array getDBInstanceIdSet() Obtain ID set of instances which have been created successfully. The parameter value will be returned only when the pay-as-you-go billing mode is used.
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set ID set of instances which have been created successfully. The parameter value will be returned only when the pay-as-you-go billing mode is used.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateInstancesResponse extends AbstractModel
{
    /**
     * @var array Order number list. Each instance corresponds to an order number.
     */
    public $DealNames;

    /**
     * @var string Bill ID of frozen fees
     */
    public $BillId;

    /**
     * @var array ID set of instances which have been created successfully. The parameter value will be returned only when the pay-as-you-go billing mode is used.
     */
    public $DBInstanceIdSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DealNames Order number list. Each instance corresponds to an order number.
     * @param string $BillId Bill ID of frozen fees
     * @param array $DBInstanceIdSet ID set of instances which have been created successfully. The parameter value will be returned only when the pay-as-you-go billing mode is used.
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
