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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price details by AZ, used for creating the cluster price list
 *
 * @method string getZoneId() Obtain AZ ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set AZ ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNodeDetailPrice() Obtain Price details by node
 * @method void setNodeDetailPrice(array $NodeDetailPrice) Set Price details by node
 */
class ZoneDetailPriceResult extends AbstractModel
{
    /**
     * @var string AZ ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var array Price details by node
     */
    public $NodeDetailPrice;

    /**
     * @param string $ZoneId AZ ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NodeDetailPrice Price details by node
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodeDetailPrice",$param) and $param["NodeDetailPrice"] !== null) {
            $this->NodeDetailPrice = [];
            foreach ($param["NodeDetailPrice"] as $key => $value){
                $obj = new NodeDetailPriceResult();
                $obj->deserialize($value);
                array_push($this->NodeDetailPrice, $obj);
            }
        }
    }
}
