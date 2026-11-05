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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing value-added package usage information
 *
 * @method float getAddOnTotal() Obtain <p>Total value-added packages</p>
 * @method void setAddOnTotal(float $AddOnTotal) Set <p>Total value-added packages</p>
 * @method float getAddOnUsage() Obtain <p>Value-added package amount</p>
 * @method void setAddOnUsage(float $AddOnUsage) Set <p>Value-added package amount</p>
 * @method integer getExclusiveConcurrency() Obtain <p>Total number of exclusive concurrencies</p>
 * @method void setExclusiveConcurrency(integer $ExclusiveConcurrency) Set <p>Total number of exclusive concurrencies</p>
 * @method integer getResourceStatus() Obtain <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>2: Exhausted</li><li>3: Expired</li></ul>
 * @method void setResourceStatus(integer $ResourceStatus) Set <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>2: Exhausted</li><li>3: Expired</li></ul>
 * @method integer getConcurrencyStatus() Obtain <p>Exclusive concurrency status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
 * @method void setConcurrencyStatus(integer $ConcurrencyStatus) Set <p>Exclusive concurrency status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
 * @method integer getExclusiveTpm() Obtain <p>Exclusive tpm</p>
 * @method void setExclusiveTpm(integer $ExclusiveTpm) Set <p>Exclusive tpm</p>
 * @method integer getExclusiveTpmStatus() Obtain <p>Exclusive tpm status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
 * @method void setExclusiveTpmStatus(integer $ExclusiveTpmStatus) Set <p>Exclusive tpm status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
 * @method integer getExclusiveComputeUnit() Obtain <p>Exclusive computing unit</p>
 * @method void setExclusiveComputeUnit(integer $ExclusiveComputeUnit) Set <p>Exclusive computing unit</p>
 * @method integer getExclusiveComputeUnitStatus() Obtain <p>Exclusive computing unit status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li><li>4: Terminated</li><li>5: Isolated</li><li>6: Not effective</li><li>7: Unavailable (when the package expires)</li></ul>
 * @method void setExclusiveComputeUnitStatus(integer $ExclusiveComputeUnitStatus) Set <p>Exclusive computing unit status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li><li>4: Terminated</li><li>5: Isolated</li><li>6: Not effective</li><li>7: Unavailable (when the package expires)</li></ul>
 */
class AddOnPackageInfo extends AbstractModel
{
    /**
     * @var float <p>Total value-added packages</p>
     */
    public $AddOnTotal;

    /**
     * @var float <p>Value-added package amount</p>
     */
    public $AddOnUsage;

    /**
     * @var integer <p>Total number of exclusive concurrencies</p>
     */
    public $ExclusiveConcurrency;

    /**
     * @var integer <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>2: Exhausted</li><li>3: Expired</li></ul>
     */
    public $ResourceStatus;

    /**
     * @var integer <p>Exclusive concurrency status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
     */
    public $ConcurrencyStatus;

    /**
     * @var integer <p>Exclusive tpm</p>
     */
    public $ExclusiveTpm;

    /**
     * @var integer <p>Exclusive tpm status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
     */
    public $ExclusiveTpmStatus;

    /**
     * @var integer <p>Exclusive computing unit</p>
     */
    public $ExclusiveComputeUnit;

    /**
     * @var integer <p>Exclusive computing unit status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li><li>4: Terminated</li><li>5: Isolated</li><li>6: Not effective</li><li>7: Unavailable (when the package expires)</li></ul>
     */
    public $ExclusiveComputeUnitStatus;

    /**
     * @param float $AddOnTotal <p>Total value-added packages</p>
     * @param float $AddOnUsage <p>Value-added package amount</p>
     * @param integer $ExclusiveConcurrency <p>Total number of exclusive concurrencies</p>
     * @param integer $ResourceStatus <p>Resource pack status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>2: Exhausted</li><li>3: Expired</li></ul>
     * @param integer $ConcurrencyStatus <p>Exclusive concurrency status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
     * @param integer $ExclusiveTpm <p>Exclusive tpm</p>
     * @param integer $ExclusiveTpmStatus <p>Exclusive tpm status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li></ul>
     * @param integer $ExclusiveComputeUnit <p>Exclusive computing unit</p>
     * @param integer $ExclusiveComputeUnitStatus <p>Exclusive computing unit status</p><p>Enumeration values:</p><ul><li>1: Available</li><li>3: Expired</li><li>4: Terminated</li><li>5: Isolated</li><li>6: Not effective</li><li>7: Unavailable (when the package expires)</li></ul>
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
        if (array_key_exists("AddOnTotal",$param) and $param["AddOnTotal"] !== null) {
            $this->AddOnTotal = $param["AddOnTotal"];
        }

        if (array_key_exists("AddOnUsage",$param) and $param["AddOnUsage"] !== null) {
            $this->AddOnUsage = $param["AddOnUsage"];
        }

        if (array_key_exists("ExclusiveConcurrency",$param) and $param["ExclusiveConcurrency"] !== null) {
            $this->ExclusiveConcurrency = $param["ExclusiveConcurrency"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ConcurrencyStatus",$param) and $param["ConcurrencyStatus"] !== null) {
            $this->ConcurrencyStatus = $param["ConcurrencyStatus"];
        }

        if (array_key_exists("ExclusiveTpm",$param) and $param["ExclusiveTpm"] !== null) {
            $this->ExclusiveTpm = $param["ExclusiveTpm"];
        }

        if (array_key_exists("ExclusiveTpmStatus",$param) and $param["ExclusiveTpmStatus"] !== null) {
            $this->ExclusiveTpmStatus = $param["ExclusiveTpmStatus"];
        }

        if (array_key_exists("ExclusiveComputeUnit",$param) and $param["ExclusiveComputeUnit"] !== null) {
            $this->ExclusiveComputeUnit = $param["ExclusiveComputeUnit"];
        }

        if (array_key_exists("ExclusiveComputeUnitStatus",$param) and $param["ExclusiveComputeUnitStatus"] !== null) {
            $this->ExclusiveComputeUnitStatus = $param["ExclusiveComputeUnitStatus"];
        }
    }
}
