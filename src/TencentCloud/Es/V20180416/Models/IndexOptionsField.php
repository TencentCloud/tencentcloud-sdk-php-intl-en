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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index automation field
 *
 * @method string getExpireMaxAge() Obtain Max age for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExpireMaxAge(string $ExpireMaxAge) Set Max age for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getExpireMaxSize() Obtain Max size for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExpireMaxSize(string $ExpireMaxSize) Set Max size for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRolloverMaxAge() Obtain Rollover cycle
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRolloverMaxAge(string $RolloverMaxAge) Set Rollover cycle
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRolloverDynamic() Obtain Whether to enable the dynamic rollover
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRolloverDynamic(string $RolloverDynamic) Set Whether to enable the dynamic rollover
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getShardNumDynamic() Obtain Whether to enable dynamic sharding
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setShardNumDynamic(string $ShardNumDynamic) Set Whether to enable dynamic sharding
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getTimestampField() Obtain Timestamp field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTimestampField(string $TimestampField) Set Timestamp field
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getWriteMode() Obtain Write mode
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWriteMode(string $WriteMode) Set Write mode
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class IndexOptionsField extends AbstractModel
{
    /**
     * @var string Max age for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExpireMaxAge;

    /**
     * @var string Max size for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExpireMaxSize;

    /**
     * @var string Rollover cycle
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RolloverMaxAge;

    /**
     * @var string Whether to enable the dynamic rollover
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RolloverDynamic;

    /**
     * @var string Whether to enable dynamic sharding
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ShardNumDynamic;

    /**
     * @var string Timestamp field
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TimestampField;

    /**
     * @var string Write mode
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WriteMode;

    /**
     * @param string $ExpireMaxAge Max age for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ExpireMaxSize Max size for expiry purpose
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RolloverMaxAge Rollover cycle
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RolloverDynamic Whether to enable the dynamic rollover
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ShardNumDynamic Whether to enable dynamic sharding
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $TimestampField Timestamp field
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $WriteMode Write mode
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ExpireMaxAge",$param) and $param["ExpireMaxAge"] !== null) {
            $this->ExpireMaxAge = $param["ExpireMaxAge"];
        }

        if (array_key_exists("ExpireMaxSize",$param) and $param["ExpireMaxSize"] !== null) {
            $this->ExpireMaxSize = $param["ExpireMaxSize"];
        }

        if (array_key_exists("RolloverMaxAge",$param) and $param["RolloverMaxAge"] !== null) {
            $this->RolloverMaxAge = $param["RolloverMaxAge"];
        }

        if (array_key_exists("RolloverDynamic",$param) and $param["RolloverDynamic"] !== null) {
            $this->RolloverDynamic = $param["RolloverDynamic"];
        }

        if (array_key_exists("ShardNumDynamic",$param) and $param["ShardNumDynamic"] !== null) {
            $this->ShardNumDynamic = $param["ShardNumDynamic"];
        }

        if (array_key_exists("TimestampField",$param) and $param["TimestampField"] !== null) {
            $this->TimestampField = $param["TimestampField"];
        }

        if (array_key_exists("WriteMode",$param) and $param["WriteMode"] !== null) {
            $this->WriteMode = $param["WriteMode"];
        }
    }
}
