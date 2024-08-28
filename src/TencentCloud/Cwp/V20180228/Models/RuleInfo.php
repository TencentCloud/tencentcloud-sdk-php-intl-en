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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index Rule
 *
 * @method FullTextInfo getFullText() Obtain Full-text index configurations
 * @method void setFullText(FullTextInfo $FullText) Set Full-text index configurations
 * @method KeyValueInfo getKeyValue() Obtain Key-value index configurations
 * @method void setKeyValue(KeyValueInfo $KeyValue) Set Key-value index configurations
 * @method KeyValueInfo getTag() Obtain Meta field index configuration
 * @method void setTag(KeyValueInfo $Tag) Set Meta field index configuration
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var FullTextInfo Full-text index configurations
     */
    public $FullText;

    /**
     * @var KeyValueInfo Key-value index configurations
     */
    public $KeyValue;

    /**
     * @var KeyValueInfo Meta field index configuration
     */
    public $Tag;

    /**
     * @param FullTextInfo $FullText Full-text index configurations
     * @param KeyValueInfo $KeyValue Key-value index configurations
     * @param KeyValueInfo $Tag Meta field index configuration
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
        if (array_key_exists("FullText",$param) and $param["FullText"] !== null) {
            $this->FullText = new FullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new KeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new KeyValueInfo();
            $this->Tag->deserialize($param["Tag"]);
        }
    }
}
