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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public network bandwidth parameters
 *
 * @method string getPublicNetworkChargeType() Obtain Public network bandwidth billing mode (`BANDWIDTH_PREPAID`: Monthly subscription; `BANDWIDTH_POSTPAID_BY_HOUR`: Bill-by-hour)
 * @method void setPublicNetworkChargeType(string $PublicNetworkChargeType) Set Public network bandwidth billing mode (`BANDWIDTH_PREPAID`: Monthly subscription; `BANDWIDTH_POSTPAID_BY_HOUR`: Bill-by-hour)
 * @method integer getPublicNetworkMonthly() Obtain Public network bandwidth in MB
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set Public network bandwidth in MB
 */
class InquiryPublicNetworkParam extends AbstractModel
{
    /**
     * @var string Public network bandwidth billing mode (`BANDWIDTH_PREPAID`: Monthly subscription; `BANDWIDTH_POSTPAID_BY_HOUR`: Bill-by-hour)
     */
    public $PublicNetworkChargeType;

    /**
     * @var integer Public network bandwidth in MB
     */
    public $PublicNetworkMonthly;

    /**
     * @param string $PublicNetworkChargeType Public network bandwidth billing mode (`BANDWIDTH_PREPAID`: Monthly subscription; `BANDWIDTH_POSTPAID_BY_HOUR`: Bill-by-hour)
     * @param integer $PublicNetworkMonthly Public network bandwidth in MB
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
        if (array_key_exists("PublicNetworkChargeType",$param) and $param["PublicNetworkChargeType"] !== null) {
            $this->PublicNetworkChargeType = $param["PublicNetworkChargeType"];
        }

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }
    }
}
