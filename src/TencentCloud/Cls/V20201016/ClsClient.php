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

namespace TencentCloud\Cls\V20201016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cls\V20201016\Models as Models;

/**
 * @method Models\ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroup(Models\ApplyConfigToMachineGroupRequest $req) This API is used to apply the collection configuration to the specified machine group.
 * @method Models\CreateAlarmResponse CreateAlarm(Models\CreateAlarmRequest $req) This API is used to create an alarm policy.
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) This API is used to create an alarm notification template.
 * @method Models\CreateAsyncContextTaskResponse CreateAsyncContextTask(Models\CreateAsyncContextTaskRequest $req) This API is used to create an offline context search task.
 * @method Models\CreateAsyncSearchTaskResponse CreateAsyncSearchTask(Models\CreateAsyncSearchTaskRequest $req) This API is used to create an offline search task.
 * @method Models\CreateConfigResponse CreateConfig(Models\CreateConfigRequest $req) This API is used to create a collection rule configuration.
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) This API is used to create a log download task.
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) This API is used to create an index.
 * @method Models\CreateLogsetResponse CreateLogset(Models\CreateLogsetRequest $req) This API is used to create a logset. The ID of the created logset is returned.
 * @method Models\CreateMachineGroupResponse CreateMachineGroup(Models\CreateMachineGroupRequest $req) This API is used to create a machine group.
 * @method Models\CreateShipperResponse CreateShipper(Models\CreateShipperRequest $req) This API is used to create a shipping rule. To use this API, you need to grant CLS the write permission of the specified bucket.
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to create a log topic.
 * @method Models\DeleteAlarmResponse DeleteAlarm(Models\DeleteAlarmRequest $req) This API is used to delete an alarm policy.
 * @method Models\DeleteAlarmNoticeResponse DeleteAlarmNotice(Models\DeleteAlarmNoticeRequest $req) This API is used to delete an alarm notification template.
 * @method Models\DeleteAsyncContextTaskResponse DeleteAsyncContextTask(Models\DeleteAsyncContextTaskRequest $req) This API is used to delete an offline context search task.
 * @method Models\DeleteAsyncSearchTaskResponse DeleteAsyncSearchTask(Models\DeleteAsyncSearchTaskRequest $req) This API is used to delete an offline search task.
 * @method Models\DeleteConfigResponse DeleteConfig(Models\DeleteConfigRequest $req) This API is used to delete a collection rule configuration.
 * @method Models\DeleteConfigFromMachineGroupResponse DeleteConfigFromMachineGroup(Models\DeleteConfigFromMachineGroupRequest $req) This API is used to delete the collection configuration applied to a machine group.
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) This API is used to delete a log download task.
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) This API is used to delete the index configuration of a log topic.
 * @method Models\DeleteLogsetResponse DeleteLogset(Models\DeleteLogsetRequest $req) This API is used to delete a logset.
 * @method Models\DeleteMachineGroupResponse DeleteMachineGroup(Models\DeleteMachineGroupRequest $req) This API is used to delete a machine group.
 * @method Models\DeleteShipperResponse DeleteShipper(Models\DeleteShipperRequest $req) This API is used to delete a shipping rule.
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete a log topic.
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) This API is used to get the list of alarm notification templates.
 * @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) This API is used to get the list of alarm policies.
 * @method Models\DescribeAsyncContextResultResponse DescribeAsyncContextResult(Models\DescribeAsyncContextResultRequest $req) This API is used to get the result of an offline context search task.
 * @method Models\DescribeAsyncContextTasksResponse DescribeAsyncContextTasks(Models\DescribeAsyncContextTasksRequest $req) This API is used to get the list of offline context search tasks.
 * @method Models\DescribeAsyncSearchResultResponse DescribeAsyncSearchResult(Models\DescribeAsyncSearchResultRequest $req) This API is used to get the result of an offline search task.
 * @method Models\DescribeAsyncSearchTasksResponse DescribeAsyncSearchTasks(Models\DescribeAsyncSearchTasksRequest $req) This API is used to get the list of offline search tasks.
 * @method Models\DescribeConfigMachineGroupsResponse DescribeConfigMachineGroups(Models\DescribeConfigMachineGroupsRequest $req) This API is used to get the machine group bound to a collection rule configuration.
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) This API is used to get a collection rule configuration.
 * @method Models\DescribeExportsResponse DescribeExports(Models\DescribeExportsRequest $req) This API is used to get the list of log download tasks.
 * @method Models\DescribeIndexResponse DescribeIndex(Models\DescribeIndexRequest $req) This API is used to get the index configuration information.
 * @method Models\DescribeLogContextResponse DescribeLogContext(Models\DescribeLogContextRequest $req) This API is used to search for content in the log context.
 * @method Models\DescribeLogsetsResponse DescribeLogsets(Models\DescribeLogsetsRequest $req) This API is used to get the list of logsets.
 * @method Models\DescribeMachineGroupConfigsResponse DescribeMachineGroupConfigs(Models\DescribeMachineGroupConfigsRequest $req) This API is used to get the collection rule configuration bound to a machine group.
 * @method Models\DescribeMachineGroupsResponse DescribeMachineGroups(Models\DescribeMachineGroupsRequest $req) This API is used to get the list of machine groups.
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) This API is used to get the machine status in the specified machine group.
 * @method Models\DescribePartitionsResponse DescribePartitions(Models\DescribePartitionsRequest $req) This API is used to get the list of topic partitions.
 * @method Models\DescribeShipperTasksResponse DescribeShipperTasks(Models\DescribeShipperTasksRequest $req) This API is used to get the list of shipping tasks.
 * @method Models\DescribeShippersResponse DescribeShippers(Models\DescribeShippersRequest $req) This API is used to get the list of shipping rules.
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req)  This API is used to get the list of log topics and supports pagination.
 * @method Models\GetAlarmLogResponse GetAlarmLog(Models\GetAlarmLogRequest $req) This API is used to get the records of alarm tasks.
 * @method Models\MergePartitionResponse MergePartition(Models\MergePartitionRequest $req) This API is used to merge a topic partition in read/write state. During merge, a topic partition ID can be specified, and CLS will automatically merge the partition adjacent to the right of the range.
 * @method Models\ModifyAlarmResponse ModifyAlarm(Models\ModifyAlarmRequest $req) This API is used to modify an alarm policy. At least one valid configuration item needs to be modified.
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) This API is used to modify an alarm notification template.
 * @method Models\ModifyConfigResponse ModifyConfig(Models\ModifyConfigRequest $req) This API is used to modify a collection rule configuration.
 * @method Models\ModifyIndexResponse ModifyIndex(Models\ModifyIndexRequest $req) This API is used to modify the index configuration.

 * @method Models\ModifyLogsetResponse ModifyLogset(Models\ModifyLogsetRequest $req) This API is used to modify a logset.
 * @method Models\ModifyMachineGroupResponse ModifyMachineGroup(Models\ModifyMachineGroupRequest $req) This API is used to modify a machine group.
 * @method Models\ModifyShipperResponse ModifyShipper(Models\ModifyShipperRequest $req) This API is used to modify an existing shipping rule. To use this API, you need to grant CLS the write permission of the specified bucket.
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) This API is used to modify a log topic.
 * @method Models\RetryShipperTaskResponse RetryShipperTask(Models\RetryShipperTaskRequest $req) This API is used to retry a failed shipping task.
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) This API is used to search for logs.
 * @method Models\SplitPartitionResponse SplitPartition(Models\SplitPartitionRequest $req) This API is used to split a topic partition.
 * @method Models\UploadLogResponse UploadLog(Models\UploadLogRequest $req) ## Feature Description

This API is used to write a log to the specified log topic.

CLS provides the following two modes:

#### Load balancing mode

In this mode, logs will be automatically written to a target partition among all readable/writable partitions under the current log topic based on the load balancing principle. This mode is suitable for scenarios where the sequential consumption is not needed.

#### Hash routing mode

In this mode, data will be written to a target partition that meets the range requirements based on the hash value (X-CLS-HashKey) carried by data. For example, a log source can be bound to a topic partition through `hashkey`, strictly guaranteeing the sequence of the data written to and consumed in this partition.

In addition, CLS allows you to upload logs in the following two modes:


## Request

#### Request header parameters

The `X-CLS-HashKey` request header indicates that logs are written to the CLS topic partitions with a range corresponding to the hashkey route, strictly guaranteeing the write sequence of logs to each topic partition for sequential consumption.

| Field | Type | Location | Required | Description |
| ------------------ | ------ | ------ | -------- | ------------------------------------------------------------ |
| X-CLS-HashKey | string | header | No       | Logs are written to the corresponding topic partition according to `hashkey` |
| X-CLS-TopicId      | String | header | Yes       | Topic ID                                                       |                                                 |
| Content-Type | String | header | Yes | Protocol type of the request parameter. Currently, only the PB protocol is supported. Please enter "application/octet-stream". |
| X-TC-Action | String |	header | Yes | Common parameter. The value used for this API: UploadLog.                   
| X-TC-Region | String | header | Yes	  | Common parameter. This parameter is not required for this API.                       
| X-TC-Version | String | header | Yes | Common parameter. The value used for this API: 2020-10-16.                  

#### Input parameters (PB protocol)

| Field | Type | Location | Required | Description |
| ------------ | ------- | ---- | ---- | ------------------------------------------------------------ |
| logGroupList | message | pb    | Yes   | The logGroup list, which describes the encapsulated log groups. No more than five `logGroup` values are recommended.                     |

`LogGroup` description:

| Field | Required | Description |
| ----------- | -------- | ------------------------------------------------------------ |
| logs        | Yes       | Log array consisting of multiple `Log` values. The `Log` indicates a log, and a `LogGroup` can contain up to 10,000 `Log` values. |
| contextFlow | No       | Unique LogGroup ID, which should be passed in if the context feature needs to be used. Format: "{context ID}-{LogGroupID}". <br>Context ID: uniquely identifies the context (a series of log files that are continuously scrolling or a series of logs that need to be sequenced), which is a 64-bit integer hex string. <br>LogGroupID: a 64-bit integer hex string that continuously increases, such as "102700A66102516A-59F59".                        |
| filename    | No       | Log filename                                                   |
| source      | No       | Log source, which is generally the server IP                           |
| logTags     | No       | Tag list of the log                                               |

`Log` description:

| Field | Required | Description |
| -------- | -------- | ------------------------------------------------------------ |
| time | Yes | UNIX timestamp of log time in seconds or milliseconds (recommended) |
| contents | No | Log content in `key-value` format. A log can contain multiple `key-value` pairs. |

`Content` description:

| Field | Required | Description |
| ------ | -------- | ------------------------------------------------------------ |
| key    | Yes       | Key of a field group in one log, which cannot start with `_`.                 |
| value  | Yes       | Value of a field group, which cannot exceed 1 MB in one log. The total value cannot exceed 5 MB in `LogGroup`. |

`LogTag` description:

| Field | Required | Description |
| ------ | -------- | -------------------------------- |
| key    | Yes       | Key of a custom tag                 |
| value  | Yes       | Value corresponding to the custom tag key |

## PB Compilation Sample

This sample describes how to use the protoc compiler to compile the PB description file into a log upload API in C++.

> ?Currently, protoc supports compilation in multiple programming languages such as Java, C++, and Python. For more information, please see [protoc](https://github.com/protocolbuffers/protobuf).

#### 1. Install Protocol Buffer

Download [Protocol Buffer](https://main.qcloudimg.com/raw/d7810aaf8b3073fbbc9d4049c21532aa/protobuf-2.6.1.tar.gz), decompress the package, and install the tool. The version used in the sample is protobuf 2.6.1 running on CentOS 7.3. Run the following command to decompress the `protobuf-2.6.1.tar.gz` package to the `/usr/local` directory and enter the directory:

```
tar -zxvf protobuf-2.6.1.tar.gz -C /usr/local/ && cd /usr/local/protobuf-2.6.1
```

Run the following commands to start compilation and installation, and configure the environment variables:

```
[root@VM_0_8_centos protobuf-2.6.1]# ./configure 
[root@VM_0_8_centos protobuf-2.6.1]# make && make install
[root@VM_0_8_centos protobuf-2.6.1]# export PATH=$PATH:/usr/local/protobuf-2.6.1/bin
```

After the compilation succeeds, run the following command to check the version:

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --version
liprotoc 2.6.1
```

#### 2. Create a PB description file

A PB description file is an agreed-on data exchange format for communication. To upload logs, please compile the specified protocol format to an API in the target programming language and add the API to the project code. For more information, please see [protoc](https://github.com/protocolbuffers/protobuf).

Create a PB message description file `cls.proto` based on the PB data format content specified by CLS.

> !The PB description file content cannot be modified, and the filename must end with `.proto`.

The content of `cls.proto` (PB description file) is as follows:

```
package cls;

message Log
{
    message Content
    {
        required string key   = 1; // Key of each field group
        required string value = 2; // Value of each field group
    }
    required int64   time     = 1; // Unix timestamp
    repeated Content contents = 2; // Multiple `key-value` pairs in one log
}

message LogTag
{
    required string key       = 1;
    required string value     = 2;
}

message LogGroup
{
    repeated Log    logs        = 1; // Log array consisting of multiple logs
    optional string contextFlow = 2; // This parameter does not take effect currently
    optional string filename    = 3; // Log filename
    optional string source      = 4; // Log source, which is generally the server IP
    repeated LogTag logTags     = 5;
}

message LogGroupList
{
    repeated LogGroup logGroupList = 1; // Log group list
}
```

#### 3. Compile and generate the API

This sample uses the proto compiler to generate a C++ file in the same directory as the `cls.proto` file. Run the following compilation commands:

```
protoc --cpp_out=./ ./cls.proto 
```

> ?`--cpp_out=./` indicates that the file will be compiled in cpp format and output to the current directory. `./cls.proto` indicates the `cls.proto` description file in the current directory.

After the compilation succeeds, the code file in the corresponding programming language will be generated. This sample generates the `cls.pb.h` header file and [cls.pb.cc](http://cls.pb.cc) code implementation file as shown below:

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --cpp_out=./ ./cls.proto
[root@VM_0_8_centos protobuf-2.6.1]# ls
cls.pb.cc cls.pb.h cls.proto
```

#### 4. Call

Import the generated `cls.pb.h` header file into the code and call the API for data format encapsulation.
 */

class ClsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cls.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cls";

    /**
     * @var string
     */
    protected $version = "2020-10-16";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cls")."\\"."V20201016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
