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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task configuration information.
 *
 * @method string getCodeContent() Obtain Base64 encoding of the code content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodeContent(string $CodeContent) Set Base64 encoding of the code content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTaskExtConfigurationList() Obtain Extended attribute configuration list of the task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskExtConfigurationList(array $TaskExtConfigurationList) Set Extended attribute configuration list of the task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataCluster() Obtain Cluster ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataCluster(string $DataCluster) Set Cluster ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBrokerIp() Obtain Specifies the specified running node.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBrokerIp(string $BrokerIp) Set Specifies the specified running node.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getYarnQueue() Obtain Resource pool queue name. need to pass through DescribeProjectClusterQueues to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setYarnQueue(string $YarnQueue) Set Resource pool queue name. need to pass through DescribeProjectClusterQueues to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceServiceId() Obtain Source data source ID, separated by;, obtained through DescribeDataSourceWithoutInfo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceServiceId(string $SourceServiceId) Set Source data source ID, separated by;, obtained through DescribeDataSourceWithoutInfo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceServiceType() Obtain Data source type. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceServiceType(string $SourceServiceType) Set Data source type. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceServiceName() Obtain Data source name. use semicolons to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceServiceName(string $SourceServiceName) Set Data source name. use semicolons to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetServiceId() Obtain TargetTarget data source ID, separated by semicolons. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetServiceId(string $TargetServiceId) Set TargetTarget data source ID, separated by semicolons. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetServiceType() Obtain Target data source type. uses ; for separation. needs to pass through DescribeDataSourceWithoutInfo for retrieval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetServiceType(string $TargetServiceType) Set Target data source type. uses ; for separation. needs to pass through DescribeDataSourceWithoutInfo for retrieval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetServiceName() Obtain Target data source name. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetServiceName(string $TargetServiceName) Set Target data source name. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroup() Obtain Resource group ID: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroup(string $ResourceGroup) Set Resource group ID: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupName() Obtain Resource group name: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupName.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupName.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTaskSchedulingParameterList() Obtain Specifies the scheduling parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskSchedulingParameterList(array $TaskSchedulingParameterList) Set Specifies the scheduling parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBundleId() Obtain ID used by the Bundle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBundleId(string $BundleId) Set ID used by the Bundle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBundleInfo() Obtain Bundle info.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBundleInfo(string $BundleInfo) Set Bundle info.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskConfiguration extends AbstractModel
{
    /**
     * @var string Base64 encoding of the code content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CodeContent;

    /**
     * @var array Extended attribute configuration list of the task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskExtConfigurationList;

    /**
     * @var string Cluster ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataCluster;

    /**
     * @var string Specifies the specified running node.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BrokerIp;

    /**
     * @var string Resource pool queue name. need to pass through DescribeProjectClusterQueues to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $YarnQueue;

    /**
     * @var string Source data source ID, separated by;, obtained through DescribeDataSourceWithoutInfo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceServiceId;

    /**
     * @var string Data source type. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceServiceType;

    /**
     * @var string Data source name. use semicolons to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceServiceName;

    /**
     * @var string TargetTarget data source ID, separated by semicolons. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetServiceId;

    /**
     * @var string Target data source type. uses ; for separation. needs to pass through DescribeDataSourceWithoutInfo for retrieval.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetServiceType;

    /**
     * @var string Target data source name. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetServiceName;

    /**
     * @var string Resource group ID: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupId.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroup;

    /**
     * @var string Resource group name: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupName.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupName;

    /**
     * @var array Specifies the scheduling parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskSchedulingParameterList;

    /**
     * @var string ID used by the Bundle.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BundleId;

    /**
     * @var string Bundle info.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BundleInfo;

    /**
     * @param string $CodeContent Base64 encoding of the code content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TaskExtConfigurationList Extended attribute configuration list of the task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataCluster Cluster ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BrokerIp Specifies the specified running node.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $YarnQueue Resource pool queue name. need to pass through DescribeProjectClusterQueues to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceServiceId Source data source ID, separated by;, obtained through DescribeDataSourceWithoutInfo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceServiceType Data source type. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceServiceName Data source name. use semicolons to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetServiceId TargetTarget data source ID, separated by semicolons. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetServiceType Target data source type. uses ; for separation. needs to pass through DescribeDataSourceWithoutInfo for retrieval.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetServiceName Target data source name. use semicolon to separate. need to pass through DescribeDataSourceWithoutInfo to obtain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroup Resource group ID: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupId.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupName Resource group name: need to pass through DescribeNormalSchedulerExecutorGroups to obtain ExecutorGroupName.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TaskSchedulingParameterList Specifies the scheduling parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BundleId ID used by the Bundle.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BundleInfo Bundle info.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CodeContent",$param) and $param["CodeContent"] !== null) {
            $this->CodeContent = $param["CodeContent"];
        }

        if (array_key_exists("TaskExtConfigurationList",$param) and $param["TaskExtConfigurationList"] !== null) {
            $this->TaskExtConfigurationList = [];
            foreach ($param["TaskExtConfigurationList"] as $key => $value){
                $obj = new TaskExtParameter();
                $obj->deserialize($value);
                array_push($this->TaskExtConfigurationList, $obj);
            }
        }

        if (array_key_exists("DataCluster",$param) and $param["DataCluster"] !== null) {
            $this->DataCluster = $param["DataCluster"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("SourceServiceType",$param) and $param["SourceServiceType"] !== null) {
            $this->SourceServiceType = $param["SourceServiceType"];
        }

        if (array_key_exists("SourceServiceName",$param) and $param["SourceServiceName"] !== null) {
            $this->SourceServiceName = $param["SourceServiceName"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("TargetServiceName",$param) and $param["TargetServiceName"] !== null) {
            $this->TargetServiceName = $param["TargetServiceName"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("TaskSchedulingParameterList",$param) and $param["TaskSchedulingParameterList"] !== null) {
            $this->TaskSchedulingParameterList = [];
            foreach ($param["TaskSchedulingParameterList"] as $key => $value){
                $obj = new TaskSchedulingParameter();
                $obj->deserialize($value);
                array_push($this->TaskSchedulingParameterList, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
