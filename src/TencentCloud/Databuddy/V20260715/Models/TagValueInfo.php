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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag value information
 *
 * @method string getTagValueId() Obtain Tag value ID
 * @method void setTagValueId(string $TagValueId) Set Tag value ID
 * @method string getTagValue() Obtain Tag value content. Fill in when querying. Do not pass in when writing.
 * @method void setTagValue(string $TagValue) Set Tag value content. Fill in when querying. Do not pass in when writing.
 * @method integer getSource() Obtain Tag source. See web_enum_standard.proto -> TagSource: 0=not specified 1=directly bound to user 2=inherited from user group 3=both. Populated during queries. Do not pass when writing.
 * @method void setSource(integer $Source) Set Tag source. See web_enum_standard.proto -> TagSource: 0=not specified 1=directly bound to user 2=inherited from user group 3=both. Populated during queries. Do not pass when writing.
 * @method array getGroupNames() Obtain List of user group names from the inheritance source. Empty when Source=1. Populated during queries. Do not pass when writing.
 * @method void setGroupNames(array $GroupNames) Set List of user group names from the inheritance source. Empty when Source=1. Populated during queries. Do not pass when writing.
 */
class TagValueInfo extends AbstractModel
{
    /**
     * @var string Tag value ID
     */
    public $TagValueId;

    /**
     * @var string Tag value content. Fill in when querying. Do not pass in when writing.
     */
    public $TagValue;

    /**
     * @var integer Tag source. See web_enum_standard.proto -> TagSource: 0=not specified 1=directly bound to user 2=inherited from user group 3=both. Populated during queries. Do not pass when writing.
     */
    public $Source;

    /**
     * @var array List of user group names from the inheritance source. Empty when Source=1. Populated during queries. Do not pass when writing.
     */
    public $GroupNames;

    /**
     * @param string $TagValueId Tag value ID
     * @param string $TagValue Tag value content. Fill in when querying. Do not pass in when writing.
     * @param integer $Source Tag source. See web_enum_standard.proto -> TagSource: 0=not specified 1=directly bound to user 2=inherited from user group 3=both. Populated during queries. Do not pass when writing.
     * @param array $GroupNames List of user group names from the inheritance source. Empty when Source=1. Populated during queries. Do not pass when writing.
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
        if (array_key_exists("TagValueId",$param) and $param["TagValueId"] !== null) {
            $this->TagValueId = $param["TagValueId"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupNames",$param) and $param["GroupNames"] !== null) {
            $this->GroupNames = $param["GroupNames"];
        }
    }
}
