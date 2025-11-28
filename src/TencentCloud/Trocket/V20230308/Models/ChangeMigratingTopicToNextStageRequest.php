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
 * ChangeMigratingTopicToNextStage request structure.
 *
 * @method string getTaskId() Obtain Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method void setTaskId(string $TaskId) Set Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

 * @method array getTopicNameList() Obtain List of topic names. topic name can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the api [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in data type.

 * @method void setTopicNameList(array $TopicNameList) Set List of topic names. topic name can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the api [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in data type.

 * @method array getNamespaceList() Obtain Namespace list. It is valid only for 4.x clusters and has a one-to-one relationship with TopicNameList. The list can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in Data Type.
 * @method void setNamespaceList(array $NamespaceList) Set Namespace list. It is valid only for 4.x clusters and has a one-to-one relationship with TopicNameList. The list can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in Data Type.
 */
class ChangeMigratingTopicToNextStageRequest extends AbstractModel
{
    /**
     * @var string Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

     */
    public $TaskId;

    /**
     * @var array List of topic names. topic name can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the api [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in data type.

     */
    public $TopicNameList;

    /**
     * @var array Namespace list. It is valid only for 4.x clusters and has a one-to-one relationship with TopicNameList. The list can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in Data Type.
     */
    public $NamespaceList;

    /**
     * @param string $TaskId Task ID. It can be obtained from [SmoothMigrationTaskItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem) returned by the API [DescribeSmoothMigrationTaskList](https://www.tencentcloud.comom/document/api/1493/119997?from_cn_redirect=1) or from the console.

     * @param array $TopicNameList List of topic names. topic name can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the api [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in data type.

     * @param array $NamespaceList Namespace list. It is valid only for 4.x clusters and has a one-to-one relationship with TopicNameList. The list can be obtained from [MigratingTopic](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#MigratingTopic) returned by the API [DescribeMigratingTopicList](https://www.tencentcloud.comom/document/api/1493/118007?from_cn_redirect=1) in Data Type.
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

        if (array_key_exists("TopicNameList",$param) and $param["TopicNameList"] !== null) {
            $this->TopicNameList = $param["TopicNameList"];
        }

        if (array_key_exists("NamespaceList",$param) and $param["NamespaceList"] !== null) {
            $this->NamespaceList = $param["NamespaceList"];
        }
    }
}
