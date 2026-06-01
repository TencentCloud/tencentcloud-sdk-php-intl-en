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
 * ModifyInstanceTag request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method array getReplaceTags() Obtain Tags to add or modify. ReplaceTags or DeleteTags is mandatory to fill in one.
 * @method void setReplaceTags(array $ReplaceTags) Set Tags to add or modify. ReplaceTags or DeleteTags is mandatory to fill in one.
 * @method array getDeleteTags() Obtain Tag to delete. ReplaceTags or DeleteTags is mandatory to fill in one.
 * @method void setDeleteTags(array $DeleteTags) Set Tag to delete. ReplaceTags or DeleteTags is mandatory to fill in one.
 */
class ModifyInstanceTagRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var array Tags to add or modify. ReplaceTags or DeleteTags is mandatory to fill in one.
     */
    public $ReplaceTags;

    /**
     * @var array Tag to delete. ReplaceTags or DeleteTags is mandatory to fill in one.
     */
    public $DeleteTags;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param array $ReplaceTags Tags to add or modify. ReplaceTags or DeleteTags is mandatory to fill in one.
     * @param array $DeleteTags Tag to delete. ReplaceTags or DeleteTags is mandatory to fill in one.
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

        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            $this->ReplaceTags = [];
            foreach ($param["ReplaceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ReplaceTags, $obj);
            }
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }
    }
}
