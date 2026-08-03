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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwStatusMonitor request structure.
 *
 * @method string getOp() Obtain Operation type. describe_scene means discovery of scenarios and secondary dropdown options; fetch_scene means acquisition of scenario-based snapshots. Required.
 * @method void setOp(string $Op) Set Operation type. describe_scene means discovery of scenarios and secondary dropdown options; fetch_scene means acquisition of scenario-based snapshots. Required.
 * @method string getFirewallType() Obtain Firewall scenario type. Supports internet_edge (Internet edge firewall), nat_cluster (NAT border firewall - cluster), nat_ha (NAT border firewall - primary/secondary), vpc_cluster (VPC boundary firewall - cluster), vpc_ha (VPC boundary firewall - primary/secondary). Required.
 * @method void setFirewallType(string $FirewallType) Set Firewall scenario type. Supports internet_edge (Internet edge firewall), nat_cluster (NAT border firewall - cluster), nat_ha (NAT border firewall - primary/secondary), vpc_cluster (VPC boundary firewall - cluster), vpc_ha (VPC boundary firewall - primary/secondary). Required.
 * @method string getSelectionId() Obtain Secondary dropdown option ID. fetch_scene is imported as needed, and the value comes from selection.available_options[].ID returned by describe_scene. internet_edge is the region, NAT is the instance ID, and VPC bandwidth scenario is the firewall group ID. The connections aggregation scenario for VPC_cluster ignores this parameter.
 * @method void setSelectionId(string $SelectionId) Set Secondary dropdown option ID. fetch_scene is imported as needed, and the value comes from selection.available_options[].ID returned by describe_scene. internet_edge is the region, NAT is the instance ID, and VPC bandwidth scenario is the firewall group ID. The connections aggregation scenario for VPC_cluster ignores this parameter.
 * @method string getSelectionName() Obtain Secondary dropdown display name. Can be used as an alternative to SelectionId for matching by name. The value comes from selection.available_options[].name returned by describe_scene.
 * @method void setSelectionName(string $SelectionName) Set Secondary dropdown display name. Can be used as an alternative to SelectionId for matching by name. The value comes from selection.available_options[].name returned by describe_scene.
 * @method string getSelectionInstanceId() Obtain Engine instance ID. Mainly used in vpc ha scenarios where a firewall group corresponds to multiple instances. Preferentially use the selection.available_options[].instance_ID returned by describe_scene. If only instance_ids are available, select a string value from the array.
 * @method void setSelectionInstanceId(string $SelectionInstanceId) Set Engine instance ID. Mainly used in vpc ha scenarios where a firewall group corresponds to multiple instances. Preferentially use the selection.available_options[].instance_ID returned by describe_scene. If only instance_ids are available, select a string value from the array.
 * @method string getMetric() Obtain Metrics tab. fetch_scene can be passed; used when not passed, this scenario default value. Support bandwidth, connections.
 * @method void setMetric(string $Metric) Set Metrics tab. fetch_scene can be passed; used when not passed, this scenario default value. Support bandwidth, connections.
 * @method string getPerspective() Obtain Perspective under the metric. fetch_scene is optional; the default value for this scenario is used when not provided. Supports ip, subnet, session, switch, and vpc. The actual usable composite is subject to the return from describe_scene.
 * @method void setPerspective(string $Perspective) Set Perspective under the metric. fetch_scene is optional; the default value for this scenario is used when not provided. Supports ip, subnet, session, switch, and vpc. The actual usable composite is subject to the return from describe_scene.
 * @method string getIpScope() Obtain NAT primary/secondary number of connections IP perspective range. External means external IP, asset means Asset IP. Only nat_ha + connections + ip is used. Other group input will return InvalidParameter.
 * @method void setIpScope(string $IpScope) Set NAT primary/secondary number of connections IP perspective range. External means external IP, asset means Asset IP. Only nat_ha + connections + ip is used. Other group input will return InvalidParameter.
 * @method string getTimePreset() Obtain Preset time range. Default 24h; used by fetch_scene. Supports 5m, 15m, 30m, 1h, 6h, 24h, 3d, 7d, 30d, today, yesterday, day before yesterday, this week, last week, this month.
 * @method void setTimePreset(string $TimePreset) Set Preset time range. Default 24h; used by fetch_scene. Supports 5m, 15m, 30m, 1h, 6h, 24h, 3d, 7d, 30d, today, yesterday, day before yesterday, this week, last week, this month.
 * @method string getStartTime() Obtain Custom start time. Format YYYY-MM-DD HH:MM:SS; must be specified together with EndTime, maximum span 30 days.
 * @method void setStartTime(string $StartTime) Set Custom start time. Format YYYY-MM-DD HH:MM:SS; must be specified together with EndTime, maximum span 30 days.
 * @method string getEndTime() Obtain Custom end time. Format YYYY-MM-DD HH:MM:SS; must be consistent with StartTime at the same time, maximum span 30 days.
 * @method void setEndTime(string $EndTime) Set Custom end time. Format YYYY-MM-DD HH:MM:SS; must be consistent with StartTime at the same time, maximum span 30 days.
 * @method integer getPage() Obtain Page number, starting from 1. Default is 1; used for the fetch_scene list viewing angle.
 * @method void setPage(integer $Page) Set Page number, starting from 1. Default is 1; used for the fetch_scene list viewing angle.
 * @method integer getLimit() Obtain Entries per page. Default 10, value 1 to 100; used for the viewing angle of the fetch_scene list.
 * @method void setLimit(integer $Limit) Set Entries per page. Default 10, value 1 to 100; used for the viewing angle of the fetch_scene list.
 * @method boolean getOverviewOnly() Obtain Whether to only get overview data. When true, fetch_scene only requests overview, skips table/detail, and is suitable for viewing scenario snapshot summary.
 * @method void setOverviewOnly(boolean $OverviewOnly) Set Whether to only get overview data. When true, fetch_scene only requests overview, skips table/detail, and is suitable for viewing scenario snapshot summary.
 * @method integer getOffset() Obtain Original offset coverage. Option, overwrites the calculation result of Page after input; value 0 to 10000.
 * @method void setOffset(integer $Offset) Set Original offset coverage. Option, overwrites the calculation result of Page after input; value 0 to 10000.
 * @method string getSortBy() Obtain Sorting field. Option. InputMax and OutputMax are supported for the Internet boundary IP and NAT IP/subnet perspective. SwitchName is supported for the VPC switch perspective. FlowMax is supported for the VPC IP/VPC perspective. Do not pass other groups.
 * @method void setSortBy(string $SortBy) Set Sorting field. Option. InputMax and OutputMax are supported for the Internet boundary IP and NAT IP/subnet perspective. SwitchName is supported for the VPC switch perspective. FlowMax is supported for the VPC IP/VPC perspective. Do not pass other groups.
 * @method string getSortOrder() Obtain Sorting order. Default desc; supports asc, desc.
 * @method void setSortOrder(string $SortOrder) Set Sorting order. Default desc; supports asc, desc.
 * @method array getFilters() Obtain Filter condition list. Reserved.
 * @method void setFilters(array $Filters) Set Filter condition list. Reserved.
 */
class DescribeCfwStatusMonitorRequest extends AbstractModel
{
    /**
     * @var string Operation type. describe_scene means discovery of scenarios and secondary dropdown options; fetch_scene means acquisition of scenario-based snapshots. Required.
     */
    public $Op;

    /**
     * @var string Firewall scenario type. Supports internet_edge (Internet edge firewall), nat_cluster (NAT border firewall - cluster), nat_ha (NAT border firewall - primary/secondary), vpc_cluster (VPC boundary firewall - cluster), vpc_ha (VPC boundary firewall - primary/secondary). Required.
     */
    public $FirewallType;

    /**
     * @var string Secondary dropdown option ID. fetch_scene is imported as needed, and the value comes from selection.available_options[].ID returned by describe_scene. internet_edge is the region, NAT is the instance ID, and VPC bandwidth scenario is the firewall group ID. The connections aggregation scenario for VPC_cluster ignores this parameter.
     */
    public $SelectionId;

    /**
     * @var string Secondary dropdown display name. Can be used as an alternative to SelectionId for matching by name. The value comes from selection.available_options[].name returned by describe_scene.
     */
    public $SelectionName;

    /**
     * @var string Engine instance ID. Mainly used in vpc ha scenarios where a firewall group corresponds to multiple instances. Preferentially use the selection.available_options[].instance_ID returned by describe_scene. If only instance_ids are available, select a string value from the array.
     */
    public $SelectionInstanceId;

    /**
     * @var string Metrics tab. fetch_scene can be passed; used when not passed, this scenario default value. Support bandwidth, connections.
     */
    public $Metric;

    /**
     * @var string Perspective under the metric. fetch_scene is optional; the default value for this scenario is used when not provided. Supports ip, subnet, session, switch, and vpc. The actual usable composite is subject to the return from describe_scene.
     */
    public $Perspective;

    /**
     * @var string NAT primary/secondary number of connections IP perspective range. External means external IP, asset means Asset IP. Only nat_ha + connections + ip is used. Other group input will return InvalidParameter.
     */
    public $IpScope;

    /**
     * @var string Preset time range. Default 24h; used by fetch_scene. Supports 5m, 15m, 30m, 1h, 6h, 24h, 3d, 7d, 30d, today, yesterday, day before yesterday, this week, last week, this month.
     */
    public $TimePreset;

    /**
     * @var string Custom start time. Format YYYY-MM-DD HH:MM:SS; must be specified together with EndTime, maximum span 30 days.
     */
    public $StartTime;

    /**
     * @var string Custom end time. Format YYYY-MM-DD HH:MM:SS; must be consistent with StartTime at the same time, maximum span 30 days.
     */
    public $EndTime;

    /**
     * @var integer Page number, starting from 1. Default is 1; used for the fetch_scene list viewing angle.
     */
    public $Page;

    /**
     * @var integer Entries per page. Default 10, value 1 to 100; used for the viewing angle of the fetch_scene list.
     */
    public $Limit;

    /**
     * @var boolean Whether to only get overview data. When true, fetch_scene only requests overview, skips table/detail, and is suitable for viewing scenario snapshot summary.
     */
    public $OverviewOnly;

    /**
     * @var integer Original offset coverage. Option, overwrites the calculation result of Page after input; value 0 to 10000.
     */
    public $Offset;

    /**
     * @var string Sorting field. Option. InputMax and OutputMax are supported for the Internet boundary IP and NAT IP/subnet perspective. SwitchName is supported for the VPC switch perspective. FlowMax is supported for the VPC IP/VPC perspective. Do not pass other groups.
     */
    public $SortBy;

    /**
     * @var string Sorting order. Default desc; supports asc, desc.
     */
    public $SortOrder;

    /**
     * @var array Filter condition list. Reserved.
     */
    public $Filters;

    /**
     * @param string $Op Operation type. describe_scene means discovery of scenarios and secondary dropdown options; fetch_scene means acquisition of scenario-based snapshots. Required.
     * @param string $FirewallType Firewall scenario type. Supports internet_edge (Internet edge firewall), nat_cluster (NAT border firewall - cluster), nat_ha (NAT border firewall - primary/secondary), vpc_cluster (VPC boundary firewall - cluster), vpc_ha (VPC boundary firewall - primary/secondary). Required.
     * @param string $SelectionId Secondary dropdown option ID. fetch_scene is imported as needed, and the value comes from selection.available_options[].ID returned by describe_scene. internet_edge is the region, NAT is the instance ID, and VPC bandwidth scenario is the firewall group ID. The connections aggregation scenario for VPC_cluster ignores this parameter.
     * @param string $SelectionName Secondary dropdown display name. Can be used as an alternative to SelectionId for matching by name. The value comes from selection.available_options[].name returned by describe_scene.
     * @param string $SelectionInstanceId Engine instance ID. Mainly used in vpc ha scenarios where a firewall group corresponds to multiple instances. Preferentially use the selection.available_options[].instance_ID returned by describe_scene. If only instance_ids are available, select a string value from the array.
     * @param string $Metric Metrics tab. fetch_scene can be passed; used when not passed, this scenario default value. Support bandwidth, connections.
     * @param string $Perspective Perspective under the metric. fetch_scene is optional; the default value for this scenario is used when not provided. Supports ip, subnet, session, switch, and vpc. The actual usable composite is subject to the return from describe_scene.
     * @param string $IpScope NAT primary/secondary number of connections IP perspective range. External means external IP, asset means Asset IP. Only nat_ha + connections + ip is used. Other group input will return InvalidParameter.
     * @param string $TimePreset Preset time range. Default 24h; used by fetch_scene. Supports 5m, 15m, 30m, 1h, 6h, 24h, 3d, 7d, 30d, today, yesterday, day before yesterday, this week, last week, this month.
     * @param string $StartTime Custom start time. Format YYYY-MM-DD HH:MM:SS; must be specified together with EndTime, maximum span 30 days.
     * @param string $EndTime Custom end time. Format YYYY-MM-DD HH:MM:SS; must be consistent with StartTime at the same time, maximum span 30 days.
     * @param integer $Page Page number, starting from 1. Default is 1; used for the fetch_scene list viewing angle.
     * @param integer $Limit Entries per page. Default 10, value 1 to 100; used for the viewing angle of the fetch_scene list.
     * @param boolean $OverviewOnly Whether to only get overview data. When true, fetch_scene only requests overview, skips table/detail, and is suitable for viewing scenario snapshot summary.
     * @param integer $Offset Original offset coverage. Option, overwrites the calculation result of Page after input; value 0 to 10000.
     * @param string $SortBy Sorting field. Option. InputMax and OutputMax are supported for the Internet boundary IP and NAT IP/subnet perspective. SwitchName is supported for the VPC switch perspective. FlowMax is supported for the VPC IP/VPC perspective. Do not pass other groups.
     * @param string $SortOrder Sorting order. Default desc; supports asc, desc.
     * @param array $Filters Filter condition list. Reserved.
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
        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("FirewallType",$param) and $param["FirewallType"] !== null) {
            $this->FirewallType = $param["FirewallType"];
        }

        if (array_key_exists("SelectionId",$param) and $param["SelectionId"] !== null) {
            $this->SelectionId = $param["SelectionId"];
        }

        if (array_key_exists("SelectionName",$param) and $param["SelectionName"] !== null) {
            $this->SelectionName = $param["SelectionName"];
        }

        if (array_key_exists("SelectionInstanceId",$param) and $param["SelectionInstanceId"] !== null) {
            $this->SelectionInstanceId = $param["SelectionInstanceId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Perspective",$param) and $param["Perspective"] !== null) {
            $this->Perspective = $param["Perspective"];
        }

        if (array_key_exists("IpScope",$param) and $param["IpScope"] !== null) {
            $this->IpScope = $param["IpScope"];
        }

        if (array_key_exists("TimePreset",$param) and $param["TimePreset"] !== null) {
            $this->TimePreset = $param["TimePreset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OverviewOnly",$param) and $param["OverviewOnly"] !== null) {
            $this->OverviewOnly = $param["OverviewOnly"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CfwStatusMonitorFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
