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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances response structure.
 *
 * @method string getTranId() Obtain Freezing transaction. One freezing transaction ID is generated each time an instance is added.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTranId(string $TranId) Set Freezing transaction. One freezing transaction ID is generated each time an instance is added.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDealNames() Obtain Pay-as-You-Go order ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDealNames(array $DealNames) Set Pay-as-You-Go order ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getResourceIds() Obtain List of IDs of delivered resources
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIds(array $ResourceIds) Set List of IDs of delivered resources
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBigDealIds() Obtain Big order ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBigDealIds(array $BigDealIds) Set Big order ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AddInstancesResponse extends AbstractModel
{
    /**
     * @var string Freezing transaction. One freezing transaction ID is generated each time an instance is added.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TranId;

    /**
     * @var array Pay-as-You-Go order ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DealNames;

    /**
     * @var array List of IDs of delivered resources
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIds;

    /**
     * @var array Big order ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BigDealIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TranId Freezing transaction. One freezing transaction ID is generated each time an instance is added.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DealNames Pay-as-You-Go order ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceIds List of IDs of delivered resources
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BigDealIds Big order ID.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
