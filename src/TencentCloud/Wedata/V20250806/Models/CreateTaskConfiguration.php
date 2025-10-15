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
 * Creates task configuration information.
 *
 * @method string getResourceGroup() Obtain Resource Group ID: Must be obtained via DescribeNormalSchedulerExecutorGroups API to get the ExecutorGroupId.
 * @method void setResourceGroup(string $ResourceGroup) Set Resource Group ID: Must be obtained via DescribeNormalSchedulerExecutorGroups API to get the ExecutorGroupId.
 * @method string getCodeContent() Obtain Base64 encoding of the code content.
 * @method void setCodeContent(string $CodeContent) Set Base64 encoding of the code content.
 * @method array getTaskExtConfigurationList() Obtain Specifies the configuration list of task extended attributes.
 * @method void setTaskExtConfigurationList(array $TaskExtConfigurationList) Set Specifies the configuration list of task extended attributes.
 * @method string getDataCluster() Obtain Cluster ID
 * @method void setDataCluster(string $DataCluster) Set Cluster ID
 * @method string getBrokerIp() Obtain Specifies the running node.
 * @method void setBrokerIp(string $BrokerIp) Set Specifies the running node.
 * @method string getYarnQueue() Obtain Resource Pool Queue Name: Must be obtained using DescribeProjectClusterQueues API.
 * @method void setYarnQueue(string $YarnQueue) Set Resource Pool Queue Name: Must be obtained using DescribeProjectClusterQueues API.
 * @method string getSourceServiceId() Obtain Source Data Source ID - One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
 * @method void setSourceServiceId(string $SourceServiceId) Set Source Data Source ID - One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
 * @method string getTargetServiceId() Obtain Target data source ID- One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
 * @method void setTargetServiceId(string $TargetServiceId) Set Target data source ID- One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
 * @method array getTaskSchedulingParameterList() Obtain Scheduling parameter.
 * @method void setTaskSchedulingParameterList(array $TaskSchedulingParameterList) Set Scheduling parameter.
 * @method string getBundleId() Obtain ID used by the Bundle.
 * @method void setBundleId(string $BundleId) Set ID used by the Bundle.
 * @method string getBundleInfo() Obtain Bundle info.
 * @method void setBundleInfo(string $BundleInfo) Set Bundle info.
 */
class CreateTaskConfiguration extends AbstractModel
{
    /**
     * @var string Resource Group ID: Must be obtained via DescribeNormalSchedulerExecutorGroups API to get the ExecutorGroupId.
     */
    public $ResourceGroup;

    /**
     * @var string Base64 encoding of the code content.
     */
    public $CodeContent;

    /**
     * @var array Specifies the configuration list of task extended attributes.
     */
    public $TaskExtConfigurationList;

    /**
     * @var string Cluster ID
     */
    public $DataCluster;

    /**
     * @var string Specifies the running node.
     */
    public $BrokerIp;

    /**
     * @var string Resource Pool Queue Name: Must be obtained using DescribeProjectClusterQueues API.
     */
    public $YarnQueue;

    /**
     * @var string Source Data Source ID - One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
     */
    public $SourceServiceId;

    /**
     * @var string Target data source ID- One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
     */
    public $TargetServiceId;

    /**
     * @var array Scheduling parameter.
     */
    public $TaskSchedulingParameterList;

    /**
     * @var string ID used by the Bundle.
     */
    public $BundleId;

    /**
     * @var string Bundle info.
     */
    public $BundleInfo;

    /**
     * @param string $ResourceGroup Resource Group ID: Must be obtained via DescribeNormalSchedulerExecutorGroups API to get the ExecutorGroupId.
     * @param string $CodeContent Base64 encoding of the code content.
     * @param array $TaskExtConfigurationList Specifies the configuration list of task extended attributes.
     * @param string $DataCluster Cluster ID
     * @param string $BrokerIp Specifies the running node.
     * @param string $YarnQueue Resource Pool Queue Name: Must be obtained using DescribeProjectClusterQueues API.
     * @param string $SourceServiceId Source Data Source ID - One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
     * @param string $TargetServiceId Target data source ID- One or more IDs separated by semicolons (;). Retrieve IDs using the DescribeDataSourceWithoutInfo API.
     * @param array $TaskSchedulingParameterList Scheduling parameter.
     * @param string $BundleId ID used by the Bundle.
     * @param string $BundleInfo Bundle info.
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
        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
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

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
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
