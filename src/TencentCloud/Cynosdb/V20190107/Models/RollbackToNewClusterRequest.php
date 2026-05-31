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
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getOriginalClusterId() Obtain <p>During rollback, input the source cluster ID to search for the source poolId</p>
 * @method void setOriginalClusterId(string $OriginalClusterId) Set <p>During rollback, input the source cluster ID to search for the source poolId</p>
 * @method string getUniqVpcId() Obtain <p>VPC network ID</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>VPC network ID</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet ID</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet ID</p>
 * @method string getClusterName() Obtain <p>Cluster name, length less than 64 characters. Each character value ranges from uppercase/lowercase letters, digits, to special symbols ('-', '_', '.').</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name, length less than 64 characters. Each character value ranges from uppercase/lowercase letters, digits, to special symbols ('-', '_', '.').</p>
 * @method integer getRollbackId() Obtain <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
 * @method void setRollbackId(integer $RollbackId) Set <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
 * @method string getExpectTime() Obtain <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method void setExpectTime(string $ExpectTime) Set <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
 * @method array getResourceTags() Obtain <p>tag Array information that should be bound for cluster creation</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>tag Array information that should be bound for cluster creation</p>
 * @method string getDbMode() Obtain <p>DB type<br>Selectable when DbType is MYSQL (default NORMAL):</p><li>NORMAL</li><li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) Set <p>DB type<br>Selectable when DbType is MYSQL (default NORMAL):</p><li>NORMAL</li><li>SERVERLESS</li>
 * @method float getMinCpu() Obtain <p>Required when DbMode is SEVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
 * @method void setMinCpu(float $MinCpu) Set <p>Required when DbMode is SEVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
 * @method float getMaxCpu() Obtain <p>Required when DbMode is SEVERLESS:<br>Maximum value of cpu. For the optional range, see the API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Required when DbMode is SEVERLESS:<br>Maximum value of cpu. For the optional range, see the API response of DescribeServerlessInstanceSpecs.</p>
 * @method string getAutoPause() Obtain <p>When DbMode is SEVERLESS, whether to automatically pause within specified clusters. Optional range</p><li>yes</li><li>no</li>Default value: yes
 * @method void setAutoPause(string $AutoPause) Set <p>When DbMode is SEVERLESS, whether to automatically pause within specified clusters. Optional range</p><li>yes</li><li>no</li>Default value: yes
 * @method integer getAutoPauseDelay() Obtain <p>When DbMode is SEVERLESS, specify the delay for Cluster Auto-Pause in seconds, optional range [600,691200]<br>Default value: 600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set <p>When DbMode is SEVERLESS, specify the delay for Cluster Auto-Pause in seconds, optional range [600,691200]<br>Default value: 600</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group id array</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group id array</p>
 * @method array getAlarmPolicyIds() Obtain <p>Alarm policy Id array</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set <p>Alarm policy Id array</p>
 * @method array getClusterParams() Obtain <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive.</p>
 * @method void setClusterParams(array $ClusterParams) Set <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive.</p>
 * @method integer getParamTemplateId() Obtain <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
 * @method array getInstanceInitInfos() Obtain <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
 * @method integer getDealMode() Obtain <p>0-Place order and pay 1-Placing order</p>
 * @method void setDealMode(integer $DealMode) Set <p>0-Place order and pay 1-Placing order</p>
 * @method integer getPayMode() Obtain <p>Pay-per-compute-node model: 0-Pay-As-You-Go, 1-Prepayment</p>
 * @method void setPayMode(integer $PayMode) Set <p>Pay-per-compute-node model: 0-Pay-As-You-Go, 1-Prepayment</p>
 * @method integer getTimeSpan() Obtain <p>Time</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Time</p>
 * @method string getTimeUnit() Obtain <p>Unit</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Unit</p>
 * @method array getRollbackDatabases() Obtain <p>Rollback database info</p>
 * @method void setRollbackDatabases(array $RollbackDatabases) Set <p>Rollback database info</p>
 * @method array getRollbackTables() Obtain <p>Roll back table information</p>
 * @method void setRollbackTables(array $RollbackTables) Set <p>Roll back table information</p>
 * @method array getOriginalROInstanceList() Obtain <p>Original ro instance information</p>
 * @method void setOriginalROInstanceList(array $OriginalROInstanceList) Set <p>Original ro instance information</p>
 * @method integer getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
 * @method string getAutoArchive() Obtain <p>Whether to enable archive. Optional range <li>yes</li><li>no</li> Default value: yes</p>
 * @method void setAutoArchive(string $AutoArchive) Set <p>Whether to enable archive. Optional range <li>yes</li><li>no</li> Default value: yes</p>
 * @method boolean getFromSaveBackup() Obtain <p>Whether to restore from the saved backup</p>
 * @method void setFromSaveBackup(boolean $FromSaveBackup) Set <p>Whether to restore from the saved backup</p>
 */
class RollbackToNewClusterRequest extends AbstractModel
{
    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>During rollback, input the source cluster ID to search for the source poolId</p>
     */
    public $OriginalClusterId;

    /**
     * @var string <p>VPC network ID</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet ID</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>Cluster name, length less than 64 characters. Each character value ranges from uppercase/lowercase letters, digits, to special symbols ('-', '_', '.').</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
     */
    public $RollbackId;

    /**
     * @var string <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     */
    public $ExpectTime;

    /**
     * @var integer <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>tag Array information that should be bound for cluster creation</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>DB type<br>Selectable when DbType is MYSQL (default NORMAL):</p><li>NORMAL</li><li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float <p>Required when DbMode is SEVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Required when DbMode is SEVERLESS:<br>Maximum value of cpu. For the optional range, see the API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>When DbMode is SEVERLESS, whether to automatically pause within specified clusters. Optional range</p><li>yes</li><li>no</li>Default value: yes
     */
    public $AutoPause;

    /**
     * @var integer <p>When DbMode is SEVERLESS, specify the delay for Cluster Auto-Pause in seconds, optional range [600,691200]<br>Default value: 600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var array <p>Security group id array</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>Alarm policy Id array</p>
     */
    public $AlarmPolicyIds;

    /**
     * @var array <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive.</p>
     */
    public $ClusterParams;

    /**
     * @var integer <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
     */
    public $InstanceInitInfos;

    /**
     * @var integer <p>0-Place order and pay 1-Placing order</p>
     */
    public $DealMode;

    /**
     * @var integer <p>Pay-per-compute-node model: 0-Pay-As-You-Go, 1-Prepayment</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Time</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Unit</p>
     */
    public $TimeUnit;

    /**
     * @var array <p>Rollback database info</p>
     */
    public $RollbackDatabases;

    /**
     * @var array <p>Roll back table information</p>
     */
    public $RollbackTables;

    /**
     * @var array <p>Original ro instance information</p>
     */
    public $OriginalROInstanceList;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Whether to enable archive. Optional range <li>yes</li><li>no</li> Default value: yes</p>
     */
    public $AutoArchive;

    /**
     * @var boolean <p>Whether to restore from the saved backup</p>
     */
    public $FromSaveBackup;

    /**
     * @param string $Zone <p>AZ.</p>
     * @param string $OriginalClusterId <p>During rollback, input the source cluster ID to search for the source poolId</p>
     * @param string $UniqVpcId <p>VPC network ID</p>
     * @param string $UniqSubnetId <p>Subnet ID</p>
     * @param string $ClusterName <p>Cluster name, length less than 64 characters. Each character value ranges from uppercase/lowercase letters, digits, to special symbols ('-', '_', '.').</p>
     * @param integer $RollbackId <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
     * @param string $ExpectTime <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     * @param integer $AutoVoucher <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
     * @param array $ResourceTags <p>tag Array information that should be bound for cluster creation</p>
     * @param string $DbMode <p>DB type<br>Selectable when DbType is MYSQL (default NORMAL):</p><li>NORMAL</li><li>SERVERLESS</li>
     * @param float $MinCpu <p>Required when DbMode is SEVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
     * @param float $MaxCpu <p>Required when DbMode is SEVERLESS:<br>Maximum value of cpu. For the optional range, see the API response of DescribeServerlessInstanceSpecs.</p>
     * @param string $AutoPause <p>When DbMode is SEVERLESS, whether to automatically pause within specified clusters. Optional range</p><li>yes</li><li>no</li>Default value: yes
     * @param integer $AutoPauseDelay <p>When DbMode is SEVERLESS, specify the delay for Cluster Auto-Pause in seconds, optional range [600,691200]<br>Default value: 600</p>
     * @param array $SecurityGroupIds <p>Security group id array</p>
     * @param array $AlarmPolicyIds <p>Alarm policy Id array</p>
     * @param array $ClusterParams <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive.</p>
     * @param integer $ParamTemplateId <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
     * @param array $InstanceInitInfos <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
     * @param integer $DealMode <p>0-Place order and pay 1-Placing order</p>
     * @param integer $PayMode <p>Pay-per-compute-node model: 0-Pay-As-You-Go, 1-Prepayment</p>
     * @param integer $TimeSpan <p>Time</p>
     * @param string $TimeUnit <p>Unit</p>
     * @param array $RollbackDatabases <p>Rollback database info</p>
     * @param array $RollbackTables <p>Roll back table information</p>
     * @param array $OriginalROInstanceList <p>Original ro instance information</p>
     * @param integer $ProjectId <p>Project ID.</p>
     * @param string $AutoArchive <p>Whether to enable archive. Optional range <li>yes</li><li>no</li> Default value: yes</p>
     * @param boolean $FromSaveBackup <p>Whether to restore from the saved backup</p>
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

        if (array_key_exists("FromSaveBackup",$param) and $param["FromSaveBackup"] !== null) {
            $this->FromSaveBackup = $param["FromSaveBackup"];
        }
    }
}
