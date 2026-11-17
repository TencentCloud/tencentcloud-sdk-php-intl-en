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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHostVulExportJob request structure.
 *
 * @method string getBusinessAction() Obtain <p>Export action</p><p>Enumeration values:</p><ul><li>LinuxHostVulRiskList: linux vulnerability risk list</li><li>WebCmsHostVulRiskList: WebCms vulnerability risk list</li><li>AppHostVulRiskList: App vulnerability risk list</li><li>EmergencyHostVulRiskList: Emergency vulnerability risk list</li><li>KBRiskList: Windows kb risk list</li><li>RelateHostList: Associated host list</li><li>WhiteList: Vulnerability allowlist</li></ul>
 * @method void setBusinessAction(string $BusinessAction) Set <p>Export action</p><p>Enumeration values:</p><ul><li>LinuxHostVulRiskList: linux vulnerability risk list</li><li>WebCmsHostVulRiskList: WebCms vulnerability risk list</li><li>AppHostVulRiskList: App vulnerability risk list</li><li>EmergencyHostVulRiskList: Emergency vulnerability risk list</li><li>KBRiskList: Windows kb risk list</li><li>RelateHostList: Associated host list</li><li>WhiteList: Vulnerability allowlist</li></ul>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Criteria array, multi-condition uses AND relationship with each other<br>Supported Filter.Name:<br>KbID: KB risk associated host requires adding KB Risk ID as needed<br>VulID: Vulnerability risk associated host requires adding vul Risk ID as needed</p>
 * @method void setFilters(array $Filters) Set <p>Criteria array, multi-condition uses AND relationship with each other<br>Supported Filter.Name:<br>KbID: KB risk associated host requires adding KB Risk ID as needed<br>VulID: Vulnerability risk associated host requires adding vul Risk ID as needed</p>
 */
class CreateHostVulExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>Export action</p><p>Enumeration values:</p><ul><li>LinuxHostVulRiskList: linux vulnerability risk list</li><li>WebCmsHostVulRiskList: WebCms vulnerability risk list</li><li>AppHostVulRiskList: App vulnerability risk list</li><li>EmergencyHostVulRiskList: Emergency vulnerability risk list</li><li>KBRiskList: Windows kb risk list</li><li>RelateHostList: Associated host list</li><li>WhiteList: Vulnerability allowlist</li></ul>
     */
    public $BusinessAction;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Criteria array, multi-condition uses AND relationship with each other<br>Supported Filter.Name:<br>KbID: KB risk associated host requires adding KB Risk ID as needed<br>VulID: Vulnerability risk associated host requires adding vul Risk ID as needed</p>
     */
    public $Filters;

    /**
     * @param string $BusinessAction <p>Export action</p><p>Enumeration values:</p><ul><li>LinuxHostVulRiskList: linux vulnerability risk list</li><li>WebCmsHostVulRiskList: WebCms vulnerability risk list</li><li>AppHostVulRiskList: App vulnerability risk list</li><li>EmergencyHostVulRiskList: Emergency vulnerability risk list</li><li>KBRiskList: Windows kb risk list</li><li>RelateHostList: Associated host list</li><li>WhiteList: Vulnerability allowlist</li></ul>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Criteria array, multi-condition uses AND relationship with each other<br>Supported Filter.Name:<br>KbID: KB risk associated host requires adding KB Risk ID as needed<br>VulID: Vulnerability risk associated host requires adding vul Risk ID as needed</p>
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
        if (array_key_exists("BusinessAction",$param) and $param["BusinessAction"] !== null) {
            $this->BusinessAction = $param["BusinessAction"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
