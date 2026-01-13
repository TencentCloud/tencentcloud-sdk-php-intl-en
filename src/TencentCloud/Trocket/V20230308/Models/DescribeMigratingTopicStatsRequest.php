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
 * DescribeMigratingTopicStats request structure.
 *
 * @method string getTaskId() Obtain Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.com/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method void setTaskId(string $TaskId) Set Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.com/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method string getTopicName() Obtain Topic name. It can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.

 * @method void setTopicName(string $TopicName) Set Topic name. It can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.

 * @method string getNamespace() Obtain Namespace. This parameter is valid only for migration to a 4.x cluster. The namespace can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.
 * @method void setNamespace(string $Namespace) Set Namespace. This parameter is valid only for migration to a 4.x cluster. The namespace can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.
 */
class DescribeMigratingTopicStatsRequest extends AbstractModel
{
    /**
     * @var string Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.com/document/api/1493/119997?from_cn_redirect=1) or from the console.

     */
    public $TaskId;

    /**
     * @var string Topic name. It can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.

     */
    public $TopicName;

    /**
     * @var string Namespace. This parameter is valid only for migration to a 4.x cluster. The namespace can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.
     */
    public $Namespace;

    /**
     * @param string $TaskId Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.com/document/api/1493/119997?from_cn_redirect=1) or from the console.

     * @param string $TopicName Topic name. It can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.

     * @param string $Namespace Namespace. This parameter is valid only for migration to a 4.x cluster. The namespace can be obtained from [MigratingTopic](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.com/document/api/1493/118007?from_cn_redirect=1) in Data Type.
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
