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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenew request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getTimeSpan() Obtain Purchase period, combined with TimeUnit for the changes to take effect
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase period, combined with TimeUnit for the changes to take effect
 * @method string getTimeUnit() Obtain Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
 */
class InquirePriceRenewRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Purchase period, combined with TimeUnit for the changes to take effect
     */
    public $TimeSpan;

    /**
     * @var string Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
     */
    public $TimeUnit;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $TimeSpan Purchase period, combined with TimeUnit for the changes to take effect
     * @param string $TimeUnit Duration unit, takes effect when combined with TimeSpan. Options: day:d, month:m
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
