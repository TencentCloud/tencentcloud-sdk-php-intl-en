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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shipping content
 *
 * @method boolean getEnableTag() Obtain Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnableTag(boolean $EnableTag) Set Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getMetaFields() Obtain List of metadata to ship. Currently, only __SOURCE__, __FILENAME__, and __TIMESTAMP__ are supported.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setMetaFields(array $MetaFields) Set List of metadata to ship. Currently, only __SOURCE__, __FILENAME__, and __TIMESTAMP__ are supported.
Note: This field may return `null`, indicating that no valid value was found.
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnableTag;

    /**
     * @var array List of metadata to ship. Currently, only __SOURCE__, __FILENAME__, and __TIMESTAMP__ are supported.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $MetaFields;

    /**
     * @param boolean $EnableTag Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $MetaFields List of metadata to ship. Currently, only __SOURCE__, __FILENAME__, and __TIMESTAMP__ are supported.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }
    }
}
