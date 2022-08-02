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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResult request structure.
 *
 * @method string getTaskId() Obtain Unique task ID
 * @method void setTaskId(string $TaskId) Set Unique task ID
 * @method string getNextToken() Obtain Pagination information returned by the last response. This parameter can be omitted for the first response, where the data will be returned from the beginning. 1,000 rows of data are returned each time.
 * @method void setNextToken(string $NextToken) Set Pagination information returned by the last response. This parameter can be omitted for the first response, where the data will be returned from the beginning. 1,000 rows of data are returned each time.
 * @method integer getMaxResults() Obtain Maximum number of returned rows. Value range: 0–1,000. Default value: 1,000.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of returned rows. Value range: 0–1,000. Default value: 1,000.
 */
class DescribeTaskResultRequest extends AbstractModel
{
    /**
     * @var string Unique task ID
     */
    public $TaskId;

    /**
     * @var string Pagination information returned by the last response. This parameter can be omitted for the first response, where the data will be returned from the beginning. 1,000 rows of data are returned each time.
     */
    public $NextToken;

    /**
     * @var integer Maximum number of returned rows. Value range: 0–1,000. Default value: 1,000.
     */
    public $MaxResults;

    /**
     * @param string $TaskId Unique task ID
     * @param string $NextToken Pagination information returned by the last response. This parameter can be omitted for the first response, where the data will be returned from the beginning. 1,000 rows of data are returned each time.
     * @param integer $MaxResults Maximum number of returned rows. Value range: 0–1,000. Default value: 1,000.
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

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
