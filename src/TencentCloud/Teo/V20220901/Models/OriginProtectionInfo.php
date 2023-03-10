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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin protection configuration
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method array getHosts() Obtain List of domain names.
 * @method void setHosts(array $Hosts) Set List of domain names.
 * @method array getProxyIds() Obtain List of proxy IDs.
 * @method void setProxyIds(array $ProxyIds) Set List of proxy IDs.
 * @method IPWhitelist getCurrentIPWhitelist() Obtain The existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCurrentIPWhitelist(IPWhitelist $CurrentIPWhitelist) Set The existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getNeedUpdate() Obtain Whether the intermediate IP update is needed for the site. Values:
<li>`true`: Update needed;</li>
<li>`false`: Update not needed.</li>
 * @method void setNeedUpdate(boolean $NeedUpdate) Set Whether the intermediate IP update is needed for the site. Values:
<li>`true`: Update needed;</li>
<li>`false`: Update not needed.</li>
 * @method string getStatus() Obtain Status of the origin protection configuration. Values:
<li>`online`: Origin protection is activated;</li>
<li>`offline`: Origin protection is disabled.</li>
<li>`nonactivate`: Origin protection is not activated. This value is returned only when the feature is not activated before it’s used.</li>
 * @method void setStatus(string $Status) Set Status of the origin protection configuration. Values:
<li>`online`: Origin protection is activated;</li>
<li>`offline`: Origin protection is disabled.</li>
<li>`nonactivate`: Origin protection is not activated. This value is returned only when the feature is not activated before it’s used.</li>
 * @method boolean getPlanSupport() Obtain Whether origin protection is supported in the plan. Values:
<li>`true`: Origin protection supported;</li>
<li>`false`: Origin protection not supported.</li>
 * @method void setPlanSupport(boolean $PlanSupport) Set Whether origin protection is supported in the plan. Values:
<li>`true`: Origin protection supported;</li>
<li>`false`: Origin protection not supported.</li>
 * @method DiffIPWhitelist getDiffIPWhitelist() Obtain Differences between the latest and existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiffIPWhitelist(DiffIPWhitelist $DiffIPWhitelist) Set Differences between the latest and existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class OriginProtectionInfo extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var array List of domain names.
     */
    public $Hosts;

    /**
     * @var array List of proxy IDs.
     */
    public $ProxyIds;

    /**
     * @var IPWhitelist The existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CurrentIPWhitelist;

    /**
     * @var boolean Whether the intermediate IP update is needed for the site. Values:
<li>`true`: Update needed;</li>
<li>`false`: Update not needed.</li>
     */
    public $NeedUpdate;

    /**
     * @var string Status of the origin protection configuration. Values:
<li>`online`: Origin protection is activated;</li>
<li>`offline`: Origin protection is disabled.</li>
<li>`nonactivate`: Origin protection is not activated. This value is returned only when the feature is not activated before it’s used.</li>
     */
    public $Status;

    /**
     * @var boolean Whether origin protection is supported in the plan. Values:
<li>`true`: Origin protection supported;</li>
<li>`false`: Origin protection not supported.</li>
     */
    public $PlanSupport;

    /**
     * @var DiffIPWhitelist Differences between the latest and existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiffIPWhitelist;

    /**
     * @param string $ZoneId ID of the site.
     * @param array $Hosts List of domain names.
     * @param array $ProxyIds List of proxy IDs.
     * @param IPWhitelist $CurrentIPWhitelist The existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $NeedUpdate Whether the intermediate IP update is needed for the site. Values:
<li>`true`: Update needed;</li>
<li>`false`: Update not needed.</li>
     * @param string $Status Status of the origin protection configuration. Values:
<li>`online`: Origin protection is activated;</li>
<li>`offline`: Origin protection is disabled.</li>
<li>`nonactivate`: Origin protection is not activated. This value is returned only when the feature is not activated before it’s used.</li>
     * @param boolean $PlanSupport Whether origin protection is supported in the plan. Values:
<li>`true`: Origin protection supported;</li>
<li>`false`: Origin protection not supported.</li>
     * @param DiffIPWhitelist $DiffIPWhitelist Differences between the latest and existing intermediate IPs.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("CurrentIPWhitelist",$param) and $param["CurrentIPWhitelist"] !== null) {
            $this->CurrentIPWhitelist = new IPWhitelist();
            $this->CurrentIPWhitelist->deserialize($param["CurrentIPWhitelist"]);
        }

        if (array_key_exists("NeedUpdate",$param) and $param["NeedUpdate"] !== null) {
            $this->NeedUpdate = $param["NeedUpdate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PlanSupport",$param) and $param["PlanSupport"] !== null) {
            $this->PlanSupport = $param["PlanSupport"];
        }

        if (array_key_exists("DiffIPWhitelist",$param) and $param["DiffIPWhitelist"] !== null) {
            $this->DiffIPWhitelist = new DiffIPWhitelist();
            $this->DiffIPWhitelist->deserialize($param["DiffIPWhitelist"]);
        }
    }
}
