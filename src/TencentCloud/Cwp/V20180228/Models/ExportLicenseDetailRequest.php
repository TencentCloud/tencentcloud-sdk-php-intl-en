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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportLicenseDetail request structure.
 *
 * @method array getFilters() Obtain Take the intersection when filtering with multiple conditions: LicenseStatus, DeadlineStatus, ResourceId, and Keywords
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>ResourceId resource ID</li>
 * @method void setFilters(array $Filters) Set Take the intersection when filtering with multiple conditions: LicenseStatus, DeadlineStatus, ResourceId, and Keywords
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>ResourceId resource ID</li>
 * @method boolean getIsHistory() Obtain Whether to export all authorization details
 * @method void setIsHistory(boolean $IsHistory) Set Whether to export all authorization details
 * @method array getTags() Obtain Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
 * @method void setTags(array $Tags) Set Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
 * @method string getExportMonth() Obtain Export month, this parameter is optional only when IsHistory is active.
 * @method void setExportMonth(string $ExportMonth) Set Export month, this parameter is optional only when IsHistory is active.
 */
class ExportLicenseDetailRequest extends AbstractModel
{
    /**
     * @var array Take the intersection when filtering with multiple conditions: LicenseStatus, DeadlineStatus, ResourceId, and Keywords
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>ResourceId resource ID</li>
     */
    public $Filters;

    /**
     * @var boolean Whether to export all authorization details
     */
    public $IsHistory;

    /**
     * @var array Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
     */
    public $Tags;

    /**
     * @var string Export month, this parameter is optional only when IsHistory is active.
     */
    public $ExportMonth;

    /**
     * @param array $Filters Take the intersection when filtering with multiple conditions: LicenseStatus, DeadlineStatus, ResourceId, and Keywords
<li> LicenseType authorization type. 0: Pro Edition-pay-as-you-go; 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription</li>
<li>ResourceId resource ID</li>
     * @param boolean $IsHistory Whether to export all authorization details
     * @param array $Tags Tag filtering; filter by the platform's tag capabilities. In this case, you should pass in the tag key and tag value as an object.
     * @param string $ExportMonth Export month, this parameter is optional only when IsHistory is active.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsHistory",$param) and $param["IsHistory"] !== null) {
            $this->IsHistory = $param["IsHistory"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExportMonth",$param) and $param["ExportMonth"] !== null) {
            $this->ExportMonth = $param["ExportMonth"];
        }
    }
}
