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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Key limit and usage information
 *
 * @method string getExclusiveQuota() Obtain Dedicated limit. Units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method void setExclusiveQuota(string $ExclusiveQuota) Set Dedicated limit. Units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method string getExclusiveUsed() Obtain Used amount of the dedicated limit. The measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method void setExclusiveUsed(string $ExclusiveUsed) Set Used amount of the dedicated limit. The measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method string getExclusiveRemain() Obtain Remaining exclusive quota. Units are as follows:
-Package type: professional. Measurement unit: point.
-Package type: lite package. Measurement unit: token.
 * @method void setExclusiveRemain(string $ExclusiveRemain) Set Remaining exclusive quota. Units are as follows:
-Package type: professional. Measurement unit: point.
-Package type: lite package. Measurement unit: token.
 * @method string getSharedQuota() Obtain Shared credit limit. -1 means unlimited. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method void setSharedQuota(string $SharedQuota) Set Shared credit limit. -1 means unlimited. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method string getSharedUsed() Obtain Used amount of the shared quota. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method void setSharedUsed(string $SharedUsed) Set Used amount of the shared quota. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method string getSharedRemain() Obtain Remaining shared quota. Units are described as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method void setSharedRemain(string $SharedRemain) Set Remaining shared quota. Units are described as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
 * @method integer getStatus() Obtain API Key package status. Valid values: 0 (normal), 1 (exhausted).
 * @method void setStatus(integer $Status) Set API Key package status. Valid values: 0 (normal), 1 (exhausted).
 */
class SubPackageBalance extends AbstractModel
{
    /**
     * @var string Dedicated limit. Units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     */
    public $ExclusiveQuota;

    /**
     * @var string Used amount of the dedicated limit. The measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     */
    public $ExclusiveUsed;

    /**
     * @var string Remaining exclusive quota. Units are as follows:
-Package type: professional. Measurement unit: point.
-Package type: lite package. Measurement unit: token.
     */
    public $ExclusiveRemain;

    /**
     * @var string Shared credit limit. -1 means unlimited. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     */
    public $SharedQuota;

    /**
     * @var string Used amount of the shared quota. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     */
    public $SharedUsed;

    /**
     * @var string Remaining shared quota. Units are described as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     */
    public $SharedRemain;

    /**
     * @var integer API Key package status. Valid values: 0 (normal), 1 (exhausted).
     */
    public $Status;

    /**
     * @param string $ExclusiveQuota Dedicated limit. Units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     * @param string $ExclusiveUsed Used amount of the dedicated limit. The measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     * @param string $ExclusiveRemain Remaining exclusive quota. Units are as follows:
-Package type: professional. Measurement unit: point.
-Package type: lite package. Measurement unit: token.
     * @param string $SharedQuota Shared credit limit. -1 means unlimited. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     * @param string $SharedUsed Used amount of the shared quota. Measurement units are as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     * @param string $SharedRemain Remaining shared quota. Units are described as follows:
-Package type is professional package, measurement unit value is point;
-Package type: lite package. Measurement unit: token.
     * @param integer $Status API Key package status. Valid values: 0 (normal), 1 (exhausted).
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
        if (array_key_exists("ExclusiveQuota",$param) and $param["ExclusiveQuota"] !== null) {
            $this->ExclusiveQuota = $param["ExclusiveQuota"];
        }

        if (array_key_exists("ExclusiveUsed",$param) and $param["ExclusiveUsed"] !== null) {
            $this->ExclusiveUsed = $param["ExclusiveUsed"];
        }

        if (array_key_exists("ExclusiveRemain",$param) and $param["ExclusiveRemain"] !== null) {
            $this->ExclusiveRemain = $param["ExclusiveRemain"];
        }

        if (array_key_exists("SharedQuota",$param) and $param["SharedQuota"] !== null) {
            $this->SharedQuota = $param["SharedQuota"];
        }

        if (array_key_exists("SharedUsed",$param) and $param["SharedUsed"] !== null) {
            $this->SharedUsed = $param["SharedUsed"];
        }

        if (array_key_exists("SharedRemain",$param) and $param["SharedRemain"] !== null) {
            $this->SharedRemain = $param["SharedRemain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
