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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigratingGroupStats request structure.
 *
 * @method string getTaskId() Obtain Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.
 * @method void setTaskId(string $TaskId) Set Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.
 * @method string getGroupName() Obtain Specifies the consumer group name. it can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or in the console.

 * @method void setGroupName(string $GroupName) Set Specifies the consumer group name. it can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or in the console.

 * @method string getNamespace() Obtain Namespace. it is valid only when migrated to 4.x clusters. the namespace can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or from the console.
 * @method void setNamespace(string $Namespace) Set Namespace. it is valid only when migrated to 4.x clusters. the namespace can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or from the console.
 */
class DescribeMigratingGroupStatsRequest extends AbstractModel
{
    /**
     * @var string Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.
     */
    public $TaskId;

    /**
     * @var string Specifies the consumer group name. it can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or in the console.

     */
    public $GroupName;

    /**
     * @var string Namespace. it is valid only when migrated to 4.x clusters. the namespace can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or from the console.
     */
    public $Namespace;

    /**
     * @param string $TaskId Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.
     * @param string $GroupName Specifies the consumer group name. it can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or in the console.

     * @param string $Namespace Namespace. it is valid only when migrated to 4.x clusters. the namespace can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the api [DescribeSourceClusterGroupList](https://www.tencentcloud.comom/document/api/1493/118006?from_cn_redirect=1) or from the console.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
