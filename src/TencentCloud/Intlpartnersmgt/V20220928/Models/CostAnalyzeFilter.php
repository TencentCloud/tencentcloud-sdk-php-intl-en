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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis filter input
 *
 * @method array getBusinessIn() Obtain <p>Contains product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessIn(array $BusinessIn) Set <p>Contains product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProductIn() Obtain <p>Contains sub-product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductIn(array $ProductIn) Set <p>Contains sub-product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRegionIn() Obtain <p>Contains region id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionIn(array $RegionIn) Set <p>Contains region id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActionTypeIn() Obtain <p>Contains transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionTypeIn(array $ActionTypeIn) Set <p>Contains transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayModeIn() Obtain <p>Includes payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayModeIn(array $PayModeIn) Set <p>Includes payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProjectIn() Obtain <p>Include project name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectIn(array $ProjectIn) Set <p>Include project name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayerUinIn() Obtain <p>Contains payer uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerUinIn(array $PayerUinIn) Set <p>Contains payer uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTagKey() Obtain <p>Tag key.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagKey(string $TagKey) Set <p>Tag key.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagIn() Obtain <p>Tag value list</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagIn(array $TagIn) Set <p>Tag value list</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIn() Obtain <p>Contains availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIn(array $ZoneIn) Set <p>Contains availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOwnerUinIn() Obtain <p>Owner uin</p>
 * @method void setOwnerUinIn(array $OwnerUinIn) Set <p>Owner uin</p>
 * @method array getComponentIn() Obtain <p>Component type info</p>
 * @method void setComponentIn(array $ComponentIn) Set <p>Component type info</p>
 * @method array getItemIn() Obtain <p>Component name</p>
 * @method void setItemIn(array $ItemIn) Set <p>Component name</p>
 * @method array getResourceIn() Obtain <p>Resource id information</p>
 * @method void setResourceIn(array $ResourceIn) Set <p>Resource id information</p>
 */
class CostAnalyzeFilter extends AbstractModel
{
    /**
     * @var array <p>Contains product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessIn;

    /**
     * @var array <p>Contains sub-product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductIn;

    /**
     * @var array <p>Contains region id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionIn;

    /**
     * @var array <p>Contains transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionTypeIn;

    /**
     * @var array <p>Includes payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayModeIn;

    /**
     * @var array <p>Include project name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectIn;

    /**
     * @var array <p>Contains payer uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerUinIn;

    /**
     * @var string <p>Tag key.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagKey;

    /**
     * @var array <p>Tag value list</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagIn;

    /**
     * @var array <p>Contains availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIn;

    /**
     * @var array <p>Owner uin</p>
     */
    public $OwnerUinIn;

    /**
     * @var array <p>Component type info</p>
     */
    public $ComponentIn;

    /**
     * @var array <p>Component name</p>
     */
    public $ItemIn;

    /**
     * @var array <p>Resource id information</p>
     */
    public $ResourceIn;

    /**
     * @param array $BusinessIn <p>Contains product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProductIn <p>Contains sub-product code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RegionIn <p>Contains region id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ActionTypeIn <p>Contains transaction type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayModeIn <p>Includes payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProjectIn <p>Include project name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayerUinIn <p>Contains payer uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TagKey <p>Tag key.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagIn <p>Tag value list</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIn <p>Contains availability zones</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OwnerUinIn <p>Owner uin</p>
     * @param array $ComponentIn <p>Component type info</p>
     * @param array $ItemIn <p>Component name</p>
     * @param array $ResourceIn <p>Resource id information</p>
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
        if (array_key_exists("BusinessIn",$param) and $param["BusinessIn"] !== null) {
            $this->BusinessIn = $param["BusinessIn"];
        }

        if (array_key_exists("ProductIn",$param) and $param["ProductIn"] !== null) {
            $this->ProductIn = $param["ProductIn"];
        }

        if (array_key_exists("RegionIn",$param) and $param["RegionIn"] !== null) {
            $this->RegionIn = $param["RegionIn"];
        }

        if (array_key_exists("ActionTypeIn",$param) and $param["ActionTypeIn"] !== null) {
            $this->ActionTypeIn = $param["ActionTypeIn"];
        }

        if (array_key_exists("PayModeIn",$param) and $param["PayModeIn"] !== null) {
            $this->PayModeIn = $param["PayModeIn"];
        }

        if (array_key_exists("ProjectIn",$param) and $param["ProjectIn"] !== null) {
            $this->ProjectIn = $param["ProjectIn"];
        }

        if (array_key_exists("PayerUinIn",$param) and $param["PayerUinIn"] !== null) {
            $this->PayerUinIn = $param["PayerUinIn"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagIn",$param) and $param["TagIn"] !== null) {
            $this->TagIn = $param["TagIn"];
        }

        if (array_key_exists("ZoneIn",$param) and $param["ZoneIn"] !== null) {
            $this->ZoneIn = $param["ZoneIn"];
        }

        if (array_key_exists("OwnerUinIn",$param) and $param["OwnerUinIn"] !== null) {
            $this->OwnerUinIn = $param["OwnerUinIn"];
        }

        if (array_key_exists("ComponentIn",$param) and $param["ComponentIn"] !== null) {
            $this->ComponentIn = $param["ComponentIn"];
        }

        if (array_key_exists("ItemIn",$param) and $param["ItemIn"] !== null) {
            $this->ItemIn = $param["ItemIn"];
        }

        if (array_key_exists("ResourceIn",$param) and $param["ResourceIn"] !== null) {
            $this->ResourceIn = $param["ResourceIn"];
        }
    }
}
