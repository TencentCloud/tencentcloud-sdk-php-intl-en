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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSTopics request structure.
 *
 * @method string getCLSRegion() Obtain Region of the logset belonging to. Valid values: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> <li>ap-chongqing: Chongqing;</li> <li>ap-nanjing: Nanjing;</li> <li>ap-shanghai: Shanghai;</li> <li>ap-singapore: Singapore.</li>
 * @method void setCLSRegion(string $CLSRegion) Set Region of the logset belonging to. Valid values: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> <li>ap-chongqing: Chongqing;</li> <li>ap-nanjing: Nanjing;</li> <li>ap-shanghai: Shanghai;</li> <li>ap-singapore: Singapore.</li>
 * @method string getLogsetId() Obtain Log Set ID of Log Topic.
 * @method void setLogsetId(string $LogsetId) Set Log Set ID of Log Topic.
 * @method array getTopicIds() Obtain Log topic ID list. If left empty, means query all log topics.
 * @method void setTopicIds(array $TopicIds) Set Log topic ID list. If left empty, means query all log topics.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 20. Maximum value: 100.
 */
class DescribeCLSTopicsRequest extends AbstractModel
{
    /**
     * @var string Region of the logset belonging to. Valid values: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> <li>ap-chongqing: Chongqing;</li> <li>ap-nanjing: Nanjing;</li> <li>ap-shanghai: Shanghai;</li> <li>ap-singapore: Singapore.</li>
     */
    public $CLSRegion;

    /**
     * @var string Log Set ID of Log Topic.
     */
    public $LogsetId;

    /**
     * @var array Log topic ID list. If left empty, means query all log topics.
     */
    public $TopicIds;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $CLSRegion Region of the logset belonging to. Valid values: <li>ap-guangzhou: Guangzhou;</li> <li>ap-beijing: Beijing;</li> <li>ap-chengdu: Chengdu;</li> <li>ap-chongqing: Chongqing;</li> <li>ap-nanjing: Nanjing;</li> <li>ap-shanghai: Shanghai;</li> <li>ap-singapore: Singapore.</li>
     * @param string $LogsetId Log Set ID of Log Topic.
     * @param array $TopicIds Log topic ID list. If left empty, means query all log topics.
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
