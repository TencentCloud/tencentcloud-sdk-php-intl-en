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
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getVpcId() Obtain `vpcid` of target group
 * @method void setVpcId(string $VpcId) Set `vpcid` of target group
 * @method string getTargetGroupName() Obtain Target group name
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name
 * @method integer getPort() Obtain Specifies the default port of the target group. for a full listen target group, this field returns 0, indicating an invalid port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Specifies the default port of the target group. for a full listen target group, this field returns 0, indicating an invalid port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Target group creation time
 * @method void setCreatedTime(string $CreatedTime) Set Target group creation time
 * @method string getUpdatedTime() Obtain Target group modification time
 * @method void setUpdatedTime(string $UpdatedTime) Set Target group modification time
 * @method array getAssociatedRule() Obtain Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedRule(array $AssociatedRule) Set Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Backend forwarding protocol of the target group. only returns valid values for the new version (v2) target group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Backend forwarding protocol of the target group. only returns valid values for the new version (v2) target group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScheduleAlgorithm() Obtain Scheduling algorithm. returns a valid value only when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur>
<Li>WRR: weighted round-robin.</li>.
<Li>LEAST_CONN: specifies the least connection.</li>.
<Li>IP_HASH: based on ip hash.</li>.
</ur>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set Scheduling algorithm. returns a valid value only when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur>
<Li>WRR: weighted round-robin.</li>.
<Li>LEAST_CONN: specifies the least connection.</li>.
<Li>IP_HASH: based on ip hash.</li>.
</ur>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method TargetGroupHealthCheck getHealthCheck() Obtain Health check details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set Health check details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetGroupType() Obtain Target group type, currently supported v1 (legacy version target group) and v2 (new version target group). defaults to v1 (legacy version target group).
 * @method void setTargetGroupType(string $TargetGroupType) Set Target group type, currently supported v1 (legacy version target group) and v2 (new version target group). defaults to v1 (legacy version target group).
 * @method integer getAssociatedRuleCount() Obtain Number of rules associated with the target group.
 * @method void setAssociatedRuleCount(integer $AssociatedRuleCount) Set Number of rules associated with the target group.
 * @method integer getRegisteredInstancesCount() Obtain Specifies the number of instances in the target group.
 * @method void setRegisteredInstancesCount(integer $RegisteredInstancesCount) Set Specifies the number of instances in the target group.
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method integer getWeight() Obtain Default weight. only target groups of v2 type return this field. when NULL is returned, it means the default weight is not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Default weight. only target groups of v2 type return this field. when NULL is returned, it means the default weight is not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getFullListenSwitch() Obtain Specifies whether to listen to all target groups.
 * @method void setFullListenSwitch(boolean $FullListenSwitch) Set Specifies whether to listen to all target groups.
 * @method boolean getKeepaliveEnable() Obtain Whether to enable persistent connections. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and returned by the target group.
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set Whether to enable persistent connections. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and returned by the target group.
 * @method integer getSessionExpireTime() Obtain Session persistence time. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and the target group returns a valid value.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and the target group returns a valid value.
 * @method string getIpVersion() Obtain IP version.
 * @method void setIpVersion(string $IpVersion) Set IP version.
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string `vpcid` of target group
     */
    public $VpcId;

    /**
     * @var string Target group name
     */
    public $TargetGroupName;

    /**
     * @var integer Specifies the default port of the target group. for a full listen target group, this field returns 0, indicating an invalid port.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Target group creation time
     */
    public $CreatedTime;

    /**
     * @var string Target group modification time
     */
    public $UpdatedTime;

    /**
     * @var array Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedRule;

    /**
     * @var string Backend forwarding protocol of the target group. only returns valid values for the new version (v2) target group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Scheduling algorithm. returns a valid value only when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur>
<Li>WRR: weighted round-robin.</li>.
<Li>LEAST_CONN: specifies the least connection.</li>.
<Li>IP_HASH: based on ip hash.</li>.
</ur>

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck Health check details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string Target group type, currently supported v1 (legacy version target group) and v2 (new version target group). defaults to v1 (legacy version target group).
     */
    public $TargetGroupType;

    /**
     * @var integer Number of rules associated with the target group.
     */
    public $AssociatedRuleCount;

    /**
     * @var integer Specifies the number of instances in the target group.
     */
    public $RegisteredInstancesCount;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var integer Default weight. only target groups of v2 type return this field. when NULL is returned, it means the default weight is not set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var boolean Specifies whether to listen to all target groups.
     */
    public $FullListenSwitch;

    /**
     * @var boolean Whether to enable persistent connections. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and returned by the target group.
     */
    public $KeepaliveEnable;

    /**
     * @var integer Session persistence time. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and the target group returns a valid value.
     */
    public $SessionExpireTime;

    /**
     * @var string IP version.
     */
    public $IpVersion;

    /**
     * @param string $TargetGroupId Target group ID
     * @param string $VpcId `vpcid` of target group
     * @param string $TargetGroupName Target group name
     * @param integer $Port Specifies the default port of the target group. for a full listen target group, this field returns 0, indicating an invalid port.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Target group creation time
     * @param string $UpdatedTime Target group modification time
     * @param array $AssociatedRule Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Backend forwarding protocol of the target group. only returns valid values for the new version (v2) target group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScheduleAlgorithm Scheduling algorithm. returns a valid value only when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur>
<Li>WRR: weighted round-robin.</li>.
<Li>LEAST_CONN: specifies the least connection.</li>.
<Li>IP_HASH: based on ip hash.</li>.
</ur>

Note: This field may return null, indicating that no valid values can be obtained.
     * @param TargetGroupHealthCheck $HealthCheck Health check details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetGroupType Target group type, currently supported v1 (legacy version target group) and v2 (new version target group). defaults to v1 (legacy version target group).
     * @param integer $AssociatedRuleCount Number of rules associated with the target group.
     * @param integer $RegisteredInstancesCount Specifies the number of instances in the target group.
     * @param array $Tag Tag.
     * @param integer $Weight Default weight. only target groups of v2 type return this field. when NULL is returned, it means the default weight is not set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $FullListenSwitch Specifies whether to listen to all target groups.
     * @param boolean $KeepaliveEnable Whether to enable persistent connections. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and returned by the target group.
     * @param integer $SessionExpireTime Session persistence time. valid only when the backend forwarding protocol is HTTP/HTTPS/GRPC and the target group returns a valid value.
     * @param string $IpVersion IP version.
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
    }
}
