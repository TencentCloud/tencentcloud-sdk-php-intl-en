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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeErrorLogData request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method integer getStartTime() Obtain Start timestamp. For example, 1585142640, in seconds.
 * @method void setStartTime(integer $StartTime) Set Start timestamp. For example, 1585142640, in seconds.
 * @method integer getEndTime() Obtain End timestamp. For example, 1585142640, in seconds.
 * @method void setEndTime(integer $EndTime) Set End timestamp. For example, 1585142640, in seconds.
 * @method array getKeyWords() Obtain Keyword list to match, supports up to 15 keywords with fuzzy matching support.
 * @method void setKeyWords(array $KeyWords) Set Keyword list to match, supports up to 15 keywords with fuzzy matching support.
 * @method integer getLimit() Obtain The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
 * @method void setLimit(integer $Limit) Set The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getInstType() Obtain This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 * @method void setInstType(string $InstType) Set This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 */
class DescribeErrorLogDataRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var integer Start timestamp. For example, 1585142640, in seconds.
     */
    public $StartTime;

    /**
     * @var integer End timestamp. For example, 1585142640, in seconds.
     */
    public $EndTime;

    /**
     * @var array Keyword list to match, supports up to 15 keywords with fuzzy matching support.
     */
    public $KeyWords;

    /**
     * @var integer The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
     */
    public $InstType;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param integer $StartTime Start timestamp. For example, 1585142640, in seconds.
     * @param integer $EndTime End timestamp. For example, 1585142640, in seconds.
     * @param array $KeyWords Keyword list to match, supports up to 15 keywords with fuzzy matching support.
     * @param integer $Limit The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $InstType This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstType",$param) and $param["InstType"] !== null) {
            $this->InstType = $param["InstType"];
        }
    }
}
