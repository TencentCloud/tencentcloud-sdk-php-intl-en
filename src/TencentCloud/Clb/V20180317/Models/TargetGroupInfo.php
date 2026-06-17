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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target group information
 *
 * @method string getTargetGroupId() Obtain <p>Target group ID</p>
 * @method void setTargetGroupId(string $TargetGroupId) Set <p>Target group ID</p>
 * @method string getVpcId() Obtain <p>VPC ID of the target group</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID of the target group</p>
 * @method string getTargetGroupName() Obtain <p>Target group name</p>
 * @method void setTargetGroupName(string $TargetGroupName) Set <p>Target group name</p>
 * @method integer getPort() Obtain <p>Default port of target group. This field returns 0 for full listen target group, indicating an invalid port.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set <p>Default port of target group. This field returns 0 for full listen target group, indicating an invalid port.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain <p>Creation time of target group</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Creation time of target group</p>
 * @method string getUpdatedTime() Obtain <p>Target group modification time</p>
 * @method void setUpdatedTime(string $UpdatedTime) Set <p>Target group modification time</p>
 * @method array getAssociatedRule() Obtain <p>Associated rule array. This parameter cannot be obtained in the DescribeTargetGroupList API call.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedRule(array $AssociatedRule) Set <p>Associated rule array. This parameter cannot be obtained in the DescribeTargetGroupList API call.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain <p>Backend forwarding protocol of the target group. Only the new version target group v2 returns a valid value.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set <p>Backend forwarding protocol of the target group. Only the new version target group v2 returns a valid value.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduleAlgorithm() Obtain <p>Scheduling algorithm. This parameter returns valid values only for target groups with backend forwarding protocol (HTTP, HTTPS, GRPC). Available values:</p><ur></p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li></ur>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set <p>Scheduling algorithm. This parameter returns valid values only for target groups with backend forwarding protocol (HTTP, HTTPS, GRPC). Available values:</p><ur></p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li></ur>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TargetGroupHealthCheck getHealthCheck() Obtain <p>Health check details.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set <p>Health check details.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetGroupType() Obtain <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group). Defaults to v1 (legacy version target group).</p>
 * @method void setTargetGroupType(string $TargetGroupType) Set <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group). Defaults to v1 (legacy version target group).</p>
 * @method integer getAssociatedRuleCount() Obtain <p>Number of rules associated with the target group.</p>
 * @method void setAssociatedRuleCount(integer $AssociatedRuleCount) Set <p>Number of rules associated with the target group.</p>
 * @method integer getRegisteredInstancesCount() Obtain <p>Number of instances in the target group.</p>
 * @method void setRegisteredInstancesCount(integer $RegisteredInstancesCount) Set <p>Number of instances in the target group.</p>
 * @method array getTag() Obtain <p>Tag.</p>
 * @method void setTag(array $Tag) Set <p>Tag.</p>
 * @method integer getWeight() Obtain <p>Default weight. Only target groups of v2 type return this field. When NULL is returned, it means the default weight is not set.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set <p>Default weight. Only target groups of v2 type return this field. When NULL is returned, it means the default weight is not set.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getFullListenSwitch() Obtain <p>Whether to listen to the target group.</p>
 * @method void setFullListenSwitch(boolean $FullListenSwitch) Set <p>Whether to listen to the target group.</p>
 * @method boolean getKeepaliveEnable() Obtain <p>Whether to enable long connections. Only target groups with HTTP/HTTPS/GRPC as the backend forwarding protocol return a valid value.</p>
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set <p>Whether to enable long connections. Only target groups with HTTP/HTTPS/GRPC as the backend forwarding protocol return a valid value.</p>
 * @method integer getSessionExpireTime() Obtain <p>Session hold time. Only target groups with backend forwarding protocol set to HTTP/HTTPS/GRPC return a valid value.</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set <p>Session hold time. Only target groups with backend forwarding protocol set to HTTP/HTTPS/GRPC return a valid value.</p>
 * @method string getIpVersion() Obtain <p>IP version.</p>
 * @method void setIpVersion(string $IpVersion) Set <p>IP version.</p>
 * @method boolean getSnatEnable() Obtain <p>Whether to enable SNAT</p>
 * @method void setSnatEnable(boolean $SnatEnable) Set <p>Whether to enable SNAT</p>
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string <p>Target group ID</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>VPC ID of the target group</p>
     */
    public $VpcId;

    /**
     * @var string <p>Target group name</p>
     */
    public $TargetGroupName;

    /**
     * @var integer <p>Default port of target group. This field returns 0 for full listen target group, indicating an invalid port.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string <p>Creation time of target group</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Target group modification time</p>
     */
    public $UpdatedTime;

    /**
     * @var array <p>Associated rule array. This parameter cannot be obtained in the DescribeTargetGroupList API call.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedRule;

    /**
     * @var string <p>Backend forwarding protocol of the target group. Only the new version target group v2 returns a valid value.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string <p>Scheduling algorithm. This parameter returns valid values only for target groups with backend forwarding protocol (HTTP, HTTPS, GRPC). Available values:</p><ur></p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li></ur>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck <p>Health check details.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group). Defaults to v1 (legacy version target group).</p>
     */
    public $TargetGroupType;

    /**
     * @var integer <p>Number of rules associated with the target group.</p>
     */
    public $AssociatedRuleCount;

    /**
     * @var integer <p>Number of instances in the target group.</p>
     */
    public $RegisteredInstancesCount;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tag;

    /**
     * @var integer <p>Default weight. Only target groups of v2 type return this field. When NULL is returned, it means the default weight is not set.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var boolean <p>Whether to listen to the target group.</p>
     */
    public $FullListenSwitch;

    /**
     * @var boolean <p>Whether to enable long connections. Only target groups with HTTP/HTTPS/GRPC as the backend forwarding protocol return a valid value.</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>Session hold time. Only target groups with backend forwarding protocol set to HTTP/HTTPS/GRPC return a valid value.</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>IP version.</p>
     */
    public $IpVersion;

    /**
     * @var boolean <p>Whether to enable SNAT</p>
     */
    public $SnatEnable;

    /**
     * @param string $TargetGroupId <p>Target group ID</p>
     * @param string $VpcId <p>VPC ID of the target group</p>
     * @param string $TargetGroupName <p>Target group name</p>
     * @param integer $Port <p>Default port of target group. This field returns 0 for full listen target group, indicating an invalid port.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime <p>Creation time of target group</p>
     * @param string $UpdatedTime <p>Target group modification time</p>
     * @param array $AssociatedRule <p>Associated rule array. This parameter cannot be obtained in the DescribeTargetGroupList API call.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol <p>Backend forwarding protocol of the target group. Only the new version target group v2 returns a valid value.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScheduleAlgorithm <p>Scheduling algorithm. This parameter returns valid values only for target groups with backend forwarding protocol (HTTP, HTTPS, GRPC). Available values:</p><ur></p><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li></ur>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TargetGroupHealthCheck $HealthCheck <p>Health check details.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetGroupType <p>Target Group Type, currently supported v1 (legacy version target group), v2 (new version target group). Defaults to v1 (legacy version target group).</p>
     * @param integer $AssociatedRuleCount <p>Number of rules associated with the target group.</p>
     * @param integer $RegisteredInstancesCount <p>Number of instances in the target group.</p>
     * @param array $Tag <p>Tag.</p>
     * @param integer $Weight <p>Default weight. Only target groups of v2 type return this field. When NULL is returned, it means the default weight is not set.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $FullListenSwitch <p>Whether to listen to the target group.</p>
     * @param boolean $KeepaliveEnable <p>Whether to enable long connections. Only target groups with HTTP/HTTPS/GRPC as the backend forwarding protocol return a valid value.</p>
     * @param integer $SessionExpireTime <p>Session hold time. Only target groups with backend forwarding protocol set to HTTP/HTTPS/GRPC return a valid value.</p>
     * @param string $IpVersion <p>IP version.</p>
     * @param boolean $SnatEnable <p>Whether to enable SNAT</p>
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("AssociatedRule",$param) and $param["AssociatedRule"] !== null) {
            $this->AssociatedRule = [];
            foreach ($param["AssociatedRule"] as $key => $value){
                $obj = new AssociationItem();
                $obj->deserialize($value);
                array_push($this->AssociatedRule, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("TargetGroupType",$param) and $param["TargetGroupType"] !== null) {
            $this->TargetGroupType = $param["TargetGroupType"];
        }

        if (array_key_exists("AssociatedRuleCount",$param) and $param["AssociatedRuleCount"] !== null) {
            $this->AssociatedRuleCount = $param["AssociatedRuleCount"];
        }

        if (array_key_exists("RegisteredInstancesCount",$param) and $param["RegisteredInstancesCount"] !== null) {
            $this->RegisteredInstancesCount = $param["RegisteredInstancesCount"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("FullListenSwitch",$param) and $param["FullListenSwitch"] !== null) {
            $this->FullListenSwitch = $param["FullListenSwitch"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }
    }
}
