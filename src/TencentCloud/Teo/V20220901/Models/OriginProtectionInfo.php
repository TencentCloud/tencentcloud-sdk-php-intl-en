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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin protection info
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method array getHosts() Obtain Domain name list.
 * @method void setHosts(array $Hosts) Set Domain name list.
 * @method array getProxyIds() Obtain List of proxy IDs.
 * @method void setProxyIds(array $ProxyIds) Set List of proxy IDs.
 * @method IPWhitelist getCurrentIPWhitelist() Obtain IP allowlist of the current version.
 * @method void setCurrentIPWhitelist(IPWhitelist $CurrentIPWhitelist) Set IP allowlist of the current version.
 * @method boolean getNeedUpdate() Obtain Whether to update the origin server allowlist for this site. Valid values:
<li>true: The IP allowlist needs to be updated;</li>
<li>false: No need to update the IP allowlist.</li>
 * @method void setNeedUpdate(boolean $NeedUpdate) Set Whether to update the origin server allowlist for this site. Valid values:
<li>true: The IP allowlist needs to be updated;</li>
<li>false: No need to update the IP allowlist.</li>
 * @method string getStatus() Obtain Origin protection status. Valid values:
<li>online: origin protection enabled;</li>
<li>offline: Origin protection disabled;</li>
<li>nonactivate: Origin protection is inactive. It is only returned in calls for sites that have never used the origin protection feature.</li>
 * @method void setStatus(string $Status) Set Origin protection status. Valid values:
<li>online: origin protection enabled;</li>
<li>offline: Origin protection disabled;</li>
<li>nonactivate: Origin protection is inactive. It is only returned in calls for sites that have never used the origin protection feature.</li>
 * @method boolean getPlanSupport() Obtain Whether origin protection is supported for the site package, with values:
<li>true: support;</li>
<li>false: not supported.</li>
 * @method void setPlanSupport(boolean $PlanSupport) Set Whether origin protection is supported for the site package, with values:
<li>true: support;</li>
<li>false: not supported.</li>
 * @method DiffIPWhitelist getDiffIPWhitelist() Obtain Comparison between the latest IP allowlist and the current IP allowlist.
 * @method void setDiffIPWhitelist(DiffIPWhitelist $DiffIPWhitelist) Set Comparison between the latest IP allowlist and the current IP allowlist.
 */
class OriginProtectionInfo extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var array Domain name list.
     */
    public $Hosts;

    /**
     * @var array List of proxy IDs.
     */
    public $ProxyIds;

    /**
     * @var IPWhitelist IP allowlist of the current version.
     */
    public $CurrentIPWhitelist;

    /**
     * @var boolean Whether to update the origin server allowlist for this site. Valid values:
<li>true: The IP allowlist needs to be updated;</li>
<li>false: No need to update the IP allowlist.</li>
     */
    public $NeedUpdate;

    /**
     * @var string Origin protection status. Valid values:
<li>online: origin protection enabled;</li>
<li>offline: Origin protection disabled;</li>
<li>nonactivate: Origin protection is inactive. It is only returned in calls for sites that have never used the origin protection feature.</li>
     */
    public $Status;

    /**
     * @var boolean Whether origin protection is supported for the site package, with values:
<li>true: support;</li>
<li>false: not supported.</li>
     */
    public $PlanSupport;

    /**
     * @var DiffIPWhitelist Comparison between the latest IP allowlist and the current IP allowlist.
     */
    public $DiffIPWhitelist;

    /**
     * @param string $ZoneId Site ID.
     * @param array $Hosts Domain name list.
     * @param array $ProxyIds List of proxy IDs.
     * @param IPWhitelist $CurrentIPWhitelist IP allowlist of the current version.
     * @param boolean $NeedUpdate Whether to update the origin server allowlist for this site. Valid values:
<li>true: The IP allowlist needs to be updated;</li>
<li>false: No need to update the IP allowlist.</li>
     * @param string $Status Origin protection status. Valid values:
<li>online: origin protection enabled;</li>
<li>offline: Origin protection disabled;</li>
<li>nonactivate: Origin protection is inactive. It is only returned in calls for sites that have never used the origin protection feature.</li>
     * @param boolean $PlanSupport Whether origin protection is supported for the site package, with values:
<li>true: support;</li>
<li>false: not supported.</li>
     * @param DiffIPWhitelist $DiffIPWhitelist Comparison between the latest IP allowlist and the current IP allowlist.
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
