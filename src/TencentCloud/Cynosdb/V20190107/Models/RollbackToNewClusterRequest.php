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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackToNewCluster request structure.
 *
 * @method string getZone() Obtain AZ.
 * @method void setZone(string $Zone) Set AZ.
 * @method string getOriginalClusterId() Obtain During rollback, pass in the source cluster ID to find the source pool ID.
 * @method void setOriginalClusterId(string $OriginalClusterId) Set During rollback, pass in the source cluster ID to find the source pool ID.
 * @method string getUniqVpcId() Obtain VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID.
 * @method string getUniqSubnetId() Obtain Subnet ID.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID.
 * @method string getClusterName() Obtain The cluster name should contain fewer than 64 characters. Valid values for each character: uppercase/lowercase letters, digits, and special characters ('-', '_', and '.').
 * @method void setClusterName(string $ClusterName) Set The cluster name should contain fewer than 64 characters. Valid values for each character: uppercase/lowercase letters, digits, and special characters ('-', '_', and '.').
 * @method integer getRollbackId() Obtain Rolls back by snapshot, which indicates snapshotId; rolls back by time point, which indicates queryId. When the value of queryId is 0, it indicates that the validity of the time point needs to be verified.
 * @method void setRollbackId(integer $RollbackId) Set Rolls back by snapshot, which indicates snapshotId; rolls back by time point, which indicates queryId. When the value of queryId is 0, it indicates that the validity of the time point needs to be verified.
 * @method string getExpectTime() Obtain Rolls back by time point, which indicates the specified time; rolls back by snapshot, which indicates the snapshot time.
 * @method void setExpectTime(string $ExpectTime) Set Rolls back by time point, which indicates the specified time; rolls back by snapshot, which indicates the snapshot time.
 * @method integer getAutoVoucher() Obtain Whether to select promo vouchers automatically. 1: yes; 0: no. The default value is 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to select promo vouchers automatically. 1: yes; 0: no. The default value is 0.
 * @method array getResourceTags() Obtain Information about the tag array to be bound during cluster creation.
 * @method void setResourceTags(array $ResourceTags) Set Information about the tag array to be bound during cluster creation.
 * @method string getDbMode() Obtain Database type. When the value of DbType is MYSQL, the valid values are NORMAL and SERVERLESS (the default value is NORMAL).
 * @method void setDbMode(string $DbMode) Set Database type. When the value of DbType is MYSQL, the valid values are NORMAL and SERVERLESS (the default value is NORMAL).
 * @method float getMinCpu() Obtain This parameter is required when the value of DbMode is SEVERLESS. For the settings of the minimum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
 * @method void setMinCpu(float $MinCpu) Set This parameter is required when the value of DbMode is SEVERLESS. For the settings of the minimum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
 * @method float getMaxCpu() Obtain This parameter is required when the value of DbMode is SEVERLESS. For the settings of the maximum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
 * @method void setMaxCpu(float $MaxCpu) Set This parameter is required when the value of DbMode is SEVERLESS. For the settings of the maximum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
 * @method string getAutoPause() Obtain Specifies whether the cluster is automatically paused when the value of DbMode is SEVERLESS. Valid values: yes; no. The default value is yes.
 * @method void setAutoPause(string $AutoPause) Set Specifies whether the cluster is automatically paused when the value of DbMode is SEVERLESS. Valid values: yes; no. The default value is yes.
 * @method integer getAutoPauseDelay() Obtain Specifies the delay for automatic cluster pause (in seconds) when the value of DbMode is SEVERLESS. Value range: [600, 691200]. The default value is 600.
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set Specifies the delay for automatic cluster pause (in seconds) when the value of DbMode is SEVERLESS. Value range: [600, 691200]. The default value is 600.
 * @method array getSecurityGroupIds() Obtain Security group ID array.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID array.
 * @method array getAlarmPolicyIds() Obtain Alarm policy ID array.
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set Alarm policy ID array.
 * @method array getClusterParams() Obtain Parameter array. The character_set_server (utf8 | latin1 | gbk | utf8mb4) is currently supported. lower_case_table_names: 1 - case-insensitive; 0 - case-sensitive.
 * @method void setClusterParams(array $ClusterParams) Set Parameter array. The character_set_server (utf8 | latin1 | gbk | utf8mb4) is currently supported. lower_case_table_names: 1 - case-insensitive; 0 - case-sensitive.
 * @method integer getParamTemplateId() Obtain Parameter template ID, which can be obtained through the DescribeParamTemplates API.
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID, which can be obtained through the DescribeParamTemplates API.
 * @method array getInstanceInitInfos() Obtain Instance initialization configuration information, which is mainly used for selecting different instance specifications during cluster purchase.
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set Instance initialization configuration information, which is mainly used for selecting different instance specifications during cluster purchase.
 * @method integer getDealMode() Obtain 0 - place an order and pay; 1 - place an order.
 * @method void setDealMode(integer $DealMode) Set 0 - place an order and pay; 1 - place an order.
 * @method integer getPayMode() Obtain Compute node billing mode: 0 - pay-as-you-go; 1 - prepaid.
 * @method void setPayMode(integer $PayMode) Set Compute node billing mode: 0 - pay-as-you-go; 1 - prepaid.
 * @method integer getTimeSpan() Obtain Time.
 * @method void setTimeSpan(integer $TimeSpan) Set Time.
 * @method string getTimeUnit() Obtain Unit.
 * @method void setTimeUnit(string $TimeUnit) Set Unit.
 * @method array getRollbackDatabases() Obtain Rollback database information.
 * @method void setRollbackDatabases(array $RollbackDatabases) Set Rollback database information.
 * @method array getRollbackTables() Obtain Rollback table information.
 * @method void setRollbackTables(array $RollbackTables) Set Rollback table information.
 * @method array getOriginalROInstanceList() Obtain Source read-only instance information.
 * @method void setOriginalROInstanceList(array $OriginalROInstanceList) Set Source read-only instance information.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getAutoArchive() Obtain Whether to enable archiving. Valid values: yes; no. The default value is yes.
 * @method void setAutoArchive(string $AutoArchive) Set Whether to enable archiving. Valid values: yes; no. The default value is yes.
 */
class RollbackToNewClusterRequest extends AbstractModel
{
    /**
     * @var string AZ.
     */
    public $Zone;

    /**
     * @var string During rollback, pass in the source cluster ID to find the source pool ID.
     */
    public $OriginalClusterId;

    /**
     * @var string VPC ID.
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID.
     */
    public $UniqSubnetId;

    /**
     * @var string The cluster name should contain fewer than 64 characters. Valid values for each character: uppercase/lowercase letters, digits, and special characters ('-', '_', and '.').
     */
    public $ClusterName;

    /**
     * @var integer Rolls back by snapshot, which indicates snapshotId; rolls back by time point, which indicates queryId. When the value of queryId is 0, it indicates that the validity of the time point needs to be verified.
     */
    public $RollbackId;

    /**
     * @var string Rolls back by time point, which indicates the specified time; rolls back by snapshot, which indicates the snapshot time.
     */
    public $ExpectTime;

    /**
     * @var integer Whether to select promo vouchers automatically. 1: yes; 0: no. The default value is 0.
     */
    public $AutoVoucher;

    /**
     * @var array Information about the tag array to be bound during cluster creation.
     */
    public $ResourceTags;

    /**
     * @var string Database type. When the value of DbType is MYSQL, the valid values are NORMAL and SERVERLESS (the default value is NORMAL).
     */
    public $DbMode;

    /**
     * @var float This parameter is required when the value of DbMode is SEVERLESS. For the settings of the minimum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
     */
    public $MinCpu;

    /**
     * @var float This parameter is required when the value of DbMode is SEVERLESS. For the settings of the maximum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
     */
    public $MaxCpu;

    /**
     * @var string Specifies whether the cluster is automatically paused when the value of DbMode is SEVERLESS. Valid values: yes; no. The default value is yes.
     */
    public $AutoPause;

    /**
     * @var integer Specifies the delay for automatic cluster pause (in seconds) when the value of DbMode is SEVERLESS. Value range: [600, 691200]. The default value is 600.
     */
    public $AutoPauseDelay;

    /**
     * @var array Security group ID array.
     */
    public $SecurityGroupIds;

    /**
     * @var array Alarm policy ID array.
     */
    public $AlarmPolicyIds;

    /**
     * @var array Parameter array. The character_set_server (utf8 | latin1 | gbk | utf8mb4) is currently supported. lower_case_table_names: 1 - case-insensitive; 0 - case-sensitive.
     */
    public $ClusterParams;

    /**
     * @var integer Parameter template ID, which can be obtained through the DescribeParamTemplates API.
     */
    public $ParamTemplateId;

    /**
     * @var array Instance initialization configuration information, which is mainly used for selecting different instance specifications during cluster purchase.
     */
    public $InstanceInitInfos;

    /**
     * @var integer 0 - place an order and pay; 1 - place an order.
     */
    public $DealMode;

    /**
     * @var integer Compute node billing mode: 0 - pay-as-you-go; 1 - prepaid.
     */
    public $PayMode;

    /**
     * @var integer Time.
     */
    public $TimeSpan;

    /**
     * @var string Unit.
     */
    public $TimeUnit;

    /**
     * @var array Rollback database information.
     */
    public $RollbackDatabases;

    /**
     * @var array Rollback table information.
     */
    public $RollbackTables;

    /**
     * @var array Source read-only instance information.
     */
    public $OriginalROInstanceList;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Whether to enable archiving. Valid values: yes; no. The default value is yes.
     */
    public $AutoArchive;

    /**
     * @param string $Zone AZ.
     * @param string $OriginalClusterId During rollback, pass in the source cluster ID to find the source pool ID.
     * @param string $UniqVpcId VPC ID.
     * @param string $UniqSubnetId Subnet ID.
     * @param string $ClusterName The cluster name should contain fewer than 64 characters. Valid values for each character: uppercase/lowercase letters, digits, and special characters ('-', '_', and '.').
     * @param integer $RollbackId Rolls back by snapshot, which indicates snapshotId; rolls back by time point, which indicates queryId. When the value of queryId is 0, it indicates that the validity of the time point needs to be verified.
     * @param string $ExpectTime Rolls back by time point, which indicates the specified time; rolls back by snapshot, which indicates the snapshot time.
     * @param integer $AutoVoucher Whether to select promo vouchers automatically. 1: yes; 0: no. The default value is 0.
     * @param array $ResourceTags Information about the tag array to be bound during cluster creation.
     * @param string $DbMode Database type. When the value of DbType is MYSQL, the valid values are NORMAL and SERVERLESS (the default value is NORMAL).
     * @param float $MinCpu This parameter is required when the value of DbMode is SEVERLESS. For the settings of the minimum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
     * @param float $MaxCpu This parameter is required when the value of DbMode is SEVERLESS. For the settings of the maximum CPU value, refer to the value returned by the DescribeServerlessInstanceSpecs API for the valid value.
     * @param string $AutoPause Specifies whether the cluster is automatically paused when the value of DbMode is SEVERLESS. Valid values: yes; no. The default value is yes.
     * @param integer $AutoPauseDelay Specifies the delay for automatic cluster pause (in seconds) when the value of DbMode is SEVERLESS. Value range: [600, 691200]. The default value is 600.
     * @param array $SecurityGroupIds Security group ID array.
     * @param array $AlarmPolicyIds Alarm policy ID array.
     * @param array $ClusterParams Parameter array. The character_set_server (utf8 | latin1 | gbk | utf8mb4) is currently supported. lower_case_table_names: 1 - case-insensitive; 0 - case-sensitive.
     * @param integer $ParamTemplateId Parameter template ID, which can be obtained through the DescribeParamTemplates API.
     * @param array $InstanceInitInfos Instance initialization configuration information, which is mainly used for selecting different instance specifications during cluster purchase.
     * @param integer $DealMode 0 - place an order and pay; 1 - place an order.
     * @param integer $PayMode Compute node billing mode: 0 - pay-as-you-go; 1 - prepaid.
     * @param integer $TimeSpan Time.
     * @param string $TimeUnit Unit.
     * @param array $RollbackDatabases Rollback database information.
     * @param array $RollbackTables Rollback table information.
     * @param array $OriginalROInstanceList Source read-only instance information.
     * @param integer $ProjectId Project ID
     * @param string $AutoArchive Whether to enable archiving. Valid values: yes; no. The default value is yes.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }

        if (array_key_exists("ClusterParams",$param) and $param["ClusterParams"] !== null) {
            $this->ClusterParams = [];
            foreach ($param["ClusterParams"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParams, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new InstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("OriginalROInstanceList",$param) and $param["OriginalROInstanceList"] !== null) {
            $this->OriginalROInstanceList = $param["OriginalROInstanceList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }
    }
}
