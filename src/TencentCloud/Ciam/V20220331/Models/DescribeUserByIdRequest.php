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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserById request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method boolean getOriginal() Obtain Whether the content is passed through

<li> **false** </li>Default. The returned information is desensitized.
<li> **true** </li>Return the original content.
 * @method void setOriginal(boolean $Original) Set Whether the content is passed through

<li> **false** </li>Default. The returned information is desensitized.
<li> **true** </li>Return the original content.
 */
class DescribeUserByIdRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var boolean Whether the content is passed through

<li> **false** </li>Default. The returned information is desensitized.
<li> **true** </li>Return the original content.
     */
    public $Original;

    /**
     * @param string $UserStoreId User directory ID
     * @param string $UserId User ID
     * @param boolean $Original Whether the content is passed through

<li> **false** </li>Default. The returned information is desensitized.
<li> **true** </li>Return the original content.
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
