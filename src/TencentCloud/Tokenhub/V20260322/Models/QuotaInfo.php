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
 * Token quota information
 *
 * @method string getPkgId() Obtain Quota package ID.
 * @method void setPkgId(string $PkgId) Set Quota package ID.
 * @method integer getStatus() Obtain Package status. Value: 1 (normal), 3 (exhausted), 4 (terminated).
 * @method void setStatus(integer $Status) Set Package status. Value: 1 (normal), 3 (exhausted), 4 (terminated).
 * @method string getCycleUnit() Obtain Quota period. Value: d (by day), m (monthly), lifetime (total quota, no reset).
 * @method void setCycleUnit(string $CycleUnit) Set Quota period. Value: d (by day), m (monthly), lifetime (total quota, no reset).
 * @method string getCycleCredits() Obtain Dimensional quota total amount (number of tokens). Use string to avoid precision loss.
 * @method void setCycleCredits(string $CycleCredits) Set Dimensional quota total amount (number of tokens). Use string to avoid precision loss.
 * @method string getCycleUsed() Obtain Dimensional used amount (number of tokens). Use string literal to avoid precision loss.
 * @method void setCycleUsed(string $CycleUsed) Set Dimensional used amount (number of tokens). Use string literal to avoid precision loss.
 * @method string getStartTime() Obtain Quota effective start time.
 * @method void setStartTime(string $StartTime) Set Quota effective start time.
 * @method string getExpireTime() Obtain Quota expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Quota expiration time.
 */
class QuotaInfo extends AbstractModel
{
    /**
     * @var string Quota package ID.
     */
    public $PkgId;

    /**
     * @var integer Package status. Value: 1 (normal), 3 (exhausted), 4 (terminated).
     */
    public $Status;

    /**
     * @var string Quota period. Value: d (by day), m (monthly), lifetime (total quota, no reset).
     */
    public $CycleUnit;

    /**
     * @var string Dimensional quota total amount (number of tokens). Use string to avoid precision loss.
     */
    public $CycleCredits;

    /**
     * @var string Dimensional used amount (number of tokens). Use string literal to avoid precision loss.
     */
    public $CycleUsed;

    /**
     * @var string Quota effective start time.
     */
    public $StartTime;

    /**
     * @var string Quota expiration time.
     */
    public $ExpireTime;

    /**
     * @param string $PkgId Quota package ID.
     * @param integer $Status Package status. Value: 1 (normal), 3 (exhausted), 4 (terminated).
     * @param string $CycleUnit Quota period. Value: d (by day), m (monthly), lifetime (total quota, no reset).
     * @param string $CycleCredits Dimensional quota total amount (number of tokens). Use string to avoid precision loss.
     * @param string $CycleUsed Dimensional used amount (number of tokens). Use string literal to avoid precision loss.
     * @param string $StartTime Quota effective start time.
     * @param string $ExpireTime Quota expiration time.
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
        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("CycleCredits",$param) and $param["CycleCredits"] !== null) {
            $this->CycleCredits = $param["CycleCredits"];
        }

        if (array_key_exists("CycleUsed",$param) and $param["CycleUsed"] !== null) {
            $this->CycleUsed = $param["CycleUsed"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
