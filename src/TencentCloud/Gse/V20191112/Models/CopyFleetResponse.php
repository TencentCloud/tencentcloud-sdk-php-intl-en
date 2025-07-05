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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyFleet response structure.
 *
 * @method array getFleetAttributes() Obtain Server fleet attributes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFleetAttributes(array $FleetAttributes) Set Server fleet attributes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getTotalCount() Obtain The number of server fleets
 * @method void setTotalCount(integer $TotalCount) Set The number of server fleets
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CopyFleetResponse extends AbstractModel
{
    /**
     * @var array Server fleet attributes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FleetAttributes;

    /**
     * @var integer The number of server fleets
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $FleetAttributes Server fleet attributes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $TotalCount The number of server fleets
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
        if (array_key_exists("FleetAttributes",$param) and $param["FleetAttributes"] !== null) {
            $this->FleetAttributes = [];
            foreach ($param["FleetAttributes"] as $key => $value){
                $obj = new FleetAttributes();
                $obj->deserialize($value);
                array_push($this->FleetAttributes, $obj);
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
