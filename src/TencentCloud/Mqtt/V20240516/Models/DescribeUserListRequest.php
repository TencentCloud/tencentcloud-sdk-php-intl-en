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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method array getFilters() Obtain Specifies the supported fields in the query criteria list.
Username: specifies the Username for filtering, supports fuzzy filtering. type: String.
 * @method void setFilters(array $Filters) Set Specifies the supported fields in the query criteria list.
Username: specifies the Username for filtering, supports fuzzy filtering. type: String.
 * @method integer getOffset() Obtain Query start position. default value: 0.
 * @method void setOffset(integer $Offset) Set Query start position. default value: 0.
 * @method integer getLimit() Obtain Specifies the query result limit count. default value: 20. maximum value: 100.
 * @method void setLimit(integer $Limit) Set Specifies the query result limit count. default value: 20. maximum value: 100.
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var string Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     */
    public $InstanceId;

    /**
     * @var array Specifies the supported fields in the query criteria list.
Username: specifies the Username for filtering, supports fuzzy filtering. type: String.
     */
    public $Filters;

    /**
     * @var integer Query start position. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Specifies the query result limit count. default value: 20. maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     * @param array $Filters Specifies the supported fields in the query criteria list.
Username: specifies the Username for filtering, supports fuzzy filtering. type: String.
     * @param integer $Offset Query start position. default value: 0.
     * @param integer $Limit Specifies the query result limit count. default value: 20. maximum value: 100.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
