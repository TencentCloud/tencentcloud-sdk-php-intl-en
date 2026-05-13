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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getSearchWord() Obtain <p>Search keywords</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Search keywords</p>
 * @method integer getOffset() Obtain <p>Offset</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p>
 * @method integer getLimit() Obtain <p>Maximum return quantity</p><p>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum return quantity</p><p>Default value: 20</p>
 * @method array getFilters() Obtain <p>Only supports filtering by GroupState. Supported filter statuses are Empty/Stable. Note: This parameter is only supported for versions 2.8/3.2.</p>
 * @method void setFilters(array $Filters) Set <p>Only supports filtering by GroupState. Supported filter statuses are Empty/Stable. Note: This parameter is only supported for versions 2.8/3.2.</p>
 */
class DescribeGroupRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Search keywords</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>Offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>Maximum return quantity</p><p>Default value: 20</p>
     */
    public $Limit;

    /**
     * @var array <p>Only supports filtering by GroupState. Supported filter statuses are Empty/Stable. Note: This parameter is only supported for versions 2.8/3.2.</p>
     */
    public $Filters;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $SearchWord <p>Search keywords</p>
     * @param integer $Offset <p>Offset</p>
     * @param integer $Limit <p>Maximum return quantity</p><p>Default value: 20</p>
     * @param array $Filters <p>Only supports filtering by GroupState. Supported filter statuses are Empty/Stable. Note: This parameter is only supported for versions 2.8/3.2.</p>
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
