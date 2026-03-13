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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataFlow request structure.
 *
 * @method string getFileSystemId() Obtain File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method string getDataFlowId() Obtain Data flow ID, returned by creating a data flow.
 * @method void setDataFlowId(string $DataFlowId) Set Data flow ID, returned by creating a data flow.
 * @method integer getLimit() Obtain Number of query return values. it is 20 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of query return values. it is 20 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getCfsVersion() Obtain File system version; version number: v1.5, v3.0, v3.1, v4.0.
 * @method void setCfsVersion(string $CfsVersion) Set File system version; version number: v1.5, v3.0, v3.1, v4.0.
 */
class DescribeDataFlowRequest extends AbstractModel
{
    /**
     * @var string File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     */
    public $FileSystemId;

    /**
     * @var string Data flow ID, returned by creating a data flow.
     */
    public $DataFlowId;

    /**
     * @var integer Number of query return values. it is 20 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string File system version; version number: v1.5, v3.0, v3.1, v4.0.
     */
    public $CfsVersion;

    /**
     * @param string $FileSystemId File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     * @param string $DataFlowId Data flow ID, returned by creating a data flow.
     * @param integer $Limit Number of query return values. it is 20 by default, and the maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $CfsVersion File system version; version number: v1.5, v3.0, v3.1, v4.0.
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }
    }
}
