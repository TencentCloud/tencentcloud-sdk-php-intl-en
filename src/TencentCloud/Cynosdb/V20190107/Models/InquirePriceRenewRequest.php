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
 * InquirePriceRenew request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getTimeSpan() Obtain Validity period, which needs to be used together with `TimeUnit`.
 * @method void setTimeSpan(integer $TimeSpan) Set Validity period, which needs to be used together with `TimeUnit`.
 * @method string getTimeUnit() Obtain Unit of validity period, which needs to be used together with `TimeSpan`. Valid values: `d` (day), `m` (month).
 * @method void setTimeUnit(string $TimeUnit) Set Unit of validity period, which needs to be used together with `TimeSpan`. Valid values: `d` (day), `m` (month).
 */
class InquirePriceRenewRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Validity period, which needs to be used together with `TimeUnit`.
     */
    public $TimeSpan;

    /**
     * @var string Unit of validity period, which needs to be used together with `TimeSpan`. Valid values: `d` (day), `m` (month).
     */
    public $TimeUnit;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $TimeSpan Validity period, which needs to be used together with `TimeUnit`.
     * @param string $TimeUnit Unit of validity period, which needs to be used together with `TimeSpan`. Valid values: `d` (day), `m` (month).
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
