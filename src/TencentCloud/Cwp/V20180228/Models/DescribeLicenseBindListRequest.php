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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseBindList request structure.
 *
 * @method integer getLicenseId() Obtain <p>License ID. The value is the value of the LicenseId parameter under the List object of the DescribeLicenseList API.</p>
 * @method void setLicenseId(integer $LicenseId) Set <p>License ID. The value is the value of the LicenseId parameter under the List object of the DescribeLicenseList API.</p>
 * @method integer getLicenseType() Obtain <p>License type</p><p>Valid values:</p><ul><li>0: Pro Edition - pay-as-you-go</li><li>1: Pro Edition - monthly subscription (CWP)</li><li>2: Ultimate Edition - monthly subscription (CWP)</li><li>3: Lightweight Edition - LH monthly subscription</li><li>6: Pro Edition - monthly subscription (CSC)</li><li>7: Ultimate Edition - monthly subscription (CSC)</li></ul>
 * @method void setLicenseType(integer $LicenseType) Set <p>License type</p><p>Valid values:</p><ul><li>0: Pro Edition - pay-as-you-go</li><li>1: Pro Edition - monthly subscription (CWP)</li><li>2: Ultimate Edition - monthly subscription (CWP)</li><li>3: Lightweight Edition - LH monthly subscription</li><li>6: Pro Edition - monthly subscription (CSC)</li><li>7: Ultimate Edition - monthly subscription (CSC)</li></ul>
 * @method string getResourceId() Obtain <p>Resource ID. The value is the value of the ResourceId parameter under the List object of the DescribeLicenseList API.</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID. The value is the value of the ResourceId parameter under the List object of the DescribeLicenseList API.</p>
 * @method array getFilters() Obtain <li>Fuzzy search by InstanceID, IP, or <p>MachineName</p></li>
 * @method void setFilters(array $Filters) Set <li>Fuzzy search by InstanceID, IP, or <p>MachineName</p></li>
 * @method integer getLimit() Obtain <p>The maximum number of entries. Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>The maximum number of entries. Default value: 10.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 */
class DescribeLicenseBindListRequest extends AbstractModel
{
    /**
     * @var integer <p>License ID. The value is the value of the LicenseId parameter under the List object of the DescribeLicenseList API.</p>
     */
    public $LicenseId;

    /**
     * @var integer <p>License type</p><p>Valid values:</p><ul><li>0: Pro Edition - pay-as-you-go</li><li>1: Pro Edition - monthly subscription (CWP)</li><li>2: Ultimate Edition - monthly subscription (CWP)</li><li>3: Lightweight Edition - LH monthly subscription</li><li>6: Pro Edition - monthly subscription (CSC)</li><li>7: Ultimate Edition - monthly subscription (CSC)</li></ul>
     */
    public $LicenseType;

    /**
     * @var string <p>Resource ID. The value is the value of the ResourceId parameter under the List object of the DescribeLicenseList API.</p>
     */
    public $ResourceId;

    /**
     * @var array <li>Fuzzy search by InstanceID, IP, or <p>MachineName</p></li>
     */
    public $Filters;

    /**
     * @var integer <p>The maximum number of entries. Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @param integer $LicenseId <p>License ID. The value is the value of the LicenseId parameter under the List object of the DescribeLicenseList API.</p>
     * @param integer $LicenseType <p>License type</p><p>Valid values:</p><ul><li>0: Pro Edition - pay-as-you-go</li><li>1: Pro Edition - monthly subscription (CWP)</li><li>2: Ultimate Edition - monthly subscription (CWP)</li><li>3: Lightweight Edition - LH monthly subscription</li><li>6: Pro Edition - monthly subscription (CSC)</li><li>7: Ultimate Edition - monthly subscription (CSC)</li></ul>
     * @param string $ResourceId <p>Resource ID. The value is the value of the ResourceId parameter under the List object of the DescribeLicenseList API.</p>
     * @param array $Filters <li>Fuzzy search by InstanceID, IP, or <p>MachineName</p></li>
     * @param integer $Limit <p>The maximum number of entries. Default value: 10.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
